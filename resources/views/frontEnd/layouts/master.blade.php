<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta name="description" content="Welcome to Public Library">
    <meta name="author" content="Author Name">
    <title> @yield('title')</title>
    <link href="{{asset('public/frontEnd/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontEnd/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontEnd/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontEnd/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontEnd/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontEnd/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontEnd/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{asset('public/frontEnd/js/html5shiv.js')}}"></script>
    <script src="{{asset('public/frontEnd/js/respond.min.js')}} "></script>
    <![endif]-->

</head><!--/head-->

<body>

<header id="header"><!--header-->
@include('frontEnd.layouts.headerTop')

   @include('frontEnd.layouts.headerMiddle')

    @include('frontEnd.layouts.headerBottom')

</header><!--/header-->

@yield('content')

@include('frontEnd.layouts.footer')

<script src="{{asset('public/frontEnd/js/jquery.js')}} "></script>
<script src="{{asset('public/frontEnd/js/bootstrap.min.js')}} "></script>
<script src="{{asset('public/frontEnd/js/jquery.scrollUp.min.js')}} "></script>
<script src="{{asset('public/frontEnd/js/price-range.js')}} "></script>
<script src="{{asset('public/frontEnd/js/jquery.prettyPhoto.js')}} "></script>
<script src="{{asset('public/frontEnd/js/jquery.countTo.js')}} "></script>
<script src="{{asset('public/frontEnd/js/main.js')}} "></script>
</body>
</html>
