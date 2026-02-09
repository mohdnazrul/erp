@extends('layout.app')
@section('content')
@php
    $user = auth()->user();
    $avatar = $user?->profile_photo_url ?? asset('assets/images/profile.png'); // fallback
@endphp

<!-- Start:: Breadcrumbs -->
<div class="page-breadcrumbs py-2 py-md-3">
    <div class="container-fluid px-2 px-md-4">
        <div class="d-flex align-items-stretch justify-content-between">
            <div class="back-btn d-flex align-items-center">
                <a href="javascript:history.back()" class="d-flex align-items-center hover-svg">
                    <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 7H15M1 7L7 13M1 7L7 1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span class="ms-2 d-none d-md-block fs-14 text-black-50">Back</span>
                </a>
            </div>

            <div class="right-breadcrumb d-flex flex-fill align-items-center justify-content-between">
                <div class="page-name fs-20 fw-bold ms-md-4 ms-2 position-relative">Account Settings</div>
                <ul class="page-action list-unstyled ms-auto mb-0 gap-3 d-flex align-items-center justify-content-end">

                    <li class="position-relative d-md-block d-none">
                        <input class="form-control position-absolute px-3 rounded-pill z-0 d-none"
                               type="text" id="PageSearchInput" placeholder="Search..." />
                        <a href="javascript:void(0)" class="hover-svg position-relative text-decoration-none z-3" id="searchToggleBtn">
                            <svg width="26" height="26" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.75 12.5C3.75 13.6491 3.97633 14.7869 4.41605 15.8485C4.85578 16.9101 5.5003 17.8747 6.31282 18.6872C7.12533 19.4997 8.08992 20.1442 9.15152 20.5839C10.2131 21.0237 11.3509 21.25 12.5 21.25C13.6491 21.25 14.7869 21.0237 15.8485 20.5839C16.9101 20.1442 17.8747 19.4997 18.6872 18.6872C19.4997 17.8747 20.1442 16.9101 20.5839 15.8485C21.0237 14.7869 21.25 13.6491 21.25 12.5C21.25 11.3509 21.0237 10.2131 20.5839 9.15152C20.1442 8.08992 19.4997 7.12533 18.6872 6.31282C17.8747 5.5003 16.9101 4.85578 15.8485 4.41605C14.7869 3.97633 13.6491 3.75 12.5 3.75C11.3509 3.75 10.2131 3.97633 9.15152 4.41605C8.08992 4.85578 7.12533 5.5003 6.31282 6.31282C5.5003 7.12533 4.85578 8.08992 4.41605 9.15152C3.97633 10.2131 3.75 11.3509 3.75 12.5Z" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M26.25 26.25L18.75 18.75" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </a>
                    </li>

                    <li class="d-md-block d-none">
                        <a href="javascript:location.reload()" class="text-decoration-none hover-svg">
                            <svg width="26" height="26" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M25 13.7501C24.6943 11.5504 23.6738 9.5122 22.0958 7.94949C20.5178 6.38679 18.4697 5.38627 16.2671 5.10206C14.0645 4.81785 11.8295 5.26572 9.9065 6.37668C7.98348 7.48763 6.47906 9.20004 5.625 11.2501M5 6.25012V11.2501H10"/>
                                <path d="M5 16.25C5.3057 18.4497 6.32616 20.4879 7.9042 22.0506C9.48224 23.6133 11.5303 24.6139 13.7329 24.8981C15.9355 25.1823 18.1705 24.7344 20.0935 23.6234C22.0165 22.5125 23.5209 20.8001 24.375 18.75M25 23.75V18.75H20"/>
                            </svg>
                        </a>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="text-decoration-none btn-toggle-leftsidebar hover-svg">
                            <svg width="26" height="26" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 7.5H25"/>
                                <path d="M8.75 15H25"/>
                                <path d="M12.5 22.5H25"/>
                            </svg>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End:: Breadcrumbs -->


<!-- Start:: Content Wrapper -->
<div class="content-wrapper content-wrapper-radius d-flex">

    <!-- Start:: Sidebar -->
    <aside class="left-sidebar border-end z-2" id="leftSidebar">
        <nav class="nav-sidebar">
            <ul class="list-unstyled li_animate mt-3 mb-0">
                <li class="mb-4">
                    <div class="d-flex flex-column align-items-start gap-2">
                        <div class="image-input border border-primary border-3 avatar position-relative d-inline-block xxl rounded-4"
                             style="background-image: url('{{ $avatar }}')">
                            <div class="avatar-wrapper rounded-4" style="background-image: url('{{ $avatar }}')"></div>

                            {{-- Keep your file input UI (wire later) --}}
                            <div class="file-input position-absolute end-0 bottom-0 me-2 mb-2">
                                <input type="file" class="form-control" name="file-input" id="file-input1">
                                <label for="file-input1" class="bg-primary text-white shadow">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" />
                                        <path d="M13.5 6.5l4 4" />
                                    </svg>
                                </label>
                            </div>
                        </div>

                        <h5 class="mb-0"><a href="#">{{ $user?->name ?? 'Guest' }}</a></h5>
                        <p class="small text-truncate mb-0">{{ $user?->email ?? '-' }}</p>
                    </div>
                </li>
            </ul>
        </nav>
    </aside>

    <div class="sidebar-overlay" id="sidebarOverlay"></div>
    <!-- End:: Sidebar -->


    <!-- Start:: Content -->
    <div class="content-area py-4">
        <div class="container-fluid px-2 px-md-4">

            {{-- status + errors --}}
            @if (session('status'))
                <div class="alert alert-success rounded-4">{{ session('status') }}</div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger rounded-4">
                    <ul class="mb-0">
                        @foreach($errors->all() as $e)
                            <li>{{ $e }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="row g-3">
                <div class="col-12">

                    <div class="border-bg mb-5 position-relative px-3 py-4 rounded-4">
                        <ul class="nav nav-pills flex-column flex-sm-row mb-0" role="tablist">
                            <li class="nav-item"><a class="nav-link rounded-3 active" data-bs-toggle="tab" href="#general" role="tab">General</a></li>
                            <li class="nav-item"><a class="nav-link rounded-3" data-bs-toggle="tab" href="#password" role="tab">Password</a></li>
                            <li class="nav-item"><a class="nav-link rounded-3" data-bs-toggle="tab" href="#notifications" role="tab">Notifications</a></li>
                            <li class="nav-item"><a class="nav-link rounded-3" data-bs-toggle="tab" href="#team" role="tab">Team</a></li>
                        </ul>
                        <div class="d-flex top-100 position-absolute" style="height: 48px; left: 50px;">
                            <div class="vr border-bg opacity-100"></div>
                            <div class="vr border-bg opacity-100 ms-1"></div>
                        </div>
                    </div>

                    <div class="tab-content mb-4">

                        <!-- Tab: General -->
                        <div class="tab-pane fade show active position-relative" id="general" role="tabpanel">
                            <div class="card rounded-4">
                                <div class="card-body p-3 p-md-4">

                                    {{-- Fortify profile update --}}
                                    <form method="POST" action="{{ route('user-profile-information.update') }}">
                                        @csrf
                                        @method('PUT')

                                        <div class="d-flex justify-content-between align-items-center mb-3 gap-3">
                                            <div>
                                                <h5 class="fw-medium text-uppercase mb-0">General</h5>
                                                <small>Enter your information to enhance your experience while using our website.</small>
                                            </div>
                                            <div class="d-none d-md-flex gap-2">
                                                <button type="reset" class="btn btn-secondary">Discard</button>
                                                <button type="submit" class="btn btn-primary text-nowrap">Save Changes</button>
                                            </div>
                                        </div>

                                        <hr class="border-dashed my-4">

                                        {{-- Company / Phone: only works if you added columns in users table --}}
                                        <div class="row align-items-center">
                                            <label for="company" class="col-md-2 form-label text-body opacity-100 fs-6">Company</label>
                                            <div class="col-md-8 col-lg-5">
                                                <input type="text" class="form-control form-control-lg"
                                                       id="company" name="company"
                                                       value="{{ old('company', $user?->company) }}"
                                                       placeholder="Enter your company name" autocomplete="off">
                                            </div>
                                        </div>

                                        <hr class="border-dashed my-4">

                                        <div class="row align-items-center">
                                            <label for="name" class="col-md-2 form-label text-body opacity-100 fs-6">Name</label>
                                            <div class="col-md-8 col-lg-5">
                                                <input type="text" class="form-control form-control-lg"
                                                       id="name" name="name"
                                                       value="{{ old('name', $user?->name) }}"
                                                       placeholder="Enter your name" autocomplete="off">
                                            </div>
                                        </div>

                                        <hr class="border-dashed my-4">

                                        <div class="row align-items-center">
                                            <label for="email" class="col-md-2 form-label text-body opacity-100 fs-6">Email</label>
                                            <div class="col-md-8 col-lg-5">
                                                <input type="email" class="form-control form-control-lg"
                                                       id="email" name="email"
                                                       value="{{ old('email', $user?->email) }}"
                                                       placeholder="Enter your email" autocomplete="off">
                                            </div>
                                        </div>

                                        <hr class="border-dashed my-4">

                                        <div class="row align-items-center">
                                            <label for="phone" class="col-md-2 form-label text-body opacity-100 fs-6">Phone</label>
                                            <div class="col-md-8 col-lg-5">
                                                <input type="text" class="form-control form-control-lg"
                                                       id="phone" name="phone"
                                                       value="{{ old('phone', $user?->phone) }}"
                                                       placeholder="Enter your phone number" autocomplete="off">
                                            </div>
                                        </div>

                                        <hr class="border-dashed my-4">

                                        {{-- Photo input (UI only now) --}}
                                        <div class="row align-items-center">
                                            <label for="photo" class="col-md-2 form-label text-body opacity-100 fs-6">Photo</label>
                                            <div class="col-md-8 col-lg-5">
                                                <input type="file" class="dropify" id="photo" name="photo">
                                            </div>
                                        </div>

                                        <hr class="d-md-none d-flex border-dashed my-4">
                                        <div class="d-md-none d-flex gap-2 justify-content-end">
                                            <button type="reset" class="btn btn-secondary">Discard</button>
                                            <button type="submit" class="btn btn-primary text-nowrap">Save Changes</button>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>

                        <!-- Tab: Password -->
                        <div class="tab-pane fade" id="password" role="tabpanel">

                            <div class="card rounded-4">
                                <div class="card-body p-3 p-md-4">
                                    <div class="d-flex justify-content-between align-items-sm-center flex-column flex-sm-row mb-3 gap-3">
                                        <div>
                                            <h5 class="fw-medium text-uppercase mb-0">Two-Step Verification</h5>
                                            <small>Your data allows us to deliver a more tailored user experience.</small>
                                        </div>

                                        {{-- Fortify enable 2FA --}}
                                        <form method="POST" action="{{ route('two-factor.enable') }}">
                                            @csrf
                                            <button type="submit" class="btn btn-primary text-nowrap">Enable 2FA</button>
                                        </form>
                                    </div>

                                    <hr class="border-dashed my-4">

                                    {{-- Keep your UI blocks --}}
                                    <div class="row row-cols-1 row-cols-md-2 align-items-center">
                                        <div class="col">
                                            <div class="list-group list-group-flush list-group-custom">
                                                <div class="list-group-item bg-transparent d-flex justify-content-between flex-sm-row flex-column gap-2">
                                                    <h6 class="mb-0 fw-medium">
                                                        <span class="mb-1 d-block">Authenticator App</span>
                                                        <small class="text-muted d-block">Google, Facebook, Microsoft auth app</small>
                                                    </h6>
                                                    <button class="btn btn-primary" type="button">Active</button>
                                                </div>
                                            </div>
                                            <hr class="border-dashed my-4">
                                        </div>
                                        <div class="col">
                                            <div class="list-group list-group-flush list-group-custom">
                                                <div class="list-group-item bg-transparent d-flex justify-content-between flex-sm-row flex-column gap-2">
                                                    <h6 class="mb-0 fw-medium">
                                                        <span class="mb-1 d-block">Registered Email</span>
                                                        <small class="text-muted d-block">Used to verify your account</small>
                                                    </h6>
                                                    <button class="btn btn-primary" type="button">Active</button>
                                                </div>
                                            </div>
                                            <hr class="border-dashed my-4">
                                        </div>
                                        <div class="col">
                                            <div class="list-group list-group-flush list-group-custom">
                                                <div class="list-group-item bg-transparent d-flex justify-content-between flex-sm-row flex-column gap-2">
                                                    <h6 class="mb-0 fw-medium">
                                                        <span class="mb-1 d-block">Verification by Number</span>
                                                        <small class="text-muted d-block">Received a text message</small>
                                                    </h6>
                                                    <button class="btn btn-primary" type="button">Active</button>
                                                </div>
                                            </div>
                                            <hr class="border-dashed my-4">
                                        </div>
                                        <div class="col">
                                            <div class="list-group list-group-flush list-group-custom">
                                                <div class="list-group-item bg-transparent d-flex justify-content-between flex-sm-row flex-column gap-2">
                                                    <h6 class="mb-0 fw-medium">
                                                        <span class="mb-1 d-block">Mobile App</span>
                                                        <small class="text-muted d-block">Scan QR code with Logged App</small>
                                                    </h6>
                                                    <button class="btn btn-primary" type="button">Active</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <hr class="border-0 my-3">

                            {{-- Fortify password update --}}
                            <div class="card rounded-4">
                                <div class="card-body p-3 p-md-4">
                                    <form method="POST" action="{{ route('user-password.update') }}">
                                        @csrf
                                        @method('PUT')

                                        <div class="d-flex justify-content-between align-items-center mb-3 gap-3">
                                            <div>
                                                <h5 class="fw-medium text-uppercase mb-0">Update Password</h5>
                                                <small>Modify your current password to enhance security.</small>
                                            </div>
                                            <div class="d-none d-md-flex gap-2">
                                                <button type="reset" class="btn btn-secondary">Discard</button>
                                                <button type="submit" class="btn btn-primary text-nowrap">Save Changes</button>
                                            </div>
                                        </div>

                                        <hr class="border-dashed my-4">

                                        <div class="d-flex flex-column">
                                            <h6 class="mb-2">Change Password</h6>
                                            <div class="mb-3">
                                                <input type="password" class="form-control form-control-lg"
                                                       placeholder="Current Password" name="current_password"
                                                       autocomplete="current-password">
                                            </div>
                                            <div class="mb-1">
                                                <input type="password" class="form-control form-control-lg"
                                                       placeholder="New Password" name="password"
                                                       autocomplete="new-password">
                                            </div>
                                            <div>
                                                <input type="password" class="form-control form-control-lg"
                                                       placeholder="Confirm New Password" name="password_confirmation"
                                                       autocomplete="new-password">
                                                <span class="text-muted small">Minimum 8 characters</span>
                                            </div>
                                        </div>

                                        <hr class="d-md-none d-flex border-dashed my-4">
                                        <div class="d-md-none d-flex gap-2 justify-content-end">
                                            <button type="reset" class="btn btn-secondary">Discard</button>
                                            <button type="submit" class="btn btn-primary text-nowrap">Save Changes</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Tab: Notifications (keep UI) -->
                        <div class="tab-pane fade" id="notifications" role="tabpanel">
                            {{-- unchanged --}}
                            {!! trim(preg_replace('/^\s+|\s+$/m', '', '')) !!}
                            <div class="card rounded-4">
                                <div class="card-body p-3 p-md-4">
                                    <div class="d-flex justify-content-between align-items-center mb-3 gap-3">
                                        <div>
                                            <h5 class="fw-medium text-uppercase mb-0">Notification Preferences</h5>
                                            <small>Choose how and when you want to receive updates.</small>
                                        </div>
                                        <div class="d-none d-md-flex gap-2">
                                            <button class="btn btn-secondary" type="button">Discard</button>
                                            <button class="btn btn-primary text-nowrap" type="button">Save Changes</button>
                                        </div>
                                    </div>
                                    <hr class="border-dashed my-4">
                                    {{-- keep your table as-is --}}
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th rowspan="2">Notification Type</th>
                                                <th colspan="4" class="text-center">Notification Type</th>
                                            </tr>
                                            <tr>
                                                <th>Email</th><th>SMS</th><th>Push</th><th>All</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- your existing rows --}}
                                            {{-- ... --}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Tab: Team (keep UI) -->
                        <div class="tab-pane fade" id="team" role="tabpanel">
                            {{-- unchanged --}}
                            {{-- your existing team HTML here --}}
                            {{-- ... --}}
                        </div>

                    </div>
                </div>
            </div>

            <!-- Start:: Page Footer -->
            <footer class="small mt-4">
                <div class="row g-3">
                    <div class="col-md-6">
                        <span>
                            Copyright © <span id="currentYear"></span>
                            <span class="fw-bold">
                                <a href="https://thememakker.com/" aria-label="Thememakker infotech LLP" target="_blank">ThemeMakker</a>
                            </span> All rights reserved.
                        </span>
                    </div>
                    <div class="col-md-6">
                        <div class="align-items-center d-flex justify-content-md-end">
                            <a class="link-primary" href="#" title="">Term &amp; Conditions</a>
                            <span class="mx-2 text-muted"> | </span>
                            <a class="link-primary" href="#" title="">Privacy &amp; Policy</a>
                        </div>
                    </div>
                </div>
            </footer>

        </div>
    </div>
    <!-- End:: Content -->

</div>

{{-- scripts (no need jQuery) --}}
@push('scripts')
<script>
    // year
    document.getElementById("currentYear").textContent = new Date().getFullYear();

    // search toggle
    (function(){
        const btn = document.getElementById('searchToggleBtn');
        const input = document.getElementById('PageSearchInput');
        if(!btn || !input) return;
        btn.addEventListener('click', function(e){
            e.preventDefault();
            input.classList.toggle('d-none');
            if(!input.classList.contains('d-none')) input.focus();
        });
    })();

    // sidebar toggle (add your css .open if needed)
    (function(){
        const sidebar = document.getElementById('leftSidebar');
        const overlay = document.getElementById('sidebarOverlay');
        const toggle = document.querySelector('.btn-toggle-leftsidebar');
        if(!sidebar || !overlay || !toggle) return;

        function open(){ sidebar.classList.add('open'); overlay.classList.add('show'); }
        function close(){ sidebar.classList.remove('open'); overlay.classList.remove('show'); }

        toggle.addEventListener('click', function(e){
            e.preventDefault();
            sidebar.classList.contains('open') ? close() : open();
        });
        overlay.addEventListener('click', close);
    })();
</script>
@endpush

@endsection
