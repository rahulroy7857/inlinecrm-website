<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.layouts.header')
    @stack('custom-style')
    @include('admin.layouts.partials.site-styles')
    <style>
        .action-button {
            font-size: 10px;
            padding: 4px;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
@include('admin.layouts.partials.site-menubar')
<div class="content-wrapper">

@include('admin.layouts.partials.site-navbar')
@yield('content')

<!-- Modals -->
@stack('modals')
{{-- End Modal--}}

<!-- Footer -->
@include('admin.layouts.footer')
<!-- End Footer -->
</div>
</div>
@include('admin.layouts.partials.site-scripts')

@stack('scripts')
</body>
</html>