<div class="sidebar" data-color="rose" data-background-color="black"
     data-image="{{ asset('resources/img/sidebar/sky.jpg') }}">
    <div class="logo">
        <a href="{{ config('app.url') }}" class="simple-text logo-mini">
            {{ __('D') }}
        </a>
        <a href="{{ config('app.url') }}" class="simple-text logo-normal">
            {{ __('PROJECT') }}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="material-icons">dashboard</i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#users" aria-expanded="true">
                    <i class="material-icons">group</i>
                    <p>{{ __('Users') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="users">
                    <ul class="nav">
                        <li class="nav-item{{ $activePage == 'role-management' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('role.index') }}">
                                <span class="sidebar-mini"> RM </span>
                                <span class="sidebar-normal"> {{ __('Role Management') }} </span>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('user.index') }}">
                                <span class="sidebar-mini"> UM </span>
                                <span class="sidebar-normal"> {{ __('User Management') }} </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'hosting-management') ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#services" aria-expanded="true">
                    <i class="material-icons">work_outline</i>
                    <p>{{ __('Manage') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="services">
                    <ul class="nav">
                        <li class="nav-item{{ $activePage == 'services-management' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('services.index') }}">
                                <span class="sidebar-mini"> H </span>
                                <span class="sidebar-normal"> {{ __('Services') }} </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
    <div class="sidebar-background"
         style="background-image: url('/resources/img/sidebar/sky.jpg') "></div>
</div>


