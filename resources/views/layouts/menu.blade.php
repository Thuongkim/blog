<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{!! route('roles.index') !!}"><i class="fa fa-edit"></i><span>Roles</span></a>
</li>

<li class="{{ Request::is('refLevels*') ? 'active' : '' }}">
    <a href="{!! route('refLevels.index') !!}"><i class="fa fa-edit"></i><span>Ref Levels</span></a>
</li>

<li class="{{ Request::is('refCategories*') ? 'active' : '' }}">
    <a href="{!! route('refCategories.index') !!}"><i class="fa fa-edit"></i><span>Ref Categories</span></a>
</li>



<li class="{{ Request::is('tasks*') ? 'active' : '' }}">
    <a href="{!! route('tasks.index') !!}"><i class="fa fa-edit"></i><span>Tasks</span></a>
</li>

<li class="{{ Request::is('taskUsers*') ? 'active' : '' }}">
    <a href="{!! route('taskUsers.index') !!}"><i class="fa fa-edit"></i><span>Task Users</span></a>
</li>

