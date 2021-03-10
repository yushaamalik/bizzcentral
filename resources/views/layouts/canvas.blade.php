<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<!-- Mirrored from themes.semicolonweb.com/html/canvas/header-floating.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Mar 2020 21:38:03 GMT -->
<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="SemiColonWeb" />
{{-- <link rel="icon" href="/canvas/images/logo.png" type="image/gif" sizes="24x24"> --}}
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="/canvas/css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="/canvas/style.css" type="text/css" />
<link rel="stylesheet" href="/canvas/css/swiper.css" type="text/css" />
<link rel="stylesheet" href="/canvas/css/dark.css" type="text/css" />
<link rel="stylesheet" href="/canvas/css/font-icons.css" type="text/css" />
<link rel="stylesheet" href="/canvas/css/animate.css" type="text/css" />
<link rel="stylesheet" href="/canvas/css/magnific-popup.css" type="text/css" />
<link rel="stylesheet" href="/canvas/css/responsive.css" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css">
<link href="http://fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700" rel="stylesheet" type="text/css" />
<style>

    .revo-slider-emphasis-text {
        font-size: 64px;
        font-weight: 700;
        letter-spacing: -1px;
        font-family: 'Raleway', sans-serif;
        padding: 15px 20px;
        border-top: 2px solid #FFF;
        border-bottom: 2px solid #FFF;
    }

    .revo-slider-desc-text {
        font-size: 20px;
        font-family: 'Lato', sans-serif;
        width: 650px;
        text-align: center;
        line-height: 1.5;
    }

    .revo-slider-caps-text {
        font-size: 16px;
        font-weight: 400;
        letter-spacing: 3px;
        font-family: 'Raleway', sans-serif;
    }
    .tp-video-play-button { display: none !important; }

    .tp-caption { white-space: nowrap; }

</style>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css">
<meta name="viewport" content="width=device-width, initial-scale=1" />

<title>BizzCentral</title>
@yield('css')
</head>
<body class="stretched">

    <div id="wrapper" class="clearfix">

        <header id="header" class="clearfix static-sticky border-bottom-0">
        <div id="header-wrap">
        <div class="container clearfix">
        <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
        
        <div id="logo">
        <a href="{{route('pages.index')}}" class="standard-logo" data-sticky-logo="/canvas/demos/coworking/images/logo-sticky.png"><img src="/canvas/demos/coworking/images/logo.png" alt="Canvas Logo"></a>
        <a href="{{route('pages.index')}}" class="retina-logo" data-sticky-logo="/canvas/demos/coworking/images/logo-sticky@2x.png"><img src="/canvas/demos/coworking/images/logo%402x.png" alt="Canvas Logo"></a>
        </div>
        
        <nav id="primary-menu">
        <ul>
        <li class="current"><a href="#"><div>Home</div></a></li>
        <li><a href="#"><div>About Us</div></a></li>
        <li><a href="{{route('category.index')}}"><div>Categories</div></a></li>
        <li><a href="{{route('products.index')}}"><div>Products</div></a></li>
        <li><a href="#"><div>Contact Us</div></a></li>
        </ul>
        
        
        </nav>
        </div>
        </div>
        </header>
   


@yield('content')


<footer id="footer" class="dark">

    <div id="copyrights">
    <div class="container clearfix">
    <div class="col_half">
    <img src="/canvas/images/footer-logo.png" alt="Footer Logo" class="footer-logo">
    Copyrights &copy; 2014 All Rights Reserved by Canvas Inc.
    </div>
    <div class="col_half col_last tright">
    <div class="copyrights-menu copyright-links fright clearfix">
    <a href="#">Home</a>/<a href="#">About</a>/<a href="#">Features</a>/<a href="#">Portfolio</a>/<a href="#">FAQs</a>/<a href="#">Contact</a>
    </div>
    <div class="fright clearfix">
    <a href="#" class="social-icon si-small si-borderless nobottommargin si-facebook">
    <i class="icon-facebook"></i>
    <i class="icon-facebook"></i>
    </a>
    <a href="#" class="social-icon si-small si-borderless nobottommargin si-twitter">
    <i class="icon-twitter"></i>
    <i class="icon-twitter"></i>
    </a>
    <a href="#" class="social-icon si-small si-borderless nobottommargin si-gplus">
    <i class="icon-gplus"></i>
    <i class="icon-gplus"></i>
    </a>
    <a href="#" class="social-icon si-small si-borderless nobottommargin si-pinterest">
    <i class="icon-pinterest"></i>
    <i class="icon-pinterest"></i>
    </a>
    <a href="#" class="social-icon si-small si-borderless nobottommargin si-vimeo">
    <i class="icon-vimeo"></i>
    <i class="icon-vimeo"></i>
    </a>
    <a href="#" class="social-icon si-small si-borderless nobottommargin si-github">
    <i class="icon-github"></i>
    <i class="icon-github"></i>
    </a>
    <a href="#" class="social-icon si-small si-borderless nobottommargin si-yahoo">
    <i class="icon-yahoo"></i>
    <i class="icon-yahoo"></i>
    </a>
    <a href="#" class="social-icon si-small si-borderless nobottommargin si-linkedin">
    <i class="icon-linkedin"></i>
    <i class="icon-linkedin"></i>
    </a>
    </div>
    </div>
    </div>
    </div>
    </footer>
    </div>
    
    
    <div id="gotoTop" class="icon-angle-up"></div>
    
    <script src="/canvas/js/jquery.js"></script>
    <script src="/canvas/js/plugins.js"></script>
    <script data-cfasync="false" src="/canvas/email-decode.min.js"></script>
    <script src="/canvas/js/jquery.js"></script>
    <script src="/canvas/js/functions.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.3.4/vue.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"></script>
    @yield('js')
</body>
    <!-- Mirrored from themes.semicolonweb.com/html/canvas/sticky-footer.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Mar 2020 21:43:13 GMT -->
    </html>
