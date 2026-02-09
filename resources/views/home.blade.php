@extends('layout.app')

@section('content')
    @php
        $user = auth()->user();
        $displayName = $user?->name ?? $user?->email ?? 'Guest';

        // Safe unread counts (won’t crash even if table not ready)
        $unreadNotifications = 0;
        try {
            if ($user && method_exists($user, 'unreadNotifications')) {
                $unreadNotifications = $user->unreadNotifications()->count();
            }
        } catch (\Throwable $e) {
            $unreadNotifications = 0;
        }

        // If you don’t have messages module yet, keep 0 (or replace with your own query)
        $unreadMessages = 0;
    @endphp

    <!-- Start:: Page Heading -->
    <div class="page-heading py-lg-5 py-md-4 py-3">
        <div class="container">
            <div class="page-search">
                <div class="input-group mb-4">
                    <svg class="position-absolute top-50 translate-middle-y icon-search" width="30" height="30"
                        viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"
                        stroke="var(--bs-gray-500)" stroke-linecap="round" stroke-linejoin="round">
                        <path
                            d="M3.75 12.5C3.75 13.6491 3.97633 14.7869 4.41605 15.8485C4.85578 16.9101 5.5003 17.8747 6.31282 18.6872C7.12533 19.4997 8.08992 20.1442 9.15152 20.5839C10.2131 21.0237 11.3509 21.25 12.5 21.25C13.6491 21.25 14.7869 21.0237 15.8485 20.5839C16.9101 20.1442 17.8747 19.4997 18.6872 18.6872C19.4997 17.8747 20.1442 16.9101 20.5839 15.8485C21.0237 14.7869 21.25 13.6491 21.25 12.5C21.25 11.3509 21.0237 10.2131 20.5839 9.15152C20.1442 8.08992 19.4997 7.12533 18.6872 6.31282C17.8747 5.5003 16.9101 4.85578 15.8485 4.41605C14.7869 3.97633 13.6491 3.75 12.5 3.75C11.3509 3.75 10.2131 3.97633 9.15152 4.41605C8.08992 4.85578 7.12533 5.5003 6.31282 6.31282C5.5003 7.12533 4.85578 8.08992 4.41605 9.15152C3.97633 10.2131 3.75 11.3509 3.75 12.5Z" />
                        <path d="M26.25 26.25L18.75 18.75" />
                    </svg>

                    <input type="text" class="form-control py-md-4 p-3 searchInput rounded-4" id="searchInput"
                        placeholder="Search here...">

                    <div class="position-absolute top-50 translate-middle-y icon-cmd d-none d-md-block">
                        <span class="d-none opacity-0" id="searchToggleBtn"></span>
                        <span class="badge bg-body-secondary text-body">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M7 9a2 2 0 1 1 2 -2v10a2 2 0 1 1 -2 -2h10a2 2 0 1 1 -2 2v-10a2 2 0 1 1 2 2h-10" />
                            </svg>
                        </span>
                        <span class="badge bg-body-secondary text-body ms-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M7 4l0 16" />
                                <path d="M7 12h2l8 -8" />
                                <path d="M9 12l8 8" />
                            </svg>
                        </span>
                    </div>

                    <div class="position-absolute search-result top-100 w-100 z-3 active">
                        <div class="card rounded-4 p-xl-4">
                            <div class="card-body">
                                <small class="text-uppercase text-muted">Recent Searches</small>
                                <div class="d-flex flex-wrap align-items-start mt-2 mb-4 gap-1 tag-hover">
                                    <a class="small rounded py-1 px-3 rounded-pill fw-normal border-bg"
                                        style="--dynamic-color: var(--bs-dark);" href="{{ route('onepage') }}">Onepage</a>
                                    <a class="small rounded py-1 px-3 rounded-pill fw-normal border-bg"
                                        style="--dynamic-color: var(--bs-primary);" href="{{ route('product-list') }}">Project</a>
                                    <a class="small rounded py-1 px-3 rounded-pill fw-normal border-bg"
                                        style="--dynamic-color: var(--bs-warning);" href="{{ route('add-product') }}">Add Product</a>
                                    <a class="small rounded py-1 px-3 rounded-pill fw-normal border-bg"
                                        style="--dynamic-color: var(--bs-info);" href="{{ route('create-invoice') }}">Create Invoice</a>
                                    <a class="small rounded py-1 px-3 rounded-pill fw-normal border-bg"
                                        style="--dynamic-color: var(--bs-primary);" href="#">Hospital Admin</a>
                                </div>

                                <small class="text-uppercase text-muted">Suggestions:</small>
                                <div class="list-group mt-2 rounded-4">
                                    <a class="list-group-item list-group-item-action text-truncate" href="{{ route('help') }}"
                                        aria-label="Need a Help?">
                                        <div class="fw-bold">Need a Help?</div>
                                        <small class="text-muted">We're here to help you get the most out of your project.</small>
                                    </a>
                                    <a class="list-group-item list-group-item-action text-truncate" href="{{ route('datarangpicker') }}"
                                        aria-label="Date Range Picker">
                                        <div class="fw-bold">Date Range Picker</div>
                                        <small class="text-muted">Originally created for reports at Improvely, the Date Range Picker</small>
                                    </a>
                                    <a class="list-group-item list-group-item-action text-truncate" href="{{ route('imageinput') }}"
                                        aria-label="Image Input">
                                        <div class="fw-bold">Image Input</div>
                                        <small class="text-muted">Image input is an exclusive plugin of Good that enables a simple,</small>
                                    </a>
                                    <a class="list-group-item list-group-item-action text-truncate" href="{{ route('datatable') }}"
                                        aria-label="DataTables for jQuery">
                                        <div class="fw-bold">DataTables for jQuery</div>
                                        <small class="text-muted">This package contains distribution files for the DataTables library for jQuery</small>
                                    </a>
                                    <a class="list-group-item list-group-item-action text-truncate" href="{{ route('components') }}"
                                        aria-label="Components">
                                        <div class="fw-bold">Components</div>
                                        <small class="text-muted">Contrary to popular belief, Lorem Ipsum is not simply random text.</small>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="page-welcome d-flex align-items-center justify-content-between">
                <div class="welcome-text">
                    <h1 class="mb-0 fw-light">
                        Welcome back, <strong class="text-primary fw-bold">{{ $displayName }}!</strong>
                    </h1>

                    <p class="mb-0">
                        You have
                        <span class="counter fw-bold" data-target="{{ $unreadMessages }}">0</span>
                        new messages and
                        <span class="counter fw-bold" data-target="{{ $unreadNotifications }}">0</span>
                        new notifications.
                    </p>
                </div>

                <div class="weather-info d-none d-md-flex gap-4 align-items-center">
                    <div class="d-flex align-items-start gap-1">
                        <span class="display-4 lh-1">🌤️ 31</span>
                        <span class="pt-2 d-flex">°C</span>
                    </div>
                    <div>
                        <p class="mb-1 fs-5" id="dayName"></p>
                        <p class="mb-0" id="fullDate"></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End:: Page Heading -->

    <!-- Start:: Page Modules Lisr -->
    <div class="page-modules">
        <div class="container">
            <ul class="list-unstyled d-flex justify-content-center flex-wrap p-0 gap-xl-4 gap-md-3 gap-2 li_animate">

                <!-- Icon: Dashboard-->
                <li class="module-item position-relative">
                    <a class="text-center animated-icon" href="{{ route('analytics') }}"
                        aria-label="Overview of your analytics & activities.">
                        <div class="module-box rounded-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60"
                                fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path
                                    d="M25 32.5C25 33.8261 25.5268 35.0979 26.4645 36.0355C27.4021 36.9732 28.6739 37.5 30 37.5C31.3261 37.5 32.5979 36.9732 33.5355 36.0355C34.4732 35.0979 35 33.8261 35 32.5C35 31.1739 34.4732 29.9021 33.5355 28.9645C32.5979 28.0268 31.3261 27.5 30 27.5C28.6739 27.5 27.4021 28.0268 26.4645 28.9645C25.5268 29.9021 25 31.1739 25 32.5Z" />
                                <path d="M33.625 28.875L38.75 23.75" />
                                <path
                                    d="M16 50C12.3454 47.0952 9.68478 43.1256 8.38695 38.6412C7.08911 34.1568 7.2183 29.3797 8.75661 24.972C10.2949 20.5643 13.1662 16.7443 16.9725 14.0413C20.7788 11.3382 25.3316 9.88611 30 9.88611C34.6684 9.88611 39.2212 11.3382 43.0275 14.0413C46.8338 16.7443 49.7051 20.5643 51.2434 24.972C52.7817 29.3797 52.9109 34.1568 51.6131 38.6412C50.3152 43.1256 47.6546 47.0952 44 50H16Z" />
                            </svg>
                            <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M18 7V21L12 17L6 21V7C6 5.93913 6.42143 4.92172 7.17157 4.17157C7.92172 3.42143 8.93913 3 10 3H14C15.0609 3 16.0783 3.42143 16.8284 4.17157C17.5786 4.92172 18 5.93913 18 7Z" />
                                </svg>
                            </div>
                        </div>
                        <h5 class="module-title mb-0 mt-2">Dashboard</h5>
                    </a>
                </li>

                <!-- Icon: AI Tools-->
                <li class="module-item">
                    <a class="text-center animated-icon" href="{{ route('ai-chat') }}"
                        aria-label="Smart tools to boost productivity.">
                        <div class="module-box rounded-4">
                            <svg width="60" height="60" viewBox="0 0 60 60" fill="none"
                                xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M41 22L41 43" />
                                <path d="M37 43L27.5 18L18 43" />
                                <path d="M34 37H20" />
                                <path
                                    d="M33.9344 10L13.5556 10C12.3474 10 11.1886 10.471 10.3343 11.3094C9.47996 12.1479 9 13.285 9 14.4707L9 46.5293C9 47.715 9.47996 48.8521 10.3343 49.6905C11.1886 50.529 12.3473 51 13.5556 51L45.4444 51C46.6527 51 47.8114 50.529 48.6657 49.6906C49.52 48.8521 50 47.715 50 46.5293L50 24.639" />
                                <path
                                    d="M51.4706 17.25C51.9386 17.25 52.3875 17.4344 52.7184 17.7626C53.0494 18.0908 53.2353 18.5359 53.2353 19C53.2353 18.5359 53.4212 18.0908 53.7522 17.7626C54.0831 17.4344 54.532 17.25 55 17.25C54.532 17.25 54.0831 17.0656 53.7522 16.7374C53.4212 16.4092 53.2353 15.9641 53.2353 15.5C53.2353 15.9641 53.0494 16.4092 52.7184 16.7374C52.3875 17.0656 51.9386 17.25 51.4706 17.25ZM51.4706 6.75C51.9386 6.75 52.3875 6.93437 52.7184 7.26256C53.0494 7.59075 53.2353 8.03587 53.2353 8.5C53.2353 8.03587 53.4212 7.59075 53.7522 7.26256C54.0831 6.93437 54.532 6.75 55 6.75C54.532 6.75 54.0831 6.56563 53.7522 6.23744C53.4212 5.90925 53.2353 5.46413 53.2353 5C53.2353 5.46413 53.0494 5.90925 52.7184 6.23744C52.3875 6.56563 51.9386 6.75 51.4706 6.75ZM45.2941 17.25C45.2941 15.8576 45.8519 14.5223 46.8447 13.5377C47.8376 12.5531 49.1841 12 50.5882 12C49.1841 12 47.8376 11.4469 46.8447 10.4623C45.8519 9.47774 45.2941 8.14239 45.2941 6.75C45.2941 8.14239 44.7363 9.47774 43.7435 10.4623C42.7507 11.4469 41.4041 12 40 12C41.4041 12 42.7507 12.5531 43.7435 13.5377C44.7363 14.5223 45.2941 15.8576 45.2941 17.25Z" />
                            </svg>
                        </div>
                        <h5 class="module-title mb-0 mt-2">AI Tools</h5>
                    </a>
                </li>

                <!-- Icon: Calendar-->
                <li class="module-item">
                    <a class="text-center animated-icon" href="{{ route('calendar') }}"
                        aria-label="Manage your schedule and events.">
                        <div class="module-box rounded-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60"
                                fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path
                                    d="M10 17.5C10 16.1739 10.5268 14.9021 11.4645 13.9645C12.4021 13.0268 13.6739 12.5 15 12.5H45C46.3261 12.5 47.5979 13.0268 48.5355 13.9645C49.4732 14.9021 50 16.1739 50 17.5V47.5C50 48.8261 49.4732 50.0979 48.5355 51.0355C47.5979 51.9732 46.3261 52.5 45 52.5H15C13.6739 52.5 12.4021 51.9732 11.4645 51.0355C10.5268 50.0979 10 48.8261 10 47.5V17.5Z" />
                                <path d="M40 7.5V17.5" />
                                <path d="M20 7.5V17.5" />
                                <path d="M10 27.5H50" />
                                <path d="M27.5 37.5H30" />
                                <path d="M30 37.5V45" />
                            </svg>
                        </div>
                        <h5 class="module-title mb-0 mt-2">Calendar</h5>
                    </a>
                </li>

                <!-- Icon: Todo list-->
                <li class="module-item">
                    <a class="text-center animated-icon" href="{{ route('todo') }}"
                        aria-label="Track and manage daily tasks.">
                        <div class="module-box rounded-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60"
                                fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M8.75 13.75L12.5 17.5L18.75 11.25" />
                                <path d="M8.75 28.75L12.5 32.5L18.75 26.25" />
                                <path d="M8.75 43.75L12.5 47.5L18.75 41.25" />
                                <path d="M27.5 15H50" />
                                <path d="M27.5 30H50" />
                                <path d="M27.5 45H50" />
                            </svg>
                        </div>
                        <h5 class="module-title mb-0 mt-2">To-do</h5>
                    </a>
                </li>

                <!-- Icon: Email-->
                {{-- <li class="module-item position-relative">
                    <a class="text-center animated-icon" href="{{ route('email') }}"
                        aria-label="Stay updated with your messages.">
                        <div class="module-box rounded-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60"
                                fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path
                                    d="M7.5 17.5C7.5 16.1739 8.02678 14.9021 8.96447 13.9645C9.90215 13.0268 11.1739 12.5 12.5 12.5H47.5C48.8261 12.5 50.0979 13.0268 51.0355 13.9645C51.9732 14.9021 52.5 16.1739 52.5 17.5V42.5C52.5 43.8261 51.9732 45.0979 51.0355 46.0355C50.0979 46.9732 48.8261 47.5 47.5 47.5H12.5C11.1739 47.5 9.90215 46.9732 8.96447 46.0355C8.02678 45.0979 7.5 43.8261 7.5 42.5V17.5Z" />
                                <path d="M7.5 17.5L30 32.5L52.5 17.5" />
                            </svg>
                        </div>
                        <h5 class="module-title mb-0 mt-2">E-mail</h5>
                    </a>
                    <span class="align-items-center avatar bg-body d-flex fs-12 fw-bold justify-content-center position-absolute rounded-circle shadow-sm md"
                        style="top: -12px; right: -12px;">
                        <span class="counter" data-target="13">0</span>
                    </span>
                </li> --}}

                <!-- Icon: Chat-->
                {{-- <li class="module-item position-relative">
                    <a class="text-center animated-icon" href="{{ route('chat') }}"
                        aria-label="Real-time communication made easy.">
                        <div class="module-box rounded-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60"
                                fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path
                                    d="M52.5 35L45 27.5H27.5C26.837 27.5 26.2011 27.2366 25.7322 26.7678C25.2634 26.2989 25 25.663 25 25V10C25 9.33696 25.2634 8.70107 25.7322 8.23223C26.2011 7.76339 26.837 7.5 27.5 7.5H50C50.663 7.5 51.2989 7.76339 51.7678 8.23223C52.2366 8.70107 52.5 9.33696 52.5 10V35Z" />
                                <path
                                    d="M35 37.5V42.5C35 43.163 34.7366 43.7989 34.2678 44.2678C33.7989 44.7366 33.163 45 32.5 45H15L7.5 52.5V27.5C7.5 26.837 7.76339 26.2011 8.23223 25.7322C8.70107 25.2634 9.33696 25 10 25H15" />
                            </svg>
                        </div>
                        <h5 class="module-title mb-0 mt-2">Chat</h5>
                    </a>
                    <span class="align-items-center avatar bg-body d-flex fs-12 fw-bold justify-content-center position-absolute rounded-circle shadow-sm md"
                        style="top: -12px; right: -12px;">
                        <span class="counter" data-target="3">0</span>
                    </span>
                </li> --}}

                <!-- Icon: Project-->
                {{-- <li class="module-item">
                    <a class="text-center animated-icon" href="{{ route('project') }}"
                        aria-label="Organize and monitor project progress.">
                        <div class="module-box rounded-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60"
                                fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path
                                    d="M25 40V20H31.25C32.9076 20 34.4973 20.6585 35.6694 21.8306C36.8415 23.0027 37.5 24.5924 37.5 26.25C37.5 27.9076 36.8415 29.4973 35.6694 30.6694C34.4973 31.8415 32.9076 32.5 31.25 32.5H25" />
                                <path
                                    d="M7.5 30C7.5 32.9547 8.08198 35.8806 9.21271 38.6104C10.3434 41.3402 12.0008 43.8206 14.0901 45.9099C16.1794 47.9992 18.6598 49.6566 21.3896 50.7873C24.1194 51.918 27.0453 52.5 30 52.5C32.9547 52.5 35.8806 51.918 38.6104 50.7873C41.3402 49.6566 43.8206 47.9992 45.9099 45.9099C47.9992 43.8206 49.6566 41.3402 50.7873 38.6104C51.918 35.8806 52.5 32.9547 52.5 30C52.5 27.0453 51.918 24.1194 50.7873 21.3896C49.6566 18.6598 47.9992 16.1794 45.9099 14.0901C43.8206 12.0008 41.3402 10.3434 38.6104 9.21271C35.8806 8.08198 32.9547 7.5 30 7.5C27.0453 7.5 24.1194 8.08198 21.3896 9.21271C18.6598 10.3434 16.1794 12.0008 14.0901 14.0901C12.0008 16.1794 10.3434 18.6598 9.21271 21.3896C8.08198 24.1194 7.5 27.0453 7.5 30Z" />
                            </svg>
                        </div>
                        <h5 class="module-title mb-0 mt-2">Project</h5>
                    </a>
                </li> --}}

                <!-- Icon: My Products-->
                {{-- <li class="module-item">
                    <a class="text-center animated-icon" href="{{ route('product-list') }}" aria-label="E-Commerce">
                        <div class="module-box rounded-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60"
                                fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path
                                    d="M25 35C25 36.3261 25.5268 37.5979 26.4645 38.5355C27.4021 39.4732 28.6739 40 30 40C31.3261 40 32.5979 39.4732 33.5355 38.5355C34.4732 37.5979 35 36.3261 35 35C35 33.6739 34.4732 32.4021 33.5355 31.4645C32.5979 30.5268 31.3261 30 30 30C28.6739 30 27.4021 30.5268 26.4645 31.4645C25.5268 32.4021 25 33.6739 25 35Z" />
                                <path
                                    d="M12.5026 20H47.5001C48.221 19.9999 48.9334 20.1557 49.5884 20.4568C50.2435 20.7578 50.8257 21.1969 51.2952 21.744C51.7646 22.2911 52.1102 22.9333 52.3083 23.6265C52.5063 24.3196 52.5521 25.0475 52.4425 25.76L49.3051 43.64C49.0327 45.4111 48.1352 47.0262 46.775 48.1928C45.4149 49.3594 43.682 50.0005 41.8901 50H18.1101C16.3185 49.9999 14.5863 49.3586 13.2266 48.192C11.867 47.0254 10.9699 45.4107 10.6976 43.64L7.56005 25.76C7.45047 25.0475 7.49627 24.3196 7.69431 23.6265C7.89236 22.9333 8.23795 22.2911 8.70741 21.744C9.17688 21.1969 9.7591 20.7578 10.4142 20.4568C11.0692 20.1557 11.7816 19.9999 12.5026 20Z" />
                                <path d="M42.5 25L37.5 10" />
                                <path d="M17.5 25L22.5 10" />
                            </svg>
                        </div>
                        <h5 class="module-title mb-0 mt-2">My Product</h5>
                    </a>
                </li> --}}

                <!-- Icon: My cloud-->
                {{-- <li class="module-item position-relative">
                    <a class="text-center animated-icon" href="{{ route('my-cloud') }}"
                        aria-label="Access and manage your files online.">
                        <div class="module-box rounded-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60"
                                fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path
                                    d="M22.5 10H30L35 15H47.5C48.8261 15 50.0979 15.5268 51.0355 16.4645C51.9732 17.4021 52.5 18.6739 52.5 20V37.5C52.5 38.8261 51.9732 40.0979 51.0355 41.0355C50.0979 41.9732 48.8261 42.5 47.5 42.5H22.5C21.1739 42.5 19.9021 41.9732 18.9645 41.0355C18.0268 40.0979 17.5 38.8261 17.5 37.5V15C17.5 13.6739 18.0268 12.4021 18.9645 11.4645C19.9021 10.5268 21.1739 10 22.5 10Z" />
                                <path
                                    d="M42.5 42.5V47.5C42.5 48.8261 41.9732 50.0979 41.0355 51.0355C40.0979 51.9732 38.8261 52.5 37.5 52.5H12.5C11.1739 52.5 9.90215 51.9732 8.96447 51.0355C8.02678 50.0979 7.5 48.8261 7.5 47.5V25C7.5 23.6739 8.02678 22.4021 8.96447 21.4645C9.90215 20.5268 11.1739 20 12.5 20H17.5" />
                            </svg>
                        </div>
                        <h5 class="module-title mb-0 mt-2">My Cloud</h5>
                    </a>
                </li> --}}

                <!-- Icon: My Contacts-->
                {{-- <li class="module-item">
                    <a class="text-center animated-icon" href="{{ route('contacts') }}"
                        aria-label="Your personal and professional directory.">
                        <div class="module-box rounded-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60"
                                fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path
                                    d="M50 15V45C50 46.3261 49.4732 47.5979 48.5355 48.5355C47.5979 49.4732 46.3261 50 45 50H20C18.6739 50 17.4021 49.4732 16.4645 48.5355C15.5268 47.5979 15 46.3261 15 45V15C15 13.6739 15.5268 12.4021 16.4645 11.4645C17.4021 10.5268 18.6739 10 20 10H45C46.3261 10 47.5979 10.5268 48.5355 11.4645C49.4732 12.4021 50 13.6739 50 15Z" />
                                <path d="M25 40H40" />
                                <path
                                    d="M27.5 27.5C27.5 28.8261 28.0268 30.0979 28.9645 31.0355C29.9021 31.9732 31.1739 32.5 32.5 32.5C33.8261 32.5 35.0979 31.9732 36.0355 31.0355C36.9732 30.0979 37.5 28.8261 37.5 27.5C37.5 26.1739 36.9732 24.9021 36.0355 23.9645C35.0979 23.0268 33.8261 22.5 32.5 22.5C31.1739 22.5 29.9021 23.0268 28.9645 23.9645C28.0268 24.9021 27.5 26.1739 27.5 27.5Z" />
                                <path d="M10 20H17.5" />
                                <path d="M10 30H17.5" />
                                <path d="M10 40H17.5" />
                            </svg>
                        </div>
                        <h5 class="module-title mb-0 mt-2">My Contacts</h5>
                    </a>
                </li> --}}

                <!-- Icon: Events-->
                {{-- <li class="module-item">
                    <a class="text-center animated-icon" href="{{ route('my-events') }}"
                        aria-label="Track upcoming and past events.">
                        <div class="module-box rounded-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60"
                                fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M37.5 12.5V17.5" />
                                <path d="M37.5 27.5V32.5" />
                                <path d="M37.5 42.5V47.5" />
                                <path
                                    d="M12.5 12.5H47.5C48.8261 12.5 50.0979 13.0268 51.0355 13.9645C51.9732 14.9021 52.5 16.1739 52.5 17.5V25C51.1739 25 49.9021 25.5268 48.9645 26.4645C48.0268 27.4021 47.5 28.6739 47.5 30C47.5 31.3261 48.0268 32.5979 48.9645 33.5355C49.9021 34.4732 51.1739 35 52.5 35V42.5C52.5 43.8261 51.9732 45.0979 51.0355 46.0355C50.0979 46.9732 48.8261 47.5 47.5 47.5H12.5C11.1739 47.5 9.90215 46.9732 8.96447 46.0355C8.02678 45.0979 7.5 43.8261 7.5 42.5V35C8.82608 35 10.0979 34.4732 11.0355 33.5355C11.9732 32.5979 12.5 31.3261 12.5 30C12.5 28.6739 11.9732 27.4021 11.0355 26.4645C10.0979 25.5268 8.82608 25 7.5 25V17.5C7.5 16.1739 8.02678 14.9021 8.96447 13.9645C9.90215 13.0268 11.1739 12.5 12.5 12.5Z" />
                            </svg>
                        </div>
                        <h5 class="module-title mb-0 mt-2">Events</h5>
                    </a>
                </li> --}}

                <!-- Icon: Account Setting-->
                <li class="module-item">
                    <a class="text-center animated-icon" href="{{ route('account-settings') }}"
                        aria-label="Control your preferences and configuration.">
                        <div class="module-box rounded-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60"
                                fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path
                                    d="M25.8125 10.7925C26.8775 6.4025 33.1225 6.4025 34.1875 10.7925C34.3473 11.452 34.6606 12.0644 35.1018 12.58C35.543 13.0956 36.0997 13.4996 36.7266 13.7594C37.3535 14.0191 38.0329 14.1271 38.7095 14.0747C39.386 14.0222 40.0406 13.8108 40.62 13.4575C44.4775 11.1075 48.895 15.5225 46.545 19.3825C46.1922 19.9616 45.9811 20.6158 45.9288 21.2919C45.8765 21.968 45.9844 22.6469 46.2438 23.2734C46.5032 23.9 46.9068 24.4564 47.4218 24.8976C47.9368 25.3388 48.5486 25.6523 49.2075 25.8125C53.5975 26.8775 53.5975 33.1225 49.2075 34.1875C48.548 34.3473 47.9356 34.6606 47.42 35.1018C46.9044 35.543 46.5004 36.0997 46.2406 36.7266C45.9809 37.3535 45.8729 38.0329 45.9253 38.7095C45.9778 39.386 46.1892 40.0406 46.5425 40.62C48.8925 44.4775 44.4775 48.895 40.6175 46.545C40.0384 46.1922 39.3842 45.9811 38.7081 45.9288C38.032 45.8765 37.3531 45.9844 36.7266 46.2438C36.1 46.5032 35.5436 46.9068 35.1024 47.4218C34.6612 47.9368 34.3477 48.5486 34.1875 49.2075C33.1225 53.5975 26.8775 53.5975 25.8125 49.2075C25.6527 48.548 25.3394 47.9356 24.8982 47.42C24.457 46.9044 23.9003 46.5004 23.2734 46.2406C22.6465 45.9809 21.9671 45.8729 21.2905 45.9253C20.614 45.9778 19.9594 46.1892 19.38 46.5425C15.5225 48.8925 11.105 44.4775 13.455 40.6175C13.8078 40.0384 14.0189 39.3842 14.0712 38.7081C14.1235 38.032 14.0156 37.3531 13.7562 36.7266C13.4968 36.1 13.0932 35.5436 12.5782 35.1024C12.0632 34.6612 11.4514 34.3477 10.7925 34.1875C6.4025 33.1225 6.4025 26.8775 10.7925 25.8125C11.452 25.6527 12.0644 25.3394 12.58 24.8982C13.0956 24.457 13.4996 23.9003 13.7594 23.2734C14.0191 22.6465 14.1271 21.9671 14.0747 21.2905C14.0222 20.614 13.8108 19.9594 13.4575 19.38C11.1075 15.5225 15.5225 11.105 19.3825 13.455C21.8825 14.975 25.1225 13.63 25.8125 10.7925Z" />
                                <path
                                    d="M22.5 30C22.5 31.9891 23.2902 33.8968 24.6967 35.3033C26.1032 36.7098 28.0109 37.5 30 37.5C31.9891 37.5 33.8968 36.7098 35.3033 35.3033C36.7098 33.8968 37.5 31.9891 37.5 30C37.5 28.0109 36.7098 26.1032 35.3033 24.6967C33.8968 23.2902 31.9891 22.5 30 22.5C28.0109 22.5 26.1032 23.2902 24.6967 24.6967C23.2902 26.1032 22.5 28.0109 22.5 30Z" />
                            </svg>
                        </div>
                        <h5 class="module-title mb-0 mt-2">Account</h5>
                    </a>
                </li>

                <!-- Icon: New-->
                {{-- <li class="module-item">
                    <a class="text-center animated-icon" href="#" data-bs-toggle="modal" data-bs-target="#Modules_List">
                        <div class="module-box rounded-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60"
                                fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M30 12.5V47.5" />
                                <path d="M12.5 30H47.5" />
                            </svg>
                        </div>
                        <h5 class="module-title mb-0 mt-2">New</h5>
                    </a>
                </li> --}}

            </ul>
        </div>
    </div>
    <!-- End:: Page Modules Lisr -->

    <!-- Start:: Add new module popup -->
    <div class="modal fade" id="Modules_List" tabindex="-1" aria-labelledby="Modules_List" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-4">
                <div class="modal-body p-lg-5 p-4">
                    <button type="button"
                        class="btn-close position-absolute top-0 end-0 mt-2 me-2 opacity-25"
                        data-bs-dismiss="modal" aria-label="Close"></button>

                    <h5>Need More Modules?</h5>
                    <p class="lead lh-base mb-4">
                        We're here to help! If you need custom modules, feel free to contact our team — we'll build the app
                        exactly as per your requirements.
                    </p>

                    <div class="bg-card border p-4 rounded-4">
                        <div class="avatar-group d-flex align-items-center ps-3 mb-3">
                            <div class="avatar-item avatar lg">
                                <img class="img-fluid border rounded-circle" src="assets/images/user-8.png" alt="Avatar">
                            </div>
                            <div class="avatar-item avatar lg">
                                <img class="img-fluid border rounded-circle" src="assets/images/user-4.png" alt="Avatar">
                            </div>
                            <div class="avatar-item avatar lg">
                                <img class="img-fluid border rounded-circle" src="assets/images/user-7.png" alt="Avatar">
                            </div>
                        </div>

                        <h5>We are here to help</h5>
                        <p>Let’s improve your product with clear steps and smarter UX/UI.</p>

                        <a class="btn btn-primary px-4 py-3" href="https://calendar.app.google/sknAVCJ8rsohNHES8"
                            aria-label="Book a 15-Min Free Call">
                            Book a 15-Min Free Call
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        // Search Result
        $(".searchInput").on("focus", function() {
            $('.search-result').removeClass("active");
        });
        $(".searchInput").on("blur", function() {
            $('.search-result').addClass("active");
        });

        // Keyboard Shortcuts
        document.addEventListener('keydown', function(e) {
            // Cmd + K on macOS OR Ctrl + K on Windows/Linux
            if ((e.metaKey || e.ctrlKey) && e.key === 'k') {
                e.preventDefault();
                document.getElementById('searchInput').focus();
            }
        });

        // Pure JavaScript Counter
        const counters = document.querySelectorAll('.counter');
        counters.forEach(counter => {
            const updateCount = () => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;

                const increment = Math.max(target / 50, 1);

                if (count < target) {
                    counter.innerText = Math.ceil(count + increment);
                    setTimeout(updateCount, 10);
                } else {
                    counter.innerText = target.toLocaleString();
                }
            };

            updateCount();
        });

        function updateDateAndDay() {
            const now = new Date();

            const dayName = now.toLocaleDateString('en-US', {
                weekday: 'long'
            });
            const datePart = now.toLocaleDateString('en-US', {
                day: '2-digit',
                month: 'long',
                year: 'numeric'
            });

            document.getElementById('dayName').innerText = dayName;
            document.getElementById('fullDate').innerText = datePart;
        }

        updateDateAndDay();
    </script>
@endpush
