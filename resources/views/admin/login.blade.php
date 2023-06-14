<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from wp.alithemes.com/html/jobbox/demos/dashboard/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Jun 2023 19:56:26 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <link rel="manifest" href="manifest" crossorigin>
    <meta name="msapplication-config" content="browserconfig">
    <meta name="description" content="Index page">
    <meta name="keywords" content="index, page">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('admin/assets/imgs/template/favicon.svg') }}">
    <link href="{{ url('admin/assets/css/stylecd4e.css?version=4.1') }}" rel="stylesheet">


    <title>User & Company Admin </title>
</head>

<body>
    <form action="{{ route('admin_login_validate') }}"method="post">
        @csrf
        <div class="row">
            <div class="col-lg-12">
                <div class="section-box">
                    <div class="container">
                        <div class="panel-white mb-30">
                            <div class="box-padding">
                                <div class="login-register">
                                    <div class="row login-register-cover ">
                                        <div class="col-lg-4 col-md-6 col-sm-12 mx-auto">
                                            <div class="form-login-cover">
                                                <div class="text-center">
                                                    <p class="font-sm text-brand-2">Welcome To ARS! </p>
                                                    <h2 class="mt-10 mb-5 text-brand-1">Admin Login</h2>
                                                    <p class="font-sm text-muted mb-30">Access to all features. No
                                                        credit card required.</p>


                                                </div>
                                                <form class="login-register text-start mt-20" action="#">
                                                    <div class="form-group">
                                                        <label class="form-label" for="input-1">Email
                                                            address *</label>
                                                        <input class="form-control" id="input-1" type="text"
                                                            name="emailaddress" placeholder="Steven Job">
                                                        <span class="text-danger">
                                                            @error('emailaddress')
                                                                {{ $message }}
                                                            @enderror
                                                        </span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label" for="input-4">Password *</label>
                                                        <input class="form-control" id="input-4" type="password"
                                                            name="password" placeholder="************">
                                                        <span class="text-danger">
                                                            @error('password')
                                                                {{ $message }}
                                                            @enderror
                                                        </span>

                                                    </div>
                                                    <div class="login_footer form-group d-flex justify-content-between">
                                                        <label class="cb-container">
                                                            <input type="checkbox">
                                                            <span class="text-small">Remember me</span>
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a class="text-muted" href="#">Forgot Password</a>
                                                    </div>
                                                    <div class="form-group">
                                                        <button class="btn btn-brand-1 hover-up w-100" type="submit"
                                                            name="login">Login</button>
                                                    </div>
                                                    
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if (Session::has('l-success'))
            <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                {{ Session::get('l-success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (Session::has('l-error'))
            <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                {{ Session::get('l-error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </form>
    <script src="{{ asset('admin/assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/waypoints.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/magnific-popup.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/select2.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/jquery.circliful.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/charts/index.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/charts/xy.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/charts/Animated.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/armcharts5-script.js') }}"></script>
    <script src="{{ asset('admin/assets/js/main8c94.js?v=4.1') }}"></script>

</body>

<!-- Mirrored from wp.alithemes.com/html/jobbox/demos/dashboard/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Jun 2023 19:57:42 GMT -->

</html>
