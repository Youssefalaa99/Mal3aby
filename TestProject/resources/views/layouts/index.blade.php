<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    <!--===============================================================================================-->
	    <script src="mypackage/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
        <script src="mypackage/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
        <script src="mypackage/vendor/bootstrap/js/popper.js"></script>
        <script src="mypackage/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
        <script src="mypackage/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
        <script src="mypackage/vendor/daterangepicker/moment.min.js"></script>
        <script src="mypackage/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
        <script src="mypackage/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
        <script src="mypackage/js/main.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" type="image/png" href="mypackage/images/icons/favicon.ico)">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="mypackage/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="mypackage/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="mypackage/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="mypackage/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="mypackage/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="mypackage/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="mypackage/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="mypackage/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="mypackage/css/util.css">
	<link rel="stylesheet" type="text/css" href="mypackage/css/main.css">

</head>
<body>
    <div id="app" class="limiter">
        <div class="container-login100" style="background-image: url('mypackage/images/background2.jpg');">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <main class="py-4">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
</body>
</html>
