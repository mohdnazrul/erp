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
                    <div class="page-name fs-20 fw-bold ms-md-4 ms-2 position-relative">Customers Transactions</div>
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
                <h5 class="mb-1 fw-bold">$10,245</h5>
                <small class="text-muted">Paid</small>
            </div>
            <div class="vr"></div>
            <div>
                <h5 class="mb-1 fw-bold">$1,120</h5>
                <small class="text-muted">Pending</small>
            </div>
            <div class="vr"></div>
            <div>
                <h5 class="mb-1 fw-bold">$235</h5>
                <small class="text-muted">Failed</small>
            </div>
            <div class="d-none d-sm-block ms-lg-auto">
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
        <div id="Transactions_Summary"></div>
        <div class="row g-3 align-items-center">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="form-floating">
                    <select class="form-select" id="invoiceType">
                        <option>Paid</option>
                        <option>Pending</option>
                        <option>Failed</option>
                    </select>
                    <label for="invoiceType">Select Type</label>
                </div>
            </div>
            <div class="col">
                <div class="position-relative">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="searchTransactions" placeholder="Search...">
                        <label for="searchTransactions">Search Transactions...</label>
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
        <table class="Data_Table table align-middle mb-0 w-100 table-row">
            <thead>
                <tr>
                    <th class="py-2 fw-medium small text-uppercase">
                        <div class="d-flex align-items-center gap-3">
                            <div class="form-check mb-0 fs-6">
                                <input class="form-check-input" type="checkbox" value="" id="productCheck">
                            </div>
                            Product
                        </div>
                    </th>
                    <th class="py-2 fw-medium small text-uppercase">Amount</th>
                    <th class="py-2 fw-medium small text-uppercase">Date</th>
                    <th class="py-2 fw-medium small text-uppercase">Order ID</th>
                    <th class="py-2 fw-medium small text-uppercase">Type</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="align-items-center d-flex gap-lg-3 gap-2 ps-lg-2">
                            <div class="form-check mb-0">
                                <input class="form-check-input" type="checkbox" value="" id="productCheck11">
                            </div>
                            <img width="60" class="img-thumbnail rounded-3" src="assets/images/product/boat-headphone.jpg" alt="product image">
                            <div>
                                <h6>Boat Headphone</h6>
                                <p class="fs-14 mb-0">Electronics</p>
                            </div>
                        </div>
                    </td>
                    <td>$875.00</td>
                    <td>May 12, 2025</td>
                    <td>#123456</td>
                    <td><span class="badge border border-success bg-success bg-opacity-10 text-success">Paid</span></td>
                </tr>
                <tr>
                    <td>
                        <div class="align-items-center d-flex gap-lg-3 gap-2 ps-lg-2">
                            <div class="form-check mb-0">
                                <input class="form-check-input" id="productCheck1" type="checkbox">
                            </div>
                            <img width="60" class="img-thumbnail rounded-3" src="assets/images/product/gaming-laptop.jpg" alt="product image">
                            <div>
                                <h6>Laptop</h6>
                                <p class="fs-14 mb-0">Computers</p>
                            </div>
                        </div>
                    </td>
                    <td>$1,200.00</td>
                    <td>May 10, 2025</td>
                    <td>#123457</td>
                    <td><span class="badge border border-warning bg-warning bg-opacity-10 text-warning">Pending</span></td>
                </tr>
                <tr>
                    <td>
                        <div class="align-items-center d-flex gap-lg-3 gap-2 ps-lg-2">
                            <div class="form-check mb-0">
                                <input class="form-check-input" id="productCheck2" type="checkbox">
                            </div>
                            <img width="60" class="img-thumbnail rounded-3" src="assets/images/product/little-angel-toy.jpg" alt="product image">
                            <div>
                                <h6>Little Angel</h6>
                                <p class="fs-14 mb-0">Toys</p>
                            </div>
                        </div>
                    </td>
                    <td>$999.00</td>
                    <td>May 08, 2025</td>
                    <td>#123458</td>
                    <td><span class="badge border border-success bg-success bg-opacity-10 text-success">Paid</span></td>
                </tr>
                <tr>
                    <td>
                        <div class="align-items-center d-flex gap-lg-3 gap-2 ps-lg-2">
                            <div class="form-check mb-0">
                                <input class="form-check-input" id="productCheck3" type="checkbox">
                            </div>
                            <img width="60" class="img-thumbnail rounded-3" src="assets/images/product/shoes.jpg" alt="product image">
                            <div>
                                <h6>Nike Sneakers</h6>
                                <p class="fs-14 mb-0">Footwear</p>
                            </div>
                        </div>
                    </td>
                    <td>$150.00</td>
                    <td>May 07, 2025</td>
                    <td>#123459</td>
                    <td><span class="badge border border-danger bg-danger bg-opacity-10 text-danger">Failed</span></td>
                </tr>
                <tr>
                    <td>
                        <div class="align-items-center d-flex gap-lg-3 gap-2 ps-lg-2">
                            <div class="form-check mb-0">
                                <input class="form-check-input" id="productCheck4" type="checkbox">
                            </div>
                            <img width="60" class="img-thumbnail rounded-3" src="assets/images/product/smart-watch.jpg" alt="product image">
                            <div>
                                <h6>Smart Watch</h6>
                                <p class="fs-14 mb-0">Accessories</p>
                            </div>
                        </div>
                    </td>
                    <td>$399.00</td>
                    <td>May 06, 2025</td>
                    <td>#123460</td>
                    <td><span class="badge border border-success bg-success bg-opacity-10 text-success">Paid</span></td>
                </tr>
                <tr>
                    <td>
                        <div class="align-items-center d-flex gap-lg-3 gap-2 ps-lg-2">
                            <div class="form-check mb-0">
                                <input class="form-check-input" id="productCheck5" type="checkbox">
                            </div>
                            <img width="60" class="img-thumbnail rounded-3" src="assets/images/product/shoes.jpg" alt="product image">
                            <div>
                                <h6>Shoes</h6>
                                <p class="fs-14 mb-0">Footwear</p>
                            </div>
                        </div>
                    </td>
                    <td>$179.00</td>
                    <td>May 05, 2025</td>
                    <td>#123461</td>
                    <td><span class="badge border border-success bg-success bg-opacity-10 text-success">Paid</span></td>
                </tr>
                <tr>
                    <td>
                        <div class="align-items-center d-flex gap-lg-3 gap-2 ps-lg-2">
                            <div class="form-check mb-0">
                                <input class="form-check-input" id="productCheck6" type="checkbox">
                            </div>
                            <img width="60" class="img-thumbnail rounded-3" src="assets/images/product/smart-watch.jpg" alt="product image">
                            <div>
                                <h6>Smart Watch</h6>
                                <p class="fs-14 mb-0">Wearables</p>
                            </div>
                        </div>
                    </td>
                    <td>$529.00</td>
                    <td>May 04, 2025</td>
                    <td>#123462</td>
                    <td><span class="badge border border-warning bg-warning bg-opacity-10 text-warning">Pending</span></td>
                </tr>
                <tr>
                    <td>
                        <div class="align-items-center d-flex gap-lg-3 gap-2 ps-lg-2">
                            <div class="form-check mb-0">
                                <input class="form-check-input" id="productCheck7" type="checkbox">
                            </div>
                            <img width="60" class="img-thumbnail rounded-3" src="assets/images/product/vr-headset.jpg" alt="product image">
                            <div>
                                <h6>VR Headset</h6>
                                <p class="fs-14 mb-0">Electronics</p>
                            </div>
                        </div>
                    </td>
                    <td>$1,099.00</td>
                    <td>May 03, 2025</td>
                    <td>#123463</td>
                    <td><span class="badge border border-danger bg-danger bg-opacity-10 text-danger">Failed</span></td>
                </tr>
                <tr>
                    <td>
                        <div class="align-items-center d-flex gap-lg-3 gap-2 ps-lg-2">
                            <div class="form-check mb-0">
                                <input class="form-check-input" id="productCheck8" type="checkbox">
                            </div>
                            <img width="60" class="img-thumbnail rounded-3" src="assets/images/product/toy-dino.jpg" alt="product image">
                            <div>
                                <h6>Dino</h6>
                                <p class="fs-14 mb-0">Toys</p>
                            </div>
                        </div>
                    </td>
                    <td>$89.00</td>
                    <td>May 02, 2025</td>
                    <td>#123464</td>
                    <td><span class="badge border border-success bg-success bg-opacity-10 text-success">Paid</span></td>
                </tr>
                <tr>
                    <td>
                        <div class="align-items-center d-flex gap-lg-3 gap-2 ps-lg-2">
                            <div class="form-check mb-0">
                                <input class="form-check-input" id="productCheck9" type="checkbox">
                            </div>
                            <img width="60" class="img-thumbnail rounded-3" src="assets/images/product/wireless-mouse.jpg" alt="product image">
                            <div>
                                <h6>Wireless Mouse</h6>
                                <p class="fs-14 mb-0">Accessories</p>
                            </div>
                        </div>
                    </td>
                    <td>$29.00</td>
                    <td>May 01, 2025</td>
                    <td>#123465</td>
                    <td><span class="badge border border-success bg-success bg-opacity-10 text-success">Paid</span></td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
@push('scripts')
    <script>
        // Initialize DataTable
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
        });
        var options = {
            chart: {
                type: 'bar',
                height: 300,
                toolbar: { show: false },
                staked: true,
            },
            series: [
                {
                    name: 'Funds',
                    type: 'column',
                    data: [3300, 4400, 5200, 4800, 5100, 2100, 5500, 4700, 4800, 5100, 2100, 5500]
                },
                {
                    name: 'Earnings',
                    type: 'area',
                    data: [1200, 1890, 1400, 460, 1350, 3300, 500, 1400, 880, 2280, 1450, 500]
                },
                {
                    name: 'Fees',
                    type: 'line',
                    data: [300, 210, 310, 330, 890, 180, 289, 310, 199, 890, 180, 360]
                }
            ],
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            },
            yaxis: {
                labels: {
                    formatter: function (val) {
                    if (val >= 1000) {
                        return (val / 1000) + 'k';
                    }
                    return val;
                    }
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
                width: [0, 2, 5],
                curve: 'smooth'
            },
            colors: ['var(--bs-primary)', 'var(--bs-primary-bg-subtle)', 'var(--bs-gray-500)'],
            legend: {
                position: 'bottom',
                horizontalAlign: 'center',
            },
            tooltip: {
                y: {
                    formatter: function (val) {
                        return "$" + val.toLocaleString();
                    }
                }
            }
        };

        var chart = new ApexCharts(document.querySelector("#Transactions_Summary"), options);
        chart.render();
    </script>
@endpush
