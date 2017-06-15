<!DOCTYPE html>
<!--[if IE 8 ]>
<html class="ie ie8" lang="ar" dir="rtl"> <![endif]-->
<!--[if IE 9 ]>
<html class="ie ie9" lang="ar" dir="rtl"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="ar" dir="rtl"> <!--<![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>KcalFoods</title>

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Main Style -->
    <link rel="stylesheet" href="style.css">

    <!-- customize CSS Style -->
    <link rel="stylesheet" href="css/customize.css">

    <!-- Responsive Style -->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Favicons -->
    <link rel="shortcut icon" href="images/favicon.png">

    <!-- Skins -->
    <!-- just remove the below comments witch color skin you want to use -->
    <!--<link rel="stylesheet" href="css/skins/blue.css">-->
    <!--<link rel="stylesheet" href="css/skins/yellow.css">-->
    <!--<link rel="stylesheet" href="css/skins/green.css">-->
    <!--<link rel="stylesheet" href="css/skins/cyan.css">-->
    <!--<link rel="stylesheet" href="css/skins/orange.css">-->
    <!--<link rel="stylesheet" href="css/skins/pink.css">-->
    <!--<link rel="stylesheet" href="css/skins/purple.css">-->
    <!--<link rel="stylesheet" href="css/skins/red.css">-->
    <!--<link rel="stylesheet" href="css/skins/lactic.css">-->
    <!--<link rel="stylesheet" href="css/skins/darkred.css">-->

</head>
<body class="sticky">

<!--[if lte IE 8]>
<p class="chromeframe">أنت تستخدم <strong>متصفح</strong> قديم. يرجي <a href="http://browsehappy.com/">ترقية متصفحك</a>.
</p>
<![endif]-->

<!-- Preload -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div><!-- End Preload -->
<!-- wrap Page -->
<div id="wrap">
    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-5 col-xs-6">
                    <a href="/" id="logo">
                        <img src="images/logo.png" alt="">
                    </a>
                </div>
                <nav class="col-md-9 col-sm-7 col-xs-6">
                    <a class="np-toggle-switch np-toggle-switch-nxp open_close" href="javascript:void(0);"><span>قائمة الجوال</span></a>
                    <div class="main-menu" id="main-menu">
                        <div id="header_menu">
                            <img src="images/logo-menu.png" alt="">
                        </div>
                        <a href="#" class="open_close" id="close_in"><i class="icon_close"></i></a>
                        <ul>
                            <li><a href="/"><i class="icon_house_alt"></i> الرئيسية</a></li>
                            <li><a href="#"><i class="ic icon-recipes"></i> الوصفات</a></li>
                            <li class="submenu">
                                <a href="/products" class="show-submenu"><i class="ic icon-post"></i>المنتجات
                                    <i class="fa fa-angle-down"></i></a>
                                <ul>
                                    <li><a href="index.html"> مشتقات الألبان</a></li>
                                    <li><a href="index-2.html">اللحوم بأنواعها</a></li>
                                    <li><a href="index-3.html">الحبوب والمكسرات</a></li>
                                </ul>
                            </li>
                            <li><a href="chefs.html"><i class="ic icon-chefs"></i> اتصل بنا</a></li>
                            <li><a href="chefs.html"><i class="ic icon-chefs"></i>أعلن معنا</a></li>
                        </ul>
                    </div><!-- End main-menu -->
                </nav>
            </div><!-- End row -->
        </div><!-- End container -->
    </header><!-- End Header -->
    

        @yield('content')


    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="social_footer" class="social_color_hover">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                        </ul>
                        <p>
                            وصفات الطعام | كل الحقوق محفوظة.
                            <br/>
                            تصميم موقع انترنت themearabia.net
                        </p>
                    </div>
                </div>
            </div><!-- End row -->
        </div><!-- End container -->
    </footer><!-- End Footer -->
</div><!-- End wrap Page -->
<!-- go-up -->
<div class="go-up"><i class="fa fa-chevron-up"></i></div>
<!-- End go-up -->

<!-- COMMON SCRIPTS -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/bootstrap.rtl.min.js"></script>
<script src="js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="js/jquery.easing.1.3.min.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/jquery.scrollTo.js"></script>
<script src="js/ResizeSensor.min.js"></script>
<script src="js/theia-sticky-sidebar.min.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/jquery.themepunch.plugins.min.js"></script>
<script src="js/jquery.themepunch.revolution.min.js"></script>
<script src="js/ion.rangeSlider.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>