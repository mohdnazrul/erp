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
                    <div class="page-name fs-20 fw-bold ms-md-4 ms-2">Events Analytics</div>
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
    <!-- Start:: Content -->
    <div class="row g-3">
        <div class="col-xl-3">
            <div class="row g-3 row-deck">
                <div class="col-xl-12 col-lg-3 col-md-3 col-sm-6">
                    <div class="card rounded-4">
                        <div class="card-body p-lg-4">
                            <div class="d-flex align-items-center gap-2">
                                <svg class="hover-svg" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M17 8v-3a1 1 0 0 0 -1 -1h-10a2 2 0 0 0 0 4h12a1 1 0 0 1 1 1v3m0 4v3a1 1 0 0 1 -1 1h-12a2 2 0 0 1 -2 -2v-12" />
                                    <path d="M20 12v4h-4a2 2 0 0 1 0 -4h4" />
                                </svg>
                                <span class="text-muted">Balance</span>
                            </div>
                            <div class="d-flex align-items-center justify-content-between gap-2 mb-1 mt-3">
                                <h4 class="mb-0">$<span class="counter" data-target="75000">0</span></h4>
                                <span class="badge bg-success bg-opacity-10 text-success fw-medium">
                                    <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.20488 6.45826L14.75 4.75L13.3698 10.7065L11.648 8.95027L8.87069 12.0242C8.77641 12.1285 8.64615 12.1875 8.51 12.1875C8.37385 12.1875 8.24359 12.1285 8.14931 12.0242L6.11 9.76711L3.11069 13.0867C2.91946 13.2983 2.60294 13.3051 2.40373 13.102C2.20453 12.8988 2.19807 12.5625 2.38931 12.3508L5.74931 8.63209C5.84359 8.52774 5.97385 8.46875 6.11 8.46875C6.24615 8.46875 6.37641 8.52774 6.47069 8.63209L8.51 10.8891L10.9266 8.21446L9.20488 6.45826Z" fill="currentColor"/>
                                    </svg>
                                    +12%
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-3 col-md-3 col-sm-6">
                    <div class="card rounded-4">
                        <div class="card-body p-lg-4">
                            <div class="d-flex align-items-center gap-2 hover-svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 19h-6a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v4.5" />
                                    <path d="M3 10h18" />
                                    <path d="M7 15h.01" />
                                    <path d="M11 15h2" />
                                    <path d="M16 19h6" />
                                    <path d="M19 16l-3 3l3 3" />
                                </svg>
                                <span class="text-muted">Income</span>
                            </div>
                            <div class="d-flex align-items-center justify-content-between gap-2 mb-1 mt-3">
                                <h4 class="mb-0">$<span class="counter" data-target="36750">0</span></h4>
                                <span class="badge bg-danger bg-opacity-10 text-danger fw-medium">
                                    <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.20488 11.5417L14.75 13.25L13.3698 7.29352L11.648 9.04973L8.87069 5.97581C8.77641 5.87147 8.64615 5.8125 8.51 5.8125C8.37385 5.8125 8.24359 5.87147 8.14931 5.97581L6.11 8.23289L3.11069 4.91331C2.91946 4.70166 2.60294 4.69486 2.40373 4.89801C2.20453 5.10116 2.19807 5.43754 2.38931 5.64919L5.74931 9.36791C5.84359 9.47226 5.97385 9.53125 6.11 9.53125C6.24615 9.53125 6.37641 9.47226 6.47069 9.36791L8.51 7.11086L10.9266 9.78554L9.20488 11.5417Z" fill="currentColor"/>
                                    </svg>
                                    +7%
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-3 col-md-3 col-sm-6">
                    <div class="card rounded-4">
                        <div class="card-body p-lg-4">
                            <div class="d-flex align-items-center gap-2 hover-svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 19h-6a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v4.5" />
                                    <path d="M3 10h18" />
                                    <path d="M16 19h6" />
                                    <path d="M19 16l3 3l-3 3" />
                                    <path d="M7.005 15h.005" />
                                    <path d="M11 15h2" />
                                </svg>
                                <span class="text-muted">Expenses</span>
                            </div>
                            <div class="d-flex align-items-center justify-content-between gap-2 mb-1 mt-3">
                                <h4 class="mb-0">$<span class="counter" data-target="22980">0</span></h4>
                                <span class="badge bg-success bg-opacity-10 text-success fw-medium">
                                    <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.20488 6.45826L14.75 4.75L13.3698 10.7065L11.648 8.95027L8.87069 12.0242C8.77641 12.1285 8.64615 12.1875 8.51 12.1875C8.37385 12.1875 8.24359 12.1285 8.14931 12.0242L6.11 9.76711L3.11069 13.0867C2.91946 13.2983 2.60294 13.3051 2.40373 13.102C2.20453 12.8988 2.19807 12.5625 2.38931 12.3508L5.74931 8.63209C5.84359 8.52774 5.97385 8.46875 6.11 8.46875C6.24615 8.46875 6.37641 8.52774 6.47069 8.63209L8.51 10.8891L10.9266 8.21446L9.20488 6.45826Z" fill="currentColor"/>
                                    </svg>
                                    +2%
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-3 col-md-3 col-sm-6">
                    <div class="card rounded-4">
                        <div class="card-body p-lg-4">
                            <div class="d-flex align-items-center gap-2 hover-svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M15 5l0 2" />
                                    <path d="M15 11l0 2" />
                                    <path d="M15 17l0 2" />
                                    <path d="M5 5h14a2 2 0 0 1 2 2v3a2 2 0 0 0 0 4v3a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-3a2 2 0 0 0 0 -4v-3a2 2 0 0 1 2 -2" />
                                </svg>
                                <span class="text-muted">Events</span>
                            </div>
                            <div class="d-flex align-items-center justify-content-between gap-2 mb-1 mt-3">
                                <h4 class="mb-0">$<span class="counter" data-target="296">0</span></h4>
                                <span class="badge bg-success bg-opacity-10 text-success fw-medium">
                                    <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.20488 6.45826L14.75 4.75L13.3698 10.7065L11.648 8.95027L8.87069 12.0242C8.77641 12.1285 8.64615 12.1875 8.51 12.1875C8.37385 12.1875 8.24359 12.1285 8.14931 12.0242L6.11 9.76711L3.11069 13.0867C2.91946 13.2983 2.60294 13.3051 2.40373 13.102C2.20453 12.8988 2.19807 12.5625 2.38931 12.3508L5.74931 8.63209C5.84359 8.52774 5.97385 8.46875 6.11 8.46875C6.24615 8.46875 6.37641 8.52774 6.47069 8.63209L8.51 10.8891L10.9266 8.21446L9.20488 6.45826Z" fill="currentColor"/>
                                    </svg>
                                    +11%
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End:: Row -->
        </div>
        <div class="col-xl-9">
            <div class="row g-3 row-deck">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="card rounded-4 overflow-hidden">
                        <div class="card-header px-lg-4 p-3 d-flex justify-content-between align-items-center">
                            <h6 class="card-title m-0">Monthly Event Growth</h6>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"></a>
                                <ul class="dropdown-menu li_animate shadow border-0 p-2">
                                    <li><a class="dropdown-item" href="#">Last 7 days</a></li>
                                    <li><a class="dropdown-item" href="#">Last Month</a></li>
                                    <li><a class="dropdown-item" href="#">Last Year</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="MonthlyEventGrowth"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="card rounded-4 overflow-hidden">
                        <div class="card-header px-lg-4 p-3 d-flex justify-content-between align-items-center">
                            <h6 class="card-title m-0">Event Category Distribution</h6>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"></a>
                                <ul class="dropdown-menu li_animate shadow border-0 p-2">
                                    <li><a class="dropdown-item" href="#">Last 7 days</a></li>
                                    <li><a class="dropdown-item" href="#">Last Month</a></li>
                                    <li><a class="dropdown-item" href="#">Last Year</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body d-flex align-items-center justify-content-center">
                            <div id="eventTypeChart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card rounded-4">
                        <div class="card-body">
                            <h6 class="mb-3">Top Speaker</h6>
                            <ul class="list-unstyled d-flex justify-content-around mb-0 overflow-auto gap-3 pb-3 li_animate">
                                <li class="text-center me-4">
                                    <a href="#" class="view-speaker"
                                        data-name="Kevin Gill"
                                        data-email="emma.wilson@techsummit.com"
                                        data-avatar="assets/images/user-1.png"
                                        data-designation="AI Researcher & Keynote Speaker"
                                        data-company="Global AI Summit"
                                        data-topics="Ethical AI,Generative AI in Healthcare,Future of Machine Learning"
                                        data-rating="4.9"
                                        data-reviews="238"
                                        data-joined="March 15, 2024"
                                        data-location="San Francisco, CA"
                                        data-bio="Kevin Gill is a leading voice in AI ethics and innovation...">
                                        <img src="assets/images/user-1.png" alt="Avatar" class="rounded-circle avatar xl img-thumbnail">
                                        <h6 class="mb-0 mt-1 text-truncate">Kevin Gill</h6>
                                    </a>
                                </li>
                                <li class="text-center me-4">
                                    <a href="#" class="view-speaker"
                                        data-name="Alex Doe"
                                        data-email="emma.wilson@techsummit.com"
                                        data-avatar="assets/images/user-2.png"
                                        data-designation="AI Researcher & Keynote Speaker"
                                        data-company="Global AI Summit"
                                        data-topics="Ethical AI,Generative AI in Healthcare,Future of Machine Learning"
                                        data-rating="4.9"
                                        data-reviews="238"
                                        data-joined="March 15, 2024"
                                        data-location="San Francisco, CA"
                                        data-bio="Alex Doe is a leading voice in AI ethics and innovation...">
                                        <img src="assets/images/user-2.png" alt="Avatar" class="rounded-circle avatar xl img-thumbnail">
                                        <h6 class="mb-0 mt-1 text-truncate">Alex Doe</h6>
                                    </a>
                                </li>
                                <li class="text-center me-4">
                                    <a href="#" class="view-speaker"
                                        data-name="Cinid Hill"
                                        data-email="emma.wilson@techsummit.com"
                                        data-avatar="assets/images/user-3.png"
                                        data-designation="AI Researcher & Keynote Speaker"
                                        data-company="Global AI Summit"
                                        data-topics="Ethical AI,Generative AI in Healthcare,Future of Machine Learning"
                                        data-rating="4.9"
                                        data-reviews="238"
                                        data-joined="March 15, 2024"
                                        data-location="San Francisco, CA"
                                        data-bio="Cinid Hill is a leading voice in AI ethics and innovation...">
                                        <img src="assets/images/user-3.png" alt="Avatar" class="rounded-circle avatar xl img-thumbnail">
                                        <h6 class="mb-0 mt-1 text-truncate">Cinid Hill</h6>
                                    </a>
                                </li>
                                <li class="text-center me-4">
                                    <a href="#" class="view-speaker"
                                        data-name="Maryam Amiri"
                                        data-email="emma.wilson@techsummit.com"
                                        data-avatar="assets/images/user-4.png"
                                        data-designation="AI Researcher & Keynote Speaker"
                                        data-company="Global AI Summit"
                                        data-topics="Ethical AI,Generative AI in Healthcare,Future of Machine Learning"
                                        data-rating="4.9"
                                        data-reviews="238"
                                        data-joined="March 15, 2024"
                                        data-location="San Francisco, CA"
                                        data-bio="Maryam Amiri is a leading voice in AI ethics and innovation...">
                                        <img src="assets/images/user-4.png" alt="Avatar" class="rounded-circle avatar xl img-thumbnail">
                                        <h6 class="mb-0 mt-1 text-truncate">Maryam Amiri</h6>
                                    </a>
                                </li>
                                <li class="text-center me-4">
                                    <a href="#" class="view-speaker"
                                        data-name="John Doe"
                                        data-email="emma.wilson@techsummit.com"
                                        data-avatar="assets/images/user-5.png"
                                        data-designation="AI Researcher & Keynote Speaker"
                                        data-company="Global AI Summit"
                                        data-topics="Ethical AI,Generative AI in Healthcare,Future of Machine Learning"
                                        data-rating="4.9"
                                        data-reviews="238"
                                        data-joined="March 15, 2024"
                                        data-location="San Francisco, CA"
                                        data-bio="John Doe is a leading voice in AI ethics and innovation...">
                                        <img src="assets/images/user-5.png" alt="Avatar" class="rounded-circle avatar xl img-thumbnail">
                                        <h6 class="mb-0 mt-1 text-truncate">John Doe</h6>
                                    </a>
                                </li>
                                <li class="text-center me-4">
                                    <a href="#" class="view-speaker"
                                        data-name="Alex Parker"
                                        data-email="emma.wilson@techsummit.com"
                                        data-avatar="assets/images/user-6.png"
                                        data-designation="AI Researcher & Keynote Speaker"
                                        data-company="Global AI Summit"
                                        data-topics="Ethical AI,Generative AI in Healthcare,Future of Machine Learning"
                                        data-rating="4.9"
                                        data-reviews="238"
                                        data-joined="March 15, 2024"
                                        data-location="San Francisco, CA"
                                        data-bio="Alex Parker is a leading voice in AI ethics and innovation...">
                                        <img src="assets/images/user-6.png" alt="Avatar" class="rounded-circle avatar xl img-thumbnail">
                                        <h6 class="mb-0 mt-1 text-truncate">Alex Parker</h6>
                                    </a>
                                </li>
                                <li class="text-center me-4">
                                    <a href="#" class="view-speaker"
                                        data-name="Kelvin Francis"
                                        data-email="emma.wilson@techsummit.com"
                                        data-avatar="assets/images/user-7.png"
                                        data-designation="AI Researcher & Keynote Speaker"
                                        data-company="Global AI Summit"
                                        data-topics="Ethical AI,Generative AI in Healthcare,Future of Machine Learning"
                                        data-rating="4.9"
                                        data-reviews="238"
                                        data-joined="March 15, 2024"
                                        data-location="San Francisco, CA"
                                        data-bio="Kelvin Francis is a leading voice in AI ethics and innovation...">
                                        <img src="assets/images/user-7.png" alt="Avatar" class="rounded-circle avatar xl img-thumbnail">
                                        <h6 class="mb-0 mt-1 text-truncate">Kelvin Francis</h6>
                                    </a>
                                </li>
                                <li class="text-center me-4">
                                    <a href="#" class="view-speaker"
                                        data-name="Maryam Amiri"
                                        data-email="emma.wilson@techsummit.com"
                                        data-avatar="assets/images/user-8.png"
                                        data-designation="AI Researcher & Keynote Speaker"
                                        data-company="Global AI Summit"
                                        data-topics="Ethical AI,Generative AI in Healthcare,Future of Machine Learning"
                                        data-rating="4.9"
                                        data-reviews="238"
                                        data-joined="March 15, 2024"
                                        data-location="San Francisco, CA"
                                        data-bio="Maryam Amiri is a leading voice in AI ethics and innovation...">
                                        <img src="assets/images/user-8.png" alt="Avatar" class="rounded-circle avatar xl img-thumbnail">
                                        <h6 class="mb-0 mt-1 text-truncate">Maryam Amiri</h6>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="border-bg mb-5 position-relative px-3 py-4 rounded-4">
                <h6>Recent Events</h6>
                <div class="row g-3 align-items-center">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="form-floating">
                            <select id="monthSelect" class="form-select">
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
                                <input type="text" class="form-control" id="searchExpenses" placeholder="Search...">
                                <label for="searchExpenses">Search Expenses...</label>
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
            <div class="border-top">
                <table class="Data_Table table table-round align-middle mb-0 table-hover w-100">
                    <thead>
                        <tr>
                            <th class="fs-12 text-muted text-uppercase fw-normal">Event</th>
                            <th class="fs-12 text-muted text-uppercase fw-normal">Date</th>
                            <th class="fs-12 text-muted text-uppercase fw-normal">Location</th>
                            <th class="fs-12 text-muted text-uppercase fw-normal">Status</th>
                            <th class="fs-12 text-muted text-uppercase fw-normal">Attendees</th>
                            <th class="fs-12 text-muted text-uppercase fw-normal">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tech Innovators Meetup</td>
                            <td>July 18, 2025</td>
                            <td>San Francisco, CA</td>
                            <td><span class="badge bg-success bg-opacity-10 text-success">Completed</span></td>
                            <td>120</td>
                            <td>
                                <button type="button" class="btn btn-link btn-sm px-1" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Edit" data-bs-original-title="Edit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg>
                                </button>
                                <button type="button" class="btn btn-link btn-sm px-1" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Edit" data-bs-original-title="Edit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path><path d="M16 5l3 3"></path></svg>
                                </button>
                                <button type="button" class="btn btn-link btn-sm px-1 text-danger delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Delete" data-bs-original-title="Delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M4 7l16 0"></path><path d="M10 11l0 6"></path><path d="M14 11l0 6"></path><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path></svg>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Digital Marketing Summit</td>
                            <td>July 21, 2025</td>
                            <td>New York, NY</td>
                            <td><span class="badge bg-warning bg-opacity-10 text-warning">Ongoing</span></td>
                            <td>450</td>
                            <td>
                                <button type="button" class="btn btn-link btn-sm px-1" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Edit" data-bs-original-title="Edit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg>
                                </button>
                                <button type="button" class="btn btn-link btn-sm px-1" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Edit" data-bs-original-title="Edit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path><path d="M16 5l3 3"></path></svg>
                                </button>
                                <button type="button" class="btn btn-link btn-sm px-1 text-danger delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Delete" data-bs-original-title="Delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M4 7l16 0"></path><path d="M10 11l0 6"></path><path d="M14 11l0 6"></path><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path></svg>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Startup Pitch Day</td>
                            <td>August 02, 2025</td>
                            <td>Austin, TX</td>
                            <td><span class="badge bg-info bg-opacity-10 text-info">Upcoming</span></td>
                            <td>85</td>
                            <td>
                                <button type="button" class="btn btn-link btn-sm px-1" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Edit" data-bs-original-title="Edit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg>
                                </button>
                                <button type="button" class="btn btn-link btn-sm px-1" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Edit" data-bs-original-title="Edit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path><path d="M16 5l3 3"></path></svg>
                                </button>
                                <button type="button" class="btn btn-link btn-sm px-1 text-danger delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Delete" data-bs-original-title="Delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M4 7l16 0"></path><path d="M10 11l0 6"></path><path d="M14 11l0 6"></path><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path></svg>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>AI & ML Conference</td>
                            <td>July 05, 2025</td>
                            <td>Seattle, WA</td>
                            <td><span class="badge bg-success bg-opacity-10 text-success">Completed</span></td>
                            <td>300</td>
                            <td>
                                <button type="button" class="btn btn-link btn-sm px-1" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Edit" data-bs-original-title="Edit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg>
                                </button>
                                <button type="button" class="btn btn-link btn-sm px-1" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Edit" data-bs-original-title="Edit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path><path d="M16 5l3 3"></path></svg>
                                </button>
                                <button type="button" class="btn btn-link btn-sm px-1 text-danger delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Delete" data-bs-original-title="Delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M4 7l16 0"></path><path d="M10 11l0 6"></path><path d="M14 11l0 6"></path><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path></svg>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Product Launch X</td>
                            <td>August 10, 2025</td>
                            <td>Chicago, IL</td>
                            <td><span class="badge bg-primary bg-opacity-10 text-primary">Scheduled</span></td>
                            <td>150</td>
                            <td>
                                <button type="button" class="btn btn-link btn-sm px-1" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Edit" data-bs-original-title="Edit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg>
                                </button>
                                <button type="button" class="btn btn-link btn-sm px-1" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Edit" data-bs-original-title="Edit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path><path d="M16 5l3 3"></path></svg>
                                </button>
                                <button type="button" class="btn btn-link btn-sm px-1 text-danger delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Delete" data-bs-original-title="Delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M4 7l16 0"></path><path d="M10 11l0 6"></path><path d="M14 11l0 6"></path><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path></svg>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
     <!-- End:: Content -->
@endsection
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@5.2.0/dist/apexcharts.min.js"></script>

    <script>
        // Monthly Event Growth
        var options = {
            chart: {
                type: 'line',
                height: 270,
                toolbar: {
                show: false
                }
            },
            series: [{
                name: 'Events',
                data: [12, 18, 22, 30, 28, 34, 40, 38, 42, 48, 50, 53] // Monthly event counts
            }],
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',  'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                title: {
                    text: 'Month'
                }
            },
            yaxis: {
                title: {
                    text: 'Number of Events'
                }
            },
            colors: ['var(--bs-primary)'], // Blue tone
            dataLabels: {
                enabled: true
            },
            stroke: {
                curve: 'smooth',
                width: 3
            },
            markers: {
                size: 5,
                colors: ['#fff'],
                strokeColors: 'var(--bs-primary)',
                strokeWidth: 2
            },
        };

        var chart = new ApexCharts(document.querySelector("#MonthlyEventGrowth"), options);
        chart.render();

        // Event Types
        var options = {
            chart: {
                height: 270,
                type: 'donut',
            },
            colors: ['var(--bs-primary)', 'var(--bs-danger-bg-subtle)', 'var(--bs-gray-500)', 'var(--bs-primary-bg-subtle)'],
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
            series: [44, 55, 67, 83],
            labels: ['Conference', 'Webinar', 'Workshop', 'Meetup'],
            legend: {
                show: true,
                position: 'bottom',
                horizontalAlign: 'center',
            }
        }
        var chart = new ApexCharts(document.querySelector("#eventTypeChart"), options);
        chart.render();

        // Data Table
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

        document.querySelectorAll('.view-speaker').forEach(button => {
            button.addEventListener('click', function () {
            const name = this.dataset.name;
            const email = this.dataset.email;
            const avatar = this.dataset.avatar;
            const designation = this.dataset.designation;
            const company = this.dataset.company;
            const topics = this.dataset.topics.split(',');
            const rating = this.dataset.rating;
            const reviews = this.dataset.reviews;
            const joined = this.dataset.joined;
            const location = this.dataset.location;
            const bio = this.dataset.bio;

            Swal.fire({
                title: `${name}`,
                html: `
                <div style="text-align: center;">
                    <img src="${avatar}" class="avatar xxl img-thumbnail shadow rounded-circle mb-3" />
                    <p><strong>${designation}</strong> at ${company}</p>
                    <p>📍 ${location}</p>
                    <div class="d-flex flex-wrap gap-1 mb-3 justify-content-center"><strong class="w-100">Topics:</strong><br>${topics.map(t => `<span class="badge text-bg-secondary">${t}</span>`).join(' ')}</div>
                    <p><strong>Rating:</strong> ⭐ ${rating} (${reviews} reviews)</p>
                    <p><strong>Joined:</strong> ${joined}</p>
                    <hr />
                    <p class="fs-14">${bio}</p>
                </div>
                `,
                confirmButtonText: 'Close',
                width: 500
            });
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