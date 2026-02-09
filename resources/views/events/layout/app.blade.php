@extends('layout.app')
@section('content')
    @yield('breadcrumbs')
    <!-- Start:: Content Wrapper -->
    <div class="content-wrapper content-wrapper-radius d-flex">
         @include('events.layout.sidebar')
        <!-- Start:: Content -->
        <div class="content-area py-4">
            <div class="container-fluid px-2 px-md-4">
                @yield('page-content')
                @include('events.layout.footer')
            </div>
        </div>
    </div>
@endsection