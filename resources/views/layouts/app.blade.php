<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="76x76" href="">
    <link rel="icon" type="image/png" href="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Canonical SEO -->
    <!--<link rel="canonical" href="">-->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--  Social tags      -->
    <meta name="keywords"
          content="html dashboard, laravel, html css dashboard laravel, web dashboard, bootstrap 4 dashboard laravel, bootstrap 4, css3 dashboard, bootstrap 4 admin laravel">
    <meta name="description" content="">


    <!-- Schema.org markup for Google+ -->
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no"
          name="viewport">

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/css/material-icons.css') }}">
    <!-- CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/css/dashboard.css') }}">
    <link href="{{ asset('resources/css/app.css') }}" rel="stylesheet">

</head>
<body>

<div class="wrapper">
    @auth()
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        @include('layouts.pages.auth')
    @endauth
    @guest()
        @include('layouts.pages.guest')
    @endguest
</div>
<!--   Core JS Files   -->
<script src="{{ asset('resources/js/core/jquery.min.js') }}"></script>
<script src="{{ asset('resources/js/core/popper.min.js') }}"></script>
<script src="{{ asset('resources/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('resources/js/core/dashboard.js') }}"></script>
<!-- Plugins -->
<script src="{{ asset('resources/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
<!-- Plugin for the momentJs  -->
<script src="{{ asset('resources/js/plugins/moment.min.js') }}"></script>
<!--  Plugin for Sweet Alert -->
<script src="{{ asset('resources/js/plugins/sweetalert2.js') }}"></script>
<!-- Forms Validations Plugin -->
<script src="{{ asset('resources/js/plugins/jquery.validate.min.js') }}"></script>
<!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="{{ asset('resources/js/plugins/jquery.bootstrap-wizard.js') }}"></script>
<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="{{ asset('resources/js/plugins/bootstrap-selectpicker.js') }}"></script>
<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="{{ asset('resources/js/plugins/bootstrap-datetimepicker.min.js') }}"></script>
<!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
<script src="{{ asset('resources/js/plugins/jquery.dataTables.min.js') }}"></script>
<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="{{ asset('resources/js/plugins/bootstrap-tagsinput.js') }}"></script>
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{ asset('resources/js/plugins/jasny-bootstrap.min.js') }}"></script>
<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="{{ asset('resources/js/plugins/jquery-jvectormap.js') }}"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{ asset('resources/js/plugins/nouislider.min.js') }}"></script>
<!-- Library for adding dinamically elements -->
<script src="{{ asset('resources/js/plugins/arrive.min.js') }}"></script>
<!-- Chartist JS -->
<script src="{{ asset('resources/js/plugins/chart.bandle.min.js') }}"></script>
<script src="{{ asset('resources/js/plugins/chartist.min.js') }}"></script>
<script src="{{ asset('resources/js/plugins/chartist-plugin-tooltip.min.js') }}"></script>
<script src="{{ asset('resources/js/chart.js') }}"></script>
<!--  Notifications Plugin    -->
<script src="{{ asset('resources/js/plugins/bootstrap-notify.js') }}"></script>

<!-- Sharing widget -->
<script src="{{ asset('resources/js/plugins/jquery.sharrre.js') }}"></script>

</body>
</html>
