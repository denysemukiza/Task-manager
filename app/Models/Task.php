<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // Other model methods...

    protected static function boot()
    {
        parent::boot();

        // Automatically create reminders when a task is saved
        static::saved(function ($task) {
            if (!$task->reminders()->where('reminder_time', '<=', now())->exists()) {
                $task->reminders()->create([
                    'reminder_time' => $task->deadline->subDays(3),
                    'is_sent' => false,
                ]);

                $task->reminders()->create([
                    'reminder_time' => $task->deadline->subDays(2),
                    'is_sent' => false,
                ]);

                $task->reminders()->create([
                    'reminder_time' => $task->deadline->subHours(24),
                    'is_sent' => false,
                ]);

                $task->reminders()->create([
                    'reminder_time' => $task->deadline->subHours(12),
                    'is_sent' => false,
                ]);
            }
        });
    }
}

