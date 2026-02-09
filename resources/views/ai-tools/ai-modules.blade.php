@extends('ai-tools.layout.app')
@section('page-content')
<!-- Start:: Content -->
    <div class="content-area">
        <div class="container-fluid p-md-0">
            
            <div class="inner-layout d-flex">
                <div class="body-area d-flex align-items-start flex-column p-md-4 py-3 flex-grow-1 overflow-y-auto">

                    <div class="border-bg mb-5 position-relative p-lg-4 p-2 rounded-4 w-100">
                        <div class="row g-3">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="card p-md-4 p-3 rounded-4">
                                    <h3 class="mb-0">18</h3>
                                    <p class="text-muted">Active Models</p>
                                    <span class="fs-12 text-success">+5 this month</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="card p-md-4 p-3 rounded-4">
                                    <h3 class="mb-0">13</h3>
                                    <p class="text-muted">Running</p>
                                    <span class="fs-12 text-success">+2 today</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="card p-md-4 p-3 rounded-4">
                                    <h3 class="mb-0">3</h3>
                                    <p class="text-muted">Paused</p>
                                    <span class="fs-12 text-warning">No change</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="card p-md-4 p-3 rounded-4">
                                    <h3 class="mb-0">1</h3>
                                    <p class="text-muted">Issues</p>
                                    <span class="fs-12 text-danger">+1 today</span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex top-100 position-absolute" style="height: 48px; left: 50px;">
                            <div class="vr border-bg opacity-100"></div>
                            <div class="vr border-bg opacity-100 ms-1"></div>
                        </div>
                    </div>

                    <div class="row g-3">
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="card rounded-4 overflow-hidden p-lg-4 p-3">
                                <div class="d-flex align-items-start flex-column mb-3">
                                    <div class="align-items-center d-flex gap-3 mb-4 w-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M15.5 13a3.5 3.5 0 0 0 -3.5 3.5v1a3.5 3.5 0 0 0 7 0v-1.8" />
                                            <path d="M8.5 13a3.5 3.5 0 0 1 3.5 3.5v1a3.5 3.5 0 0 1 -7 0v-1.8" />
                                            <path d="M17.5 16a3.5 3.5 0 0 0 0 -7h-.5" />
                                            <path d="M19 9.3v-2.8a3.5 3.5 0 0 0 -7 0" />
                                            <path d="M6.5 16a3.5 3.5 0 0 1 0 -7h.5" />
                                            <path d="M5 9.3v-2.8a3.5 3.5 0 0 1 7 0v10" />
                                        </svg>
                                        <h4 class="card-title mb-0">GPT-4 Turbo</h4>
                                    </div>
                                    <div class="align-items-center d-flex gap-4 my-2">
                                        <div>
                                            <span class="fs-12">Usage</span>
                                            <h5 class="mb-0">1,984 calls</h5>
                                        </div>
                                        <div class="vr"></div>
                                        <div>
                                            <span class="fs-12">Avg Response</span>
                                            <h5 class="mb-0">1.5s</h5>
                                        </div>
                                    </div>
                                    <div class="dropdown end-0 me-3 mt-3 position-absolute top-0">
                                        <a class="dropdown" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" aria-selected="false" tabindex="-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                <path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                            </svg>
                                        </a>
                                        <ul class="dropdown-menu shadow border-0 li_animate rounded-4">
                                            <li><a class="dropdown-item" href="#">Details</a></li>
                                            <li><a class="dropdown-item" href="#">My Analytics</a></li>
                                            <li><a class="dropdown-item" href="#">Clone</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <p>High-performance language AI for generating and analyzing complex content.</p>
                                    <ul class="align-items-center d-flex flex-wrap gap-2 list-unstyled li_animate">
                                        <li><a href="#" class="btn btn-light fs-14 rounded-pill">Analysis</a></li>
                                        <li><a href="#" class="btn btn-light fs-14 rounded-pill">Text Generation</a></li>
                                    </ul>
                                    <button class="btn rounded-pill px-4 btn-primary">Configure</button>
                                    <button class="btn rounded-pill px-4 btn-outline-success">Test</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="card rounded-4 overflow-hidden p-lg-4 p-3">
                                <div class="d-flex align-items-start flex-column mb-3">
                                    <div class="align-items-center d-flex gap-3 mb-4 w-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M15 8h.01" />
                                            <path d="M10 21h-4a3 3 0 0 1 -3 -3v-12a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v5" />
                                            <path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l1 1" />
                                            <path d="M14 21v-4a2 2 0 1 1 4 0v4" />
                                            <path d="M14 19h4" />
                                            <path d="M21 15v6" />
                                        </svg>
                                        <h4 class="card-title mb-0">DALL-E 3</h4>
                                    </div>
                                    <div class="align-items-center d-flex gap-4 my-2">
                                        <div>
                                            <span class="fs-12">Usage</span>
                                            <h5 class="mb-0">1,984 calls</h5>
                                        </div>
                                        <div class="vr"></div>
                                        <div>
                                            <span class="fs-12">Avg Response</span>
                                            <h5 class="mb-0">1.5s</h5>
                                        </div>
                                    </div>
                                    <div class="dropdown end-0 me-3 mt-3 position-absolute top-0">
                                        <a class="dropdown" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" aria-selected="false" tabindex="-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                <path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                            </svg>
                                        </a>
                                        <ul class="dropdown-menu shadow border-0 li_animate rounded-4">
                                            <li><a class="dropdown-item" href="#">Details</a></li>
                                            <li><a class="dropdown-item" href="#">My Analytics</a></li>
                                            <li><a class="dropdown-item" href="#">Clone</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <p>Cutting-edge image generation model delivering exceptional visual quality.</p>
                                    <ul class="align-items-center d-flex flex-wrap gap-2 list-unstyled li_animate">
                                        <li><a href="#" class="btn btn-light fs-14 rounded-pill">Image Generation</a></li>
                                        <li><a href="#" class="btn btn-light fs-14 rounded-pill">Creative</a></li>
                                    </ul>
                                    <button class="btn rounded-pill px-4 btn-primary">Configure</button>
                                    <button class="btn rounded-pill px-4 btn-outline-success">Test</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="card rounded-4 overflow-hidden p-lg-4 p-3">
                                <div class="d-flex align-items-start flex-column mb-3">
                                    <div class="align-items-center d-flex gap-3 mb-4 w-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M7 8l-4 4l4 4" />
                                            <path d="M17 8l4 4l-4 4" />
                                            <path d="M14 4l-4 16" />
                                        </svg>
                                        <h4 class="card-title mb-0">CodePilot</h4>
                                    </div>
                                    <div class="align-items-center d-flex gap-4 my-2">
                                        <div>
                                            <span class="fs-12">Usage</span>
                                            <h5 class="mb-0">184 calls</h5>
                                        </div>
                                        <div class="vr"></div>
                                        <div>
                                            <span class="fs-12">Avg Response</span>
                                            <h5 class="mb-0">1.9s</h5>
                                        </div>
                                    </div>
                                    <div class="dropdown end-0 me-3 mt-3 position-absolute top-0">
                                        <a class="dropdown" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" aria-selected="false" tabindex="-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                <path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                            </svg>
                                        </a>
                                        <ul class="dropdown-menu shadow border-0 li_animate rounded-4">
                                            <li><a class="dropdown-item" href="#">Details</a></li>
                                            <li><a class="dropdown-item" href="#">My Analytics</a></li>
                                            <li><a class="dropdown-item" href="#">Clone</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <p>Intelligent coding assistant for automated code writing and error fixing.</p>
                                    <ul class="align-items-center d-flex flex-wrap gap-2 list-unstyled li_animate">
                                        <li><a href="#" class="btn btn-light fs-14 rounded-pill">Code Generation</a></li>
                                        <li><a href="#" class="btn btn-light fs-14 rounded-pill">Debugging</a></li>
                                    </ul>
                                    <button class="btn rounded-pill px-4 btn-primary">Configure</button>
                                    <button class="btn rounded-pill px-4 btn-outline-success">Test</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="card rounded-4 overflow-hidden p-lg-4 p-3">
                                <div class="d-flex align-items-start flex-column mb-3">
                                    <div class="align-items-center d-flex gap-3 mb-4 w-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M9 2m0 3a3 3 0 0 1 3 -3h0a3 3 0 0 1 3 3v5a3 3 0 0 1 -3 3h0a3 3 0 0 1 -3 -3z" />
                                            <path d="M5 10a7 7 0 0 0 14 0" />
                                            <path d="M8 21l8 0" />
                                            <path d="M12 17l0 4" />
                                        </svg>
                                        <h4 class="card-title mb-0">Audio Transcriber</h4>
                                    </div>
                                    <div class="align-items-center d-flex gap-4 my-2">
                                        <div>
                                            <span class="fs-12">Usage</span>
                                            <h5 class="mb-0">84 calls</h5>
                                        </div>
                                        <div class="vr"></div>
                                        <div>
                                            <span class="fs-12">Avg Response</span>
                                            <h5 class="mb-0">2.1s</h5>
                                        </div>
                                    </div>
                                    <div class="dropdown end-0 me-3 mt-3 position-absolute top-0">
                                        <a class="dropdown" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" aria-selected="false" tabindex="-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                <path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                            </svg>
                                        </a>
                                        <ul class="dropdown-menu shadow border-0 li_animate rounded-4">
                                            <li><a class="dropdown-item" href="#">Details</a></li>
                                            <li><a class="dropdown-item" href="#">My Analytics</a></li>
                                            <li><a class="dropdown-item" href="#">Clone</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <p>Multi-language voice-to-text solution with exceptional precision.</p>
                                    <ul class="align-items-center d-flex flex-wrap gap-2 list-unstyled li_animate">
                                        <li><a href="#" class="btn btn-light fs-14 rounded-pill">Audio Processing</a></li>
                                        <li><a href="#" class="btn btn-light fs-14 rounded-pill">Transcription</a></li>
                                    </ul>
                                    <button class="btn rounded-pill px-4 btn-primary">Configure</button>
                                    <button class="btn rounded-pill px-4 btn-outline-success">Test</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="card rounded-4 overflow-hidden p-lg-4 p-3">
                                <div class="d-flex align-items-start flex-column mb-3">
                                    <div class="align-items-center d-flex gap-3 mb-4 w-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M11.482 20.924a1.666 1.666 0 0 1 -1.157 -1.241a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.312 .318 1.644 1.794 .995 2.697" />
                                            <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                            <path d="M20 21l2 -2l-2 -2" />
                                            <path d="M17 17l-2 2l2 2" />
                                        </svg>
                                        <h4 class="card-title mb-0">Custom Classifier</h4>
                                    </div>
                                    <div class="align-items-center d-flex gap-4 my-2">
                                        <div>
                                            <span class="fs-12">Progress</span>
                                            <h5 class="mb-0">79%</h5>
                                        </div>
                                        <div class="vr"></div>
                                        <div>
                                            <span class="fs-12">ETA</span>
                                            <h5 class="mb-0">1h 48m</h5>
                                        </div>
                                    </div>
                                    <div class="dropdown end-0 me-3 mt-3 position-absolute top-0">
                                        <a class="dropdown" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" aria-selected="false" tabindex="-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                <path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                            </svg>
                                        </a>
                                        <ul class="dropdown-menu shadow border-0 li_animate rounded-4">
                                            <li><a class="dropdown-item" href="#">Details</a></li>
                                            <li><a class="dropdown-item" href="#">My Analytics</a></li>
                                            <li><a class="dropdown-item" href="#">Clone</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <p>Cutting-edge image generation model delivering exceptional visual quality.</p>
                                    <ul class="align-items-center d-flex flex-wrap gap-2 list-unstyled li_animate">
                                        <li><a href="#" class="btn btn-light fs-14 rounded-pill">Custom</a></li>
                                        <li><a href="#" class="btn btn-light fs-14 rounded-pill">Classification</a></li>
                                    </ul>
                                    <button class="btn rounded-pill px-4 btn-primary" disabled>Configure</button>
                                    <button class="btn rounded-pill px-4 btn-outline-success" disabled>Training</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="card rounded-4 border-danger overflow-hidden p-lg-4 p-3">
                                <div class="d-flex align-items-start flex-column mb-3">
                                    <div class="align-items-center d-flex gap-3 mb-4 w-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M12 9v4" />
                                            <path d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z" />
                                            <path d="M12 16h.01" />
                                        </svg>
                                        <h4 class="card-title mb-0">04-Mini</h4>
                                    </div>
                                    <div class="align-items-center d-flex gap-4 my-2">
                                        <div>
                                            <span class="fs-12">Last Used</span>
                                            <h5 class="mb-0">4 days ago</h5>
                                        </div>
                                        <div class="vr"></div>
                                        <div>
                                            <span class="fs-12">Error</span>
                                            <h5 class="mb-0 text-danger">API Timeout</h5>
                                        </div>
                                    </div>
                                    <div class="dropdown end-0 me-3 mt-3 position-absolute top-0">
                                        <a class="dropdown" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" aria-selected="false" tabindex="-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                <path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                            </svg>
                                        </a>
                                        <ul class="dropdown-menu shadow border-0 li_animate rounded-4">
                                            <li><a class="dropdown-item" href="#">Details</a></li>
                                            <li><a class="dropdown-item" href="#">My Analytics</a></li>
                                            <li><a class="dropdown-item" href="#">Clone</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <p>Cutting-edge image generation model delivering exceptional visual quality.</p>
                                    <ul class="align-items-center d-flex flex-wrap gap-2 list-unstyled li_animate">
                                        <li><a href="#" class="btn btn-light fs-14 rounded-pill">Custom</a></li>
                                        <li><a href="#" class="btn btn-light fs-14 rounded-pill">Classification</a></li>
                                    </ul>
                                    <button class="btn rounded-pill px-4 btn-warning">Restart</button>
                                    <button class="btn rounded-pill px-4 btn-outline-info" disabled>Logs</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- End:: Content -->
@endsection
@push('scripts')

@endpush