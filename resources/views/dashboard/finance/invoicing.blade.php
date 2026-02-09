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
                    <div class="page-name fs-20 fw-bold ms-md-4 ms-2 position-relative">Invoices</div>
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
                            <a href="{{ route('create-invoice') }}" class="text-decoration-none hover-svg">
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
    <div class="row">
        <div class="col-12">
            <div class="border-bg mb-5 position-relative px-3 py-4 rounded-4">
                <div class="row g-3 align-items-center">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="form-floating">
                            <select class="form-select" id="monthSelect">
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
                                <input type="text" class="form-control" id="searchInvoice" placeholder="Search...">
                                <label for="searchInvoice">Search Invoice...</label>
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
            <div class="border-top mb-4 position-relative">
                <span class="position-absolute end-0 text-primary fw-bold" style="top: -28px;">Total: 754</span>
                <table class="Data_Table table align-middle mb-0 w-100 table-row table-hover">
                    <thead>
                        <tr>
                            <th>
                                <div class="form-check">
                                    <input class="form-check-input select-all" id="selectAll" type="checkbox" value="">
                                </div>
                            </th>
                            <th>Invoice</th>
                            <th>Name</th>
                            <th>Total</th>
                            <th>Date</th>
                            <th>Due Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input class="form-check-input" id="select1" type="checkbox" value="">
                            </td>
                            <td>#AI0011</td>
                            <td>
                                <div class="d-flex gap-2 align-items-center">
                                    <img src="assets/images/user-1.png" class="rounded-circle sm avatar" alt="avatar">
                                    <div>Andew Jon</div>
                                </div>
                            </td>
                            <td>USD 12,820</td>
                            <td>Aug 16 2025</td>
                            <td>Aug 20 2025</td>
                            <td>
                                <button type="button" class="btn btn-link btn-sm px-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" /></svg>
                                </button>
                                <button type="button" class="btn btn-link btn-sm px-1" data-bs-toggle="modal" data-bs-target="#invoice_send">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" /><path d="M3 7l9 6l9 -6" /></svg>
                                </button>
                                <button type="button" class="btn btn-link btn-sm px-1" data-bs-toggle="modal" data-bs-target="#invoice_detail">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" /><path d="M7 11l5 5l5 -5" /><path d="M12 4l0 12" /></svg>
                                </button>
                                <button type="button" class="btn btn-link btn-sm px-1 text-danger delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input class="form-check-input" id="select2" type="checkbox" value="">
                            </td>
                            <td>#AI0012</td>
                            <td>
                                <div class="d-flex gap-2 align-items-center">
                                    <img src="assets/images/user-2.png" class="rounded-circle sm avatar" alt="avatar">
                                    <div>Orlando Lentz</div>
                                </div>
                            </td>
                            <td>USD 2,000</td>
                            <td>Aug 15 2025</td>
                            <td>Aug 15 2025</td>
                            <td>
                                <button type="button" class="btn btn-link btn-sm px-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" /></svg>
                                </button>
                                <button type="button" class="btn btn-link btn-sm px-1" data-bs-toggle="modal" data-bs-target="#invoice_send">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" /><path d="M3 7l9 6l9 -6" /></svg>
                                </button>
                                <button type="button" class="btn btn-link btn-sm px-1" data-bs-toggle="modal" data-bs-target="#invoice_detail">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" /><path d="M7 11l5 5l5 -5" /><path d="M12 4l0 12" /></svg>
                                </button>
                                <button type="button" class="btn btn-link btn-sm px-1 text-danger delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input class="form-check-input" id="select3" type="checkbox" value="">
                            </td>
                            <td>#AI0025</td>
                            <td>
                                <div class="d-flex gap-2 align-items-center">
                                    <img src="assets/images/user-3.png" class="rounded-circle sm avatar" alt="avatar">
                                    <div>Marshall Nichols</div>
                                </div>
                            </td>
                            <td>USD 8,000</td>
                            <td>Aug 10 2025</td>
                            <td>Aug 12 2025</td>
                            <td>
                                <button type="button" class="btn btn-link btn-sm px-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" /></svg>
                                </button>
                                <button type="button" class="btn btn-link btn-sm px-1" data-bs-toggle="modal" data-bs-target="#invoice_send">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" /><path d="M3 7l9 6l9 -6" /></svg>
                                </button>
                                <button type="button" class="btn btn-link btn-sm px-1" data-bs-toggle="modal" data-bs-target="#invoice_detail">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" /><path d="M7 11l5 5l5 -5" /><path d="M12 4l0 12" /></svg>
                                </button>
                                <button type="button" class="btn btn-link btn-sm px-1 text-danger delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input class="form-check-input" id="customCheck1" type="checkbox" value="">
                            </td>
                            <td>#AI0023</td>
                            <td>
                                <div class="d-flex gap-2 align-items-center">
                                    <img src="assets/images/user-4.png" class="rounded-circle sm avatar" alt="avatar">
                                    <div>Nellie Maxwell</div>
                                </div>
                            </td>
                            <td>USD 3,500</td>
                            <td>Aug 07 2025</td>
                            <td>Aug 08 2025</td>
                            <td>
                                <button type="button" class="btn btn-link btn-sm px-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" /></svg>
                                </button>
                                <button type="button" class="btn btn-link btn-sm px-1" data-bs-toggle="modal" data-bs-target="#invoice_send">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" /><path d="M3 7l9 6l9 -6" /></svg>
                                </button>
                                <button type="button" class="btn btn-link btn-sm px-1" data-bs-toggle="modal" data-bs-target="#invoice_detail">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" /><path d="M7 11l5 5l5 -5" /><path d="M12 4l0 12" /></svg>
                                </button>
                                <button type="button" class="btn btn-link btn-sm px-1 text-danger delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input class="form-check-input" id="customCheck2" type="checkbox" value="">
                            </td>
                            <td>#AI0026</td>
                            <td>
                                <div class="d-flex gap-2 align-items-center">
                                    <img src="assets/images/user-5.png" class="rounded-circle sm avatar" alt="avatar">
                                    <div>Marshall Nichols</div>
                                </div>
                            </td>
                            <td>USD 250</td>
                            <td>Aug 06 2025</td>
                            <td>Aug 06 2025</td>
                            <td>
                                <button type="button" class="btn btn-link btn-sm px-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" /></svg>
                                </button>
                                <button type="button" class="btn btn-link btn-sm px-1" data-bs-toggle="modal" data-bs-target="#invoice_send">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" /><path d="M3 7l9 6l9 -6" /></svg>
                                </button>
                                <button type="button" class="btn btn-link btn-sm px-1" data-bs-toggle="modal" data-bs-target="#invoice_detail">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" /><path d="M7 11l5 5l5 -5" /><path d="M12 4l0 12" /></svg>
                                </button>
                                <button type="button" class="btn btn-link btn-sm px-1 text-danger delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input class="form-check-input" id="customCheck3" type="checkbox" value="">
                            </td>
                            <td>#AI0065</td>
                            <td>
                                <div class="d-flex gap-2 align-items-center">
                                    <img src="assets/images/user-6.png" class="rounded-circle sm avatar" alt="avatar">
                                    <div>Issa Bell</div>
                                </div>
                            </td>
                            <td>USD 9,150</td>
                            <td>Aug 03 2025</td>
                            <td>Aug 05 2025</td>
                            <td>
                                <button type="button" class="btn btn-link btn-sm px-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" /></svg>
                                </button>
                                <button type="button" class="btn btn-link btn-sm px-1" data-bs-toggle="modal" data-bs-target="#invoice_send">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" /><path d="M3 7l9 6l9 -6" /></svg>
                                </button>
                                <button type="button" class="btn btn-link btn-sm px-1" data-bs-toggle="modal" data-bs-target="#invoice_detail">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" /><path d="M7 11l5 5l5 -5" /><path d="M12 4l0 12" /></svg>
                                </button>
                                <button type="button" class="btn btn-link btn-sm px-1 text-danger delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input class="form-check-input" id="customCheck4" type="checkbox" value="">
                            </td>
                            <td>#AI0015</td>
                            <td>
                                <div class="d-flex gap-2 align-items-center">
                                    <img src="assets/images/user-7.png" class="rounded-circle sm avatar" alt="avatar">
                                    <div>Dean Otto</div>
                                </div>
                            </td>
                            <td>USD 5,000</td>
                            <td>Aug 03 2025</td>
                            <td>Aug 05 2025</td>
                            <td>
                                <button type="button" class="btn btn-link btn-sm px-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" /></svg>
                                </button>
                                <button type="button" class="btn btn-link btn-sm px-1" data-bs-toggle="modal" data-bs-target="#invoice_send">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" /><path d="M3 7l9 6l9 -6" /></svg>
                                </button>
                                <button type="button" class="btn btn-link btn-sm px-1" data-bs-toggle="modal" data-bs-target="#invoice_detail">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" /><path d="M7 11l5 5l5 -5" /><path d="M12 4l0 12" /></svg>
                                </button>
                                <button type="button" class="btn btn-link btn-sm px-1 text-danger delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input class="form-check-input" id="customCheck5" type="checkbox" value="">
                            </td>
                            <td>#AI0029</td>
                            <td>
                                <div class="d-flex gap-2 align-items-center">
                                    <img src="assets/images/user-8.png" class="rounded-circle sm avatar" alt="avatar">
                                    <div>Comeren Diaz</div>
                                </div>
                            </td>
                            <td>USD 2,050</td>
                            <td>Aug 03 2025</td>
                            <td>Aug 05 2025</td>
                            <td>
                                <button type="button" class="btn btn-link btn-sm px-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" /></svg>
                                </button>
                                <button type="button" class="btn btn-link btn-sm px-1" data-bs-toggle="modal" data-bs-target="#invoice_send">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" /><path d="M3 7l9 6l9 -6" /></svg>
                                </button>
                                <button type="button" class="btn btn-link btn-sm px-1" data-bs-toggle="modal" data-bs-target="#invoice_detail">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" /><path d="M7 11l5 5l5 -5" /><path d="M12 4l0 12" /></svg>
                                </button>
                                <button type="button" class="btn btn-link btn-sm px-1 text-danger delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input class="form-check-input" id="customCheck6" type="checkbox" value="">
                            </td>
                            <td>#AI0028</td>
                            <td>
                                <div class="d-flex gap-2 align-items-center">
                                    <img src="assets/images/user-2.png" class="rounded-circle sm avatar" alt="avatar">
                                    <div>Chris Fox</div>
                                </div>
                            </td>
                            <td>USD 2,000</td>
                            <td>Aug 03 2025</td>
                            <td>Aug 05 2025</td>
                            <td>
                                <button type="button" class="btn btn-link btn-sm px-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" /></svg>
                                </button>
                                <button type="button" class="btn btn-link btn-sm px-1" data-bs-toggle="modal" data-bs-target="#invoice_send">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" /><path d="M3 7l9 6l9 -6" /></svg>
                                </button>
                                <button type="button" class="btn btn-link btn-sm px-1" data-bs-toggle="modal" data-bs-target="#invoice_detail">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" /><path d="M7 11l5 5l5 -5" /><path d="M12 4l0 12" /></svg>
                                </button>
                                <button type="button" class="btn btn-link btn-sm px-1 text-danger delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input class="form-check-input" id="customCheck7" type="checkbox" value="">
                            </td>
                            <td>#AI0035</td>
                            <td>
                                <div class="d-flex gap-2 align-items-center">
                                    <img src="assets/images/user-3.png" class="rounded-circle sm avatar" alt="avatar">
                                    <div>Bucky Barnes</div>
                                </div>
                            </td>
                            <td>USD 1,100</td>
                            <td>Sept 03 2025</td>
                            <td>Sept 05 2025</td>
                            <td>
                                <button type="button" class="btn btn-link btn-sm px-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" /></svg>
                                </button>
                                <button type="button" class="btn btn-link btn-sm px-1" data-bs-toggle="modal" data-bs-target="#invoice_send">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" /><path d="M3 7l9 6l9 -6" /></svg>
                                </button>
                                <button type="button" class="btn btn-link btn-sm px-1" data-bs-toggle="modal" data-bs-target="#invoice_detail">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" /><path d="M7 11l5 5l5 -5" /><path d="M12 4l0 12" /></svg>
                                </button>
                                <button type="button" class="btn btn-link btn-sm px-1 text-danger delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Modal: invoice send -->
    <div class="modal fade" id="invoice_send" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content rounded-4">
                <div class="modal-header">
                    <h5 class="modal-title">Invoice #RA0011</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body custom_scroll">
                    <table class="card p-2">
                        <tr>
                            <td></td>
                            <td style="text-align: center; width: 100%;">
                            <table class="table table-borderless mb-0" width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                <td style="text-align: center;">
                                    <h2 style="margin-bottom: 0;">$33.98 Paid</h2>
                                </td>
                                </tr>
                                <tr>
                                <td style="padding-bottom: 30px 0; padding-top: 10px; text-align: center;">
                                    <h4 style="margin-bottom: 0;">Thanks for using TTM Inc.</h4>
                                </td>
                                </tr>
                                <tr>
                                <td style="padding: 20px 0;">
                                    <table width="100%">
                                    <tr>
                                        <td> Attn: <strong>Daniel Marek</strong> 43-190 Mikolow, Poland<br> Email: marek@daniel.com<br> Phone: +48 123 456 789<br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <table class="table table-borderless table-striped mb-0" cellpadding="0" cellspacing="0">
                                            <tr>
                                            <td style="text-align: left;">Extended License</td>
                                            <td style="text-align: right;">$19.99</td>
                                            </tr>
                                            <tr>
                                            <td style="text-align: left;">1 year subcription</td>
                                            <td style="text-align: right;">$9.99</td>
                                            </tr>
                                            <tr>
                                            <td style="text-align: left;">Instalation and Customization</td>
                                            <td style="text-align: right;">$4.00</td>
                                            </tr>
                                            <tr>
                                            <td style="text-align: right;" width="80%"><strong>Total</strong></td>
                                            <td style="text-align: right;">$33.98</td>
                                            </tr>
                                        </table>
                                        </td>
                                    </tr>
                                    </table>
                                </td>
                                </tr>
                                <tr>
                                <td style="padding: 10px 0; text-align: center;">
                                    <a href="#">View in browser</a>
                                </td>
                                </tr>
                                <tr>
                                <td style="padding: 0; text-align: center;"> TTM Inc. 70 Bowman St. South Windsor, CT 06074 </td>
                                </tr>
                            </table>
                            <table width="100%" style="text-align: center; margin-top: 40px;">
                                <tr>
                                <td class="aligncenter content-block">Questions? Email <a href="mailto:">info@thememakker.com</a></td>
                                </tr>
                            </table>
                            </td>
                            <td></td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Send Email</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal: invoice detail -->
    <div class="modal fade" id="invoice_detail" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content rounded-4">
                <div class="modal-header">
                    <h5 class="modal-title">Invoice #RA0011</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body custom_scroll">
                    <table class="table table-borderless mb-0">
                        <tbody>
                            <tr>
                            <td> Invoice <strong>01/Nov/2025</strong>
                                </th>
                            <td class="text-end">
                                <span class="text-danger"> <strong>Status:</strong> Pending</span>
                            </td>
                            </tr>
                            <tr>
                            <td>
                                <div>From:</div>
                                <div class="fs-6 fw-bold mb-1">Webz Poland</div>
                                <div>Madalinskiego 8</div>
                                <div>71-101 Szczecin, Poland</div>
                                <div>Email: info@webz.com.pl</div>
                                <div>Phone: +48 444 666 3333</div>
                            </td>
                            <td class="text-end">
                                <div>To:</div>
                                <div class="fs-6 fw-bold mb-1">Bob Mart</div>
                                <div>Attn: Daniel Marek</div>
                                <div>43-190 Mikolow, Poland</div>
                                <div>Email: marek@daniel.com</div>
                                <div>Phone: +48 123 456 789</div>
                            </td>
                            </tr>
                            <tr>
                            <td colspan="2">
                                <table class="table table-borderless table-striped mb-0">
                                <thead>
                                    <tr>
                                    <th class="text-center">#</th>
                                    <th>Item</th>
                                    <th>Description</th>
                                    <th class="text-end">Unit Cost</th>
                                    <th class="text-center">Qty</th>
                                    <th class="text-end">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td class="text-center">1</td>
                                    <td>Origin License</td>
                                    <td>Extended License</td>
                                    <td class="text-end">$999,00</td>
                                    <td class="text-center">1</td>
                                    <td class="text-end">$999,00</td>
                                    </tr>
                                    <tr>
                                    <td class="text-center">2</td>
                                    <td>Custom Services</td>
                                    <td>Instalation and Customization (cost per hour)</td>
                                    <td class="text-end">$150,00</td>
                                    <td class="text-center">20</td>
                                    <td class="text-end">$3.000,00</td>
                                    </tr>
                                    <tr>
                                    <td class="text-center">3</td>
                                    <td>Hosting</td>
                                    <td>1 year subcription</td>
                                    <td class="text-end">$499,00</td>
                                    <td class="text-center">1</td>
                                    <td class="text-end">$499,00</td>
                                    </tr>
                                    <tr>
                                    <td class="text-center">4</td>
                                    <td>Platinum Support</td>
                                    <td>1 year subcription 24/7</td>
                                    <td class="text-end">$3.999,00</td>
                                    <td class="text-center">1</td>
                                    <td class="text-end">$3.999,00</td>
                                    </tr>
                                    <tr>
                                    <td colspan="3">
                                        <h6>Terms &amp; Condition</h6>
                                        <p class="text-muted">You know, being a test pilot isn't always the healthiest business in the world. We predict too much for the next year and yet far too little for the next 10.</p>
                                    </td>
                                    <td colspan="3">
                                        <table class="table table-borderless mb-0">
                                        <tbody>
                                            <tr>
                                            <td><strong>Subtotal</strong></td>
                                            <td class="text-end">$8.497,00</td>
                                            </tr>
                                            <tr>
                                            <td><strong>VAT (10%)</strong></td>
                                            <td class="text-end">$679,76</td>
                                            </tr>
                                            <tr>
                                            <td><strong>Total</strong></td>
                                            <td class="text-end"><strong>$7.477,36</strong></td>
                                            </tr>
                                        </tbody>
                                        </table>
                                    </td>
                                    </tr>
                                </tbody>
                                </table>
                            </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Print</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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