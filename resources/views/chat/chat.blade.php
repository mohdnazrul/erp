@extends('layout.app')
@push('style')
    <link rel="stylesheet" href="{{ asset('assets/css/chat.css') }}">
@endpush
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
                    <div class="page-name fs-20 fw-bold ms-md-4 ms-2 position-relative">Messages</div>
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
                        <li>
                            <a href="javascript:void(0);" class="text-decoration-none hover-svg">
                                <svg  xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M15 10l4.553 -2.276a1 1 0 0 1 1.447 .894v6.764a1 1 0 0 1 -1.447 .894l-4.553 -2.276v-4z" />
                                    <path d="M3 6m0 2a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2z" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="text-decoration-none hover-svg">
                                <svg  xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                                </svg>
                            </a>
                        </li>
                        <li class="d-md-block d-none dropdown">
                            <a href="#" class="text-decoration-none hover-svg" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                <svg  xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M4 4h16v2.172a2 2 0 0 1 -.586 1.414l-4.414 4.414v7l-6 2v-8.5l-4.48 -4.928a2 2 0 0 1 -.52 -1.345v-2.227z" />
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
                            <a href="#" class="text-decoration-none hover-svg">
                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M13 2V24"></path>
                                    <path d="M2 13H24"></path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End:: Breadcrumbs -->

    <!-- Start:: Content -->
    <div class="content-wrapper py-4">
        <div class="container-fluid">

            <div class="d-flex flex-column flex-md-row align-items-stretch justify-content-between">
                <ul class="chat-name-list d-flex flex-row flex-md-column list-unstyled mb-4 mb-md-0 pb-2 pb-md-0 gap-2 gap-md-1 border-end border-3 pe-md-3">
                    <li class="d-flex flex-column flex-md-row align-items-center p-md-3 p-2 rounded-4 gap-lg-3 gap-2">
                        <img class="avatar lg rounded-circle border border-white shadow" src="assets/images/user-3.png" alt="Profile">
                        <div class="chat-small-msg overflow-hidden flex-grow-1">
                            <p class="mb-0 text-center text-md-start">Marshall Cameron</p>
                            <span class="d-none d-md-block text-truncate small opacity-75">changed an issue from "In Progress" to</span>
                        </div>
                        <span class="chat-time mb-auto text-nowrap d-none d-md-block">10:11 am</span>
                    </li>
                    <li class="d-flex flex-column flex-md-row align-items-center p-md-3 p-2 rounded-4 gap-lg-3 gap-2 active">
                        <img class="avatar lg rounded-circle border border-white shadow" src="assets/images/user-2.png" alt="Profile">
                        <div class="chat-small-msg overflow-hidden flex-grow-1">
                            <p class="mb-0 text-center text-md-start">Cameron Root</p>
                            <span class="d-none d-md-block text-truncate small opacity-75">Lorem ipsum dolor sit amet</span>
                        </div>
                        <span class="chat-time mb-auto text-nowrap d-none d-md-block">11:11 am</span>
                    </li>
                    <li class="d-flex flex-column flex-md-row align-items-center p-md-3 p-2 rounded-4 gap-lg-3 gap-2">
                        <img class="avatar lg rounded-circle border border-white shadow" src="assets/images/user-4.png" alt="Profile">
                        <div class="chat-small-msg overflow-hidden flex-grow-1">
                            <p class="mb-0 text-center text-md-start">Orlando Lentz</p>
                            <span class="d-none d-md-block text-truncate small opacity-75">Lorem ipsum dolor sit amet</span>
                        </div>
                        <span class="chat-time mb-auto text-nowrap d-none d-md-block">12:11 pm</span>
                    </li>
                    <li class="d-flex flex-column flex-md-row align-items-center p-md-3 p-2 rounded-4 gap-lg-3 gap-2">
                        <img class="avatar lg rounded-circle border border-white shadow" src="assets/images/user-5.png" alt="Profile">
                        <div class="chat-small-msg overflow-hidden flex-grow-1">
                            <p class="mb-0 text-center text-md-start">Dean Otto</p>
                            <span class="d-none d-md-block text-truncate small opacity-75">Lorem ipsum dolor sit amet</span>
                        </div>
                        <span class="chat-time mb-auto text-nowrap d-none d-md-block">12:11 pm</span>
                    </li>
                    <li class="d-flex flex-column flex-md-row align-items-center p-md-3 p-2 rounded-4 gap-lg-3 gap-2">
                        <img class="avatar lg rounded-circle border border-white shadow" src="assets/images/user-2.png" alt="Profile">
                        <div class="chat-small-msg overflow-hidden flex-grow-1">
                            <p class="mb-0 text-center text-md-start">Issa Bell</p>
                            <span class="d-none d-md-block text-truncate small opacity-75">Lorem ipsum dolor sit amet</span>
                        </div>
                        <span class="chat-time mb-auto text-nowrap d-none d-md-block">12:30 pm</span>
                    </li>
                    <li class="d-flex flex-column flex-md-row align-items-center p-md-3 p-2 rounded-4 gap-lg-3 gap-2">
                        <img class="avatar lg rounded-circle border border-white shadow" src="assets/images/user-4.png" alt="Profile">
                        <div class="chat-small-msg overflow-hidden flex-grow-1">
                            <p class="mb-0 text-center text-md-start">Nellie Maxwell</p>
                            <span class="d-none d-md-block text-truncate small opacity-75">Lorem ipsum dolor sit amet</span>
                        </div>
                        <span class="chat-time mb-auto text-nowrap d-none d-md-block">12:35 pm</span>
                    </li>
                    <li class="d-flex flex-column flex-md-row align-items-center p-md-3 p-2 rounded-4 gap-lg-3 gap-2">
                        <img class="avatar lg rounded-circle border border-white shadow" src="assets/images/user-3.png" alt="Profile">
                        <div class="chat-small-msg overflow-hidden flex-grow-1">
                            <p class="mb-0 text-center text-md-start">Marshall Cameron</p>
                            <span class="d-none d-md-block text-truncate small opacity-75">Lorem ipsum dolor sit amet</span>
                        </div>
                        <span class="chat-time mb-auto text-nowrap d-none d-md-block">12:40 pm</span>
                    </li>
                    <li class="d-flex flex-column flex-md-row align-items-center p-md-3 p-2 rounded-4 gap-lg-3 gap-2">
                        <img class="avatar lg rounded-circle border border-white shadow" src="assets/images/user-2.png" alt="Profile">
                        <div class="chat-small-msg overflow-hidden flex-grow-1">
                            <p class="mb-0 text-center text-md-start">Cameron Root</p>
                            <span class="d-none d-md-block text-truncate small opacity-75">Lorem ipsum dolor sit amet</span>
                        </div>
                        <span class="chat-time mb-auto text-nowrap d-none d-md-block">12/06</span>
                    </li>
                    <li class="d-flex flex-column flex-md-row align-items-center p-md-3 p-2 rounded-4 gap-lg-3 gap-2">
                        <img class="avatar lg rounded-circle border border-white shadow" src="assets/images/user-4.png" alt="Profile">
                        <div class="chat-small-msg overflow-hidden flex-grow-1">
                            <p class="mb-0 text-center text-md-start">Orlando Lentz</p>
                            <span class="d-none d-md-block text-truncate small opacity-75">Lorem ipsum dolor sit amet</span>
                        </div>
                        <span class="chat-time mb-auto text-nowrap d-none d-md-block">12/06</span>
                    </li>
                    <li class="d-flex flex-column flex-md-row align-items-center p-md-3 p-2 rounded-4 gap-lg-3 gap-2">
                        <img class="avatar lg rounded-circle border border-white shadow" src="assets/images/user-5.png" alt="Profile">
                        <div class="chat-small-msg overflow-hidden flex-grow-1">
                            <p class="mb-0 text-center text-md-start">Dean Otto</p>
                            <span class="d-none d-md-block text-truncate small opacity-75">Lorem ipsum dolor sit amet</span>
                        </div>
                        <span class="chat-time mb-auto text-nowrap d-none d-md-block">12/06</span>
                    </li>
                    <li class="d-flex flex-column flex-md-row align-items-center p-md-3 p-2 rounded-4 gap-lg-3 gap-2">
                        <img class="avatar lg rounded-circle border border-white shadow" src="assets/images/user-2.png" alt="Profile">
                        <div class="chat-small-msg overflow-hidden flex-grow-1">
                            <p class="mb-0 text-center text-md-start">Issa Bell</p>
                            <span class="d-none d-md-block text-truncate small opacity-75">Lorem ipsum dolor sit amet</span>
                        </div>
                        <span class="chat-time mb-auto text-nowrap d-none d-md-block">25/05/2024</span>
                    </li>
                    <li class="d-flex flex-column flex-md-row align-items-center p-md-3 p-2 rounded-4 gap-lg-3 gap-2">
                        <img class="avatar lg rounded-circle border border-white shadow" src="assets/images/user-4.png" alt="Profile">
                        <div class="chat-small-msg overflow-hidden flex-grow-1">
                            <p class="mb-0 text-center text-md-start">Nellie Maxwell</p>
                            <span class="d-none d-md-block text-truncate small opacity-75">Lorem ipsum dolor sit amet</span>
                        </div>
                        <span class="chat-time mb-auto text-nowrap d-none d-md-block">25/10/2024</span>
                    </li>
                </ul>
                  
                <div class="chat-details flex-fill ps-lg-5 ps-md-3 ps-sm-0 pe-lg-4 pe-md-2 pe-sm-0">
                    <ul class="list-unstyled mb-0 pe-md-3">
                        <!--[ Chat: left ]-->
                        <li class="mb-4 d-flex flex-row align-items-end msg-left">
                            <div class="d-flex gap-2">
                                <img class="avatar md rounded-circle mt-4" src="assets/images/user-2.png" alt="avatar">
                                <div>
                                    <span class="opacity-25 small">Cameron Root</span>
                                    <div class="message py-2 px-3 rounded position-relative">
                                        Are we meeting today?
                                        <span class="opacity-0 position-absolute small end-0 time">10:10 AM</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!--[ Chat: left ]-->
                        <li class="mb-4 d-flex flex-row align-items-end msg-left">
                            <div class="d-flex gap-2">
                                <img class="avatar md rounded-circle mt-4" src="assets/images/user-2.png" alt="avatar">
                                <div>
                                    <span class="opacity-25 small">Cameron Root</span>
                                    <div class="message py-2 px-3 rounded position-relative">
                                        Hi Aiden, how are you? How is the project coming along?
                                        <span class="opacity-0 position-absolute small end-0 time">10:11 AM</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!--[ Chat: right ]-->
                        <li class="mb-4 d-flex flex-row-reverse align-items-end">
                            <div class="max-width-70 text-end">
                                <div class="user-info mb-1">
                                    <span class="opacity-25 small">10:12 AM, Today</span>
                                </div>
                                <div class="message py-2 px-3 rounded mb-1 bg-secondary-subtle">
                                    <div>Project has been already finished and I have results to show you.</div>
                                </div>
                            </div>
                        </li>
                        <!--[ Chat: left ]-->
                        <li class="mb-4 d-flex flex-row align-items-end msg-left">
                            <div class="d-flex gap-2">
                                <img class="avatar md rounded-circle mt-4" src="assets/images/user-2.png" alt="avatar">
                                <div>
                                    <span class="opacity-25 small">Cameron Root</span>
                                    <div class="message py-2 px-3 rounded position-relative">
                                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                        <span class="opacity-0 position-absolute small end-0 time">10:11 AM</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!--[ Chat: left ]-->
                        <li class="mb-4 d-flex flex-row align-items-end msg-left">
                            <div class="d-flex gap-2">
                                <img class="avatar md rounded-circle mt-4" src="assets/images/user-2.png" alt="avatar">
                                <div>
                                    <span class="opacity-25 small">Cameron Root</span>
                                    <div class="message py-2 px-3 rounded position-relative">
                                        Contrary to popular belief, Lorem Ipsum is not simply random text.
                                        <span class="opacity-0 position-absolute small end-0 time">10:11 AM</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!--[ Chat: right ]-->
                        <li class="mb-4 d-flex flex-row-reverse align-items-end">
                            <div class="max-width-70 text-end">
                                <div class="user-info mb-1">
                                    <span class="opacity-25 small">10:12 AM, Today</span>
                                </div>
                                <div class="message py-2 px-3 rounded mb-1 bg-secondary-subtle">
                                    <div>
                                        Yes, Orlando Allredy done <br> There are many variations of passages of Lorem Ipsum available
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!--[ Chat: left ]-->
                        <li class="mb-4 d-flex flex-row align-items-end msg-left">
                            <div class="d-flex gap-2">
                                <img class="avatar md rounded-circle mt-4" src="assets/images/user-2.png" alt="avatar">
                                <div>
                                    <span class="opacity-25 small">Cameron Root</span>
                                    <div class="message py-2 px-3 rounded position-relative">
                                        Please find attached images
                                        <div>
                                            <img class="w-25 img-thumbnail" src="assets/images/gallery/01.png" alt="">
                                            <img class="w-25 img-thumbnail" src="assets/images/gallery/02.png" alt="">
                                        </div>
                                        <span class="opacity-0 position-absolute small end-0 time">10:11 AM</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!--[ Chat: right ]-->
                        <li class="mb-4 d-flex flex-row-reverse align-items-end">
                            <div class="max-width-70 text-end">
                                <div class="user-info mb-1">
                                    <span class="opacity-25 small">10:12 AM, Today</span>
                                </div>
                                <div class="message py-2 px-3 rounded mb-1 bg-secondary-subtle">
                                    <div>Okay, will check and let you know.</div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="chat-send border-top-dashed border-dark-subtle pt-3 mt-3">
                        <div class="d-flex align-items-center gap-3">
                            <input type="text" class="form-control form-control-lg rounded-4" id="message" placeholder="Type your message...">
                            <button class="btn btn-primary rounded-pill" type="button">Send</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End:: Content -->
@endsection