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
                    <div class="page-name fs-20 fw-bold ms-md-4 ms-2 position-relative">Customer List</div>
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
                            <a href="#" class="text-decoration-none hover-svg" data-bs-toggle="modal" data-bs-target="#addCustomer">
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
        <div class="d-flex flex-wrap flex-row align-items-center px-lg-4 gap-3 gap-lg-4">
            <div>
                <h5 class="mb-1 fw-bold">10,245</h5>
                <small class="text-muted">🧍 Total Customers</small>
            </div>
            <div class="vr"></div>
            <div>
                <h5 class="mb-1 fw-bold">1,120</h5>
                <small class="text-muted">+ New This Month</small>
            </div>
            <div class="vr"></div>
            <div>
                <h5 class="mb-1 fw-bold">235</h5>
                <small class="text-muted">📉 Churned</small>
            </div>
            <div class="vr"></div>
            <div>
                <h5 class="mb-1 fw-bold">8,150</h5>
                <small class="text-muted">🟢 Active</small>
            </div>
            <div class="d-none d-sm-block ms-xl-auto">
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
        <div id="Customer_Chart"></div>
        <div class="position-relative">
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="Search Customers ...">
                <label for="floatingInput">Search Customers ...</label>
            </div>
            <button type="button" class="btn btn-dark position-absolute top-50 end-0 translate-middle-y me-2">Search</button>
        </div>
        <div class="d-flex top-100 position-absolute" style="height: 48px; left: 50px;">
            <div class="vr border-bg opacity-100"></div>
            <div class="vr border-bg opacity-100 ms-1"></div>
        </div>
    </div>
    <div class="border-top mb-4 position-relative">
        <span class="position-absolute end-0 text-primary fw-bold" style="top: -28px;">Total Customers: 1,143</span>
        <table class="Data_Table table align-middle mb-0 w-100 table-row table-hover">
            <thead>
                <tr>
                    <th class="py-2 fw-normal fs-12 text-muted text-uppercase">
                        <div class="d-flex align-items-center gap-3">
                            <div class="form-check mb-0 fs-6">
                                <input class="form-check-input" type="checkbox" value="" id="CustomerId">
                            </div>
                            Customer ID
                        </div>
                    </th>
                    <th class="py-2 fw-normal fs-12 text-muted text-uppercase">Name</th>
                    <th class="py-2 fw-normal fs-12 text-muted text-uppercase">Total Orders</th>
                    <th class="py-2 fw-normal fs-12 text-muted text-uppercase">Total Spent</th>
                    <th class="py-2 fw-normal fs-12 text-muted text-uppercase">Status</th>
                    <th class="py-2 fw-normal fs-12 text-muted text-uppercase">Last Order</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="align-items-center d-flex gap-lg-3 gap-2 ps-lg-2">
                            <div class="form-check mb-0">
                                <input class="form-check-input" type="checkbox" value="" id="2905638">
                            </div>
                            <p class="mb-0">#2905638</p>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="assets/images/user-9.png" class="rounded-circle avatar md" alt="">
                            <div class="ms-2 mb-0">Andew Jon</div>
                        </div>
                    </td>
                    <td>54</td>
                    <td>$433</td>
                    <td><span class="rounded-pill bg-success-subtle fs-12 fw-medium px-2 py-1 text-success">Active</span></td>
                    <td>Mar 15, 2025</td>
                </tr>
                <tr>
                    <td>
                        <div class="align-items-center d-flex gap-lg-3 gap-2 ps-lg-2">
                            <div class="form-check mb-0">
                                <input class="form-check-input" type="checkbox" value="" id="473561">
                            </div>
                            <p class="mb-0">#473561</p>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="assets/images/user-7.png" class="rounded-circle avatar md" alt="">
                            <div class="ms-2 mb-0">Bucky Barnes</div>
                        </div>
                    </td>
                    <td>23</td>
                    <td>$1,000</td>
                    <td><span class="rounded-pill bg-danger-subtle fs-12 fw-medium px-2 py-1 text-danger">Inactive</span></td>
                    <td>Oct 16, 2022</td>
                </tr>
                <tr>
                    <td>
                        <div class="align-items-center d-flex gap-lg-3 gap-2 ps-lg-2">
                            <div class="form-check mb-0">
                                <input class="form-check-input" type="checkbox" value="" id="561002">
                            </div>
                            <p class="mb-0">#561002</p>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="assets/images/user-4.png" class="rounded-circle avatar md" alt="">
                            <div class="ms-2 mb-0">Chris Fox</div>
                        </div>
                    </td>
                    <td>1,009</td>
                    <td>$710</td>
                    <td><span class="rounded-pill bg-success-subtle fs-12 fw-medium px-2 py-1 text-success">Active</span></td>
                    <td>May 29, 2025</td>
                </tr>
                <tr>
                    <td>
                        <div class="align-items-center d-flex gap-lg-3 gap-2 ps-lg-2">
                            <div class="form-check mb-0">
                                <input class="form-check-input" type="checkbox" value="" id="998123">
                            </div>
                            <p class="mb-0">#998123</p>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="assets/images/user-1.png" class="rounded-circle avatar md" alt="">
                            <div class="ms-2 mb-0">Comeren Diaz</div>
                        </div>
                    </td>
                    <td>875</td>
                    <td>$620</td>
                    <td><span class="rounded-pill bg-success-subtle fs-12 fw-medium px-2 py-1 text-success">Active</span></td>
                    <td>Sep 12, 2025</td>
                </tr>
                <tr>
                    <td>
                        <div class="align-items-center d-flex gap-lg-3 gap-2 ps-lg-2">
                            <div class="form-check mb-0">
                                <input class="form-check-input" type="checkbox" value="" id="340876">
                            </div>
                            <p class="mb-0">#340876</p>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="assets/images/user-6.png" class="rounded-circle avatar md" alt="">
                            <div class="ms-2 mb-0">Dean Otto</div>
                        </div>
                    </td>
                    <td>245</td>
                    <td>$2,512</td>
                    <td><span class="rounded-pill bg-danger-subtle fs-12 fw-medium px-2 py-1 text-danger">Inactive</span></td>
                    <td>June 18, 2022</td>
                </tr>
                <tr>
                    <td>
                        <div class="align-items-center d-flex gap-lg-3 gap-2 ps-lg-2">
                            <div class="form-check mb-0">
                                <input class="form-check-input" type="checkbox" value="" id="154789">
                            </div>
                            <p class="mb-0">#154789</p>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="assets/images/user-4.png" class="rounded-circle avatar md" alt="">
                            <div class="ms-2 mb-0">Issa Bell</div>
                        </div>
                    </td>
                    <td>74</td>
                    <td>$5,443</td>
                    <td><span class="rounded-pill bg-success-subtle fs-12 fw-medium px-2 py-1 text-success">Active</span></td>
                    <td>Dec 1, 2025</td>
                </tr>
                <tr>
                    <td>
                        <div class="align-items-center d-flex gap-lg-3 gap-2 ps-lg-2">
                            <div class="form-check mb-0">
                                <input class="form-check-input" type="checkbox" value="" id="923651">
                            </div>
                            <p class="mb-0">#923651</p>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="assets/images/user-5.png" class="rounded-circle avatar md" alt="">
                            <div class="ms-2 mb-0">Jack Bird</div>
                        </div>
                    </td>
                    <td>10</td>
                    <td>$1,834</td>
                    <td><span class="rounded-pill bg-success-subtle fs-12 fw-medium px-2 py-1 text-success">Active</span></td>
                    <td>Feb 18, 2025</td>
                </tr>
                <tr>
                    <td>
                        <div class="align-items-center d-flex gap-lg-3 gap-2 ps-lg-2">
                            <div class="form-check mb-0">
                                <input class="form-check-input" type="checkbox" value="" id="365178">
                            </div>
                            <p class="mb-0">#365178</p>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="assets/images/user-7.png" class="rounded-circle avatar md" alt="">
                            <div class="ms-2 mb-0">Orlando Lentz</div>
                        </div>
                    </td>
                    <td>29</td>
                    <td>$1,643</td>
                    <td><span class="rounded-pill bg-success-subtle fs-12 fw-medium px-2 py-1 text-success">Active</span></td>
                    <td>Jan 11, 2025</td>
                </tr>
                <tr>
                    <td>
                        <div class="align-items-center d-flex gap-lg-3 gap-2 ps-lg-2">
                            <div class="form-check mb-0">
                                <input class="form-check-input" type="checkbox" value="" id="763522">
                            </div>
                            <p class="mb-0">#763522</p>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="assets/images/user-7.png" class="rounded-circle avatar md" alt="">
                            <div class="ms-2 mb-0">Comeren Diaz</div>
                        </div>
                    </td>
                    <td>143</td>
                    <td>$2,100</td>
                    <td><span class="rounded-pill bg-success-subtle fs-12 fw-medium px-2 py-1 text-success">Active</span></td>
                    <td>June 15, 2025</td>
                </tr>
                <tr>
                    <td>
                        <div class="align-items-center d-flex gap-lg-3 gap-2 ps-lg-2">
                            <div class="form-check mb-0">
                                <input class="form-check-input" type="checkbox" value="" id="783542">
                            </div>
                            <p class="mb-0">#783542</p>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="assets/images/user-3.png" class="rounded-circle avatar md" alt="">
                            <div class="ms-2 mb-0">Nellie Maxwell</div>
                        </div>
                    </td>
                    <td>23</td>
                    <td>$1,643</td>
                    <td><span class="rounded-pill bg-danger-subtle fs-12 fw-medium px-2 py-1 text-danger">Inactive</span></td>
                    <td>May 23, 2022</td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <!-- Modal:: Add Customer -->
    <div class="modal fade" id="addCustomer" tabindex="-1" aria-labelledby="addCustomerLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-4">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addCustomerLabel">Add Customer</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="formFile" class="form-label">Select Avatar</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>
                        <div class="col-6 control-group">
                            <label class="form-label" for="customerId">Customer Id</label>
                            <input type="text" class="form-control" id="customerId" placeholder="Enter Customer Id">
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
                            <label class="form-label" for="totalOrder">Total Order</label>
                            <input type="number" class="form-control" id="totalOrder" placeholder="Total Order">
                        </div>
                        <div class="col-6 control-group">
                            <label class="form-label" for="totalSpent">Total Spent</label>
                            <input type="number" class="form-control" id="totalSpent" placeholder="Total Spent">
                        </div>
                        <div class="col-6 control-group">
                            <label class="form-label" for="statusAction">Status</label>
                            <select class="form-select" id="statusAction">
                                <option value="1">Active</option>
                                <option value="2">Inactive</option>
                            </select>
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
        } );
        var options = {
            chart: {
                type: 'line',
                height: 300,
                toolbar: {
                    show: false
                }
            },
            colors: ['var(--bs-primary)', 'var(--bs-gray-500)'],
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'smooth',
                width: [2, 2],            // Thickness for each series
                dashArray: [0, 5]
            },
            series: [
                {
                    name: 'Active Customers',
                    data: [320, 98, 510, 200, 720, 313, 674, 98, 510, 200, 720, 313]
                },
                {
                    name: 'Inactive Customers',
                    data: [156, 217, 66, 90, 85, 22, 75, 156, 217, 66, 90, 85]
                }
            ],
            xaxis: {
                categories: [
                'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec' ],
                title: {
                    text: 'Month'
                }
            },
            responsive: [{
                breakpoint: 400,
                options: {
                legend: {
                    position: 'bottom',
                    offsetX: -10,
                    offsetY: 0
                }
                }
            }],
            yaxis: {
                title: {
                    text: 'Customers'
                }
            },
            tooltip: {
                shared: true,
                intersect: false
            },
            legend: {
                position: 'bottom',
                horizontalAlign: 'center',
            },
        };

        var chart = new ApexCharts(document.querySelector("#Customer_Chart"), options);
        chart.render();
    </script>

@endpush