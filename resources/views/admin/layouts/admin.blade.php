@include('partials.errors')
@include('partials.success')
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from adminui-v1.0.bittyfox.com/default/aqua-black/{{route('admin.dashboard')}} by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Mar 2020 15:58:06 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bizz Central | {{Auth::guard('admin')->user()->name}}</title>
    <!-- Bootstrap -->
    <link href="/admin/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- slimscroll -->
    <link href="/admin/assets/css/jquery.slimscroll.css" rel="stylesheet">
    <!-- project -->
    <link href="/admin/assets/css/project.css" rel="stylesheet">
    <!-- flotCart css -->
    <link href="/admin/assets/css/flotCart.css" rel="stylesheet">
    <!-- jvectormap -->
    <link href="/admin/assets/css/jqvmap.css" rel="stylesheet">
    <link rel="stylesheet" href="/admin/assets/css/jasny-bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/admin/assets/css/select2.min.css" />
	<link rel="stylesheet" type="text/css" href="/admin/assets/css/bootstrap-select.min.css" />



    

	<!-- dataTables -->
	<link href="/admin/assets/css/buttons.dataTables.min.css" rel="stylesheet">
	<link href="/admin/assets/css/dataTables.bootstrap.min.css" rel="stylesheet">
	<link href="/admin/assets/css/responsive.dataTables.min.css" rel="stylesheet">
	<link href="/admin/assets/css/fixedHeader.dataTables.min.css" rel="stylesheet">


    <!-- Fontes -->
    <link href="/admin/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="/admin/assets/css/simple-line-icons.css" rel="stylesheet">
    <link href="/admin/assets/css/ameffectsanimation.css" rel="stylesheet">
    <link href="/admin/assets/css/buttons.css" rel="stylesheet">
    <!-- animate css -->
    <link href="/admin/assets/css/animate.css" rel="stylesheet">
    <!-- top nev css -->
    <link href="/admin/assets/css/page-header.css" rel="stylesheet">
    <!-- adminui main css -->
    <link href="/admin/assets/css/main.css" rel="stylesheet">
   
    <!-- morris -->
	<link href="/admin/assets/css/morris.css" rel="stylesheet">

    <!-- aqua black theme css -->
    <link href="/admin/assets/css/aqua-black.css" rel="stylesheet">
    <!-- media css for responsive  -->
    <link href="/admin/assets/css/main.media.css" rel="stylesheet">

        <!-- AdminUI demo css-->
    <link href="/admin/assets/css/adminUIdemo.css" rel="stylesheet">
    <link href='assets/css/fullcalendar.css' rel='stylesheet' />
    <link href='assets/css/fullcalendar.print.css' rel='stylesheet' media='print' />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="page-header-fixed ">
    <div class="page-header navbar navbar-fixed-top">
        <!-- BEGIN HEADER INNER -->
        <div class="page-header-inner ">
            <!-- BEGIN LOGO -->
            <div class="page-logo">
                <a href="{{route('admin.dashboard')}}"> <h2 style="margin-left: 20px; padding-bottom:20px;"> ADMIN  </h2> </a>
            </div>
            <div class="library-menu"> <span class="one">-</span> <span class="two">-</span> <span class="three">-</span> </div><div class="top-nev-mobile-togal"><i class="glyphicon glyphicon-cog"></i></div>
            <!-- END LOGO -->
            <div class="top-menu">
<!--  TOP NAVIGATION MENU -->
                <div class="hor-menu  hor-menu-light hidden-sm hidden-xs">
                    <ul class="nav navbar-nav">
                        <!-- DOC: Remove data-hover="megamenu-dropdown" and data-close-others="true" attributes below to disable the horizontal opening on mouse hover -->
                        <li class="classic-menu-dropdown active"> <a href="{{route('admin.dashboard')}}"><i class="icon-user fa-fw"></i></a> </li>


                        
                    </ul>

                </div>
                <!--  TOP NAVIGATION MENU -->
               
                <ul class="nav navbar-nav pull-right">
                    
                    <!-- START USER LOGIN DROPDOWN -->
                    <li class="dropdown dropdown-user">
                        <a data-close-others="true" data-hover="dropdown" data-toggle="dropdown" class="dropdown-toggle" href="javascript:;"> <img src="/admin/assets/images/teem/" class="img-circle" alt=""> <span class="username username-hide-on-mobile"> {{Auth::guard('admin')->user()->name}}</span> <i class="fa fa-angle-down"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="{{route('admin.dashboard')}}"> <i class="icon-user"></i> My Profile </a>

                            </li>
                            <li>
                                <a href = "{{route('logout')}}"  onclick="event.preventDefault();
        document.getElementById('logout-form').submit();"> <i class="icon-key"></i> Log Out </a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END HEADER INNER -->
    </div>
    <div class="clearfix"> </div>
    <div class="page-container">
        <!-- Start page sidebar wrapper -->
        <div class="page-sidebar-wrapper">
            <div class="page-sidebar">
                <ul class="page-sidebar-menu  page-header-fixed ">
                    <li class="sidebar-search-wrapper">
                        <!-- START RESPONSIVE SEARCH FORM -->
                        <form class="sidebar-search  " action="http://adminui-v1.0.bittyfox.com/default/aqua-black/search_results.html" method="POST">
                            <a href="javascript:;" class="remove"> <i class="icon-close"></i> </a>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn"> <a href="javascript:;" class="btn submit"> <i class="icon-magnifier"></i> </a> </span> </div>
                        </form>
                        <!-- END RESPONSIVE SEARCH FORM -->
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.dashboard')}}"> <i class="fa fa-th-large"></i> <span class="title">Dashboard</span> </a>
                    </li>
                    <li class="heading">
                        <h3 class="uppercase">Control</h3>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-toggle" href="javascript:;"> <i class="fa fa-th-large"></i> <span class="title">Products</span> <span class="arrow"></span> </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('admin.products.index')}}"> <span class="title">All Products</span> </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('admin.product.create')}}"><span class="title">Add new Product </span> </a>
                            </li>
                        </ul>
                        <li class="nav-item">
                            <a class="nav-link nav-toggle" href="javascript:;"> <i class="fa fa-th-large"></i> <span class="title">Categories</span> <span class="arrow"></span> </a>
                            <ul class="sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.category.create')}}"> <i class="fa fa-th-large"></i> <span class="title">Add new </span> </a>
                    </li>
                
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.category.index')}}"> <i class="fa fa-th-large"></i> <span class="title">All Categories</span> </a>
                    </li>
                    </li>
                    </li>
                </ul>

             
               

                
                    
                    <li class="nav-item">
                        <a class="nav-link nav-toggle" href="javascript:;"> <i class="fa fa-th-large"></i> <span class="title">Queries</span> <span class="arrow"></span> </a>
                        <ul class="sub-menu">
               
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.orders.index')}}"> <i class="fa fa-th-large"></i> <span class="title">All Queries</span> </a>
                </li>
                </li>

                    
                   
                    </li>
                </ul>
            </div>
        </div>
        @yield('content')		

		






                <!-- start footer -->
                <div class="footer">
                    <div class="pull-right">
                        
                    </div>
                    <div> <strong>Copyright</strong> Romerscen &copy; <?php echo date("Y"); ?> </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Go top -->
    <a href="#" class="scrollup"><i class="fa fa-chevron-up"></i></a>
    <!-- Go top -->
    	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="/admin/assets/js/vendor/jquery.min.js"></script>
	<!-- bootstrap js -->
	<script src="/admin/assets/js/vendor/bootstrap.min.js"></script>
	<!--  morris Charts  -->
	
    


    <!-- dataTables-->
	<script type="text/javascript" src="/admin/assets/js/vendor/jquery.dataTables.js"></script>
	<script type="text/javascript" src="/admin/assets/js/vendor/dataTables.bootstrap.min.js"></script>
	<!-- js for print and download -->
	<script type="text/javascript" src="/admin/assets/js/vendor/dataTables.buttons.min.js"></script>
	<script type="text/javascript" src="/admin/assets/js/vendor/buttons.flash.min.js"></script>
	<script type="text/javascript" src="/admin/assets/js/vendor/jszip.min.js"></script>
	<script type="text/javascript" src="/admin/assets/js/vendor/pdfmake.min.js"></script>
	<script type="text/javascript" src="/admin/assets/js/vendor/vfs_fonts.js"></script>
	<script type="text/javascript" src="/admin/assets/js/vendor/buttons.html5.min.js"></script>
	<script type="text/javascript" src="/admin/assets/js/vendor/buttons.print.min.js"></script>
	<script type="text/javascript" src="/admin/assets/js/vendor/dataTables.responsive.min.js"></script>
	<script type="text/javascript" src="/admin/assets/js/vendor/dataTables.fixedHeader.min.js"></script>
    
	<script src="/admin/assets/js/vendor/chartJs/Chart.bundle.js"></script>
	<script src="/admin/assets/js/dashboard1.js"></script>
	<!-- slimscroll js -->
	<script type="text/javascript" src="/admin/assets/js/vendor/jquery.slimscroll.js"></script>
	<!-- pace js -->
	<script src="/admin/assets/js/vendor/pace/pace.min.js"></script>
	<!-- Sparkline -->
<script src="/admin/assets/js/vendor/jquery.sparkline.min.js"></script>
<!-- main js -->
<script src="/admin/assets/js/main.js"></script>
<!-- AdminUI demo js-->
<script src="/admin/assets/js/adminUIdemo.js"></script>
<!-- start theme config -->
<!-- End theme View -->

<script src="/admin/assets/js/vendor/select2.min.js"></script>

<script src='assets/js/vendor/lib/moment.min.js'></script>
<script src='assets/js/vendor/lib/jquery-ui.custom.min.js'></script>
<script src='assets/js/vendor/fullcalendar.min.js'></script>
<!-- pace js -->

@yield('js')
</body>


<!-- Mirrored from adminui-v1.0.bittyfox.com/default/aqua-black/{{route('admin.dashboard')}} by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Mar 2020 16:02:06 GMT -->
</html>