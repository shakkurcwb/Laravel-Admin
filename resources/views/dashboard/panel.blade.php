
<li class="nav-item @if(Request::is('*/dashboard', '*/dashboard/*')) active @endif">
    <a class="nav-link" href="{!! url('dashboard') !!}"><span class="fas fa-tachometer-alt"></span> @lang('Dashboard')</a>
</li>
<li class="nav-item @if(Request::is('*/user/settings', '*/user/password')) active @endif">
    <a class="nav-link" href="{!! url('user/settings') !!}"><span class="fas fa-user"></span> @lang('My settings')</a>
</li>
<li class="nav-item @if(Request::is('teams', 'teams/*')) active @endif">
    <a class="nav-link" href="{!! url('teams') !!}"><span class="fas fa-users"></span> @lang('Teams')</a>
</li>

@if (Gate::allows('admin'))

    <li class="sidebar-header"><span>Admin</span></li>
    <li class="nav-item @if(Request::is('*/admin/dashboard', '*/admin/dashboard/*')) active @endif">
        <a class="nav-link" href="{!! url('admin/dashboard') !!}"><span class="fas fa-tachometer-alt"></span> @lang('Dashboard')</a>
    </li>
    <li class="nav-item @if(Request::is('*/admin/users', '*/admin/users/*')) active @endif">
        <a class="nav-link" href="{!! url('admin/users') !!}"><span class="fas fa-users"></span> @lang('Users')</a>
    </li>
    <li class="nav-item @if(Request::is('*/admin/roles', '*/admin/roles/*')) active @endif">
        <a class="nav-link" href="{!! url('admin/roles') !!}"><span class="fas fa-lock"></span> @lang('Roles')</a>
    </li>

@endif