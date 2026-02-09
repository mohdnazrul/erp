@extends('layout.app')
@push('style')
    <link rel="stylesheet" href="{{ asset('assets/css/inner-layout.css') }}">
@endpush
@section('content')
    @include('ai-tools.layout.breadcrumbs')
    <!-- Start:: Content Wrapper -->
    <div class="content-wrapper d-flex">
        @include('ai-tools.layout.sidebar')
        <!-- Start:: Content -->
        @yield('page-content')
    </div>
    
    @endsection
@push('scripts')
    
@endpush