@extends('layout.app')
@push('style')
    <link rel="stylesheet" href="{{ asset('assets/css/todo.css') }}">
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
                    <div class="page-name fs-20 fw-bold ms-md-4 ms-2 position-relative">My Todo</div>
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
                            <a href="#" class="text-decoration-none hover-svg" data-bs-toggle="modal" data-bs-target="#addTodo">
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

            <div class="row g-3">
                <div class="col-xl-9 col-lg-8 col-md-7 col-sm-12">
                    <!-- Assign Tasks Table -->
                    <div class="table-responsive mb-5">
                        <table class="table table-hover align-middle table-nowrap">
                            <thead>
                                <tr>
                                    <th class="fs-12 text-muted">Today Task (5)</th>
                                    <th class="fs-12 text-muted">Due Date</th>
                                    <th class="fs-12 text-muted text-nowrap">Assign by</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="todo-list">
                                <tr>
                                    <td>
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input mt-0 todo-checkbox" type="checkbox" value="" id="todo1">
                                            <label class="form-check-label ms-2 me-3" for="todo1">Meeting scheduled with the team at 10 AM</label>
                                            <span class="badge rounded-pill text-bg-secondary">Overdue</span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="fw-semibold text-nowrap">10-01-2025</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle border border-white shadow" src="assets/images/profile.png" width="40" height="40" alt="Profile">
                                            <h6 class="mb-0 ms-2 fw-normal nav-link p-0 d-none d-lg-block">Allie Grater</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <svg class="hover-svg text-primary" onclick="this.classList.toggle('text-opacity-25')" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9 14.7525L3.43769 17.119L3.96958 11.0976L0 6.53888L5.89103 5.18403L9 0L12.109 5.18403L18 6.53888L14.0304 11.0976L14.5623 17.119L9 14.7525Z" fill="currentColor"/>
                                        </svg>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input mt-0 todo-checkbox" type="checkbox" value="" id="todo2">
                                            <label class="form-check-label ms-2 me-3" for="todo2">Follow up on pending inquiries from two clients</label>
                                            <span class="badge rounded-pill text-bg-primary">Due Today</span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="fw-semibold">10-01-2025</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle border border-white shadow" src="assets/images/user-2.png" width="40" height="40" alt="Profile">
                                            <h6 class="mb-0 ms-2 fw-normal nav-link p-0 d-none d-lg-block text-primary">Me</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <svg class="hover-svg text-primary" onclick="this.classList.toggle('text-opacity-25')" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9 14.7525L3.43769 17.119L3.96958 11.0976L0 6.53888L5.89103 5.18403L9 0L12.109 5.18403L18 6.53888L14.0304 11.0976L14.5623 17.119L9 14.7525Z" fill="currentColor"/>
                                        </svg>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input mt-0 todo-checkbox" type="checkbox" checked value="" id="todo3">
                                            <label class="form-check-label ms-2 me-3" for="todo3">Finalize the technical documentation for the project</label>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="fw-semibold">-</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle border border-white shadow" src="assets/images/user-3.png" width="40" height="40" alt="Profile">
                                            <h6 class="mb-0 ms-2 fw-normal nav-link p-0 d-none d-lg-block">Pamela Williams</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <svg class="hover-svg text-primary text-opacity-25" onclick="this.classList.toggle('text-opacity-25')" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9 14.7525L3.43769 17.119L3.96958 11.0976L0 6.53888L5.89103 5.18403L9 0L12.109 5.18403L18 6.53888L14.0304 11.0976L14.5623 17.119L9 14.7525Z" fill="currentColor"/>
                                        </svg>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input mt-0 todo-checkbox" type="checkbox" id="todo4">
                                            <label class="form-check-label ms-2 me-3" for="todo4">Improve load speed and fix performance issues</label>
                                            <span class="badge rounded-pill text-bg-primary">Due Today</span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="fw-semibold">10-01-2025</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle border border-white shadow" src="assets/images/user-4.png" width="40" height="40" alt="Profile">
                                            <h6 class="mb-0 ms-2 fw-normal nav-link p-0 d-none d-lg-block">Thomas Perry</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <svg class="hover-svg text-primary text-opacity-25" onclick="this.classList.toggle('text-opacity-25')" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9 14.7525L3.43769 17.119L3.96958 11.0976L0 6.53888L5.89103 5.18403L9 0L12.109 5.18403L18 6.53888L14.0304 11.0976L14.5623 17.119L9 14.7525Z" fill="currentColor"/>
                                        </svg>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input mt-0 todo-checkbox" type="checkbox" checked value="" id="todo5">
                                            <label class="form-check-label ms-2 me-3 text-decoration-line-through" for="todo5">Discuss possible new features for the upcoming release</label>
                                            <span class="badge rounded-pill text-bg-secondary">Overdue</span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="fw-semibold">28/03-2025</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle border border-white shadow" src="assets/images/user-5.png" width="40" height="40" alt="Profile">
                                            <h6 class="mb-0 ms-2 fw-normal nav-link p-0 d-none d-lg-block">Katie Pham</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <svg class="hover-svg text-primary text-opacity-25" onclick="this.classList.toggle('text-opacity-25')" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9 14.7525L3.43769 17.119L3.96958 11.0976L0 6.53888L5.89103 5.18403L9 0L12.109 5.18403L18 6.53888L14.0304 11.0976L14.5623 17.119L9 14.7525Z" fill="currentColor"/>
                                        </svg>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- Overdue Task Table -->
                    <div class="table-responsive mb-5">
                        <table class="table table-hover align-middle table-nowrap">
                            <thead>
                                <tr>
                                    <th class="fs-12 text-danger">Overdue Task (3)</th>
                                    <th class="fs-12 text-muted">Due Date</th>
                                    <th class="fs-12 text-muted text-nowrap">Assign by</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="todo-list">
                                <tr>
                                    <td>
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input mt-0 todo-checkbox" type="checkbox" value="" id="todo6">
                                            <label class="form-check-label ms-2 me-3" for="todo6">Meeting scheduled with the team at 10 AM</label>
                                            <span class="badge rounded-pill text-bg-secondary">Overdue</span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="fw-semibold text-nowrap">10-01-2025</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle border border-white shadow" src="assets/images/profile.png" width="40" height="40" alt="Profile">
                                            <h6 class="mb-0 ms-2 fw-normal nav-link p-0 d-none d-lg-block">Allie Grater</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <svg class="hover-svg text-primary text-opacity-25" onclick="this.classList.toggle('text-opacity-25')" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9 14.7525L3.43769 17.119L3.96958 11.0976L0 6.53888L5.89103 5.18403L9 0L12.109 5.18403L18 6.53888L14.0304 11.0976L14.5623 17.119L9 14.7525Z" fill="currentColor"/>
                                        </svg>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input mt-0 todo-checkbox" type="checkbox" checked value="" id="todo7">
                                            <label class="form-check-label ms-2 me-3" for="todo7">Follow up on pending inquiries from two clients</label>
                                            <span class="badge rounded-pill text-bg-secondary">Overdue</span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="fw-semibold">10-01-2025</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle border border-white shadow" src="assets/images/user-2.png" width="40" height="40" alt="Profile">
                                            <h6 class="mb-0 ms-2 fw-normal nav-link p-0 d-none d-lg-block text-primary">Me</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <svg class="hover-svg text-primary text-opacity-25" onclick="this.classList.toggle('text-opacity-25')" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9 14.7525L3.43769 17.119L3.96958 11.0976L0 6.53888L5.89103 5.18403L9 0L12.109 5.18403L18 6.53888L14.0304 11.0976L14.5623 17.119L9 14.7525Z" fill="currentColor"/>
                                        </svg>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input mt-0 todo-checkbox" type="checkbox" value="" id="todo8">
                                            <label class="form-check-label ms-2 me-3" for="todo8">Finalize the technical documentation for the project</label>
                                            <span class="badge rounded-pill text-bg-secondary">Overdue</span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="fw-semibold">10-01-2025</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle border border-white shadow" src="assets/images/user-2.png" width="40" height="40" alt="Profile">
                                            <h6 class="mb-0 ms-2 fw-normal nav-link p-0 d-none d-lg-block text-primary">Me</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <svg class="hover-svg text-primary text-opacity-25" onclick="this.classList.toggle('text-opacity-25')" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9 14.7525L3.43769 17.119L3.96958 11.0976L0 6.53888L5.89103 5.18403L9 0L12.109 5.18403L18 6.53888L14.0304 11.0976L14.5623 17.119L9 14.7525Z" fill="currentColor"/>
                                        </svg>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-5 col-sm-12">
                    <div class="todo-sidebar">
                        <div class="card bg-body-tertiary border-0 rounded-4 p-3 p-lg-4">
                            <h5 class="fw-bold">Project Overview</h5>
                            <!-- Start:: Work Process -->
                            <div class="d-flex flex-column">
                                <h6 class="mb-3 text-black-50 fw-semibold text-uppercase fs-14">Work Process</h6>
                                <div class="d-flex align-items-center mb-3">
                                    <h4 class="fw-bold mb-0 w-50 text-center"><span class="counter" data-target="32">0</span> <small class="mt-2 fw-normal fs-14 text-black-50 text-uppercase d-block">Task</small></h4>
                                    <h4 class="fw-bold mb-0 w-50 text-center">25.66% <small class="mt-2 fw-normal fs-14 text-black-50 text-uppercase d-block">COMPLETED</small></h4>
                                </div>
                                <div class="progress" style="height: 8px">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 25.66%" aria-valuenow="25.66" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <!-- End:: Work Process -->

                            <!-- Start:: Status -->
                            <div class="d-flex flex-column my-5">
                                <h6 class="mb-3 text-black-50 fw-semibold text-uppercase fs-14">Status</h6>
                                <div id="status_chart_area"></div>
                            </div>
                            <!-- End:: Status -->

                            <!-- Start:: My Task -->
                            <div class="d-flex flex-column">
                                <h6 class="mb-3 text-black-50 fw-semibold text-uppercase fs-14">My Task</h6>
                                <div class="d-flex justify-content-between">
                                    <h4 class="fw-bold mb-0 flex-fill text-start"><span class="counter" data-target="18">0</span> <small class="mt-2 fw-normal fs-14 text-black-50 text-uppercase d-block">My task</small></h4>
                                    <h4 class="fw-bold mb-0 flex-fill text-end"><span class="counter" data-target="28">0</span> <small class="mt-2 fw-normal fs-14 text-black-50 text-uppercase d-block">Assign to Member</small></h4>
                                </div>
                                <div class="progress-stacked mt-3" style="height: 8px">
                                    <div class="progress" role="progressbar" aria-label="My Task" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                        <div class="progress-bar bg-primary"></div>
                                    </div>
                                    <div class="progress" role="progressbar" aria-label="Assign to Member" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        <div class="progress-bar bg-success"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- End:: My Task -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End:: Content -->

    <!-- Modal:: Add todo list -->
    <div class="modal fade" id="addTodo" tabindex="-1" aria-labelledby="addToDo" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-4">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Add Todo</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <form>
                        <div class="mb-4">
                            <input type="text" class="form-control form-control-lg rounded-1" id="EnterNote" placeholder="Enter note">
                        </div>
                        <div class="mb-4">
                            <input type="date" class="form-control form-control-lg rounded-1" id="SelectDueDate" placeholder="Select Due date">
                        </div>
                        <div class="mb-4">
                            <select class="form-select form-select-lg mb-4" id="SelectAssign" aria-label="SelectAssign">
                                <option selected>Select Assign</option>
                                <option value="1">Me</option>
                                <option value="2">Katie Pham</option>
                                <option value="3">Thomas Perry</option>
                            </select>
                        </div>
                        <div class="d-flex flex-column">
                            <button type="button" class="btn btn-primary btn-lg" data-bs-dismiss="modal">Add Todo</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        var options = {
            chart: {
                type: 'pie',
                height: 250
            },
            series: [6, 3, 3, 1],
            labels: ['Active', 'Done Late', 'Done On-Time', 'Overdue'],
            colors: ['var(--bs-primary)', 'var(--bs-primary-bg-subtle)', 'var(--bs-success)', 'var(--bs-gray-500)'], // blue, yellow, green, red
            legend: {
                position: 'bottom'
            },
            dataLabels: {
                enabled: true
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: { width: 280 },
                    legend: { position: 'bottom' }
                }
            }]
        };
      
        var chart = new ApexCharts(document.querySelector("#status_chart_area"), options);
        chart.render();
        
        // Set default date 
        document.addEventListener("DOMContentLoaded", function () {
            // Set today's date
            const dateInput = document.getElementById("SelectDueDate");
            dateInput.value = new Date().toISOString().split("T")[0];
        });
        // 
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.todo-checkbox').forEach(function (checkbox) {
                const label = checkbox.nextElementSibling;

                // Set initial state
                label.classList.toggle('text-decoration-line-through', checkbox.checked);

                // Toggle on change
                checkbox.addEventListener('change', function () {
                    label.classList.toggle('text-decoration-line-through', checkbox.checked);
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