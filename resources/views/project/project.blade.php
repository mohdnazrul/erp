@extends('project.layout.app')
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
                    <div class="page-name fs-20 fw-bold ms-md-4 ms-2">Projects</div>
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
                                <svg width="26" height="26" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M25 13.7501C24.6943 11.5504 23.6738 9.5122 22.0958 7.94949C20.5178 6.38679 18.4697 5.38627 16.2671 5.10206C14.0645 4.81785 11.8295 5.26572 9.9065 6.37668C7.98348 7.48763 6.47906 9.20004 5.625 11.2501M5 6.25012V11.2501H10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M5 16.25C5.3057 18.4497 6.32616 20.4879 7.9042 22.0506C9.48224 23.6133 11.5303 24.6139 13.7329 24.8981C15.9355 25.1823 18.1705 24.7344 20.0935 23.6234C22.0165 22.5125 23.5209 20.8001 24.375 18.75M25 23.75V18.75H20" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-decoration-none hover-svg">
                                <svg width="26" height="26" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.75 15C3.75 15.9946 4.14509 16.9484 4.84835 17.6517C5.55161 18.3549 6.50544 18.75 7.5 18.75C8.49456 18.75 9.44839 18.3549 10.1517 17.6517C10.8549 16.9484 11.25 15.9946 11.25 15C11.25 14.0054 10.8549 13.0516 10.1517 12.3483C9.44839 11.6451 8.49456 11.25 7.5 11.25C6.50544 11.25 5.55161 11.6451 4.84835 12.3483C4.14509 13.0516 3.75 14.0054 3.75 15Z" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M18.75 7.5C18.75 8.49456 19.1451 9.44839 19.8483 10.1517C20.5516 10.8549 21.5054 11.25 22.5 11.25C23.4946 11.25 24.4484 10.8549 25.1517 10.1517C25.8549 9.44839 26.25 8.49456 26.25 7.5C26.25 6.50544 25.8549 5.55161 25.1517 4.84835C24.4484 4.14509 23.4946 3.75 22.5 3.75C21.5054 3.75 20.5516 4.14509 19.8483 4.84835C19.1451 5.55161 18.75 6.50544 18.75 7.5Z" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M18.75 22.5C18.75 23.4946 19.1451 24.4484 19.8483 25.1517C20.5516 25.8549 21.5054 26.25 22.5 26.25C23.4946 26.25 24.4484 25.8549 25.1517 25.1517C25.8549 24.4484 26.25 23.4946 26.25 22.5C26.25 21.5054 25.8549 20.5516 25.1517 19.8483C24.4484 19.1451 23.4946 18.75 22.5 18.75C21.5054 18.75 20.5516 19.1451 19.8483 19.8483C19.1451 20.5516 18.75 21.5054 18.75 22.5Z" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M10.875 13.375L19.125 9.125" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M10.875 16.625L19.125 20.875" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="text-decoration-none btn-toggle-leftsidebar hover-svg">
                                <svg width="26" height="26" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 7.5H25" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8.75 15H25" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12.5 22.5H25" stroke-linecap="round" stroke-linejoin="round"/>
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
        <!-- Project List -->
        <div class="col-12">
            <div class="border-bg mb-5 position-relative px-3 py-4 rounded-4">
                <ul class="nav nav-pills flex-column flex-sm-row mb-0" role="tablist">
                    <li class="nav-item" role="presentation"><a class="nav-link rounded-3 active" data-bs-toggle="tab" href="#allProjects" role="tab" aria-selected="true">All Projects</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link rounded-3" data-bs-toggle="tab" href="#inProgress" role="tab" aria-selected="true">In Progress</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link rounded-3" data-bs-toggle="tab" href="#upComing" role="tab" aria-selected="true">Upcoming</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link rounded-3" data-bs-toggle="tab" href="#overdue" role="tab" aria-selected="true">Overdue</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link rounded-3" data-bs-toggle="tab" href="#completed" role="tab" aria-selected="true">Completed</a></li>
                </ul>
                <div class="d-flex top-100 position-absolute" style="height: 48px; left: 50px;">
                    <div class="vr border-bg opacity-100"></div>
                    <div class="vr border-bg opacity-100 ms-1"></div>
                </div>
            </div>
            <div class="tab-content border-top mb-4">
                <!-- Tab:: All Projects -->
                <div class="tab-pane fade position-relative active show" id="allProjects" role="tabpanel">
                    <!-- Top Projects -->
                    <div class="mt-4">
                        <h5 class="fw-medium text-uppercase mb-0">Top Projects</h5>
                        <small>Excellence demonstrated through top results.</small>
                        <ul class="list-unstyled row row-cols-xl-3 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 g-3 row-deck mt-1 li_animate">
                            <li class="col col-md-12 col-sm-12">
                                <div class="card rounded-4 h-100 bg-primary bg-opacity-25">
                                    <div class="card-body d-flex align-items-center justify-content-center flex-column">
                                        <a class="d-flex hover-svg d-flex align-items-center justify-content-center flex-column w-100 h-100" data-bs-toggle="offcanvas" href="#Create_Project" role="button" aria-controls="Create_Project">
                                            <svg width="60" height="60" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.2666 6.15002C12.4467 6.90334 10.793 8.00768 9.3999 9.40002" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M6.15 14.2667C5.39426 16.0839 5.00351 18.032 5 20.0001" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M6.1499 25.7333C6.90321 27.5531 8.00756 29.2068 9.3999 30.5999" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M14.2666 33.85C16.0838 34.6057 18.0319 34.9965 19.9999 35" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M25.7334 33.85C27.5533 33.0967 29.207 31.9923 30.6001 30.6" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M33.8501 25.7333C34.6058 23.9162 34.9966 21.968 35.0001 20" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M33.8501 14.2667C33.0968 12.4468 31.9924 10.7931 30.6001 9.40002" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M25.7333 6.15C23.9162 5.39426 21.968 5.00351 20 5" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M15 20H25" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M20 15V25" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <h6 class="mt-3 mb-0">Create New Project</h6>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="col">
                                <a href="{{ route('project-details') }}" class="card border-dashed rounded-4">
                                    <div class="card-body">
                                        <div class="text-truncate">
                                            <h5 class="mb-1 text-truncate">School / University</h5>
                                            <small class="text-muted">CRM App application to University Admin..</small>
                                        </div>
                                        <div class="mt-3">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="progress flex-grow-1" style="height: 3px;">
                                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;"></div>
                                                </div>
                                                <span class="progress-info">95%</span>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center gap-3 mt-3">
                                                <div class="avatar-group d-flex align-items-center ps-0">
                                                    <div class="avatar-item sm" data-bs-toggle="tooltip" data-placement="top" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                                                        <img class="avatar sm border rounded-circle" src="assets/images/user-3.png" alt="">
                                                    </div>
                                                    <div class="avatar-item sm" data-bs-toggle="tooltip" data-placement="top" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                                                        <img class="avatar sm border rounded-circle" src="assets/images/user-4.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center rounded-2 border-bg border p-1 gap-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                        <path d="M9.615 20h-2.615a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8" />
                                                        <path d="M14 19l2 2l4 -4" />
                                                        <path d="M9 8h4" /><path d="M9 12h2" />
                                                    </svg>
                                                    <small>25 / 29</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer py-3 fs-14">
                                        <span>Due date: <strong>21 Aug, 2026</strong></span>
                                    </div>
                                </a>
                            </li>
                            <li class="col">
                                <a href="{{ route('project-details') }}" class="card border-dashed rounded-4">
                                    <div class="card-body">
                                        <div class="text-truncate">
                                            <h5 class="mb-1 text-truncate">TTM Banking</h5>
                                            <small class="text-muted">Banking App application development</small>
                                        </div>
                                        <div class="mt-3">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="progress flex-grow-1" style="height: 3px;">
                                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100" style="width: 56%;"></div>
                                                </div>
                                                <span class="progress-info">56%</span>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center gap-3 mt-3">
                                                <div class="avatar-group d-flex align-items-center ps-0">
                                                    <div class="avatar-item sm" data-bs-toggle="tooltip" data-placement="top" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                                                        <img class="avatar sm border rounded-circle" src="assets/images/user-5.png" alt="">
                                                    </div>
                                                    <div class="avatar-item sm" data-bs-toggle="tooltip" data-placement="top" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                                                        <img class="avatar sm border rounded-circle" src="assets/images/user-7.png" alt="">
                                                    </div>
                                                    <div class="avatar-item sm" data-bs-toggle="tooltip" data-placement="top" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                                                        <img class="avatar sm border rounded-circle" src="assets/images/user-6.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center rounded-2 border-bg border p-1 gap-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                        <path d="M9.615 20h-2.615a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8" />
                                                        <path d="M14 19l2 2l4 -4" />
                                                        <path d="M9 8h4" /><path d="M9 12h2" />
                                                    </svg>
                                                    <small>178 / 300</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer py-3 fs-14">
                                        <span>Due date: <strong>29 May, 2026</strong></span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <!-- Project List -->
                        <div class="mt-4 mt-lg-5">
                            <h5 class="fw-medium text-uppercase mb-0">All Projects</h5>
                            <small>Creative, impactful, and client-focused work.</small>
                            <div class="table-responsive">
                                <table class="Data_Table table table-round align-middle mb-0 mt-3 table-hover w-100">
                                    <thead>
                                        <th>Project Name</th>
                                        <th>Due Date</th>
                                        <th>Team Members</th>
                                        <th>Progress</th>
                                        <th class="text-center" style="width: 100px;">Task</th>
                                        <th class="text-end">Favorites</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="text-truncate">
                                                    <h6 class="mb-1 text-truncate"><a href="{{ route('project-details') }}">School / University Website</a></h6>
                                                    <small class="text-muted">Highlights of our finest completed work.</small>
                                                </div>
                                            </td>
                                            <td>21 Aug, 2026</td>
                                            <td>
                                                <div class="avatar-group d-flex align-items-center ps-0">
                                                    <div class="avatar-item sm" data-bs-toggle="tooltip" data-placement="top" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                                                        <img class="avatar sm border rounded-circle" src="assets/images/user-3.png" alt="">
                                                    </div>
                                                    <div class="avatar-item sm" data-bs-toggle="tooltip" data-placement="top" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                                                        <img class="avatar sm border rounded-circle" src="assets/images/user-4.png" alt="">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <div class="progress flex-grow-1" style="height: 3px;">
                                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;"></div>
                                                    </div>
                                                    <span class="progress-info">95%</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center rounded-2 border-bg border p-1 gap-2 w-auto">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M9.615 20h-2.615a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8"></path>
                                                        <path d="M14 19l2 2l4 -4"></path>
                                                        <path d="M9 8h4"></path><path d="M9 12h2"></path>
                                                    </svg>
                                                    <small>25 / 29</small>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0)" class="hover-svg d-flex align-items-center justify-content-lg-end">
                                                    <svg class="text-primary text-opacity-25" onclick="this.classList.toggle('text-opacity-25')" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M12 19.0969L5.20163 22L5.85172 14.6135L1 9.02129L8.20015 7.35928L12 1L15.7998 7.35928L23 9.02129L18.1483 14.6135L18.7984 22L12 19.0969Z"></path>
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="text-truncate">
                                                    <h6 class="mb-1 text-truncate"><a href="{{ route('project-details') }}">Creative Agency Website</a></h6>
                                                    <small class="text-muted">Selected projects that define our success.</small>
                                                </div>
                                            </td>
                                            <td>29 May, 2026</td>
                                            <td>
                                                <div class="avatar-group d-flex align-items-center ps-0">
                                                    <div class="avatar-item sm" data-bs-toggle="tooltip" data-placement="top" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                                                        <img class="avatar sm border rounded-circle" src="assets/images/user-3.png" alt="">
                                                    </div>
                                                    <div class="avatar-item sm" data-bs-toggle="tooltip" data-placement="top" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                                                        <img class="avatar sm border rounded-circle" src="assets/images/user-4.png" alt="">
                                                    </div>
                                                    <div class="avatar-item sm" data-bs-toggle="tooltip" data-placement="top" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                                                        <img class="avatar sm border rounded-circle" src="assets/images/user-5.png" alt="">
                                                    </div>
                                                    <div class="avatar-item sm" data-bs-toggle="tooltip" data-placement="top" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                                                        <img class="avatar sm border rounded-circle" src="assets/images/user-5.png" alt="">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <div class="progress flex-grow-1" style="height: 3px;">
                                                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
                                                    </div>
                                                    <span class="progress-info">45%</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center rounded-2 border-bg border p-1 gap-2 w-auto">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M9.615 20h-2.615a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8"></path>
                                                        <path d="M14 19l2 2l4 -4"></path>
                                                        <path d="M9 8h4"></path><path d="M9 12h2"></path>
                                                    </svg>
                                                    <small>50 / 130</small>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0)" class="hover-svg d-flex align-items-center justify-content-lg-end">
                                                    <svg class="text-primary" onclick="this.classList.toggle('text-opacity-25')" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M12 19.0969L5.20163 22L5.85172 14.6135L1 9.02129L8.20015 7.35928L12 1L15.7998 7.35928L23 9.02129L18.1483 14.6135L18.7984 22L12 19.0969Z"></path>
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="text-truncate">
                                                    <h6 class="mb-1 text-truncate"><a href="{{ route('project-details') }}">Cryptocurrency Dashboard</a></h6>
                                                    <small class="text-muted">iOS App, Android App</small>
                                                </div>
                                            </td>
                                            <td>01 Jan, 2026</td>
                                            <td>
                                                <div class="avatar-group d-flex align-items-center ps-0">
                                                    <div class="avatar-item sm" data-bs-toggle="tooltip" data-placement="top" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                                                        <img class="avatar sm border rounded-circle" src="assets/images/user-3.png" alt="">
                                                    </div>
                                                    <div class="avatar-item sm" data-bs-toggle="tooltip" data-placement="top" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                                                        <img class="avatar sm border rounded-circle" src="assets/images/user-4.png" alt="">
                                                    </div>
                                                    <div class="avatar-item sm" data-bs-toggle="tooltip" data-placement="top" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                                                        <img class="avatar sm border rounded-circle" src="assets/images/user-5.png" alt="">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <div class="progress flex-grow-1" style="height: 3px;">
                                                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%;"></div>
                                                    </div>
                                                    <span class="progress-info">10%</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center rounded-2 border-bg border p-1 gap-2 w-auto">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M9.615 20h-2.615a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8"></path>
                                                        <path d="M14 19l2 2l4 -4"></path>
                                                        <path d="M9 8h4"></path><path d="M9 12h2"></path>
                                                    </svg>
                                                    <small>12 / 120</small>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0)" class="hover-svg d-flex align-items-center justify-content-lg-end">
                                                    <svg class="text-primary text-opacity-25" onclick="this.classList.toggle('text-opacity-25')" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M12 19.0969L5.20163 22L5.85172 14.6135L1 9.02129L8.20015 7.35928L12 1L15.7998 7.35928L23 9.02129L18.1483 14.6135L18.7984 22L12 19.0969Z"></path>
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="text-truncate">
                                                    <h6 class="mb-1 text-truncate"><a href="{{ route('project-details') }}">ATKT Event Managment</a></h6>
                                                    <small class="text-muted">CRM App</small>
                                                </div>
                                            </td>
                                            <td>01 Jan, 2027</td>
                                            <td>
                                                <div class="avatar-group d-flex align-items-center ps-0">
                                                    <div class="avatar-item sm" data-bs-toggle="tooltip" data-placement="top" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                                                        <img class="avatar sm border rounded-circle" src="assets/images/user-3.png" alt="">
                                                    </div>
                                                    <div class="avatar-item sm" data-bs-toggle="tooltip" data-placement="top" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                                                        <img class="avatar sm border rounded-circle" src="assets/images/user-4.png" alt="">
                                                    </div>
                                                    <div class="avatar-item sm" data-bs-toggle="tooltip" data-placement="top" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                                                        <img class="avatar sm border rounded-circle" src="assets/images/user-1.png" alt="">
                                                    </div>
                                                    <div class="avatar-item sm" data-bs-toggle="tooltip" data-placement="top" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                                                        <img class="avatar sm border rounded-circle" src="assets/images/user-2.png" alt="">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <div class="progress flex-grow-1" style="height: 3px;">
                                                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                                                    </div>
                                                    <span class="progress-info">77%</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center rounded-2 border-bg border p-1 gap-2 w-auto">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M9.615 20h-2.615a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8"></path>
                                                        <path d="M14 19l2 2l4 -4"></path>
                                                        <path d="M9 8h4"></path><path d="M9 12h2"></path>
                                                    </svg>
                                                    <small>68 / 88</small>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0)" class="hover-svg d-flex align-items-center justify-content-lg-end">
                                                    <svg class="text-primary text-opacity-25" onclick="this.classList.toggle('text-opacity-25')" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M12 19.0969L5.20163 22L5.85172 14.6135L1 9.02129L8.20015 7.35928L12 1L15.7998 7.35928L23 9.02129L18.1483 14.6135L18.7984 22L12 19.0969Z"></path>
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- End:: Project List -->
                    </div>
                    <!-- End:: Top Projects -->

                </div>
                <!-- End:: All Projects -->

                <!-- Tab:: In Progress  -->
                <div class="tab-pane fade position-relative" id="inProgress" role="tabpanel">
                    <div class="mt-4">
                        <h5 class="fw-medium text-uppercase mb-0">In Progress</h5>
                        <small>Work actively being developed and refined.</small>
                        <ul class="list-unstyled row row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 g-3 row-deck mt-1 li_animate">
                            <li class="col">
                                <a href="{{ route('project-details') }}" class="card border-dashed rounded-4">
                                    <div class="card-body">
                                        <div class="text-truncate">
                                            <h5 class="mb-1 text-truncate">School / University</h5>
                                            <small class="text-muted">CRM App application to University Admin..</small>
                                        </div>
                                        <div class="mt-3">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="progress flex-grow-1" style="height: 3px;">
                                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;"></div>
                                                </div>
                                                <span class="progress-info">95%</span>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center gap-3 mt-3">
                                                <div class="avatar-group d-flex align-items-center ps-0">
                                                    <div class="avatar-item sm" data-bs-toggle="tooltip" data-placement="top" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                                                        <img class="avatar sm border rounded-circle" src="assets/images/user-3.png" alt="">
                                                    </div>
                                                    <div class="avatar-item sm" data-bs-toggle="tooltip" data-placement="top" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                                                        <img class="avatar sm border rounded-circle" src="assets/images/user-4.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center rounded-2 border-bg border p-1 gap-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                        <path d="M9.615 20h-2.615a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8" />
                                                        <path d="M14 19l2 2l4 -4" />
                                                        <path d="M9 8h4" /><path d="M9 12h2" />
                                                    </svg>
                                                    <small>25 / 29</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer py-3 fs-14">
                                        <span>Due date: <strong>21 Aug, 2026</strong></span>
                                    </div>
                                </a>
                            </li>
                            <li class="col">
                                <a href="{{ route('project-details') }}" class="card border-dashed rounded-4">
                                    <div class="card-body">
                                        <div class="text-truncate">
                                            <h5 class="mb-1 text-truncate">TTM Banking</h5>
                                            <small class="text-muted">Banking App application development</small>
                                        </div>
                                        <div class="mt-3">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="progress flex-grow-1" style="height: 3px;">
                                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100" style="width: 56%;"></div>
                                                </div>
                                                <span class="progress-info">56%</span>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center gap-3 mt-3">
                                                <div class="avatar-group d-flex align-items-center ps-0">
                                                    <div class="avatar-item sm" data-bs-toggle="tooltip" data-placement="top" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                                                        <img class="avatar sm border rounded-circle" src="assets/images/user-5.png" alt="">
                                                    </div>
                                                    <div class="avatar-item sm" data-bs-toggle="tooltip" data-placement="top" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                                                        <img class="avatar sm border rounded-circle" src="assets/images/user-7.png" alt="">
                                                    </div>
                                                    <div class="avatar-item sm" data-bs-toggle="tooltip" data-placement="top" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                                                        <img class="avatar sm border rounded-circle" src="assets/images/user-6.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center rounded-2 border-bg border p-1 gap-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                        <path d="M9.615 20h-2.615a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8" />
                                                        <path d="M14 19l2 2l4 -4" />
                                                        <path d="M9 8h4" /><path d="M9 12h2" />
                                                    </svg>
                                                    <small>178 / 300</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer py-3 fs-14">
                                        <span>Due date: <strong>29 May, 2026</strong></span>
                                    </div>
                                </a>
                            </li>
                            <li class="col">
                                <a href="{{ route('project-details') }}" class="card border-dashed rounded-4">
                                    <div class="card-body">
                                        <div class="text-truncate">
                                            <h5 class="mb-1 text-truncate">thunderal Cryptocurrency</h5>
                                            <small class="text-muted">Cryptocurrency App iOS/Android development</small>
                                        </div>
                                        <div class="mt-3">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="progress flex-grow-1" style="height: 3px;">
                                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;"></div>
                                                </div>
                                                <span class="progress-info">78%</span>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center gap-3 mt-3">
                                                <div class="avatar-group d-flex align-items-center ps-0">
                                                    <div class="avatar-item sm" data-bs-toggle="tooltip" data-placement="top" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                                                        <img class="avatar sm border rounded-circle" src="assets/images/user-3.png" alt="">
                                                    </div>
                                                    <div class="avatar-item sm" data-bs-toggle="tooltip" data-placement="top" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                                                        <img class="avatar sm border rounded-circle" src="assets/images/user-8.png" alt="">
                                                    </div>
                                                    <div class="avatar-item sm" data-bs-toggle="tooltip" data-placement="top" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                                                        <img class="avatar sm border rounded-circle" src="assets/images/user-9.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center rounded-2 border-bg border p-1 gap-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                        <path d="M9.615 20h-2.615a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8" />
                                                        <path d="M14 19l2 2l4 -4" />
                                                        <path d="M9 8h4" /><path d="M9 12h2" />
                                                    </svg>
                                                    <small>78 / 100</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer py-3 fs-14">
                                        <span>Due date: <strong>26 Aug, 2026</strong></span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End:: In Progress -->

                <!-- Tab:: Upcoming  -->
                <div class="tab-pane fade position-relative" id="upComing" role="tabpanel">
                    <div class="mt-4">
                        <h5 class="fw-medium text-uppercase mb-0">Upcoming</h5>
                        <small>Shaping ideas into final deliverables.</small>
                        <ul class="list-unstyled row row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 g-3 row-deck mt-1 li_animate">
                            <li class="col">
                                <a href="{{ route('project-details') }}" class="card border-dashed rounded-4">
                                    <div class="card-body">
                                        <div class="text-truncate">
                                            <h5 class="mb-1 text-truncate">TTM Banking</h5>
                                            <small class="text-muted">Banking App application development</small>
                                        </div>
                                        <div class="mt-3">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="progress flex-grow-1" style="height: 3px;">
                                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100" style="width: 56%;"></div>
                                                </div>
                                                <span class="progress-info">56%</span>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center gap-3 mt-3">
                                                <div class="avatar-group d-flex align-items-center ps-0">
                                                    <div class="avatar-item sm" data-bs-toggle="tooltip" data-placement="top" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                                                        <img class="avatar sm border rounded-circle" src="assets/images/user-5.png" alt="">
                                                    </div>
                                                    <div class="avatar-item sm" data-bs-toggle="tooltip" data-placement="top" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                                                        <img class="avatar sm border rounded-circle" src="assets/images/user-7.png" alt="">
                                                    </div>
                                                    <div class="avatar-item sm" data-bs-toggle="tooltip" data-placement="top" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                                                        <img class="avatar sm border rounded-circle" src="assets/images/user-6.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center rounded-2 border-bg border p-1 gap-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                        <path d="M9.615 20h-2.615a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8" />
                                                        <path d="M14 19l2 2l4 -4" />
                                                        <path d="M9 8h4" /><path d="M9 12h2" />
                                                    </svg>
                                                    <small>178 / 300</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer py-3 fs-14">
                                        <span>Due date: <strong>29 May, 2026</strong></span>
                                    </div>
                                </a>
                            </li>
                            <li class="col">
                                <a href="{{ route('project-details') }}" class="card border-dashed rounded-4">
                                    <div class="card-body">
                                        <div class="text-truncate">
                                            <h5 class="mb-1 text-truncate">thunderal Cryptocurrency</h5>
                                            <small class="text-muted">Cryptocurrency App iOS/Android development</small>
                                        </div>
                                        <div class="mt-3">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="progress flex-grow-1" style="height: 3px;">
                                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;"></div>
                                                </div>
                                                <span class="progress-info">78%</span>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center gap-3 mt-3">
                                                <div class="avatar-group d-flex align-items-center ps-0">
                                                    <div class="avatar-item sm" data-bs-toggle="tooltip" data-placement="top" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                                                        <img class="avatar sm border rounded-circle" src="assets/images/user-3.png" alt="">
                                                    </div>
                                                    <div class="avatar-item sm" data-bs-toggle="tooltip" data-placement="top" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                                                        <img class="avatar sm border rounded-circle" src="assets/images/user-8.png" alt="">
                                                    </div>
                                                    <div class="avatar-item sm" data-bs-toggle="tooltip" data-placement="top" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                                                        <img class="avatar sm border rounded-circle" src="assets/images/user-9.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center rounded-2 border-bg border p-1 gap-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                        <path d="M9.615 20h-2.615a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8" />
                                                        <path d="M14 19l2 2l4 -4" />
                                                        <path d="M9 8h4" /><path d="M9 12h2" />
                                                    </svg>
                                                    <small>78 / 100</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer py-3 fs-14">
                                        <span>Due date: <strong>26 Aug, 2026</strong></span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End:: Upcoming -->

                <!-- Tab:: Overdue  -->
                <div class="tab-pane fade position-relative" id="overdue" role="tabpanel">
                    <div class="card border-0">
                        <div class="card-body text-center p-5">
                            <svg width="86" height="73" viewBox="0 0 86 73" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.5901 18.6739L12.9851 61.855C12.4007 64.7877 14.3441 67.6983 17.2767 68.2828L18.5914 68.5447L60.4578 76.8877C63.3905 77.4721 66.3012 75.5287 66.8856 72.5961L77.3647 20.0102L77.6468 18.5945C78.2312 15.6618 76.2879 12.7511 73.3552 12.1667L40.9947 5.71799" fill="#1B91FB"></path>
                                <path d="M21.5901 18.6739L12.9851 61.855C12.4007 64.7877 14.3441 67.6983 17.2767 68.2828L18.5914 68.5447L60.4578 76.8877C63.3905 77.4721 66.3012 75.5287 66.8856 72.5961L77.3647 20.0102L77.6468 18.5945C78.2312 15.6618 76.2879 12.7511 73.3552 12.1667L40.9947 5.71799" stroke="#4D6173" stroke-width="1.61896" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M40.9952 5.71802L37.7708 21.8983L21.5906 18.6739L40.9952 5.71802Z" fill="#4D6173" stroke="#4D6173" stroke-width="1.61896" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M58.0267 16.0767L68.6701 58.8011C69.3929 61.7027 67.5898 64.7023 64.6881 65.4251L63.3874 65.7492L21.9638 76.0685C19.0621 76.7913 16.0625 74.9882 15.3397 72.0865L2.37825 20.0568L2.02929 18.6561C1.30644 15.7544 3.10959 12.7548 6.01124 12.032L38.0295 4.0557" fill="#85CBFF"></path>
                                <path d="M58.0267 16.0767L68.6701 58.8011C69.3929 61.7027 67.5898 64.7023 64.6881 65.4251L63.3874 65.7492L21.9638 76.0685C19.0621 76.7913 16.0625 74.9882 15.3397 72.0865L2.37825 20.0568L2.02929 18.6561C1.30644 15.7544 3.10959 12.7548 6.01124 12.032L38.0295 4.0557" stroke="#4D6173" stroke-width="1.61896" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M38.0295 4.05579L42.0176 20.0649L58.0268 16.0768L38.0295 4.05579Z" fill="#4D6173" stroke="#4D6173" stroke-width="1.61896" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M68.4957 22.2301V66.2602C68.4957 69.2505 66.0209 71.7253 63.0306 71.7253H61.6901H19.0005C16.0102 71.7253 13.5354 69.2505 13.5354 66.2602V12.6404V11.1968C13.5354 8.20645 16.0102 5.73169 19.0005 5.73169H51.9973" fill="white"></path>
                                <path d="M68.4957 22.2301V66.2602C68.4957 69.2505 66.0209 71.7253 63.0306 71.7253H61.6901H19.0005C16.0102 71.7253 13.5354 69.2505 13.5354 66.2602V12.6404V11.1968C13.5354 8.20645 16.0102 5.73169 19.0005 5.73169H51.9973" stroke="#4D6173" stroke-width="1.61896" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M51.9973 5.73169V22.2301H68.4957L51.9973 5.73169Z" fill="#4D6173" stroke="#4D6173" stroke-width="1.61896" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M74.8405 65.1409L60.1858 56.0999L62.2606 52.7398L76.9082 61.7923L74.8405 65.1409Z" fill="var(--bs-primary)" stroke="#4D6173" stroke-width="0.930904" stroke-miterlimit="10"></path>
                                <path d="M82.1501 69.6951L70.9111 62.7553C69.9726 62.1758 69.6801 60.9389 70.2596 60.0004C70.8391 59.0619 72.076 58.7694 73.0145 59.3489L84.2535 66.2887C85.192 66.8682 85.4845 68.1051 84.905 69.0436C84.3255 69.9821 83.0886 70.2746 82.1501 69.6951Z" fill="#4D6173" stroke="#4D6173" stroke-width="0.930904" stroke-miterlimit="10"></path>
                                <path d="M81.6412 70.4286L67.1812 61.4999C66.8452 61.2924 66.741 60.852 66.9463 60.5066L69.2286 56.8105C69.436 56.4745 69.8764 56.3703 70.2218 56.5756L84.6818 65.5043C85.0178 65.7118 85.122 66.1522 84.9167 66.4976L82.6345 70.1937C82.4176 70.5319 81.9772 70.6361 81.6412 70.4286Z" fill="var(--bs-primary)" stroke="#4D6173" stroke-width="0.930904" stroke-miterlimit="10"></path>
                                <path d="M37.7404 21.1074C25.3339 24.0415 17.6572 36.4738 20.5912 48.8803C23.5231 61.2775 35.9577 68.9635 48.3548 66.0317C60.7613 63.0976 68.438 50.6653 65.5039 38.2588C62.5699 25.8523 50.1375 18.1756 37.7404 21.1074ZM47.3802 61.869C37.4194 64.2247 27.4124 57.9335 25.0213 47.8228C22.6301 37.712 28.7613 27.6142 38.7221 25.2585C48.6829 22.9029 58.69 29.194 61.0811 39.3048C63.4722 49.4155 57.3317 59.5155 47.3802 61.869Z" fill="var(--bs-primary)" stroke="#4D6173" stroke-width="0.930904" stroke-miterlimit="10"></path>
                                <ellipse cx="43.0138" cy="43.4266" rx="18.0856" ry="18.2322" transform="rotate(-13.3056 43.0138 43.4266)" fill="white"></ellipse>
                                <path d="M50.224 44.0262C51.5954 44.0212 52.7667 42.8413 52.7617 41.4698C52.7567 40.0983 51.5768 38.9271 50.2053 38.9321C48.8338 38.9371 47.6626 40.117 47.6676 41.4885C47.6729 42.9579 48.7545 44.0316 50.224 44.0262Z" fill="#1B91FB"></path>
                                <path d="M48.7354 50.8375L47.4619 50.8422C46.3757 48.495 43.5315 47.6237 41.2826 48.8075C40.4024 49.2026 39.6215 49.9892 39.2329 50.8723L37.9593 50.8769C39.0258 47.8361 42.5468 46.2558 45.49 47.4206C46.8637 48.0034 48.1415 49.1743 48.7354 50.8375Z" fill="#1B91FB"></path>
                                <path d="M35.6537 44.0978C37.0252 44.0927 38.1965 42.9129 38.1915 41.5414C38.1864 40.1699 37.0066 38.9986 35.6351 39.0036C34.2636 39.0086 33.0923 40.1885 33.0973 41.56C33.2007 43.0291 34.2822 44.1028 35.6537 44.0978Z" fill="#1B91FB"></path>
                            </svg>
                            <div class="mt-4 mb-3">
                                <span class="text-muted">No data to show</span>
                            </div>
                            <button type="button" class="btn btn-white border lift">Get Started</button>
                            <button type="button" class="btn btn-primary border lift">Back to Home</button>
                        </div>
                    </div>
                </div>
                <!-- End:: Overdue -->

                <!-- Tab:: Completed  -->
                <div class="tab-pane fade position-relative" id="completed" role="tabpanel">
                    <div class="card border-0">
                        <div class="card-body text-center p-5">
                            <svg width="86" height="73" viewBox="0 0 86 73" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.5901 18.6739L12.9851 61.855C12.4007 64.7877 14.3441 67.6983 17.2767 68.2828L18.5914 68.5447L60.4578 76.8877C63.3905 77.4721 66.3012 75.5287 66.8856 72.5961L77.3647 20.0102L77.6468 18.5945C78.2312 15.6618 76.2879 12.7511 73.3552 12.1667L40.9947 5.71799" fill="#1B91FB"></path>
                                <path d="M21.5901 18.6739L12.9851 61.855C12.4007 64.7877 14.3441 67.6983 17.2767 68.2828L18.5914 68.5447L60.4578 76.8877C63.3905 77.4721 66.3012 75.5287 66.8856 72.5961L77.3647 20.0102L77.6468 18.5945C78.2312 15.6618 76.2879 12.7511 73.3552 12.1667L40.9947 5.71799" stroke="#4D6173" stroke-width="1.61896" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M40.9952 5.71802L37.7708 21.8983L21.5906 18.6739L40.9952 5.71802Z" fill="#4D6173" stroke="#4D6173" stroke-width="1.61896" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M58.0267 16.0767L68.6701 58.8011C69.3929 61.7027 67.5898 64.7023 64.6881 65.4251L63.3874 65.7492L21.9638 76.0685C19.0621 76.7913 16.0625 74.9882 15.3397 72.0865L2.37825 20.0568L2.02929 18.6561C1.30644 15.7544 3.10959 12.7548 6.01124 12.032L38.0295 4.0557" fill="#85CBFF"></path>
                                <path d="M58.0267 16.0767L68.6701 58.8011C69.3929 61.7027 67.5898 64.7023 64.6881 65.4251L63.3874 65.7492L21.9638 76.0685C19.0621 76.7913 16.0625 74.9882 15.3397 72.0865L2.37825 20.0568L2.02929 18.6561C1.30644 15.7544 3.10959 12.7548 6.01124 12.032L38.0295 4.0557" stroke="#4D6173" stroke-width="1.61896" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M38.0295 4.05579L42.0176 20.0649L58.0268 16.0768L38.0295 4.05579Z" fill="#4D6173" stroke="#4D6173" stroke-width="1.61896" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M68.4957 22.2301V66.2602C68.4957 69.2505 66.0209 71.7253 63.0306 71.7253H61.6901H19.0005C16.0102 71.7253 13.5354 69.2505 13.5354 66.2602V12.6404V11.1968C13.5354 8.20645 16.0102 5.73169 19.0005 5.73169H51.9973" fill="white"></path>
                                <path d="M68.4957 22.2301V66.2602C68.4957 69.2505 66.0209 71.7253 63.0306 71.7253H61.6901H19.0005C16.0102 71.7253 13.5354 69.2505 13.5354 66.2602V12.6404V11.1968C13.5354 8.20645 16.0102 5.73169 19.0005 5.73169H51.9973" stroke="#4D6173" stroke-width="1.61896" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M51.9973 5.73169V22.2301H68.4957L51.9973 5.73169Z" fill="#4D6173" stroke="#4D6173" stroke-width="1.61896" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M74.8405 65.1409L60.1858 56.0999L62.2606 52.7398L76.9082 61.7923L74.8405 65.1409Z" fill="var(--bs-primary)" stroke="#4D6173" stroke-width="0.930904" stroke-miterlimit="10"></path>
                                <path d="M82.1501 69.6951L70.9111 62.7553C69.9726 62.1758 69.6801 60.9389 70.2596 60.0004C70.8391 59.0619 72.076 58.7694 73.0145 59.3489L84.2535 66.2887C85.192 66.8682 85.4845 68.1051 84.905 69.0436C84.3255 69.9821 83.0886 70.2746 82.1501 69.6951Z" fill="#4D6173" stroke="#4D6173" stroke-width="0.930904" stroke-miterlimit="10"></path>
                                <path d="M81.6412 70.4286L67.1812 61.4999C66.8452 61.2924 66.741 60.852 66.9463 60.5066L69.2286 56.8105C69.436 56.4745 69.8764 56.3703 70.2218 56.5756L84.6818 65.5043C85.0178 65.7118 85.122 66.1522 84.9167 66.4976L82.6345 70.1937C82.4176 70.5319 81.9772 70.6361 81.6412 70.4286Z" fill="var(--bs-primary)" stroke="#4D6173" stroke-width="0.930904" stroke-miterlimit="10"></path>
                                <path d="M37.7404 21.1074C25.3339 24.0415 17.6572 36.4738 20.5912 48.8803C23.5231 61.2775 35.9577 68.9635 48.3548 66.0317C60.7613 63.0976 68.438 50.6653 65.5039 38.2588C62.5699 25.8523 50.1375 18.1756 37.7404 21.1074ZM47.3802 61.869C37.4194 64.2247 27.4124 57.9335 25.0213 47.8228C22.6301 37.712 28.7613 27.6142 38.7221 25.2585C48.6829 22.9029 58.69 29.194 61.0811 39.3048C63.4722 49.4155 57.3317 59.5155 47.3802 61.869Z" fill="var(--bs-primary)" stroke="#4D6173" stroke-width="0.930904" stroke-miterlimit="10"></path>
                                <ellipse cx="43.0138" cy="43.4266" rx="18.0856" ry="18.2322" transform="rotate(-13.3056 43.0138 43.4266)" fill="white"></ellipse>
                                <path d="M50.224 44.0262C51.5954 44.0212 52.7667 42.8413 52.7617 41.4698C52.7567 40.0983 51.5768 38.9271 50.2053 38.9321C48.8338 38.9371 47.6626 40.117 47.6676 41.4885C47.6729 42.9579 48.7545 44.0316 50.224 44.0262Z" fill="#1B91FB"></path>
                                <path d="M48.7354 50.8375L47.4619 50.8422C46.3757 48.495 43.5315 47.6237 41.2826 48.8075C40.4024 49.2026 39.6215 49.9892 39.2329 50.8723L37.9593 50.8769C39.0258 47.8361 42.5468 46.2558 45.49 47.4206C46.8637 48.0034 48.1415 49.1743 48.7354 50.8375Z" fill="#1B91FB"></path>
                                <path d="M35.6537 44.0978C37.0252 44.0927 38.1965 42.9129 38.1915 41.5414C38.1864 40.1699 37.0066 38.9986 35.6351 39.0036C34.2636 39.0086 33.0923 40.1885 33.0973 41.56C33.2007 43.0291 34.2822 44.1028 35.6537 44.0978Z" fill="#1B91FB"></path>
                            </svg>
                            <div class="mt-4 mb-3">
                                <span class="text-muted">No data to show</span>
                            </div>
                            <button type="button" class="btn btn-white border lift">Get Started</button>
                            <button type="button" class="btn btn-primary border lift">Back to Home</button>
                        </div>
                    </div>
                </div>
                <!-- End:: Completed -->
            </div>
        </div>
    </div>
    <!-- Start:: Create Project -->
    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="Create_Project">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Create Project</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="progress bg-transparent" style="height: 3px;">
            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="5" style="width: 20%;"></div>
        </div>
        <div class="offcanvas-body">
			<div class="border-bg mb-4 position-relative p-3 rounded-4">
                <ul class="nav nav-pills flex-column flex-sm-row mb-0" role="tablist">
                    <li class="nav-item" role="presentation"><a class="nav-link rounded-3 active" data-bs-toggle="tab" data-bs-step="1" href="#step1" role="tab" aria-selected="true">1. Project</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link rounded-3 position-relative" data-bs-toggle="tab" data-bs-step="2" href="#step2" role="tab" aria-selected="false" tabindex="-1">2. Team</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link rounded-3" data-bs-toggle="tab" data-bs-step="3" href="#step3" role="tab" aria-selected="false" tabindex="-1">3. Files</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link rounded-3" data-bs-toggle="tab" data-bs-step="4" href="#step4" role="tab" aria-selected="false" tabindex="-1">4. Complete</a></li>
                </ul>
                <div class="d-flex top-100 position-absolute" style="height: 28px; left: 50px;">
                    <div class="vr border-bg opacity-100"></div>
                    <div class="vr border-bg opacity-100 ms-1"></div>
                </div>
            </div>
            <div class="tab-content">
                <!-- Step 1 -->
                <div class="tab-pane fade position-relative active show" id="step1" role="tabpanel">
                    <div class="card rounded-4 mb-2 border border-dashed">
                        <div class="card-body p-lg-4 p-3">
                            <h6 class="card-title mb-1">Project Type</h6>
                            <p class="text-muted small">If you need more info, please check out <a class="text-primary" href="#">FAQ Page</a></p>
                            <div class="c_radio d-flex flex-column gap-2">
                                <label class="w-100" for="Personal">
                                    <input type="radio" name="plan" id="Personal" checked="">
                                    <span class="card rounded-4 d-flex p-3 flex-row gap-3">
                                        <svg class="avatar md" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                        </svg>
                                        <span>
                                            <span class="h6 d-flex mb-1">Personal Project</span>
                                            <small class="text-muted">For smaller business, with simple salaries and pay schedules.</small>
                                        </span>
                                    </span>
                                </label>
                                <label class="w-100" for="Team">
                                    <input type="radio" name="plan" id="Team">
                                    <span class="card rounded-4 d-flex p-3 flex-row gap-3">
                                        <svg class="avatar md" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                            <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                            <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                                        </svg>
                                        <span>
                                            <span class="h6 d-flex mb-1">Team Project</span>
                                            <small class="text-muted">For growing business who wants to create a rewarding place to work.</small>
                                        </span>
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="card rounded-4 mb-2 border border-dashed">
                        <div class="card-body p-lg-4 p-3">
                            <h6 class="card-title mb-1">Project Details</h6>
                            <p class="text-muted small">It is a long established fact that a reader will be distracted by thunderal.</p>
                            <div class="control-group mb-3">
                                <label class="form-label" for="chooseCustomer">Choose Customer</label>
                                <input type="text" class="form-control" id="chooseCustomer" placeholder="Choose Customer">
                            </div>
                            <div class="control-group mb-3">
                                <label class="form-label" for="projectName">Project Name</label>
                                <input type="text" class="form-control" id="projectName" placeholder="Project Name">
                            </div>
                            <div class="control-group mb-3">
                                <label class="form-label" for="projectDescription">Project Description</label>
                                <textarea class="form-control" id="projectDescription" rows="3" placeholder="Project Description"></textarea>
                            </div>
                            <div class="control-group mb-3">
                                <label class="form-label" for="releaseDate">Release Date</label>
                                <input type="date" class="form-control" id="releaseDate">
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <div class="text-muted">Allow Notifications *</div>
                                <div class="form-check form-check-inline ms-auto">
                                    <input class="form-check-input" type="checkbox" id="allowNotificationsYes">
                                    <label class="form-check-label" for="allowNotificationsYes">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="allowNotificationsNo" checked="">
                                    <label class="form-check-label" for="allowNotificationsNo">No</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="btn w-100 btn-primary next">Add People</button>
                    </div>
                </div>
                <!-- Step 2 -->
                <div class="tab-pane fade position-relative" id="step2" role="tabpanel">
                    <div class="card rounded-4 mb-2 border border-dashed">
                        <div class="card-body p-lg-4 p-3">
                            <h6 class="card-title mb-1">Build Team</h6>
                            <p class="text-muted small">If you need more info, please check out <a class="text-primary" href="#">Project Guidelines</a></p>
                            <div class="control-group mb-4">
                                <label class="form-label" for="addTeamMembers">Add Team Members</label>
                                <input type="text" class="form-control" id="addTeamMembers" placeholder="Add Team Members">
                            </div>
                            <h6>Team Members</h6>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="list-group6" checked="">
                                <label class="form-check-label text-muted" for="list-group6">Adding Users by Team Members</label>
                            </div>
                        </div>
                        <ul class="list-group list-group-flush mb-0 li_animate">
                            <li class="list-group-item d-flex align-items-center border-dashed">
                                <img src="assets/images/user-1.png" alt="avatar" class="avatar md rounded-circle">
                                <span class="flex-fill ms-2">
                                    <span class="h6 mb-0">John Doe</span>
                                    <small class="text-muted">Angular Developer</small>
                                </span>
                                <select class="form-select rounded-pill form-select-sm w-auto" id="user-1-role" aria-label="Default select example">
                                    <option value="1">Owner</option>
                                    <option value="2">Can Edit</option>
                                    <option value="3">Guest</option>
                                </select>
                            </li>
                            <li class="list-group-item d-flex align-items-center border-dashed">
                                <img src="assets/images/user-2.png" alt="avatar" class="avatar md rounded-circle">
                                <span class="flex-fill ms-2">
                                    <span class="h6 mb-0">Jane Smith</span>
                                    <small class="text-muted">React Developer</small>
                                </span>
                                <select class="form-select rounded-pill form-select-sm w-auto" id="user-2-role" aria-label="Default select example">
                                    <option value="1">Owner</option>
                                    <option value="2">Can Edit</option>
                                    <option value="3">Guest</option>
                                </select>
                            </li>
                            <li class="list-group-item d-flex align-items-center border-dashed">
                                <img src="assets/images/user-3.png" alt="avatar" class="avatar md rounded-circle">
                                <span class="flex-fill ms-2">
                                    <span class="h6 mb-0">Comeren Diaz</span>
                                    <small class="text-muted">NodeJs Developer</small>
                                </span>
                                <select class="form-select rounded-pill form-select-sm w-auto" id="user-3-role" aria-label="Default select example">
                                    <option value="1">Owner</option>
                                    <option value="2">Can Edit</option>
                                    <option value="3">Guest</option>
                                </select>
                            </li>
                            <li class="list-group-item d-flex align-items-center border-dashed bg-transparent">
                                <img src="assets/images/user-4.png" alt="avatar" class="avatar md rounded-circle">
                                <span class="flex-fill ms-2">
                                    <span class="h6 mb-0">Issa Bell</span>
                                    <small class="text-muted">Laravel Developer</small>
                                </span>
                                <select class="form-select rounded-pill form-select-sm w-auto" id="user-4-role" aria-label="Default select example">
                                    <option value="1">Owner</option>
                                    <option value="2">Can Edit</option>
                                    <option value="3">Guest</option>
                                </select>
                            </li>
                        </ul>
                    </div>
                    <div class="text-center">
                        <button class="btn w-100 btn-primary next">Select Files</button>
                    </div>
                </div>
                <!-- Step 3 -->
                <div class="tab-pane fade position-relative" id="step3" role="tabpanel">
                    <div class="card rounded-4 mb-2 border border-dashed">
                        <div class="card-body p-lg-4 p-3">
                            <h6 class="card-title mb-1">Upload Files</h6>
                            <div>
                                <label class="form-label small" for="uploadFiles">Upload up to 10 files</label>
                                <input class="form-control" type="file" multiple="" id="uploadFiles">
                            </div>
                        </div>
                        <ul class="list-group list-group-flush mb-0 li_animate">
                            <li class="list-group-item d-flex align-items-center py-3 border-dashed">
                                <div class="avatar rounded no-thumbnail hover-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                        <path d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v4"></path>
                                        <path d="M5 18h1.5a1.5 1.5 0 0 0 0 -3h-1.5v6"></path>
                                        <path d="M17 18h2"></path>
                                        <path d="M20 15h-3v6"></path>
                                        <path d="M11 15v6h1a2 2 0 0 0 2 -2v-2a2 2 0 0 0 -2 -2h-1z"></path>
                                    </svg>
                                </div>
                                <div class="flex-fill ms-3 text-truncate">
                                    <p class="mb-0">Annual Sales Report 2018-19</p>
                                    <small class="text-muted">.pdf, 5.3 MB</small>
                                </div>
                            </li>
                            <li class="list-group-item d-flex align-items-center py-3 border-dashed">
                                <div class="avatar rounded no-thumbnail hover-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                        <path d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v4"></path>
                                        <path d="M4 15l4 6"></path>
                                        <path d="M4 21l4 -6"></path>
                                        <path d="M17 20.25c0 .414 .336 .75 .75 .75h1.25a1 1 0 0 0 1 -1v-1a1 1 0 0 0 -1 -1h-1a1 1 0 0 1 -1 -1v-1a1 1 0 0 1 1 -1h1.25a.75 .75 0 0 1 .75 .75"></path>
                                        <path d="M11 15v6h3"></path>
                                    </svg>
                                </div>
                                <div class="flex-fill ms-3 text-truncate">
                                    <p class="mb-0">Complete Product Sheet</p>
                                    <small class="text-muted">.xlx, 1.7 MB</small>
                                </div>
                            </li>
                            <li class="list-group-item d-flex align-items-center py-3 border-dashed">
                                <div class="avatar rounded no-thumbnail hover-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                        <path d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v4"></path>
                                        <path d="M5 15v6h1a2 2 0 0 0 2 -2v-2a2 2 0 0 0 -2 -2h-1z"></path>
                                        <path d="M20 16.5a1.5 1.5 0 0 0 -3 0v3a1.5 1.5 0 0 0 3 0"></path>
                                        <path d="M12.5 15a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1 -3 0v-3a1.5 1.5 0 0 1 1.5 -1.5z"></path>
                                    </svg>
                                </div>
                                <div class="flex-fill ms-3 text-truncate">
                                    <p class="mb-0">Marketing Guidelines</p>
                                    <small class="text-muted">.docx, 2.1 MB</small>
                                </div>
                            </li>
                            <li class="list-group-item d-flex align-items-center py-3 border-dashed bg-transparent">
                                <div class="avatar rounded no-thumbnail hover-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                        <path d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v4" />
                                        <path d="M16 18h1.5a1.5 1.5 0 0 0 0 -3h-1.5v6" />
                                        <path d="M12 15v6" />
                                        <path d="M5 15h3l-3 6h3" />
                                    </svg>
                                </div>
                                <div class="flex-fill ms-3 text-truncate">
                                    <p class="mb-0">Master.zip</p>
                                    <small class="text-muted">.zip, 18.29 MB</small>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="text-center">
                        <button class="btn w-100 btn-primary next">Select Files</button>
                    </div>
                </div>
                <!-- Step 4 -->
                <div class="tab-pane fade position-relative" id="step4" role="tabpanel">
                    <div class="card rounded-4 mb-2 border border-dashed">
                        <div class="card-body p-lg-4 p-3 text-center">
                            <h4 class="card-title mb-1">Upload Files</h4>
                            <span class="text-muted">If you need more info, please check how to create project</span>
                            <div class="text-center my-3">
                                <button class="btn btn-primary first m-1">Create new project</button>
                                <button class="btn btn-secondary m-1">View project</button>
                            </div>
                            <img class="img-fluid" src="assets/images/project-team.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
		</div>
    </div>
@endsection
@push('scripts')
    <script src="{{ asset('assets/js/project.js') }}"></script>
    <script>
        $(document).ready(function () {
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

        // Set default date 
        document.addEventListener("DOMContentLoaded", function () {
            // Set today's date
            const dateInput = document.getElementById("releaseDate");
            dateInput.value = new Date().toISOString().split("T")[0];
        });

        // Pure JavaScript Counter
        const counters = document.querySelectorAll('.counter');
        counters.forEach(counter => {
            const updateCount = () => {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText;

            // Faster increment: increase this number for faster counting
            const increment = Math.max(target / 50, 1); // count in bigger steps

            if (count < target) {
                counter.innerText = Math.ceil(count + increment);
                setTimeout(updateCount, 10); // reduce delay for quicker animation
            } else {
                counter.innerText = target.toLocaleString(); // format the final number
            }
            };

            updateCount();
        });
    </script>
@endpush