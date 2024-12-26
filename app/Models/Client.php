<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory, CrudTrait;

    protected $fillable = [
        'name',
        'school_login_details',
        'email',
        'phone',
    ];
}
