<!-- Start:: Sidebar -->
<aside class="left-sidebar border-end z-2">
    <nav class="nav-sidebar">
        <ul class="list-unstyled mb-0 li_animate">
            <li>
                <a class="d-flex align-items-center justify-content-between hover-svg">
                    <span class="nav-title fs-18 fw-medium">Documentation</span>
                </a>
                <div>
                    <ul class="nav flex-column li_animate">
                        <li class="nav-item"><a class="nav-link {{ request()->routeIs('documentation') ? 'active' : '' }}" href="{{ route('documentation') }}">Getting started</a></li>
                        <li class="nav-item"><a class="nav-link {{ request()->routeIs('components') ? 'active' : '' }}" href="{{ route('components') }}">Components</a></li>
                        <li class="nav-item"><a class="nav-link {{ request()->routeIs('widgets') ? 'active' : '' }}" href="{{ route('widgets') }}">Widgets</a></li>
                        <li class="nav-item"><a class="nav-link {{ request()->routeIs('help') ? 'active' : '' }}" href="{{ route('help') }}">Need a Help?</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <a class="d-flex align-items-center justify-content-between hover-svg">
                    <span class="nav-title fs-18 fw-medium">Plugins</span>
                </a>
                <div>
                    <ul class="nav flex-column li_animate">
                        <li class="nav-item"><a class="nav-link {{ request()->routeIs('chart') ? 'active' : '' }}" href="{{ route('chart') }}">Charts</a></li>
                        <li class="nav-item"><a class="nav-link {{ request()->routeIs('datatable') ? 'active' : '' }}" href="{{ route('datatable') }}">DataTable</a></li>
                        <li class="nav-item"><a class="nav-link {{ request()->routeIs('datarangpicker') ? 'active' : '' }}" href="{{ route('datarangpicker') }}">Date Range Picker</a></li>
                        <li class="nav-item"><a class="nav-link {{ request()->routeIs('dropify') ? 'active' : '' }}" href="{{ route('dropify') }}">Dropify</a></li>
                        <li class="nav-item"><a class="nav-link {{ request()->routeIs('inputmask') ? 'active' : '' }}" href="{{ route('inputmask') }}">Inputmask</a></li>
                        <li class="nav-item"><a class="nav-link {{ request()->routeIs('owlcarousel') ? 'active' : '' }}" href="{{ route('owlcarousel') }}">Owl Carousel</a></li>
                        <li class="nav-item"><a class="nav-link {{ request()->routeIs('sweetalert') ? 'active' : '' }}" href="{{ route('sweetalert') }}">Sweetalert</a></li>
                        <li class="nav-item"><a class="nav-link {{ request()->routeIs('tagsinput') ? 'active' : '' }}" href="{{ route('tagsinput') }}">Tagsinput</a></li>
                        <li class="nav-item"><a class="nav-link {{ request()->routeIs('imageinput') ? 'active' : '' }}" href="{{ route('imageinput') }}">Image Input</a></li>
                        <li class="nav-item"><a class="nav-link {{ request()->routeIs('passwordmeter') ? 'active' : '' }}" href="{{ route('passwordmeter') }}">Password Meter</a></li>
                        <li class="nav-item"><a class="nav-link {{ request()->routeIs('jkanbanboard') ? 'active' : '' }}" href="{{ route('jkanbanboard') }}">jKanban Board</a></li>
                    </ul>
                </div>
            </li>
            <li class="card rounded-4 mt-5">
                <div class="card-body {{ request()->routeIs('chart', 'datatable', 'datarangpicker','dropify','inputmask','owlcarousel','sweetalert','tagsinput','imageinput','passwordmeter','jkanbanboard') ? 'p-lg-4 p-3' :'' }}">
                    <h6 class="fw-bold">Got a question or suggestion?</h6>
                    <p class="text-body-secondary mb-0 fs-14 lh-base">We’d love to hear from you—just drop us a message!</p>
                </div>
            </li>
        </ul>
    </nav>
</aside>
<div class="sidebar-overlay"></div>
<!-- End:: Sidebar -->
