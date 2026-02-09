@extends('my-cloud.layout.app')
@push('style')
    <link rel="stylesheet" href="{{ asset('assets/css/inbox.css') }}">
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
                    <div class="page-name fs-20 fw-bold ms-md-4 ms-2 position-relative">My Cloud</div>
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
                        <li>
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
                <ul class="nav nav-pills mb-0 flex-column flex-sm-row" role="tablist">
                    <li class="nav-item"><a class="nav-link rounded-3 active" data-bs-toggle="tab" href="#my_drive" role="tab">My Drive</a></li>
                    <li class="nav-item">
                        <a class="nav-link rounded-3 hover-svg position-relative d-flex align-items-center gap-1" data-bs-toggle="tab" href="#shared_with_me" role="tab">
                            <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                            </svg>
                            <span>Shared with me</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link rounded-3 hover-svg d-flex align-items-center gap-1" data-bs-toggle="tab" href="#starred" role="tab">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                            </svg>
                            <span>Starred</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link rounded-3 hover-svg d-flex align-items-center gap-1" data-bs-toggle="tab" href="#trash" role="tab">
                            <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 7l16 0" />
                                <path d="M10 11l0 6" />
                                <path d="M14 11l0 6" />
                                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                            </svg>
                            <span>Trash</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown d-none d-md-block">
                        <a class="nav-link dropdown hover-svg d-flex align-items-center gap-1" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1"  stroke-linecap="round"  stroke-linejoin="round">
                                <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                <path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                            </svg>
                        </a>
                        <ul class="dropdown-menu shadow border-0 li_animate rounded-4">
                            <li><a class="dropdown-item" href="#">Projects</a></li>
                            <li><a class="dropdown-item" href="#">My Documents</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Photos</a></li>
                            <li><a class="dropdown-item" href="#">Whatsapp Backup</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown ms-0 ms-sm-auto">
                        <a class="nav-link dropdown bg-primary text-white d-flex align-items-center gap-2" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1"  stroke-linecap="round"  stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M12 5l0 14" />
                                <path d="M5 12l14 0" />
                            </svg>
                            <span>Create</span>
                        </a>
                        <ul class="dropdown-menu shadow border-0 li_animate rounded-4">
                            <li><a class="dropdown-item" href="#">New Folder</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">File Upload</a></li>
                            <li><a class="dropdown-item" href="#">Folder Upload</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Google Docs</a></li>
                            <li><a class="dropdown-item" href="#">Google Sheets</a></li>
                            <li><a class="dropdown-item" href="#">Google Slides</a></li>
                            <li><a class="dropdown-item" href="#">Google Forms</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="d-flex top-100 position-absolute" style="height: 48px; left: 50px;">
                    <div class="vr border-bg opacity-100"></div>
                    <div class="vr border-bg opacity-100 ms-1"></div>
                </div>
            </div>
            <div class="tab-content border-top mb-4">
                <!-- Tab: My Drive -->
                <div class="tab-pane fade position-relative show active" id="my_drive" role="tabpanel">
                    <div class="d-flex flex-column pt-4">
                        <div class="drive-info">
                            <h5 class="fw-medium text-uppercase mb-0">My Folder</h5>
                            <small>Last Updated 2 days ago</small>
                            <div class="row row-cols-xxl-5 row-cols-xl-4 row-cols-lg-3 row-cols-md-3 row-cols-sm-2 row-cols-1 g-3 row-deck mt-1">
                                <div class="col">
                                    <a href="javascript:void(0);" class="card rounded-4 h-100">
                                        <div class="card-body hover-svg d-flex gap-2 align-items-center">
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.33333 6.6665H15L20 11.6665H31.6667C32.5507 11.6665 33.3986 12.0177 34.0237 12.6428C34.6488 13.2679 35 14.1158 35 14.9998V28.3332C35 29.2172 34.6488 30.0651 34.0237 30.6902C33.3986 31.3153 32.5507 31.6665 31.6667 31.6665H8.33333C7.44928 31.6665 6.60143 31.3153 5.97631 30.6902C5.35119 30.0651 5 29.2172 5 28.3332V9.99984C5 9.11578 5.35119 8.26794 5.97631 7.64281C6.60143 7.01769 7.44928 6.6665 8.33333 6.6665Z" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <div class="d-flex flex-column">
                                                <h6 class="mb-0 fw-semibold">Data</h6>
                                                <small>215 File, 50MB</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="javascript:void(0);" class="card rounded-4 h-100">
                                        <div class="card-body hover-svg d-flex gap-2 align-items-center">
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.33333 6.6665H15L20 11.6665H31.6667C32.5507 11.6665 33.3986 12.0177 34.0237 12.6428C34.6488 13.2679 35 14.1158 35 14.9998V28.3332C35 29.2172 34.6488 30.0651 34.0237 30.6902C33.3986 31.3153 32.5507 31.6665 31.6667 31.6665H8.33333C7.44928 31.6665 6.60143 31.3153 5.97631 30.6902C5.35119 30.0651 5 29.2172 5 28.3332V9.99984C5 9.11578 5.35119 8.26794 5.97631 7.64281C6.60143 7.01769 7.44928 6.6665 8.33333 6.6665Z" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <div class="d-flex flex-column">
                                                <h6 class="mb-0 fw-semibold">Workspace</h6>
                                                <small>215 File, 50MB</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="javascript:void(0);" class="card rounded-4 h-100">
                                        <div class="card-body hover-svg d-flex gap-2 align-items-center">
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.33333 6.6665H15L20 11.6665H31.6667C32.5507 11.6665 33.3986 12.0177 34.0237 12.6428C34.6488 13.2679 35 14.1158 35 14.9998V28.3332C35 29.2172 34.6488 30.0651 34.0237 30.6902C33.3986 31.3153 32.5507 31.6665 31.6667 31.6665H8.33333C7.44928 31.6665 6.60143 31.3153 5.97631 30.6902C5.35119 30.0651 5 29.2172 5 28.3332V9.99984C5 9.11578 5.35119 8.26794 5.97631 7.64281C6.60143 7.01769 7.44928 6.6665 8.33333 6.6665Z" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <div class="d-flex flex-column">
                                                <h6 class="mb-0 fw-semibold">Holiday</h6>
                                                <small>215 File, 50MB</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="javascript:void(0);" class="card rounded-4 h-100">
                                        <div class="card-body hover-svg d-flex gap-2 align-items-center">
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.33333 6.6665H15L20 11.6665H31.6667C32.5507 11.6665 33.3986 12.0177 34.0237 12.6428C34.6488 13.2679 35 14.1158 35 14.9998V28.3332C35 29.2172 34.6488 30.0651 34.0237 30.6902C33.3986 31.3153 32.5507 31.6665 31.6667 31.6665H8.33333C7.44928 31.6665 6.60143 31.3153 5.97631 30.6902C5.35119 30.0651 5 29.2172 5 28.3332V9.99984C5 9.11578 5.35119 8.26794 5.97631 7.64281C6.60143 7.01769 7.44928 6.6665 8.33333 6.6665Z" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <div class="d-flex flex-column">
                                                <h6 class="mb-0 fw-semibold">Mobile Backup</h6>
                                                <small>215 File, 50MB</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="recent-files-info mt-5">
                            <h5 class="fw-medium text-uppercase mb-0">Recent File Access</h5>
                            <small>Lorem ipsum dolor sit amet consectetur adipisicing elit.</small>
                            <table class="Data_Table table table-round align-middle mb-0 table-hover w-100 mt-2 border-top">
                                <thead>
                                    <tr>
                                        <th class="py-2 fw-medium small text-uppercase"></th>
                                        <th class="py-2 fw-medium small text-uppercase">Name</th>
                                        <th class="py-2 fw-medium small text-uppercase">Share With</th>
                                        <th class="py-2 fw-medium small text-uppercase">Owner</th>
                                        <th class="py-2 fw-medium small text-uppercase">Last Modified</th>
                                        <th class="py-2 fw-medium small text-uppercase">Size</th>
                                        <th class="py-2 fw-medium small text-uppercase">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="hover-svg">
                                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1"  stroke-linecap="round"  stroke-linejoin="round">
                                                    <path d="M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2" />
                                                </svg>
                                            </div>
                                        </td>
                                        <td>Workspace</td>
                                        <td>-</td>
                                        <td>Me</td>
                                        <td>May 31, 2022</td>
                                        <td>318MB</td>
                                        <td>
                                            <button type="button" class="btn text-primary p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" >
                                                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                                    <path d="M16 5l3 3" />
                                                </svg>
                                            </button>
                                            <button type="button" class="btn text-danger p-0 delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" >
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
                                            <div class="hover-svg">
                                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1"  stroke-linecap="round"  stroke-linejoin="round">
                                                    <path d="M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2" />
                                                </svg>
                                            </div>
                                        </td>
                                        <td>Family</td>
                                        <td>-</td>
                                        <td>Me</td>
                                        <td>June 22, 2022</td>
                                        <td>-</td>
                                        <td>
                                            <button type="button" class="btn text-primary p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" >
                                                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                                    <path d="M16 5l3 3" />
                                                </svg>
                                            </button>
                                            <button type="button" class="btn text-danger p-0 delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" >
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
                                            <div class="hover-svg">
                                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1"  stroke-linecap="round"  stroke-linejoin="round">
                                                    <path d="M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2" />
                                                </svg>
                                            </div>
                                        </td>
                                        <td>Kids</td>
                                        <td>
                                            <div class="avatar-group d-flex w-100">
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
                                        <td>Dean Otto</td>
                                        <td>Jan 22, 2025</td>
                                        <td>18MB</td>
                                        <td>
                                            <button type="button" class="btn text-primary p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" >
                                                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                                    <path d="M16 5l3 3" />
                                                </svg>
                                            </button>
                                            <button type="button" class="btn text-danger p-0 delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" >
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
                                            <div class="hover-svg">
                                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1"  stroke-linecap="round"  stroke-linejoin="round">
                                                    <path d="M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2" />
                                                </svg>
                                            </div>
                                        </td>
                                        <td>AI Project</td>
                                        <td>-</td>
                                        <td>Thomas's Joe</td>
                                        <td>Dec 12, 2025</td>
                                        <td>20KB</td>
                                        <td>
                                            <button type="button" class="btn text-primary p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" >
                                                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                                    <path d="M16 5l3 3" />
                                                </svg>
                                            </button>
                                            <button type="button" class="btn text-danger p-0 delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" >
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
                                            <div class="hover-svg">
                                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1"  stroke-linecap="round"  stroke-linejoin="round">
                                                    <path d="M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2" />
                                                </svg>
                                            </div>
                                        </td>
                                        <td>Holiday</td>
                                        <td>-</td>
                                        <td>Me</td>
                                        <td>Oct 19, 2025</td>
                                        <td>1.7GB</td>
                                        <td>
                                            <button type="button" class="btn text-primary p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" >
                                                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                                    <path d="M16 5l3 3" />
                                                </svg>
                                            </button>
                                            <button type="button" class="btn text-danger p-0 delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" >
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
                                            <div class="hover-svg">
                                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1"  stroke-linecap="round"  stroke-linejoin="round">
                                                    <path d="M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2" />
                                                </svg>
                                            </div>
                                        </td>
                                        <td>Mobile Backup</td>
                                        <td>-</td>
                                        <td>Thomas's Joe</td>
                                        <td>Aug 20, 2025</td>
                                        <td>-</td>
                                        <td>
                                            <button type="button" class="btn text-primary p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" >
                                                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                                    <path d="M16 5l3 3" />
                                                </svg>
                                            </button>
                                            <button type="button" class="btn text-danger p-0 delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" >
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
                                            <div class="hover-svg">
                                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1"  stroke-linecap="round"  stroke-linejoin="round">
                                                    <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                                    <path d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v4" />
                                                    <path d="M5 18h1.5a1.5 1.5 0 0 0 0 -3h-1.5v6" />
                                                    <path d="M17 18h2" />
                                                    <path d="M20 15h-3v6" />
                                                    <path d="M11 15v6h1a2 2 0 0 0 2 -2v-2a2 2 0 0 0 -2 -2h-1z" />
                                                </svg>
                                            </div>
                                        </td>
                                        <td>Dashboard Estimate.pdf</td>
                                        <td>
                                            <div class="avatar-group d-flex w-100">
                                                <a href="#" class="avatar-item md" data-bs-toggle="tooltip" data-placement="top" title="Avatar Name">
                                                    <img class="avatar md border rounded-circle" src="assets/images/user-3.png" alt="">
                                                </a>
                                                <a href="#" class="avatar-item md" data-bs-toggle="tooltip" data-placement="top" title="Avatar Name">
                                                    <img class="avatar md border rounded-circle" src="assets/images/user-4.png" alt="">
                                                </a>
                                                <a href="#" class="avatar-item md" data-bs-toggle="tooltip" data-placement="top" title="Avatar Name">
                                                    <img class="avatar md border rounded-circle" src="assets/images/user-1.png" alt="">
                                                </a>
                                            </div>
                                        </td>
                                        <td>Me</td>
                                        <td>Mar 31, 2025</td>
                                        <td>-</td>
                                        <td>
                                            <button type="button" class="btn text-primary p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" >
                                                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                                    <path d="M16 5l3 3" />
                                                </svg>
                                            </button>
                                            <button type="button" class="btn text-danger p-0 delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" >
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
                                            <div class="hover-svg">
                                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1"  stroke-linecap="round"  stroke-linejoin="round">
                                                    <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                                    <path d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v4" />
                                                    <path d="M5 18h1.5a1.5 1.5 0 0 0 0 -3h-1.5v6" />
                                                    <path d="M17 18h2" />
                                                    <path d="M20 15h-3v6" />
                                                    <path d="M11 15v6h1a2 2 0 0 0 2 -2v-2a2 2 0 0 0 -2 -2h-1z" />
                                                </svg>
                                            </div>
                                        </td>
                                        <td>Bill.pdf</td>
                                        <td>-</td>
                                        <td>Me</td>
                                        <td>Feb 23, 2025</td>
                                        <td>-</td>
                                        <td>
                                            <button type="button" class="btn text-primary p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" >
                                                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                                    <path d="M16 5l3 3" />
                                                </svg>
                                            </button>
                                            <button type="button" class="btn text-danger p-0 delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" >
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
                                            <div class="hover-svg">
                                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1"  stroke-linecap="round"  stroke-linejoin="round">
                                                    <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                                    <path d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v4" />
                                                    <path d="M5 15v6h1a2 2 0 0 0 2 -2v-2a2 2 0 0 0 -2 -2h-1z" />
                                                    <path d="M20 16.5a1.5 1.5 0 0 0 -3 0v3a1.5 1.5 0 0 0 3 0" />
                                                    <path d="M12.5 15a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1 -3 0v-3a1.5 1.5 0 0 1 1.5 -1.5z" />
                                                </svg>
                                            </div>
                                        </td>
                                        <td>Travel Plan.doc</td>
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
                                                <a href="#" class="avatar-item md" data-bs-toggle="tooltip" data-placement="top" title="More">
                                                    <div class="avatar md thumbnail border rounded-circle d-flex align-items-center justify-content-center fs-6 text-white">+5</div>
                                                </a>
                                            </div>
                                        </td>
                                        <td>Dean Otto</td>
                                        <td>Sep 15, 2024</td>
                                        <td>558KB</td>
                                        <td>
                                            <button type="button" class="btn text-primary p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" >
                                                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                                    <path d="M16 5l3 3" />
                                                </svg>
                                            </button>
                                            <button type="button" class="btn text-danger p-0 delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" >
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
                                            <div class="hover-svg">
                                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1"  stroke-linecap="round"  stroke-linejoin="round">
                                                    <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                                    <path d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v4" />
                                                    <path d="M4 15l4 6" />
                                                    <path d="M4 21l4 -6" />
                                                    <path d="M17 20.25c0 .414 .336 .75 .75 .75h1.25a1 1 0 0 0 1 -1v-1a1 1 0 0 0 -1 -1h-1a1 1 0 0 1 -1 -1v-1a1 1 0 0 1 1 -1h1.25a.75 .75 0 0 1 .75 .75" />
                                                    <path d="M11 15v6h3" />
                                                </svg>
                                            </div>
                                        </td>
                                        <td>timesheet.xlsx</td>
                                        <td>-</td>
                                        <td>Thomas's Joe</td>
                                        <td>May 10, 2025</td>
                                        <td>-</td>
                                        <td>
                                            <button type="button" class="btn text-primary p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" >
                                                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                                    <path d="M16 5l3 3" />
                                                </svg>
                                            </button>
                                            <button type="button" class="btn text-danger p-0 delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" >
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
                                            <div class="hover-svg">
                                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1"  stroke-linecap="round"  stroke-linejoin="round">
                                                    <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                                    <path d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v4" />
                                                    <path d="M5 18h1.5a1.5 1.5 0 0 0 0 -3h-1.5v6" />
                                                    <path d="M17 18h2" />
                                                    <path d="M20 15h-3v6" />
                                                    <path d="M11 15v6h1a2 2 0 0 0 2 -2v-2a2 2 0 0 0 -2 -2h-1z" />
                                                </svg>
                                            </div>
                                        </td>
                                        <td>new.pdf</td>
                                        <td>-</td>
                                        <td>Me</td>
                                        <td>Apr 10, 2025</td>
                                        <td>-</td>
                                        <td>
                                            <button type="button" class="btn text-primary p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" >
                                                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                                    <path d="M16 5l3 3" />
                                                </svg>
                                            </button>
                                            <button type="button" class="btn text-danger p-0 delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" >
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
                                            <div class="hover-svg">
                                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1"  stroke-linecap="round"  stroke-linejoin="round">
                                                    <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                                    <path d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v4" />
                                                    <path d="M7 16.5a1.5 1.5 0 0 0 -3 0v3a1.5 1.5 0 0 0 3 0" />
                                                    <path d="M10 20.25c0 .414 .336 .75 .75 .75h1.25a1 1 0 0 0 1 -1v-1a1 1 0 0 0 -1 -1h-1a1 1 0 0 1 -1 -1v-1a1 1 0 0 1 1 -1h1.25a.75 .75 0 0 1 .75 .75" />
                                                    <path d="M16 15l2 6l2 -6" />
                                                </svg>
                                            </div>
                                        </td>
                                        <td>data.csv</td>
                                        <td>-</td>
                                        <td>Thomas's Joe</td>
                                        <td>Today</td>
                                        <td>29MB</td>
                                        <td>
                                            <button type="button" class="btn text-primary p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" >
                                                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                                    <path d="M16 5l3 3" />
                                                </svg>
                                            </button>
                                            <button type="button" class="btn text-danger p-0 delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" >
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
                    </div>
                </div>
                <!-- Tab: Shared With Me -->
                <div class="tab-pane fade position-relative" id="shared_with_me" role="tabpanel">
                    <div class="d-flex flex-column pt-4">
                        <div class="recent-files-info">
                            <h5 class="fw-medium text-uppercase mb-0">Recent File Access</h5>
                            <small>Lorem ipsum dolor sit amet consectetur adipisicing elit.</small>
                            <div class="row row-cols-xxl-5 row-cols-xl-4 row-cols-lg-3 row-cols-md-3 row-cols-sm-2 row-cols-1 g-3 row-deck mt-1">
                                <div class="col">
                                    <a href="javascript:void(0);" class="card rounded-4 h-100">
                                        <div class="card-body hover-svg d-flex gap-2 align-items-center">
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.33333 6.6665H15L20 11.6665H31.6667C32.5507 11.6665 33.3986 12.0177 34.0237 12.6428C34.6488 13.2679 35 14.1158 35 14.9998V28.3332C35 29.2172 34.6488 30.0651 34.0237 30.6902C33.3986 31.3153 32.5507 31.6665 31.6667 31.6665H8.33333C7.44928 31.6665 6.60143 31.3153 5.97631 30.6902C5.35119 30.0651 5 29.2172 5 28.3332V9.99984C5 9.11578 5.35119 8.26794 5.97631 7.64281C6.60143 7.01769 7.44928 6.6665 8.33333 6.6665Z" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <div class="d-flex flex-column">
                                                <h6 class="mb-0 fw-semibold">Kids</h6>
                                                <small>215 File, 50MB</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="javascript:void(0);" class="card rounded-4 h-100">
                                        <div class="card-body hover-svg d-flex gap-2 align-items-center">
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M23.3334 5V11.6667C23.3334 12.1087 23.509 12.5326 23.8215 12.8452C24.1341 13.1577 24.558 13.3333 25 13.3333H31.6667" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M8.33337 20V8.33333C8.33337 7.44928 8.68456 6.60143 9.30968 5.97631C9.93481 5.35119 10.7827 5 11.6667 5H23.3334L31.6667 13.3333V20" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M8.33337 25V35H10C10.8841 35 11.7319 34.6488 12.3571 34.0237C12.9822 33.3986 13.3334 32.5507 13.3334 31.6667V28.3333C13.3334 27.4493 12.9822 26.6014 12.3571 25.9763C11.7319 25.3512 10.8841 25 10 25H8.33337Z" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M33.3334 27.5C33.3334 26.837 33.07 26.2011 32.6011 25.7322C32.1323 25.2634 31.4964 25 30.8334 25C30.1703 25 29.5344 25.2634 29.0656 25.7322C28.5968 26.2011 28.3334 26.837 28.3334 27.5V32.5C28.3334 33.163 28.5968 33.7989 29.0656 34.2678C29.5344 34.7366 30.1703 35 30.8334 35C31.4964 35 32.1323 34.7366 32.6011 34.2678C33.07 33.7989 33.3334 33.163 33.3334 32.5" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M20.8334 25C21.4964 25 22.1323 25.2634 22.6011 25.7322C23.07 26.2011 23.3334 26.837 23.3334 27.5V32.5C23.3334 33.163 23.07 33.7989 22.6011 34.2678C22.1323 34.7366 21.4964 35 20.8334 35C20.1703 35 19.5344 34.7366 19.0656 34.2678C18.5968 33.7989 18.3334 33.163 18.3334 32.5V27.5C18.3334 26.837 18.5968 26.2011 19.0656 25.7322C19.5344 25.2634 20.1703 25 20.8334 25Z" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <div class="d-flex flex-column">
                                                <h6 class="mb-0 fw-semibold">Travel Plan.doc</h6>
                                                <small>215 File, 50MB</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="javascript:void(0);" class="card rounded-4 h-100">
                                        <div class="card-body hover-svg d-flex gap-2 align-items-center">
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M23.3334 5V11.6667C23.3334 12.1087 23.509 12.5326 23.8215 12.8452C24.1341 13.1577 24.558 13.3333 25 13.3333H31.6667" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M8.33337 20V8.33333C8.33337 7.44928 8.68456 6.60143 9.30968 5.97631C9.93481 5.35119 10.7827 5 11.6667 5H23.3334L31.6667 13.3333V20" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M8.33337 30H10.8334C11.4964 30 12.1323 29.7366 12.6011 29.2678C13.07 28.7989 13.3334 28.163 13.3334 27.5C13.3334 26.837 13.07 26.2011 12.6011 25.7322C12.1323 25.2634 11.4964 25 10.8334 25H8.33337V35" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M28.3334 30H31.6667" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M33.3334 25H28.3334V35" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M18.3334 25V35H20C20.8841 35 21.7319 34.6488 22.3571 34.0237C22.9822 33.3986 23.3334 32.5507 23.3334 31.6667V28.3333C23.3334 27.4493 22.9822 26.6014 22.3571 25.9763C21.7319 25.3512 20.8841 25 20 25H18.3334Z" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <div class="d-flex flex-column">
                                                <h6 class="mb-0 fw-semibold">Dashboard Estimate.pdf</h6>
                                                <small>215 File, 50MB</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tab: Starred -->
                <div class="tab-pane fade" id="starred" role="tabpanel">
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
                <!-- Tab: Trash -->
                <div class="tab-pane fade" id="trash" role="tabpanel">
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