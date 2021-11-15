<ul class="nav flex-column pt-3 pt-md-0">
    <li class="nav-item">
        <a href="{{ route('home') }}" class="nav-link d-flex align-items-center">
            <span class="sidebar-icon me-3">
                <img src="{{ asset('images/brand/fine-long-light.svg') }}" height="30" width="250" alt="Volt Logo">
            </span>
        </a>
    </li>

    <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
        <a href="{{ route('home') }}" class="nav-link">
            <span class="sidebar-icon">
                <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                    <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                </svg>
            </span>
            <span class="sidebar-text">{{ __('Dashboard') }}</span>
        </a>
    </li>

    <li class="nav-item {{ request()->routeIs('boetes.index') ? 'active' : '' }}">
        <a href="{{ route('boetes.index') }}" class="nav-link">
            <span class="sidebar-icon me-3">
                <i class="fas fa-coins"></i>
            </span>
            <span class="sidebar-text">{{ __('Mijn Boetes') }}</span>
        </a>
    </li>

    <li class="nav-item {{ request()->routeIs('teams.index') ? 'active' : '' }}">
        <a href="{{ route('teams.index') }}" class="nav-link">
            <span class="sidebar-icon me-3">
                <i class="fas fa-users"></i>
            </span>
            <span class="sidebar-text">{{ __('Mijn Teams') }}</span>
        </a>
    </li>

    <li class="nav-item {{ request()->routeIs('settings.index') ? 'active' : '' }}">
        <a href="{{ route('settings.index') }}" class="nav-link">
            <span class="sidebar-icon me-3">
                <i class="fas fa-sliders-h"></i>
            </span>
            <span class="sidebar-text">{{ __('Instellingen') }}</span>
        </a>
    </li>

    {{--    <li class="nav-item fixed-bottom">--}}
    {{--        <a href="{{ route('settings.index') }}" class="nav-link">--}}
    {{--            <span class="sidebar-icon me-3">--}}
    {{--                       <img class="card-img rounded-circle border-white w--20"--}}
    {{--                            src="https://ui-avatars.com/api/?background=random&name={{ Auth::user()->name }}"--}}
    {{--                            alt="{{ Auth::user()->name }}">--}}
    {{--            </span>--}}
    {{--            <span class="sidebar-text">{{ __('Instellingen') }}</span>--}}
    {{--        </a>--}}
    {{--    </li>--}}
    <hr>
    <li class="p-1 align-bottom ">
        <div class="row">
            <div class="col-md-10 align-end" data-bs-toggle="tooltip" data-bs-placement="top" title="Profiel">
                <a href="{{ route('profile.show') }}">
                    <div class="media d-flex align-items-center me-3">
                        <img class="avatar rounded-circle"
                             src="https://ui-avatars.com/api/?background=random&name={{ Auth::user()->name }}"
                             alt="{{ Auth::user()->name }}">
                        <div class="media-body ms-2 text-dark align-items-center d-none d-lg-block">
                            <span class="mb-0 font-small fw-bold text-white">{{ auth()->user()->name }}</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2 text-danger text-end pt-1">
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                    <i class="fas fa-power-off text-end text-danger" data-bs-toggle="tooltip" data-bs-placement="top"
                       title="Uitloggen"></i>
                </a>
            </div>
        </div>
    </li>
</ul>
