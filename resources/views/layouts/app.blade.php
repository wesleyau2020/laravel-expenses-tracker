<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>

    <!-- CSS -->
    <link href="{{ asset('dashmix/css/dashmix.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashmix/css/dashmix.min.css') }}" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet" >
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.0/dist/sweetalert2.min.css" rel="stylesheet">

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="{{ asset('dashmix/js/dashmix.app.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/echarts@5.4.2/dist/echarts.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/moment@2.29.1/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.0/dist/sweetalert2.min.js"></script>

    @stack('styles')
</head>

<body>
    <div id="page-container"
        class="sidebar sidebar-mini enable-page-overlay side-scroll page-header-fixed main-content side-trans-enabled">
        {{-- class="sidebar sidebar-mini enable-page-overlay side-scroll page-header-fixed main-content side-trans-enabled sidebar-o"> --}}

        <!-- Include Sidebar -->
        @include('partials.sidebar')

        <!-- Include Header -->
        @include('partials.header')

        <!-- Main Container -->
        <main id="main-container" style="">
            <div class="content-full">
                @yield('content')
            </div>
        </main>
        <!-- END Main Container -->

        <!-- Include Footer -->
        @include('partials.footer')

    </div>
    <!-- END Page Container -->

    <style>
        /*  */
    </style>

    <script>
        // 
    </script>
</body>

</html>
