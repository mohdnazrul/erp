<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? ""}}</title>
    <meta name="description" content="Thunder AI is a responsive Bootstrap admin dashboard template with AI tools, dark mode, prebuilt themes, and powerful UI kit for modern web apps.">
    <meta name="keywords" content="Thunder AI dashboard, AI admin template, Bootstrap admin template, responsive admin dashboard, HTML admin UI kit, dark mode dashboard, AI tools dashboard, admin dashboard with themes, modern admin panel, Bootstrap 5 admin UI, CSS variables dashboard, light dark admin template">
    <meta name="author" content="ThemeMakker - Expert Admin Dashboard & UI Kit Developers">
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

</head>
<body data-thunderal="theme-indigo" class="">
        
    @yield('content')
    @include('auth.layout.theme-setting')
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    <!--  -->
    <!-- <script src="assets/js/common.js"></script> -->
</body>
</html>
