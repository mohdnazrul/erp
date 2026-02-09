@extends('layout.app')
@push('style')
    <link rel="stylesheet" href="{{ asset('assets/css/inner-layout.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/calendar.css') }}">
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
                    <div class="page-name fs-20 fw-bold ms-md-4 ms-2 position-relative">
                        <div id="calendar-title"></div>
                        <input type="text" id="calendar-date-input" style="position: absolute; opacity: 0; width: 1px; height: 1px; pointer-events: none;" />
                    </div>
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
                            <a id="prevBtn" href="#" class="text-decoration-none hover-svg">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.75 7.5L11.25 15L18.75 22.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a id="nextBtn" href="#" class="text-decoration-none hover-svg">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.25 7.5L18.75 15L11.25 22.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-decoration-none hover-svg" data-bs-toggle="offcanvas" data-bs-target="#allEvent" aria-controls="allEvent">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 8.75C5 8.08696 5.26339 7.45107 5.73223 6.98223C6.20107 6.51339 6.83696 6.25 7.5 6.25H22.5C23.163 6.25 23.7989 6.51339 24.2678 6.98223C24.7366 7.45107 25 8.08696 25 8.75V23.75C25 24.413 24.7366 25.0489 24.2678 25.5178C23.7989 25.9866 23.163 26.25 22.5 26.25H7.5C6.83696 26.25 6.20107 25.9866 5.73223 25.5178C5.26339 25.0489 5 24.413 5 23.75V8.75Z" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M20 3.75V8.75" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M10 3.75V8.75" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M5 13.75H25" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8.75 17.5H8.76625" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12.5125 17.5H12.5187" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M16.2625 17.5H16.2687" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M20.0188 17.5H20.0251" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M16.2688 21.25H16.275" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8.76245 21.25H8.7687" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12.5125 21.25H12.5187" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-decoration-none hover-svg" data-bs-toggle="modal" data-bs-target="#addevent">
                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M13 2V24"/>
                                    <path d="M2 13H24"/>
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
        <div class="container-fluid px-2 px-md-4">

            <div class="row">
                <div class="col-12">
                    <div class="card border-0">
                        <div class="card-body p-0">
                            <div id="calendar"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End:: Content -->

    <!-- Modal:: Add Event -->
    <div class="modal fade" id="addevent" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-4">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <form>
                        <div class="mb-4">
                            <input type="date" class="form-control form-control-lg rounded-1" id="event-date" placeholder="Select Date">
                        </div>
                        <div class="mb-4">
                            <input type="time" class="form-control form-control-lg rounded-1" id="event-time" placeholder="Select Time">
                        </div>
                        <div class="mb-4">
                            <input type="text" class="form-control form-control-lg rounded-1" id="event-title" placeholder="Enter Note">
                        </div>
                        <div class="d-flex flex-column">
                            <button type="button" class="btn btn-primary btn-lg" data-bs-dismiss="modal">Add Note</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Start:: All Events Offcanvas -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="allEvent" aria-labelledby="allEventLabel">
        <div class="offcanvas-header px-4 border-bottom">
            <h5 class="offcanvas-title" id="allEventLabel">View all notes</h5>
            <a href="#" class="hover-svg ms-auto" data-bs-dismiss="offcanvas" aria-label="Close">
                <svg class="hover-svg" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 6L6 18" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M6 6L18 18" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>
        <div class="offcanvas-body p-4">
            <div class="mb-3 d-flex align-items-center justify-content-between">
                <h5 class="mb-0 fw-bold">March 2025</h5>
                <div class="controls d-flex align-items-center">
                    <a href="#" class="btn btn-link p-0 me-2 hover-svg" id="prevMonthBtn">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 18L9 12L15 6" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                    <a href="#" class="btn btn-link p-0 hover-svg" id="nextMonthBtn">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 18L15 12L9 6" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
            </div>
            <ul class="list-unstyled list-group list-group-custom mb-0 border-top rounded-0">
                <li class="py-3 border-bottom d-flex flex-column">
                    <span class="time text-primary fw-bold h6">9:30</span>
                    <p class="mb-0 fs-18">Review UI/UX designs for the upcoming release.</p>
                </li>
                <li class="py-3 border-bottom d-flex flex-column">
                    <span class="time text-primary fw-bold h6">11:00</span>
                    <p class="mb-0 fs-18">Project Kickoff Meeting</p>
                </li>
                <li class="py-3 border-bottom d-flex flex-column">
                    <span class="time text-primary fw-bold h6">12:00</span>
                    <p class="mb-0 fs-18">Client Presentation</p>
                </li>
                <li class="py-3 border-bottom d-flex flex-column">
                    <span class="time text-primary fw-bold h6">13:00</span>
                    <p class="mb-0 fs-18">Discuss what went well and what can be improved.</p>
                </li>
                <li class="py-3 border-bottom d-flex flex-column">
                    <span class="time text-primary fw-bold h6">15:00</span>
                    <p class="mb-0 fs-18">Product Launch</p>
                </li>
                <li class="py-3 border-bottom d-flex flex-column">
                    <span class="time text-primary fw-bold h6">16:00</span>
                    <p class="mb-0 fs-18">Release the new product update to users.</p>
                </li>
                <li class="py-3 border-bottom d-flex flex-column">
                    <span class="time text-primary fw-bold h6">17:00</span>
                    <p class="mb-0 fs-18">Review UI/UX designs for the upcoming release.</p>
                </li>
                <li class="py-3 border-bottom d-flex flex-column">
                    <span class="time text-primary fw-bold h6">18:00</span>
                    <p class="mb-0 fs-18">Internal team meeting</p>
                </li>
                <li class="py-3 border-bottom d-flex flex-column">
                    <span class="time text-primary fw-bold h6">19:00</span>
                    <p class="mb-0 fs-18">Game Night with friends discussion</p>
                </li>
                <li class="py-3 border-bottom d-flex flex-column">
                    <span class="time text-primary fw-bold h6">20:00</span>
                    <p class="mb-0 fs-18">Take Leave E-mail to HR</p>
                </li>
            </ul>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{ asset('assets/js/calendar.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.17/index.global.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.js"></script>
@endpush