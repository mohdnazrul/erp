@extends('layout.app')
@section('content')
    @include('documentation.layout.breadcrumbs')
    <!-- Start:: Content Wrapper -->
    <div class="content-wrapper content-wrapper-radius d-flex">
         @include('documentation.layout.sidebar')
        <!-- Start:: Content -->
        <div class="content-area py-4">
            <div class="container-fluid px-2 px-md-4">
                @yield('page-content')
                @include('documentation.layout.footer')
            </div>
        </div>
    </div>
@endsection
