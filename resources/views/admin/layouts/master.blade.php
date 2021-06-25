<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <title>@yield('title')</title>
    @include('admin.layouts.top')
    @stack('plugin-styles')
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    @include('admin.layouts.header')
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    @include('admin.layouts.menu')
</div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        @yield('content')
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    @include('admin.layouts.footer')
    <!-- END: Footer-->

    @include('admin.layouts.script')

    @stack('plugin-scripts')

</body>
<!-- END: Body-->

</html>
