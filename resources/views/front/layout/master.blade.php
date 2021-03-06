<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ config('app.name')  }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png') }}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets/front/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/slicknav.css') }}">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="{{ asset('assets/front/css/style.css') }}">
    <!-- <link rel="stylesheet" href="assets/front/css/responsive.css') }}"> -->
</head>

<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- header-start -->
@include('front.layout.shared.header')
<!-- header-end -->

@yield('content')

@include('front.layout.shared.footer')

<!-- JS here -->
<script src="{{ asset('assets/front/js/vendor/modernizr-3.5.0.min.js') }}"></script>
<script src="{{ asset('assets/front/js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('assets/front/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/front/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/front/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/front/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/front/js/ajax-form.js') }}"></script>
<script src="{{ asset('assets/front/js/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/front/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('assets/front/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/front/js/scrollIt.js') }}"></script>
<script src="{{ asset('assets/front/js/jquery.scrollUp.min.js') }}"></script>
<script src="{{ asset('assets/front/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/front/js/nice-select.min.js') }}"></script>
<script src="{{ asset('assets/front/js/jquery.slicknav.min.js') }}"></script>
<script src="{{ asset('assets/front/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/front/js/plugins.js') }}"></script>
<script src="{{ asset('assets/front/js/gijgo.min.js') }}"></script>
<script src="{{ asset('assets/front/js/slick.min.js') }}"></script>
<script src="{{ asset('assets/front/js/contact.js') }}"></script>
<script src="{{ asset('assets/front/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('assets/front/js/jquery.form.js') }}"></script>
<script src="{{ asset('assets/front/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/front/js/mail-script.js') }}"></script>
<script src="{{ asset('assets/front/js/main.js') }}"></script>
<script>
    $('#datepicker').datepicker({
        iconsLibrary: 'fontawesome',
        icons: {
            rightIcon: '<span class="fa fa-caret-down"></span>'
        }
    });
</script>
</body>
</html>
