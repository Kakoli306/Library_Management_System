<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('public/assets')}}/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Public Library management System</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/css/bootstrap-datetimepicker.min.css">
    <!-- Date Time Picker CSS     -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/date-time-picker/css/bootstrap-date-time-picker.min.css') }} ">

    <!-- Animation library for notifications   -->
    <link href="{{asset('public/assets')}}/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="{{asset('public/assets')}}/css/paper-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{asset('public/assets')}}/css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="{{asset('public/assets')}}/css/themify-icons.css" rel="stylesheet">

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

        <!--
            Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
            Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
        -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href= class="simple-text">
                    Public Library Management System
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="{{url('/home')}}">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
          </li>

                <li class="active">
                        <a href="{{route('general-settings') }}">
                            <i class="ti-settings"></i>
                            <p>General Settings</p>
                        </a>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#membersCollapse">
                    <li class="active">
                        <i class="ti-user"></i>
                        <p>Members <b class="caret"></b></p>
                        </a>
                        <div class="collapse" id="membersCollapse">
                            <ul class="nav">
                                <li>
                                    <a href="{{url('/member/add') }}">
                                        <span>Add Members</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('/member/manage') }}">
                                        <span>Manage Members</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#booksCollapse">
                    <li class="active">
                        <i class="ti-map"></i>
                        <p>All Books <b class="caret"></b></p>
                        </a>
                        <div class="collapse" id="booksCollapse">
                            <ul class="nav">

                                <li>
                                    <a href="{{route('circulation-book') }}">
                                        <span>Book Circulation</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('configuration-book')}}">
                                        <span>Book Configuration</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#circulationCollapse">
                    <li class="active">
                        <i class="ti-marker-alt"></i>
                        <p>Circulation <b class="caret"></b></p>
                        </a>
                        <div class="collapse" id="circulationCollapse">
                            <ul class="nav">
                                <li>
                                    <a href="{{route('add-circulation')}}">
                                        <span>Add Circulation</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('manage-circulation')}}">
                                        <span>Manage Configuration</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    </li>

                <ul class="nav">
                        <li class="active">
                            <a href="notifications.html">
                                <i class="ti-bell"></i>
                                <p>Notifications</p>
                            </a>
                        </li>
                    </ul>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>

                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>

                        </li>
                        <li class="dropdown">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-bell"></i>
                                <p class="notification">5</p>
                                <p>Notifications</p>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            @if(Auth::user()->name)
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-user fa-fw"></i>

                                <i class="fa fa-caret-down"></i>
                            </a>
                            @endif
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                                </li>
                                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="#" onclick="document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out fa-fw"></i> Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                            <!-- /.dropdown-user -->
                        </li>
                        <!-- /.dropdown -->
                    </ul>
                    <!-- /.navbar-top-links -->

                </div>
            </div>
        </nav>



        @yield('content')
    </div>
</div>
</body>

<!--   Core JS Files   -->
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>



<script type="text/javascript" src="{{asset('public/assets/date-time-picker/js/moment-with-locales.min.js') }} "></script>
<script type="text/javascript" src="{{asset('public/assets/date-time-picker/js/bootstrap-datetimepicker.min.js') }}"></script>--}}

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/js/bootstrap-datetimepicker.min.js"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="{{asset('public/assets')}}/js/bootstrap-checkbox-radio.js"></script>

<!--  Charts Plugin -->
<script src="{{asset('public/assets')}}/js/chartist.min.js"></script>
<script src="{{asset('public/assets')}}/js/bootstrap-notify.js"></script>



<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
<script type="text/javascript" src="{{asset('public/assets')}}/js/paper-dashboard.js"></script>








<script type="text/javascript">
    jQuery.noConflict();
    jQuery(document).ready(function($){
        $('[data-toggle="tooltip"]').tooltip();
        //demo.initChartist();
    });
</script>

<script type="text/javascript">


    jQuery.noConflict();
    // Use jQuery via jQuery() instead of via $()
    jQuery(document).ready(function($){
            $('#datetimepicker4').datetimepicker();
    });


</script>



</html>
