@extends('documentation.layout.app')
@push('style')

@endpush
@section('page-content')
    <div class="row g-3">
        <div class="col-12">
            <h3>Build fast, responsive sites with Bootstrap</h3>
            <p class="lead lh-base">Powerful, extensible, and feature-packed frontend toolkit. Build and customize with Sass, utilize prebuilt grid system and components, and bring projects to life with powerful JavaScript plugins.</p>
            <p class="text-danger">We use bootstrap@5.3.6 version</p>
            <a href="https://getbootstrap.com/" class="btn px-4 py-3 btn-primary" target="_blank" rel="noreferrer">Bootstrap official</a>
            <hr>
        </div>
        <div class="col-lg-9 col-md-9" data-bs-target="componentsNav" data-bs-spy="scroll" data-bs-smooth-scroll="true">
            <!-- Accordion -->
            <section id="accordion">
                <h5>Accordion</h5>
                <p>Please refer to the <a class="link-primary" href="https://getbootstrap.com/docs/5.3/components/accordion/" target="_blank" rel="noreferrer">official Bootstrap documentation</a> for detailed information.</p>
                <div class="card border-dashed">
                    <div class="card-body">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Accordion Item #1
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        This is the first item's accordion body. It is shown by default, until the collapse plugin
                                        adds the appropriate classes that we use to
                                        style each element. These classes control the overall appearance, as well as the showing and
                                        hiding via CSS transitions. You can
                                        modify any of this with custom CSS or overriding our default variables. It's also worth
                                        noting that just about any HTML can go within
                                        the <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Accordion Item #2
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        This is the second item's accordion body. It is hidden by default, until the collapse plugin
                                        adds the appropriate classes that we use
                                        to style each element. These classes control the overall appearance, as well as the showing
                                        and hiding via CSS transitions. You can
                                        modify any of this with custom CSS or overriding our default variables. It's also worth
                                        noting that just about any HTML can go within
                                        the <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Accordion Item #3
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        This is the third item's accordion body. It is hidden by default, until the collapse plugin
                                        adds the appropriate classes that we use
                                        to style each element. These classes control the overall appearance, as well as the showing
                                        and hiding via CSS transitions. You can
                                        modify any of this with custom CSS or overriding our default variables. It's also worth
                                        noting that just about any HTML can go within
                                        the <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Alerts -->
            <section class="pt-3 mt-2 mt-md-4" id="alerts">
                <h5>Alerts</h5>
                <p>Please refer to the <a class="link-primary" href="https://getbootstrap.com/docs/5.3/components/alerts/" target="_blank" rel="noreferrer">official Bootstrap documentation</a> for detailed information.</p>
                <div class="card border-dashed">
                    <div class="card-body">
                        <div class="alert alert-primary" role="alert">A simple primary alert—check it out!</div>
                        <div class="alert alert-secondary" role="alert">A simple secondary alert—check it out!</div>
                        <div class="alert alert-success" role="alert">A simple success alert—check it out!</div>
                        <div class="alert alert-danger" role="alert">A simple danger alert—check it out!</div>
                        <div class="alert alert-warning" role="alert">A simple warning alert—check it out!</div>
                        <div class="alert alert-info" role="alert">A simple info alert—check it out!</div>
                        <div class="alert alert-light" role="alert">A simple light alert—check it out!</div>
                        <div class="alert alert-dark mb-0" role="alert">A simple dark alert—check it out!</div>
                    </div>
                </div>
            </section>

            <!-- Avatar -->
            <section class="pt-3 mt-2 mt-md-4" id="avatar">
                <h5>Avatar</h5>
                <p>Please refer to the <a class="link-primary" href="https://getbootstrap.com/docs/5.3/components/alerts/" target="_blank" rel="noreferrer">official Bootstrap documentation</a> for detailed information.</p>
                <div class="card border-dashed">
                    <div class="card-body">
                        <div class="d-flex gap-4 align-items-center">
                            <img class="avatar xl rounded-circle shadow" src="assets/images/profile.png" alt="profile">
                            <img class="avatar lg rounded-circle shadow" src="assets/images/profile.png" alt="profile">
                            <img class="avatar md rounded-circle shadow" src="assets/images/profile.png" alt="profile">
                            <img class="avatar sm rounded-circle shadow" src="assets/images/profile.png" alt="profile">
                        </div>
                    </div>
                </div>
            </section>

            <!-- Badge -->
            <section class="pt-3 mt-2 mt-md-4" id="badge">
                <h5>Badge</h5>
                <p>Please refer to the <a class="link-primary" href="https://getbootstrap.com/docs/5.3/components/badge/" target="_blank" rel="noreferrer">official Bootstrap documentation</a> for detailed information.</p>
                <div class="card border-dashed">
                    <div class="card-body d-flex flex-wrap gap-1">
                        <span class="badge text-bg-primary">Primary</span>
                        <span class="badge text-bg-secondary">Secondary</span>
                        <span class="badge text-bg-success">Success</span>
                        <span class="badge text-bg-danger">Danger</span>
                        <span class="badge text-bg-warning">Warning</span>
                        <span class="badge text-bg-info">Info</span>
                        <span class="badge text-bg-light">Light</span>
                        <span class="badge text-bg-dark">Dark</span>
                    </div>
                </div>
            </section>

            <!-- Breadcrumb -->
            <section class="pt-3 mt-2 mt-md-4" id="breadcrumb">
                <h5>Breadcrumb</h5>
                <p>Please refer to the <a class="link-primary" href="https://getbootstrap.com/docs/5.3/components/breadcrumb/" target="_blank" rel="noreferrer">official Bootstrap documentation</a> for detailed information.</p>
                <div class="card border-dashed">
                    <div class="card-body">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page">Home</li>
                            </ol>
                        </nav>
            
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Library</li>
                            </ol>
                        </nav>
            
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Library</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </section>

            <!-- Button group -->
            <section class="pt-3 mt-2 mt-md-4" id="buttonGroup">
                <h5>Button group</h5>
                <p>Please refer to the <a class="link-primary" href="https://getbootstrap.com/docs/5.3/components/button-group/" target="_blank" rel="noreferrer">official Bootstrap documentation</a> for detailed information.</p>
                <div class="card border-dashed">
                    <div class="card-body">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-primary">Left</button>
                            <button type="button" class="btn btn-primary">Middle</button>
                            <button type="button" class="btn btn-primary">Right</button>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Buttons -->
            <section class="pt-3 mt-2 mt-md-4" id="buttons">
                <h5>Buttons</h5>
                <p>Please refer to the <a class="link-primary" href="https://getbootstrap.com/docs/5.3/components/accordion/" target="_blank" rel="noreferrer">official Bootstrap documentation</a> for detailed information.</p>
                <div class="card border-dashed">
                    <div class="card-body d-flex flex-wrap gap-1">
                        <button type="button" class="btn btn-primary">Primary</button>
                        <button type="button" class="btn btn-secondary">Secondary</button>
                        <button type="button" class="btn btn-success">Success</button>
                        <button type="button" class="btn btn-danger">Danger</button>
                        <button type="button" class="btn btn-warning">Warning</button>
                        <button type="button" class="btn btn-info">Info</button>
                        <button type="button" class="btn btn-light">Light</button>
                        <button type="button" class="btn btn-dark">Dark</button>
                        <button type="button" class="btn btn-link">Link</button>
                    </div>
                </div>
            </section>

            <!-- Card -->
            <section class="pt-3 mt-2 mt-md-4" id="card">
                <h5>Card</h5>
                <p>Please refer to the <a class="link-primary" href="https://getbootstrap.com/docs/5.3/components/card/" target="_blank" rel="noreferrer">official Bootstrap documentation</a> for detailed information.</p>
                <div class="card border-dashed">
                    <div class="card-body">
                        <h6 class="card-title">Card title</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                            content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </section>

            <!-- Carousel -->
            <section class="pt-3 mt-2 mt-md-4" id="carousel">
                <h5>Carousel</h5>
                <p>Please refer to the <a class="link-primary" href="https://getbootstrap.com/docs/5.3/components/carousel/" target="_blank" rel="noreferrer">official Bootstrap documentation</a> for detailed information.</p>
                <div class="card border-dashed">
                    <div class="card-body">
                        <div id="carouselExample" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row gx-3">
                                        <div class="col">
                                            <div class="ratio ratio-16x9 bg-body-secondary">
                                                <div class="d-flex align-items-center justify-content-center">1</div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="ratio ratio-16x9 bg-body-secondary">
                                                <div class="d-flex align-items-center justify-content-center">2</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row gx-3">
                                        <div class="col">
                                            <div class="ratio ratio-16x9 bg-body-secondary">
                                                <div class="d-flex align-items-center justify-content-center">3</div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="ratio ratio-16x9 bg-body-secondary">
                                                <div class="d-flex align-items-center justify-content-center">4</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row gx-3">
                                        <div class="col">
                                            <div class="ratio ratio-16x9 bg-body-secondary">
                                                <div class="d-flex align-items-center justify-content-center">5</div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="ratio ratio-16x9 bg-body-secondary">
                                                <div class="d-flex align-items-center justify-content-center">6</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Charts -->
            <section class="pt-3 mt-2 mt-md-4" id="charts">
                <h5>Charts</h5>
                <p>Dashbrd uses ChartJS for its charts. Please refer to the <a class="link-primary" href="https://www.chartjs.org/" target="_blank" rel="noreferrer">official plugin documentation</a> for detailed information.</p>
                <div class="card border-dashed">
                    <div class="card-body">
                        <div class="chart">
                            <canvas id="TotalUsersChart" class="chart-canvas"></canvas>
                        </div>
                    </div>
                    <div class="card-footer">
                        <code>&lt;div&nbsp;class="chart"&gt;<br>&nbsp;&nbsp;&lt;canvas&nbsp;class="chart-canvas"&nbsp;id="TotalUsersChart"&gt;&lt;/canvas&gt;<br>&lt;/div&gt;<br><br>&lt;script&gt;<br>&nbsp;&nbsp;new&nbsp;Chart(document.getElementById('chartId'),&nbsp;{&nbsp;...&nbsp;});<br>&lt;/script&gt;</code>
                    </div>
                </div>
            </section>

            <!-- Close button -->
            <section class="pt-3 mt-2 mt-md-4" id="closeButton">
                <h5>Close button</h5>
                <p>Please refer to the <a class="link-primary" href="https://getbootstrap.com/docs/5.3/components/close-button/" target="_blank" rel="noreferrer">official Bootstrap documentation</a> for detailed information.</p>
                <div class="card border-dashed">
                    <div class="card-body">
                        <button type="button" class="btn-close" aria-label="Close"></button>
                    </div>
                </div>
            </section>

            <!-- Collapse -->
            <section class="pt-3 mt-2 mt-md-4" id="collapse">
                <h5>Collapse</h5>
                <p>Please refer to the <a class="link-primary" href="https://getbootstrap.com/docs/5.3/components/collapse/" target="_blank" rel="noreferrer">official Bootstrap documentation</a> for detailed information.</p>
                <div class="card border-dashed">
                    <div class="card-body">
                        <p>
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button"
                                aria-expanded="false" aria-controls="collapseExample">
                                Link with href
                            </a>
                        </p>
                        <div class="collapse" id="collapseExample">
                            <div class="card card-body">
                                Some placeholder content for the collapse component. This panel is hidden by default but revealed
                                when the user activates the relevant
                                trigger.
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Dropdowns -->
            <section class="pt-3 mt-2 mt-md-4" id="dropdowns">
                <h5>Dropdowns</h5>
                <p>Please refer to the <a class="link-primary" href="https://getbootstrap.com/docs/5.3/components/dropdowns/" target="_blank" rel="noreferrer">official Bootstrap documentation</a> for detailed information.</p>
                <div class="card border-dashed">
                    <div class="card-body">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">Dropdown button</button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Forms -->
            <section class="pt-3 mt-2 mt-md-4" id="forms">
                <h5>Forms</h5>
                <p>Please refer to the <a class="link-primary" href="https://getbootstrap.com/docs/5.3/forms/overview/" target="_blank" rel="noreferrer">official Bootstrap documentation</a> for detailed information.</p>
                <div class="card border-dashed">
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="mb-4">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-4 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
                <h5 class="mt-5">Forms Sizing</h5>
                <p>
                    Please refer to the
                    <a class="link-primary" href="https://getbootstrap.com/docs/5.3/forms/form-control#sizing" target="_blank" rel="noreferrer">official Bootstrap documentation</a>
                    for detailed information.
                </p>
                <div class="card border-dashed">
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <div class="mb-3">
                                    <label for="exampleInputEmaillg" class="form-label">Large input</label>
                                    <input type="text" class="form-control form-control-lg" id="exampleInputEmaillg" aria-describedby="Large">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmailNormal" class="form-label">Default input</label>
                                    <input type="text" class="form-control" id="exampleInputEmailNormal" aria-describedby="default">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmailSm" class="form-label">Small input</label>
                                    <input type="text" class="form-control form-control-sm" id="exampleInputEmailSm" aria-describedby="small">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>

            <!-- List group -->
            <section class="pt-3 mt-2 mt-md-4" id="listGroup">
                <h5>List group</h5>
                <p>Please refer to the <a class="link-primary" href="https://getbootstrap.com/docs/5.3/components/list-group/" target="_blank" rel="noreferrer">official Bootstrap documentation</a> for detailed information.</p>
                <div class="card border-dashed">
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">An item</li>
                            <li class="list-group-item">A second item</li>
                            <li class="list-group-item">A third item</li>
                            <li class="list-group-item">A fourth item</li>
                            <li class="list-group-item">And a fifth one</li>
                        </ul>
                    </div>
                </div>
            </section>

            <!-- Modal -->
            <section class="pt-3 mt-2 mt-md-4" id="modal">
                <h5>Modal</h5>
                <p>Please refer to the <a class="link-primary" href="https://getbootstrap.com/docs/5.3/components/modal/" target="_blank" rel="noreferrer">official Bootstrap documentation</a> for detailed information.</p>
                <div class="card border-dashed">
                    <div class="card-body">
                        <div class="modal position-static d-block" tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content rounded-4">
                                    <div class="modal-header">
                                        <h5 class="modal-title fs-6">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Modal body text goes here.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="my-n3">
                                            <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Navbar -->
            <section class="pt-3 mt-2 mt-md-4" id="navbar">
                <h5>Navbar</h5>
                <p>Please refer to the <a class="link-primary" href="https://getbootstrap.com/docs/5.3/components/navbar/" target="_blank" rel="noreferrer">official Bootstrap documentation</a> for detailed information.</p>
                <div class="card border-dashed">
                    <div class="card-body">
                        <nav class="navbar navbar-expand-lg bg-body-tertiary">
                            <div class="container-fluid">
                                <a class="navbar-brand" href="#">Navbar</a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        <li class="nav-item">
                                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Link</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Dropdown
                                        </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><hr class="dropdown-divider"></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                                        </li>
                                    </ul>
                                    <form class="d-flex" role="search">
                                        <input class="form-control me-2" id="navbarSearch" type="search" placeholder="Search" aria-label="Search"/>
                                        <button class="btn btn-outline-success" type="submit">Search</button>
                                    </form>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </section>

            <!-- Navs & tabs -->
            <section class="pt-3 mt-2 mt-md-4" id="navsTabs">
                <h5>Navs &amp; tabs</h5>
                <p>Please refer to the <a class="link-primary" href="https://getbootstrap.com/docs/5.3/components/navs-tabs/" target="_blank" rel="noreferrer">official Bootstrap documentation</a> for detailed information.</p>
                <div class="card border-dashed">
                    <div class="card-body">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Active</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <h6 class="mt-5 mb-4">Nav tabs</h6>
                <div class="card border-dashed">
                    <div class="card-body">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Active</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <h6 class="mt-5 mb-4">Nav pills</h6>
                <div class="card border-dashed">
                    <div class="card-body">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Active</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <h6 class="mt-5 mb-4">Nav underline</h6>
                <div class="card border-dashed">
                    <div class="card-body">
                        <ul class="nav nav-underline">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Active</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <!-- Offcanvas -->
            <section class="pt-3 mt-2 mt-md-4" id="offcanvas">
                <h5>Offcanvas</h5>
                <p>Please refer to the <a class="link-primary" href="https://getbootstrap.com/docs/5.3/components/offcanvas/" target="_blank" rel="noreferrer">official Bootstrap documentation</a> for detailed information.</p>
                <div class="card border-dashed">
                    <div class="card-body">
                        <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                            aria-controls="offcanvasExample"> Example </a>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                            aria-labelledby="offcanvasExampleLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title fs-6" id="offcanvasExampleLabel">Offcanvas</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <div>Some text as placeholder. In real life you can have the elements you have chosen. Like, text,
                                    images, lists, etc.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Pagination -->
            <section class="pt-3 mt-2 mt-md-4" id="pagination">
                <h5>Pagination</h5>
                <p>Please refer to the <a class="link-primary" href="https://getbootstrap.com/docs/5.3/components/pagination/" target="_blank" rel="noreferrer">official Bootstrap documentation</a> for detailed information.</p>
                <div class="card border-dashed">
                    <div class="card-body">
                        <nav aria-label="...">
                            <ul class="pagination mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link">Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active" aria-current="page">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </section>

            <!-- Placeholders -->
            <section class="pt-3 mt-2 mt-md-4" id="placeholders">
                <h5>Placeholders</h5>
                <p>Please refer to the <a class="link-primary" href="https://getbootstrap.com/docs/5.3/components/placeholders/" target="_blank" rel="noreferrer">official Bootstrap documentation</a> for detailed information.</p>
                <div class="card border-dashed">
                    <div class="card-body">
                        <span class="placeholder col-6"></span>
                        <span class="placeholder w-75"></span>
                        <span class="placeholder" style="width: 25%"></span>
                    </div>
                </div>
            </section>

            <!-- Popovers -->
            <section class="pt-3 mt-2 mt-md-4" id="popovers">
                <h5>Popovers</h5>
                <p>Please refer to the <a class="link-primary" href="https://getbootstrap.com/docs/5.3/components/popovers/" target="_blank" rel="noreferrer">official Bootstrap documentation</a> for detailed information.</p>
                <div class="card border-dashed">
                    <div class="card-body d-flex flex-wrap gap-1">
                        <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Top popover">
                            Popoveron top
                        </button>
                        <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Right popover">
                            Popover on right
                        </button>
                        <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Bottom popover">
                            Popover on bottom
                        </button>
                        <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-content="Left popover">
                            Popover on left
                        </button>
                    </div>
                </div>
            </section>

            <!-- Progress -->
            <section class="pt-3 mt-2 mt-md-4" id="progress">
                <h5>Progress</h5>
                <p>Please refer to the <a class="link-primary" href="https://getbootstrap.com/docs/5.3/components/progress/" target="_blank" rel="noreferrer">official Bootstrap documentation</a> for detailed information.</p>
                <div class="card border-dashed">
                    <div class="card-body">
                        <div class="progress mb-3" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: 0%"></div>
                        </div>
                        <div class="progress mb-3" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: 25%"></div>
                        </div>
                        <div class="progress mb-3" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: 50%"></div>
                        </div>
                        <div class="progress mb-3" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: 75%"></div>
                        </div>
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: 100%"></div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Spinners -->
            <section class="pt-3 mt-2 mt-md-4" id="spinners">
                <h5>Spinners</h5>
                <p>Please refer to the <a class="link-primary" href="https://getbootstrap.com/docs/5.3/components/spinners/" target="_blank" rel="noreferrer">official Bootstrap documentation</a> for detailed information.</p>
                <div class="card border-dashed">
                    <div class="card-body">
                        <div class="spinner-border text-primary" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-border text-secondary" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-border text-success" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-border text-danger" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-border text-warning" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-border text-info" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-border text-light" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-border text-dark" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                </div>
                <h6 class="mt-5 mb-4">Growing spinner</h6>
                <div class="card border-dashed">
                    <div class="card-body">
                        <div class="spinner-grow text-primary" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-grow text-secondary" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-grow text-success" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-grow text-danger" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-grow text-warning" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-grow text-info" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-grow text-light" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-grow text-dark" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Tables -->
            <section class="pt-3 mt-2 mt-md-4" id="tables">
                <h5>Tables</h5>
                <p>Please refer to the <a class="link-primary" href="https://getbootstrap.com/docs/5.3/content/tables/" target="_blank" rel="noreferrer">official Bootstrap documentation</a> for detailed information.</p>
                <div class="card border-dashed">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <!-- Toasts -->
            <section class="pt-3 mt-2 mt-md-4" id="toasts">
                <h5>Toasts</h5>
                <p>Please refer to the <a class="link-primary" href="https://getbootstrap.com/docs/5.3/components/toasts/" target="_blank" rel="noreferrer">official Bootstrap documentation</a> for detailed information.</p>
                <div class="card border-dashed">
                    <div class="card-body">
                        <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="toast-header">
                                <h6 class="fs-base me-auto mb-0">Bootstrap</h6>
                                <small class="text-body-secondary">11 mins ago</small>
                                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                            <div class="toast-body">Hello, world! This is a toast message.</div>
                        </div>
                    </div>
                </div>
                <h6 class="mt-5">Live Toasts</h6>
                <div class="card border-dashed">
                    <div class="card-body">
                        <button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button>

                        <div class="toast-container position-fixed bottom-0 end-0 p-3">
                            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="toast-header">
                                    <svg aria-hidden="true" class="bd-placeholder-img rounded me-2" height="20" preserveAspectRatio="xMidYMid slice" width="20" xmlns="http://www.w3.org/2000/svg"><rect width="100%" height="100%" fill="var(--bs-primary)"></rect></svg>
                                    <strong class="me-auto">Bootstrap</strong>
                                    <small>11 mins ago</small>
                                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                </div>
                                <div class="toast-body">
                                    Hello, world! This is a toast message.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Tooltips -->
            <section class="pt-3 mt-2 mt-md-4 pb-5" id="tooltips">
                <h5>Tooltips</h5>
                <p>lease refer to the <a href="https://getbootstrap.com/docs/5.3/components/tooltips/" target="_blank" rel="noreferrer">official Bootstrap documentation</a> for detailed information.</p>
                <div class="card border-dashed">
                    <div class="card-body d-flex flex-wrap gap-1">
                        <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top"
                            data-bs-title="Tooltip on top">
                            Tooltip on top
                        </button>
                        <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="right"
                            data-bs-title="Tooltip on right">
                            Tooltip on right
                        </button>
                        <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom"
                            data-bs-title="Tooltip on bottom">
                            Tooltip on bottom
                        </button>
                        <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="left"
                            data-bs-title="Tooltip on left">
                            Tooltip on left
                        </button>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-lg-3 col-md-3 d-none d-md-block">
            <nav class="align-items-start flex-column li_animate nav nav-pills sticky-top ms-lg-5" id="componentsNav" style="top: 80px;">
                <li><a class="nav-link py-1 fs-14 px-2 active" href="#accordion">Accordion</a></li>
                <li><a class="nav-link py-1 fs-14 px-2" href="#alerts">Alerts</a></li>
                <li><a class="nav-link py-1 fs-14 px-2" href="#avatar">Avatar</a></li>
                <li><a class="nav-link py-1 fs-14 px-2" href="#badge">Badge</a></li>
                <li><a class="nav-link py-1 fs-14 px-2" href="#breadcrumb">Breadcrumb</a></li>
                <li><a class="nav-link py-1 fs-14 px-2" href="#buttonGroup">Button group</a></li>
                <li><a class="nav-link py-1 fs-14 px-2" href="#buttons">Buttons</a></li>
                <li><a class="nav-link py-1 fs-14 px-2" href="#card">Card</a></li>
                <li><a class="nav-link py-1 fs-14 px-2" href="#carousel">Carousel</a></li>
                <li><a class="nav-link py-1 fs-14 px-2" href="#charts">Charts</a></li>
                <li><a class="nav-link py-1 fs-14 px-2" href="#closeButton">Close button</a></li>
                <li><a class="nav-link py-1 fs-14 px-2" href="#collapse">Collapse</a></li>
                <li><a class="nav-link py-1 fs-14 px-2" href="#dropdowns">Dropdowns</a></li>
                <li><a class="nav-link py-1 fs-14 px-2" href="#forms">Forms</a></li>
                <li><a class="nav-link py-1 fs-14 px-2" href="#listGroup">List group</a></li>
                <li><a class="nav-link py-1 fs-14 px-2" href="#modal">Modal</a></li>
                <li><a class="nav-link py-1 fs-14 px-2" href="#navbar">Navbar</a></li>
                <li><a class="nav-link py-1 fs-14 px-2" href="#navsTabs">Navs &amp; tabs</a></li>
                <li><a class="nav-link py-1 fs-14 px-2" href="#offcanvas">Offcanvas</a></li>
                <li><a class="nav-link py-1 fs-14 px-2" href="#pagination">Pagination</a></li>
                <li><a class="nav-link py-1 fs-14 px-2" href="#placeholders">Placeholders</a></li>
                <li><a class="nav-link py-1 fs-14 px-2" href="#popovers">Popovers</a></li>
                <li><a class="nav-link py-1 fs-14 px-2" href="#progress">Progress</a></li>
                <li><a class="nav-link py-1 fs-14 px-2" href="#spinners">Spinners</a></li>
                <li><a class="nav-link py-1 fs-14 px-2" href="#tables">Tables</a></li>
                <li><a class="nav-link py-1 fs-14 px-2" href="#toasts">Toasts</a></li>
                <li><a class="nav-link py-1 fs-14 px-2" href="#tooltips">Tooltips</a></li>
            </nav>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <!-- Chart JS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.5.0/dist/chart.umd.min.js"></script>
    <script>
        // Total Users Chart
        const TotalUsersChart = new Chart(document.getElementById("TotalUsersChart"), {
            type: "line",
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
                datasets: [
                    {
                        label: "This year",
                        data: [10500, 12000, 8000, 14000, 27000, 19000, 26000],
                        borderColor: getComputedStyle(document.documentElement).getPropertyValue('--bs-primary').trim(),
                        tension: 0.4,
                        fill: false,
                        backgroundColor: getComputedStyle(document.documentElement).getPropertyValue('--bs-primary').trim(),
                    },
                    {
                        label: "Last year",
                        data: [5000, 11700, 9000, 17000, 20000, 14000, 18000],
                        borderColor: getComputedStyle(document.documentElement).getPropertyValue('--bs-secondary').trim(),
                        borderDash: [5, 5],
                        tension: 0.4,
                        fill: false,
                        backgroundColor: getComputedStyle(document.documentElement).getPropertyValue('--bs-secondary').trim(),
                    }
                ]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: true,
                        labels: {
                            usePointStyle: true,
                            pointStyle: 'circle',
                            boxWidth: 5,
                            boxHeight: 5,
                        }
                    },
                    tooltip: {
                        displayColors: false,
                    }
                },
                scales: {
                    x: {
                        ticks: {
                            color: getComputedStyle(document.documentElement).getPropertyValue('--bs-body-color').trim()
                        },
                        border: {
                            display: false
                        },
                        grid: {
                            display: false,
                        }
                    },
                    y: {
                        ticks: {
                            color: getComputedStyle(document.documentElement).getPropertyValue('--bs-body-color').trim()
                        },
                        border: {
                            display: false
                        },
                        grid: {
                            display: false,
                        }
                    }
                }
            }
        });
    </script>
@endpush