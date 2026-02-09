@extends('dashboard.layout.app')
@push('style')
    <style>
        .print_invoice table {
            border-collapse: collapse;
        }
        .print_invoice table td, .print_invoice table th {
            border: 1px solid var(--bs-border-color);
            padding: 5px;
        }
        .print_invoice textarea {
            border: 1px solid transparent;
            overflow: hidden;
            resize: none;
            width: 100%;
            border-radius: 0.25rem;
            background-color: transparent;
        }
        .print_invoice textarea:hover, .print_invoice textarea:focus {
            background: rgba(0, 0, 0, );
            border: 1px solid var(--bs-primary);
            box-shadow: none;
            outline: 0;
        }
        .print_invoice .address {
            float: left;
            width: 250px;
            height: 150px;
        }
        .print_invoice .customer {
            overflow: hidden;
        }
        .print_invoice .customer .customer-title {
            float: left;
            width: 250px;
            font-size: 20px;
            font-weight: 700;
        }
        .print_invoice .delete-wpr {
            position: relative;
        }
        .print_invoice .delete {
            background: var(--bs-border-color);
            color: red;
            display: block;
            text-decoration: none;
            position: absolute;
            padding: 0 5px;
            top: 3px;
            left: -22px;
            font-size: 12px;
        }
        .print_invoice .delete:hover {
            background: red;
            color: #fff;
        }
        .print_invoice #logo {
            text-align: right;
            float: right;
            position: relative;
            overflow: hidden;
            margin-top: 25px;
            max-width: 540px;
            max-height: 100px;
        }
        .print_invoice #logo:hover, .print_invoice #logo.edit {
            border: 1px solid var(--bs-border-color);
            margin-top: 0;
            max-height: 125px;
        }
        .print_invoice #logo:hover #logoctr, .print_invoice #logo.edit #logoctr {
            background: var(--bs-card-bg);
            display: block;
            text-align: right;
            line-height: 25px;
            padding: 0 5px;
        }
        .print_invoice #logo #logoctr {
            display: none;
        }
        .print_invoice #logohelp {
            text-align: left;
            display: none;
            font-style: italic;
            padding: 10px 5px;
        }
        .print_invoice #logohelp input {
            margin-bottom: 5px;
        }
        .print_invoice .edit #logohelp {
            display: block;
        }
        .print_invoice .edit #save-logo, .print_invoice .edit #cancel-logo {
            display: inline;
        }
        .print_invoice .edit #image, .print_invoice #save-logo, .print_invoice #cancel-logo, .print_invoice .edit #change-logo, .print_invoice .edit #delete-logo {
            display: none;
        }
        .print_invoice .meta {
            float: right;
            margin-top: 1px;
            width: 300px;
        }
        .print_invoice .meta td {
            text-align: right;
        }
        .print_invoice .meta td.meta-head {
            background: var(--bs-card-bg);
            text-align: left;
        }
        .print_invoice .meta td .due {
            padding-right: 13px;
        }
        .print_invoice .meta td textarea {
            height: 20px;
            text-align: right;
        }
        .print_invoice .items {
            border: 1px solid var(--bs-border-color);
            clear: both;
            width: 100%;
            margin: 30px 0 0;
        }
        .print_invoice .items th {
            background: var(--bs-card-bg);
        }
        .print_invoice .items tr.item-row td {
            vertical-align: top;
        }
        .print_invoice .items td.item-name {
            width: 150px;
        }
        .print_invoice .items td.description {
            width: 280px;
        }
        .print_invoice .items td.total-line {
            text-align: right;
            border-right: 0;
        }
        .print_invoice .items td.total-value {
            padding: 5px;
        }
        .print_invoice .items td.balance {
            background: var(--bs-card-bg);
        }
        .print_invoice .items td.blank {
            border: 0;
        }
        @media print {
            body * {
                visibility: hidden;
                margin: 0;
                color: #000;
                background-color: #fff;
            }
            .print_invoice {
                position: absolute;
                left: 0;
                top: 0;
            }
            .print_invoice * {
                visibility: visible;
            }
            .print_invoice * #hiderow, .print_invoice * .delete {
                display: none;
            }
            .print_invoice .footer-note .form-control {
                padding: 0;
            }
            .navigation, .sidebar {
                display: none;
            }
        }
        
    </style>
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
                    <div class="page-name fs-20 fw-bold ms-md-4 ms-2 position-relative">Create Invoice</div>
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
    <div class="row g-3">
                    <div class="col-12">
                        <div class="card print_invoice rounded-4 overflow-hidden">
                            <div class="card-body p-lg-4">
                                <h5 class="card-title mb-5">Invoice</h5>
                                <div>
                                    <textarea class="form-control address">Marshall Nichols,
774 Andover St.
Snohomish, WA 98290

Phone: (012) 3456-7890</textarea>
                                    <div id="logo">
                                        <div id="logoctr">
                                            <a href="javascript:;" id="change-logo" title="Change logo">Change Logo</a>
                                            <a href="javascript:;" id="save-logo" title="Save changes">Save</a> | <a href="javascript:;" id="delete-logo" title="Delete logo">Delete Logo</a>
                                            <a href="javascript:;" id="cancel-logo" title="Cancel changes">Cancel</a>
                                        </div>
                                        <div id="logohelp">
                                            <input id="imageloc" type="text" size="50" value=""><br> (max width: 540px, max height: 100px)
                                        </div>
                                        <img id="image" src="assets/images/logo.svg" alt="logo">
                                    </div>
                                </div>
                                <div style="clear:both"></div>
                                <div class="customer mt-4">
                                    <textarea class="form-control customer-title">Widget Card. c/o List Widget</textarea>
                                    <table class="meta">
                                        <tbody>
                                            <tr>
                                                <td class="meta-head">Invoice #</td>
                                                <td><textarea class="form-control">000123</textarea></td>
                                            </tr>
                                            <tr>
                                                <td class="meta-head">Date</td>
                                                <td><textarea class="form-control" id="date">December 15, 2025</textarea></td>
                                            </tr>
                                            <tr>
                                                <td class="meta-head">Amount Due</td>
                                                <td>
                                                    <div class="due">$875.00</div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div style="clear:both"></div>
                                <table class="items w-100">
                                    <tbody>
                                        <tr>
                                            <th>Item</th>
                                            <th>Description</th>
                                            <th style="width: 140px;">Unit Cost</th>
                                            <th style="width: 70px;">Quantity</th>
                                            <th style="width: 140px;">Price</th>
                                        </tr>
                                        <tr class="item-row">
                                            <td class="item-name">
                                                <div class="delete-wpr"><textarea>Web Updates</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div>
                                            </td>
                                            <td class="description">
                                                <textarea>Monthly web updates for TTM (Nov. 1 - Nov. 30, 2025)</textarea>
                                            </td>
                                            <td><textarea class="cost">$650.00</textarea></td>
                                            <td><textarea class="qty">1</textarea></td>
                                            <td><span class="price">$650.00</span></td>
                                        </tr>
                                        <tr class="item-row">
                                            <td class="item-name">
                                                <div class="delete-wpr"><textarea>SSL Renewals</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div>
                                            </td>
                                            <td class="description"><textarea>Yearly renewals of SSL certificates on main domain and several subdomains</textarea></td>
                                            <td><textarea class="cost">$75.00</textarea></td>
                                            <td><textarea class="qty">3</textarea></td>
                                            <td><span class="price">$225.00</span></td>
                                        </tr>
                                        <tr id="hiderow">
                                            <td colspan="5"><a class="link-primary fw-bold" id="addrow" href="javascript:;" title="Add a row">Add a row</a></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="blank"> </td>
                                            <td colspan="2" class="total-line">Subtotal</td>
                                            <td class="total-value">
                                                <div id="subtotal">$875.00</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="blank"> </td>
                                            <td colspan="2" class="total-line">Total</td>
                                            <td class="total-value">
                                                <div id="total">$875.00</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="blank"> </td>
                                            <td colspan="2" class="total-line">Amount Paid</td>
                                            <td class="total-value"><textarea id="paid">$0.00</textarea></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="blank"> </td>
                                            <td colspan="2" class="total-line balance">Balance Due</td>
                                            <td class="total-value balance">
                                                <div class="due">$875.00</div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div style="clear:both"></div>
                                <div class="footer-note mt-5">
                                    <h5>Terms</h5>
                                    <textarea class="form-control bg-light">NET 30 Days. Finance Charge of 1.5% will be made on unpaid balances after 30 days.</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center text-md-end">
                        <button type="button" class="btn btn-lg btn-primary" onclick="window.print();return false">Print Invoice</button>
                        <button type="button" class="btn btn-lg btn-secondary">Send PDF</button>
                    </div>
                </div> <!-- .row end -->
@endsection
@push('scripts')
    <script src="{{ asset('assets/js/invoice.bundle.js') }}"></script>
@endpush