<!DOCTYPE html>
<html lang="{{Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale()}}">
<head>
    @include('layouts.admin._head')
</head>
<body class="app sidebar-mini">
<!-- Navbar-->
@include('layouts.admin._header')
<!-- Sidebar menu-->
@include('layouts.admin._sidebar')
<main class="app-content">
@yield('content')
</main>
<!-- Essential javascripts for application to work-->
@include('layouts.admin._footer-scripts')
@stack('scripts')
</body>
@include('admin.partials._session')

</html>
