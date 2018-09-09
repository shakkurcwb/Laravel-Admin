<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
    <a class="navbar-brand mr-0" href="/"><span class="fas fa-bars"></span> {{ env('APP_NAME') }}</a>
    <ul class="navbar-nav mr-auto">
        <span class="navbar-text raw-margin-left-24 page-title">
            <a class="sidebar-toggle text-light mr-3"><i class="fas fa-bars"></i></a>
            @yield('pageTitle')
        </span>
    </ul>
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            @if (Auth::user())
                <a class="nav-link" href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), 'logout') }}">
                    @lang('Logout')
                </a>
            @endif
        </li>
    </ul>
</nav>
