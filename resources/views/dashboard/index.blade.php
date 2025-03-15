@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="content">
        <div class="row items-push">
            <div class="col-sm-6 col-xl-3">
                <div class="block block-rounded text-center d-flex flex-column h-100 mb-0">
                    <div class="block-content block-content-full flex-grow-1">
                        <div class="item rounded-3 bg-body mx-auto my-3">
                            <i class="fa fa-users fa-lg text-primary"></i>
                        </div>
                        <div class="fs-1 fw-bold">2,388</div>
                        <div class="text-muted mb-3">Registered Users</div>
                        <div class="d-inline-block px-3 py-1 rounded-pill fs-sm fw-semibold text-success bg-success-light">
                            <i class="fa fa-caret-up me-1"></i>
                            19.2%
                        </div>
                    </div>
                    <div class="block-content block-content-full block-content-sm bg-body-light fs-sm">
                        <a class="fw-medium" href="javascript:void(0)">
                            View all users
                            <i class="fa fa-arrow-right ms-1 opacity-25"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="block block-rounded text-center d-flex flex-column h-100 mb-0">
                    <div class="block-content block-content-full flex-grow-1">
                        <div class="item rounded-3 bg-body mx-auto my-3">
                            <i class="fa fa-level-up-alt fa-lg text-primary"></i>
                        </div>
                        <div class="fs-1 fw-bold">14.6%</div>
                        <div class="text-muted mb-3">Bounce Rate</div>
                        <div class="d-inline-block px-3 py-1 rounded-pill fs-sm fw-semibold text-danger bg-danger-light">
                            <i class="fa fa-caret-down me-1"></i>
                            2.3%
                        </div>
                    </div>
                    <div class="block-content block-content-full block-content-sm bg-body-light fs-sm">
                        <a class="fw-medium" href="javascript:void(0)">
                            Explore analytics
                            <i class="fa fa-arrow-right ms-1 opacity-25"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="block block-rounded text-center d-flex flex-column h-100 mb-0">
                    <div class="block-content block-content-full flex-grow-1">
                        <div class="item rounded-3 bg-body mx-auto my-3">
                            <i class="fa fa-chart-line fa-lg text-primary"></i>
                        </div>
                        <div class="fs-1 fw-bold">386</div>
                        <div class="text-muted mb-3">Confirmed Sales</div>
                        <div class="d-inline-block px-3 py-1 rounded-pill fs-sm fw-semibold text-success bg-success-light">
                            <i class="fa fa-caret-up me-1"></i>
                            7.9%
                        </div>
                    </div>
                    <div class="block-content block-content-full block-content-sm bg-body-light fs-sm">
                        <a class="fw-medium" href="javascript:void(0)">
                            View all sales
                            <i class="fa fa-arrow-right ms-1 opacity-25"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="block block-rounded text-center d-flex flex-column h-100 mb-0">
                    <div class="block-content block-content-full">
                        <div class="item rounded-3 bg-body mx-auto my-3">
                            <i class="fa fa-wallet fa-lg text-primary"></i>
                        </div>
                        <div class="fs-1 fw-bold">$4,920</div>
                        <div class="text-muted mb-3">Total Earnings</div>
                        <div class="d-inline-block px-3 py-1 rounded-pill fs-sm fw-semibold text-danger bg-danger-light">
                            <i class="fa fa-caret-down me-1"></i>
                            0.3%
                        </div>
                    </div>
                    <div class="block-content block-content-full block-content-sm bg-body-light fs-sm">
                        <a class="fw-medium" href="javascript:void(0)">
                            Withdrawal options
                            <i class="fa fa-arrow-right ms-1 opacity-25"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    Store Growth
                </h3>
                <div class="block-options">
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle"
                        data-action-mode="demo">
                        <i class="si si-refresh"></i>
                    </button>
                    <button type="button" class="btn-block-option">
                        <i class="si si-wrench"></i>
                    </button>
                </div>
            </div>
            <div class="block-content block-content-full">
                <div class="row">
                    <div class="col-md-5 col-xl-4 d-md-flex align-items-md-center">
                        <div class="p-md-2 p-lg-3">
                            <div class="py-3">
                                <div class="fs-1 fw-bold">1,430</div>
                                <div class="fw-semibold">Your new website Customers</div>
                                <div class="py-3 d-flex align-items-center">
                                    <div class="bg-success-light p-2 rounded me-3">
                                        <i class="fa fa-fw fa-arrow-up text-success"></i>
                                    </div>
                                    <p class="mb-0">
                                        You have a <span class="fw-semibold text-success">12% customer growth</span> in the
                                        last 30 days. This is amazing, keep it up!
                                    </p>
                                </div>
                            </div>
                            <div class="py-3">
                                <div class="fs-1 fw-bold">65</div>
                                <div class="fw-semibold">New products added</div>
                                <div class="py-3 d-flex align-items-center">
                                    <div class="bg-success-light p-2 rounded me-3">
                                        <i class="fa fa-fw fa-arrow-up text-success"></i>
                                    </div>
                                    <p class="mb-0">
                                        You’ve managed to add <span class="fw-semibold text-success">12% more
                                            products</span> in the last 30 days. Store’s portfolio is growing!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-xl-8 d-md-flex align-items-md-center">
                        <div class="p-md-2 p-lg-3 w-100" style="height: 450px;">
                            <canvas id="js-chartjs-analytics-bars" width="908" height="418"
                                style="display: block; box-sizing: border-box; height: 418px; width: 908px;"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="block block-rounded block-mode-loading-refresh">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">
                            Latest Orders
                        </h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                            <div class="dropdown">
                                <button type="button" class="btn-block-option" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="si si-chemistry"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="far fa-fw fa-dot-circle opacity-50 me-1"></i> Pending
                                    </a>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="far fa-fw fa-times-circle opacity-50 me-1"></i> Canceled
                                    </a>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="far fa-fw fa-check-circle opacity-50 me-1"></i> Completed
                                    </a>
                                    <div role="separator" class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-eye opacity-50 me-1"></i> View All
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-content">
                        <table class="table table-striped table-hover table-borderless table-vcenter fs-sm">
                            <thead>
                                <tr class="text-uppercase">
                                    <th>Product</th>
                                    <th class="d-none d-xl-table-cell">Date</th>
                                    <th>Status</th>
                                    <th class="d-none d-sm-table-cell text-end" style="width: 120px;">Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <span class="fw-semibold">iPhone 11 Pro</span>
                                    </td>
                                    <td class="d-none d-xl-table-cell">
                                        <span class="fs-sm text-muted">today</span>
                                    </td>
                                    <td>
                                        <span class="fw-semibold text-warning">Pending..</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-end fw-medium">
                                        $1199,99
                                    </td>
                                    <td class="text-center text-nowrap fw-medium">
                                        <a href="javascript:void(0)">
                                            View
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="fw-semibold">MacBook Pro 15"</span>
                                    </td>
                                    <td class="d-none d-xl-table-cell">
                                        <span class="fs-sm text-muted">today</span>
                                    </td>
                                    <td>
                                        <span class="fw-semibold text-warning">Pending..</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-end fw-medium">
                                        $2.299,00
                                    </td>
                                    <td class="text-center text-nowrap fw-medium">
                                        <a href="javascript:void(0)">
                                            View
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="fw-semibold">Nvidia GTX 2080 Ti</span>
                                    </td>
                                    <td class="d-none d-xl-table-cell">
                                        <span class="fs-sm text-muted">today</span>
                                    </td>
                                    <td>
                                        <span class="fw-semibold text-warning">Pending..</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-end fw-medium">
                                        $1200,00
                                    </td>
                                    <td class="text-center text-nowrap fw-medium">
                                        <a href="javascript:void(0)">
                                            View
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="fw-semibold">Playstation 4 Pro</span>
                                    </td>
                                    <td class="d-none d-xl-table-cell">
                                        <span class="fs-sm text-muted">today</span>
                                    </td>
                                    <td>
                                        <span class="fw-semibold text-danger">Canceled</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-end fw-medium">
                                        $399,00
                                    </td>
                                    <td class="text-center text-nowrap fw-medium">
                                        <a href="javascript:void(0)">
                                            View
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="fw-semibold">Nintendo Switch</span>
                                    </td>
                                    <td class="d-none d-xl-table-cell">
                                        <span class="fs-sm text-muted">yesterday</span>
                                    </td>
                                    <td>
                                        <span class="fw-semibold text-success">Completed</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-end fw-medium">
                                        $349,00
                                    </td>
                                    <td class="text-center text-nowrap fw-medium">
                                        <a href="javascript:void(0)">
                                            View
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="fw-semibold">iPhone 11</span>
                                    </td>
                                    <td class="d-none d-xl-table-cell">
                                        <span class="fs-sm text-muted">yesterday</span>
                                    </td>
                                    <td>
                                        <span class="fw-semibold text-success">Completed</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-end fw-medium">
                                        $999,00
                                    </td>
                                    <td class="text-center text-nowrap fw-medium">
                                        <a href="javascript:void(0)">
                                            View
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="fw-semibold">Airpods Pro</span>
                                    </td>
                                    <td class="d-none d-xl-table-cell">
                                        <span class="fs-sm text-muted">yesterday</span>
                                    </td>
                                    <td>
                                        <span class="fw-semibold text-success">Completed</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-end fw-medium">
                                        $39,99
                                    </td>
                                    <td class="text-center text-nowrap fw-medium">
                                        <a href="javascript:void(0)">
                                            View
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="fw-semibold">Xbox One X</span>
                                    </td>
                                    <td class="d-none d-xl-table-cell">
                                        <span class="fs-sm text-muted">yesterday</span>
                                    </td>
                                    <td>
                                        <span class="fw-semibold text-success">Completed</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-end fw-medium">
                                        $499,00
                                    </td>
                                    <td class="text-center text-nowrap fw-medium">
                                        <a href="javascript:void(0)">
                                            View
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="block-content block-content-full block-content-sm bg-body-light fs-sm text-center">
                        <a class="fw-medium" href="javascript:void(0)">
                            View all orders
                            <i class="fa fa-arrow-right ms-1 opacity-25"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex flex-column">
                <div class="block block-rounded">
                    <div
                        class="block-content block-content-full d-flex justify-content-between align-items-center flex-grow-1">
                        <div class="me-3">
                            <p class="fs-3 fw-bold mb-0">
                                35,698
                            </p>
                            <p class="text-muted mb-0">
                                Completed orders
                            </p>
                        </div>
                        <div class="item rounded-circle bg-body">
                            <i class="fa fa-check fa-lg text-primary"></i>
                        </div>
                    </div>
                    <div class="block-content block-content-full block-content-sm bg-body-light fs-sm text-center">
                        <a class="fw-medium" href="javascript:void(0)">
                            View Archive
                            <i class="fa fa-arrow-right ms-1 opacity-25"></i>
                        </a>
                    </div>
                </div>
                <div class="block block-rounded text-center d-flex flex-column flex-grow-1">
                    <div class="block-content block-content-full d-flex align-items-center flex-grow-1">
                        <div class="w-100">
                            <div class="item rounded-3 bg-body mx-auto my-3">
                                <i class="fa fa-archive fa-lg text-primary"></i>
                            </div>
                            <div class="fs-1 fw-bold">75</div>
                            <div class="text-muted mb-3">Products out of stock</div>
                            <div
                                class="d-inline-block px-3 py-1 rounded-pill fs-sm fw-semibold text-warning bg-warning-light">
                                5% of portfolio
                            </div>
                        </div>
                    </div>
                    <div class="block-content block-content-full block-content-sm bg-body-light fs-sm">
                        <a class="fw-medium" href="javascript:void(0)">
                            Order supplies
                            <i class="fa fa-arrow-right ms-1 opacity-25"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
