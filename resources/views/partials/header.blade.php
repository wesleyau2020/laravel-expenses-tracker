<!-- resources/views/partials/header.blade.php -->
<header id="page-header">
    <!-- Header Content -->
    <div class="content-header" style="">
        <!-- Left Section -->
        <div class="space-x-1">
            <!-- Toggle Sidebar -->
            <button type="button" id="menu-toggle" class="btn btn-alt-secondary" data-toggle="layout"
                data-action="sidebar_toggle">
                <i class="fa fa-fw fa-bars"></i>
            </button>
            <!-- END Toggle Sidebar -->

            <a class="fw-semibold text-default tracking-wide ms-4 fs-lg" href="/">
                {{ config('app.name', 'Facility Management System') }}
            </a>
        </div>
        <!-- END Left Section -->

        <!-- Right Section -->
        <div class="space-x-1">
            <!-- User Dropdown -->
            <div class="dropdown d-inline-block">
                <button type="button" class="btn btn-white" id="page-header-user-dropdown" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-fw fa-user d-sm-none"></i>
                    <i class="fa fa-fw fa-angle-down opacity-50 ms-1 d-none d-sm-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end p-0" aria-labelledby="page-header-user-dropdown">
                    <div class="bg-primary-dark rounded-top fw-semibold text-white text-center p-3">
                        User Options
                    </div>
                    <div class="p-2">
                        <a class="dropdown-item" href="/change_password">
                            <i class="fa fa-fw fa-key me-1"></i> Change Password
                        </a>
                        <div role="separator" class="dropdown-divider"></div>
                    </div>
                </div>
            </div>
            <!-- END User Dropdown -->

            <!-- Notifications Dropdown -->
            <div class="dropdown d-inline-block">
                <button type="button" class="btn btn-alt-secondary" id="page-header-notifications-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-fw fa-bell"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-notifications-dropdown">
                    <div class="bg-primary-dark rounded-top fw-semibold text-white text-center p-3">
                        Notifications
                    </div>
                    <ul class="nav-items my-2">
                        {{--  --}}
                    </ul>
                    <div class="p-2 border-top">
                        <a class="btn btn-alt-primary w-100 text-center" href="javascript:void(0)">
                            <i class="fa fa-fw fa-eye opacity-50 me-1"></i> View All
                        </a>
                    </div>
                </div>
            </div>
            <!-- END Notifications Dropdown -->

            <!-- Toggle Side Overlay -->
            <button type="button" class="btn btn-alt-secondary" data-toggle="layout" data-action="side_overlay_toggle">
                <i class="far fa-fw fa-list-alt"></i>
            </button>
            <!-- END Toggle Side Overlay -->
        </div>
        <!-- END Right Section -->
    </div>
    <!-- END Header Content -->

    <!-- Header Search -->
    <div id="page-header-search" class="overlay-header bg-header-dark">
        <div class="content-header">
            <form class="w-100" action="/dashboard" method="POST">
                @csrf
                <div class="input-group">
                    <button type="button" class="btn btn-alt-primary" data-toggle="layout"
                        data-action="header_search_off">
                        <i class="fa fa-fw fa-times-circle"></i>
                    </button>
                    <input type="text" class="form-control border-0" placeholder="Search or hit ESC.."
                        id="page-header-search-input" name="page-header-search-input">
                </div>
            </form>
        </div>
    </div>
    <!-- END Header Search -->

    <!-- Header Loader -->
    <div id="page-header-loader" class="overlay-header bg-header-dark">
        <div class="bg-white-10">
            <div class="content-header">
                <div class="w-100 text-center">
                    <i class="fa fa-fw fa-sun fa-spin text-white"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- END Header Loader -->
</header>
