<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $headTitle ?? ($title ?? '') }}</title>

    <meta name="description"
          content="Thunder AI is a responsive Bootstrap admin dashboard template with AI tools, dark mode, prebuilt themes, and powerful UI kit for modern web apps.">
    <meta name="keywords"
          content="Thunder AI dashboard, AI admin template, Bootstrap admin template, responsive admin dashboard, HTML admin UI kit, dark mode dashboard, AI tools dashboard, admin dashboard with themes, modern admin panel, Bootstrap 5 admin UI, CSS variables dashboard, light dark admin template">
    <meta name="author" content="ThemeMakker - Expert Admin Dashboard & UI Kit Developers">
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">

    {{-- Vite: your reusable JS (header theme etc) --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Bootstrap CSS (CDN) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">

    <!-- Datatables -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/datatables@1.10.18/media/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables/dataTables.responsive.css') }}">

    <!-- SweetAlert -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.22.2/dist/sweetalert2.min.css">

    <!-- dropify -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/css/dropify.min.css">

    <!-- inputmask -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/inputmask@5.0.9/dist/colormask.min.css">

    <!-- Owl carousel -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css">

    <!-- jKanban -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jkanban@1.3.1/dist/jkanban.min.css">

    <!-- Tags input -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-tagsinput@0.7.1/dist/bootstrap-tagsinput.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/charts.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/inner-layout.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/datatable.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/project.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/timeline.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dropify.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jkanban.css') }}">

    @stack('style')
</head>

<body data-thunderal="theme-indigo" class="{{ getBodyClass(request()->path()) }}">

    @include('layout.header')

    @yield('content')

    @include('layout.menu-grid')

    <!-- Vendor JS (CDN / legacy) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@5.2.0/dist/apexcharts.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.22.2/dist/sweetalert2.all.min.js"></script>

    <!-- Datatables -->
    <script src="https://cdn.jsdelivr.net/npm/datatables@1.10.18/media/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.responsive.js') }}"></script>

    <!-- Your existing theme JS -->
    <script src="{{ asset('assets/js/common.js') }}"></script>
    <script src="{{ asset('assets/js/project.js') }}"></script>

    {{-- Page-specific scripts --}}
    @stack('scripts')
</body>
</html>
