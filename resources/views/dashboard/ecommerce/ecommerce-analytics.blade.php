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
                    <div class="page-name fs-20 fw-bold ms-md-4 ms-2">eCommerce Analytics</div>
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
    <div class="row mb-4 g-3">
        <div class="col-lg-8 col-md-6 col-12">
            <div class="card rounded-4 mb-3 overflow-hidden">
                <div class="card-header px-lg-4 p-3 d-flex justify-content-between align-items-center">
                    <h6 class="card-title m-0">Overview</h6>
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"></a>
                        <ul class="dropdown-menu li_animate shadow border-0 p-2">
                            <li><a class="dropdown-item" href="#">Last 7 days</a></li>
                            <li><a class="dropdown-item" href="#">Last Month</a></li>
                            <li><a class="dropdown-item" href="#">Last Year</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body p-lg-4 p-3">
                    <ul class="nav nav-pills custom-pills bg-body border rounded-4 mb-3 overflow-hidden" id="pills-tab" role="tablist">
                        <li class="nav-item flex-fill">
                            <a class="nav-link d-flex flex-column p-4 rounded-4 active" data-bs-toggle="pill" href="#newCustomers" role="tab" aria-controls="pills-home" aria-selected="true">
                                <div class="d-flex align-items-center mb-3 hover-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                    </svg>
                                    <div class="ms-2">New Customers</div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <h2 class="h1">1,387</h2>
                                    <div class="ms-3">
                                        <span class="badge bg-danger-subtle fs-14 px-3 py-2 text-danger">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 4.16663V15.8333" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M13.3333 12.5L10 15.8333" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M6.6665 12.5L9.99984 15.8333" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            +12%
                                        </span>
                                        <small class="d-block text-muted">MoM</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item flex-fill">
                            <a class="nav-link d-flex flex-column p-4 rounded-4" data-bs-toggle="pill" href="#totalValue" role="tab" aria-controls="pills-home" aria-selected="false">
                                <div class="d-flex align-items-center mb-3 hover-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M17 8v-3a1 1 0 0 0 -1 -1h-10a2 2 0 0 0 0 4h12a1 1 0 0 1 1 1v3m0 4v3a1 1 0 0 1 -1 1h-12a2 2 0 0 1 -2 -2v-12" />
                                        <path d="M20 12v4h-4a2 2 0 0 1 0 -4h4" />
                                    </svg>
                                    <div class="ms-2">Total Value</div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <h2 class="h1">295k</h2>
                                    <div class="ms-3">
                                        <span class="badge bg-success-subtle fs-14 px-3 py-2 text-success">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 4.16663V15.8333" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M13.3333 7.49996L10 4.16663" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M6.6665 7.49996L9.99984 4.16663" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            +24%
                                        </span>
                                        <small class="d-block text-muted">MoM</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="newCustomers" role="tabpanel" aria-labelledby="pills-home-tab">
                            <h6 class="my-4 fw-normal">Customer count increased by <strong>857</strong> today. <a class="fw-bold text-primary" href="{{ route('ecommerce-customers') }}">View All</a></h6>
                            <ul class="list-unstyled d-flex justify-content-around mb-3 overflow-auto gap-3 pb-3 li_animate">
                                <li class="text-center me-4">
                                    <img src="assets/images/user-1.png" alt="Avatar" class="rounded-circle avatar xl img-thumbnail">
                                    <h6 class="mb-0 mt-1 text-truncate">Kevin Gill</h6>
                                </li>
                                <li class="text-center me-4">
                                    <img src="assets/images/user-2.png" alt="Avatar" class="rounded-circle avatar xl img-thumbnail">
                                    <h6 class="mb-0 mt-1 text-truncate">Alex Doe</h6>
                                </li>
                                <li class="text-center me-4">
                                    <img src="assets/images/user-3.png" alt="Avatar" class="rounded-circle avatar xl img-thumbnail">
                                    <h6 class="mb-0 mt-1 text-truncate">Cinid Hill</h6>
                                </li>
                                <li class="text-center me-4">
                                    <img src="assets/images/user-4.png" alt="Avatar" class="rounded-circle avatar xl img-thumbnail">
                                    <h6 class="mb-0 mt-1 text-truncate">Maryam Amiri</h6>
                                </li>
                                <li class="text-center me-4">
                                    <img src="assets/images/user-5.png" alt="Avatar" class="rounded-circle avatar xl img-thumbnail">
                                    <h6 class="mb-0 mt-1 text-truncate">John Doe</h6>
                                </li>
                                <li class="text-center me-4">
                                    <img src="assets/images/user-6.png" alt="Avatar" class="rounded-circle avatar xl img-thumbnail">
                                    <h6 class="mb-0 mt-1 text-truncate">Alex Parker</h6>
                                </li>
                                <li class="text-center me-4">
                                    <img src="assets/images/user-7.png" alt="Avatar" class="rounded-circle avatar xl img-thumbnail">
                                    <h6 class="mb-0 mt-1 text-truncate">Kelvin Francis</h6>
                                </li>
                                <li class="text-center me-4">
                                    <img src="assets/images/user-8.png" alt="Avatar" class="rounded-circle avatar xl img-thumbnail">
                                    <h6 class="mb-0 mt-1 text-truncate">Maryam Amiri</h6>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="totalValue" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div id="totalValueChart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card rounded-4 mb-3 overflow-hidden">
                <div class="card-header px-lg-4 p-3 d-flex justify-content-between align-items-center">
                    <h6 class="card-title m-0">Product Overview</h6>
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"></a>
                        <ul class="dropdown-menu li_animate shadow border-0 p-2">
                            <li><a class="dropdown-item" href="#">Last 7 days</a></li>
                            <li><a class="dropdown-item" href="#">Last Month</a></li>
                            <li><a class="dropdown-item" href="#">Last Year</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body p-lg-4 p-3">
                    <div class="d-flex mb-4">
                        <h2 class="h1 d-flex align-items-start"><small class="text-muted h3">$</small>29.5M</h2>
                        <div class="d-flex flex-column ms-3">
                            <span class="badge bg-success-subtle fs-14 px-3 py-2 text-success">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 4.16663V15.8333" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M13.3333 7.49996L10 4.16663" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M6.6665 7.49996L9.99984 4.16663" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                +17%
                            </span>
                            <small class="d-block text-muted">MoM</small>
                        </div>
                    </div>
                    <div id="productOverviewChart"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
            <div class="card rounded-4 mb-3 overflow-hidden">
                <div class="card-header px-lg-4 p-3 d-flex justify-content-between align-items-center">
                    <h6 class="card-title m-0">Total Orders</h6>
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"></a>
                        <ul class="dropdown-menu li_animate shadow border-0 p-2">
                            <li><a class="dropdown-item" href="#">Last 7 days</a></li>
                            <li><a class="dropdown-item" href="#">Last Month</a></li>
                            <li><a class="dropdown-item" href="#">Last Year</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body d-flex align-items-start p-lg-4 p-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M17.5 17.5m-2.5 0a2.5 2.5 0 1 0 5 0a2.5 2.5 0 1 0 -5 0"></path><path d="M6 8v11a1 1 0 0 0 1.806 .591l3.694 -5.091v.055"></path><path d="M6 8h15l-3.5 7l-7.1 -.747a4 4 0 0 1 -3.296 -2.493l-2.853 -7.13a1 1 0 0 0 -.928 -.63h-1.323"></path></svg>
                    <div class="flex-fill ms-3">
                        <div class="fw-bold"><span class="h4 mb-0">401</span><span class="text-success ms-1">2.55%</span></div>
                        <div class="text-muted small">Total Orders</div>
                        <div class="mt-3">
                            <span class="small d-flex justify-content-between">This Week<span class="fw-bold">248</span></span>
                            <div class="progress mt-1" style="height: 3px;">
                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 87%;"></div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <span class="small d-flex justify-content-between">Last Week<span class="fw-bold">148</span></span>
                            <div class="progress mt-1" style="height: 3px;">
                                <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="44" aria-valuemin="0" aria-valuemax="100" style="width: 44%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card rounded-4 mb-3 overflow-hidden">
                <div class="card-header px-lg-4 p-3 d-flex justify-content-between align-items-center">
                    <h6 class="card-title m-0">Best Sellers</h6>
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"></a>
                        <ul class="dropdown-menu li_animate shadow border-0 p-2">
                            <li><a class="dropdown-item" href="#"></a></li>
                            <li><a class="dropdown-item" href="#">Last 7 days</a></li>
                            <li><a class="dropdown-item" href="#">Last Month</a></li>
                            <li><a class="dropdown-item" href="#">Last Year</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body p-lg-4 p-3">
                    <ul class="list-unstyled mb-0 d-flex flex-column gap-lg-4 gap-3 li_animate">
                        <li class="product-row">
                            <div class="align-items-center d-flex gap-lg-3 gap-2 ps-lg-2">
                                <img width="60" class="img-thumbnail rounded-3" src="assets/images/product/earbuds.jpg" alt="product image">
                                <div class="position-relative">
                                    <h6>Earbuds with noise cancellation</h6>
                                    <p class="fs-14 mb-0">Electronics</p>
                                    <div class="bg-card d-flex gap-3 action opacity-0 position-absolute px-3 py-1 rounded-pill border">
                                        <button type="button" class="btn btn-link fs-12 p-0 text-primary">Share</button>
                                        <button type="button" class="btn btn-link fs-12 p-0 text-warning">Edit</button>
                                        <button type="button" class="btn btn-link fs-12 p-0 text-danger">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-row">
                            <div class="align-items-center d-flex gap-lg-3 gap-2 ps-lg-2">
                                <img width="60" class="img-thumbnail rounded-3" src="assets/images/product/gaming-laptop.jpg" alt="product image">
                                <div class="position-relative">
                                    <h6>Gaming Laptop G11</h6>
                                    <p class="fs-14 mb-0">Electronics</p>
                                    <div class="bg-card d-flex gap-3 action opacity-0 position-absolute px-3 py-1 rounded-pill border">
                                        <button type="button" class="btn btn-link fs-12 p-0 text-primary">Share</button>
                                        <button type="button" class="btn btn-link fs-12 p-0 text-warning">Edit</button>
                                        <button type="button" class="btn btn-link fs-12 p-0 text-danger">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-row">
                            <div class="align-items-center d-flex gap-lg-3 gap-2 ps-lg-2">
                                <img width="60" class="img-thumbnail rounded-3" src="assets/images/product/shoes.jpg" alt="product image">
                                <div class="position-relative">
                                    <h6>Running Shoes</h6>
                                    <p class="fs-14 mb-0">Footwear</p>
                                    <div class="bg-card d-flex gap-3 action opacity-0 position-absolute px-3 py-1 rounded-pill border">
                                        <button type="button" class="btn btn-link fs-12 p-0 text-primary">Share</button>
                                        <button type="button" class="btn btn-link fs-12 p-0 text-warning">Edit</button>
                                        <button type="button" class="btn btn-link fs-12 p-0 text-danger">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-row">
                            <div class="align-items-center d-flex gap-lg-3 gap-2 ps-lg-2">
                                <img width="60" class="img-thumbnail rounded-3" src="assets/images/product/smart-watch.jpg" alt="product image">
                                <div class="position-relative">
                                    <h6>Smart Watch Series 6</h6>
                                    <p class="fs-14 mb-0">Electronics</p>
                                    <div class="bg-card d-flex gap-3 action opacity-0 position-absolute px-3 py-1 rounded-pill border">
                                        <button type="button" class="btn btn-link fs-12 p-0 text-primary">Share</button>
                                        <button type="button" class="btn btn-link fs-12 p-0 text-warning">Edit</button>
                                        <button type="button" class="btn btn-link fs-12 p-0 text-danger">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href="{{ route('product-list') }}" class="btn btn-outline-primary btn-lg w-100">View All</a></li>
                    </ul>
                </div>
            </div>
            <div class="card rounded-4 mb-3">
                <div class="card-body p-3 p-xl-4">
                    <div class="d-flex gap-2 align-items-center mb-4">
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="50"  height="50"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-credit-card-refund"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 19h-6a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v4.5" /><path d="M3 10h18" /><path d="M7 15h.01" /><path d="M11 15h2" /><path d="M16 19h6" /><path d="M19 16l-3 3l3 3" /></svg>
                        <div>
                            <h5 class="mb-0">Return & Refund Requests</h5>
                        </div>
                    </div>
                    <p class="text-muted">Action required: 29 open refund requests, including 05 new ones.</p>
                    <a href="#" class="btn btn-outline-primary w-100">View List</a>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('scripts')
<script>
        // Total Value Chart
        var options = {
            chart: {
                height: 260,
                type: "area",
                toolbar: {
                    show: false
                },
            },
            dataLabels: {
                enabled: false
            },
            toolbar: {
                show: false
            },
            series: [
                {
                    name: "$",
                    data: [45610, 38930, 45000, 32000, 23915, 35000, 52000]
                }
            ],
            colors: ['#9E9896'],
            stroke: {
                    show: true,
                    width: 2,
                },
            fill: {
                type: "gradient",
                gradient: {
                    shadeIntensity: 1,
                    opacityFrom: 0.7,
                    opacityTo: 0.9,
                    stops: [0, 90, 100]
                }
            },
            xaxis: {
                categories: ["Jan","Feb","Mar","Apr","May","Jun","Jul"]
            }
        };
        var chart = new ApexCharts(document.querySelector("#totalValueChart"), options);
        chart.render();

        // Product Overview Chart
        $(document).ready(function () {
            var options = {
                chart: {
                    height: 340,
                    type: 'bar',
                },
                colors: ['var(--bs-primary)', '#9E9896', '#868e96'],
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '55%',
                        endingShape: 'rounded'
                    },
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    show: true,
                    width: 2,
                    colors: ['transparent']
                },
                series: [{
                    name: 'Net Profit',
                    data: [44, 32, 37, 56, 58, 55, 88, 22, 67, 33, 88, 18]
                }],
                xaxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'July', 'Aug', 'Sept','Oct','Nov','Dec'],
                },
                yaxis: {
                    title: {
                        text: '$ (thousands)'
                    }
                },
                fill: {
                    opacity: 1
                },
                tooltip: {
                    y: {
                        formatter: function (val) {
                            return "$ " + val + " thousands"
                        }
                    }
                }
            }
            var chart = new ApexCharts(document.querySelector("#productOverviewChart"), options);
            chart.render();
        });
    </script>
@endpush