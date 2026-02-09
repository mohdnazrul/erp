@extends('layout.app')
@push('style')
    <link rel="stylesheet" href="{{ asset('assets/css/inner-layout.css') }}">
@endpush
@section('content')
    @yield('breadcrumbs')
    <!-- Start:: Content Wrapper -->
    <div class="content-wrapper content-wrapper-radius d-flex">
        @include('email.layout.sidebar')
        <!-- Start:: Content -->
        @yield('page-content')
    </div>
    
    @endsection
@push('scripts')
    
@endpush