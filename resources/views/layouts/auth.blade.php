<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Ship</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />
    <!-- Favicons -->
    {{-- <link href="{{ secure_asset('assets') }}/img/favicon.png" rel="icon" />
    <link href="{{ secure_asset('assets') }}/img/apple-touch-icon.png" rel="apple-touch-icon" /> --}}

    <!-- Google Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> -->

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous" />
    <!-- <link href="{{ secure_asset('assets') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="{{ secure_asset('assets') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="{{ secure_asset('assets') }}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="{{ secure_asset('assets') }}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="{{ secure_asset('assets') }}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link id="color" rel="stylesheet" href="{{secure_asset('assets/admin')}}/css/color-5.css">
    <link href="{{ secure_asset('assets') }}/css/style.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@500&display=swap" rel="stylesheet" />
</head>

<body>

    <main id="main">
        @yield('content')
    </main>
    <!-- End #main -->

    <!-- Vendor JS Files -->
    <script src="{{ secure_asset('assets') }}/vendor/purecounter/purecounter.js"></script>
    <script src="{{ secure_asset('assets') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ secure_asset('assets') }}/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ secure_asset('assets') }}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ secure_asset('assets') }}/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ secure_asset('assets') }}/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="{{ secure_asset('assets') }}/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ secure_asset('assets') }}/js/main.js"></script>
</body>

</html>
