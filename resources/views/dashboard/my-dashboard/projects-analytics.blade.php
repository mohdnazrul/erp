@extends('dashboard.layout.app')
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
                    <div class="page-name fs-20 fw-bold ms-md-4 ms-2">Projects Analytics</div>
                    <ul class="page-action list-unstyled ms-auto mb-0 gap-3 d-md-flex align-items-center justify-content-end">
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
                        <li>
                            <a href="#" class="text-decoration-none d-md-block d-none hover-svg">
                                <svg width="26" height="26" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M3.75 15C3.75 15.9946 4.14509 16.9484 4.84835 17.6517C5.55161 18.3549 6.50544 18.75 7.5 18.75C8.49456 18.75 9.44839 18.3549 10.1517 17.6517C10.8549 16.9484 11.25 15.9946 11.25 15C11.25 14.0054 10.8549 13.0516 10.1517 12.3483C9.44839 11.6451 8.49456 11.25 7.5 11.25C6.50544 11.25 5.55161 11.6451 4.84835 12.3483C4.14509 13.0516 3.75 14.0054 3.75 15Z"/>
                                    <path d="M18.75 7.5C18.75 8.49456 19.1451 9.44839 19.8483 10.1517C20.5516 10.8549 21.5054 11.25 22.5 11.25C23.4946 11.25 24.4484 10.8549 25.1517 10.1517C25.8549 9.44839 26.25 8.49456 26.25 7.5C26.25 6.50544 25.8549 5.55161 25.1517 4.84835C24.4484 4.14509 23.4946 3.75 22.5 3.75C21.5054 3.75 20.5516 4.14509 19.8483 4.84835C19.1451 5.55161 18.75 6.50544 18.75 7.5Z"/>
                                    <path d="M18.75 22.5C18.75 23.4946 19.1451 24.4484 19.8483 25.1517C20.5516 25.8549 21.5054 26.25 22.5 26.25C23.4946 26.25 24.4484 25.8549 25.1517 25.1517C25.8549 24.4484 26.25 23.4946 26.25 22.5C26.25 21.5054 25.8549 20.5516 25.1517 19.8483C24.4484 19.1451 23.4946 18.75 22.5 18.75C21.5054 18.75 20.5516 19.1451 19.8483 19.8483C19.1451 20.5516 18.75 21.5054 18.75 22.5Z"/>
                                    <path d="M10.875 13.375L19.125 9.125"/>
                                    <path d="M10.875 16.625L19.125 20.875"/>
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
<div class="row mb-4 g-3">
        <div class="col-lg-3 col-md-6 col-12">
            <div class="card border-0 rounded-4 bg-light-pink">
                <div class="card-body p-4 text-black">
                    <span class="d-block mb-2 fs-14 lh-20">Total Project</span>
                    <div class="d-flex align-items-center justify-content-between">
                        <h6 class="mb-0 fs-1 counter" data-target="127">0</h6>
                        <div class="statstics">
                            <span class="me-2">+11.01%</span>
                            <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.20488 5.60777L14.75 4L13.3698 9.6061L11.648 7.9532L8.87069 10.8463C8.77641 10.9445 8.64615 11 8.51 11C8.37385 11 8.24359 10.9445 8.14931 10.8463L6.11 8.72199L3.11069 11.8463C2.91946 12.0455 2.60294 12.0519 2.40373 11.8607C2.20453 11.6695 2.19807 11.3529 2.38931 11.1537L5.74931 7.65373C5.84359 7.55552 5.97385 7.5 6.11 7.5C6.24615 7.5 6.37641 7.55552 6.47069 7.65373L8.51 9.77801L10.9266 7.26067L9.20488 5.60777Z" fill="currentColor"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
            <div class="card border-0 rounded-4 bg-light-blue">
                <div class="card-body p-4 text-black">
                    <span class="d-block mb-2 fs-14 lh-20">In Progress</span>
                    <div class="d-flex align-items-center justify-content-between">
                        <h6 class="mb-0 fs-1 counter" data-target="98">0</h6>
                        <div class="statstics">
                            <span class="me-2">+35.77%</span>
                            <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.20488 5.60777L14.75 4L13.3698 9.6061L11.648 7.9532L8.87069 10.8463C8.77641 10.9445 8.64615 11 8.51 11C8.37385 11 8.24359 10.9445 8.14931 10.8463L6.11 8.72199L3.11069 11.8463C2.91946 12.0455 2.60294 12.0519 2.40373 11.8607C2.20453 11.6695 2.19807 11.3529 2.38931 11.1537L5.74931 7.65373C5.84359 7.55552 5.97385 7.5 6.11 7.5C6.24615 7.5 6.37641 7.55552 6.47069 7.65373L8.51 9.77801L10.9266 7.26067L9.20488 5.60777Z" fill="currentColor"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
            <div class="card border-0 rounded-4 bg-light-orange">
                <div class="card-body p-4 text-black">
                    <span class="d-block mb-2 fs-14 lh-20">Completed</span>
                    <div class="d-flex align-items-center justify-content-between">
                        <h6 class="mb-0 fs-1 counter" data-target="11">0</h6>
                        <div class="statstics">
                            <span class="me-2">-23.15%</span>
                            <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.20488 11.5417L14.75 13.25L13.3698 7.29352L11.648 9.04973L8.87069 5.97581C8.77641 5.87147 8.64615 5.8125 8.51 5.8125C8.37385 5.8125 8.24359 5.87147 8.14931 5.97581L6.11 8.23289L3.11069 4.91331C2.91946 4.70166 2.60294 4.69486 2.40373 4.89801C2.20453 5.10116 2.19807 5.43754 2.38931 5.64919L5.74931 9.36791C5.84359 9.47226 5.97385 9.53125 6.11 9.53125C6.24615 9.53125 6.37641 9.47226 6.47069 9.36791L8.51 7.11086L10.9266 9.78554L9.20488 11.5417Z" fill="black"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
            <div class="card border-0 rounded-4 bg-light-green">
                <div class="card-body p-4 text-black">
                    <span class="d-block mb-2 fs-14 lh-20">Overdue</span>
                    <div class="d-flex align-items-center justify-content-between">
                        <h6 class="mb-0 fs-1 counter" data-target="4">0</h6>
                        <div class="statstics">
                            <span class="me-2">+10.00%</span>
                            <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.20488 5.60777L14.75 4L13.3698 9.6061L11.648 7.9532L8.87069 10.8463C8.77641 10.9445 8.64615 11 8.51 11C8.37385 11 8.24359 10.9445 8.14931 10.8463L6.11 8.72199L3.11069 11.8463C2.91946 12.0455 2.60294 12.0519 2.40373 11.8607C2.20453 11.6695 2.19807 11.3529 2.38931 11.1537L5.74931 7.65373C5.84359 7.55552 5.97385 7.5 6.11 7.5C6.24615 7.5 6.37641 7.55552 6.47069 7.65373L8.51 9.77801L10.9266 7.26067L9.20488 5.60777Z" fill="currentColor"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End:: Row -->

    <div class="row mb-4 g-3 row-deck">
        <div class="col-lg-8 col-md-12 col-12">
            <div class="card rounded-4 overflow-hidden">
                <div class="card-header px-lg-4 p-3 d-flex justify-content-between align-items-center">
                    <h6 class="card-title m-0">Project Statistics</h6>
                </div>
                <div class="card-body p-3 p-md-4">
                    <div class="d-flex flex-row align-items-center px-lg-4 gap-3">
                        <div>
                            <h5 class="mb-1 fw-bold">$23,056</h5>
                            <small class="text-muted">Last Year</small>
                        </div>
                        <div class="vr"></div>
                        <div>
                            <h5 class="mb-1 fw-bold">$8,150</h5>
                            <small class="text-muted">Last Month</small>
                        </div>
                        <div class="d-none d-sm-block ms-auto">
                            <div class="btn-group" role="group">
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio1">
                                <label class="btn btn-sm btn-outline-secondary" for="btnradio1">Week</label>
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio2">
                                <label class="btn btn-sm btn-outline-secondary" for="btnradio2">Month</label>
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio3" checked="">
                                <label class="btn btn-sm btn-outline-secondary" for="btnradio3">Year</label>
                            </div>
                        </div>
                    </div>
                    <div id="projectTrendsChart"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
            <div class="card rounded-4 overflow-hidden">
                <div class="card-header px-lg-4 p-3 d-flex justify-content-between align-items-center">
                    <h6 class="card-title m-0">Projects Monthly</h6>
                </div>
                <div class="card-body p-3 p-md-4">
                    <div id="projectStatusChart"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
            <div class="card rounded-4 overflow-hidden">
                <div class="card-header px-lg-4 p-3 d-flex justify-content-between align-items-center">
                    <h6 class="card-title m-0">Projects Monthly</h6>
                </div>
                <div class="card-body p-3 p-md-4">
                    <div id="projectOverviewChart"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-12 col-12">
            <div class="card rounded-4 overflow-hidden">
                <div class="card-header px-lg-4 p-3 d-flex justify-content-between align-items-center">
                    <h6 class="card-title m-0">Income & Expense</h6>
                </div>
                <div class="card-body p-3 p-md-4">
                    <div id="incomeExpenseChart"></div>
                </div>
            </div>
        </div>
    </div> <!-- End:: Row -->

    <div class="row mb-4 g-3">
        <div class="col-12">
            <div class="card rounded-4 overflow-hidden">
                <div class="card-header px-lg-4 p-3 d-flex justify-content-between align-items-center">
                    <h6 class="card-title m-0">Project List</h6>
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"></a>
                        <ul class="dropdown-menu li_animate shadow border-0 p-2">
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                            <li><a class="dropdown-item" href="#">Last Year</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body p-3 p-md-4">
                    <table class="Data_Table table table-round align-middle mb-0 mt-3 table-hover w-100">
                        <thead>
                            <tr>
                                <th>Project</th>
                                <th>Client</th>
                                <th>Start Date</th>
                                <th>Deadline</th>
                                <th>Status</th>
                                <th>Progress</th>
                                <th>Team</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <strong>Redesign Website</strong><br>
                                    <small class="text-muted">Design</small>
                                </td>
                                <td>Orbit Inc.</td>
                                <td>May 01, 2025</td>
                                <td>Aug 10, 2025</td>
                                <td><span class="badge bg-success-subtle text-success">On Track</span></td>
                                <td>
                                    <div class="progress" style="height: 6px;">
                                        <div class="progress-bar bg-success" style="width: 80%;"></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="avatar-group d-flex align-items-center ps-0">
                                        <div class="avatar-item sm" data-bs-toggle="tooltip" data-placement="top" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                                            <img class="avatar sm border rounded-circle" src="assets/images/user-1.png" alt="">
                                        </div>
                                        <div class="avatar-item sm" data-bs-toggle="tooltip" data-placement="top" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                                            <img class="avatar sm border rounded-circle" src="assets/images/user-2.png" alt="">
                                        </div>
                                        <div class="avatar-item sm" data-bs-toggle="tooltip" data-placement="top" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                                            <img class="avatar sm border rounded-circle" src="assets/images/user-3.png" alt="">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Q3 Marketing Campaign</strong><br>
                                    <small class="text-muted">Marketing</small>
                                </td>
                                <td>Zenith Corp</td>
                                <td>Apr 12, 2025</td>
                                <td>Jul 30, 2025</td>
                                <td><span class="badge bg-warning-subtle text-warning">At Risk</span></td>
                                <td>
                                    <div class="progress" style="height: 6px;">
                                        <div class="progress-bar bg-warning" style="width: 60%;"></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="avatar-group d-flex align-items-center ps-0">
                                        <div class="avatar-item sm" data-bs-toggle="tooltip" data-placement="top" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                                            <img class="avatar sm border rounded-circle" src="assets/images/user-1.png" alt="">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Mobile App Development</strong><br>
                                    <small class="text-muted">Development</small>
                                </td>
                                <td>Nova Labs</td>
                                <td>Mar 10, 2025</td>
                                <td>Sep 15, 2025</td>
                                <td><span class="badge bg-danger-subtle text-danger">Off Track</span></td>
                                <td>
                                    <div class="progress" style="height: 6px;">
                                        <div class="progress-bar bg-danger" style="width: 35%;"></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="avatar-group d-flex align-items-center ps-0">
                                        <div class="avatar-item sm" data-bs-toggle="tooltip" data-placement="top" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                                            <img class="avatar sm border rounded-circle" src="assets/images/user-6.png" alt="">
                                        </div>
                                        <div class="avatar-item sm" data-bs-toggle="tooltip" data-placement="top" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                                            <img class="avatar sm border rounded-circle" src="assets/images/user-7.png" alt="">
                                        </div>
                                        <div class="avatar-item sm" data-bs-toggle="tooltip" data-placement="top" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                                            <img class="avatar sm border rounded-circle" src="assets/images/user-8.png" alt="">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>eCommerce Migration</strong><br>
                                    <small class="text-muted">Technology</small>
                                </td>
                                <td>Marketify</td>
                                <td>Jun 01, 2025</td>
                                <td>Oct 10, 2025</td>
                                <td><span class="badge bg-info-subtle text-info">Planning</span></td>
                                <td>
                                    <div class="progress" style="height: 6px;">
                                        <div class="progress-bar bg-info" style="width: 20%;"></div>
                                    </div>
                                </td>
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
                            </tr>
                            <tr>
                                <td>
                                    <strong>HR Automation Tool</strong><br>
                                    <small class="text-muted">SaaS</small>
                                </td>
                                <td>HRCloud</td>
                                <td>Feb 15, 2025</td>
                                <td>Jul 15, 2025</td>
                                <td><span class="badge bg-primary bg-opacity-25 text-primary">In Progress</span></td>
                                <td>
                                    <div class="progress" style="height: 6px;">
                                        <div class="progress-bar bg-primary" style="width: 50%;"></div>
                                    </div>
                                </td>
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
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> <!-- End:: Row -->
@endsection
@push('scripts')
    <script>
        // Project Chart
        const projectTrendsChartOptions = {
            chart: {
                type: "bar",
                height: 280,
                toolbar: { show: false }
            },
            dataLabels: { enabled: false },
            stroke: {
                curve: "smooth",
                width: 2
            },
            series: [
                {
                    name: "On Track",
                    data: [28, 40, 36, 52, 38, 60, 55, 70, 68, 75, 80, 85]
                },
                {
                    name: "At Risk",
                    data: [20, 28, 35, 30, 40, 45, 38, 41, 43, 50, 52, 58]
                },
                {
                    name: "Off Track",
                    data: [4, 5, 6, 4, 3, 7, 8, 6, 5, 4, 6, 3]
                }
            ],
            xaxis: {
                categories: [
                    "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                labels: {
                    style: {
                        colors: "#6c757d"
                    }
                }
            },
            yaxis: {
                labels: {
                    style: {
                        colors: "#6c757d"
                    }
                }
            },
            colors: ['var(--bs-primary)','var(--bs-primary-bg-subtle)', 'var(--bs-gray-500)'],
            legend: {
                position: "bottom",
                horizontalAlign: "center"
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        height: 240
                    }
                }
            }]
        };
        
        const projectTrendsChart = new ApexCharts(document.querySelector("#projectTrendsChart"), projectTrendsChartOptions);
        projectTrendsChart.render();

        // Project Statistics Chart
        var options = {
            series: [44, 55, 41],
            labels: ['New Start', 'On Going', 'Completed'],
            colors: ['var(--bs-primary)', 'var(--bs-gray-500)', 'var(--bs-danger)'],
            chart: {
                type: 'donut',
                height: 300,
            },
            stroke: {
                width: 2,
                lineCap: 'round', // Rounded edges
                colors: ['#fff'] // Optional: stroke gap color
            },
            plotOptions: {
                pie: {
                startAngle: -90,
                endAngle: 270,
                
                }
            },
            dataLabels: {
                enabled: false
            },
            fill: {
                type: 'gradient',
                gradient: {
                shade: 'dark',
                type: 'vartical', // Gradient flows across each arc
                gradientToColors: ['var(--bs-primary)', 'var(--bs-gray-500)', 'var(--bs-danger)'],
                colorStops: [
                    // For Series 0
                    [
                        { offset: 10, color: 'var(--bs-primary-bg-subtle)', opacity: 1 },
                        { offset: 100, color: 'var(--bs-primary)', opacity: 1 }
                    ],
                    // For Series 1
                    [
                        { offset: 50, color: 'var(--bs-gray-400)', opacity: 1 },
                        { offset: 100, color: 'var(--bs-gray-500)', opacity: 1 }
                    ],
                    // For Series 2
                    [
                        { offset: 50, color: 'var(--bs-danger-bg-subtle)', opacity: 1 },
                        { offset: 100, color: 'var(--bs-danger)', opacity: 1 }
                    ]
                ]
                }
            },
            legend: {
                position: 'bottom',
                horizontalAlign: 'center',
                formatter: function (val, opts) {
                    return val + " - " + opts.w.globals.series[opts.seriesIndex]
                }
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        height: 220
                    }
                }
            }]
        };

        var chart = new ApexCharts(document.querySelector("#projectStatusChart"), options);
        chart.render();

        // Project Overview
        var options = {
            chart: {
                height: 300,
                type: 'radialBar',
            },
            colors: ['var(--bs-primary)', 'var(--bs-gray-500)', 'var(--bs-danger-bg-subtle)'],
            plotOptions: {
                radialBar: {
                    dataLabels: {
                        name: {
                            fontSize: '22px',
                        },
                        value: {
                            fontSize: '16px',
                        },
                        total: {
                            show: true,
                            label: 'Total',
                            formatter: function(w) {
                                // By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
                                return 249
                            }
                        }
                    }
                }
            },
            series: [44, 55, 67],
            labels: ['App Design', 'SASS Design', 'Web Development'],
            legend: {
                show: true,
                position: 'bottom',
                horizontalAlign: 'center',
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: { height: 260 }
                }
            }]
        }
        var chart = new ApexCharts(document.querySelector("#projectOverviewChart"), options);
        chart.render();

        // Income vs Expense
        var options = {
            chart: {
                type: 'area',
                height: 300,
                toolbar: { show: false }
            },
            colors: ['var(--bs-primary)', 'var(--bs-danger)'],
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'smooth',
                width: 2
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shadeIntensity: 1,
                    opacityFrom: 0.4,
                    opacityTo: 0.1,
                    stops: [0, 100]
                }
            },
            series: [
            {
                name: 'Income',
                data: [1200, 2500, 1800, 3500, 2800, 4000, 4500, 3800, 3200, 4000, 4500, 5000]
            },
            {
                name: 'Expense',
                data: [1000, 2000, 1600, 3000, 2500, 3200, 3900, 3500, 3150, 3700, 3800, 4500]
            }
            ],
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                axisBorder: { show: false },
                axisTicks: { show: false }
            },
            yaxis: {
                labels: {
                    formatter: val => `$${val}`
                }
            },
            tooltip: {
                y: {
                    formatter: val => `$${val}`
                }
            },
            legend: {
                position: 'top',
                horizontalAlign: 'right'
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: { height: 300 }
                }
            }]
        };

        var chart = new ApexCharts(document.querySelector("#incomeExpenseChart"), options);
        chart.render();

        // DataTable Initialization
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