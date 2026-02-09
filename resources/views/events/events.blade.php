@extends('events.layout.app')
@push('style')
    <link rel="stylesheet" href="{{ asset('assets/css/project.css') }}">
@endpush
@section('breadcrumbs')
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
                    <div class="page-name fs-20 fw-bold ms-md-4 ms-2 position-relative">My Events</div>
                    <ul class="page-action list-unstyled ms-auto mb-0 gap-3 d-flex align-items-center justify-content-end">
                        <li class="position-relative d-md-block d-none">
                            <input class="form-control position-absolute px-3 rounded-pill z-0" type="text" id="PageSearchInput" placeholder="Search..." />
                            <a href="#" class="hover-svg position-relative text-decoration-none z-3" id="searchToggleBtn">
                                <svg width="26" height="26" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.75 12.5C3.75 13.6491 3.97633 14.7869 4.41605 15.8485C4.85578 16.9101 5.5003 17.8747 6.31282 18.6872C7.12533 19.4997 8.08992 20.1442 9.15152 20.5839C10.2131 21.0237 11.3509 21.25 12.5 21.25C13.6491 21.25 14.7869 21.0237 15.8485 20.5839C16.9101 20.1442 17.8747 19.4997 18.6872 18.6872C19.4997 17.8747 20.1442 16.9101 20.5839 15.8485C21.0237 14.7869 21.25 13.6491 21.25 12.5C21.25 11.3509 21.0237 10.2131 20.5839 9.15152C20.1442 8.08992 19.4997 7.12533 18.6872 6.31282C17.8747 5.5003 16.9101 4.85578 15.8485 4.41605C14.7869 3.97633 13.6491 3.75 12.5 3.75C11.3509 3.75 10.2131 3.97633 9.15152 4.41605C8.08992 4.85578 7.12533 5.5003 6.31282 6.31282C5.5003 7.12533 4.85578 8.08992 4.41605 9.15152C3.97633 10.2131 3.75 11.3509 3.75 12.5Z" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M26.25 26.25L18.75 18.75" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </a>
                        </li>
                        <li class="d-md-block d-none">
                            <a href="#" class="text-decoration-none hover-svg">
                                <svg width="26" height="26" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M25 13.7501C24.6943 11.5504 23.6738 9.5122 22.0958 7.94949C20.5178 6.38679 18.4697 5.38627 16.2671 5.10206C14.0645 4.81785 11.8295 5.26572 9.9065 6.37668C7.98348 7.48763 6.47906 9.20004 5.625 11.2501M5 6.25012V11.2501H10"/>
                                    <path d="M5 16.25C5.3057 18.4497 6.32616 20.4879 7.9042 22.0506C9.48224 23.6133 11.5303 24.6139 13.7329 24.8981C15.9355 25.1823 18.1705 24.7344 20.0935 23.6234C22.0165 22.5125 23.5209 20.8001 24.375 18.75M25 23.75V18.75H20"/>
                                </svg>
                            </a>
                        </li>
                        <li class="d-md-block d-none dropdown">
                            <a href="#" class="text-decoration-none hover-svg" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                <svg width="26" height="26" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 5H25V7.715C24.9999 8.37799 24.7364 9.01377 24.2675 9.4825L18.75 15V23.75L11.25 26.25V15.625L5.65 9.465C5.23181 9.00491 5.00007 8.4055 5 7.78375V5Z" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end p-2 p-xl-3 shadow rounded-4" style="width: 300px;">
                                <h6>Filter Options</h6>
                                <div class="row g-3 mt-3">
                                    <div class="col-12">
                                        <label for="search" class="form-label small text-muted">Sorted by:</label>
                                        <input type="email" class="form-control" placeholder="Search" id="search">
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label small text-muted" for="status">Status:</label>
                                        <select class="form-select" id="status">
                                            <option selected="">Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label small text-muted" for="switch">Notifications:</label>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch" id="switch">
                                            <label class="form-check-label" for="switch">Enabled</label>
                                        </div>
                                    </div>
                                    <div class="col-12 text-end mt-4">
                                        <button type="reset" class="btn btn-sm btn-light me-1">Reset</button>
                                        <button type="submit" class="btn btn-sm btn-primary">Apply</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="d-md-block d-none">
                            <a href="#" class="text-decoration-none hover-svg" data-bs-toggle="modal" data-bs-target="#CreateEvent">
                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M13 2V24"/>
                                    <path d="M2 13H24"/>
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
@endsection
@section('page-content')
    <div class="border-bg mb-5 position-relative px-3 py-4 rounded-4">
        <div class="row g-3 align-items-center">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="form-floating">
                    <select class="form-select" id="monthSelect" aria-label="Select Month">
                        <option>Select</option>
                        <option>January</option>
                        <option>February</option>
                        <option>March</option>
                        <option>April</option>
                        <option>May</option>
                        <option>June</option>
                        <option>July</option>
                        <option>August</option>
                        <option>September</option>
                        <option>October</option>
                        <option>November</option>
                        <option>December</option>
                    </select>
                    <label for="monthSelect">Select Month</label>
                </div>
            </div>
            <div class="col">
                <div class="position-relative">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="event_search" placeholder="Search...">
                        <label class="event_search" for="event_search">Event Search...</label>
                    </div>
                    <button type="button" class="btn btn-primary position-absolute top-50 end-0 translate-middle-y me-2">Search</button>
                </div>
            </div>
        </div>
        <div class="d-flex top-100 position-absolute" style="height: 48px; left: 50px;">
            <div class="vr border-bg opacity-100"></div>
            <div class="vr border-bg opacity-100 ms-1"></div>
        </div>
    </div>

    <table class="table table-borderless align-middle event-list table-row-grid border-top">
        <tr>
            <td><a href="#" aria-label="Event cover image"><img style="width: 160px;" class="img-fluid rounded-3" src="assets/images/gallery/01.png" alt="Event cover photo"></a></td>
            <td>
                <h5><a href="#" aria-label="Event name">FutureStack Summit</a></h5>
                <address class="mb-md-0 fs-14 text-muted"><strong>Vanue:</strong> 123 Placeholder Street, Demo City, ZZ 99999</address>
            </td>
            <td>
                <div class="mb-2"><strong>Date:</strong> 23 Aug 2025</div>
                <div><strong>Tickets:</strong> Avilable 12/ 100</div>
            </td>
            <td>
                <div class="d-md-none d-sm-none d-lg-flex d-flex flex-column speaker align-items-center align-items-md-start">
                <p class="mb-2">Events Speaker</p>
                <div class="avatar-group d-flex align-items-center ps-2">
                    <div class="avatar-item avatar md">
                        <img class="img-fluid border rounded-circle" src="assets/images/user-5.png" alt="Avatar" data-bs-toggle="tooltip" data-placement="top" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                    </div>
                    <div class="avatar-item avatar md">
                        <img class="img-fluid border rounded-circle" src="assets/images/user-7.png" alt="Avatar" data-bs-toggle="tooltip" data-placement="top" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                    </div>
                    <div class="avatar-item avatar md">
                        <img class="img-fluid border rounded-circle" src="assets/images/user-6.png" alt="Avatar" data-bs-toggle="tooltip" data-placement="top" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                    </div>
                </div>
                </div>
            </td>
            <td>
                <button type="button" class="btn text-primary p-0" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Edit" data-bs-original-title="Edit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                        <path d="M16 5l3 3"></path>
                    </svg>
                </button>
                <button type="button" class="btn text-danger p-0 delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Delete" data-bs-original-title="Delete">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 7l16 0"></path>
                        <path d="M10 11l0 6"></path>
                        <path d="M14 11l0 6"></path>
                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                    </svg>
                </button>
            </td>
        </tr>
        <tr>
            <td><a href="#" aria-label="Event cover image"><img style="width: 160px;" class="img-fluid rounded-3" src="assets/images/gallery/02.png" alt="Event cover photo"></a></td>
            <td>
                <h5><a href="#" aria-label="Event name">AI Beyond Tomorrow</a></h5>
                <address class="mb-md-0 fs-14 text-muted"><strong>Vanue:</strong> 3100 Sunset Dr, Austin, TX 78704</address>
            </td>
            <td>
                <div class="mb-2"><strong>Date:</strong> 23 Aug 2025</div>
                <div><strong>Tickets:</strong> Avilable 33/ 100</div>
            </td>
            <td>
                <div class="d-md-none d-sm-none d-lg-flex d-flex flex-column speaker align-items-center align-items-md-start">
                <p class="mb-2">Events Speaker</p>
                <div class="avatar-group d-flex align-items-center ps-2">
                    <div class="avatar-item avatar md">
                        <img class="img-fluid border rounded-circle" src="assets/images/user-1.png" alt="Avatar" data-bs-toggle="tooltip" data-placement="top" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                    </div>
                    <div class="avatar-item avatar md">
                        <img class="img-fluid border rounded-circle" src="assets/images/user-2.png" alt="Avatar" data-bs-toggle="tooltip" data-placement="top" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                    </div>
                    <div class="avatar-item avatar md">
                        <img class="img-fluid border rounded-circle" src="assets/images/user-4.png" alt="Avatar" data-bs-toggle="tooltip" data-placement="top" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                    </div>
                    <div class="avatar-item avatar md">
                        <img class="img-fluid border rounded-circle" src="assets/images/user-5.png" alt="Avatar" data-bs-toggle="tooltip" data-placement="top" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                    </div>
                </div>
                </div>
            </td>
            <td>
                <button type="button" class="btn text-primary p-0" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Edit" data-bs-original-title="Edit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                        <path d="M16 5l3 3"></path>
                    </svg>
                </button>
                <button type="button" class="btn text-danger p-0 delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Delete" data-bs-original-title="Delete">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 7l16 0"></path>
                        <path d="M10 11l0 6"></path>
                        <path d="M14 11l0 6"></path>
                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                    </svg>
                </button>
            </td>
        </tr>
        <tr>
            <td><a href="#" aria-label="Event cover image"><img style="width: 160px;" class="img-fluid rounded-3" src="assets/images/gallery/03.png" alt="Event cover photo"></a></td>
            <td>
                <h5><a href="#" aria-label="Event name">Mindful Mornings</a></h5>
                <address class="mb-md-0 fs-14 text-muted"><strong>Vanue:</strong> 8 Highfield Road, Birmingham B15 2TT</address>
            </td>
            <td>
                <div class="mb-2"><strong>Date:</strong> 23 Aug 2025</div>
                <div><strong>Tickets:</strong> Avilable 54/ 100</div>
            </td>
            <td>
                <div class="d-md-none d-sm-none d-lg-flex d-flex flex-column speaker align-items-center align-items-md-start">
                <p class="mb-2">Events Speaker</p>
                <div class="avatar-group d-flex align-items-center ps-2">
                    <div class="avatar-item avatar md">
                        <img class="img-fluid border rounded-circle" src="assets/images/user-2.png" alt="Avatar" data-bs-toggle="tooltip" data-placement="top" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                    </div>
                    <div class="avatar-item avatar md">
                        <img class="img-fluid border rounded-circle" src="assets/images/user-7.png" alt="Avatar" data-bs-toggle="tooltip" data-placement="top" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                    </div>
                    <div class="avatar-item avatar md">
                        <img class="img-fluid border rounded-circle" src="assets/images/user-5.png" alt="Avatar" data-bs-toggle="tooltip" data-placement="top" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                    </div>
                </div>
                </div>
            </td>
            <td>
                <button type="button" class="btn text-primary p-0" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Edit" data-bs-original-title="Edit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                        <path d="M16 5l3 3"></path>
                    </svg>
                </button>
                <button type="button" class="btn text-danger p-0 delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Delete" data-bs-original-title="Delete">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 7l16 0"></path>
                        <path d="M10 11l0 6"></path>
                        <path d="M14 11l0 6"></path>
                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                    </svg>
                </button>
            </td>
        </tr>
        <tr>
            <td><a href="#" aria-label="Event cover image"><img style="width: 160px;" class="img-fluid rounded-3" src="assets/images/gallery/04.png" alt="Event cover photo"></a></td>
            <td>
                <h5><a href="#" aria-label="Event name">NextGen Learners</a></h5>
                <address class="mb-md-0 fs-14 text-muted"><strong>Vanue:</strong> 89 Broadway Blvd, New York, NY 10001</address>
            </td>
            <td>
                <div class="mb-2"><strong>Date:</strong> 23 Aug 2025</div>
                <div><strong>Tickets:</strong> Avilable 89/ 100</div>
            </td>
            <td>
                <div class="d-md-none d-sm-none d-lg-flex d-flex flex-column speaker align-items-center align-items-md-start">
                <p class="mb-2">Events Speaker</p>
                <div class="avatar-group d-flex align-items-center ps-2">
                    <div class="avatar-item avatar md">
                        <img class="img-fluid border rounded-circle" src="assets/images/user-3.png" alt="Avatar" data-bs-toggle="tooltip" data-placement="top" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                    </div>
                    <div class="avatar-item avatar md">
                        <img class="img-fluid border rounded-circle" src="assets/images/user-2.png" alt="Avatar" data-bs-toggle="tooltip" data-placement="top" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                    </div>
                    <div class="avatar-item avatar md">
                        <img class="img-fluid border rounded-circle" src="assets/images/user-4.png" alt="Avatar" data-bs-toggle="tooltip" data-placement="top" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                    </div>
                    <div class="avatar-item avatar md">
                        <img class="img-fluid border rounded-circle" src="assets/images/user-6.png" alt="Avatar" data-bs-toggle="tooltip" data-placement="top" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                    </div>
                    <div class="avatar-item avatar md">
                        <img class="img-fluid border rounded-circle" src="assets/images/user-1.png" alt="Avatar" data-bs-toggle="tooltip" data-placement="top" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                    </div>
                </div>
                </div>
            </td>
            <td>
                <button type="button" class="btn text-primary p-0" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Edit" data-bs-original-title="Edit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                        <path d="M16 5l3 3"></path>
                    </svg>
                </button>
                <button type="button" class="btn text-danger p-0 delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Delete" data-bs-original-title="Delete">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 7l16 0"></path>
                        <path d="M10 11l0 6"></path>
                        <path d="M14 11l0 6"></path>
                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                    </svg>
                </button>
            </td>
        </tr>
        <tr>
            <td><a href="#" aria-label="Event cover image"><img style="width: 160px;" class="img-fluid rounded-3" src="assets/images/gallery/05.png" alt="Event cover photo"></a></td>
            <td>
                <h5><a href="#" aria-label="Event name">ColorSplash Weekend</a></h5>
                <address class="mb-md-0 fs-14 text-muted"><strong>Vanue:</strong> 1234 Elm Street, Springfield, IL 62704</address>
            </td>
            <td>
                <div class="mb-2"><strong>Date:</strong> 23 Aug 2025</div>
                <div><strong>Tickets:</strong> Avilable 11/ 100</div>
            </td>
            <td>
                <div class="d-md-none d-sm-none d-lg-flex d-flex flex-column speaker align-items-center align-items-md-start">
                <p class="mb-2">Events Speaker</p>
                <div class="avatar-group d-flex align-items-center ps-2">
                    <div class="avatar-item avatar md">
                        <img class="img-fluid border rounded-circle" src="assets/images/user-1.png" alt="Avatar" data-bs-toggle="tooltip" data-placement="top" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                    </div>
                    <div class="avatar-item avatar md">
                        <img class="img-fluid border rounded-circle" src="assets/images/user-4.png" alt="Avatar" data-bs-toggle="tooltip" data-placement="top" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                    </div>
                </div>
                </div>
            </td>
            <td>
                <button type="button" class="btn text-primary p-0" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Edit" data-bs-original-title="Edit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                        <path d="M16 5l3 3"></path>
                    </svg>
                </button>
                <button type="button" class="btn text-danger p-0 delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Delete" data-bs-original-title="Delete">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 7l16 0"></path>
                        <path d="M10 11l0 6"></path>
                        <path d="M14 11l0 6"></path>
                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                    </svg>
                </button>
            </td>
        </tr>
    </table>

     <!-- Modal:: Create a new Event -->
    <div class="modal fade" id="CreateEvent" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content text-start">
                <div class="modal-body custom_scroll p-lg-5">
                    <button type="button" class="btn-close position-absolute top-0 end-0 mt-3 me-3" data-bs-dismiss="modal" aria-label="Close"></button>
                    <h4 class="modal-title">Create Event</h4>
                    <p class="text-muted">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</p>
                    <div class="row g-2 mt-3">
                        <div class="col-lg-6 control-group">
                            <label for="formFile" class="form-label">Upload Event Cover Image</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>
                        <div class="col-lg-6 control-group">
                            <label class="form-label" for="event_title1">Event Title</label>
                            <input type="text" class="form-control" id="event_title1" placeholder="Event Title">
                        </div>
                        <div class="col-12 control-group">
                            <label class="form-label" for="event_description">Event description</label>
                            <textarea class="form-control" id="event_description" rows="2"></textarea>
                        </div>
                        <div class="col-md-4 control-group">
                            <label class="form-label" for="event_date">Date</label>
                            <input class="form-control" type="date" id="event_date">
                        </div>
                        <div class="col-md-4 control-group">
                            <label class="form-label" for="event_time">Time</label>
                            <input class="form-control" type="time" id="event_time">
                        </div>
                        <div class="col-md-4 control-group">
                            <label class="form-label" for="event_duration">Duration</label>
                            <input class="form-control" type="number" id="event_duration" placeholder="1h 45m">
                        </div>
                        <div class="col-12 text-muted">
                            <p class="small"><span class="fa fa-check-circle pe-1"></span>This event will take place on the july 14, 2022 form 02:30 PM untill 05:15 PM</p>
                        </div>
                        <div class="col-md-6 control-group">
                            <label class="form-label" for="event_location">Location</label>
                            <input class="form-control" type="text" id="event_location" placeholder="Location">
                        </div>
                        <div class="col-md-6 control-group">
                            <label class="form-label" for="guest_username">Add guests</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="guest_username" placeholder="Recipient's username">
                                <button class="btn btn-outline-secondary" type="button">Add</button>
                            </div>
                        </div>
                        <div class="col-12 my-4">
                            <span class="me-3">Participate :</span>
                            <a href="#" title=""><img class="avatar sm rounded" src="assets/images/user-3.png" alt="Avatar"> </a>
                            <a href="#" title=""><img class="avatar sm rounded" src="assets/images/user-1.png" alt="Avatar"> </a>
                            <a href="#" title=""><img class="avatar sm rounded" src="assets/images/user-6.png" alt="Avatar"> </a>
                            <a href="#" title=""><img class="avatar sm rounded" src="assets/images/user-2.png" alt="Avatar"> </a>
                        </div>
                        <div class="col-12 control-group">
                            <label class="form-label" for="event_reminder">Set reminder</label>
                            <div class="input-group">
                                <div class="input-group-text">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="email_option" value="option1">
                                        <label class="form-check-label" for="email_option">Email</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="stack_option" value="option2">
                                        <label class="form-check-label" for="stack_option">Stack</label>
                                    </div>
                                </div>
                                <input type="text" class="form-control" id="event_reminder" aria-label="1 hour before event">
                            </div>
                        </div>
                        <div class="col-12 mt-3">
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                            <button class="btn btn-primary" type="button">Create Event</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        // Set default date 
        document.addEventListener("DOMContentLoaded", function () {
            // Set today's date
            const dateInput = document.getElementById("event_date");
            dateInput.value = new Date().toISOString().split("T")[0];

            // Set default time to 12:00
            const timeInput = document.getElementById("event_time");
            timeInput.value = "12:00";
        });

        // delete modal popup sweetalrt
        document.querySelectorAll('.delete-btn').forEach(button => {
            button.addEventListener('click', function () {
            const row = this.closest('tr');

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                row.remove(); // Delete the row
                Swal.fire(
                    'Deleted!',
                    'The row has been removed.',
                    'success'
                );
                }
            });
            });
        });
    </script>
@endpush