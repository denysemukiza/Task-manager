{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i>Home</a></li>

<x-backpack::menu-item title="Clients" icon="la la-user" :link="backpack_url('client')" />
<x-backpack::menu-item title="Tasks" icon="la la-tasks" :link="backpack_url('tasks')" />
<x-backpack::menu-item title="Reminders" icon="la la-bell" :link="backpack_url('reminders')" />
