@extends('email.layout.app')
@push('style')
    <link rel="stylesheet" href="{{ asset('assets/css/inbox.css') }}">
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
                    <div class="page-name fs-20 fw-bold ms-md-4 ms-2 position-relative">My Inbox</div>
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
                        <li>
                            <a href="#" class="text-decoration-none hover-svg" data-bs-toggle="modal" data-bs-target="#emailComposeModal">
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
<!-- Start:: Content -->
        <div class="content-area py-4">
            <div class="container-fluid px-2 px-md-4">
                <div class="row g-3">
                    <div class="col-12">
                        <!-- Start:: Inbox Header -->
                        <div class="d-flex align-items-center inbox-header border-bottom pb-3">
                            <button class="btn btn-link hover-svg text-body text-decoration-none p-0 me-3" type="button">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.2932 7.29286C11.4654 7.12068 11.6945 7.01725 11.9376 7.00197C12.1806 6.98669 12.4208 7.06061 12.6132 7.20986L12.7072 7.29286L18.7072 13.2929L18.7902 13.3869L18.8442 13.4639L18.8982 13.5599L18.9152 13.5959L18.9422 13.6629L18.9742 13.7709L18.9842 13.8239L18.9942 13.8839L18.9982 13.9409L19.0002 13.9999L18.9982 14.0589L18.9932 14.1169L18.9842 14.1769L18.9742 14.2289L18.9422 14.3369L18.9152 14.4039L18.8452 14.5359L18.7802 14.6259L18.7072 14.7069L18.6132 14.7899L18.5362 14.8439L18.4402 14.8979L18.4042 14.9149L18.3372 14.9419L18.2292 14.9739L18.1762 14.9839L18.1162 14.9939L18.0592 14.9979L18.0002 14.9999H6.00024C5.14824 14.9999 4.70324 14.0139 5.21724 13.3769L5.29324 13.2929L11.2932 7.29286Z" fill="currentColor" />
                                </svg>
                                <span class="text-uppercase fs-18 fw-bold">Today</span>
                            </button>
                            <ul id="inboxAction" class="nav inactive list-unstyled d-flex align-items-center ms-3 mb-0 fs-0 gap-3">
                                <li class="nav-item hover-svg"><a class="nav-link p-0" href="#">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3 6C3 5.46957 3.21071 4.96086 3.58579 4.58579C3.96086 4.21071 4.46957 4 5 4H19C19.5304 4 20.0391 4.21071 20.4142 4.58579C20.7893 4.96086 21 5.46957 21 6C21 6.53043 20.7893 7.03914 20.4142 7.41421C20.0391 7.78929 19.5304 8 19 8H5C4.46957 8 3.96086 7.78929 3.58579 7.41421C3.21071 7.03914 3 6.53043 3 6Z" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M5 8V18C5 18.5304 5.21071 19.0391 5.58579 19.4142C5.96086 19.7893 6.46957 20 7 20H17C17.5304 20 18.0391 19.7893 18.4142 19.4142C18.7893 19.0391 19 18.5304 19 18V8" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M10 12H14" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a></li>
                                <li class="nav-item hover-svg"><a class="nav-link p-0" href="#">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 9H12.01" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M11 12H12V16H13" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M12 3C19.2 3 21 4.8 21 12C21 19.2 19.2 21 12 21C4.8 21 3 19.2 3 12C3 4.8 4.8 3 12 3Z" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a></li>
                                <li class="nav-item hover-svg"><a class="nav-link p-0" href="#">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 7H20" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M10 11V17" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M14 11V17" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M5 7L6 19C6 19.5304 6.21071 20.0391 6.58579 20.4142C6.96086 20.7893 7.46957 21 8 21H16C16.5304 21 17.0391 20.7893 17.4142 20.4142C17.7893 20.0391 18 19.5304 18 19L19 7" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M9 7V4C9 3.73478 9.10536 3.48043 9.29289 3.29289C9.48043 3.10536 9.73478 3 10 3H14C14.2652 3 14.5196 3.10536 14.7071 3.29289C14.8946 3.48043 15 3.73478 15 4V7" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a></li>
                                <li class="nav-item hover-svg"><a class="nav-link p-0" href="#">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 12C11 12.2652 11.1054 12.5196 11.2929 12.7071C11.4804 12.8946 11.7348 13 12 13C12.2652 13 12.5196 12.8946 12.7071 12.7071C12.8946 12.5196 13 12.2652 13 12C13 11.7348 12.8946 11.4804 12.7071 11.2929C12.5196 11.1054 12.2652 11 12 11C11.7348 11 11.4804 11.1054 11.2929 11.2929C11.1054 11.4804 11 11.7348 11 12Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M11 19C11 19.2652 11.1054 19.5196 11.2929 19.7071C11.4804 19.8946 11.7348 20 12 20C12.2652 20 12.5196 19.8946 12.7071 19.7071C12.8946 19.5196 13 19.2652 13 19C13 18.7348 12.8946 18.4804 12.7071 18.2929C12.5196 18.1054 12.2652 18 12 18C11.7348 18 11.4804 18.1054 11.2929 18.2929C11.1054 18.4804 11 18.7348 11 19Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M11 5C11 5.26522 11.1054 5.51957 11.2929 5.70711C11.4804 5.89464 11.7348 6 12 6C12.2652 6 12.5196 5.89464 12.7071 5.70711C12.8946 5.51957 13 5.26522 13 5C13 4.73478 12.8946 4.48043 12.7071 4.29289C12.5196 4.10536 12.2652 4 12 4C11.7348 4 11.4804 4.10536 11.2929 4.29289C11.1054 4.48043 11 4.73478 11 5Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a></li>
                            </ul>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item email-list unread" onclick="toggleClass(this)">
                                <div class="mail-header d-flex gap-2 gap-md-4 align-items-center">
                                    <div class="info d-flex gap-2 align-items-center">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="" id="Marty_Brassfield">
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="#"><img class="rounded-circle border border-white shadow avatar md" src="assets/images/user-1.png" alt="Profile"></a>
                                            <h6 class="mb-0 ms-2 fw-normal nav-link p-0 d-none d-md-block text-nowrap">Marty Brassfield</h6>
                                        </div>
                                    </div>
                                    <div class="subject flex-grow-1 text-truncate" data-bs-toggle="collapse" data-bs-target="#Email_1" aria-expanded="false" aria-controls="collapseExample">
                                        <span class="fw-medium">Your Profile has been accepted</span><span class="opacity-50"> - Whether you need to speed up delivery, scale your team, or build something from scratch — we deliver fast, reliable results.</span>
                                    </div>
                                    <div class="action d-flex gap-1 gap-lg-3 align-items-center ms-auto">
                                        <a class="d-block" href="#">
                                            <svg class="hover-svg" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.364 7.24264L7.86396 13.7426C7.46614 14.1405 7.24264 14.68 7.24264 15.2426C7.24264 15.8052 7.46614 16.3448 7.86396 16.7426C8.26179 17.1405 8.80135 17.364 9.36396 17.364C9.92657 17.364 10.4661 17.1405 10.864 16.7426L17.364 10.2426C18.1596 9.44699 18.6066 8.36786 18.6066 7.24264C18.6066 6.11742 18.1596 5.03829 17.364 4.24264C16.5683 3.44699 15.4892 3 14.364 3C13.2387 3 12.1596 3.44699 11.364 4.24264L4.86396 10.7426C3.67049 11.9361 3 13.5548 3 15.2426C3 16.9305 3.67049 18.5492 4.86396 19.7426C6.05744 20.9361 7.67613 21.6066 9.36396 21.6066C11.0518 21.6066 12.6705 20.9361 13.864 19.7426L20.364 13.2426" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </a>
                                        <a class="d-block d-md-block d-none" href="#">
                                            <svg class="hover-svg text-primary text-opacity-25" onclick="this.classList.toggle('text-opacity-25')" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M12 19.0969L5.20163 22L5.85172 14.6135L1 9.02129L8.20015 7.35928L12 1L15.7998 7.35928L23 9.02129L18.1483 14.6135L18.7984 22L12 19.0969Z"></path>
                                            </svg>
                                        </a>
                                        <span class="mail-date fs-14 text-nowrap d-block opacity-50">10 min</span>
                                    </div>
                                </div>
                                <div class="collapse" id="Email_1">
                                    <div class="bg-transparent border-0 card card-body d-flex gap-2 gap-md-4 flex-row px-0">
                                        <div class="info d-none d-md-block"></div>
                                        <div class="flex-grow-1">
                                            <p>After a close review of your profile by our Team, we’ve determined that  in order for your profile to be accepted , you need to take the  following action:</p>
                                            <p>Make sure you provide a genuine profile picture. Illustrated pictures of yourself, your logo design, cartoon pictures or fake pictures will be  rejected. from 'Photo' section.</p>
                                            <p>See you inside! <br>Team TTM</p>
                                            <div class="mail-action border-top border-top-dashed pt-3 mt-4">
                                                <button class="btn btn-primary">Reply</button>
                                                <button class="btn btn-outline-primary">Forward</button>
                                            </div>
                                        </div>
                                        <div class="action"></div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item email-list" onclick="toggleClass(this)">
                                <div class="mail-header d-flex gap-2 gap-md-4 align-items-center">
                                    <div class="info d-flex gap-2 align-items-center">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="" id="Marshallcameron">
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="#"><img class="rounded-circle border border-white shadow avatar md" src="assets/images/user-2.png" alt="Profile"></a>
                                            <h6 class="mb-0 ms-2 fw-normal nav-link p-0 d-none d-md-block text-nowrap">Marshall Cameron</h6>
                                        </div>
                                    </div>
                                    <div class="subject flex-grow-1 text-truncate" data-bs-toggle="collapse" data-bs-target="#Email_2" aria-expanded="false" aria-controls="collapseExample">
                                        <span>Envato sent you a payment</span><span class="opacity-50"> - We’ve helped startups and enterprises push through bottlenecks and launch high-performance web apps without the usual stress.</span>
                                    </div>
                                    <div class="action d-flex gap-1 gap-lg-3 align-items-center ms-auto">
                                        <a class="d-block" href="#">
                                            <svg class="hover-svg" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.364 7.24264L7.86396 13.7426C7.46614 14.1405 7.24264 14.68 7.24264 15.2426C7.24264 15.8052 7.46614 16.3448 7.86396 16.7426C8.26179 17.1405 8.80135 17.364 9.36396 17.364C9.92657 17.364 10.4661 17.1405 10.864 16.7426L17.364 10.2426C18.1596 9.44699 18.6066 8.36786 18.6066 7.24264C18.6066 6.11742 18.1596 5.03829 17.364 4.24264C16.5683 3.44699 15.4892 3 14.364 3C13.2387 3 12.1596 3.44699 11.364 4.24264L4.86396 10.7426C3.67049 11.9361 3 13.5548 3 15.2426C3 16.9305 3.67049 18.5492 4.86396 19.7426C6.05744 20.9361 7.67613 21.6066 9.36396 21.6066C11.0518 21.6066 12.6705 20.9361 13.864 19.7426L20.364 13.2426" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </a>
                                        <a class="d-block d-md-block d-none" href="#">
                                            <svg class="hover-svg text-primary text-opacity-25" onclick="this.classList.toggle('text-opacity-25')" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M12 19.0969L5.20163 22L5.85172 14.6135L1 9.02129L8.20015 7.35928L12 1L15.7998 7.35928L23 9.02129L18.1483 14.6135L18.7984 22L12 19.0969Z"></path>
                                            </svg>
                                        </a>
                                        <span class="mail-date fs-14 text-nowrap d-block opacity-50">10 min</span>
                                    </div>
                                </div>
                                <div class="collapse" id="Email_2">
                                    <div class="bg-transparent border-0 card card-body d-flex gap-2 gap-md-4 flex-row px-0">
                                        <div class="info d-none d-md-block"></div>
                                        <div class="flex-grow-1">
                                            <p>After a close review of your profile by our Team, we’ve determined that  in order for your profile to be accepted , you need to take the  following action:</p>
                                            <p>Make sure you provide a genuine profile picture. Illustrated pictures of yourself, your logo design, cartoon pictures or fake pictures will be  rejected. from 'Photo' section.</p>
                                            <p>See you inside! <br>Team TTM</p>
                                            <div class="mail-action border-top border-top-dashed pt-3 mt-4">
                                                <button class="btn btn-primary">Reply</button>
                                                <button class="btn btn-outline-primary">Forward</button>
                                            </div>
                                        </div>
                                        <div class="action"></div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item email-list" onclick="toggleClass(this)">
                                <div class="mail-header d-flex gap-2 gap-md-4 align-items-center">
                                    <div class="info d-flex gap-2 align-items-center">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="" id="edittoke">
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="#"><img class="rounded-circle border border-white shadow avatar md" src="assets/images/user-3.png" alt="Profile"></a>
                                            <h6 class="mb-0 ms-2 fw-normal nav-link p-0 d-none d-md-block text-nowrap">Edit Toke</h6>
                                        </div>
                                    </div>
                                    <div class="subject flex-grow-1 text-truncate" data-bs-toggle="collapse" data-bs-target="#Email_3" aria-expanded="false" aria-controls="collapseExample">
                                        <span>We’ve received your opt-out</span><span class="opacity-50"> - Congrats! After carefully reviewing your profile, our Team has accepted it.</span>
                                    </div>
                                    <div class="action d-flex gap-1 gap-lg-3 align-items-center ms-auto">
                                        <a class="d-block d-md-block d-none" href="#">
                                            <svg class="hover-svg text-primary text-opacity-25" onclick="this.classList.toggle('text-opacity-25')" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M12 19.0969L5.20163 22L5.85172 14.6135L1 9.02129L8.20015 7.35928L12 1L15.7998 7.35928L23 9.02129L18.1483 14.6135L18.7984 22L12 19.0969Z"></path>
                                            </svg>
                                        </a>
                                        <span class="mail-date fs-14 text-nowrap d-block opacity-50">10 min</span>
                                    </div>
                                </div>
                                <div class="collapse" id="Email_3">
                                    <div class="bg-transparent border-0 card card-body d-flex gap-2 gap-md-4 flex-row px-0">
                                        <div class="info d-none d-md-block"></div>
                                        <div class="flex-grow-1">
                                            <p>After a close review of your profile by our Team, we’ve determined that  in order for your profile to be accepted , you need to take the  following action:</p>
                                            <p>Make sure you provide a genuine profile picture. Illustrated pictures of yourself, your logo design, cartoon pictures or fake pictures will be  rejected. from 'Photo' section.</p>
                                            <p>See you inside! <br>Team TTM</p>
                                            <div class="mail-action border-top border-top-dashed pt-3 mt-4">
                                                <button class="btn btn-primary">Reply</button>
                                                <button class="btn btn-outline-primary">Forward</button>
                                            </div>
                                        </div>
                                        <div class="action"></div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item email-list" onclick="toggleClass(this)">
                                <div class="mail-header d-flex gap-2 gap-md-4 align-items-center">
                                    <div class="info d-flex gap-2 align-items-center">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="" id="orlandoLentz">
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="#"><img class="rounded-circle border border-white shadow avatar md" src="assets/images/user-4.png" alt="Profile"></a>
                                            <h6 class="mb-0 ms-2 fw-normal nav-link p-0 d-none d-md-block text-nowrap">Orlando Lentz</h6>
                                        </div>
                                    </div>
                                    <div class="subject flex-grow-1 text-truncate" data-bs-toggle="collapse" data-bs-target="#Email_4" aria-expanded="false" aria-controls="collapseExample">
                                        <span>Your Profile has been accepted</span><span class="opacity-50"> - After carefully reviewing your profile, our Team has accepted it.</span>
                                    </div>
                                    <div class="action d-flex gap-1 gap-lg-3 align-items-center ms-auto">
                                        <a class="d-block d-md-block d-none" href="#">
                                            <svg class="hover-svg text-primary text-opacity-25" onclick="this.classList.toggle('text-opacity-25')" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M12 19.0969L5.20163 22L5.85172 14.6135L1 9.02129L8.20015 7.35928L12 1L15.7998 7.35928L23 9.02129L18.1483 14.6135L18.7984 22L12 19.0969Z"></path>
                                            </svg>
                                        </a>
                                        <span class="mail-date fs-14 text-nowrap d-block opacity-50">10 min</span>
                                    </div>
                                </div>
                                <div class="collapse" id="Email_4">
                                    <div class="bg-transparent border-0 card card-body d-flex gap-2 gap-md-4 flex-row px-0">
                                        <div class="info d-none d-md-block"></div>
                                        <div class="flex-grow-1">
                                            <p>After a close review of your profile by our Team, we’ve determined that  in order for your profile to be accepted , you need to take the  following action:</p>
                                            <p>Make sure you provide a genuine profile picture. Illustrated pictures of yourself, your logo design, cartoon pictures or fake pictures will be  rejected. from 'Photo' section.</p>
                                            <p>See you inside! <br>Team TTM</p>
                                            <div class="mail-action border-top border-top-dashed pt-3 mt-4">
                                                <button class="btn btn-primary">Reply</button>
                                                <button class="btn btn-outline-primary">Forward</button>
                                            </div>
                                        </div>
                                        <div class="action"></div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item email-list" onclick="toggleClass(this)">
                                <div class="mail-header d-flex gap-2 gap-md-4 align-items-center">
                                    <div class="info d-flex gap-2 align-items-center">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="" id="Comeren_Diaz">
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="#"><img class="rounded-circle border border-white shadow avatar md" src="assets/images/user-5.png" alt="Profile"></a>
                                            <h6 class="mb-0 ms-2 fw-normal nav-link p-0 d-none d-md-block text-nowrap">Comeren Diaz</h6>
                                        </div>
                                    </div>
                                    <div class="subject flex-grow-1 text-truncate" data-bs-toggle="collapse" data-bs-target="#Email_5" aria-expanded="false" aria-controls="collapseExample">
                                        <span>Hire Dedicated Developer</span><span class="opacity-50"> -  I hope this message finds you well. I am writing to express my interest</span>
                                    </div>
                                    <div class="action d-flex gap-1 gap-lg-3 align-items-center ms-auto">
                                        <a class="d-block" href="#">
                                            <svg class="hover-svg" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.364 7.24264L7.86396 13.7426C7.46614 14.1405 7.24264 14.68 7.24264 15.2426C7.24264 15.8052 7.46614 16.3448 7.86396 16.7426C8.26179 17.1405 8.80135 17.364 9.36396 17.364C9.92657 17.364 10.4661 17.1405 10.864 16.7426L17.364 10.2426C18.1596 9.44699 18.6066 8.36786 18.6066 7.24264C18.6066 6.11742 18.1596 5.03829 17.364 4.24264C16.5683 3.44699 15.4892 3 14.364 3C13.2387 3 12.1596 3.44699 11.364 4.24264L4.86396 10.7426C3.67049 11.9361 3 13.5548 3 15.2426C3 16.9305 3.67049 18.5492 4.86396 19.7426C6.05744 20.9361 7.67613 21.6066 9.36396 21.6066C11.0518 21.6066 12.6705 20.9361 13.864 19.7426L20.364 13.2426" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </a>
                                        <a class="d-block d-md-block d-none" href="#">
                                            <svg class="hover-svg text-primary text-opacity-25" onclick="this.classList.toggle('text-opacity-25')" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M12 19.0969L5.20163 22L5.85172 14.6135L1 9.02129L8.20015 7.35928L12 1L15.7998 7.35928L23 9.02129L18.1483 14.6135L18.7984 22L12 19.0969Z"></path>
                                            </svg>
                                        </a>
                                        <span class="mail-date fs-14 text-nowrap d-block opacity-50">10 min</span>
                                    </div>
                                </div>
                                <div class="collapse" id="Email_5">
                                    <div class="bg-transparent border-0 card card-body d-flex gap-2 gap-md-4 flex-row px-0">
                                        <div class="info d-none d-md-block"></div>
                                        <div class="flex-grow-1">
                                            <p>After a close review of your profile by our Team, we’ve determined that  in order for your profile to be accepted , you need to take the  following action:</p>
                                            <p>Make sure you provide a genuine profile picture. Illustrated pictures of yourself, your logo design, cartoon pictures or fake pictures will be  rejected. from 'Photo' section.</p>
                                            <p>See you inside! <br>Team TTM</p>
                                            <div class="mail-action border-top border-top-dashed pt-3 mt-4">
                                                <button class="btn btn-primary">Reply</button>
                                                <button class="btn btn-outline-primary">Forward</button>
                                            </div>
                                        </div>
                                        <div class="action"></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- End:: Inbox List -->
                    <div class="col-12">
                        <!-- Start:: Inbox Header -->
                        <div class="d-flex align-items-center inbox-header border-bottom pb-3">
                            <button class="btn btn-link hover-svg text-body text-decoration-none p-0 me-3" type="button">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.2932 7.29286C11.4654 7.12068 11.6945 7.01725 11.9376 7.00197C12.1806 6.98669 12.4208 7.06061 12.6132 7.20986L12.7072 7.29286L18.7072 13.2929L18.7902 13.3869L18.8442 13.4639L18.8982 13.5599L18.9152 13.5959L18.9422 13.6629L18.9742 13.7709L18.9842 13.8239L18.9942 13.8839L18.9982 13.9409L19.0002 13.9999L18.9982 14.0589L18.9932 14.1169L18.9842 14.1769L18.9742 14.2289L18.9422 14.3369L18.9152 14.4039L18.8452 14.5359L18.7802 14.6259L18.7072 14.7069L18.6132 14.7899L18.5362 14.8439L18.4402 14.8979L18.4042 14.9149L18.3372 14.9419L18.2292 14.9739L18.1762 14.9839L18.1162 14.9939L18.0592 14.9979L18.0002 14.9999H6.00024C5.14824 14.9999 4.70324 14.0139 5.21724 13.3769L5.29324 13.2929L11.2932 7.29286Z" fill="currentColor" />
                                </svg>
                                <span class="text-uppercase fs-18 fw-bold">Everything else</span>
                            </button>
                            <ul id="inboxAction" class="nav inactive list-unstyled d-flex align-items-center ms-3 mb-0 fs-0 gap-3">
                                <li class="nav-item hover-svg"><a class="nav-link p-0" href="#">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3 6C3 5.46957 3.21071 4.96086 3.58579 4.58579C3.96086 4.21071 4.46957 4 5 4H19C19.5304 4 20.0391 4.21071 20.4142 4.58579C20.7893 4.96086 21 5.46957 21 6C21 6.53043 20.7893 7.03914 20.4142 7.41421C20.0391 7.78929 19.5304 8 19 8H5C4.46957 8 3.96086 7.78929 3.58579 7.41421C3.21071 7.03914 3 6.53043 3 6Z" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M5 8V18C5 18.5304 5.21071 19.0391 5.58579 19.4142C5.96086 19.7893 6.46957 20 7 20H17C17.5304 20 18.0391 19.7893 18.4142 19.4142C18.7893 19.0391 19 18.5304 19 18V8" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M10 12H14" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a></li>
                                <li class="nav-item hover-svg"><a class="nav-link p-0" href="#">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 9H12.01" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M11 12H12V16H13" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M12 3C19.2 3 21 4.8 21 12C21 19.2 19.2 21 12 21C4.8 21 3 19.2 3 12C3 4.8 4.8 3 12 3Z" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a></li>
                                <li class="nav-item hover-svg"><a class="nav-link p-0" href="#">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 7H20" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M10 11V17" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M14 11V17" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M5 7L6 19C6 19.5304 6.21071 20.0391 6.58579 20.4142C6.96086 20.7893 7.46957 21 8 21H16C16.5304 21 17.0391 20.7893 17.4142 20.4142C17.7893 20.0391 18 19.5304 18 19L19 7" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M9 7V4C9 3.73478 9.10536 3.48043 9.29289 3.29289C9.48043 3.10536 9.73478 3 10 3H14C14.2652 3 14.5196 3.10536 14.7071 3.29289C14.8946 3.48043 15 3.73478 15 4V7" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a></li>
                                <li class="nav-item hover-svg"><a class="nav-link p-0" href="#">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 12C11 12.2652 11.1054 12.5196 11.2929 12.7071C11.4804 12.8946 11.7348 13 12 13C12.2652 13 12.5196 12.8946 12.7071 12.7071C12.8946 12.5196 13 12.2652 13 12C13 11.7348 12.8946 11.4804 12.7071 11.2929C12.5196 11.1054 12.2652 11 12 11C11.7348 11 11.4804 11.1054 11.2929 11.2929C11.1054 11.4804 11 11.7348 11 12Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M11 19C11 19.2652 11.1054 19.5196 11.2929 19.7071C11.4804 19.8946 11.7348 20 12 20C12.2652 20 12.5196 19.8946 12.7071 19.7071C12.8946 19.5196 13 19.2652 13 19C13 18.7348 12.8946 18.4804 12.7071 18.2929C12.5196 18.1054 12.2652 18 12 18C11.7348 18 11.4804 18.1054 11.2929 18.2929C11.1054 18.4804 11 18.7348 11 19Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M11 5C11 5.26522 11.1054 5.51957 11.2929 5.70711C11.4804 5.89464 11.7348 6 12 6C12.2652 6 12.5196 5.89464 12.7071 5.70711C12.8946 5.51957 13 5.26522 13 5C13 4.73478 12.8946 4.48043 12.7071 4.29289C12.5196 4.10536 12.2652 4 12 4C11.7348 4 11.4804 4.10536 11.2929 4.29289C11.1054 4.48043 11 4.73478 11 5Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a></li>
                            </ul>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item email-list" onclick="toggleClass(this)">
                                <div class="mail-header d-flex gap-2 gap-md-4 align-items-center">
                                    <div class="info d-flex gap-2 align-items-center">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="" id="marty_brassfield1">
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="#"><img class="rounded-circle border border-white shadow avatar md" src="assets/images/user-1.png" alt="Profile"></a>
                                            <h6 class="mb-0 ms-2 fw-normal nav-link p-0 d-none d-md-block text-nowrap">Marty Brassfield</h6>
                                        </div>
                                    </div>
                                    <div class="subject flex-grow-1 text-truncate" data-bs-toggle="collapse" data-bs-target="#Email_6" aria-expanded="false" aria-controls="collapseExample">
                                        <span class="fw-medium">Your Profile has been accepted</span><span class="opacity-50"> - Whether you need to speed up delivery, scale your team, or build something from scratch — we deliver fast, reliable results.</span>
                                    </div>
                                    <div class="action d-flex gap-1 gap-lg-3 align-items-center ms-auto">
                                        <a class="d-block" href="#">
                                            <svg class="hover-svg" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.364 7.24264L7.86396 13.7426C7.46614 14.1405 7.24264 14.68 7.24264 15.2426C7.24264 15.8052 7.46614 16.3448 7.86396 16.7426C8.26179 17.1405 8.80135 17.364 9.36396 17.364C9.92657 17.364 10.4661 17.1405 10.864 16.7426L17.364 10.2426C18.1596 9.44699 18.6066 8.36786 18.6066 7.24264C18.6066 6.11742 18.1596 5.03829 17.364 4.24264C16.5683 3.44699 15.4892 3 14.364 3C13.2387 3 12.1596 3.44699 11.364 4.24264L4.86396 10.7426C3.67049 11.9361 3 13.5548 3 15.2426C3 16.9305 3.67049 18.5492 4.86396 19.7426C6.05744 20.9361 7.67613 21.6066 9.36396 21.6066C11.0518 21.6066 12.6705 20.9361 13.864 19.7426L20.364 13.2426" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </a>
                                        <a class="d-block d-md-block d-none" href="#">
                                            <svg class="hover-svg text-primary text-opacity-25" onclick="this.classList.toggle('text-opacity-25')" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M12 19.0969L5.20163 22L5.85172 14.6135L1 9.02129L8.20015 7.35928L12 1L15.7998 7.35928L23 9.02129L18.1483 14.6135L18.7984 22L12 19.0969Z"></path>
                                            </svg>
                                        </a>
                                        <span class="mail-date fs-14 text-nowrap d-block opacity-50">10 min</span>
                                    </div>
                                </div>
                                <div class="collapse" id="Email_6">
                                    <div class="bg-transparent border-0 card card-body d-flex gap-2 gap-md-4 flex-row px-0">
                                        <div class="info d-none d-md-block"></div>
                                        <div class="flex-grow-1">
                                            <p>After a close review of your profile by our Team, we’ve determined that  in order for your profile to be accepted , you need to take the  following action:</p>
                                            <p>Make sure you provide a genuine profile picture. Illustrated pictures of yourself, your logo design, cartoon pictures or fake pictures will be  rejected. from 'Photo' section.</p>
                                            <p>See you inside! <br>Team TTM</p>
                                            <div class="mail-action border-top border-top-dashed pt-3 mt-4">
                                                <button class="btn btn-primary">Reply</button>
                                                <button class="btn btn-outline-primary">Forward</button>
                                            </div>
                                        </div>
                                        <div class="action"></div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item email-list" onclick="toggleClass(this)">
                                <div class="mail-header d-flex gap-2 gap-md-4 align-items-center">
                                    <div class="info d-flex gap-2 align-items-center">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="" id="Marshallcameron2">
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="#"><img class="rounded-circle border border-white shadow avatar md" src="assets/images/user-2.png" alt="Profile"></a>
                                            <h6 class="mb-0 ms-2 fw-normal nav-link p-0 d-none d-md-block text-nowrap">Marshall Cameron</h6>
                                        </div>
                                    </div>
                                    <div class="subject flex-grow-1 text-truncate" data-bs-toggle="collapse" data-bs-target="#Email_7" aria-expanded="false" aria-controls="collapseExample">
                                        <span>Envato sent you a payment</span><span class="opacity-50"> - We’ve helped startups and enterprises push through bottlenecks and launch high-performance web apps without the usual stress.</span>
                                    </div>
                                    <div class="action d-flex gap-1 gap-lg-3 align-items-center ms-auto">
                                        <a class="d-block" href="#">
                                            <svg class="hover-svg" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.364 7.24264L7.86396 13.7426C7.46614 14.1405 7.24264 14.68 7.24264 15.2426C7.24264 15.8052 7.46614 16.3448 7.86396 16.7426C8.26179 17.1405 8.80135 17.364 9.36396 17.364C9.92657 17.364 10.4661 17.1405 10.864 16.7426L17.364 10.2426C18.1596 9.44699 18.6066 8.36786 18.6066 7.24264C18.6066 6.11742 18.1596 5.03829 17.364 4.24264C16.5683 3.44699 15.4892 3 14.364 3C13.2387 3 12.1596 3.44699 11.364 4.24264L4.86396 10.7426C3.67049 11.9361 3 13.5548 3 15.2426C3 16.9305 3.67049 18.5492 4.86396 19.7426C6.05744 20.9361 7.67613 21.6066 9.36396 21.6066C11.0518 21.6066 12.6705 20.9361 13.864 19.7426L20.364 13.2426" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </a>
                                        <a class="d-block d-md-block d-none" href="#">
                                            <svg class="hover-svg text-primary text-opacity-25" onclick="this.classList.toggle('text-opacity-25')" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M12 19.0969L5.20163 22L5.85172 14.6135L1 9.02129L8.20015 7.35928L12 1L15.7998 7.35928L23 9.02129L18.1483 14.6135L18.7984 22L12 19.0969Z"></path>
                                            </svg>
                                        </a>
                                        <span class="mail-date fs-14 text-nowrap d-block opacity-50">10 min</span>
                                    </div>
                                </div>
                                <div class="collapse" id="Email_7">
                                    <div class="bg-transparent border-0 card card-body d-flex gap-2 gap-md-4 flex-row px-0">
                                        <div class="info d-none d-md-block"></div>
                                        <div class="flex-grow-1">
                                            <p>After a close review of your profile by our Team, we’ve determined that  in order for your profile to be accepted , you need to take the  following action:</p>
                                            <p>Make sure you provide a genuine profile picture. Illustrated pictures of yourself, your logo design, cartoon pictures or fake pictures will be  rejected. from 'Photo' section.</p>
                                            <p>See you inside! <br>Team TTM</p>
                                            <div class="mail-action border-top border-top-dashed pt-3 mt-4">
                                                <button class="btn btn-primary">Reply</button>
                                                <button class="btn btn-outline-primary">Forward</button>
                                            </div>
                                        </div>
                                        <div class="action"></div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item email-list" onclick="toggleClass(this)">
                                <div class="mail-header d-flex gap-2 gap-md-4 align-items-center">
                                    <div class="info d-flex gap-2 align-items-center">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="" id="edittoke2">
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="#"><img class="rounded-circle border border-white shadow avatar md" src="assets/images/user-3.png" alt="Profile"></a>
                                            <h6 class="mb-0 ms-2 fw-normal nav-link p-0 d-none d-md-block text-nowrap">Edit Toke</h6>
                                        </div>
                                    </div>
                                    <div class="subject flex-grow-1 text-truncate" data-bs-toggle="collapse" data-bs-target="#Email_8" aria-expanded="false" aria-controls="collapseExample">
                                        <span>We’ve received your opt-out</span><span class="opacity-50"> - Congrats! After carefully reviewing your profile, our Team has accepted it.</span>
                                    </div>
                                    <div class="action d-flex gap-1 gap-lg-3 align-items-center ms-auto">
                                        <a class="d-block d-md-block d-none" href="#">
                                            <svg class="hover-svg text-primary text-opacity-25" onclick="this.classList.toggle('text-opacity-25')" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M12 19.0969L5.20163 22L5.85172 14.6135L1 9.02129L8.20015 7.35928L12 1L15.7998 7.35928L23 9.02129L18.1483 14.6135L18.7984 22L12 19.0969Z"></path>
                                            </svg>
                                        </a>
                                        <span class="mail-date fs-14 text-nowrap d-block opacity-50">10 min</span>
                                    </div>
                                </div>
                                <div class="collapse" id="Email_8">
                                    <div class="bg-transparent border-0 card card-body d-flex gap-2 gap-md-4 flex-row px-0">
                                        <div class="info d-none d-md-block"></div>
                                        <div class="flex-grow-1">
                                            <p>After a close review of your profile by our Team, we’ve determined that  in order for your profile to be accepted , you need to take the  following action:</p>
                                            <p>Make sure you provide a genuine profile picture. Illustrated pictures of yourself, your logo design, cartoon pictures or fake pictures will be  rejected. from 'Photo' section.</p>
                                            <p>See you inside! <br>Team TTM</p>
                                            <div class="mail-action border-top border-top-dashed pt-3 mt-4">
                                                <button class="btn btn-primary">Reply</button>
                                                <button class="btn btn-outline-primary">Forward</button>
                                            </div>
                                        </div>
                                        <div class="action"></div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item email-list" onclick="toggleClass(this)">
                                <div class="mail-header d-flex gap-2 gap-md-4 align-items-center">
                                    <div class="info d-flex gap-2 align-items-center">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="" id="orlandoLentz2">
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="#"><img class="rounded-circle border border-white shadow avatar md" src="assets/images/user-4.png" alt="Profile"></a>
                                            <h6 class="mb-0 ms-2 fw-normal nav-link p-0 d-none d-md-block text-nowrap">Orlando Lentz</h6>
                                        </div>
                                    </div>
                                    <div class="subject flex-grow-1 text-truncate" data-bs-toggle="collapse" data-bs-target="#Email_9" aria-expanded="false" aria-controls="collapseExample">
                                        <span>Your Profile has been accepted</span><span class="opacity-50"> - After carefully reviewing your profile, our Team has accepted it.</span>
                                    </div>
                                    <div class="action d-flex gap-1 gap-lg-3 align-items-center ms-auto">
                                        <a class="d-block d-md-block d-none" href="#">
                                            <svg class="hover-svg text-primary text-opacity-25" onclick="this.classList.toggle('text-opacity-25')" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M12 19.0969L5.20163 22L5.85172 14.6135L1 9.02129L8.20015 7.35928L12 1L15.7998 7.35928L23 9.02129L18.1483 14.6135L18.7984 22L12 19.0969Z"></path>
                                            </svg>
                                        </a>
                                        <span class="mail-date fs-14 text-nowrap d-block opacity-50">10 min</span>
                                    </div>
                                </div>
                                <div class="collapse" id="Email_9">
                                    <div class="bg-transparent border-0 card card-body d-flex gap-2 gap-md-4 flex-row px-0">
                                        <div class="info d-none d-md-block"></div>
                                        <div class="flex-grow-1">
                                            <p>After a close review of your profile by our Team, we’ve determined that  in order for your profile to be accepted , you need to take the  following action:</p>
                                            <p>Make sure you provide a genuine profile picture. Illustrated pictures of yourself, your logo design, cartoon pictures or fake pictures will be  rejected. from 'Photo' section.</p>
                                            <p>See you inside! <br>Team TTM</p>
                                            <div class="mail-action border-top border-top-dashed pt-3 mt-4">
                                                <button class="btn btn-primary">Reply</button>
                                                <button class="btn btn-outline-primary">Forward</button>
                                            </div>
                                        </div>
                                        <div class="action"></div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item email-list" onclick="toggleClass(this)">
                                <div class="mail-header d-flex gap-2 gap-md-4 align-items-center">
                                    <div class="info d-flex gap-2 align-items-center">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="" id="Comeren_Diaz3">
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="#"><img class="rounded-circle border border-white shadow avatar md" src="assets/images/user-5.png" alt="Profile"></a>
                                            <h6 class="mb-0 ms-2 fw-normal nav-link p-0 d-none d-md-block text-nowrap">Comeren Diaz</h6>
                                        </div>
                                    </div>
                                    <div class="subject flex-grow-1 text-truncate" data-bs-toggle="collapse" data-bs-target="#Email_10" aria-expanded="false" aria-controls="collapseExample">
                                        <span>Hire Dedicated Developer</span><span class="opacity-50"> -  I hope this message finds you well. I am writing to express my interest</span>
                                    </div>
                                    <div class="action d-flex gap-1 gap-lg-3 align-items-center ms-auto">
                                        <a class="d-block" href="#">
                                            <svg class="hover-svg" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.364 7.24264L7.86396 13.7426C7.46614 14.1405 7.24264 14.68 7.24264 15.2426C7.24264 15.8052 7.46614 16.3448 7.86396 16.7426C8.26179 17.1405 8.80135 17.364 9.36396 17.364C9.92657 17.364 10.4661 17.1405 10.864 16.7426L17.364 10.2426C18.1596 9.44699 18.6066 8.36786 18.6066 7.24264C18.6066 6.11742 18.1596 5.03829 17.364 4.24264C16.5683 3.44699 15.4892 3 14.364 3C13.2387 3 12.1596 3.44699 11.364 4.24264L4.86396 10.7426C3.67049 11.9361 3 13.5548 3 15.2426C3 16.9305 3.67049 18.5492 4.86396 19.7426C6.05744 20.9361 7.67613 21.6066 9.36396 21.6066C11.0518 21.6066 12.6705 20.9361 13.864 19.7426L20.364 13.2426" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </a>
                                        <a class="d-block d-md-block d-none" href="#">
                                            <svg class="hover-svg text-primary text-opacity-25" onclick="this.classList.toggle('text-opacity-25')" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M12 19.0969L5.20163 22L5.85172 14.6135L1 9.02129L8.20015 7.35928L12 1L15.7998 7.35928L23 9.02129L18.1483 14.6135L18.7984 22L12 19.0969Z"></path>
                                            </svg>
                                        </a>
                                        <span class="mail-date fs-14 text-nowrap d-block opacity-50">10 min</span>
                                    </div>
                                </div>
                                <div class="collapse" id="Email_10">
                                    <div class="bg-transparent border-0 card card-body d-flex gap-2 gap-md-4 flex-row px-0">
                                        <div class="info d-none d-md-block"></div>
                                        <div class="flex-grow-1">
                                            <p>After a close review of your profile by our Team, we’ve determined that  in order for your profile to be accepted , you need to take the  following action:</p>
                                            <p>Make sure you provide a genuine profile picture. Illustrated pictures of yourself, your logo design, cartoon pictures or fake pictures will be  rejected. from 'Photo' section.</p>
                                            <p>See you inside! <br>Team TTM</p>
                                            <div class="mail-action border-top border-top-dashed pt-3 mt-4">
                                                <button class="btn btn-primary">Reply</button>
                                                <button class="btn btn-outline-primary">Forward</button>
                                            </div>
                                        </div>
                                        <div class="action"></div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item email-list" onclick="toggleClass(this)">
                                <div class="mail-header d-flex gap-2 gap-md-4 align-items-center">
                                    <div class="info d-flex gap-2 align-items-center">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="" id="marty_brassfield3">
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="#"><img class="rounded-circle border border-white shadow avatar md" src="assets/images/user-2.png" alt="Profile"></a>
                                            <h6 class="mb-0 ms-2 fw-normal nav-link p-0 d-none d-md-block text-nowrap">Marshall Cameron</h6>
                                        </div>
                                    </div>
                                    <div class="subject flex-grow-1 text-truncate" data-bs-toggle="collapse" data-bs-target="#Email_11" aria-expanded="false" aria-controls="collapseExample">
                                        <span>Envato sent you a payment</span><span class="opacity-50"> - We’ve helped startups and enterprises push through bottlenecks and launch high-performance web apps without the usual stress.</span>
                                    </div>
                                    <div class="action d-flex gap-1 gap-lg-3 align-items-center ms-auto">
                                        <a class="d-block" href="#">
                                            <svg class="hover-svg" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.364 7.24264L7.86396 13.7426C7.46614 14.1405 7.24264 14.68 7.24264 15.2426C7.24264 15.8052 7.46614 16.3448 7.86396 16.7426C8.26179 17.1405 8.80135 17.364 9.36396 17.364C9.92657 17.364 10.4661 17.1405 10.864 16.7426L17.364 10.2426C18.1596 9.44699 18.6066 8.36786 18.6066 7.24264C18.6066 6.11742 18.1596 5.03829 17.364 4.24264C16.5683 3.44699 15.4892 3 14.364 3C13.2387 3 12.1596 3.44699 11.364 4.24264L4.86396 10.7426C3.67049 11.9361 3 13.5548 3 15.2426C3 16.9305 3.67049 18.5492 4.86396 19.7426C6.05744 20.9361 7.67613 21.6066 9.36396 21.6066C11.0518 21.6066 12.6705 20.9361 13.864 19.7426L20.364 13.2426" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </a>
                                        <a class="d-block d-md-block d-none" href="#">
                                            <svg class="hover-svg text-primary text-opacity-25" onclick="this.classList.toggle('text-opacity-25')" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M12 19.0969L5.20163 22L5.85172 14.6135L1 9.02129L8.20015 7.35928L12 1L15.7998 7.35928L23 9.02129L18.1483 14.6135L18.7984 22L12 19.0969Z"></path>
                                            </svg>
                                        </a>
                                        <span class="mail-date fs-14 text-nowrap d-block opacity-50">10 min</span>
                                    </div>
                                </div>
                                <div class="collapse" id="Email_11">
                                    <div class="bg-transparent border-0 card card-body d-flex gap-2 gap-md-4 flex-row px-0">
                                        <div class="info d-none d-md-block"></div>
                                        <div class="flex-grow-1">
                                            <p>After a close review of your profile by our Team, we’ve determined that  in order for your profile to be accepted , you need to take the  following action:</p>
                                            <p>Make sure you provide a genuine profile picture. Illustrated pictures of yourself, your logo design, cartoon pictures or fake pictures will be  rejected. from 'Photo' section.</p>
                                            <p>See you inside! <br>Team TTM</p>
                                            <div class="mail-action border-top border-top-dashed pt-3 mt-4">
                                                <button class="btn btn-primary">Reply</button>
                                                <button class="btn btn-outline-primary">Forward</button>
                                            </div>
                                        </div>
                                        <div class="action"></div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item email-list" onclick="toggleClass(this)">
                                <div class="mail-header d-flex gap-2 gap-md-4 align-items-center">
                                    <div class="info d-flex gap-2 align-items-center">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="" id="marty_brassfield2">
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="#"><img class="rounded-circle border border-white shadow avatar md" src="assets/images/user-1.png" alt="Profile"></a>
                                            <h6 class="mb-0 ms-2 fw-normal nav-link p-0 d-none d-md-block text-nowrap">Marty Brassfield</h6>
                                        </div>
                                    </div>
                                    <div class="subject flex-grow-1 text-truncate" data-bs-toggle="collapse" data-bs-target="#Email_12" aria-expanded="false" aria-controls="collapseExample">
                                        <span class="fw-medium">Your Profile has been accepted</span><span class="opacity-50"> - Whether you need to speed up delivery, scale your team, or build something from scratch — we deliver fast, reliable results.</span>
                                    </div>
                                    <div class="action d-flex gap-1 gap-lg-3 align-items-center ms-auto">
                                        <a class="d-block" href="#">
                                            <svg class="hover-svg" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.364 7.24264L7.86396 13.7426C7.46614 14.1405 7.24264 14.68 7.24264 15.2426C7.24264 15.8052 7.46614 16.3448 7.86396 16.7426C8.26179 17.1405 8.80135 17.364 9.36396 17.364C9.92657 17.364 10.4661 17.1405 10.864 16.7426L17.364 10.2426C18.1596 9.44699 18.6066 8.36786 18.6066 7.24264C18.6066 6.11742 18.1596 5.03829 17.364 4.24264C16.5683 3.44699 15.4892 3 14.364 3C13.2387 3 12.1596 3.44699 11.364 4.24264L4.86396 10.7426C3.67049 11.9361 3 13.5548 3 15.2426C3 16.9305 3.67049 18.5492 4.86396 19.7426C6.05744 20.9361 7.67613 21.6066 9.36396 21.6066C11.0518 21.6066 12.6705 20.9361 13.864 19.7426L20.364 13.2426" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </a>
                                        <a class="d-block d-md-block d-none" href="#">
                                            <svg class="hover-svg text-primary text-opacity-25" onclick="this.classList.toggle('text-opacity-25')" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M12 19.0969L5.20163 22L5.85172 14.6135L1 9.02129L8.20015 7.35928L12 1L15.7998 7.35928L23 9.02129L18.1483 14.6135L18.7984 22L12 19.0969Z"></path>
                                            </svg>
                                        </a>
                                        <span class="mail-date fs-14 text-nowrap d-block opacity-50">10 min</span>
                                    </div>
                                </div>
                                <div class="collapse" id="Email_12">
                                    <div class="bg-transparent border-0 card card-body d-flex gap-2 gap-md-4 flex-row px-0">
                                        <div class="info d-none d-md-block"></div>
                                        <div class="flex-grow-1">
                                            <p>After a close review of your profile by our Team, we’ve determined that  in order for your profile to be accepted , you need to take the  following action:</p>
                                            <p>Make sure you provide a genuine profile picture. Illustrated pictures of yourself, your logo design, cartoon pictures or fake pictures will be  rejected. from 'Photo' section.</p>
                                            <p>See you inside! <br>Team TTM</p>
                                            <div class="mail-action border-top border-top-dashed pt-3 mt-4">
                                                <button class="btn btn-primary">Reply</button>
                                                <button class="btn btn-outline-primary">Forward</button>
                                            </div>
                                        </div>
                                        <div class="action"></div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item email-list" onclick="toggleClass(this)">
                                <div class="mail-header d-flex gap-2 gap-md-4 align-items-center">
                                    <div class="info d-flex gap-2 align-items-center">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="" id="Marshallcameron3">
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="#"><img class="rounded-circle border border-white shadow avatar md" src="assets/images/user-2.png" alt="Profile"></a>
                                            <h6 class="mb-0 ms-2 fw-normal nav-link p-0 d-none d-md-block text-nowrap">Marshall Cameron</h6>
                                        </div>
                                    </div>
                                    <div class="subject flex-grow-1 text-truncate" data-bs-toggle="collapse" data-bs-target="#Email_13" aria-expanded="false" aria-controls="collapseExample">
                                        <span>Envato sent you a payment</span><span class="opacity-50"> - We’ve helped startups and enterprises push through bottlenecks and launch high-performance web apps without the usual stress.</span>
                                    </div>
                                    <div class="action d-flex gap-1 gap-lg-3 align-items-center ms-auto">
                                        <a class="d-block" href="#">
                                            <svg class="hover-svg" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.364 7.24264L7.86396 13.7426C7.46614 14.1405 7.24264 14.68 7.24264 15.2426C7.24264 15.8052 7.46614 16.3448 7.86396 16.7426C8.26179 17.1405 8.80135 17.364 9.36396 17.364C9.92657 17.364 10.4661 17.1405 10.864 16.7426L17.364 10.2426C18.1596 9.44699 18.6066 8.36786 18.6066 7.24264C18.6066 6.11742 18.1596 5.03829 17.364 4.24264C16.5683 3.44699 15.4892 3 14.364 3C13.2387 3 12.1596 3.44699 11.364 4.24264L4.86396 10.7426C3.67049 11.9361 3 13.5548 3 15.2426C3 16.9305 3.67049 18.5492 4.86396 19.7426C6.05744 20.9361 7.67613 21.6066 9.36396 21.6066C11.0518 21.6066 12.6705 20.9361 13.864 19.7426L20.364 13.2426" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </a>
                                        <a class="d-block d-md-block d-none" href="#">
                                            <svg class="hover-svg text-primary text-opacity-25" onclick="this.classList.toggle('text-opacity-25')" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M12 19.0969L5.20163 22L5.85172 14.6135L1 9.02129L8.20015 7.35928L12 1L15.7998 7.35928L23 9.02129L18.1483 14.6135L18.7984 22L12 19.0969Z"></path>
                                            </svg>
                                        </a>
                                        <span class="mail-date fs-14 text-nowrap d-block opacity-50">10 min</span>
                                    </div>
                                </div>
                                <div class="collapse" id="Email_13">
                                    <div class="bg-transparent border-0 card card-body d-flex gap-2 gap-md-4 flex-row px-0">
                                        <div class="info d-none d-md-block"></div>
                                        <div class="flex-grow-1">
                                            <p>After a close review of your profile by our Team, we’ve determined that  in order for your profile to be accepted , you need to take the  following action:</p>
                                            <p>Make sure you provide a genuine profile picture. Illustrated pictures of yourself, your logo design, cartoon pictures or fake pictures will be  rejected. from 'Photo' section.</p>
                                            <p>See you inside! <br>Team TTM</p>
                                            <div class="mail-action border-top border-top-dashed pt-3 mt-4">
                                                <button class="btn btn-primary">Reply</button>
                                                <button class="btn btn-outline-primary">Forward</button>
                                            </div>
                                        </div>
                                        <div class="action"></div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item email-list" onclick="toggleClass(this)">
                                <div class="mail-header d-flex gap-2 gap-md-4 align-items-center">
                                    <div class="info d-flex gap-2 align-items-center">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="" id="edittoke3">
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="#"><img class="rounded-circle border border-white shadow avatar md" src="assets/images/user-3.png" alt="Profile"></a>
                                            <h6 class="mb-0 ms-2 fw-normal nav-link p-0 d-none d-md-block text-nowrap">Edit Toke</h6>
                                        </div>
                                    </div>
                                    <div class="subject flex-grow-1 text-truncate" data-bs-toggle="collapse" data-bs-target="#Email_14" aria-expanded="false" aria-controls="collapseExample">
                                        <span>We’ve received your opt-out</span><span class="opacity-50"> - Congrats! After carefully reviewing your profile, our Team has accepted it.</span>
                                    </div>
                                    <div class="action d-flex gap-1 gap-lg-3 align-items-center ms-auto">
                                        <a class="d-block d-md-block d-none" href="#">
                                            <svg class="hover-svg text-primary text-opacity-25" onclick="this.classList.toggle('text-opacity-25')" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M12 19.0969L5.20163 22L5.85172 14.6135L1 9.02129L8.20015 7.35928L12 1L15.7998 7.35928L23 9.02129L18.1483 14.6135L18.7984 22L12 19.0969Z"></path>
                                            </svg>
                                        </a>
                                        <span class="mail-date fs-14 text-nowrap d-block opacity-50">10 min</span>
                                    </div>
                                </div>
                                <div class="collapse" id="Email_14">
                                    <div class="bg-transparent border-0 card card-body d-flex gap-2 gap-md-4 flex-row px-0">
                                        <div class="info d-none d-md-block"></div>
                                        <div class="flex-grow-1">
                                            <p>After a close review of your profile by our Team, we’ve determined that  in order for your profile to be accepted , you need to take the  following action:</p>
                                            <p>Make sure you provide a genuine profile picture. Illustrated pictures of yourself, your logo design, cartoon pictures or fake pictures will be  rejected. from 'Photo' section.</p>
                                            <p>See you inside! <br>Team TTM</p>
                                            <div class="mail-action border-top border-top-dashed pt-3 mt-4">
                                                <button class="btn btn-primary">Reply</button>
                                                <button class="btn btn-outline-primary">Forward</button>
                                            </div>
                                        </div>
                                        <div class="action"></div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item email-list" onclick="toggleClass(this)">
                                <div class="mail-header d-flex gap-2 gap-md-4 align-items-center">
                                    <div class="info d-flex gap-2 align-items-center">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="" id="edittoke4">
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="#"><img class="rounded-circle border border-white shadow avatar md" src="assets/images/user-3.png" alt="Profile"></a>
                                            <h6 class="mb-0 ms-2 fw-normal nav-link p-0 d-none d-md-block text-nowrap">Edit Toke</h6>
                                        </div>
                                    </div>
                                    <div class="subject flex-grow-1 text-truncate" data-bs-toggle="collapse" data-bs-target="#Email_15" aria-expanded="false" aria-controls="collapseExample">
                                        <span>We’ve received your opt-out</span><span class="opacity-50"> - Congrats! After carefully reviewing your profile, our Team has accepted it.</span>
                                    </div>
                                    <div class="action d-flex gap-1 gap-lg-3 align-items-center ms-auto">
                                        <a class="d-block d-md-block d-none" href="#">
                                            <svg class="hover-svg text-primary text-opacity-25" onclick="this.classList.toggle('text-opacity-25')" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M12 19.0969L5.20163 22L5.85172 14.6135L1 9.02129L8.20015 7.35928L12 1L15.7998 7.35928L23 9.02129L18.1483 14.6135L18.7984 22L12 19.0969Z"></path>
                                            </svg>
                                        </a>
                                        <span class="mail-date fs-14 text-nowrap d-block opacity-50">10 min</span>
                                    </div>
                                </div>
                                <div class="collapse" id="Email_15">
                                    <div class="bg-transparent border-0 card card-body d-flex gap-2 gap-md-4 flex-row px-0">
                                        <div class="info d-none d-md-block"></div>
                                        <div class="flex-grow-1">
                                            <p>After a close review of your profile by our Team, we’ve determined that  in order for your profile to be accepted , you need to take the  following action:</p>
                                            <p>Make sure you provide a genuine profile picture. Illustrated pictures of yourself, your logo design, cartoon pictures or fake pictures will be  rejected. from 'Photo' section.</p>
                                            <p>See you inside! <br>Team TTM</p>
                                            <div class="mail-action border-top border-top-dashed pt-3 mt-4">
                                                <button class="btn btn-primary">Reply</button>
                                                <button class="btn btn-outline-primary">Forward</button>
                                            </div>
                                        </div>
                                        <div class="action"></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal:: Email Compose Modal -->
    <div class="modal fade" id="emailComposeModal" tabindex="-1" aria-labelledby="emailComposeModal" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body py-4 px-lg-5 px-md-3 px-sm-2 mx-lg-5 mx-md-3 mx-sm-2">
  
                    <div class="contact-search-wrapper position-relative">
                        <label for="contactSearch">Send To</label>
                        <div class="input-tags mb-3 py-2" id="inputTagsWrapper">
                            <input type="email" class="form-control" id="contactSearch" placeholder="Type to search...">
                        </div>
                        <ul id="contactDropdown" class="dropdown-menu shadow">
                            <!-- JavaScript inserts contacts here -->
                        </ul>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control" placeholder="Subject" id="floatingPassword">
                        <label for="floatingPassword">Subject</label>
                    </div>
                    <div class="compose-content pt-4 d-flex flex-column">
                        <div id="editor-container">
                            <textarea id="editor">Full height editor...</textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between border-0 py-4 px-lg-5 px-md-3 px-sm-2 mx-lg-5 mx-md-3 mx-sm-2">
                    <div class="left-actions gap-2 d-flex align-items-center">
                        <button class="btn btn-outline-secondary">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="currentColor" d="M4 7H20" stroke-linecap="round" stroke-linejoin="round"/>
                                <path stroke="currentColor" d="M10 11V17" stroke-linecap="round" stroke-linejoin="round"/>
                                <path stroke="currentColor" d="M14 11V17" stroke-linecap="round" stroke-linejoin="round"/>
                                <path stroke="currentColor" d="M5 7L6 19C6 19.5304 6.21071 20.0391 6.58579 20.4142C6.96086 20.7893 7.46957 21 8 21H16C16.5304 21 17.0391 20.7893 17.4142 20.4142C17.7893 20.0391 18 19.5304 18 19L19 7" stroke-linecap="round" stroke-linejoin="round"/>
                                <path stroke="currentColor" d="M9 7V4C9 3.73478 9.10536 3.48043 9.29289 3.29289C9.48043 3.10536 9.73478 3 10 3H14C14.2652 3 14.5196 3.10536 14.7071 3.29289C14.8946 3.48043 15 3.73478 15 4V7" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <button class="btn btn-outline-secondary">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="currentColor" d="M11 12C11 12.2652 11.1054 12.5196 11.2929 12.7071C11.4804 12.8946 11.7348 13 12 13C12.2652 13 12.5196 12.8946 12.7071 12.7071C12.8946 12.5196 13 12.2652 13 12C13 11.7348 12.8946 11.4804 12.7071 11.2929C12.5196 11.1054 12.2652 11 12 11C11.7348 11 11.4804 11.1054 11.2929 11.2929C11.1054 11.4804 11 11.7348 11 12Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path stroke="currentColor" d="M11 19C11 19.2652 11.1054 19.5196 11.2929 19.7071C11.4804 19.8946 11.7348 20 12 20C12.2652 20 12.5196 19.8946 12.7071 19.7071C12.8946 19.5196 13 19.2652 13 19C13 18.7348 12.8946 18.4804 12.7071 18.2929C12.5196 18.1054 12.2652 18 12 18C11.7348 18 11.4804 18.1054 11.2929 18.2929C11.1054 18.4804 11 18.7348 11 19Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path stroke="currentColor" d="M11 5C11 5.26522 11.1054 5.51957 11.2929 5.70711C11.4804 5.89464 11.7348 6 12 6C12.2652 6 12.5196 5.89464 12.7071 5.70711C12.8946 5.51957 13 5.26522 13 5C13 4.73478 12.8946 4.48043 12.7071 4.29289C12.5196 4.10536 12.2652 4 12 4C11.7348 4 11.4804 4.10536 11.2929 4.29289C11.1054 4.48043 11 4.73478 11 5Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                    <div class="right-actions">
                        <button class="btn btn-secondary">File Upload</button>
                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                            <button type="button" class="btn btn-primary">Send Now</button>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"></button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Schedule send</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script>
    <script src="{{ asset('assets/js/inbox.js') }}"></script>
@endpush