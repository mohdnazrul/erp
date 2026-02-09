@extends('contacts.layout.app')
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
                    <div class="page-name fs-20 fw-bold ms-md-4 ms-2 position-relative">My Contacts</div>
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
                            <a href="#" class="text-decoration-none hover-svg" data-bs-toggle="modal" data-bs-target="#AddContact">
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
     <div class="row g-3">
        <div class="col-12">
            <div class="border-bg mb-5 position-relative px-3 py-4 rounded-4">
                <ul class="nav nav-pills flex-column flex-sm-row mb-0" role="tablist">
                    <li class="nav-item"><a class="nav-link rounded-3 active" data-bs-toggle="tab" href="#contact_all" role="tab">My Contacts</a></li>
                    <li class="nav-item"><a class="nav-link rounded-3 position-relative" data-bs-toggle="tab" href="#contact_groups" role="tab">My Groups</a></li>
                    <li class="nav-item">
                        <a class="nav-link rounded-3 hover-svg d-flex align-items-center gap-1" data-bs-toggle="tab" href="#contact_favorites" role="tab">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                <path d="M6 21v-2a4 4 0 0 1 4 -4h.5" />
                                <path d="M18 22l3.35 -3.284a2.143 2.143 0 0 0 .005 -3.071a2.242 2.242 0 0 0 -3.129 -.006l-.224 .22l-.223 -.22a2.242 2.242 0 0 0 -3.128 -.006a2.143 2.143 0 0 0 -.006 3.071l3.355 3.296z" />
                            </svg>
                            <span>Favorites</span>
                        </a>
                    </li>
                    <li class="nav-item"><a class="nav-link rounded-3" data-bs-toggle="tab" href="#contact_trash" role="tab">Trash</a></li>
                    <li class="nav-item dropdown ms-md-auto">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Filter</a>
                        <ul class="dropdown-menu shadow border-0 li_animate rounded-4">
                            <li><a class="dropdown-item" href="#">File Info</a></li>
                            <li><a class="dropdown-item" href="#">Copy to</a></li>
                            <li><a class="dropdown-item" href="#">Move to</a></li>
                            <li><a class="dropdown-item" href="#">Rename</a></li>
                            <li><a class="dropdown-item" href="#">Block</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="d-flex top-100 position-absolute" style="height: 48px; left: 50px;">
                    <div class="vr border-bg opacity-100"></div>
                    <div class="vr border-bg opacity-100 ms-1"></div>
                </div>
            </div>
            <div class="tab-content border-top mb-4">
                <!-- Tab: My Contacts -->
                <div class="tab-pane fade position-relative show active" id="contact_all" role="tabpanel">
                    <span class="position-absolute end-0 text-primary fw-bold" style="top: -28px;">Total Contact: 726</span>
                    <table class="Data_Table table table-round align-middle mb-0 table-hover w-100">
                        <thead>
                            <tr>                                       
                                <th class="py-2 fw-medium small text-uppercase">Name</th>
                                <th class="py-2 fw-medium small text-uppercase">Email</th>
                                <th class="py-2 fw-medium small text-uppercase">Phone Number</th>
                                <th class="py-2 fw-medium small text-uppercase">Position</th>
                                <th class="py-2 fw-medium small text-uppercase">Social</th>
                                <th class="py-2 fw-medium small text-uppercase">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/user-2.png" class="rounded-circle avatar md" alt="">
                                        <div class="ms-2 mb-0">Marshall Nichols</div>
                                    </div>
                                </td>
                                <td>example@info.com</td>
                                <td>+4 1800 12345</td>
                                <td>Web Designer</td>
                                <td>
                                    <a href="#" class="me-1 hover-svg" data-bs-toggle="tooltip" data-bs-placement="top" title="Github">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" />
                                        </svg>
                                    </a>
                                    <a href="#" class="me-1 hover-svg" data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M4 8a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
                                            <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                            <path d="M16.5 7.5v.01" />
                                        </svg>
                                    </a>
                                    <a href="#" class="me-1 hover-svg" data-bs-toggle="tooltip" data-bs-placement="top" title="Whatsapp">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                                            <path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" />
                                        </svg>
                                    </a>
                                    <a href="#" class="me-1 hover-svg" data-bs-toggle="tooltip" data-bs-placement="top" title="Linkedin">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M8 11v5" />
                                            <path d="M8 8v.01" />
                                            <path d="M12 16v-5" />
                                            <path d="M16 16v-3a2 2 0 1 0 -4 0" />
                                            <path d="M3 7a4 4 0 0 1 4 -4h10a4 4 0 0 1 4 4v10a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4z" />
                                        </svg>
                                    </a>
                                </td>
                                <td>
                                    <button type="button" class="btn text-primary p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                            <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                            <path d="M16 5l3 3" />
                                        </svg>
                                    </button>
                                    <button type="button" class="btn text-danger p-0 delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M4 7l16 0" />
                                            <path d="M10 11l0 6" />
                                            <path d="M14 11l0 6" />
                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/user-3.png" class="rounded-circle avatar md" alt="">
                                        <div class="ms-2 mb-0">Nellie Maxwell</div>
                                    </div>
                                </td>
                                <td>example@info.com</td>
                                <td>+91 1800 78963</td>
                                <td>Colleagues</td>
                                <td>
                                    <a href="#" class="me-1 hover-svg" data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M4 8a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
                                            <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                            <path d="M16.5 7.5v.01" />
                                        </svg>
                                    </a>
                                    <a href="#" class="me-1 hover-svg" data-bs-toggle="tooltip" data-bs-placement="top" title="Whatsapp">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                                            <path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" />
                                        </svg>
                                    </a>
                                </td>
                                <td>
                                    <button type="button" class="btn text-primary p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                            <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                            <path d="M16 5l3 3" />
                                        </svg>
                                    </button>
                                    <button type="button" class="btn text-danger p-0 delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M4 7l16 0" />
                                            <path d="M10 11l0 6" />
                                            <path d="M14 11l0 6" />
                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/user-4.png" class="rounded-circle avatar md" alt="">
                                        <div class="ms-2 mb-0">Chris Fox</div>
                                    </div>
                                </td>
                                <td>example@info.com</td>
                                <td>+0 1800 25896</td>
                                <td>Developer</td>
                                <td>
                                    <a href="#" class="me-1 hover-svg" data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M4 8a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
                                            <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                            <path d="M16.5 7.5v.01" />
                                        </svg>
                                    </a>
                                    <a href="#" class="me-1 hover-svg" data-bs-toggle="tooltip" data-bs-placement="top" title="Whatsapp">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                                            <path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" />
                                        </svg>
                                    </a>
                                    <a href="#" class="me-1 hover-svg" data-bs-toggle="tooltip" data-bs-placement="top" title="Linkedin">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M8 11v5" />
                                            <path d="M8 8v.01" />
                                            <path d="M12 16v-5" />
                                            <path d="M16 16v-3a2 2 0 1 0 -4 0" />
                                            <path d="M3 7a4 4 0 0 1 4 -4h10a4 4 0 0 1 4 4v10a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4z" />
                                        </svg>
                                    </a>
                                </td>
                                <td>
                                    <button type="button" class="btn text-primary p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                            <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                            <path d="M16 5l3 3" />
                                        </svg>
                                    </button>
                                    <button type="button" class="btn text-danger p-0 delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M4 7l16 0" />
                                            <path d="M10 11l0 6" />
                                            <path d="M14 11l0 6" />
                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/user-5.png" class="rounded-circle avatar md" alt="">
                                        <div class="ms-2 mb-0">Jack Bird</div>
                                    </div>
                                </td>
                                <td>example@info.com</td>
                                <td>+0 1800 14725</td>
                                <td>Colleagues</td>
                                <td>
                                    <a href="#" class="me-1 hover-svg" data-bs-toggle="tooltip" data-bs-placement="top" title="Whatsapp">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                                            <path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" />
                                        </svg>
                                    </a>
                                    <a href="#" class="me-1 hover-svg" data-bs-toggle="tooltip" data-bs-placement="top" title="Linkedin">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M8 11v5" />
                                            <path d="M8 8v.01" />
                                            <path d="M12 16v-5" />
                                            <path d="M16 16v-3a2 2 0 1 0 -4 0" />
                                            <path d="M3 7a4 4 0 0 1 4 -4h10a4 4 0 0 1 4 4v10a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4z" />
                                        </svg>
                                    </a>
                                </td>
                                <td>
                                    <button type="button" class="btn text-primary p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                            <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                            <path d="M16 5l3 3" />
                                        </svg>
                                    </button>
                                    <button type="button" class="btn text-danger p-0 delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M4 7l16 0" />
                                            <path d="M10 11l0 6" />
                                            <path d="M14 11l0 6" />
                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/user-6.png" class="rounded-circle avatar md" alt="">
                                        <div class="ms-2 mb-0">Dean Otto</div>
                                    </div>
                                </td>
                                <td>example@info.com</td>
                                <td>+1 1800 45698</td>
                                <td>Web Designer</td>
                                <td>
                                    <a href="#" class="me-1 hover-svg" data-bs-toggle="tooltip" data-bs-placement="top" title="Github">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" />
                                        </svg>
                                    </a>
                                    <a href="#" class="me-1 hover-svg" data-bs-toggle="tooltip" data-bs-placement="top" title="Whatsapp">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                                            <path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" />
                                        </svg>
                                    </a>
                                    <a href="#" class="me-1 hover-svg" data-bs-toggle="tooltip" data-bs-placement="top" title="Linkedin">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M8 11v5" />
                                            <path d="M8 8v.01" />
                                            <path d="M12 16v-5" />
                                            <path d="M16 16v-3a2 2 0 1 0 -4 0" />
                                            <path d="M3 7a4 4 0 0 1 4 -4h10a4 4 0 0 1 4 4v10a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4z" />
                                        </svg>
                                    </a>
                                </td>
                                <td>
                                    <button type="button" class="btn text-primary p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                            <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                            <path d="M16 5l3 3" />
                                        </svg>
                                    </button>
                                    <button type="button" class="btn text-danger p-0 delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M4 7l16 0" />
                                            <path d="M10 11l0 6" />
                                            <path d="M14 11l0 6" />
                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/user-7.png" class="rounded-circle avatar md" alt="">
                                        <div class="ms-2 mb-0">Orlando Lentz</div>
                                    </div>
                                </td>
                                <td>example@info.com</td>
                                <td>+0 1800 14725</td>
                                <td>Friends</td>
                                <td>
                                    <a href="#" class="me-1 hover-svg" data-bs-toggle="tooltip" data-bs-placement="top" title="Github">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" />
                                        </svg>
                                    </a>
                                    <a href="#" class="me-1 hover-svg" data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M4 8a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
                                            <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                            <path d="M16.5 7.5v.01" />
                                        </svg>
                                    </a>
                                </td>
                                <td>
                                    <button type="button" class="btn text-primary p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                            <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                            <path d="M16 5l3 3" />
                                        </svg>
                                    </button>
                                    <button type="button" class="btn text-danger p-0 delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M4 7l16 0" />
                                            <path d="M10 11l0 6" />
                                            <path d="M14 11l0 6" />
                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/user-8.png" class="rounded-circle avatar md" alt="">
                                        <div class="ms-2 mb-0">Thomas's Joe</div>
                                    </div>
                                </td>
                                <td>example@info.com</td>
                                <td>+4 1800 12345</td>
                                <td>Web Designer</td>
                                <td>
                                    <a href="#" class="me-1 hover-svg" data-bs-toggle="tooltip" data-bs-placement="top" title="Github">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" />
                                        </svg>
                                    </a>
                                    <a href="#" class="me-1 hover-svg" data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M4 8a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
                                            <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                            <path d="M16.5 7.5v.01" />
                                        </svg>
                                    </a>
                                    <a href="#" class="me-1 hover-svg" data-bs-toggle="tooltip" data-bs-placement="top" title="Whatsapp">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                                            <path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" />
                                        </svg>
                                    </a>
                                </td>
                                <td>
                                    <button type="button" class="btn text-primary p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                            <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                            <path d="M16 5l3 3" />
                                        </svg>
                                    </button>
                                    <button type="button" class="btn text-danger p-0 delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M4 7l16 0" />
                                            <path d="M10 11l0 6" />
                                            <path d="M14 11l0 6" />
                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/user-9.png" class="rounded-circle avatar md" alt="">
                                        <div class="ms-2 mb-0">Andew Jon</div>
                                    </div>
                                </td>
                                <td>example@info.com</td>
                                <td>+91 1800 78963</td>
                                <td>Colleagues</td>
                                <td>
                                    <a href="#" class="me-1 hover-svg" data-bs-toggle="tooltip" data-bs-placement="top" title="Github">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" />
                                        </svg>
                                    </a>
                                    <a href="#" class="me-1 hover-svg" data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M4 8a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
                                            <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                            <path d="M16.5 7.5v.01" />
                                        </svg>
                                    </a>
                                    <a href="#" class="me-1 hover-svg" data-bs-toggle="tooltip" data-bs-placement="top" title="Whatsapp">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                                            <path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" />
                                        </svg>
                                    </a>
                                    <a href="#" class="me-1 hover-svg" data-bs-toggle="tooltip" data-bs-placement="top" title="Linkedin">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M8 11v5" />
                                            <path d="M8 8v.01" />
                                            <path d="M12 16v-5" />
                                            <path d="M16 16v-3a2 2 0 1 0 -4 0" />
                                            <path d="M3 7a4 4 0 0 1 4 -4h10a4 4 0 0 1 4 4v10a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4z" />
                                        </svg>
                                    </a>
                                </td>
                                <td>
                                    <button type="button" class="btn text-primary p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                            <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                            <path d="M16 5l3 3" />
                                        </svg>
                                    </button>
                                    <button type="button" class="btn text-danger p-0 delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M4 7l16 0" />
                                            <path d="M10 11l0 6" />
                                            <path d="M14 11l0 6" />
                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/user-2.png" class="rounded-circle avatar md" alt="">
                                        <div class="ms-2 mb-0">Chris Fox</div>
                                    </div>
                                </td>
                                <td>example@info.com</td>
                                <td>+0 1800 25896</td>
                                <td>Developer</td>
                                <td>
                                    <a href="#" class="me-1 hover-svg" data-bs-toggle="tooltip" data-bs-placement="top" title="Whatsapp">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                                            <path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" />
                                        </svg>
                                    </a>
                                    <a href="#" class="me-1 hover-svg" data-bs-toggle="tooltip" data-bs-placement="top" title="Linkedin">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M8 11v5" />
                                            <path d="M8 8v.01" />
                                            <path d="M12 16v-5" />
                                            <path d="M16 16v-3a2 2 0 1 0 -4 0" />
                                            <path d="M3 7a4 4 0 0 1 4 -4h10a4 4 0 0 1 4 4v10a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4z" />
                                        </svg>
                                    </a>
                                </td>
                                <td>
                                    <button type="button" class="btn text-primary p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                            <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                            <path d="M16 5l3 3" />
                                        </svg>
                                    </button>
                                    <button type="button" class="btn text-danger p-0 delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M4 7l16 0" />
                                            <path d="M10 11l0 6" />
                                            <path d="M14 11l0 6" />
                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/user-1.png" class="rounded-circle avatar md" alt="">
                                        <div class="ms-2 mb-0">Comeren Diaz</div>
                                    </div>
                                </td>
                                <td>example@info.com</td>
                                <td>+0 1800 14725</td>
                                <td>Colleagues</td>
                                <td>
                                    <a href="#" class="me-1 hover-svg" data-bs-toggle="tooltip" data-bs-placement="top" title="Github">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" />
                                        </svg>
                                    </a>
                                    <a href="#" class="me-1 hover-svg" data-bs-toggle="tooltip" data-bs-placement="top" title="Linkedin">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M8 11v5" />
                                            <path d="M8 8v.01" />
                                            <path d="M12 16v-5" />
                                            <path d="M16 16v-3a2 2 0 1 0 -4 0" />
                                            <path d="M3 7a4 4 0 0 1 4 -4h10a4 4 0 0 1 4 4v10a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4z" />
                                        </svg>
                                    </a>
                                </td>
                                <td>
                                    <button type="button" class="btn text-primary p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                            <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                            <path d="M16 5l3 3" />
                                        </svg>
                                    </button>
                                    <button type="button" class="btn text-danger p-0 delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M4 7l16 0" />
                                            <path d="M10 11l0 6" />
                                            <path d="M14 11l0 6" />
                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/user-4.png" class="rounded-circle avatar md" alt="">
                                        <div class="ms-2 mb-0">Issa Bell</div>
                                    </div>
                                </td>
                                <td>example@info.com</td>
                                <td>+1 1800 45698</td>
                                <td>Web Designer</td>
                                <td>
                                    <a href="#" class="me-1 hover-svg" data-bs-toggle="tooltip" data-bs-placement="top" title="Github">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" />
                                        </svg>
                                    </a>
                                    <a href="#" class="me-1 hover-svg" data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M4 8a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
                                            <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                            <path d="M16.5 7.5v.01" />
                                        </svg>
                                    </a>
                                    <a href="#" class="me-1 hover-svg" data-bs-toggle="tooltip" data-bs-placement="top" title="Whatsapp">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                                            <path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" />
                                        </svg>
                                    </a>
                                    <a href="#" class="me-1 hover-svg" data-bs-toggle="tooltip" data-bs-placement="top" title="Linkedin">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M8 11v5" />
                                            <path d="M8 8v.01" />
                                            <path d="M12 16v-5" />
                                            <path d="M16 16v-3a2 2 0 1 0 -4 0" />
                                            <path d="M3 7a4 4 0 0 1 4 -4h10a4 4 0 0 1 4 4v10a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4z" />
                                        </svg>
                                    </a>
                                </td>
                                <td>
                                    <button type="button" class="btn text-primary p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                            <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                            <path d="M16 5l3 3" />
                                        </svg>
                                    </button>
                                    <button type="button" class="btn text-danger p-0 delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M4 7l16 0" />
                                            <path d="M10 11l0 6" />
                                            <path d="M14 11l0 6" />
                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/user-7.png" class="rounded-circle avatar md" alt="">
                                        <div class="ms-2 mb-0">Bucky Barnes</div>
                                    </div>
                                </td>
                                <td>example@info.com</td>
                                <td>+0 1800 14725</td>
                                <td>Friends</td>
                                <td>
                                    <a href="#" class="me-1 hover-svg" data-bs-toggle="tooltip" data-bs-placement="top" title="Github">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" />
                                        </svg>
                                    </a>
                                    <a href="#" class="me-1 hover-svg" data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M4 8a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
                                            <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                            <path d="M16.5 7.5v.01" />
                                        </svg>
                                    </a>
                                    <a href="#" class="me-1 hover-svg" data-bs-toggle="tooltip" data-bs-placement="top" title="Linkedin">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M8 11v5" />
                                            <path d="M8 8v.01" />
                                            <path d="M12 16v-5" />
                                            <path d="M16 16v-3a2 2 0 1 0 -4 0" />
                                            <path d="M3 7a4 4 0 0 1 4 -4h10a4 4 0 0 1 4 4v10a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4z" />
                                        </svg>
                                    </a>
                                </td>
                                <td>
                                    <button type="button" class="btn text-primary p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                            <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                            <path d="M16 5l3 3" />
                                        </svg>
                                    </button>
                                    <button type="button" class="btn text-danger p-0 delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M4 7l16 0" />
                                            <path d="M10 11l0 6" />
                                            <path d="M14 11l0 6" />
                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Tab: Groups -->
                <div class="tab-pane fade position-relative" id="contact_groups" role="tabpanel">
                    <span class="position-absolute end-0 text-primary fw-bold" style="top: -28px;">Total Contact: 06</span>
                    <table class="Data_Table table table-round align-middle mb-0 table-hover mb-4 w-100">
                        <thead>
                            <tr>                                       
                                <th class="py-2 fw-medium small text-uppercase">Group Name</th>
                                <th class="py-2 fw-medium small text-uppercase">Create Date</th>
                                <th class="py-2 fw-medium small text-uppercase">Admin</th>
                                <th class="py-2 fw-medium small text-uppercase">Members</th>
                                <th class="py-2 fw-medium small text-uppercase">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Out Sourcing</td>
                                <td>10 July 2025</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/user-3.png" class="rounded-circle avatar md" alt="">
                                        <div class="ms-2 mb-0">Nellie Maxwell</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="avatar-group d-flex w-100">
                                        <a href="#" class="avatar-item md" data-bs-toggle="tooltip" data-placement="top" title="Avatar Name">
                                            <img class="avatar md border rounded-circle" src="assets/images/user-1.png" alt="">
                                        </a>
                                        <a href="#" class="avatar-item md" data-bs-toggle="tooltip" data-placement="top" title="Avatar Name">
                                            <img class="avatar md border rounded-circle" src="assets/images/user-2.png" alt="">
                                        </a>
                                        <a href="#" class="avatar-item md" data-bs-toggle="tooltip" data-placement="top" title="Avatar Name">
                                            <img class="avatar md border rounded-circle" src="assets/images/user-3.png" alt="">
                                        </a>
                                        <a href="#" class="avatar-item md" data-bs-toggle="tooltip" data-placement="top" title="Avatar Name">
                                            <img class="avatar md border rounded-circle" src="assets/images/user-4.png" alt="">
                                        </a>
                                        <a href="#" class="avatar-item md" data-bs-toggle="tooltip" data-placement="top" title="Avatar Name">
                                            <img class="avatar md border rounded-circle" src="assets/images/user-5.png" alt="">
                                        </a>
                                        <a href="#" class="avatar-item md" data-bs-toggle="tooltip" data-placement="top" title="Avatar Name">
                                            <img class="avatar md border rounded-circle" src="assets/images/user-6.png" alt="">
                                        </a>
                                        <a href="#" class="avatar-item md" data-bs-toggle="tooltip" data-placement="top" title="More">
                                            <div class="avatar md thumbnail border rounded-circle d-flex align-items-center justify-content-center fs-6 text-white">+10</div>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <button type="button" class="btn text-primary p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                            <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                        </svg>
                                    </button>
                                    <button type="button" class="btn text-primary p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                            <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                            <path d="M16 5l3 3" />
                                        </svg>
                                    </button>
                                    <button type="button" class="btn text-danger p-0 delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M4 7l16 0" />
                                            <path d="M10 11l0 6" />
                                            <path d="M14 11l0 6" />
                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>Management</td>
                                <td>10 July 2025</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/user-2.png" class="rounded-circle avatar md" alt="">
                                        <div class="ms-2 mb-0">Bucky Barnes</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="avatar-group d-flex w-100">
                                        <a href="#" class="avatar-item md" data-bs-toggle="tooltip" data-placement="top" title="Avatar Name">
                                            <img class="avatar md border rounded-circle" src="assets/images/user-3.png" alt="">
                                        </a>
                                        <a href="#" class="avatar-item md" data-bs-toggle="tooltip" data-placement="top" title="Avatar Name">
                                            <img class="avatar md border rounded-circle" src="assets/images/user-4.png" alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <button type="button" class="btn text-primary p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                            <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                        </svg>
                                    </button>
                                    <button type="button" class="btn text-primary p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                            <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                            <path d="M16 5l3 3" />
                                        </svg>
                                    </button>
                                    <button type="button" class="btn text-danger p-0 delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M4 7l16 0" />
                                            <path d="M10 11l0 6" />
                                            <path d="M14 11l0 6" />
                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>Sold Properties</td>
                                <td>10 July 2025</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/user-4.png" class="rounded-circle avatar md" alt="">
                                        <div class="ms-2 mb-0">Chris Fox</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="avatar-group d-flex w-100">
                                        <a href="#" class="avatar-item md" data-bs-toggle="tooltip" data-placement="top" title="Avatar Name">
                                            <img class="avatar md border rounded-circle" src="assets/images/user-1.png" alt="">
                                        </a>
                                        <a href="#" class="avatar-item md" data-bs-toggle="tooltip" data-placement="top" title="Avatar Name">
                                            <img class="avatar md border rounded-circle" src="assets/images/user-2.png" alt="">
                                        </a>
                                        <a href="#" class="avatar-item md" data-bs-toggle="tooltip" data-placement="top" title="Avatar Name">
                                            <img class="avatar md border rounded-circle" src="assets/images/user-3.png" alt="">
                                        </a>
                                        <a href="#" class="avatar-item md" data-bs-toggle="tooltip" data-placement="top" title="Avatar Name">
                                            <img class="avatar md border rounded-circle" src="assets/images/user-4.png" alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <button type="button" class="btn text-primary p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                            <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                        </svg>
                                    </button>
                                    <button type="button" class="btn text-primary p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                            <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                            <path d="M16 5l3 3" />
                                        </svg>
                                    </button>
                                    <button type="button" class="btn text-danger p-0 delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M4 7l16 0" />
                                            <path d="M10 11l0 6" />
                                            <path d="M14 11l0 6" />
                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>San Fransisco</td>
                                <td>10 July 2025</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/user-7.png" class="rounded-circle avatar md" alt="">
                                        <div class="ms-2 mb-0">Comeren Diaz</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="avatar-group d-flex w-100">
                                        <a href="#" class="avatar-item md" data-bs-toggle="tooltip" data-placement="top" title="Avatar Name">
                                            <img class="avatar md border rounded-circle" src="assets/images/user-2.png" alt="">
                                        </a>
                                        <a href="#" class="avatar-item md" data-bs-toggle="tooltip" data-placement="top" title="Avatar Name">
                                            <img class="avatar md border rounded-circle" src="assets/images/user-3.png" alt="">
                                        </a>
                                        <a href="#" class="avatar-item md" data-bs-toggle="tooltip" data-placement="top" title="Avatar Name">
                                            <img class="avatar md border rounded-circle" src="assets/images/user-4.png" alt="">
                                        </a>
                                        <a href="#" class="avatar-item md" data-bs-toggle="tooltip" data-placement="top" title="Avatar Name">
                                            <img class="avatar md border rounded-circle" src="assets/images/user-6.png" alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <button type="button" class="btn text-primary p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                            <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                        </svg>
                                    </button>
                                    <button type="button" class="btn text-primary p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                            <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                            <path d="M16 5l3 3" />
                                        </svg>
                                    </button>
                                    <button type="button" class="btn text-danger p-0 delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M4 7l16 0" />
                                            <path d="M10 11l0 6" />
                                            <path d="M14 11l0 6" />
                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>Colleagues</td>
                                <td>10 July 2025</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/user-3.png" class="rounded-circle avatar md" alt="">
                                        <div class="ms-2 mb-0">Dean Otto</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="avatar-group d-flex w-100">
                                        <a href="#" class="avatar-item md" data-bs-toggle="tooltip" data-placement="top" title="Avatar Name">
                                            <img class="avatar md border rounded-circle" src="assets/images/user-3.png" alt="">
                                        </a>
                                        <a href="#" class="avatar-item md" data-bs-toggle="tooltip" data-placement="top" title="Avatar Name">
                                            <img class="avatar md border rounded-circle" src="assets/images/user-4.png" alt="">
                                        </a>
                                        <a href="#" class="avatar-item md" data-bs-toggle="tooltip" data-placement="top" title="Avatar Name">
                                            <img class="avatar md border rounded-circle" src="assets/images/user-5.png" alt="">
                                        </a>
                                        <a href="#" class="avatar-item md" data-bs-toggle="tooltip" data-placement="top" title="Avatar Name">
                                            <img class="avatar md border rounded-circle" src="assets/images/user-1.png" alt="">
                                        </a>
                                        <a href="#" class="avatar-item md" data-bs-toggle="tooltip" data-placement="top" title="Avatar Name">
                                            <img class="avatar md border rounded-circle" src="assets/images/user-7.png" alt="">
                                        </a>
                                        <a href="#" class="avatar-item md" data-bs-toggle="tooltip" data-placement="top" title="Avatar Name">
                                            <img class="avatar md border rounded-circle" src="assets/images/user-8.png" alt="">
                                        </a>
                                        <a href="#" class="avatar-item md" data-bs-toggle="tooltip" data-placement="top" title="Avatar Name">
                                            <img class="avatar md border rounded-circle" src="assets/images/user-9.png" alt="">
                                        </a>
                                        <a href="#" class="avatar-item md" data-bs-toggle="tooltip" data-placement="top" title="More">
                                            <div class="avatar md thumbnail border rounded-circle d-flex align-items-center justify-content-center fs-6 text-white">+50</div>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <button type="button" class="btn text-primary p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                            <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                        </svg>
                                    </button>
                                    <button type="button" class="btn text-primary p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                            <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                            <path d="M16 5l3 3" />
                                        </svg>
                                    </button>
                                    <button type="button" class="btn text-danger p-0 delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M4 7l16 0" />
                                            <path d="M10 11l0 6" />
                                            <path d="M14 11l0 6" />
                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>Out Sourcing</td>
                                <td>10 July 2025</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/user-3.png" class="rounded-circle avatar md" alt="">
                                        <div class="ms-2 mb-0">Nellie Maxwell</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="avatar-group d-flex w-100">
                                        <a href="#" class="avatar-item md" data-bs-toggle="tooltip" data-placement="top" title="Avatar Name">
                                            <img class="avatar md border rounded-circle" src="assets/images/user-3.png" alt="">
                                        </a>
                                        <a href="#" class="avatar-item md" data-bs-toggle="tooltip" data-placement="top" title="Avatar Name">
                                            <img class="avatar md border rounded-circle" src="assets/images/user-4.png" alt="">
                                        </a>
                                        <a href="#" class="avatar-item md" data-bs-toggle="tooltip" data-placement="top" title="Avatar Name">
                                            <img class="avatar md border rounded-circle" src="assets/images/user-5.png" alt="">
                                        </a>
                                        <a href="#" class="avatar-item md" data-bs-toggle="tooltip" data-placement="top" title="Avatar Name">
                                            <img class="avatar md border rounded-circle" src="assets/images/user-6.png" alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <button type="button" class="btn text-primary p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                            <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                        </svg>
                                    </button>
                                    <button type="button" class="btn text-primary p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                            <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                            <path d="M16 5l3 3" />
                                        </svg>
                                    </button>
                                    <button type="button" class="btn text-danger p-0 delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M4 7l16 0" />
                                            <path d="M10 11l0 6" />
                                            <path d="M14 11l0 6" />
                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button class="btn hover-svg d-flex align-items-center gap-2" data-bs-toggle="offcanvas" data-bs-target="#Create_Group">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 6.25V23.75" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M6.25 15H23.75" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Create New Group
                    </button>
                </div>
                <!-- Tab: Favorites -->
                <div class="tab-pane fade" id="contact_favorites" role="tabpanel">
                    <div class="row row-cols-xxl-5 row-cols-xl-4 row-cols-lg-3 row-cols-md-3 row-cols-sm-2 row-cols-1 g-3 row-deck mt-1">
                        <div class="col">
                            <div class="card rounded-4">
                                <div class="card-body text-center">
                                    <img class="avatar xl rounded-circle img-thumbnail" src="assets/images/user-1.png" alt="">
                                    <h6 class="mt-3 mb-0">Michelle Green</h6>
                                    <span>jason-porter@info.com</span>
                                    <div class="my-3 gap-2 d-flex justify-content-center align-items-center">
                                        <a href="#" class="me-1 hover-svg" data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M4 8a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
                                                <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                                <path d="M16.5 7.5v.01" />
                                            </svg>
                                        </a>
                                        <a href="#" class="me-1 hover-svg" data-bs-toggle="tooltip" data-bs-placement="top" title="Whatsapp">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                                                <path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" />
                                            </svg>
                                        </a>
                                        <a href="#" class="me-1 hover-svg" data-bs-toggle="tooltip" data-bs-placement="top" title="Linkedin">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M8 11v5" />
                                                <path d="M8 8v.01" />
                                                <path d="M12 16v-5" />
                                                <path d="M16 16v-3a2 2 0 1 0 -4 0" />
                                                <path d="M3 7a4 4 0 0 1 4 -4h10a4 4 0 0 1 4 4v10a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4z" />
                                            </svg>
                                        </a>
                                    </div>
                                    <button class="btn btn-sm rounded-3 btn-light">Follow</button>
                                    <button class="btn btn-sm rounded-3 btn-secondary">Message</button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card rounded-4">
                                <div class="card-body text-center">
                                    <img class="avatar xl rounded-circle img-thumbnail" src="assets/images/user-2.png" alt="">
                                    <h6 class="mt-3 mb-0">Andew Jon</h6>
                                    <span>jason-porter@info.com</span>
                                    <div class="my-3 gap-2 d-flex justify-content-center align-items-center">
                                        <a href="#" class="me-1 hover-svg" data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M4 8a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
                                                <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                                <path d="M16.5 7.5v.01" />
                                            </svg>
                                        </a>
                                        <a href="#" class="me-1 hover-svg" data-bs-toggle="tooltip" data-bs-placement="top" title="Whatsapp">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                                                <path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" />
                                            </svg>
                                        </a>
                                        <a href="#" class="me-1 hover-svg" data-bs-toggle="tooltip" data-bs-placement="top" title="Linkedin">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M8 11v5" />
                                                <path d="M8 8v.01" />
                                                <path d="M12 16v-5" />
                                                <path d="M16 16v-3a2 2 0 1 0 -4 0" />
                                                <path d="M3 7a4 4 0 0 1 4 -4h10a4 4 0 0 1 4 4v10a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4z" />
                                            </svg>
                                        </a>
                                    </div>
                                    <button class="btn btn-sm rounded-3 btn-light">Follow</button>
                                    <button class="btn btn-sm rounded-3 btn-secondary">Message</button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card rounded-4">
                                <div class="card-body text-center">
                                    <img class="avatar xl rounded-circle img-thumbnail" src="assets/images/user-3.png" alt="">
                                    <h6 class="mt-3 mb-0">Orlando Lentz</h6>
                                    <span>jason-porter@info.com</span>
                                    <div class="my-3 gap-2 d-flex justify-content-center align-items-center">
                                        <a href="#" class="me-1 hover-svg" data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M4 8a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
                                                <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                                <path d="M16.5 7.5v.01" />
                                            </svg>
                                        </a>
                                        <a href="#" class="me-1 hover-svg" data-bs-toggle="tooltip" data-bs-placement="top" title="Whatsapp">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                                                <path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" />
                                            </svg>
                                        </a>
                                        <a href="#" class="me-1 hover-svg" data-bs-toggle="tooltip" data-bs-placement="top" title="Linkedin">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M8 11v5" />
                                                <path d="M8 8v.01" />
                                                <path d="M12 16v-5" />
                                                <path d="M16 16v-3a2 2 0 1 0 -4 0" />
                                                <path d="M3 7a4 4 0 0 1 4 -4h10a4 4 0 0 1 4 4v10a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4z" />
                                            </svg>
                                        </a>
                                    </div>
                                    <button class="btn btn-sm rounded-3 btn-light">Follow</button>
                                    <button class="btn btn-sm rounded-3 btn-secondary">Message</button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card rounded-4">
                                <div class="card-body text-center">
                                    <img class="avatar xl rounded-circle img-thumbnail" src="assets/images/user-4.png" alt="">
                                    <h6 class="mt-3 mb-0">Marshall Nichols</h6>
                                    <span>jason-porter@info.com</span>
                                    <div class="my-3 gap-2 d-flex justify-content-center align-items-center">
                                        <a href="#" class="me-1 hover-svg" data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M4 8a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
                                                <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                                <path d="M16.5 7.5v.01" />
                                            </svg>
                                        </a>
                                        <a href="#" class="me-1 hover-svg" data-bs-toggle="tooltip" data-bs-placement="top" title="Whatsapp">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                                                <path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" />
                                            </svg>
                                        </a>
                                        <a href="#" class="me-1 hover-svg" data-bs-toggle="tooltip" data-bs-placement="top" title="Linkedin">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M8 11v5" />
                                                <path d="M8 8v.01" />
                                                <path d="M12 16v-5" />
                                                <path d="M16 16v-3a2 2 0 1 0 -4 0" />
                                                <path d="M3 7a4 4 0 0 1 4 -4h10a4 4 0 0 1 4 4v10a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4z" />
                                            </svg>
                                        </a>
                                    </div>
                                    <button class="btn btn-sm rounded-3 btn-light">Follow</button>
                                    <button class="btn btn-sm rounded-3 btn-secondary">Message</button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card rounded-4">
                                <div class="card-body text-center">
                                    <img class="avatar xl rounded-circle img-thumbnail" src="assets/images/user-5.png" alt="">
                                    <h6 class="mt-3 mb-0">Comeren Diaz</h6>
                                    <span>jason-porter@info.com</span>
                                    <div class="my-3 gap-2 d-flex justify-content-center align-items-center">
                                        <a href="#" class="me-1 hover-svg" data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M4 8a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
                                                <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                                <path d="M16.5 7.5v.01" />
                                            </svg>
                                        </a>
                                        <a href="#" class="me-1 hover-svg" data-bs-toggle="tooltip" data-bs-placement="top" title="Whatsapp">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                                                <path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" />
                                            </svg>
                                        </a>
                                        <a href="#" class="me-1 hover-svg" data-bs-toggle="tooltip" data-bs-placement="top" title="Linkedin">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M8 11v5" />
                                                <path d="M8 8v.01" />
                                                <path d="M12 16v-5" />
                                                <path d="M16 16v-3a2 2 0 1 0 -4 0" />
                                                <path d="M3 7a4 4 0 0 1 4 -4h10a4 4 0 0 1 4 4v10a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4z" />
                                            </svg>
                                        </a>
                                    </div>
                                    <button class="btn btn-sm rounded-3 btn-light">Follow</button>
                                    <button class="btn btn-sm rounded-3 btn-secondary">Message</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tab: Delete -->
                <div class="tab-pane fade" id="contact_trash" role="tabpanel">
                    <!-- widgets: No data -->
                    <div class="card border-0">
                        <div class="card-body text-center p-5">
                            <svg width="86" height="73" viewBox="0 0 86 73" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.5901 18.6739L12.9851 61.855C12.4007 64.7877 14.3441 67.6983 17.2767 68.2828L18.5914 68.5447L60.4578 76.8877C63.3905 77.4721 66.3012 75.5287 66.8856 72.5961L77.3647 20.0102L77.6468 18.5945C78.2312 15.6618 76.2879 12.7511 73.3552 12.1667L40.9947 5.71799" fill="#1B91FB"/>
                                <path d="M21.5901 18.6739L12.9851 61.855C12.4007 64.7877 14.3441 67.6983 17.2767 68.2828L18.5914 68.5447L60.4578 76.8877C63.3905 77.4721 66.3012 75.5287 66.8856 72.5961L77.3647 20.0102L77.6468 18.5945C78.2312 15.6618 76.2879 12.7511 73.3552 12.1667L40.9947 5.71799" stroke="#4D6173" stroke-width="1.61896" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M40.9952 5.71802L37.7708 21.8983L21.5906 18.6739L40.9952 5.71802Z" fill="#4D6173" stroke="#4D6173" stroke-width="1.61896" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M58.0267 16.0767L68.6701 58.8011C69.3929 61.7027 67.5898 64.7023 64.6881 65.4251L63.3874 65.7492L21.9638 76.0685C19.0621 76.7913 16.0625 74.9882 15.3397 72.0865L2.37825 20.0568L2.02929 18.6561C1.30644 15.7544 3.10959 12.7548 6.01124 12.032L38.0295 4.0557" fill="#85CBFF"/>
                                <path d="M58.0267 16.0767L68.6701 58.8011C69.3929 61.7027 67.5898 64.7023 64.6881 65.4251L63.3874 65.7492L21.9638 76.0685C19.0621 76.7913 16.0625 74.9882 15.3397 72.0865L2.37825 20.0568L2.02929 18.6561C1.30644 15.7544 3.10959 12.7548 6.01124 12.032L38.0295 4.0557" stroke="#4D6173" stroke-width="1.61896" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M38.0295 4.05579L42.0176 20.0649L58.0268 16.0768L38.0295 4.05579Z" fill="#4D6173" stroke="#4D6173" stroke-width="1.61896" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M68.4957 22.2301V66.2602C68.4957 69.2505 66.0209 71.7253 63.0306 71.7253H61.6901H19.0005C16.0102 71.7253 13.5354 69.2505 13.5354 66.2602V12.6404V11.1968C13.5354 8.20645 16.0102 5.73169 19.0005 5.73169H51.9973" fill="white"/>
                                <path d="M68.4957 22.2301V66.2602C68.4957 69.2505 66.0209 71.7253 63.0306 71.7253H61.6901H19.0005C16.0102 71.7253 13.5354 69.2505 13.5354 66.2602V12.6404V11.1968C13.5354 8.20645 16.0102 5.73169 19.0005 5.73169H51.9973" stroke="#4D6173" stroke-width="1.61896" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M51.9973 5.73169V22.2301H68.4957L51.9973 5.73169Z" fill="#4D6173" stroke="#4D6173" stroke-width="1.61896" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M74.8405 65.1409L60.1858 56.0999L62.2606 52.7398L76.9082 61.7923L74.8405 65.1409Z" fill="var(--bs-primary)" stroke="#4D6173" stroke-width="0.930904" stroke-miterlimit="10"/>
                                <path d="M82.1501 69.6951L70.9111 62.7553C69.9726 62.1758 69.6801 60.9389 70.2596 60.0004C70.8391 59.0619 72.076 58.7694 73.0145 59.3489L84.2535 66.2887C85.192 66.8682 85.4845 68.1051 84.905 69.0436C84.3255 69.9821 83.0886 70.2746 82.1501 69.6951Z" fill="#4D6173" stroke="#4D6173" stroke-width="0.930904" stroke-miterlimit="10"/>
                                <path d="M81.6412 70.4286L67.1812 61.4999C66.8452 61.2924 66.741 60.852 66.9463 60.5066L69.2286 56.8105C69.436 56.4745 69.8764 56.3703 70.2218 56.5756L84.6818 65.5043C85.0178 65.7118 85.122 66.1522 84.9167 66.4976L82.6345 70.1937C82.4176 70.5319 81.9772 70.6361 81.6412 70.4286Z" fill="var(--bs-primary)" stroke="#4D6173" stroke-width="0.930904" stroke-miterlimit="10"/>
                                <path d="M37.7404 21.1074C25.3339 24.0415 17.6572 36.4738 20.5912 48.8803C23.5231 61.2775 35.9577 68.9635 48.3548 66.0317C60.7613 63.0976 68.438 50.6653 65.5039 38.2588C62.5699 25.8523 50.1375 18.1756 37.7404 21.1074ZM47.3802 61.869C37.4194 64.2247 27.4124 57.9335 25.0213 47.8228C22.6301 37.712 28.7613 27.6142 38.7221 25.2585C48.6829 22.9029 58.69 29.194 61.0811 39.3048C63.4722 49.4155 57.3317 59.5155 47.3802 61.869Z" fill="var(--bs-primary)" stroke="#4D6173" stroke-width="0.930904" stroke-miterlimit="10"/>
                                <ellipse cx="43.0138" cy="43.4266" rx="18.0856" ry="18.2322" transform="rotate(-13.3056 43.0138 43.4266)" fill="white"/>
                                <path d="M50.224 44.0262C51.5954 44.0212 52.7667 42.8413 52.7617 41.4698C52.7567 40.0983 51.5768 38.9271 50.2053 38.9321C48.8338 38.9371 47.6626 40.117 47.6676 41.4885C47.6729 42.9579 48.7545 44.0316 50.224 44.0262Z" fill="#1B91FB"/>
                                <path d="M48.7354 50.8375L47.4619 50.8422C46.3757 48.495 43.5315 47.6237 41.2826 48.8075C40.4024 49.2026 39.6215 49.9892 39.2329 50.8723L37.9593 50.8769C39.0258 47.8361 42.5468 46.2558 45.49 47.4206C46.8637 48.0034 48.1415 49.1743 48.7354 50.8375Z" fill="#1B91FB"/>
                                <path d="M35.6537 44.0978C37.0252 44.0927 38.1965 42.9129 38.1915 41.5414C38.1864 40.1699 37.0066 38.9986 35.6351 39.0036C34.2636 39.0086 33.0923 40.1885 33.0973 41.56C33.2007 43.0291 34.2822 44.1028 35.6537 44.0978Z" fill="#1B91FB"/>
                            </svg>
                            <div class="mt-4 mb-3">
                                <span class="text-muted">No data to show</span>
                            </div>
                            <button type="button" class="btn btn-white border lift">Get Started</button>
                            <button type="button" class="btn btn-primary border lift">Back to Home</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal:: Add New -->
    <div class="modal fade" id="AddContact" tabindex="-1" aria-labelledby="AddContact" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-4">
                <div class="modal-header">
                    <h3 class="modal-title fs-5">Add new Conatct</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="formFile" class="form-label">Select Avatar</label>
                            <input class="form-control" type="file" id="formFile">
                          </div>
                        <div class="col-6 control-group">
                            <label class="form-label" for="firstName">First Name</label>
                            <input type="text" class="form-control" id="firstName" placeholder="First Name">
                        </div>
                        <div class="col-6 control-group">
                            <label class="form-label" for="lastName">Last Name</label>
                            <input type="text" class="form-control" id="lastName" placeholder="Last Name">
                        </div>
                        <div class="col-6 control-group">
                            <label class="form-label" for="email_address">Email Address</label>
                            <input type="email" class="form-control" id="email_address" placeholder="Enter Email">
                        </div>
                        <div class="col-6 control-group">
                            <label class="form-label" for="mobile">Mobile Number</label>
                            <input type="number" class="form-control" id="mobile" placeholder="Enter Number">
                        </div>
                        <div class="col-12">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="Favorites_Contact" checked>
                                <label class="form-check-label" for="Favorites_Contact">Favorites Contact</label>
                              </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add Contact</button>
                  </div>
            </div>
        </div>
    </div>

    <!-- offcanvas: Create Groups -->
    <div class="offcanvas offcanvas-end" id="Create_Group" tabindex="-1" aria-labelledby="Create_Group" aria-hidden="true">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Create new Group</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <p><strong>Note: </strong>It is a long established fact that a reader will be distracted by the readable.</p>
            <div class="card p-3 mb-2">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="group_name" placeholder="Group Name">
                    <label for="group_name">Group Name</label>
                </div>
                <div class="align-items-center d-flex">
                    <span class="me-3">Added :</span>
                    <a href="#"><img class="avatar sm rounded-circle" src="assets/images/user-1.png" alt="friend"> </a>
                    <a href="#"><img class="avatar sm rounded-circle" src="assets/images/user-2.png" alt="friend"> </a>
                    <a href="#"><img class="avatar sm rounded-circle" src="assets/images/user-3.png" alt="friend"> </a>
                </div>
            </div>
            <div class="text-end">
                <button class="btn btn-primary text-uppercase" type="button">Create new Group</button>
            </div>
            <h6 class="card-title mt-4">Contact List</h6>
            <ul class="list-unstyled mb-0" style="height: 400px; overflow-y: auto;">
                <li class="align-items-center card flex-row gap-2 my-1 p-3">
                    <img class="avatar lg rounded-circle" src="assets/images/user-3.png" alt="">
                    <div class="flex-fill">
                        <div class="h6 mb-0">Chris Fox</div>
                        <span class="small">21 mutual connections</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <button class="btn btn-light">Add</button>
                    </div>
                </li>
                <li class="align-items-center card flex-row gap-2 my-1 p-3">
                    <img class="avatar lg rounded-circle" src="assets/images/user-2.png" alt="">
                    <div class="flex-fill">
                        <div class="h6 mb-0">Marshall Nichols</div>
                        <span class="small">5 mutual connections</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <button class="btn btn-success">Added</button>
                    </div>
                </li>
                <li class="align-items-center card flex-row gap-2 my-1 p-3">
                    <img class="avatar lg rounded-circle" src="assets/images/user-1.png" alt="">
                    <div class="flex-fill">
                        <div class="h6 mb-0">Orlando Lentz</div>
                        <span class="small">9 mutual connections</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <button class="btn btn-light">Add</button>
                    </div>
                </li>
                <li class="align-items-center card flex-row gap-2 my-1 p-3">
                    <img class="avatar lg rounded-circle" src="assets/images/user-6.png" alt="">
                    <div class="flex-fill">
                        <div class="h6 mb-0">Alexander</div>
                        <span class="small">18 mutual connections</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <button class="btn btn-light">Add</button>
                    </div>
                </li>
                <li class="align-items-center card flex-row gap-2 my-1 p-3">
                    <img class="avatar lg rounded-circle" src="assets/images/user-7.png" alt="">
                    <div class="flex-fill">
                        <div class="h6 mb-0">Orlando Lentz</div>
                        <span class="small">11 mutual connections</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <button class="btn btn-light">Add</button>
                    </div>
                </li>
                <li class="align-items-center card flex-row gap-2 my-1 p-3">
                    <img class="avatar lg rounded-circle" src="assets/images/user-8.png" alt="">
                    <div class="flex-fill">
                        <div class="h6 mb-0">Marshall Nichols</div>
                        <span class="small">5 mutual connections</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <button class="btn btn-light">Add</button>
                    </div>
                </li>
                <li class="align-items-center card flex-row gap-2 my-1 p-3">
                    <img class="avatar lg rounded-circle" src="assets/images/user-3.png" alt="">
                    <div class="flex-fill">
                        <div class="h6 mb-0">Orlando Lentz</div>
                        <span class="small">9 mutual connections</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <button class="btn btn-success">Added</button>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready( function () {
            var table = $('.Data_Table').addClass('nowrap').DataTable({
                responsive: true,
                bFilter: false,
                bInfo: false,
                ordering: true,
                paging: false,
                pagingType: 'numbers',
                dom: '<"float-left"B><"float-right"f>rt<"row d-footer"<"col-sm-4"l><"col-sm-4"i><"col-sm-4"p>>',
            });
            $('a[data-bs-toggle="tab"]').on('shown.bs.tab', function(e) {
                $($.fn.dataTable.tables(true)).DataTable().columns.adjust().responsive.recalc();
            });
        } );

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