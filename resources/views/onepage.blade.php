<!DOCTYPE html>
<html lang="en" data-bs-theme="light" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Onepage</title>
    <meta name="description" content="Thunder AI is a responsive Bootstrap admin dashboard template with AI tools, dark mode, prebuilt themes, and powerful UI kit for modern web apps.">
    <meta name="keywords" content="Thunder AI dashboard, AI admin template, Bootstrap admin template, responsive admin dashboard, HTML admin UI kit, dark mode dashboard, AI tools dashboard, admin dashboard with themes, modern admin panel, Bootstrap 5 admin UI, CSS variables dashboard, light dark admin template">
    <meta name="author" content="ThemeMakker - Expert Admin Dashboard & UI Kit Developers">
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">

    <style>
        .py-vh-2{padding-top: 100px;padding-bottom: 100px;}
        .py-vh-3{padding-top: 120px;padding-bottom: 120px;}
        .navbar.scrolled {backdrop-filter: blur(25px);}
        .hero-banner{height: 100vh;}
        .dropdown-toggle::after{display: none;}
        @media (max-width: 991.98px) {
            .py-vh-2{padding-top: 50px;padding-bottom: 50px;}
            .py-vh-3{padding-top: 60px;padding-bottom: 60px;}
            .navbar{background-color: var(--bs-card-bg); border-bottom: 2px solid var(--bs-primary);}
            .navbar .navbar-nav{flex-direction: row;gap: 20px;justify-content: space-between;margin-top: 1rem;}
            .hero-banner{height: auto; padding: 100px 0;}
        }
        @media (max-width: 767.98px) {
            .hero-banner{padding: 80px 0;}
            .navbar .navbar-nav{flex-direction: column;}
            .hero-banner .btn,
            #Features .btn,
            #workwithus .btn,
            .grouped-inputs .btn{width: 100%;}
        }
    </style>
</head>

<body data-bs-spy="scroll" data-bs-target="#navScroll" data-thunderal="theme-indigo" class="">

    <nav id="navScroll" class="navbar navbar-expand-lg navbar-light fixed-top py-lg-4" tabindex="0">
        <div class="container">
            <div class="logo">
                <a href="#" aria-label="Thunder AI Onepage"><img src="assets/images/logo.svg" alt="Thunder AI Logo" class="img-fluid"></a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
                    <li class="nav-item"><a class="nav-link" href="#Features">Features</a></li>
                    <li class="nav-item"><a class="nav-link" href="#numbers">Numbers</a></li>
                    <li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="#workwithus">Work with us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#testimonials">Testimonials</a></li>
                    <li class="dropdown ms-lg-4">
                        <a class="dropdown-toggle d-flex" href="#" id="bd-theme" data-bs-toggle="dropdown" aria-expanded="false" aria-label="theme option light/dark">
                            <svg class="theme-icon-active" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><use href="#sun-fill"></use></svg>
                        </a>
                        <ul class="dropdown-menu p-2 p-xl-3 language shadow-lg rounded-4 li_animate dropdown-menu-end" aria-labelledby="bd-theme">
                            <li class="mb-1"><a class="dropdown-item rounded-pill active" href="#" data-bs-theme-value="light"><svg class="me-2" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><use href="#sun-fill"></use></svg> Light</a></li>
                            <li class="mb-1"><a class="dropdown-item rounded-pill" href="#" data-bs-theme-value="dark"><svg class="me-2" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><use href="#moon-stars-fill"></use></svg> Dark</a></li>
                            <li class="mb-1"><a class="dropdown-item rounded-pill" href="#" data-bs-theme-value="auto"><svg class="me-2" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><use href="#circle-half"></use></svg> Auto</a></li>
                        </ul>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                            <symbol id="sun-fill" viewBox="0 0 24 24">
                                <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
                            </symbol>
                            <symbol id="moon-stars-fill" viewBox="0 0 24 24">
                                <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
                                <path d="M17 4a2 2 0 0 0 2 2a2 2 0 0 0 -2 2a2 2 0 0 0 -2 -2a2 2 0 0 0 2 -2" />
                                <path d="M19 11h2m-1 -1v2" />
                            </symbol>
                            <symbol id="circle-half" viewBox="0 0 24 24">
                                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                <path d="M12 3l0 18" />
                                <path d="M12 9l4.65 -4.65" />
                                <path d="M12 14.3l7.37 -7.37" />
                                <path d="M12 19.6l8.85 -8.85" />
                            </symbol>
                        </svg>
                    </li>
                    <li class="nav-item ms-4">
                        <a href="https://themeforest.net/user/wrraptheme/portfolio" target="_blank" rel="nofollow" class="btn btn-sm btn-primary px-3 d-flex align-items-center gap-1">
                            Download
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download ms-1" viewBox="0 0 16 16">
                                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <!-- Start: Hero Banner -->
        <div class="w-100 overflow-hidden d-flex align-items-center bg-card position-relative hero-banner" id="top">
            <div class="h-100 w-100 position-absolute top-0 end-0 bg-cover" id="HeroImage" data-aos="fade-left" style="z-index: 0; width: 100%; background-size: cover; background-repeat: no-repeat; background-position: left;"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 col-md-9 position-relative" data-aos="fade-right">
                        <h1 class="display-3 fw-bold mt-5">Thunder AI Admin Dashboard</h1>
                        <h2 class="fs-4 fw-normal lh-base">Powerful, responsive, and AI-driven admin template for your next web app.</h2>
                        <div class="d-flex align-items-center gap-2 mt-4 mb-xl-5 mb-4">
                            <div class="avatar-group d-flex align-items-center ps-0">
                                <div class="avatar-item sm">
                                    <img class="avatar md border rounded-circle" src="assets/images/user-3.png" alt="">
                                </div>
                                <div class="avatar-item sm">
                                    <img class="avatar md border rounded-circle" src="assets/images/user-4.png" alt="">
                                </div>
                                <div class="avatar-item sm">
                                    <img class="avatar md border rounded-circle" src="assets/images/user-5.png" alt="">
                                </div>
                            </div>
                            <p class="mb-0 col-lg-6 fs-14 lh-sm">Join with 5000+ Developers and start getting feedbacks right now </p>
                        </div>
                        <a href="{{ url('/') }}" target="_blank" aria-label="Explore Thunder AI Dashboard demo" class="btn btn-dark shadow px-4 py-3">Explore Demo</a>
                        <!-- <div class="d-flex flex-wrap gap-2 mt-4 col-xl-9">
                            <p class="fs-12 mb-0 text-uppercase w-100">Technologise</p>
                            <a href="index.html" target="_blank" aria-label="Bootstrap version"><strong class="text-decoration-underline">B</strong>ootstrap</a>
                            <span class="vr"></span>
                            <a href="#" target="_blank" aria-label="Tailwind CSS version"><strong class="text-decoration-underline">T</strong>ailwind CSS</a>
                            <span class="vr"></span>
                            <a href="#" target="_blank" aria-label="ReactJs version"><strong class="text-decoration-underline">R</strong>eactJs</a>
                            <span class="vr"></span>
                            <a href="#" target="_blank" aria-label="VueJs version"><strong class="text-decoration-underline">V</strong>ueJs</a>
                            <span class="vr"></span>
                            <a href="#" target="_blank" aria-label="Angular version"><strong class="text-decoration-underline">A</strong>ngular</a>
                            <span class="vr"></span>
                            <a href="#" target="_blank" aria-label="Laravel version"><strong class="text-decoration-underline">L</strong>aravel</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Start: Landing information -->
        <div class="py-vh-2 w-100 overflow-hidden">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-xl-8" data-aos="fade-down">
                        <h3 class="display-6 mb-5">Designed for AI-centric admin panels, it comes with multiple layouts, themes, and essential modules to accelerate your dashboard development.</h3>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6 col-xl-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="pe-lg-4">
                            <span class="h5 fw-lighter">01.</span>
                            <div class="py-lg-5 py-3 border-top border-dark">
                                <p class="text-uppercase mb-1">AI Tools</p>
                                <h3 class="mb-0">AI-Powered Solutions That Drive Smart Business Growth</h3>
                            </div>
                            <p class="lh-base">Boost efficiency and reduce manual effort with AI-powered features like smart analytics, content generation, and real-time task automation—built right into your dashboard.</p>
                            <a class="icon-link icon-link-hover" href="{{ route('ai-chat') }}">
                                Learn more
                                <svg xmlns="http://www.w3.org/2000/svg" class="bi" viewBox="0 0 16 16" aria-hidden="true">
                                    <path d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="pe-lg-4 pt-xl-5 mt-xl-5">
                            <span class="h5 fw-lighter">02.</span>
                            <div class="py-lg-5 py-3 border-top border-dark">
                                <p class="text-uppercase mb-1">Project</p>
                                <h3 class="mb-0">Project Management Made Simple & Scalable</h3>
                            </div>
                            <p class="lh-base">Manage tasks, timelines, and teams in one place. Visual project boards, status tracking, and team collaboration features keep everything organized and on schedule.</p>
                            <a class="icon-link icon-link-hover" href="{{ route('project') }}">
                                Learn more
                                <svg xmlns="http://www.w3.org/2000/svg" class="bi" viewBox="0 0 16 16" aria-hidden="true">
                                    <path d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-4" data-aos="fade-up" data-aos-delay="600">
                        <div class="ps-xl-4 mt-xl-5">
                            <span class="h5 fw-lighter">03.</span>
                            <div class="py-lg-5 py-3 border-top border-dark">
                                <p class="text-uppercase mb-1">Smart Tools</p>
                                <h3 class="mb-0">Built-In Tools for Seamless Productivity</h3>
                            </div>
                            <p class="lh-base">Our admin dashboard includes a built-in calendar for event scheduling, a secure file manager for uploading and managing documents, an inbox for message tracking, and a real-time chat system for team communication.</p>
                            <div class="d-flex flex-wrap align-items-start mt-2 mb-4 gap-1 tag-hover">
                                <a class="small rounded py-1 px-3 rounded-pill fw-normal border-bg" style="--dynamic-color: var(--bs-primary);" href="{{ route('project') }}" aria-label="Thunder AI E-Commerce">E-Commerce</a>
                                <a class="small rounded py-1 px-3 rounded-pill fw-normal border-bg" style="--dynamic-color: var(--bs-warning);" href="{{ route('my-events') }}" aria-label="Thunder AI My Events">My Events</a>
                                <a class="small rounded py-1 px-3 rounded-pill fw-normal border-bg" style="--dynamic-color: var(--bs-info);" href="{{ route('email') }}" aria-label="Thunder AI Inbox">Inbox</a>
                                <a class="small rounded py-1 px-3 rounded-pill fw-normal border-bg" style="--dynamic-color: var(--bs-dark);" href="{{ route('chat') }}" aria-label="Thunder AI Chat App">Chat App</a>
                                <a class="small rounded py-1 px-3 rounded-pill fw-normal border-bg" style="--dynamic-color: var(--bs-gray-400);" href="{{ route('my-cloud') }}" aria-label="Thunder AI My Cloud">My Cloud</a>
                                <a class="small rounded py-1 px-3 rounded-pill fw-normal border-bg" style="--dynamic-color: var(--bs-success);" href="{{ route('todo') }}" aria-label="Thunder AI My To-Do List">My To-Do List</a>
                                <a class="small rounded py-1 px-3 rounded-pill fw-normal border-bg" style="--dynamic-color: var(--bs-danger);" href="{{ route('expenses') }}" aria-label="Thunder AI Expenses">Expenses</a>
                                <a class="small rounded py-1 px-3 rounded-pill fw-normal border-bg" style="--dynamic-color: var(--bs-gray-700);" href="{{ route('calendar') }}" aria-label="Thunder AI Event Calendar">Event Calendar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start: Dashboard Features -->
        <div class="py-vh-2 w-100 overflow-hidden bg-card" id="Features">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-xl-6 col-lg-7">
                        <div class="row gx-xl-5 gx-4">
                            <div class="col-lg-11">
                                <img data-aos="fade-right" class="img-fluid shadow rounded-4" src="assets/images/screenshot/widgets-1.png" alt="Thunder AI widgets image">
                            </div>
                            <div class="col-lg-5 offset-lg-1">
                                <img data-aos="fade-up" class="img-fluid shadow rounded-4 mt-lg-5 mt-3" src="assets/images/screenshot/widgets-2.png" alt="Thunder AI widgets image">
                            </div>
                            <div class="col-lg-6">
                                <img data-aos="fade-left" class="img-fluid shadow rounded-4 mt-lg-5 mt-3" src="assets/images/screenshot/widgets-3.png" alt="Thunder AI widgets image">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="mt-5 mt-lg-0 ps-lg-4 ps-0 ps-xl-0">
                            <p class="text-uppercase mb-1" data-aos="fade-left" data-aos-delay="100">🚀 Key Features</p>
                            <div class="py-lg-5 py-4 border-top border-dark" data-aos="fade-left" data-aos-delay="150">
                                <p class="lh-base mb-1">— you’re in full control of the user interface.</p>
                                <h3 class="mb-0 lh-base">Personalize your dashboard layout, theme, and functionality with easy-to-use settings and pre-built widgets designed for speed and efficiency.</h3>
                            </div>
                            <ul class="ps-3 lh-lg fs-6" data-aos="fade-left" data-aos-delay="200">
                                <li>🌗 Light & Dark Mode Toggle</li>
                                <li>🎨 4 Pre-Set Themes</li>
                                <li>🔤 4 Google Fonts Selection</li>
                                <li>🟦 Border Radius Toggle (None/Default)</li>
                                <li>🗂️ Card Box Shadow Toggle (On/Off)</li>
                                <li>💡 Fully Responsive & Mobile-Friendly Design</li>
                                <li>🧩 Modular and Scalable Code Structure</li>
                                <li>⚡ Built with Bootstrap 5 & CSS Variables</li>
                            </ul>
                            <a href="https://themeforest.net/user/wrraptheme/portfolio" target="_blank" rel="nofollow" class="btn btn-dark px-4 py-3" data-aos="fade-left" data-aos-delay="250">
                                Download
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download ms-1" viewBox="0 0 16 16">
                                    <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"></path>
                                    <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start: Numbers That Reflect Our Impact -->
        <div class="py-vh-2 w-100 overflow-hidden" id="numbers">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-5">
                        <h3 class="py-lg-5 py-3 border-top border-dark" data-aos="fade-right">Numbers That Reflect Our Impact</h3>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="display-6 mb-5" data-aos="fade-down">These numbers tell a story of trust, performance, and progress. And yes… we love seeing them grow!</h3>
                            </div>
                            <div class="col-lg-6" data-aos="fade-up">
                                <div class="display-1 fw-bold py-lg-4 py-2">97.9%</div>
                                <p class="text-muted lh-base">We take deadlines seriously. With a proven track record of delivering 97.9% of projects on schedule, our team ensures your goals are met without delays. Our streamlined workflow, agile approach, and clear communication keep projects moving forward — from kickoff to final delivery.</p>
                            </div>
                            <div class="col-lg-6" data-aos="fade-up">
                                <div class="display-1 fw-bold py-lg-4 py-2">5000+</div>
                                <p class="text-muted lh-base">Designers, developers, startups, and enterprise teams — over 5,000 professionals worldwide rely on our admin template to power their projects. Whether you're building client dashboards, internal tools, or SaaS platforms, our solution is crafted to meet the needs of modern creative and technical teams alike.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Start: Dashboard Gallery -->
        <div class="py-vh-2 w-100 overflow-hidden bg-card position-relative" id="gallery">
            <div class="container-fluid">
                <div class="row overflow-scroll">
                    <div class="col-12">
                        <div class="owl-carousel owl-theme" id="OwlBasicAutoplay">
                            <div class="item">
                                <img class="rounded-4 border img-fluid mb-3" src="assets/images/screenshot/ecommerce-customers-menuopen.png" alt="Thunder AI gallery image">
                                <img class="rounded-4 border img-fluid" src="assets/images/screenshot/todo.png" alt="Thunder AI gallery image">
                            </div>
                            <div class="item">
                                <img class="rounded-4 border img-fluid mb-3" src="assets/images/screenshot/documentation.png" alt="Thunder AI gallery image">
                                <img class="rounded-4 border img-fluid mb-3" src="assets/images/screenshot/project-details-dark.png" alt="Thunder AI gallery image">
                                <img class="rounded-4 border img-fluid" src="assets/images/screenshot/ecommerce-customers.png" alt="Thunder AI gallery image">
                            </div>
                            <div class="item"><img class="rounded-4 border img-fluid" src="assets/images/screenshot/index-mobile.png" alt="Thunder AI gallery image"></div>
                            <div class="item">
                                <img class="rounded-4 border img-fluid mb-3" src="assets/images/screenshot/auth-signin.png" alt="Thunder AI gallery image">
                                <img class="rounded-4 border img-fluid" src="assets/images/screenshot/ecommerce-customers-ipad.png" alt="Thunder AI gallery image">
                            </div>
                            <div class="item">
                                <img class="rounded-4 border img-fluid mb-3" src="assets/images/screenshot/index-ipad.png" alt="Thunder AI gallery image">
                                <img class="rounded-4 border img-fluid" src="assets/images/screenshot/ai-finder.png" alt="Thunder AI gallery image">
                            </div>
                            <div class="item">
                                <img class="rounded-4 border img-fluid mb-3" src="assets/images/screenshot/project.png" alt="Thunder AI gallery image">
                                <img class="rounded-4 border img-fluid" src="assets/images/screenshot/tool-library.png" alt="Thunder AI gallery image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Start: What our clients say -->
        <div class="py-vh-3 w-100 overflow-hidden container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-5">
                    <h3 class="py-lg-5 py-2 border-top border-dark mb-0" data-aos="fade-right">What our clients say</h3>
                </div>
                <div class="col-lg-7" data-aos="fade-left">
                    <blockquote>
                        <div class="fs-4 my-3 fw-light pt-4 pb-3 border-bottom lh-base">“Initially, I found a stray call to a third-party live chat system left in the source code of the javascript. Upon reporting it, the author swiftly removed it. So far, this template has been fantastic. It's not loaded with tons of bloat, the code is clean, and it's been very simple to integrate it into a Laravel app that I'm building.”</div>
                        <img src="assets/images/profile.png" width="64" height="64" class="img-fluid rounded-circle me-3 img-thumbnail shadow" alt="Avatar Image" data-aos="fade">
                        <span><span class="fw-bold">Ferrell Solutions,</span> United States</span>
                    </blockquote>
                </div>
            </div>
        </div>

        <!-- Start: Call to Action -->
        <div class="py-vh-3 w-100 overflow-hidden bg-primary text-light" id="workwithus">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-xl-9 col-lg-11 text-center" data-aos="fade">
                        <p class="lead">Start Your Next Project With a Team You Can Trust</p>
                        <h4 class="display-6 mb-5">Whether you're launching a new product, redesigning your platform, or building a custom dashboard, we’re here to bring your vision to life. Our team of experienced designers, developers, and strategists collaborates closely with you to understand your goals, solve complex problems, and deliver scalable solutions.</h4>
                    </div>
                    <div class="col-12">
                        <a class="btn px-4 py-3 fs-4 fw-light btn-light shadow mt-lg-4" data-aos="fade-down" target="_blank" href="https://calendar.app.google/sknAVCJ8rsohNHES8">Book a 15-Min Free Call</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start: Testimonials -->
        <div class="py-vh-3 w-100 overflow-hidden bg-card" id="testimonials">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10 col-xl-7 text-center">
                        <h3 class="display-6">Trusted Worldwide by Creatives, Developers & Agencies</h3>
                        <p class="lead lh-base">From startups to global enterprises, people everywhere choose us for our design, reliability, and experience.</p>
                    </div>
                    <div class="col-xl-10 mt-4">
                        <div class="row g-xl-4 g-lg-3 g-2 align-items-center">
                            <div class="col-12 col-lg-6 col-xl-4" data-aos="fade-right">
                                <div class="card p-lg-4 mt-lg-3 border-0 rounded-4">
                                    <div class="card-body">
                                        <svg class="mb-4" height="20" viewBox="0 0 88 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.612 15.443C3.226 15.641 2.788 15.294 2.866 14.851L3.696 10.121L0.172996 6.76501C-0.156004 6.45101 0.0149962 5.87701 0.455996 5.81501L5.354 5.11901L7.538 0.792012C7.735 0.402012 8.268 0.402012 8.465 0.792012L10.649 5.11901L15.547 5.81501C15.988 5.87701 16.159 6.45101 15.829 6.76501L12.307 10.121L13.137 14.851C13.215 15.294 12.777 15.641 12.391 15.443L8 13.187L3.612 15.443Z"/>
                                            <path d="M21.612 15.443C21.226 15.641 20.788 15.294 20.866 14.851L21.696 10.121L18.173 6.76501C17.844 6.45101 18.015 5.87701 18.456 5.81501L23.354 5.11901L25.538 0.792012C25.735 0.402012 26.268 0.402012 26.465 0.792012L28.649 5.11901L33.547 5.81501C33.988 5.87701 34.159 6.45101 33.829 6.76501L30.307 10.121L31.137 14.851C31.215 15.294 30.777 15.641 30.391 15.443L26 13.187L21.612 15.443Z"/>
                                            <path d="M39.6121 15.443C39.2261 15.641 38.7881 15.294 38.8661 14.851L39.6961 10.121L36.1731 6.76501C35.8441 6.45101 36.0151 5.87701 36.4561 5.81501L41.3541 5.11901L43.5381 0.792012C43.7351 0.402012 44.2681 0.402012 44.4651 0.792012L46.6491 5.11901L51.5471 5.81501C51.9881 5.87701 52.1591 6.45101 51.8291 6.76501L48.3071 10.121L49.1371 14.851C49.2151 15.294 48.7771 15.641 48.3911 15.443L44.0001 13.187L39.6121 15.443Z"/>
                                            <path d="M57.6121 15.443C57.2261 15.641 56.7881 15.294 56.8661 14.851L57.6961 10.121L54.1731 6.76501C53.8441 6.45101 54.0151 5.87701 54.4561 5.81501L59.3541 5.11901L61.5381 0.792012C61.7351 0.402012 62.2681 0.402012 62.4651 0.792012L64.6491 5.11901L69.5471 5.81501C69.9881 5.87701 70.1591 6.45101 69.8291 6.76501L66.3071 10.121L67.1371 14.851C67.2151 15.294 66.7771 15.641 66.3911 15.443L62.0001 13.187L57.6121 15.443Z"/>
                                            <path d="M75.6121 15.443C75.2261 15.641 74.7881 15.294 74.8661 14.851L75.6961 10.121L72.1731 6.76501C71.8441 6.45101 72.0151 5.87701 72.4561 5.81501L77.3541 5.11901L79.5381 0.792012C79.7351 0.402012 80.2681 0.402012 80.4651 0.792012L82.6491 5.11901L87.5471 5.81501C87.9881 5.87701 88.1591 6.45101 87.8291 6.76501L84.3071 10.121L85.1371 14.851C85.2151 15.294 84.7771 15.641 84.3911 15.443L80.0001 13.187L75.6121 15.443Z"/>
                                        </svg>
                                        <blockquote class="blockquote">
                                            <p class="lh-base">"love the number of features on the application, i strongly look forward for an angular version."</p>
                                        </blockquote>
                                        <div class="d-flex justify-content-between border-top-dashed border-light-subtle pt-xl-4 pt-3">
                                            <div>
                                                <h6 class="mb-1">danielharven</h6>
                                                <small class="text-muted">Zambia</small>
                                            </div>
                                            <img src="assets/images/user-9.png" width="48" height="48" class="rounded-circle" alt="Avatar Image" data-aos="fade">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 col-xl-4" data-aos="fade-down">
                                <div class="card p-lg-4 mt-lg-3 border-0 rounded-4">
                                    <div class="card-body">
                                        <svg class="mb-4" height="20" viewBox="0 0 88 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.612 15.443C3.226 15.641 2.788 15.294 2.866 14.851L3.696 10.121L0.172996 6.76501C-0.156004 6.45101 0.0149962 5.87701 0.455996 5.81501L5.354 5.11901L7.538 0.792012C7.735 0.402012 8.268 0.402012 8.465 0.792012L10.649 5.11901L15.547 5.81501C15.988 5.87701 16.159 6.45101 15.829 6.76501L12.307 10.121L13.137 14.851C13.215 15.294 12.777 15.641 12.391 15.443L8 13.187L3.612 15.443Z"/>
                                            <path d="M21.612 15.443C21.226 15.641 20.788 15.294 20.866 14.851L21.696 10.121L18.173 6.76501C17.844 6.45101 18.015 5.87701 18.456 5.81501L23.354 5.11901L25.538 0.792012C25.735 0.402012 26.268 0.402012 26.465 0.792012L28.649 5.11901L33.547 5.81501C33.988 5.87701 34.159 6.45101 33.829 6.76501L30.307 10.121L31.137 14.851C31.215 15.294 30.777 15.641 30.391 15.443L26 13.187L21.612 15.443Z"/>
                                            <path d="M39.6121 15.443C39.2261 15.641 38.7881 15.294 38.8661 14.851L39.6961 10.121L36.1731 6.76501C35.8441 6.45101 36.0151 5.87701 36.4561 5.81501L41.3541 5.11901L43.5381 0.792012C43.7351 0.402012 44.2681 0.402012 44.4651 0.792012L46.6491 5.11901L51.5471 5.81501C51.9881 5.87701 52.1591 6.45101 51.8291 6.76501L48.3071 10.121L49.1371 14.851C49.2151 15.294 48.7771 15.641 48.3911 15.443L44.0001 13.187L39.6121 15.443Z"/>
                                            <path d="M57.6121 15.443C57.2261 15.641 56.7881 15.294 56.8661 14.851L57.6961 10.121L54.1731 6.76501C53.8441 6.45101 54.0151 5.87701 54.4561 5.81501L59.3541 5.11901L61.5381 0.792012C61.7351 0.402012 62.2681 0.402012 62.4651 0.792012L64.6491 5.11901L69.5471 5.81501C69.9881 5.87701 70.1591 6.45101 69.8291 6.76501L66.3071 10.121L67.1371 14.851C67.2151 15.294 66.7771 15.641 66.3911 15.443L62.0001 13.187L57.6121 15.443Z"/>
                                            <path d="M75.6121 15.443C75.2261 15.641 74.7881 15.294 74.8661 14.851L75.6961 10.121L72.1731 6.76501C71.8441 6.45101 72.0151 5.87701 72.4561 5.81501L77.3541 5.11901L79.5381 0.792012C79.7351 0.402012 80.2681 0.402012 80.4651 0.792012L82.6491 5.11901L87.5471 5.81501C87.9881 5.87701 88.1591 6.45101 87.8291 6.76501L84.3071 10.121L85.1371 14.851C85.2151 15.294 84.7771 15.641 84.3911 15.443L80.0001 13.187L75.6121 15.443Z"/>
                                        </svg>
                                        <blockquote class="blockquote">
                                            <p class="lh-base">"When 90% of the templates out there are just rehashing the same old thing, it's nice when you come across one where some thought and careful design went into it. This is one of those templates."</p>
                                        </blockquote>
                                        <div class="d-flex justify-content-between border-top-dashed border-light-subtle pt-xl-4 pt-3">
                                            <div>
                                                <h6 class="mb-1">vlchris</h6>
                                                <small class="text-muted">Somewhere in Worldwide.</small>
                                            </div>
                                            <img src="assets/images/user-2.png" width="48" height="48" class="rounded-circle" alt="Avatar Image" data-aos="fade">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 col-xl-4" data-aos="fade-left">
                                <div class="card p-lg-4 mt-lg-3 border-0 rounded-4">
                                    <div class="card-body">
                                        <svg class="mb-4" height="20" viewBox="0 0 88 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.612 15.443C3.226 15.641 2.788 15.294 2.866 14.851L3.696 10.121L0.172996 6.76501C-0.156004 6.45101 0.0149962 5.87701 0.455996 5.81501L5.354 5.11901L7.538 0.792012C7.735 0.402012 8.268 0.402012 8.465 0.792012L10.649 5.11901L15.547 5.81501C15.988 5.87701 16.159 6.45101 15.829 6.76501L12.307 10.121L13.137 14.851C13.215 15.294 12.777 15.641 12.391 15.443L8 13.187L3.612 15.443Z"/>
                                            <path d="M21.612 15.443C21.226 15.641 20.788 15.294 20.866 14.851L21.696 10.121L18.173 6.76501C17.844 6.45101 18.015 5.87701 18.456 5.81501L23.354 5.11901L25.538 0.792012C25.735 0.402012 26.268 0.402012 26.465 0.792012L28.649 5.11901L33.547 5.81501C33.988 5.87701 34.159 6.45101 33.829 6.76501L30.307 10.121L31.137 14.851C31.215 15.294 30.777 15.641 30.391 15.443L26 13.187L21.612 15.443Z"/>
                                            <path d="M39.6121 15.443C39.2261 15.641 38.7881 15.294 38.8661 14.851L39.6961 10.121L36.1731 6.76501C35.8441 6.45101 36.0151 5.87701 36.4561 5.81501L41.3541 5.11901L43.5381 0.792012C43.7351 0.402012 44.2681 0.402012 44.4651 0.792012L46.6491 5.11901L51.5471 5.81501C51.9881 5.87701 52.1591 6.45101 51.8291 6.76501L48.3071 10.121L49.1371 14.851C49.2151 15.294 48.7771 15.641 48.3911 15.443L44.0001 13.187L39.6121 15.443Z"/>
                                            <path d="M57.6121 15.443C57.2261 15.641 56.7881 15.294 56.8661 14.851L57.6961 10.121L54.1731 6.76501C53.8441 6.45101 54.0151 5.87701 54.4561 5.81501L59.3541 5.11901L61.5381 0.792012C61.7351 0.402012 62.2681 0.402012 62.4651 0.792012L64.6491 5.11901L69.5471 5.81501C69.9881 5.87701 70.1591 6.45101 69.8291 6.76501L66.3071 10.121L67.1371 14.851C67.2151 15.294 66.7771 15.641 66.3911 15.443L62.0001 13.187L57.6121 15.443Z"/>
                                            <path d="M75.6121 15.443C75.2261 15.641 74.7881 15.294 74.8661 14.851L75.6961 10.121L72.1731 6.76501C71.8441 6.45101 72.0151 5.87701 72.4561 5.81501L77.3541 5.11901L79.5381 0.792012C79.7351 0.402012 80.2681 0.402012 80.4651 0.792012L82.6491 5.11901L87.5471 5.81501C87.9881 5.87701 88.1591 6.45101 87.8291 6.76501L84.3071 10.121L85.1371 14.851C85.2151 15.294 84.7771 15.641 84.3911 15.443L80.0001 13.187L75.6121 15.443Z"/>
                                        </svg>
                                        <blockquote class="blockquote">
                                            <p class="lh-base">"Design, Documentation, Features, Flexibility they have covered everything. The best thing is UI and LAYOUT."</p>
                                        </blockquote>
                                        <div class="d-flex justify-content-between border-top-dashed border-light-subtle pt-xl-4 pt-3">
                                            <div>
                                                <h6 class="mb-1">shivneetns</h6>
                                                <small class="text-muted">Somewhere in Worldwide.</small>
                                            </div>
                                            <img src="assets/images/user-4.png" width="48" height="48" class="rounded-circle" alt="Avatar Image" data-aos="fade">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 col-xl-4" data-aos="fade-up">
                                <div class="card p-lg-4 mt-lg-3 border-0 rounded-4">
                                    <div class="card-body">
                                        <svg class="mb-4" height="20" viewBox="0 0 88 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.612 15.443C3.226 15.641 2.788 15.294 2.866 14.851L3.696 10.121L0.172996 6.76501C-0.156004 6.45101 0.0149962 5.87701 0.455996 5.81501L5.354 5.11901L7.538 0.792012C7.735 0.402012 8.268 0.402012 8.465 0.792012L10.649 5.11901L15.547 5.81501C15.988 5.87701 16.159 6.45101 15.829 6.76501L12.307 10.121L13.137 14.851C13.215 15.294 12.777 15.641 12.391 15.443L8 13.187L3.612 15.443Z"/>
                                            <path d="M21.612 15.443C21.226 15.641 20.788 15.294 20.866 14.851L21.696 10.121L18.173 6.76501C17.844 6.45101 18.015 5.87701 18.456 5.81501L23.354 5.11901L25.538 0.792012C25.735 0.402012 26.268 0.402012 26.465 0.792012L28.649 5.11901L33.547 5.81501C33.988 5.87701 34.159 6.45101 33.829 6.76501L30.307 10.121L31.137 14.851C31.215 15.294 30.777 15.641 30.391 15.443L26 13.187L21.612 15.443Z"/>
                                            <path d="M39.6121 15.443C39.2261 15.641 38.7881 15.294 38.8661 14.851L39.6961 10.121L36.1731 6.76501C35.8441 6.45101 36.0151 5.87701 36.4561 5.81501L41.3541 5.11901L43.5381 0.792012C43.7351 0.402012 44.2681 0.402012 44.4651 0.792012L46.6491 5.11901L51.5471 5.81501C51.9881 5.87701 52.1591 6.45101 51.8291 6.76501L48.3071 10.121L49.1371 14.851C49.2151 15.294 48.7771 15.641 48.3911 15.443L44.0001 13.187L39.6121 15.443Z"/>
                                            <path d="M57.6121 15.443C57.2261 15.641 56.7881 15.294 56.8661 14.851L57.6961 10.121L54.1731 6.76501C53.8441 6.45101 54.0151 5.87701 54.4561 5.81501L59.3541 5.11901L61.5381 0.792012C61.7351 0.402012 62.2681 0.402012 62.4651 0.792012L64.6491 5.11901L69.5471 5.81501C69.9881 5.87701 70.1591 6.45101 69.8291 6.76501L66.3071 10.121L67.1371 14.851C67.2151 15.294 66.7771 15.641 66.3911 15.443L62.0001 13.187L57.6121 15.443Z"/>
                                            <path d="M75.6121 15.443C75.2261 15.641 74.7881 15.294 74.8661 14.851L75.6961 10.121L72.1731 6.76501C71.8441 6.45101 72.0151 5.87701 72.4561 5.81501L77.3541 5.11901L79.5381 0.792012C79.7351 0.402012 80.2681 0.402012 80.4651 0.792012L82.6491 5.11901L87.5471 5.81501C87.9881 5.87701 88.1591 6.45101 87.8291 6.76501L84.3071 10.121L85.1371 14.851C85.2151 15.294 84.7771 15.641 84.3911 15.443L80.0001 13.187L75.6121 15.443Z"/>
                                        </svg>
                                        <blockquote class="blockquote">
                                            <p class="lh-base">"Amazing work, a lot of elements design so nice, flexible, when I told them that the code has a little bug, they correct quickly and friendly."</p>
                                        </blockquote>
                                        <div class="d-flex justify-content-between border-top-dashed border-light-subtle pt-xl-4 pt-3">
                                            <div>
                                                <h6 class="mb-1">Ktuluwu</h6>
                                                <small class="text-muted">France</small>
                                            </div>
                                            <img src="assets/images/user-7.png" width="48" height="48" class="rounded-circle" alt="Avatar Image" data-aos="fade">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 col-xl-4" data-aos="fade-right">
                                <div class="card p-lg-4 mt-lg-3 border-0 rounded-4">
                                    <div class="card-body">
                                        <svg class="mb-4" height="20" viewBox="0 0 88 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.612 15.443C3.226 15.641 2.788 15.294 2.866 14.851L3.696 10.121L0.172996 6.76501C-0.156004 6.45101 0.0149962 5.87701 0.455996 5.81501L5.354 5.11901L7.538 0.792012C7.735 0.402012 8.268 0.402012 8.465 0.792012L10.649 5.11901L15.547 5.81501C15.988 5.87701 16.159 6.45101 15.829 6.76501L12.307 10.121L13.137 14.851C13.215 15.294 12.777 15.641 12.391 15.443L8 13.187L3.612 15.443Z"/>
                                            <path d="M21.612 15.443C21.226 15.641 20.788 15.294 20.866 14.851L21.696 10.121L18.173 6.76501C17.844 6.45101 18.015 5.87701 18.456 5.81501L23.354 5.11901L25.538 0.792012C25.735 0.402012 26.268 0.402012 26.465 0.792012L28.649 5.11901L33.547 5.81501C33.988 5.87701 34.159 6.45101 33.829 6.76501L30.307 10.121L31.137 14.851C31.215 15.294 30.777 15.641 30.391 15.443L26 13.187L21.612 15.443Z"/>
                                            <path d="M39.6121 15.443C39.2261 15.641 38.7881 15.294 38.8661 14.851L39.6961 10.121L36.1731 6.76501C35.8441 6.45101 36.0151 5.87701 36.4561 5.81501L41.3541 5.11901L43.5381 0.792012C43.7351 0.402012 44.2681 0.402012 44.4651 0.792012L46.6491 5.11901L51.5471 5.81501C51.9881 5.87701 52.1591 6.45101 51.8291 6.76501L48.3071 10.121L49.1371 14.851C49.2151 15.294 48.7771 15.641 48.3911 15.443L44.0001 13.187L39.6121 15.443Z"/>
                                            <path d="M57.6121 15.443C57.2261 15.641 56.7881 15.294 56.8661 14.851L57.6961 10.121L54.1731 6.76501C53.8441 6.45101 54.0151 5.87701 54.4561 5.81501L59.3541 5.11901L61.5381 0.792012C61.7351 0.402012 62.2681 0.402012 62.4651 0.792012L64.6491 5.11901L69.5471 5.81501C69.9881 5.87701 70.1591 6.45101 69.8291 6.76501L66.3071 10.121L67.1371 14.851C67.2151 15.294 66.7771 15.641 66.3911 15.443L62.0001 13.187L57.6121 15.443Z"/>
                                            <path d="M75.6121 15.443C75.2261 15.641 74.7881 15.294 74.8661 14.851L75.6961 10.121L72.1731 6.76501C71.8441 6.45101 72.0151 5.87701 72.4561 5.81501L77.3541 5.11901L79.5381 0.792012C79.7351 0.402012 80.2681 0.402012 80.4651 0.792012L82.6491 5.11901L87.5471 5.81501C87.9881 5.87701 88.1591 6.45101 87.8291 6.76501L84.3071 10.121L85.1371 14.851C85.2151 15.294 84.7771 15.641 84.3911 15.443L80.0001 13.187L75.6121 15.443Z"/>
                                        </svg>
                                        <blockquote class="blockquote">
                                            <p class="lh-base">"The team at ALUI are real professionals. I had a problem implementing their SCSS into my angular application, and they were very quick to solve the issue, I highly recommend the purchase and the theme."</p>
                                        </blockquote>
                                        <div class="d-flex justify-content-between border-top-dashed border-light-subtle pt-xl-4 pt-3">
                                            <div>
                                                <h6 class="mb-1">spatrick195</h6>
                                                <small class="text-muted">New Zealand</small>
                                            </div>
                                            <img src="assets/images/user-1.png" width="48" height="48" class="rounded-circle" alt="Avatar Image" data-aos="fade">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 col-xl-4" data-aos="fade-right">
                                <div class="card p-lg-4 mt-lg-3 border-0 rounded-4">
                                    <div class="card-body">
                                        <svg class="mb-4" height="20" viewBox="0 0 88 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.612 15.443C3.226 15.641 2.788 15.294 2.866 14.851L3.696 10.121L0.172996 6.76501C-0.156004 6.45101 0.0149962 5.87701 0.455996 5.81501L5.354 5.11901L7.538 0.792012C7.735 0.402012 8.268 0.402012 8.465 0.792012L10.649 5.11901L15.547 5.81501C15.988 5.87701 16.159 6.45101 15.829 6.76501L12.307 10.121L13.137 14.851C13.215 15.294 12.777 15.641 12.391 15.443L8 13.187L3.612 15.443Z"/>
                                            <path d="M21.612 15.443C21.226 15.641 20.788 15.294 20.866 14.851L21.696 10.121L18.173 6.76501C17.844 6.45101 18.015 5.87701 18.456 5.81501L23.354 5.11901L25.538 0.792012C25.735 0.402012 26.268 0.402012 26.465 0.792012L28.649 5.11901L33.547 5.81501C33.988 5.87701 34.159 6.45101 33.829 6.76501L30.307 10.121L31.137 14.851C31.215 15.294 30.777 15.641 30.391 15.443L26 13.187L21.612 15.443Z"/>
                                            <path d="M39.6121 15.443C39.2261 15.641 38.7881 15.294 38.8661 14.851L39.6961 10.121L36.1731 6.76501C35.8441 6.45101 36.0151 5.87701 36.4561 5.81501L41.3541 5.11901L43.5381 0.792012C43.7351 0.402012 44.2681 0.402012 44.4651 0.792012L46.6491 5.11901L51.5471 5.81501C51.9881 5.87701 52.1591 6.45101 51.8291 6.76501L48.3071 10.121L49.1371 14.851C49.2151 15.294 48.7771 15.641 48.3911 15.443L44.0001 13.187L39.6121 15.443Z"/>
                                            <path d="M57.6121 15.443C57.2261 15.641 56.7881 15.294 56.8661 14.851L57.6961 10.121L54.1731 6.76501C53.8441 6.45101 54.0151 5.87701 54.4561 5.81501L59.3541 5.11901L61.5381 0.792012C61.7351 0.402012 62.2681 0.402012 62.4651 0.792012L64.6491 5.11901L69.5471 5.81501C69.9881 5.87701 70.1591 6.45101 69.8291 6.76501L66.3071 10.121L67.1371 14.851C67.2151 15.294 66.7771 15.641 66.3911 15.443L62.0001 13.187L57.6121 15.443Z"/>
                                            <path d="M75.6121 15.443C75.2261 15.641 74.7881 15.294 74.8661 14.851L75.6961 10.121L72.1731 6.76501C71.8441 6.45101 72.0151 5.87701 72.4561 5.81501L77.3541 5.11901L79.5381 0.792012C79.7351 0.402012 80.2681 0.402012 80.4651 0.792012L82.6491 5.11901L87.5471 5.81501C87.9881 5.87701 88.1591 6.45101 87.8291 6.76501L84.3071 10.121L85.1371 14.851C85.2151 15.294 84.7771 15.641 84.3911 15.443L80.0001 13.187L75.6121 15.443Z"/>
                                        </svg>
                                        <blockquote class="blockquote">
                                            <p class="lh-base">"Good and fast support, got a problem with a wrong bought product and was able to solve it in about 4 days. Also the theme is really good looking and its really easy to work with. "</p>
                                        </blockquote>
                                        <div class="d-flex justify-content-between border-top-dashed border-light-subtle pt-xl-4 pt-3">
                                            <div>
                                                <h6 class="mb-1">M4I3X</h6>
                                                <small class="text-muted">Germany</small>
                                            </div>
                                            <img src="assets/images/user-8.png" width="48" height="48" class="rounded-circle" alt="Avatar Image" data-aos="fade">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start: Support -->
        <div class="py-vh-3 w-100 overflow-hidden">
            <div class="container">
                <div class="row g-1 text-center align-items-center">
                    <div class="col-md-4" data-aos="fade-up">
                        <div class="p-4 bg-card rounded-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width=".5" stroke-linecap="round" stroke-linejoin="round"><path d="M4.711 17.875c-.534 -1.339 -1.35 -4.178 .129 -6.47c1.415 -2.193 3.769 -3.608 5.099 -4.278l-5.229 10.748z" /><path d="M19.715 12.508c-.54 3.409 -2.094 6.156 -4.155 7.348c-4.069 2.353 -8.144 .45 -9.297 -.188c.877 -1.436 4.433 -7.22 6.882 -10.591c2.714 -3.737 5.864 -5.978 6.565 -6.077c0 .201 .03 .55 .071 1.03c.144 1.709 .443 5.264 -.066 8.478z" /></svg>
                            <h5 class="mt-4">Quality Checked by Envato</h5>
                            <p class="mb-0 lh-base fs-6">Every line of code and every design element has been reviewed and approved by Envato’s quality team, ensuring it meets the highest industry standards for performance, design, and reliability.</p>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="py-md-5 p-4 bg-card rounded-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width=".5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 14.5l-5.5 3.5l2 -6l-4.5 -4h6l2 -5l2 5h6l-4.5 4l2 6z" /><path d="M20.507 8.872l-2.01 -5.872h-12.994l-2.009 5.872c-1.242 3.593 -.135 7.094 3.249 9.407l5.257 3.721l5.257 -3.721c3.385 -2.313 4.49 -5.814 3.25 -9.407z" /></svg>
                            <h5 class="mt-4">Created by Elite Author</h5>
                            <p class="mb-0 lh-base fs-6">Built by a trusted Elite Author with a proven track record on Envato Market, this template reflects years of experience, attention to detail, and a commitment to creating world-class digital products.</p>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="p-4 bg-card rounded-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width=".5" stroke-linecap="round" stroke-linejoin="round"><path d="M19 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M22 22a2 2 0 0 0 -2 -2h-2a2 2 0 0 0 -2 2" /><path d="M12.454 19.97a9.9 9.9 0 0 1 -4.754 -.97l-4.7 1l1.3 -3.9c-2.324 -3.437 -1.426 -7.872 2.1 -10.374c3.526 -2.501 8.59 -2.296 11.845 .48c1.667 1.423 2.596 3.294 2.747 5.216" /></svg>
                            <h5 class="mt-4">Dedicated Online Support</h5>
                            <p class="mb-0 lh-base fs-6">Need help or have a question? Our support team is here for you. Get quick, professional assistance via email or support ticket — because your success is our priority.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start: Footer -->
        <div class="py-vh-3 container border-top" data-aos="fade" data-aos-delay="200">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-lg-8 text-center">
                    <h3 class="fs-2 fw-light mb-4">Stay in touch with our <span class="fw-bold">monthly and free</span> newsletter!</h3>
                    <div class="grouped-inputs border bg-card p-4 rounded-4">
                        <div class="row g-3">
                            <div class="col">
                                <form class="form-floating">
                                    <input type="email" class="form-control p-3" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Email address</label>
                                </form>
                            </div>
                            <div class="col-12   col-sm-auto">
                                <a href="#" class="btn btn-dark py-3 px-5">Subscribe</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <footer>
        <div class="container border-top">
            <div class="row py-xl-5 py-4 d-flex justify-content-between">
                <div class="col-md-12 col-lg-12 col-xl-3">
                    <div class="p-lg-0 p-xl-5">
                        <a href="{{ url('/') }}" aria-label="Thunder AI Dashboard"><img src="assets/images/logo.svg" alt="Thunder AI Logo" class="img-fluid"></a>
                        <address class="text-secondary mt-3 mb-5 mb-xl-0">
                            Thunder AI Admin,
                            1311 Market St, Suite 800
                            San Francisco, CA 98103
                            <abbr title="Phone">P:</abbr>
                            (123) 456-8989
                        </address>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-xl-3">
                    <div class="border-start p-xl-5 p-3">
                        <h3 class="h5 mb-3 text-uppercase">AI Tools</h3>
                        <ul class="flex-column fs-6 lh-lg ps-3">
                            <li><a href="{{ route('ai-chat') }}">AI Chat Assistant</a></li>
                            <li><a href="{{ route('ai-finder') }}">AI.TLD Finder</a></li>
                            <li><a href="{{ route('ai-writer') }}">AI Writer Studio</a></li>
                            <li><a href="{{ route('ai-image-generator') }}">AI Image Generator</a></li>
                            <li><a href="{{ route('ai-modules') }}">AI Models</a></li>
                            <li><a href="{{ route('ai-tool-library') }}">AI Tools Library</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-xl-3">
                    <div class="border-start p-xl-5 p-3">
                        <h3 class="h5 mb-3 text-uppercase">Dashboard</h3>
                        <ul class="flex-column fs-6 lh-lg ps-3">
                            <li><a href="{{ route('analytics') }}">Analytics</a></li>
                            <li><a href="{{ route('projects-analytics') }}">My Projects</a></li>
                            <li><a href="{{ route('events-analytics') }}">My Events</a></li>
                            <li><a href="{{ route('ecommerce-analytics') }}">eCommerce</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-xl-3">
                    <div class="border-start p-xl-5 p-3">
                        <h3 class="h5 mb-3 text-uppercase">Subpages</h3>
                        <ul class="flex-column fs-6 lh-lg ps-3">
                            <li><a href="{{ route('login') }}">Sign In</a></li>
                            <li><a href="{{ route('register') }}">Register System Page</a></li>
                            <li><a href="{{ route('error') }}">404 System Page</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container text-center py-3">Made by <a href="https://www.thememakker.com/" target="_blank" aria-label="ThemeMakker Infotech LLP">ThemeMakker.com</a></div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>

    <script>

        // Light/Dark topbar
        /*!
        * Color mode toggler for Bootstrap's docs (https://getbootstrap.com/)
        * Copyright 2011-2022 The Bootstrap Authors
        * Licensed under the Creative Commons Attribution 3.0 Unported License.
        */

        (() => {
            'use strict'

            const storedTheme = localStorage.getItem('theme')
            const getPreferredTheme = () => {
                if (storedTheme) {
                    return storedTheme
                }

                return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
            }
            const setTheme = function (theme) {
                if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                    document.documentElement.setAttribute('data-bs-theme', 'dark')
                } else {
                    document.documentElement.setAttribute('data-bs-theme', theme)
                }
            }
            setTheme(getPreferredTheme())
            const showActiveTheme = theme => {
                const activeThemeIcon = document.querySelector('.theme-icon-active use')
                const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
                const svgOfActiveBtn = btnToActive.querySelector('svg use').getAttribute('href')

                document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
                    element.classList.remove('active')
                })

                btnToActive.classList.add('active')
                activeThemeIcon.setAttribute('href', svgOfActiveBtn)
            }
            window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
                if (storedTheme !== 'light' || storedTheme !== 'dark') {
                    setTheme(getPreferredTheme())
                }
            })
            window.addEventListener('DOMContentLoaded', () => {
                showActiveTheme(getPreferredTheme())

                document.querySelectorAll('[data-bs-theme-value]')
                    .forEach(toggle => {
                        toggle.addEventListener('click', () => {
                            const theme = toggle.getAttribute('data-bs-theme-value')
                            localStorage.setItem('theme', theme)
                            setTheme(theme)
                            showActiveTheme(theme)
                        })
                    })
            })
        })()

        AOS.init({
            duration: 1000, // values from 0 to 3000, with step 50ms
        });

        let scrollpos = window.scrollY
        const header = document.querySelector(".navbar")
        const header_height = header.offsetHeight

        const add_class_on_scroll = () => header.classList.add("scrolled", "shadow-sm")
        const remove_class_on_scroll = () => header.classList.remove("scrolled", "shadow-sm")

        window.addEventListener('scroll', function () {
            scrollpos = window.scrollY;
            if (scrollpos >= header_height) { add_class_on_scroll() }
            else { remove_class_on_scroll() }
            console.log(scrollpos)
        })

        // Hero image slide on refresh the page
        const images = [
            'url(assets/images/hero-image.png)',
            'url(assets/images/hero-image-2.png)',
            'url(assets/images/hero-image-3.png)'
        ];
        const hero = document.getElementById('HeroImage');
        let currentIndex = -1;
        function getRandomIndexExcluding(current) {
            let newIndex;
            do {
                newIndex = Math.floor(Math.random() * images.length);
            } while (newIndex === current);
            return newIndex;
        }
        function updateBackground() {
            currentIndex = getRandomIndexExcluding(currentIndex);
            hero.style.backgroundImage = images[currentIndex];
        }
        // Set initial background
        updateBackground();
        // Change image every 5 seconds
        setInterval(updateBackground, 5000);


        // Basic Example
        $('#OwlBasicAutoplay').owlCarousel({
            items: 4,
            loop: true,
            margin: 20,
            autoplay: true,
            autoplayTimeout: 1000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 4
                },
                1000: {
                    items: 6
                }
            }
        })
    </script>

</body>
</html>
