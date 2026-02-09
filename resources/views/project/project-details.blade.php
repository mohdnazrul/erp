@extends('layout.app')
@section('content')
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
                    <div class="page-name fs-20 fw-bold ms-md-4 ms-2">School / University</div>
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
                        <li class="d-md-block d-none">
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
                            <a class="text-decoration-none hover-svg" data-bs-toggle="offcanvas" href="#Create_Project" role="button" aria-controls="Create_Project">
                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M13 2V24"></path>
                                    <path d="M2 13H24"></path>
                                </svg>
                            </a>
                        </li>
                        <li class="d-md-none d-block">
                            <a href="javascript:void(0);" class="text-decoration-none btn-toggle-innersidebar hover-svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M4 4h6v6h-6z" />
                                    <path d="M14 4h6v6h-6z" />
                                    <path d="M4 14h6v6h-6z" />
                                    <path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
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

    <!-- Start:: Content Wrapper -->
    <div class="content-wrapper d-flex">

        <!-- Start:: Sidebar -->
        <aside class="left-sidebar border-end z-2">
            <nav class="nav-sidebar">
                <ul class="list-unstyled mb-0 li_animate">
                    <li>
                        <p class="fs-12 text-uppercase text-muted">Project ID</p>
                        <h3 class="text-primary mb-0 fw-normal">#P-1212</h3>
                    </li>
                    <li>
                        <p class="fs-12 divider pt-2 border-top text-uppercase text-muted">Project Cost</p>
                        <h3 class="fw-bold">$<span class="counter" data-target="10500">0</span></h3>
                        <div class="mt-3">
                            <div class="fw-bold">22 Nov 2025</div>
                            <small class="text-danger">Due Date</small>
                        </div>
                    </li>
                    <li>
                        <p class="fs-12 divider pt-2 border-top text-uppercase text-muted">Clients Detail</p>
                        <img class="avatar xl rounded-circle img-thumbnail shadow-sm" src="assets/images/user-2.png" alt="">
                        <h6 class="mt-3 mb-0">Michelle Green</h6>
                        <p class="small">michelle@thunderal.com</p>
                        <button class="btn btn-outline-secondary btn-sm rounded-pill px-3">Message</button>
                    </li>
                </ul>
            </nav>
        </aside>
        <div class="sidebar-overlay"></div>
        <!-- End:: Sidebar -->

        <!-- Start:: Content -->
        <div class="content-area">
            <div class="container-fluid p-md-0">

                <div class="inner-layout d-flex">
                    <div class="left-bar p-4 overflow-y-auto">
                        <ul class="nav nav-pills flex-column gap-2 mb-0" role="tablist">
                            <li class="nav-item bg-body rounded-3" role="presentation"><a class="nav-link py-3 rounded-3 active" data-bs-toggle="tab" href="#overview" role="tab" aria-selected="true">Overview</a></li>
                            <li class="nav-item bg-body rounded-3" role="presentation">
                                <a class="nav-link py-3 rounded-3" data-bs-toggle="tab" href="#team" role="tab" aria-selected="true">
                                    Chat
                                    <div class="avatar-group d-flex w-100 mt-2 ps-0">
                                        <img class="avatar border avatar-item sm rounded-circle" src="assets/images/user-1.png" alt="avatar">
                                        <img class="avatar border avatar-item sm rounded-circle" src="assets/images/user-2.png" alt="avatar">
                                        <img class="avatar border avatar-item sm rounded-circle" src="assets/images/user-3.png" alt="avatar">
                                        <img class="avatar border avatar-item sm rounded-circle" src="assets/images/user-4.png" alt="avatar">
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item bg-body rounded-3" role="presentation"><a class="nav-link py-3 rounded-3" data-bs-toggle="tab" href="#files" role="tab" aria-selected="true">Files</a></li>
                            <li class="nav-item bg-body rounded-3" role="presentation"><a class="nav-link py-3 rounded-3" data-bs-toggle="tab" href="#activity" role="tab" aria-selected="true">Activity</a></li>
                            <li class="nav-item bg-body rounded-3" role="presentation"><a class="nav-link py-3 rounded-3" data-bs-toggle="tab" href="#settings" role="tab" aria-selected="true">Settings</a></li>
                        </ul>
                    </div>
                    <div class="body-area p-md-4 p-2 overflow-y-auto">
                        <div class="tab-content">
                            <!-- Tab:: Overview -->
                            <div class="tab-pane fade active show" id="overview" role="tabpanel">
                                <div class="row g-3 row-deck">
                                    <div class="col-12">
                                        <div class="card rounded-4 p-lg-4 p-3">
                                            <p class="text-muted">Goal</p>
                                            <h4>Make it faster to apply multiple filters.</h4>
                                            <p class="text-muted">How it works?</p>
                                            <h6 class="mb-0 lead lh-base">The "AI-Structured Table Filters" project is all about making it easier for people to work with complex data tables. By using AI, it helps automatically organize and suggest filters, so users can find the data they need faster—without the usual frustration. It’s a smarter, more user-friendly way to handle large sets of information.</h6>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                                        <div class="card rounded-4">
                                            <div class="card-body p-lg-4 p-3">
                                                <h4 class="mb-1">$ <span class="counter" data-target="4000">0</span></h4>
                                                <div class="text-muted text-uppercase fs-12">Upfront Payment</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                                        <div class="card rounded-4">
                                            <div class="card-body p-lg-4 p-3">
                                                <h4 class="mb-1">$ <span class="counter" data-target="6500">0</span></h4>
                                                <div class="text-muted text-uppercase fs-12">Invoice Sent</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                                        <div class="card rounded-4">
                                            <div class="card-body p-lg-4 p-3">
                                                <h4 class="mb-1">$ <span class="counter" data-target="5000">0</span></h4>
                                                <div class="text-muted text-uppercase fs-12">Payment Received</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                                        <div class="card rounded-4">
                                            <div class="card-body p-lg-4 p-3">
                                                <h4 class="mb12">$ <span class="counter" data-target="1500">0</span></h4>
                                                <div class="text-muted text-uppercase fs-12">Amount Pending</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-7">
                                        <div class="card rounded-4">
                                            <div class="card-header d-flex justify-content-between align-items-center px-lg-4 p-3">
                                                <h6 class="card-title mb-0">Tasks Over Time</h6>
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"></a>
                                                    <ul class="dropdown-menu shadow p-2 li_animate">
                                                        <li><a class="dropdown-item" href="#">File Info</a></li>
                                                        <li><a class="dropdown-item" href="#">Copy to</a></li>
                                                        <li><a class="dropdown-item" href="#">Move to</a></li>
                                                        <li><a class="dropdown-item" href="#">Rename</a></li>
                                                        <li><a class="dropdown-item" href="#">Block</a></li>
                                                        <li><a class="dropdown-item" href="#">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card-body p-lg-4 p-3">
                                                <div id="Tasks_Over_Time"></div>
                                            </div>
                                        </div> <!-- .card end -->
                                    </div>
                                    <div class="col-xl-4 col-lg-5">
                                        <div class="card rounded-4">
                                            <div class="card-header d-flex justify-content-between align-items-center px-lg-4 p-3">
                                                <h6 class="card-title mb-0">Milestones</h6>
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"></a>
                                                    <ul class="dropdown-menu shadow p-2 li_animate">
                                                        <li><a class="dropdown-item" href="#">File Info</a></li>
                                                        <li><a class="dropdown-item" href="#">Copy to</a></li>
                                                        <li><a class="dropdown-item" href="#">Move to</a></li>
                                                        <li><a class="dropdown-item" href="#">Rename</a></li>
                                                        <li><a class="dropdown-item" href="#">Block</a></li>
                                                        <li><a class="dropdown-item" href="#">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="bg-primary bg-opacity-25 py-3 px-4">
                                                <span>Overall progress</span>
                                                <div class="progress mt-2" style="height: 3px;">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;"></div>
                                                </div>
                                            </div>
                                            <div class="card-body p-lg-4 p-3">
                                                <span>App Ui design</span>
                                                <div class="progress mt-2 mb-4" style="height: 3px;">
                                                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                                                </div>
                                                <span>Desktop app development</span>
                                                <div class="progress mt-2 mb-4" style="height: 3px;">
                                                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%;"></div>
                                                </div>
                                                <span>Website design</span>
                                                <div class="progress mt-2 mb-4" style="height: 3px;">
                                                    <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;"></div>
                                                </div>
                                                <span>QA Analyst</span>
                                                <div class="progress mt-2" style="height: 3px;">
                                                    <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="card rounded-4">
                                            <div class="card-header d-flex justify-content-between align-items-center px-lg-4 p-3">
                                                <h6 class="card-title mb-0">Tasks Summary</h6>
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"></a>
                                                    <ul class="dropdown-menu shadow p-2 li_animate">
                                                        <li><a class="dropdown-item" href="#">File Info</a></li>
                                                        <li><a class="dropdown-item" href="#">Copy to</a></li>
                                                        <li><a class="dropdown-item" href="#">Move to</a></li>
                                                        <li><a class="dropdown-item" href="#">Rename</a></li>
                                                        <li><a class="dropdown-item" href="#">Block</a></li>
                                                        <li><a class="dropdown-item" href="#">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card-body text-center pt-0">
                                                <div class="d-flex py-3 gap-3 justify-content-around align-items-center">
                                                    <div>
                                                        <h6 class="mb-0 fw-bold">27</h6>
                                                        <small class="text-muted">RESOLVED</small>
                                                    </div>
                                                    <div class="vr"></div>
                                                    <div>
                                                        <h6 class="mb-0 fw-bold">13</h6>
                                                        <small class="text-muted">ISSUES</small>
                                                    </div>
                                                </div>
                                                <div id="Tasks_Summary"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="card rounded-4 overflow-hidden">
                                            <div class="card-header d-flex justify-content-between align-items-center px-lg-4 p-3">
                                                <h6 class="card-title mb-0">Project Team</h6>
                                                <div class="dropdown">
                                                    <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                                                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"></a>
                                                    <ul class="dropdown-menu shadow p-2 li_animate">
                                                        <li><a class="dropdown-item" href="#">File Info</a></li>
                                                        <li><a class="dropdown-item" href="#">Copy to</a></li>
                                                        <li><a class="dropdown-item" href="#">Move to</a></li>
                                                        <li><a class="dropdown-item" href="#">Rename</a></li>
                                                        <li><a class="dropdown-item" href="#">Block</a></li>
                                                        <li><a class="dropdown-item" href="#">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <ul class="list-group list-group-flush list-group-custom mb-0">
                                                <li class="list-group-item d-flex align-items-center gap-3">
                                                    <div class="avatar rounded-circle"><img class="avatar lg rounded-circle" src="assets/images/user-3.png" alt="friend"></div>
                                                    <div class="flex-fill">
                                                        <h6 class="mb-0">Chris Fox</h6>
                                                        <small class="text-muted">Design Lead</small>
                                                    </div>
                                                    <div class="flex-end avatar-group d-flex">
                                                        <img class="avatar xs avatar-item rounded-circle" src="assets/images/user-3.png" alt="friend">
                                                        <img class="avatar xs avatar-item rounded-circle" src="assets/images/user-1.png" alt="friend">
                                                    </div>
                                                </li>
                                                <li class="list-group-item d-flex align-items-center gap-3">
                                                    <div class="avatar rounded-circle"><img class="avatar lg rounded-circle" src="assets/images/user-2.png" alt="friend"></div>
                                                    <div class="flex-fill">
                                                        <h6 class="mb-0">Cindy Anderson</h6>
                                                        <small class="text-muted">Marketing Lead</small>
                                                    </div>
                                                    <div class="flex-end avatar-group d-flex">
                                                        <img class="avatar xs avatar-item rounded-circle" src="assets/images/user-3.png" alt="friend">
                                                        <img class="avatar xs avatar-item rounded-circle" src="assets/images/user-1.png" alt="friend">
                                                    </div>
                                                </li>
                                                <li class="list-group-item d-flex align-items-center gap-3">
                                                    <div class="avatar rounded-circle"><img class="avatar lg rounded-circle" src="assets/images/user-4.png" alt="friend"></div>
                                                    <div class="flex-fill">
                                                        <h6 class="mb-0">Maryam Amiri</h6>
                                                        <small class="text-muted">Dev Lead</small>
                                                    </div>
                                                    <div class="flex-end avatar-group d-flex">
                                                        <img class="avatar xs avatar-item rounded-circle" src="assets/images/user-2.png" alt="friend">
                                                        <img class="avatar xs avatar-item rounded-circle" src="assets/images/user-5.png" alt="friend">
                                                        <img class="avatar xs avatar-item rounded-circle" src="assets/images/user-5.png" alt="friend">
                                                    </div>
                                                </li>
                                                <li class="list-group-item d-flex align-items-center gap-3">
                                                    <div class="avatar rounded-circle"><img class="avatar lg rounded-circle" src="assets/images/user-1.png" alt="friend"></div>
                                                    <div class="flex-fill">
                                                        <h6 class="mb-0">Alexander</h6>
                                                        <small class="text-muted">QA Lead</small>
                                                    </div>
                                                    <div class="flex-end avatar-group d-flex">
                                                        <img class="avatar xs avatar-item rounded-circle" src="assets/images/user-5.png" alt="friend">
                                                    </div>
                                                </li>
                                                <li class="list-group-item d-flex align-items-center gap-3">
                                                    <div class="avatar rounded-circle"><img class="avatar lg rounded-circle" src="assets/images/user-7.png" alt="friend"></div>
                                                    <div class="flex-fill">
                                                        <h6 class="mb-0">Joge Lucky</h6>
                                                        <small class="text-muted">Sales Lead</small>
                                                    </div>
                                                    <div class="flex-end avatar-group d-flex">
                                                        <img class="avatar xs avatar-item rounded-circle" src="assets/images/user-3.png" alt="friend">
                                                        <img class="avatar xs avatar-item rounded-circle" src="assets/images/user-1.png" alt="friend">
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End:: Overview -->

                            <!-- Tab:: Team  -->
                            <div class="tab-pane fade h-100" id="team" role="tabpanel">
                                <div class="d-flex align-items-start flex-column h-100">
                                    <ul class="list-unstyled mb-0 pe-md-3 mb-auto w-100 h-100 overflow-y-auto">
                                        <!--[ Chat: left ]-->
                                        <li class="mb-4 d-flex flex-row align-items-end msg-left">
                                            <div class="d-flex gap-2">
                                                <img class="avatar md rounded-circle mt-4" src="assets/images/user-1.png" alt="">
                                                <div class="w-75">
                                                    <span class="opacity-50 fs-12 ps-2">Cameron Root (PM)</span>
                                                    <div class="message p-3 rounded position-relative">
                                                        Hey team! Quick reminder—we have a project sync at 4 PM today.
                                                        <span class="opacity-0 position-absolute small end-0 time">10:10 AM</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!--[ Chat: left ]-->
                                        <li class="mb-4 d-flex flex-row align-items-end msg-left">
                                            <div class="d-flex gap-2">
                                                <img class="avatar md rounded-circle mt-4" src="assets/images/user-2.png" alt="">
                                                <div class="w-75">
                                                    <span class="opacity-50 fs-12 ps-2">Orlando Lentz (Designer)</span>
                                                    <div class="message p-3 rounded position-relative">
                                                        Thanks, Cameron! I’ve updated the Figma with the revised hero section and added the testimonial block.
                                                        <span class="opacity-0 position-absolute small end-0 time">10:10 AM</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!--[ Chat: right ]-->
                                        <li class="mb-4 d-flex flex-row-reverse align-items-end">
                                            <div class="text-end w-75">
                                                <div class="user-info mb-1">
                                                    <span><span class="fs-12 opacity-50">10:12 AM, Today</span> <strong class="text-primary">You</strong> </span>
                                                </div>
                                                <div class="message p-3 rounded mb-1 bg-secondary-subtle">
                                                    <div>Just saw it, Orlando—looks great. I’ll start integrating it into the front-end branch after our call.</div>
                                                </div>
                                            </div>
                                        </li>
                                        <!--[ Chat: left ]-->
                                        <li class="mb-4 d-flex flex-row align-items-end msg-left">
                                            <div class="d-flex gap-2">
                                                <img class="avatar md rounded-circle mt-4" src="assets/images/user-3.png" alt="">
                                                <div class="w-75">
                                                    <span class="opacity-50 fs-12 ps-2">Issa Bell (Content Writer)</span>
                                                    <div class="message p-3 rounded position-relative">
                                                        I’ve drafted the homepage headlines and CTA text. Sharing the doc here 👇
                                                        <span class="opacity-0 position-absolute small end-0 time">10:10 AM</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="chat-input-container w-100">
                                        <div class="align-items-center border chat-input-wrapper d-flex gap-3 p-lg-3 p-2 rounded-4">
                                            <textarea class="form-control rounded-3 border-0 resize-none" placeholder="Type your message here..." id="typeMessage" rows="1"></textarea>
                                            <div class="align-items-center chat-input-actions d-flex gap-1">
                                                <button class="btn p-2 d-md-block d-none" title="Attach file">
                                                    <svg class="hover-svg" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M14.364 7.24264L7.86396 13.7426C7.46614 14.1405 7.24264 14.68 7.24264 15.2426C7.24264 15.8052 7.46614 16.3448 7.86396 16.7426C8.26179 17.1405 8.80135 17.364 9.36396 17.364C9.92657 17.364 10.4661 17.1405 10.864 16.7426L17.364 10.2426C18.1596 9.44699 18.6066 8.36786 18.6066 7.24264C18.6066 6.11742 18.1596 5.03829 17.364 4.24264C16.5683 3.44699 15.4892 3 14.364 3C13.2387 3 12.1596 3.44699 11.364 4.24264L4.86396 10.7426C3.67049 11.9361 3 13.5548 3 15.2426C3 16.9305 3.67049 18.5492 4.86396 19.7426C6.05744 20.9361 7.67613 21.6066 9.36396 21.6066C11.0518 21.6066 12.6705 20.9361 13.864 19.7426L20.364 13.2426" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </button>
                                                <button class="btn p-2" title="Voice input">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M9 2m0 3a3 3 0 0 1 3 -3h0a3 3 0 0 1 3 3v5a3 3 0 0 1 -3 3h0a3 3 0 0 1 -3 -3z" />
                                                        <path d="M5 10a7 7 0 0 0 14 0" />
                                                        <path d="M8 21l8 0" />
                                                        <path d="M12 17l0 4" />
                                                    </svg>
                                                </button>
                                                <button class="btn btn-primary">Send</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End:: Team -->

                            <!-- Tab:: Files -->
                            <div class="tab-pane fade" id="files" role="tabpanel">
                                <ul class="row g-1 li_animate list-unstyled border-top rounded-4">
                                    <li class="col-12 border-bottom p-3 rounded-4 d-flex align-items-center flex-column flex-md-row gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v4" /><path d="M5 18h1.5a1.5 1.5 0 0 0 0 -3h-1.5v6" /><path d="M17 18h2" /><path d="M20 15h-3v6" /><path d="M11 15v6h1a2 2 0 0 0 2 -2v-2a2 2 0 0 0 -2 -2h-1z" /></svg>
                                        <div class="text-md-start text-center w-100 mt-4 mt-md-0">
                                            <div class="row g-3 align-items-center">
                                                <div class="col-lg-5 col-md-4 mb-3 mb-md-0">
                                                    <h6 class="mb-1 text-truncate">Framework_Guide.pdf</h6>
                                                    <span class="badge text-bg-primary">18MB</span>
                                                    <span class="badge text-bg-secondary">PDF</span>
                                                </div>
                                                <div class="col-lg-4 col-md-5 text-center">
                                                    <ul class="list-unstyled d-flex mb-0 text-center text-md-start gap-xl-4 gap-3">
                                                        <li class="flex-fill">
                                                            <h6 class="mb-0">17 Jul 2025</h6>
                                                            <span class="fs-12 text-muted">Date</span>
                                                        </li>
                                                        <li class="vr"></li>
                                                        <li class="flex-fill">
                                                            <div class="d-flex gap-1 align-items-center">
                                                                <img class="avatar xs rounded" src="assets/images/user-1.png" alt="">
                                                                <div class="flex-fill">
                                                                    <h6 class="mb-0">Comeren</h6>
                                                                </div>
                                                            </div>
                                                            <span class="fs-12 text-muted">Uploaded by</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-xl-3 col-lg-3 col-md-3 text-center text-md-end mt-3 mt-md-0">
                                                    <button type="button" class="btn text-primary p-0" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Download file" data-bs-original-title="Download file">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" /><path d="M7 11l5 5l5 -5" /><path d="M12 4l0 12" /></svg>
                                                    </button>
                                                    <button type="button" class="btn text-danger p-0" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Delete" data-bs-original-title="Delete">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M4 7l16 0"></path>
                                                            <path d="M10 11l0 6"></path>
                                                            <path d="M14 11l0 6"></path>
                                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-12 border-bottom p-3 rounded-4 d-flex align-items-center flex-column flex-md-row gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v4" /><path d="M5 15v6h1a2 2 0 0 0 2 -2v-2a2 2 0 0 0 -2 -2h-1z" /><path d="M20 16.5a1.5 1.5 0 0 0 -3 0v3a1.5 1.5 0 0 0 3 0" /><path d="M12.5 15a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1 -3 0v-3a1.5 1.5 0 0 1 1.5 -1.5z" /></svg>
                                        <div class="text-md-start text-center w-100 mt-4 mt-md-0">
                                            <div class="row g-3 align-items-center">
                                                <div class="col-lg-5 col-md-4 mb-3 mb-md-0">
                                                    <h6 class="mb-1 text-truncate">Platform_Design_Manual.doc</h6>
                                                    <span class="badge text-bg-primary">18MB</span>
                                                    <span class="badge text-bg-secondary">DOC</span>
                                                </div>
                                                <div class="col-lg-4 col-md-5 text-center">
                                                    <ul class="list-unstyled d-flex mb-0 text-center text-md-start gap-xl-4 gap-3">
                                                        <li class="flex-fill">
                                                            <h6 class="mb-0">18 Jul 2025</h6>
                                                            <span class="fs-12 text-muted">Date</span>
                                                        </li>
                                                        <li class="vr"></li>
                                                        <li class="flex-fill">
                                                            <div class="d-flex gap-1 align-items-center">
                                                                <img class="avatar xs rounded" src="assets/images/user-1.png" alt="">
                                                                <div class="flex-fill">
                                                                    <h6 class="mb-0">Comeren</h6>
                                                                </div>
                                                            </div>
                                                            <span class="fs-12 text-muted">Uploaded by</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-xl-3 col-lg-3 col-md-3 text-center text-md-end mt-3 mt-md-0">
                                                    <button type="button" class="btn text-primary p-0" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Download file" data-bs-original-title="Download file">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" /><path d="M7 11l5 5l5 -5" /><path d="M12 4l0 12" /></svg>
                                                    </button>
                                                    <button type="button" class="btn text-danger p-0" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Delete" data-bs-original-title="Delete">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M4 7l16 0"></path>
                                                            <path d="M10 11l0 6"></path>
                                                            <path d="M14 11l0 6"></path>
                                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-12 border-bottom p-3 rounded-4 d-flex align-items-center flex-column flex-md-row gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M5 18h1.5a1.5 1.5 0 0 0 0 -3h-1.5v6" /><path d="M11 18h1.5a1.5 1.5 0 0 0 0 -3h-1.5v6" /><path d="M16.5 15h3" /><path d="M18 15v6" /><path d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v4" /></svg>
                                        <div class="text-md-start text-center w-100 mt-4 mt-md-0">
                                            <div class="row g-3 align-items-center">
                                                <div class="col-lg-5 col-md-4 mb-3 mb-md-0">
                                                    <h6 class="mb-1 text-truncate">Promotion_Strategy.ppt</h6>
                                                    <span class="badge text-bg-primary">27MB</span>
                                                    <span class="badge text-bg-secondary">PPT</span>
                                                </div>
                                                <div class="col-lg-4 col-md-5 text-center">
                                                    <ul class="list-unstyled d-flex mb-0 text-center text-md-start gap-xl-4 gap-3">
                                                        <li class="flex-fill">
                                                            <h6 class="mb-0">17 Jul 2025</h6>
                                                            <span class="fs-12 text-muted">Date</span>
                                                        </li>
                                                        <li class="vr"></li>
                                                        <li class="flex-fill">
                                                            <div class="d-flex gap-1 align-items-center">
                                                                <img class="avatar xs rounded" src="assets/images/user-1.png" alt="">
                                                                <div class="flex-fill">
                                                                    <h6 class="mb-0">Comeren</h6>
                                                                </div>
                                                            </div>
                                                            <span class="fs-12 text-muted">Uploaded by</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-xl-3 col-lg-3 col-md-3 text-center text-md-end mt-3 mt-md-0">
                                                    <button type="button" class="btn text-primary p-0" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Download file" data-bs-original-title="Download file">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" /><path d="M7 11l5 5l5 -5" /><path d="M12 4l0 12" /></svg>
                                                    </button>
                                                    <button type="button" class="btn text-danger p-0" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Delete" data-bs-original-title="Delete">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M4 7l16 0"></path>
                                                            <path d="M10 11l0 6"></path>
                                                            <path d="M14 11l0 6"></path>
                                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-12 border-bottom p-3 rounded-4 d-flex align-items-center flex-column flex-md-row gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v4" /><path d="M4 15l4 6" /><path d="M4 21l4 -6" /><path d="M17 20.25c0 .414 .336 .75 .75 .75h1.25a1 1 0 0 0 1 -1v-1a1 1 0 0 0 -1 -1h-1a1 1 0 0 1 -1 -1v-1a1 1 0 0 1 1 -1h1.25a.75 .75 0 0 1 .75 .75" /><path d="M11 15v6h3" /></svg>
                                        <div class="text-md-start text-center w-100 mt-4 mt-md-0">
                                            <div class="row g-3 align-items-center">
                                                <div class="col-lg-5 col-md-4 mb-3 mb-md-0">
                                                    <h6 class="mb-1 text-truncate">Timesheet.xls</h6>
                                                    <span class="badge text-bg-primary">1MB</span>
                                                    <span class="badge text-bg-secondary">XLS</span>
                                                </div>
                                                <div class="col-lg-4 col-md-5 text-center">
                                                    <ul class="list-unstyled d-flex mb-0 text-center text-md-start gap-xl-4 gap-3">
                                                        <li class="flex-fill">
                                                            <h6 class="mb-0">17 Jul 2025</h6>
                                                            <span class="fs-12 text-muted">Date</span>
                                                        </li>
                                                        <li class="vr"></li>
                                                        <li class="flex-fill">
                                                            <div class="d-flex gap-1 align-items-center">
                                                                <img class="avatar xs rounded" src="assets/images/user-1.png" alt="">
                                                                <div class="flex-fill">
                                                                    <h6 class="mb-0">Comeren</h6>
                                                                </div>
                                                            </div>
                                                            <span class="fs-12 text-muted">Uploaded by</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-xl-3 col-lg-3 col-md-3 text-center text-md-end mt-3 mt-md-0">
                                                    <button type="button" class="btn text-primary p-0" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Download file" data-bs-original-title="Download file">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" /><path d="M7 11l5 5l5 -5" /><path d="M12 4l0 12" /></svg>
                                                    </button>
                                                    <button type="button" class="btn text-danger p-0" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Delete" data-bs-original-title="Delete">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M4 7l16 0"></path>
                                                            <path d="M10 11l0 6"></path>
                                                            <path d="M14 11l0 6"></path>
                                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-12 border-bottom p-3 rounded-4 d-flex align-items-center flex-column flex-md-row gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v4" /><path d="M16 18h1.5a1.5 1.5 0 0 0 0 -3h-1.5v6" /><path d="M12 15v6" /><path d="M5 15h3l-3 6h3" /></svg>
                                        <div class="text-md-start text-center w-100 mt-4 mt-md-0">
                                            <div class="row g-3 align-items-center">
                                                <div class="col-lg-5 col-md-4 mb-3 mb-md-0">
                                                    <h6 class="mb-1 text-truncate">Project-Backup-2025.zip</h6>
                                                    <span class="badge text-bg-primary">18MB</span>
                                                    <span class="badge text-bg-secondary">PDF</span>
                                                </div>
                                                <div class="col-lg-4 col-md-5 text-center">
                                                    <ul class="list-unstyled d-flex mb-0 text-center text-md-start gap-xl-4 gap-3">
                                                        <li class="flex-fill">
                                                            <h6 class="mb-0">17 Jul 2025</h6>
                                                            <span class="fs-12 text-muted">Date</span>
                                                        </li>
                                                        <li class="vr"></li>
                                                        <li class="flex-fill">
                                                            <div class="d-flex gap-1 align-items-center">
                                                                <img class="avatar xs rounded" src="assets/images/user-1.png" alt="">
                                                                <div class="flex-fill">
                                                                    <h6 class="mb-0">Comeren</h6>
                                                                </div>
                                                            </div>
                                                            <span class="fs-12 text-muted">Uploaded by</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-xl-3 col-lg-3 col-md-3 text-center text-md-end mt-3 mt-md-0">
                                                    <button type="button" class="btn text-primary p-0" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Download file" data-bs-original-title="Download file">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" /><path d="M7 11l5 5l5 -5" /><path d="M12 4l0 12" /></svg>
                                                    </button>
                                                    <button type="button" class="btn text-danger p-0" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Delete" data-bs-original-title="Delete">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M4 7l16 0"></path>
                                                            <path d="M10 11l0 6"></path>
                                                            <path d="M14 11l0 6"></path>
                                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-12 border-bottom p-3 rounded-4 d-flex align-items-center flex-column flex-md-row gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"><path d="M15 10l4.553 -2.276a1 1 0 0 1 1.447 .894v6.764a1 1 0 0 1 -1.447 .894l-4.553 -2.276v-4z" /><path d="M3 6m0 2a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2z" /></svg>
                                        <div class="text-md-start text-center w-100 mt-4 mt-md-0">
                                            <div class="row g-3 align-items-center">
                                                <div class="col-lg-5 col-md-4 mb-3 mb-md-0">
                                                    <h6 class="mb-1 text-truncate">viedo 1.mp4</h6>
                                                    <span class="badge text-bg-primary">107MB</span>
                                                    <span class="badge text-bg-secondary">MP4</span>
                                                </div>
                                                <div class="col-lg-4 col-md-5 text-center">
                                                    <ul class="list-unstyled d-flex mb-0 text-center text-md-start gap-xl-4 gap-3">
                                                        <li class="flex-fill">
                                                            <h6 class="mb-0">17 Jul 2025</h6>
                                                            <span class="fs-12 text-muted">Date</span>
                                                        </li>
                                                        <li class="vr"></li>
                                                        <li class="flex-fill">
                                                            <div class="d-flex gap-1 align-items-center">
                                                                <img class="avatar xs rounded" src="assets/images/user-1.png" alt="">
                                                                <div class="flex-fill">
                                                                    <h6 class="mb-0">Comeren</h6>
                                                                </div>
                                                            </div>
                                                            <span class="fs-12 text-muted">Uploaded by</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-xl-3 col-lg-3 col-md-3 text-center text-md-end mt-3 mt-md-0">
                                                    <button type="button" class="btn text-primary p-0" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Download file" data-bs-original-title="Download file">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" /><path d="M7 11l5 5l5 -5" /><path d="M12 4l0 12" /></svg>
                                                    </button>
                                                    <button type="button" class="btn text-danger p-0" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Delete" data-bs-original-title="Delete">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M4 7l16 0"></path>
                                                            <path d="M10 11l0 6"></path>
                                                            <path d="M14 11l0 6"></path>
                                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- End:: Files -->

                            <!-- Tab:: Activity  -->
                            <div class="tab-pane fade" id="activity" role="tabpanel">
                                <ul class="mb-0 li_animate list-unstyled">
                                    <li class="timeline-item border-info ms-2">
                                        <div class="d-flex gap-3">
                                            <img class="avatar md rounded-circle" src="assets/images/user-1.png" alt="">
                                            <div class="flex-fill">
                                                <div class="mb-1 fs-6">Gerald Vaughn changed the status to QA on <a href="#" class="luno-link text_bg2">MA-86</a> - Retargeting Ads</div>
                                                <span class="d-flex text-muted small">New Dashboard Design - 9:24PM by <a class="ms-2" href="#" title=""><strong>You</strong></a> </span>
                                                <div class="card mt-3 p-3"> I’ve prepared all sizes for you. Can you take a look tonight so we can prepare my final invoice? </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-item border-warning ms-2">
                                        <div class="d-flex gap-3">
                                            <img class="avatar sm rounded-circle" src="assets/images/user-1.png" alt="">
                                            <div class="flex-fill">
                                                <div class="mb-1 fs-6">3 new screen design added: on <a href="#" class="luno-link text_bg2">MA-86</a></div>
                                                <span class="d-flex text-muted small">New added - 9:24PM by <a class="ms-2" href="#" title=""><strong>You</strong></a> </span>
                                                <div class="card mt-3 p-3">
                                                    <div class="row g-1">
                                                        <div class="col-lg-3 col-md-4 col-sm-6">
                                                            <div class="card img-effect one text-center">
                                                                <img src="assets/images/gallery/04.png" alt="img hover">
                                                                <div>
                                                                    <h3 class="fs-4">Page 1</h3>
                                                                    <p><small>Sadie never took her eyes off me.</small></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-4 col-sm-6">
                                                            <div class="card img-effect one text-center">
                                                                <img src="assets/images/gallery/06.png" alt="img hover">
                                                                <div>
                                                                    <h3 class="fs-4">Page 2</h3>
                                                                    <p><small>There is more to her than meets the eye.</small></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-4 col-sm-6">
                                                            <div class="card img-effect one text-center">
                                                                <img src="assets/images/gallery/01.png" alt="img hover">
                                                                <div>
                                                                    <h3 class="fs-4">Page 3</h3>
                                                                    <p><small>Sadie never took her eyes off me. She had a dark soul.</small></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-item border-success ms-2">
                                        <div class="d-flex gap-3">
                                            <img class="avatar sm rounded-circle" src="assets/images/user-1.png" alt="">
                                            <div class="flex-fill">
                                                <div class="mb-1">Clients share with new documentation file</div>
                                                <span class="d-flex text-muted small">New file - 11:30AM by <a class="ms-2" href="#" title=""><strong>You</strong></a> </span>
                                                <div class="card mt-3 p-3">
                                                    <a href="#" class="d-inline-flex align-items-center py-2">
                                                        <div class="flex-fill ms-3 text-truncate">
                                                            <p class="mb-0 color-800">new layout for admin pages</p>
                                                            <small class="text-muted">.pdf, 5.3 MB</small>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="d-inline-flex align-items-center py-2">
                                                        <div class="flex-fill ms-3 text-truncate">
                                                            <p class="mb-0 color-800 lh-sm">Brand Photography</p>
                                                            <small class="text-muted">.zip, 30.5 MB</small>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-item border-primary ms-2">
                                        <div class="d-flex gap-3">
                                            <img class="avatar sm rounded-circle" src="assets/images/user-1.png" alt="">
                                            <div class="flex-fill">
                                                <div class="mb-1">Create new module development team for <a href="#" class="luno-link text_bg2">MA-86</a> stocks for our Instagram channel</div>
                                                <span class="d-flex text-muted small">ReactJs, Nodejs - 7:58AM by <a class="ms-2" href="#" title=""><strong>You</strong></a> </span>
                                                <div class="card p-3 mt-3"> What do you think about these? Should I continue in this style? </div>
                                                <div class="avatar-group d-flex align-items-center w-100 mt-3">
                                                    <span class="me-3">Team :</span>
                                                    <a href="#" class="avatar-item md" data-bs-toggle="tooltip" data-placement="top" aria-label="Sr. Developer" data-bs-original-title="Avatar Name">
                                                        <img class="avatar md border rounded-circle" src="assets/images/user-3.png" alt="">
                                                    </a>
                                                    <a href="#" class="avatar-item md" data-bs-toggle="tooltip" data-placement="top" aria-label="Developer" data-bs-original-title="Avatar Name">
                                                        <img class="avatar md border rounded-circle" src="assets/images/user-4.png" alt="">
                                                    </a>
                                                    <a href="#" class="avatar-item md" data-bs-toggle="tooltip" data-placement="top" aria-label="QA Engineer" data-bs-original-title="Avatar Name">
                                                        <img class="avatar md border rounded-circle" src="assets/images/user-5.png" alt="">
                                                    </a>
                                                    <a href="#" class="avatar-item md" data-bs-toggle="tooltip" data-placement="top" aria-label="Web Designer" data-bs-original-title="Avatar Name">
                                                        <img class="avatar md border rounded-circle" src="assets/images/user-6.png" alt="">
                                                    </a>
                                                    <a href="#" class="avatar-item md" data-bs-toggle="tooltip" data-placement="top" aria-label="Project Manager" data-bs-original-title="Avatar Name">
                                                        <img class="avatar md border rounded-circle" src="assets/images/user-7.png" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-item border-warning ms-2">
                                        <div class="d-flex gap-3">
                                            <img class="avatar sm rounded-circle" src="assets/images/user-3.png" alt="">
                                            <div class="flex-fill">
                                                <div class="mb-1">update new source code on GitHub <strong>MA-78 - Retargeting React Webapp</strong></div>
                                                <span class="d-flex text-muted small">New Dashboard Design - 9:24PM by <a class="ms-2" href="#" title=""><strong>Chris</strong></a> </span>
                                                <div class="alert alert-success rounded mt-3 mb-0"> I’ve prepared all sizes for you. Can you take a look tonight so we can prepare my final invoice? </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-item border-info ms-2">
                                        <div class="d-flex gap-3">
                                            <img class="avatar sm rounded-circle" src="assets/images/user-2.png" alt="">
                                            <div class="flex-fill">
                                                <div class="mb-1 fs-6">Task <a href="#" class="luno-link text_bg2">#1425</a> merged with <a href="#" class="luno-link text_bg2">#25836</a> in Luno Admin Dashboard project:</div>
                                                <span class="d-flex text-muted small">Updates for Jason Carroll - 7:12PM by <a class="ms-2" href="#" title=""><strong>Orlando</strong></a> </span>
                                                <div class="card mt-3 p-3">
                                                    <p>Both task merged and latest code push on GitHub</p>
                                                    <ul class="mb-0">
                                                        <li>Responsive design issue fix and testing all device-width</li>
                                                        <li>Profile page create</li>
                                                        <li>Login page text changes</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- End:: Activity -->

                            <!-- Tab:: Settings  -->
                            <div class="tab-pane fade" id="settings" role="tabpanel">
                                <form action="submit">
                                    <div class="mb-3 control-group">
                                        <label class="form-label" for="projectName">Project Name</label>
                                        <input type="text" class="form-control form-control-lg" placeholder="Enter project name" id="projectName" value="">
                                    </div>
                                    <div class="mb-3 control-group">
                                        <label class="form-label" for="projectDescription">Project Description</label>
                                        <textarea class="form-control form-control-lg" rows="3" id="projectDescription" placeholder="Enter project description"></textarea>
                                    </div>
                                    <div class="mb-3 control-group">
                                        <label class="form-label" for="selectDate">Due Date</label>
                                        <input type="date" class="form-control form-control-lg" value="" id="selectDate">
                                    </div>
                                    <div class="mb-3 control-group d-flex gap-3">
                                        <label class="form-label" for="statuscheckActive">Status</label>
                                        <div class="form-check form-switch mb-0">
                                            <input class="form-check-input" type="checkbox" id="statuscheckActive" role="switch" checked="">
                                            <label class="form-check-label" for="statuscheckActive">Active</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </form>
                            </div>
                            <!-- End:: Settings -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- End:: Content -->

    </div>
    <!-- End:: Content Wrapper -->


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
                                <label class="form-label" for="customer">Choose Customer</label>
                                <input type="text" class="form-control" id="customer" placeholder="Choose Customer">
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
                                <label class="form-label" for="teamMembers">Add Team Members</label>
                                <input type="text" class="form-control" id="teamMembers" placeholder="Add Team Members">
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
                                <label class="form-label small" for="files10">Upload up to 10 files</label>
                                <input class="form-control" type="file" multiple="" id="files10">
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
    <script>
        $(document).ready(function () {
            $('.btn-toggle-innersidebar').on('click', function () {
                $('body').toggleClass('show-innersidebar');
            });
        });
        // Tasks Summary
        var apexwc12 = {
            chart: {
                height: 225,
                type: 'donut',
            },
            labels: ['Active', 'Completed', 'Overdue', 'Yet to start'],
            dataLabels: {
                enabled: false,
            },
            legend: {
                position: 'bottom', // left, right, top, bottom
                horizontalAlign: 'center', // left, right, top, bottom
            },
            colors: ['var(--bs-primary)', '#FFE6C2', '#DEBAA9', '#ACB39E'],
            series: [44, 55, 41, 17],
            responsive: [{
                breakpoint: 420,
                options: {
                chart: {
                    width: 200
                },
                legend: {
                    position: 'bottom'
                }
                }
            }]
        }
        new ApexCharts(document.querySelector("#Tasks_Summary"), apexwc12).render();
        // Tasks Over Time
        var apexwc9 = {
            series: [{
                name: "Complete",
                data: [45, 52, 38, 24, 33, 26, 21, 20, 6, 8, 15, 10]
            }, {
                name: "Incomplete",
                data: [87, 57, 74, 99, 75, 38, 62, 47, 82, 56, 45, 47]
            }],
            chart: {
                height: 255,
                type: 'line', // line, bar, area
                toolbar: {
                show: false,
                },
                zoom: {
                enabled: false
                },
            },
            colors: ['var(--bs-primary)', 'var(--bs-primary-bg-subtle)', ],
            dataLabels: {
                enabled: false
            },
            stroke: {
                width: [2, 2],
                curve: 'smooth', // straight, smooth
                dashArray: [0, 5]
            },
            legend: {
                tooltipHoverFormatter: function(val, opts) {
                return val + ' - ' + opts.w.globals.series[opts.seriesIndex][opts.dataPointIndex] + ''
                }
            },
            markers: {
                size: 0,
                hover: {
                sizeOffset: 6
                }
            },
            xaxis: {
                categories: ['Jan', 'Feb', 'March', 'Apr', 'May', 'Jun', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
            },
            tooltip: {
                y: [{
                title: {
                    formatter: function(val) {
                    return val + " (Tasks)"
                    }
                }
                }, {
                title: {
                    formatter: function(val) {
                    return val + " (Tasks)"
                    }
                }
                }]
            },
        };
        new ApexCharts(document.querySelector("#Tasks_Over_Time"), apexwc9).render();

        // Set default date 
        document.addEventListener("DOMContentLoaded", function () {
            // Set today's date
            const dateInput = document.getElementById("selectDate");
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