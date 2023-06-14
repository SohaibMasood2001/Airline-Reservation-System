<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ url('Auth/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ url('Auth/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="{{ url('https://fonts.googleapis.com') }}">
    <link rel="preconnect" href="{{ url('https://fonts.gstatic.com') }}" crossorigin>
    <link
        href="{{ url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;
                        0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;
                        1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,
                        700&display=swap') }}"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ url('Auth/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('Auth/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ url('Auth/assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ url('Auth/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ url('Auth/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ url('Auth/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ url('Auth/assets/css/main.css') }}" rel="stylesheet">
    <title>Authentication</title>
    <style>
        .section-before {
            background-image: url('assets/img/update_bg.jpg');
        }
    </style>

</head>

<body>
    <section id="get-started" class="get-started section-bg section-before " >
        <div class="container">

            <div class="row mt-0" style="display: flex!important; justify-content:center !important;">

                <div class="col-lg-8 text-center mt-0" data-aos="fade-up">
                    <h1 class="text-white bg-dark">Welcome to ARS</h1>
                    <a href="admin/login" class="btn btn-primary">Admin Login</a>
                </div>

                <div class="col-lg-5 text-center mt-2" data-aos="fade">
                    @if (\Request::route()->getName() == 'login')
                        @include('Auth.login')
                    @else
                        @include('Auth.register')
                    @endif

                </div><!-- End Quote Form -->

            </div>

        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="{{ asset('Auth/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Auth/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('Auth/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('Auth/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('Auth/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('Auth/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('Auth/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
