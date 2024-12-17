<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Login')</title>

    <!-- CSS -->
    <link href="{{ asset('dashmix/css/dashmix.min.css') }}" rel="stylesheet">

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

    {{-- Dashmix --}}
    <script src="{{ asset('dashmix/js/dashmix.app.min.js') }}"></script>

    @stack('styles')
</head>

<body>
    <main id="main-container">
        <div class="bg-image" style="background-image: url('{{ asset('dashmix/media/photos/photo22@2x.jpg') }}');">
            <div class="row g-0 bg-primary-op">
                <div class="hero-static col-md-6 d-flex align-items-center bg-body-extra-light">
                    <div class="p-3 w-100">
                        <div class="mb-3 text-center">
                            <a class="link-fx fw-bold fs-1" href="">
                                <span class="text-dark">Expenses </span>
                                <span class="text-primary">Tracker</span>
                            </a>
                            <p class="text-uppercase fw-bold fs-sm text-muted">Sign In</p>
                        </div>
                        <div class="row g-0 justify-content-center">
                            <div class="col-sm-8 col-xl-6">
                                <form class="js-validation-signin" action="{{ route('login') }}" method="POST"
                                    novalidate="novalidate">
                                    @csrf <!-- CSRF Token -->
                                    <div class="py-3">
                                        <div class="mb-4">
                                            <input type="email" class="form-control form-control-lg form-control-alt"
                                                id="login-email" name="email" placeholder="Email" required>
                                        </div>
                                        <div class="mb-4">
                                            <input type="password" class="form-control form-control-lg form-control-alt"
                                                id="login-password" name="password" placeholder="Password" required>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <button type="submit" class="btn w-100 btn-lg btn-hero btn-primary">
                                            <i class="fa fa-fw fa-sign-in-alt opacity-50 me-1"></i> Sign In
                                        </button>
                                        {{-- <p class="mt-3 mb-0 d-lg-flex justify-content-lg-between">
                                            <a class="btn btn-sm btn-alt-secondary d-block d-lg-inline-block mb-1"
                                                href="{{ route('password.request') }}">
                                                <i class="fa fa-exclamation-triangle opacity-50 me-1"></i> Forgot
                                                password
                                            </a>
                                            <a class="btn btn-sm btn-alt-secondary d-block d-lg-inline-block mb-1"
                                                href="{{ route('register') }}">
                                                <i class="fa fa-plus opacity-50 me-1"></i> New Account
                                            </a>
                                        </p> --}}
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="hero-static col-md-6 d-none d-md-flex align-items-md-center justify-content-md-center text-md-center">
                    <div class="p-3">
                        <p class="display-4 fw-bold text-white mb-3">
                            {{-- Welcome to the future --}}
                        </p>
                        <p class="fs-lg fw-semibold text-white-75 mb-0">
                            {{-- Copyright © <span data-toggle="year-copy" class="js-year-copy-enabled">2024</span> --}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
