
<!DOCTYPE html>
<html>
<head>
    <title>Public Library </title>
    <link href="{{asset('public/admin/css/bootstrap.css') }} " rel="stylesheet" type="text/css" media="all" />
    <!-- Custom Theme files -->
    <!--theme-style-->
    <link href="{{asset('public/admin/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Shopin Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndroId Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--theme-style-->
    <link href="{{asset('public/admin/css/style4.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!--//theme-style-->
    <script src="{{asset('public/admin/js/jquery.min.js') }}"></script>
    <!--- start-rate---->
    <script src="{{asset('public/admin/js/jstarbox.js') }}"></script>
    <link rel="stylesheet" href="{{asset('public/admin') }}css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
    <script type="text/javascript">
        jQuery(function() {
            jQuery('.starbox').each(function() {
                var starbox = jQuery(this);
                starbox.starbox({
                    average: starbox.attr('data-start-value'),
                    changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
                    ghosting: starbox.hasClass('ghosting'),
                    autoUpdateAverage: starbox.hasClass('autoupdate'),
                    buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
                    stars: starbox.attr('data-star-count') || 5
                }).bind('starbox-value-changed', function(event, value) {
                    if(starbox.hasClass('random')) {
                        var val = Math.random();
                        starbox.next().text(' '+val);
                        return val;
                    }
                })
            });
        });
    </script>
    <!---//End-rate---->
</head>
<body>
<!--header-->
<div class="header">

</div>

<link href="{{asset('public/admin/css/popuo-box.css') }}" rel="stylesheet" type="text/css" media="all"/>
<script src="{{asset('public/admin/js/jquery.magnific-popup.js') }} " type="text/javascript"></script>
<!---//pop-up-box---->
<div id="small-dialog" class="mfp-hide">
    <div class="search-top">
        <div class="login-search">
            <input type="submit" value="">
            <input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}">
        </div>
        <p>Library Management System</p>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });

    });
</script>
<!----->
</div>
<div class="clearfix"></div>
</div>
</div>
</div>
<!--banner-->

<div class="container">
    <h1>Login</h1>
    <em></em>

</div>
</div>
<!--login-->
<div class="container">
    <div class = "center">
        <div class="login">

            <form role="form" action="{{route('login') }}" method="POST">

                <div class="col-md-6 login-do">
                    {{csrf_field()}}
                    <fieldset>
                        <div  class="form-group  {{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="login-mail">
                            <input type="text" placeholder="Email" required="" name="email" type="email" autofocus>
                            <i  class="glyphicon glyphicon-envelope"></i>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="login-mail {{ $errors->has('email') ? ' has-error' : '' }}">
                        <input  type="password" placeholder="Password" name="password" type="password"  required="">
                        <i class="glyphicon glyphicon-lock"></i>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif
            </div>

            <a class="news-letter " href="#">
                <label class="checkbox1"><input type="checkbox" name="checkbox" ><i> </i>Forget Password</label>
            </a>

            <label class="hvr-skew-backward">
                <input type="submit" name="btn" value="Login">
            </label>
                        </div>



        <div class="clearfix"> </div>
        </fieldset>
                </div>
        </form>

    </div>
        </form>
</div>
</div>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<script src="{{asset('public/admin/js/simpleCart.min.js') }}"> </script>
<!-- slide -->
<script src="{{asset('public/admin/js/bootstrap.min.js') }}"></script>

</body>
</html>