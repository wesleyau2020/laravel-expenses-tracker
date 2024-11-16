<!-- resources/views/partials/sidebar.blade.php -->
<nav id="sidebar" aria-label="Main Navigation" class="">
    <!-- Side Header -->
    <div class="bg-header-dark">
        <div class="content-header bg-white-5">
            <!-- Logo -->
            <a class="fw-semibold text-white tracking-wide" href="/">
                <span class="smini-visible">
                </span>
                <span class="smini-hidden">
                    Laravel
                </span>
            </a>
            <!-- END Logo -->

            <!-- Options -->
            <div class="">
                <!-- Toggle Sidebar Style -->
                <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle"
                    data-target="#sidebar-style-toggler" data-class="fa-toggle-off fa-toggle-on"
                    onclick="Dashmix.layout('sidebar_style_toggle'); Dashmix.layout('header_style_toggle');">
                    <i class="fa fa-toggle-off" id="sidebar-style-toggler"></i>
                </button>
                <!-- END Toggle Sidebar Style -->

                <!-- Dark Mode -->
                <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle"
                    data-target="#dark-mode-toggler" data-class="far fa" onclick="Dashmix.layout('dark_mode_toggle');">
                    <i class="far fa-moon" id="dark-mode-toggler"></i>
                </button>
                <!-- END Dark Mode -->

                <!-- Close Sidebar, Visible only on mobile screens -->
                <button type="button" id="btn-close-sidebar" class="btn btn-sm btn-alt-secondary d-lg-none d-sm-none"
                    data-toggle="layout" data-action="sidebar_close">
                    <i class="fa fa-times-circle"></i>
                </button>
                <!-- END Close Sidebar -->
            </div>
            <!-- END Options -->
        </div>
    </div>
    <!-- END Side Header -->

    <!-- Sidebar Scrolling -->
    <div class="js-sidebar-scroll">
        <!-- Side Navigation -->
        <div class="content-side content-side-full pt-1">
            <ul class="nav-main">
                <div class="">
                    {{-- <li class="nav-main-heading">Dashboard</li> --}}
                    <li class="nav-main-item">
                        <a class="nav-main-link" aria-haspopup="true" aria-expanded="true" href="/dashboard">
                            <i class="nav-main-link-icon fa fa-home"></i>
                            <span class="nav-main-link-name">Dashboard</span>
                        </a>
                        <a class="nav-main-link" aria-haspopup="true" aria-expanded="true" href="/students">
                            <i class="nav-main-link-icon fa fa-graduation-cap"></i>
                            <span class="nav-main-link-name">Students</span>
                        </a>
                    </li>
                </div>
            </ul>
        </div>
        <!-- END Side Navigation -->
    </div>
    <!-- END Sidebar Scrolling -->
</nav>
