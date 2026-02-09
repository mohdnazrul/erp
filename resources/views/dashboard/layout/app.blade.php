@extends('layout.app')
@section('content')
    @yield('breadcrumbs')
    <!-- Start:: Content Wrapper -->
    <div class="content-wrapper content-wrapper-radius d-flex">
        @include('dashboard.layout.sidebar')
        <!-- Start:: Content -->
        <div class="content-area py-4">
            <div class="container-fluid px-2 px-md-4">
                @yield('page-content')
                @include('dashboard.layout.footer')
            </div>
        </div>
    </div>
    
    @endsection
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.22.2/dist/sweetalert2.all.min.js"></script> 
    
@endpush