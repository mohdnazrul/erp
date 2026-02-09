{{-- resources/views/partials/header.blade.php --}}
@php
    $user = auth()->user();
    $displayName = $user?->name ?? $user?->email ?? 'Guest';
    $email = $user?->email ?? '';

    $titleText = $title ?? '';

    // Notification count (safe fallback)
    $notifCount = 0;
    try {
        if ($user && method_exists($user, 'unreadNotifications')) {
            $notifCount = $user->unreadNotifications()->count();
        }
    } catch (\Throwable $e) {
        $notifCount = 0;
    }
@endphp

<!-- Start:: Header -->
<header class="header sticky-top" id="header">
    <div class="container-fluid px-2 px-md-4">
        <div class="d-flex align-items-center justify-content-between py-md-3 py-2">

            <!-- Start:: Left Header -->
            <div class="logo">
                <a href="{{ url('/') }}" aria-label="Dashboard">
                    <img src="{{ asset('assets/images/logo.svg') }}" alt="Logo" class="img-fluid">
                    <small class="d-block text-uppercase text-secondary text-truncate">{{ $titleText }}</small>
                </a>
            </div>
            <!-- End:: Left Header -->

            <!-- Right Header -->
            <div class="right-header d-flex flex-fill align-items-center justify-content-between">

                {{-- Menu Grid (hide on home) --}}
                <a
                    href="#"
                    class="btn p-0 ms-3 hover-svg"
                    data-bs-toggle="modal"
                    data-bs-target="#Menu_Grid"
                    style="display:{{ request()->routeIs('home') ? 'none' : 'block' }}"
                    aria-label="Open menu grid"
                >
                    <svg width="28" height="28" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.27148 5H12.7296V12.5H5.27148V5Z" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M17.7017 5H25.1598V12.5H17.7017V5Z" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M5.27148 17.5H12.7296V25H5.27148V17.5Z" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M17.7017 21.25C17.7017 22.2446 18.0945 23.1984 18.7939 23.9017C19.4932 24.6049 20.4417 25 21.4307 25C22.4197 25 23.3682 24.6049 24.0676 23.9017C24.7669 23.1984 25.1598 22.2446 25.1598 21.25C25.1598 20.2554 24.7669 19.3016 24.0676 18.5983C23.3682 17.8951 22.4197 17.5 21.4307 17.5C20.4417 17.5 19.4932 17.8951 18.7939 18.5983C18.0945 19.3016 17.7017 20.2554 17.7017 21.25Z" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>

                <ul class="nav navbar-right d-flex gap-lg-4 gap-2 align-items-center ms-auto">

                    <li class="d-flex gap-2 align-items-center">

                        {{-- Notifications --}}
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle hover-svg" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Notifications">
                                @if($notifCount > 0)
                                    <span class="bullet-dot bg-primary animation-blink"></span>
                                @endif
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                                    <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                                    <path d="M21 6.727a11.05 11.05 0 0 0 -2.794 -3.727" />
                                    <path d="M3 6.727a11.05 11.05 0 0 1 2.792 -3.727" />
                                </svg>
                            </a>

                            <div class="dropdown-menu p-0 notifications shadow-lg rounded-4 overflow-hidden">
                                <div class="card border-0">
                                    <div class="card-header d-flex justify-content-between align-items-center p-4 border-bottom-0">
                                        <h6 class="card-title mb-0">Notifications Center</h6>
                                        <span class="badge bg-primary">{{ $notifCount }}</span>
                                    </div>

                                    {{-- Replace this UL with your dynamic notifications list --}}
                                    <ul class="list-unstyled list-group list-group-custom mb-0 rounded-0 li_animate">
                                        @if($notifCount === 0)
                                            <li class="list-group-item d-flex border-end-0 border-start-0">
                                                <div class="d-flex flex-column flex-grow-1 p-2 overflow-hidden">
                                                    <h6 class="mb-0 fw-medium">No new notifications</h6>
                                                    <small class="d-block text-truncate text-muted">You're all caught up.</small>
                                                </div>
                                            </li>
                                        @else
                                            <li class="list-group-item d-flex border-end-0 border-start-0">
                                                <div class="d-flex flex-column flex-grow-1 p-2 overflow-hidden">
                                                    <h6 class="mb-0 fw-medium">
                                                        <a href="#">New updates</a>
                                                        <small class="float-end text-muted">Today</small>
                                                    </h6>
                                                    <small class="d-block text-truncate">You have {{ $notifCount }} unread notifications.</small>
                                                </div>
                                            </li>
                                        @endif
                                    </ul>

                                    <div class="card-body py-2">
                                        <a href="#" class="btn btn-link px-2">View all notifications</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Languages (optional) --}}
                        <div class="d-md-inline-block d-none dropdown">
                            <a class="nav-link dropdown-toggle hover-svg" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Select Languages">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M4 5h7" />
                                    <path d="M9 3v2c0 4.418 -2.239 8 -5 8" />
                                    <path d="M5 9c0 2.144 2.952 3.908 6.7 4" />
                                    <path d="M12 20l4 -9l4 9" />
                                    <path d="M19.1 18h-6.2" />
                                </svg>
                            </a>
                            <ul class="dropdown-menu p-2 p-xl-3 language shadow-lg rounded-4 li_animate">
                                <li class="mb-1"><a class="dropdown-item rounded-pill active" href="#">English</a></li>
                                <li class="mb-1"><a class="dropdown-item rounded-pill" href="#">French</a></li>
                                <li class="mb-1"><a class="dropdown-item rounded-pill" href="#">German</a></li>
                            </ul>
                        </div>

                        {{-- Theme Light/Dark/Auto --}}
                        <div class="dropdown">
                            <a class="dropdown-toggle d-flex" href="#" id="bd-theme" data-bs-toggle="dropdown" aria-expanded="false" aria-label="theme option light/dark">
                                <svg class="theme-icon-active" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                    <use href="#sun-fill"></use>
                                </svg>
                            </a>

                            <ul class="dropdown-menu p-2 p-xl-3 language shadow-lg rounded-4 li_animate dropdown-menu-end" aria-labelledby="bd-theme">
                                <li class="mb-1">
                                    <a class="dropdown-item rounded-pill" href="#" data-bs-theme-value="light">
                                        <svg class="me-2" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <use href="#sun-fill"></use>
                                        </svg>
                                        Light
                                    </a>
                                </li>
                                <li class="mb-1">
                                    <a class="dropdown-item rounded-pill" href="#" data-bs-theme-value="dark">
                                        <svg class="me-2" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <use href="#moon-stars-fill"></use>
                                        </svg>
                                        Dark
                                    </a>
                                </li>
                                <li class="mb-1">
                                    <a class="dropdown-item rounded-pill" href="#" data-bs-theme-value="auto">
                                        <svg class="me-2" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <use href="#circle-half"></use>
                                        </svg>
                                        Auto
                                    </a>
                                </li>
                            </ul>

                            {{-- Symbols for theme icons --}}
                            <svg xmlns="http://www.w3.org/2000/svg" style="display:none;">
                                <symbol id="sun-fill" viewBox="0 0 24 24">
                                    <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                    <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
                                </symbol>
                                <symbol id="moon-stars-fill" viewBox="0 0 24 24">
                                    <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
                                    <path d="M17 4a2 2 0 0 0 2 2a2 2 0 0 0 -2 2a2 2 0 0 0 -2 -2a2 2 0 0 0 2 -2" />
                                    <path d="M19 11h2m-1 -1v2" />
                                </symbol>
                                <symbol id="circle-half" viewBox="0 0 24 24">
                                    <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                    <path d="M12 3l0 18" />
                                    <path d="M12 9l4.65 -4.65" />
                                    <path d="M12 14.3l7.37 -7.37" />
                                    <path d="M12 19.6l8.85 -8.85" />
                                </symbol>
                            </svg>
                        </div>

                        {{-- Theme Settings Offcanvas trigger --}}
                        <div>
                            <a class="d-flex hover-svg" data-bs-toggle="offcanvas" href="#ThemeSettings" role="button" aria-controls="ThemeSettings" aria-label="Theme settings">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 21a9 9 0 0 1 0 -18c4.97 0 9 3.582 9 8c0 1.06 -.474 2.078 -1.318 2.828c-.844 .75 -1.989 1.172 -3.182 1.172h-2.5a2 2 0 0 0 -1 3.75a1.3 1.3 0 0 1 -1 2.25" />
                                    <path d="M8.5 10.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                    <path d="M12.5 7.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                    <path d="M16.5 10.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                </svg>
                            </a>
                        </div>

                    </li>

                    {{-- Profile --}}
                    <li class="p-2 pe-0">
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="profile-dropdown d-flex align-items-center">
                                    <img class="rounded-circle border border-white shadow"
                                         src="{{ auth()->user()?->avatar_url ?? asset('assets/images/profile-navbar.png') }}"
                                         width="30" height="30" alt="Profile">
                                    <span class="h6 mb-0 ms-1 fw-normal nav-link p-0 d-none d-lg-block">
                                        {{ $displayName }}
                                    </span>
                                </span>
                            </button>

                            <div class="dropdown-menu rounded-4 shadow p-0 overflow-hidden">
                                <div class="card border-0 w240 overflow-hidden">
                                    <div class="card-body">
                                        <h5 class="mb-1">{{ $displayName }}</h5>
                                        <p class="mb-3">{{ $email }}</p>

                                        {{-- Replace with your logout route/form --}}
                                        <a href="{{ route('logout') }}"
                                           class="btn btn-primary text-uppercase w-100 rounded-pill"
                                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Sign out
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>

                                    <div class="list-group m-2">
                                        <a class="list-group-item rounded-pill list-group-item-action border-0" href="{{ route('account-settings') }}">Settings</a>
                                        <a class="list-group-item rounded-pill list-group-item-action border-0" href="{{ route('todo') }}">My Todo</a>
                                        <a class="list-group-item rounded-pill list-group-item-action border-0" href="{{ route('project') }}">My Projects</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
            <!-- End:: Header Right -->
        </div>
    </div>
</header>
<!-- End:: Header -->


<!-- Start:: Theme Settings -->
<div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="ThemeSettings">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title">Theme Settings</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="offcanvas-body">
        <div class="px-lg-2 mb-4">
            <h6 class="small text-uppercase">Set Theme Color</h6>
            <ul class="list-unstyled d-flex gap-2 choose-skin mb-0">
                <li data-theme="indigo"><div class="rounded-4" style="background-color:#6C50BF;"></div></li>
                <li data-theme="blue"><div class="rounded-4" style="background-color:#4178E5;"></div></li>
                <li data-theme="cyan"><div class="rounded-4" style="background-color:#53bdb1;"></div></li>
                <li data-theme="blush"><div class="rounded-4" style="background-color:#ED7AA0;"></div></li>
            </ul>
        </div>

        <div class="px-lg-2 mb-4 setting-font">
            <h6 class="small text-uppercase">Google Font Settings</h6>

            {{-- Keep your existing SVG previews; only inputs matter for JS --}}
            <div class="c_radio d-flex flex-wrap gap-2 text-center font_setting">
                <label for="font-raleway">
                    <input type="radio" name="font" id="font-raleway" value="font-raleway" checked>
                    <span class="card rounded-4"><span class="px-3 py-2 d-block">Raleway</span></span>
                </label>
                <label for="font-opensans">
                    <input type="radio" name="font" id="font-opensans" value="font-opensans">
                    <span class="card rounded-4"><span class="px-3 py-2 d-block">Open Sans</span></span>
                </label>
                <label for="font-dosis">
                    <input type="radio" name="font" id="font-dosis" value="font-dosis">
                    <span class="card rounded-4"><span class="px-3 py-2 d-block">Dosis</span></span>
                </label>
                <label for="font-jost">
                    <input type="radio" name="font" id="font-jost" value="font-jost">
                    <span class="card rounded-4"><span class="px-3 py-2 d-block">Jost</span></span>
                </label>
            </div>
        </div>

        <div class="px-lg-2 mb-4">
            <h6 class="small text-uppercase">More App Setting</h6>

            <div class="form-check form-switch mb-2 breadcrumbs-toggle">
                <input class="form-check-input fs-6" type="checkbox" role="switch" id="breadcrumbs-switch">
                <label class="form-check-label" for="breadcrumbs-switch">Breadcrumbs Primary Color</label>
            </div>

            <div class="form-check form-switch mb-2 monochrome-toggle">
                <input class="form-check-input fs-6" type="checkbox" role="switch" id="monochrome">
                <label class="form-check-label" for="monochrome">Monochrome Mode</label>
            </div>

            <div class="form-check form-switch mb-2 radius-toggle">
                <input class="form-check-input fs-6" type="checkbox" role="switch" id="radius0">
                <label class="form-check-label" for="radius0">Border Radius none</label>
            </div>

            <div class="form-check form-switch mb-2 cb-shadow">
                <input class="form-check-input fs-6" type="checkbox" role="switch" id="BoxShadow">
                <label class="form-check-label" for="BoxShadow">Card box shadow active</label>
            </div>
        </div>

        <div class="px-lg-2 mb-4 d-flex gap-2">
            <a class="btn w-100 btn-primary" rel="nofollow" target="_blank" href="https://themeforest.net/user/wrraptheme/portfolio">Buy Now</a>
            <a class="btn w-100 btn-dark" target="_blank" href="https://www.thememakker.com/portfolio/">View Portfolio</a>
        </div>

        <div class="mx-lg-2 alert alert-warning rounded-4" role="alert">
            <p class="mb-1">Contact us anytime!</p>
            <h6 class="mb-0">Looking for extra theme settings? We're here to help!</h6>
        </div>
    </div>
</div>
<!-- End:: Theme Settings -->


