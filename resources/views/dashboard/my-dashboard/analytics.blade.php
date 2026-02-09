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
                    <div class="page-name fs-20 fw-bold ms-md-4 ms-2">Analytics</div>
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
                                    <path d="M17.5 3.75V8.75C17.5 9.08152 17.6317 9.39946 17.8661 9.63388C18.1005 9.8683 18.4185 10 18.75 10H23.75"/>
                                    <path d="M6.25 15V6.25C6.25 5.58696 6.51339 4.95107 6.98223 4.48223C7.45107 4.01339 8.08696 3.75 8.75 3.75H17.5L23.75 10V15"/>
                                    <path d="M6.25 22.5H8.125C8.62228 22.5 9.09919 22.3025 9.45083 21.9508C9.80246 21.5992 10 21.1223 10 20.625C10 20.1277 9.80246 19.6508 9.45083 19.2992C9.09919 18.9475 8.62228 18.75 8.125 18.75H6.25V26.25"/>
                                    <path d="M21.25 22.5H23.75" />
                                    <path d="M25 18.75H21.25V26.25"/>
                                    <path d="M13.75 18.75V26.25H15C15.663 26.25 16.2989 25.9866 16.7678 25.5178C17.2366 25.0489 17.5 24.413 17.5 23.75V21.25C17.5 20.587 17.2366 19.9511 16.7678 19.4822C16.2989 19.0134 15.663 18.75 15 18.75H13.75Z"/>
                                </svg>
                            </a>
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
<!-- Start:: Content -->
    <div class="row g-3">
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
            <div class="card bg-light-pink border-0 rounded-4">
                <div class="card-body p-4 text-black">
                    <p class="fs-14 text-uppercase">Active Users</p>
                    <h3 id="activeUsers">1342</h3>
                    <div class="statstics d-flex">
                        <span class="fs-12">Since last month</span>
                        <span class="me-1 ms-auto">+11.01%</span>
                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.20488 5.60777L14.75 4L13.3698 9.6061L11.648 7.9532L8.87069 10.8463C8.77641 10.9445 8.64615 11 8.51 11C8.37385 11 8.24359 10.9445 8.14931 10.8463L6.11 8.72199L3.11069 11.8463C2.91946 12.0455 2.60294 12.0519 2.40373 11.8607C2.20453 11.6695 2.19807 11.3529 2.38931 11.1537L5.74931 7.65373C5.84359 7.55552 5.97385 7.5 6.11 7.5C6.24615 7.5 6.37641 7.55552 6.47069 7.65373L8.51 9.77801L10.9266 7.26067L9.20488 5.60777Z" fill="currentColor"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
            <div class="card bg-light-green border-0 rounded-4">
                <div class="card-body p-4 text-black">
                    <p class="fs-14 text-uppercase">Views per minute</p>
                    <h3 id="viewsPerMinute">320</h3>
                    <div class="statstics d-flex">
                        <span class="fs-12">Since previous week</span>
                        <span class="me-1 ms-auto">+4.71%</span>
                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.20488 5.60777L14.75 4L13.3698 9.6061L11.648 7.9532L8.87069 10.8463C8.77641 10.9445 8.64615 11 8.51 11C8.37385 11 8.24359 10.9445 8.14931 10.8463L6.11 8.72199L3.11069 11.8463C2.91946 12.0455 2.60294 12.0519 2.40373 11.8607C2.20453 11.6695 2.19807 11.3529 2.38931 11.1537L5.74931 7.65373C5.84359 7.55552 5.97385 7.5 6.11 7.5C6.24615 7.5 6.37641 7.55552 6.47069 7.65373L8.51 9.77801L10.9266 7.26067L9.20488 5.60777Z" fill="currentColor"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
            <div class="card bg-light-blue border-0 rounded-4">
                <div class="card-body p-4 text-black">
                    <p class="fs-14 text-uppercase">Sessions</p>
                    <h3>23k</h3>
                    <div class="statstics d-flex">
                        <span class="fs-12">New Sessions Today</span>
                        <span class="me-1 ms-auto">+7.1%</span>
                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.20488 5.60777L14.75 4L13.3698 9.6061L11.648 7.9532L8.87069 10.8463C8.77641 10.9445 8.64615 11 8.51 11C8.37385 11 8.24359 10.9445 8.14931 10.8463L6.11 8.72199L3.11069 11.8463C2.91946 12.0455 2.60294 12.0519 2.40373 11.8607C2.20453 11.6695 2.19807 11.3529 2.38931 11.1537L5.74931 7.65373C5.84359 7.55552 5.97385 7.5 6.11 7.5C6.24615 7.5 6.37641 7.55552 6.47069 7.65373L8.51 9.77801L10.9266 7.26067L9.20488 5.60777Z" fill="currentColor"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
            <div class="card bg-light-orange border-0 rounded-4">
                <div class="card-body p-4 text-black">
                    <p class="fs-14 text-uppercase">Bounce Rate</p>
                    <h3>39.77%</h3>
                    <div class="statstics d-flex">
                        <span class="fs-12">Up Bounce Rate Weekly</span>
                        <span class="me-1 ms-auto">+4.66%</span>
                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.20488 5.60777L14.75 4L13.3698 9.6061L11.648 7.9532L8.87069 10.8463C8.77641 10.9445 8.64615 11 8.51 11C8.37385 11 8.24359 10.9445 8.14931 10.8463L6.11 8.72199L3.11069 11.8463C2.91946 12.0455 2.60294 12.0519 2.40373 11.8607C2.20453 11.6695 2.19807 11.3529 2.38931 11.1537L5.74931 7.65373C5.84359 7.55552 5.97385 7.5 6.11 7.5C6.24615 7.5 6.37641 7.55552 6.47069 7.65373L8.51 9.77801L10.9266 7.26067L9.20488 5.60777Z" fill="currentColor"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12">
            <div class="card p-3 p-lg-4 rounded-4">
                <ul class="nav nav-underline mb-4 gap-4 border-bottom" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link d-flex flex-column active" href="#ecommerce-tab" data-bs-toggle="tab" data-bs-target="#ecommerce-tab" role="tab">
                            <h6 class="mb-0">🛒 E-commerce</h6>
                            <p class="text-muted fs-12 fw-normal">$1.2k Sales Today” / “12 Orders</p>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link d-flex flex-column" href="#ai-tab" data-bs-toggle="tab" data-bs-target="#ai-tools-tab" role="tab">
                            <h6 class="mb-0">🧠 AI Tools</h6>
                            <p class="text-muted fs-12 fw-normal">3 New Insights Generated</p>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link d-flex flex-column" href="#projects-tab" data-bs-toggle="tab" data-bs-target="#projects-tab" role="tab">
                            <h6 class="mb-0">📁 Projects</h6>
                            <p class="text-muted fs-12 fw-normal">2 Projects Near Deadline</p>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link d-flex flex-column" href="#events-tab" data-bs-toggle="tab" data-bs-target="#events-tab" role="tab">
                            <h6 class="mb-0">📅 Events</h6>
                            <p class="text-muted fs-12 fw-normal">Next Event: Team Sync in 2 hrs</p>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <!-- E-Commerce Tab -->
                    <div class="tab-pane fade show active" id="ecommerce-tab" role="tabpanel">
                        <div class="row g-4 row-deck">
                            <div class="col-md-8 flex-column">
                                <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
                                    <div>
                                        <h3 class="mb-0 fw-light">Total Revenue: $<span class="counter" data-target="17800">0</span></h3>
                                        <p class="fs-12 mb-0 opacity-50">Monitor trends to evaluate business performance and growth potential.</p>
                                    </div>
                                    <a href="javascript: void(0);" class="btn btn-sm rounded-pill btn-outline-primary">View Statements</a>
                                </div>
                                <div id="ecom-chart" class="chart-box"></div>
                            </div>
                            <div class="col-md-4">
                                <div class="card rounded-4">
                                    <div class="card-body p-xl-4 p-3">
                                        <span>Overall Rating</span>
                                        <h3 class="fs-1 fw-bold mt-2">4.5</h3>
                                        <div class="fs-6">⭐⭐⭐⭐⭐</div>
                                        <p class="text-muted mb-4">Bases on 387 Reviews</p>
                                        <span>Excellent:</span>
                                        <div class="progress mt-1 mb-4" style="height: 1px;">
                                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;"></div>
                                        </div>
                                        <span>Good:</span>
                                        <div class="progress mt-1 mb-4" style="height: 1px;">
                                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                                        </div>
                                        <span>Average:</span>
                                        <div class="progress mt-1 mb-4" style="height: 1px;">
                                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%;"></div>
                                        </div>
                                        <span>Poor:</span>
                                        <div class="progress mt-1" style="height: 1px;">
                                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" style="width: 5%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- AI Tools Tab -->
                    <div class="tab-pane fade" id="ai-tools-tab" role="tabpanel">
                        <div class="row g-4 row-deck">
                            <div class="col-md-7 flex-column">
                                <div id="ai-chart" class="chart-box"></div>
                            </div>
                            <div class="col-md-5">
                                <div class="card rounded-4 border-bg border-0">
                                    <div class="card-body p-xl-4 p-3">
                                        <h6>Top AI Tools</h6>
                                        <ul class="list-group list-group-flush mb-0 li_animate rounded-4">
                                            <li class="list-group-item d-flex align-items-center gap-2 py-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M8 21h8a5 5 0 0 0 5 -5v-3a3 3 0 0 0 -3 -3h-1v-2a5 5 0 0 0 -5 -5h-4a5 5 0 0 0 -5 5v8a5 5 0 0 0 5 5z"></path><path d="M7 7m0 1.5a1.5 1.5 0 0 1 1.5 -1.5h3a1.5 1.5 0 0 1 1.5 1.5v0a1.5 1.5 0 0 1 -1.5 1.5h-3a1.5 1.5 0 0 1 -1.5 -1.5z"></path><path d="M7 14m0 1.5a1.5 1.5 0 0 1 1.5 -1.5h7a1.5 1.5 0 0 1 1.5 1.5v0a1.5 1.5 0 0 1 -1.5 1.5h-7a1.5 1.5 0 0 1 -1.5 -1.5z"></path></svg>
                                                <div>
                                                    <h6 class="mb-0">Blog Article Generator</h6>
                                                    <span class="fs-12 text-primary me-2">Uses (15.4K)</span>
                                                    <span class="fs-12 text-secondary">Rating (4.8)</span>
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex align-items-center gap-2 py-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h4l13 -13a1.5 1.5 0 0 0 -4 -4l-13 13v4"></path><path d="M14.5 5.5l4 4"></path><path d="M12 8l-5 -5l-4 4l5 5"></path><path d="M7 8l-1.5 1.5"></path><path d="M16 12l5 5l-4 4l-5 -5"></path><path d="M16 17l-1.5 1.5"></path></svg>
                                                <div>
                                                    <h6 class="mb-0">Tool Usage Tracker</h6>
                                                    <span class="fs-12 text-primary me-2">Uses (15.4K)</span>
                                                    <span class="fs-12 text-secondary">Rating (4.8)</span>
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex align-items-center gap-2 py-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M12 10.174c1.766 -2.784 3.315 -4.174 4.648 -4.174c2 0 3.263 2.213 4 5.217c.704 2.869 .5 6.783 -2 6.783c-1.114 0 -2.648 -1.565 -4.148 -3.652a27.627 27.627 0 0 1 -2.5 -4.174z"></path><path d="M12 10.174c-1.766 -2.784 -3.315 -4.174 -4.648 -4.174c-2 0 -3.263 2.213 -4 5.217c-.704 2.869 -.5 6.783 2 6.783c1.114 0 2.648 -1.565 4.148 -3.652c1 -1.391 1.833 -2.783 2.5 -4.174z"></path></svg>
                                                <div>
                                                    <h6 class="mb-0">Meta Title & Description Generator</h6>
                                                    <span class="fs-12 text-primary me-2">Uses (15.4K)</span>
                                                    <span class="fs-12 text-secondary">Rating (4.8)</span>
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex align-items-center gap-2 py-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M6 19a2 2 0 0 1 -2 -2v-4l-1 -1l1 -1v-4a2 2 0 0 1 2 -2"></path><path d="M12 11.875l3 -1.687"></path><path d="M12 11.875v3.375"></path><path d="M12 11.875l-3 -1.687"></path><path d="M12 11.875l3 1.688"></path><path d="M12 8.5v3.375"></path><path d="M12 11.875l-3 1.688"></path><path d="M18 19a2 2 0 0 0 2 -2v-4l1 -1l-1 -1v-4a2 2 0 0 0 -2 -2"></path></svg>
                                                <div>
                                                    <h6 class="mb-0">Code Generator & Explainer</h6>
                                                    <span class="fs-12 text-primary me-2">Uses (15.4K)</span>
                                                    <span class="fs-12 text-secondary">Rating (4.8)</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Projects Tab -->
                    <div class="tab-pane fade" id="projects-tab" role="tabpanel">
                        <div class="row g-4">
                            <div class="col-xxl-4 col-xl-6 col-lg-4 col-md-6 col-sm-12">
                                <h6 class="card-title m-0">Income Analysis by Domain</h6>
                                <div id="apex-AnalysisDomain"></div>
                            </div>
                            <div class="col-xxl-4 col-xl-6 col-lg-4 col-md-6 col-sm-12">
                                <h6 class="card-title m-0">Statistics by Technology</h6>
                                <div id="apex-StatisticsbyTechnology"></div>
                            </div>
                            <div class="col-xxl-4 col-xl-5 col-lg-4 col-md-12 col-sm-12">
                                <div class="card rounded-4 border-bg border-0 p-4">
                                    <h6 class="card-title mb-4">Employee of the month</h6>
                                    <ul class="list-unstyled mb-0 li_animate">
                                        <li class="d-flex gap-3 align-items-center mb-3">
                                            <img class="avatar lg rounded-circle shadow img-thumbnail" src="assets/images/user-1.png" alt="">
                                            <div class="flex-fill">
                                                <div class="h6 mb-0">Hossein Shams</div>
                                                <small>React Developer</small>
                                            </div>
                                        </li>
                                        <li class="d-flex gap-3 align-items-center mb-3">
                                            <img class="avatar lg rounded-circle shadow img-thumbnail" src="assets/images/user-2.png" alt="">
                                            <div class="flex-fill">
                                                <div class="h6 mb-0">Maryam Amiri</div>
                                                <small>Team Leader</small>
                                            </div>
                                        </li>
                                        <li class="d-flex gap-3 align-items-center mb-3">
                                            <img class="avatar lg rounded-circle shadow img-thumbnail" src="assets/images/user-3.png" alt="">
                                            <div class="flex-fill">
                                                <div class="h6 mb-0">Cindy Anderson</div>
                                                <small>Manager</small>
                                            </div>
                                        </li>
                                        <li class="d-flex gap-3 align-items-center mb-3">
                                            <img class="avatar lg rounded-circle shadow img-thumbnail" src="assets/images/user-4.png" alt="">
                                            <div class="flex-fill">
                                                <div class="h6 mb-0">Issa Bell</div>
                                                <small>Designer</small>
                                            </div>
                                        </li>
                                        <li class="d-flex gap-3 align-items-center">
                                            <img class="avatar lg rounded-circle shadow img-thumbnail" src="assets/images/user-5.png" alt="">
                                            <div class="flex-fill">
                                                <div class="h6 mb-0">Comeren Diaz</div>
                                                <small>PHP Developer</small>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Events Tab -->
                    <div class="tab-pane fade" id="events-tab" role="tabpanel">
                        <h6>Upcoming Events</h6>
                        <ul class="list-group rounded-4">
                            <li class="list-group-item py-3">📅 Aug 1 – AI Conference</li>
                            <li class="list-group-item py-3">📅 Aug 3 – Project Deadline</li>
                            <li class="list-group-item py-3">📅 Aug 6 – Team Meeting</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- End:: Content -->
@endsection
@push('scripts')
    <script src="{{ asset('assets/js/analytics.js') }}"></script>
@endpush