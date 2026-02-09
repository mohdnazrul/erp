@extends('ai-tools.layout.app')
@section('page-content')
   <!-- Start:: Content -->
    <div class="content-area">
        <div class="container-fluid p-md-0">
            
            <div class="inner-layout d-flex">
                <div class="body-area flex-grow-1 p-md-4 p-2 overflow-y-auto">
                    <div class="d-flex flex-column justify-content-center align-items-center text-center">
                        <h3 class="display-4 fw-bold mt-lg-5 mt-4">AI.TLD Finder</h3>
                        <p class="lead">Find and Generate domains using Artificial Intelligence.</p>
                        <div class="align-items-center border chat-input-wrapper d-flex gap-3 p-lg-3 p-2 rounded-4 my-4 w-75">
                            <input class="form-control rounded-3 border-0" id="message" placeholder="Type your message here...">
                            <div class="align-items-center chat-input-actions d-flex gap-1">
                                <button class="btn btn-primary ms-2 rounded-pill px-4 py-2">Generate</button>
                            </div>
                        </div>
                        <ul class="align-items-center d-flex demo-prompts flex-wrap gap-2 justify-content-center w-75 list-unstyled li_animate">
                            <li><a href="#" class="btn btn-light fs-14 rounded-pill">Food Blog</a></li>
                            <li><a href="#" class="btn btn-light fs-14 rounded-pill">Fitness Website</a></li>
                            <li><a href="#" class="btn btn-light fs-14 rounded-pill">Tech Review Site</a></li>
                            <li><a href="#" class="btn btn-light fs-14 rounded-pill">Personal Portfolio</a></li>
                            <li><a href="#" class="btn btn-light fs-14 rounded-pill">Fashion Blog</a></li>
                            <li><a href="#" class="btn btn-light fs-14 rounded-pill">Educational Platform</a></li>
                            <li><a href="#" class="btn btn-light fs-14 rounded-pill">E-commerce Store</a></li>
                            <li><a href="#" class="btn btn-light fs-14 rounded-pill">Photography Website</a></li>
                            <li><a href="#" class="btn btn-light fs-14 rounded-pill">Music Blog</a></li>
                            <li><a href="#" class="btn btn-light fs-14 rounded-pill">Health and Wellness Blog</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End:: Content -->
@endsection
@push('scripts')
    <script>
        $(document).ready(function () {
            $('.btn-toggle-innersidebar').on('click', function () {
                $('body').toggleClass('show-innersidebar');
            });
        });
    </script>
@endpush