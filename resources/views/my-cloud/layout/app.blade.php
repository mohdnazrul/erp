@extends('layout.app')
@push('style')
    <link rel="stylesheet" href="{{ asset('assets/css/inner-layout.css') }}">
@endpush
@section('content')
    @yield('breadcrumbs')
    <!-- Start:: Content Wrapper -->
    <div class="content-wrapper content-wrapper-radius d-flex">
        @include('my-cloud.layout.sidebar')
        <!-- Start:: Content -->
        <div class="content-area py-4">
            <div class="container-fluid px-2 px-md-4">
                @yield('page-content')
                @include('my-cloud.layout.footer')
            </div>
        </div>
    </div>
    @endsection
@push('scripts')
    
@endpush