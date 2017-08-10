<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->

<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->

<head>

    <meta charset="utf-8" />

    <title>Metronic | Login Options - Login Form 2</title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <meta content="" name="description" />

    <meta content="" name="author" />

    <!-- BEGIN GLOBAL MANDATORY STYLES -->

    <link href="/webone/Public/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

    <link href="/webone/Public/admin/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>

    <link href="/webone/Public/admin/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

    <link href="/webone/Public/admin/css/style-metro.css" rel="stylesheet" type="text/css"/>

    <link href="/webone/Public/admin/css/style.css" rel="stylesheet" type="text/css"/>

    <link href="/webone/Public/admin/css/style-responsive.css" rel="stylesheet" type="text/css"/>

    <link href="/webone/Public/admin/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>

    <link href="/webone/Public/admin/css/uniform.default.css" rel="stylesheet" type="text/css"/>

    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL STYLES -->

    <link href="/webone/Public/admin/css/login-soft.css" rel="stylesheet" type="text/css"/>

    <!-- END PAGE LEVEL STYLES -->

    <link rel="shortcut icon" href="/webone/Public/admin/image/favicon.ico" />

</head>

<!-- END HEAD -->

<!-- BEGIN BODY -->

<body class="login">

<!-- BEGIN LOGO -->

<div class="logo">

    <img src="/webone/Public/admin/image/logo-big.png" alt="" />

</div>

<!-- END LOGO -->

<!-- BEGIN LOGIN -->

<div class="content">

    <!-- BEGIN LOGIN FORM -->

    <form class="form-vertical login-form" action="<?php echo U('Public/signin');?>" method="post">

        <h3 class="form-title">Login to your account</h3>

        <div class="alert alert-error hide">

            <button class="close" data-dismiss="alert"></button>

            <span>Enter any username and password.</span>

        </div>

        <div class="control-group">

            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->

            <label class="control-label visible-ie8 visible-ie9">Username</label>

            <div class="controls">

                <div class="input-icon left">

                    <i class="icon-user"></i>

                    <input class="m-wrap placeholder-no-fix" type="text" placeholder="Username" name="username"/>

                </div>

            </div>

        </div>

        <div class="control-group">

            <label class="control-label visible-ie8 visible-ie9">Password</label>

            <div class="controls">

                <div class="input-icon left">

                    <i class="icon-lock"></i>

                    <input class="m-wrap placeholder-no-fix" type="password" placeholder="Password" name="password"/>

                </div>

            </div>

        </div>

        <div class="form-actions">

            <label class="checkbox">

                <input type="checkbox" name="remember" value="1"/> Remember me

            </label>

            <button type="submit" class="btn blue pull-right">

                Login <i class="m-icon-swapright m-icon-white"></i>

            </button>

        </div>

    </form>

</div>

<!-- END LOGIN -->

<!-- BEGIN COPYRIGHT -->

<div class="copyright">

    2013 &copy; Metronic - Admin Dashboard Template.

</div>

<!-- END COPYRIGHT -->

<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->

<!-- BEGIN CORE PLUGINS -->

<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->

<!-- BEGIN CORE PLUGINS -->

<script src="/webone/Public/admin/js/jquery-1.10.1.min.js" type="text/javascript"></script>

<script src="/webone/Public/admin/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>

<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->

<script src="/webone/Public/admin/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>

<script src="/webone/Public/admin/js/bootstrap.min.js" type="text/javascript"></script>

<!--[if lt IE 9]>

<script src="/webone/Public/admin/js/excanvas.min.js"></script>

<script src="/webone/Public/admin/js/respond.min.js"></script>

<![endif]-->

<script src="/webone/Public/admin/js/jquery.slimscroll.min.js" type="text/javascript"></script>

<script src="/webone/Public/admin/js/jquery.blockui.min.js" type="text/javascript"></script>

<script src="/webone/Public/admin/js/jquery.cookie.min.js" type="text/javascript"></script>

<script src="/webone/Public/admin/js/jquery.uniform.min.js" type="text/javascript" ></script>

<!-- END CORE PLUGINS -->

<!-- BEGIN PAGE LEVEL PLUGINS -->

<script src="/webone/Public/admin/js/jquery.vmap.js" type="text/javascript"></script>

<script src="/webone/Public/admin/js/jquery.vmap.russia.js" type="text/javascript"></script>

<script src="/webone/Public/admin/js/jquery.vmap.world.js" type="text/javascript"></script>

<script src="/webone/Public/admin/js/jquery.vmap.europe.js" type="text/javascript"></script>

<script src="/webone/Public/admin/js/jquery.vmap.germany.js" type="text/javascript"></script>

<script src="/webone/Public/admin/js/jquery.vmap.usa.js" type="text/javascript"></script>

<script src="/webone/Public/admin/js/jquery.vmap.sampledata.js" type="text/javascript"></script>

<script src="/webone/Public/admin/js/jquery.flot.js" type="text/javascript"></script>

<script src="/webone/Public/admin/js/jquery.flot.resize.js" type="text/javascript"></script>

<script src="/webone/Public/admin/js/jquery.pulsate.min.js" type="text/javascript"></script>

<script src="/webone/Public/admin/js/date.js" type="text/javascript"></script>

<script src="/webone/Public/admin/js/daterangepicker.js" type="text/javascript"></script>

<script src="/webone/Public/admin/js/jquery.gritter.js" type="text/javascript"></script>

<script src="/webone/Public/admin/js/fullcalendar.min.js" type="text/javascript"></script>

<script src="/webone/Public/admin/js/jquery.easy-pie-chart.js" type="text/javascript"></script>

<script src="/webone/Public/admin/js/jquery.sparkline.min.js" type="text/javascript"></script>

<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->

<script src="/webone/Public/admin/js/app.js" type="text/javascript"></script>

<script src="/webone/Public/admin/js/index.js" type="text/javascript"></script>

<!-- END PAGE LEVEL SCRIPTS -->

<script>

    jQuery(document).ready(function() {

        App.init(); // initlayout and core plugins

        Index.init();

        Index.initJQVMAP(); // init index page's custom scripts

        Index.initCalendar(); // init index page's custom scripts

        Index.initCharts(); // init index page's custom scripts

        Index.initChat();

        Index.initMiniCharts();

        Index.initDashboardDaterange();

        Index.initIntro();

    });

</script>

<!-- END JAVASCRIPTS -->

<!-- END PAGE LEVEL SCRIPTS -->

<script>

    jQuery(document).ready(function() {

        App.init();

        Login.init();

    });

</script>

<!-- END JAVASCRIPTS -->

</body>

<!-- END BODY -->

</html>