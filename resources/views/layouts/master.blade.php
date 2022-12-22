<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> @yield('title') | Indonesia Liveaboard</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta content="Ramanda Rido Saputra" name="author" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('assets/images/favicon.ico') }}">

    <!-- CSS
	============================================ -->
    <!-- Bootstrap CSS -->
    @include('layouts.head-css')

</head>

@section('body')
{{-- <body class="active-dark-mode"> --}}
<body class="">
    @show
    <div class="main-page">
        <div id="my_switcher" class="my_switcher">
            <ul>
                <li>
                    <a href="javascript: void(0);" data-theme="light" class="setColor light">
                        <img src="assets/images/about/sun-01.svg" alt="Sun images"><span title="Light Mode"> Light</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" data-theme="dark" class="setColor dark">
                        <img src="assets/images/about/vector.svg" alt="Vector Images"><span title="Dark Mode"> Dark</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Start Header -->

        @include('layouts.header')

        @if (Request::segment(1) != 'home' && Request::segment(1) != '')
            @include('frontend.components.breadcrumb')
        @endif

        <!-- Start Page Wrapper  -->
        <main class="page-wrapper">

            @yield('content')

        </main>
        <!-- End Page Wrapper  -->
        <!-- Start Footer Style Two  -->
        @include('layouts.footer')
        <!-- End Footer Style Two  -->
    </div>
    <!-- JS
============================================ -->
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr.min.js"></script>
    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/stellar.js"></script>
    <script src="assets/js/vendor/particles.js"></script>
    <script src="assets/js/vendor/masonry.js"></script>
    <script src="assets/js/vendor/stickysidebar.js"></script>
    <script src="assets/js/plugins/plugins.js"></script>
    <script src="assets/js/vendor/js.cookie.js"></script>
    <script src="assets/js/vendor/jquery.style.switcher.js"></script>
    <script src="assets/js/vendor/jquery-one-page-nav.js"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>


</body>

</html>
