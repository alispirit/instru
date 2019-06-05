<?php
/**
 * Created by PhpStorm.
 * User: ali-pc
 * Date: 5/8/2019
 * Time: 2:25 PM
 */ ?>
<html  lang="fa" dir="rtl">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="sharpening instrument" />
    <meta name="author" content="ali mardani" />

    {{--<link rel="shortcut icon" href={{ assets("favicon.png") }} />--}}


    <!-- Title -->
    <title>repair instrument | @yield('title', 'Home Page')</title>


    <!-- Favicon -->
    {{--<link rel="icon" href="./img/core-img/favicon.ico">--}}


    <!-- Core Stylesheet -->
    <link rel="stylesheet" href={{ asset("css/style.css") }}>


    <!-- Custom styles for this layouts -->
    {{--    <link href = {{ asset("bootstrap/css/sticky-footer-navbar.css") }} rel="stylesheet" />--}}

    <!-- Optional theme -->
    {{--<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap-theme.min.css') }}">--}}

</head>
<body>
{{--  header  --}}
{{--<div class="container">--}}
    @include('layouts.header')
{{--</div>--}}
{{--  end header  --}}


<div id="app">


    <main class="py-4">
        @yield('content')
    </main>
</div>


<!-- ***** Footer Area End ***** -->

<!-- ******* All JS Files ******* -->
<!-- jQuery js -->
<script src="{{ asset("js/jquery.min.js") }}"></script>
<!-- Popper js -->
<script src="{{ asset("js/popper.min.js") }}"></script>
<!-- Bootstrap js -->
<script src="{{ asset("js/bootstrap4/bootstrap.min.js") }}"></script>
<!-- materialize js -->
{{--<script src="{{ asset("js/materialize.min.js") }}"></script>--}}
<!-- All js -->
<script src="{{ asset("js/main.js") }}"></script>
<!-- Active js -->
{{--<script src="js/default-assets/active.js"></script>--}}


</body>

</html>

