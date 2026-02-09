@extends('dashboard.layout.app')
@push('style')
    <style>
        .table-row tr .action{ bottom: -3px; transition: var(--transition-3s);}
        .table-row tr .action .btn{text-decoration: none;}
        .table-row tr:hover .action{ opacity: 1 !important;}
        .table-row tr:hover svg{fill: var(--bs-warning);}
        td.child>ul{width: 100%;}
        .product-title{min-width: 170px;}
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
                    <div class="page-name fs-20 fw-bold ms-md-4 ms-2 position-relative">Customers Comments</div>
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
    <table class="Data_Table table align-middle mb-0 w-100 table-row table-hover">
        <thead>
            <tr>
                <th class="py-2 fw-normal fs-12 text-muted text-uppercase">
                    <div class="d-flex align-items-center gap-3">
                        <div class="form-check mb-0 fs-6">
                            <input class="form-check-input" type="checkbox" value="" name="input">
                        </div>
                        Product
                    </div>
                </th>
                <th class="py-2 fw-normal fs-12 text-muted text-uppercase">Comment</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <div class="align-items-center d-flex gap-lg-3 gap-2 ps-lg-2">
                        <div class="form-check mb-0">
                            <input class="form-check-input" type="checkbox" value="" name="input">
                        </div>
                        <img width="80" class="img-thumbnail rounded-4" src="assets/images/product/boat-headphone.jpg" alt="product image">
                        <div class="position-relative">
                            <h6 class="text-wrap product-title">Boat Headphone</h6>
                            <p class="fs-14 mb-0">Electronics</p>
                            <div class="bg-card d-none d-lg-flex gap-3 action opacity-0 position-absolute px-3 py-1 rounded-pill border">
                                <button type="button" class="btn btn-link fs-12 p-0 text-primary toggle-reply">Reply</button>
                                <button type="button" class="btn btn-link fs-12 p-0 text-warning">Like</button>
                                <button type="button" class="btn btn-link fs-12 p-0 text-danger delete-btn">Delete</button>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="d-flex gap-2 align-items-start">
                        <img src="assets/images/user-1.png" data-bs-toggle="tooltip" alt="Avatar" class="rounded-circle avatar lg" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                        <div class="flex-grow-1 text-wrap">
                            <div class="d-flex gap-lg-3 gap-2 align-items-center">
                                <h6 class="mb-0">Dean Otto</h6>
                                <span class="opacity-75 fs-14">@samstoo</span>
                                <span class="opacity-50 fs-12">1m</span>
                            </div>
                            <div class="small text-muted">Great value for money, works flawlessly across all my devices.</div>
                            <div class="reply-box mt-2 d-lg-none position-relative">
                                <input type="text" class="form-control form-control-lg" id="reply1" placeholder="Write a comment..." aria-label="write a comment" aria-describedby="replyButton">
                                <button class="btn btn-dark position-absolute top-50 end-0 translate-middle-y me-2" type="button">Send</button>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="align-items-center d-flex gap-lg-3 gap-2 ps-lg-2">
                        <div class="form-check mb-0">
                            <input class="form-check-input" type="checkbox" value="" name="input">
                        </div>
                        <img width="80" class="img-thumbnail rounded-4" src="assets/images/product/earbuds.jpg" alt="product image">
                        <div class="position-relative">
                            <h6 class="text-wrap product-title">Earbuds with noise cancellation</h6>
                            <p class="fs-14 mb-0">Electronics</p>
                            <div class="bg-card d-none d-lg-flex gap-3 action opacity-0 position-absolute px-3 py-1 rounded-pill border">
                                <button type="button" class="btn btn-link fs-12 p-0 text-primary toggle-reply">Share</button>
                                <button type="button" class="btn btn-link fs-12 p-0 text-warning">Like</button>
                                <button type="button" class="btn btn-link fs-12 p-0 text-danger delete-btn">Delete</button>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="d-flex gap-2 align-items-start">
                        <img src="assets/images/user-2.png" data-bs-toggle="tooltip" alt="Avatar" class="rounded-circle avatar lg" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                        <div class="flex-grow-1 text-wrap">
                            <div class="d-flex gap-lg-3 gap-2 align-items-center">
                                <h6 class="mb-0">Daniel Foster</h6>
                                <span class="opacity-75 fs-14">@Daniel1212</span>
                                <span class="opacity-50 fs-12">1m</span>
                            </div>
                            <div class="small text-muted">Clean design. Smooth performance.</div>
                            <div class="reply-box mt-2 d-lg-none position-relative">
                                <input type="text" class="form-control form-control-lg" id="reply2" placeholder="Write a comment..." aria-label="write a comment" aria-describedby="replyButton">
                                <button class="btn btn-dark position-absolute top-50 end-0 translate-middle-y me-2" type="button">Send</button>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="align-items-center d-flex gap-lg-3 gap-2 ps-lg-2">
                        <div class="form-check mb-0">
                            <input class="form-check-input" type="checkbox" value="" name="input">
                        </div>
                        <img width="80" class="img-thumbnail rounded-4" src="assets/images/product/gaming-laptop.jpg" alt="product image">
                        <div class="position-relative">
                            <h6 class="text-wrap product-title">Gaming Laptop G11</h6>
                            <p class="fs-14 mb-0">Electronics</p>
                            <div class="bg-card d-none d-lg-flex gap-3 action opacity-0 position-absolute px-3 py-1 rounded-pill border">
                                <button type="button" class="btn btn-link fs-12 p-0 text-primary toggle-reply">Share</button>
                                <button type="button" class="btn btn-link fs-12 p-0 text-warning">Like</button>
                                <button type="button" class="btn btn-link fs-12 p-0 text-danger delete-btn">Delete</button>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="d-flex gap-2 align-items-start">
                        <img src="assets/images/user-7.png" data-bs-toggle="tooltip" alt="Avatar" class="rounded-circle avatar lg" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                        <div class="flex-grow-1 text-wrap">
                            <div class="d-flex gap-lg-3 gap-2 align-items-center">
                                <h6 class="mb-0">Mike Anderson</h6>
                                <span class="opacity-75 fs-14">@Anderson2025</span>
                                <span class="opacity-50 fs-12">1m</span>
                            </div>
                            <div class="small text-muted">Can you make a version for automated penetration testing and cybersecurity?</div>
                            <div class="reply-box mt-2 d-lg-none position-relative">
                                <input type="text" class="form-control form-control-lg" id="reply3" placeholder="Write a comment..." aria-label="write a comment" aria-describedby="replyButton">
                                <button class="btn btn-dark position-absolute top-50 end-0 translate-middle-y me-2" type="button">Send</button>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="align-items-center d-flex gap-lg-3 gap-2 ps-lg-2">
                        <div class="form-check mb-0">
                            <input class="form-check-input" type="checkbox" value="" name="input">
                        </div>
                        <img width="80" class="img-thumbnail rounded-4" src="assets/images/product/little-angel-toy.jpg" alt="product image">
                        <div class="position-relative">
                            <h6 class="text-wrap product-title">Little Angel Toy</h6>
                            <p class="fs-14 mb-0">Toys</p>
                            <div class="bg-card d-none d-lg-flex gap-3 action opacity-0 position-absolute px-3 py-1 rounded-pill border">
                                <button type="button" class="btn btn-link fs-12 p-0 text-primary toggle-reply">Share</button>
                                <button type="button" class="btn btn-link fs-12 p-0 text-warning">Like</button>
                                <button type="button" class="btn btn-link fs-12 p-0 text-danger delete-btn">Delete</button>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="d-flex gap-2 align-items-start">
                        <img src="assets/images/user-3.png" data-bs-toggle="tooltip" alt="Avatar" class="rounded-circle avatar lg" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                        <div class="flex-grow-1 text-wrap">
                            <div class="d-flex gap-lg-3 gap-2 align-items-center">
                                <h6 class="mb-0">Emily Turner</h6>
                                <span class="opacity-75 fs-14">@Turner111212</span>
                                <span class="opacity-50 fs-12">1m</span>
                            </div>
                            <div class="small text-muted">It works like a charm — no bugs, no complaints here.</div>
                            <div class="reply-box mt-2 d-lg-none position-relative">
                                <input type="text" class="form-control form-control-lg" id="reply4" placeholder="Write a comment..." aria-label="write a comment" aria-describedby="replyButton">
                                <button class="btn btn-dark position-absolute top-50 end-0 translate-middle-y me-2" type="button">Send</button>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="align-items-center d-flex gap-lg-3 gap-2 ps-lg-2">
                        <div class="form-check mb-0">
                            <input class="form-check-input" type="checkbox" value="" name="input">
                        </div>
                        <img width="80" class="img-thumbnail rounded-4" src="assets/images/product/shoes.jpg" alt="product image">
                        <div class="position-relative">
                            <h6 class="text-wrap product-title">Shoes for Men</h6>
                            <p class="fs-14 mb-0">Fashion</p>
                            <div class="bg-card d-none d-lg-flex gap-3 action opacity-0 position-absolute px-3 py-1 rounded-pill border">
                                <button type="button" class="btn btn-link fs-12 p-0 text-primary toggle-reply">Share</button>
                                <button type="button" class="btn btn-link fs-12 p-0 text-warning">Like</button>
                                <button type="button" class="btn btn-link fs-12 p-0 text-danger delete-btn">Delete</button>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="d-flex gap-2 align-items-start">
                        <img src="assets/images/user-1.png" data-bs-toggle="tooltip" alt="Avatar" class="rounded-circle avatar lg" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                        <div class="flex-grow-1 text-wrap">
                            <div class="d-flex gap-lg-3 gap-2 align-items-center">
                                <h6 class="mb-0">James Lee</h6>
                                <span class="opacity-75 fs-14">@James</span>
                                <span class="opacity-50 fs-12">1m</span>
                            </div>
                            <div class="small text-muted">Very intuitive and modern. Feels like a premium digital product.</div>
                            <div class="reply-box mt-2 d-lg-none position-relative">
                                <input type="text" class="form-control form-control-lg" id="reply5" placeholder="Write a comment..." aria-label="write a comment" aria-describedby="replyButton">
                                <button class="btn btn-dark position-absolute top-50 end-0 translate-middle-y me-2" type="button">Send</button>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="align-items-center d-flex gap-lg-3 gap-2 ps-lg-2">
                        <div class="form-check mb-0">
                            <input class="form-check-input" type="checkbox" value="" name="input">
                        </div>
                        <img width="80" class="img-thumbnail rounded-4" src="assets/images/product/smart-watch.jpg" alt="product image">
                        <div class="position-relative">
                            <h6 class="text-wrap product-title">Smart Watch with Calling</h6>
                            <p class="fs-14 mb-0">Electronics</p>
                            <div class="bg-card d-none d-lg-flex gap-3 action opacity-0 position-absolute px-3 py-1 rounded-pill border">
                                <button type="button" class="btn btn-link fs-12 p-0 text-primary toggle-reply">Share</button>
                                <button type="button" class="btn btn-link fs-12 p-0 text-warning">Like</button>
                                <button type="button" class="btn btn-link fs-12 p-0 text-danger delete-btn">Delete</button>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="d-flex gap-2 align-items-start">
                        <img src="assets/images/user-4.png" data-bs-toggle="tooltip" alt="Avatar" class="rounded-circle avatar lg" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                        <div class="flex-grow-1 text-wrap">
                            <div class="d-flex gap-lg-3 gap-2 align-items-center">
                                <h6 class="mb-0">Sara Thomas</h6>
                                <span class="opacity-75 fs-14">@samstoo</span>
                                <span class="opacity-50 fs-12">1m</span>
                            </div>
                            <div class="small text-muted">Excellent quality, quick setup, and the support team is fantastic.</div>
                            <div class="reply-box mt-2 d-lg-none position-relative">
                                <input type="text" class="form-control form-control-lg" id="reply6" placeholder="Write a comment..." aria-label="write a comment" aria-describedby="replyButton">
                                <button class="btn btn-dark position-absolute top-50 end-0 translate-middle-y me-2" type="button">Send</button>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="align-items-center d-flex gap-lg-3 gap-2 ps-lg-2">
                        <div class="form-check mb-0">
                            <input class="form-check-input" type="checkbox" value="" name="input">
                        </div>
                        <img width="80" class="img-thumbnail rounded-4" src="assets/images/product/teddybear.jpg" alt="product image">
                        <div class="position-relative">
                            <h6 class="text-wrap product-title">Teddybear Red Soft Toy</h6>
                            <p class="fs-14 mb-0">Toys</p>
                            <div class="bg-card d-none d-lg-flex gap-3 action opacity-0 position-absolute px-3 py-1 rounded-pill border">
                                <button type="button" class="btn btn-link fs-12 p-0 text-primary toggle-reply">Share</button>
                                <button type="button" class="btn btn-link fs-12 p-0 text-warning">Like</button>
                                <button type="button" class="btn btn-link fs-12 p-0 text-danger delete-btn">Delete</button>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="d-flex gap-2 align-items-start">
                        <img src="assets/images/user-5.png" data-bs-toggle="tooltip" alt="Avatar" class="rounded-circle avatar lg" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                        <div class="flex-grow-1 text-wrap">
                            <div class="d-flex gap-lg-3 gap-2 align-items-center">
                                <h6 class="mb-0">Aisha Patel</h6>
                                <span class="opacity-75 fs-14">@samstoo</span>
                                <span class="opacity-50 fs-12">1m</span>
                            </div>
                            <div class="small text-muted">Can you make a version for automated penetration testing and cybersecurity?</div>
                            <div class="reply-box mt-2 d-lg-none position-relative">
                                <input type="text" class="form-control form-control-lg" id="reply7" placeholder="Write a comment..." aria-label="write a comment" aria-describedby="replyButton">
                                <button class="btn btn-dark position-absolute top-50 end-0 translate-middle-y me-2" type="button">Send</button>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="align-items-center d-flex gap-lg-3 gap-2 ps-lg-2">
                        <div class="form-check mb-0">
                            <input class="form-check-input" type="checkbox" value="" name="input">
                        </div>
                        <img width="80" class="img-thumbnail rounded-4" src="assets/images/product/toy-dino.jpg" alt="product image">
                        <div class="position-relative">
                            <h6 class="text-wrap product-title">Toy Dino</h6>
                            <p class="fs-14 mb-0">Toys</p>
                            <div class="bg-card d-none d-lg-flex gap-3 action opacity-0 position-absolute px-3 py-1 rounded-pill border">
                                <button type="button" class="btn btn-link fs-12 p-0 text-primary toggle-reply">Share</button>
                                <button type="button" class="btn btn-link fs-12 p-0 text-warning">Like</button>
                                <button type="button" class="btn btn-link fs-12 p-0 text-danger delete-btn">Delete</button>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="d-flex gap-2 align-items-start">
                        <img src="assets/images/user-6.png" data-bs-toggle="tooltip" alt="Avatar" class="rounded-circle avatar lg" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                        <div class="flex-grow-1 text-wrap">
                            <div class="d-flex gap-lg-3 gap-2 align-items-center">
                                <h6 class="mb-0">Priya Desai</h6>
                                <span class="opacity-75 fs-14">@priya_love_2025</span>
                                <span class="opacity-50 fs-12">1m</span>
                            </div>
                            <div class="small text-muted">This tool helped me save time and work more efficiently.</div>
                            <div class="reply-box mt-2 d-lg-none position-relative">
                                <input type="text" class="form-control form-control-lg" id="reply8" placeholder="Write a comment..." aria-label="write a comment" aria-describedby="replyButton">
                                <button class="btn btn-dark position-absolute top-50 end-0 translate-middle-y me-2" type="button">Send</button>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="align-items-center d-flex gap-lg-3 gap-2 ps-lg-2">
                        <div class="form-check mb-0">
                            <input class="form-check-input" type="checkbox" value="" name="input">
                        </div>
                        <img width="80" class="img-thumbnail rounded-4" src="assets/images/product/vr-headset.jpg" alt="product image">
                        <div class="position-relative">
                            <h6 class="text-wrap product-title">Wireless Headphones</h6>
                            <p class="fs-14 mb-0">Electronics</p>
                            <div class="bg-card d-none d-lg-flex gap-3 action opacity-0 position-absolute px-3 py-1 rounded-pill border">
                                <button type="button" class="btn btn-link fs-12 p-0 text-primary toggle-reply">Share</button>
                                <button type="button" class="btn btn-link fs-12 p-0 text-warning">Like</button>
                                <button type="button" class="btn btn-link fs-12 p-0 text-danger delete-btn">Delete</button>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="d-flex gap-2 align-items-start">
                        <img src="assets/images/user-2.png" data-bs-toggle="tooltip" alt="Avatar" class="rounded-circle avatar lg" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                        <div class="flex-grow-1 text-wrap">
                            <div class="d-flex gap-lg-3 gap-2 align-items-center">
                                <h6 class="mb-0">Neha Kapoor</h6>
                                <span class="opacity-75 fs-14">@NK-222</span>
                                <span class="opacity-50 fs-12">1m</span>
                            </div>
                            <div class="small text-muted">Impressive quality for the price.</div>
                            <div class="reply-box mt-2 d-lg-none position-relative">
                                <input type="text" class="form-control form-control-lg" id="reply9" placeholder="Write a comment..." aria-label="write a comment" aria-describedby="replyButton">
                                <button class="btn btn-dark position-absolute top-50 end-0 translate-middle-y me-2" type="button">Send</button>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="align-items-center d-flex gap-lg-3 gap-2 ps-lg-2">
                        <div class="form-check mb-0">
                            <input class="form-check-input" type="checkbox" value="" name="input">
                        </div>
                        <img width="80" class="img-thumbnail rounded-4" src="assets/images/product/wireless-mouse.jpg" alt="product image">
                        <div class="position-relative">
                            <h6 class="text-wrap product-title">Wireless Mouse</h6>
                            <p class="fs-14 mb-0">Electronics</p>
                            <div class="bg-card d-none d-lg-flex gap-3 action opacity-0 position-absolute px-3 py-1 rounded-pill border">
                                <button type="button" class="btn btn-link fs-12 p-0 text-primary toggle-reply">Share</button>
                                <button type="button" class="btn btn-link fs-12 p-0 text-warning">Like</button>
                                <button type="button" class="btn btn-link fs-12 p-0 text-danger delete-btn">Delete</button>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="d-flex gap-2 align-items-start">
                        <img src="assets/images/user-1.png" data-bs-toggle="tooltip" alt="Avatar" class="rounded-circle avatar lg" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                        <div class="flex-grow-1 text-wrap">
                            <div class="d-flex gap-lg-3 gap-2 align-items-center">
                                <h6 class="mb-0">Dean Otto</h6>
                                <span class="opacity-75 fs-14">@samstoo</span>
                                <span class="opacity-50 fs-12">1m</span>
                            </div>
                            <div class="small text-muted">Great product! Solved my problem faster than I expected. Thanks!</div>
                            <div class="reply-box mt-2 d-lg-none position-relative">
                                <input type="text" class="form-control form-control-lg" id="reply10" placeholder="Write a comment..." aria-label="write a comment" aria-describedby="replyButton">
                                <button class="btn btn-dark position-absolute top-50 end-0 translate-middle-y me-2" type="button">Send</button>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
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

        // Toggle reply box
        $(document).on('click', '.toggle-reply', function () {
            const $replyBox = $(this).closest('td').siblings().find('.reply-box');

            // Hide all other reply boxes
            $('.reply-box').not($replyBox).addClass('d-lg-none');

            // Toggle the current one
            $replyBox.toggleClass('d-lg-none');
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
    </script>
@endpush
