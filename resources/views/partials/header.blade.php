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
                Welcome {{ Auth::user()->name }}!
            </a>
        </div>
        <!-- END Left Section -->

        <!-- Right Section -->
        <div class="space-x-1">
            <!-- Change Password Button -->
            @if (Auth::user()->roles->contains('name', 'admin'))
                <a href="/change-password" class="btn btn-alt-secondary">
                    <i class="fas fa-fw fa-key"></i>
                </a>
            @endif

            <!-- Logout Button -->
            <button type="button" class="btn btn-alt-secondary" id="logout-button">
                <i class="fas fa-fw fa-sign-out-alt"></i>
            </button>
        </div>
        <!-- END Right Section -->
    </div>
    <!-- END Header Content -->
</header>
