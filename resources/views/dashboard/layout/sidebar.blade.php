<!-- Start:: Sidebar -->
    <aside class="left-sidebar border-end z-2">
        <nav class="nav-sidebar">
            <ul class="list-unstyled mb-0">
                <li>
                    <a class="d-flex align-items-center justify-content-between hover-svg" data-bs-toggle="collapse" href="#collapseMyDashboard" role="button" 
                    aria-expanded="true" aria-controls="collapseMyDashboard">
                        <span class="nav-title fs-18 fw-medium">My Dashboard</span>
                        <svg class="opacity-75" width="18" height="18" stroke-width="0.5" viewBox="0 0 21 21" fill="none" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.5 4.375V16.625"/>
                            <path d="M4.375 10.5H16.625"/>
                        </svg>
                    </a>
                    <div class="collapse {{ request()->routeIs('analytics') || request()->routeIs('projects-analytics') || request()->routeIs('events-analytics') ? 'show' : '' }}" id="collapseMyDashboard">
                        <ul class="nav flex-column">
                            <li class="nav-item"><a class="nav-link {{ request()->routeIs('analytics') ? 'active' : '' }}" href="{{ route('analytics') }}">Analytics</a></li>
                            <li class="nav-item"><a class="nav-link {{ request()->routeIs('projects-analytics') ? 'active' : '' }}" href="{{ route('projects-analytics') }}">Project</a></li>
                            <li class="nav-item"><a class="nav-link {{ request()->routeIs('events-analytics') ? 'active' : '' }}" href="{{ route('events-analytics') }}">Events</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a class="d-flex align-items-center justify-content-between hover-svg" data-bs-toggle="collapse" href="#collapseeCommerce" role="button" aria-expanded="false" aria-controls="collapseeCommerce">
                        <span class="nav-title fs-18 fw-medium">eCommerce</span>
                        <svg class="opacity-75" width="18" height="18" stroke-width="0.5" viewBox="0 0 21 21" fill="none" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.5 4.375V16.625"/>
                            <path d="M4.375 10.5H16.625"/>
                        </svg>
                    </a>
                    <div class="collapse {{ request()->routeIs('ecommerce-analytics') || request()->routeIs('ecommerce-customers') || request()->routeIs('ecommerce-comments') || request()->routeIs('ecommerce-transactions') ? 'show' : '' }}" id="collapseeCommerce">
                        <ul class="nav flex-column">
                            <li class="nav-item"><a class="nav-link {{ request()->routeIs('ecommerce-analytics') ? 'active' : '' }}" href="{{ route('ecommerce-analytics') }}">Analytics</a></li>
                            <li class="nav-item"><a class="nav-link {{ request()->routeIs('ecommerce-customers') ? 'active' : '' }}" href="{{ route('ecommerce-customers') }}">Customers</a></li>
                            <li class="nav-item"><a class="nav-link {{ request()->routeIs('ecommerce-comments') ? 'active' : '' }}" href="{{ route('ecommerce-comments') }}">Comments</a></li>
                            <li class="nav-item"><a class="nav-link {{ request()->routeIs('ecommerce-transactions') ? 'active' : '' }}" href="{{ route('ecommerce-transactions') }}">Transactions</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a class="d-flex align-items-center justify-content-between hover-svg" data-bs-toggle="collapse" href="#collapseFinance" role="button" aria-expanded="false" aria-controls="collapseFinance">
                        <span class="nav-title fs-18 fw-medium">Finance</span>
                        <svg class="opacity-75" width="18" height="18" stroke-width="0.5" viewBox="0 0 21 21" fill="none" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.5 4.375V16.625"/>
                            <path d="M4.375 10.5H16.625"/>
                        </svg>
                    </a>
                    <div class="collapse {{ request()->routeIs('invoicing') || request()->routeIs('create-invoice') || request()->routeIs('expenses') ? 'show' : '' }}" id="collapseFinance">
                        <ul class="nav flex-column">
                            <li class="nav-item"><a class="nav-link {{ request()->routeIs('invoicing') || request()->routeIs('create-invoice') ? 'active' : '' }}" href="{{ route('invoicing') }}">Invoicing</a></li>
                            <li class="nav-item"><a class="nav-link {{ request()->routeIs('expenses') ? 'active' : '' }}" href="{{ route('expenses') }}">Expenses</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a class="d-flex align-items-center justify-content-between hover-svg" data-bs-toggle="collapse" href="#collapseAuthentication" role="button" aria-expanded="true" aria-controls="collapseAuthentication">
                        <span class="nav-title fs-18 fw-medium">Authentication</span>
                        <svg class="opacity-75" width="18" height="18" stroke-width="0.5" viewBox="0 0 21 21" fill="none" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.5 4.375V16.625"/>
                            <path d="M4.375 10.5H16.625"/>
                        </svg>
                    </a>
                    <div class="collapse {{ request()->routeIs('login') || request()->routeIs('register') || request()->routeIs('forgot-password') || request()->routeIs('verification-code') || request()->routeIs('error') ? 'show' : '' }}" id="collapseAuthentication">
                        <ul class="nav flex-column">
                            <li class="nav-item"><a class="nav-link {{ request()->routeIs('login') ? '' : ''}}" target="_blank" href="{{ route('login') }}">Sign In</a></li>
                            <li class="nav-item"><a class="nav-link {{ request()->routeIs('register') ? '' : ''}}" target="_blank" href="{{ route('register') }}">Sign Up</a></li>
                            <li class="nav-item"><a class="nav-link {{ request()->routeIs('forgot-password') ? '' : ''}}" target="_blank" href="{{ route('forgot-password') }}">Forgot Password</a></li>
                            <li class="nav-item"><a class="nav-link {{ request()->routeIs('verification-code') ? '' : ''}}" target="_blank" href="{{ route('verification-code') }}">Verification Code</a></li>
                            <li class="nav-item"><a class="nav-link {{ request()->routeIs('error') ? '' : ''}}" target="_blank" href="{{ route('error') }}">Error page</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
    </aside>
    <div class="sidebar-overlay"></div>
<!-- End:: Sidebar -->