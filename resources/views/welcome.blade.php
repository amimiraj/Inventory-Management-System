<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>Inventory Management System</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta content="" name="description" />
        <meta content="Mosaddek" name="author" />

        <!--------------------------------------------------------------------------------------------------------------------->

        <link href="{{asset('/')}}public/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="{{asset('/')}}public/assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
        <link href="{{asset('/')}}public/assets/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" />
        <link href="{{asset('/')}}public/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link href="{{asset('/')}}public/css/style.css" rel="stylesheet" />
        <link href="{{asset('/')}}public/css/style-responsive.css" rel="stylesheet" />
        <link href="{{asset('/')}}public/css/style-default.css" rel="stylesheet" id="style_color" />
        <link href="{{asset('/')}}public/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
        <link href="{{asset('/')}}public/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    </head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
    <body class="fixed-top">
        <!-- BEGIN HEADER -->
        <div id="header" class="navbar navbar-inverse navbar-fixed-top">
            <!-- BEGIN TOP NAVIGATION BAR -->
            <div class="navbar-inner">
                <div class="container-fluid">
                    <!--BEGIN SIDEBAR TOGGLE-->
                    <div class="sidebar-toggle-box hidden-phone">
                        <div class="icon-reorder"></div>
                    </div>
                    <!--END SIDEBAR TOGGLE-->
                    <!-- BEGIN LOGO -->
                    <a class="brand" href="index.html">
                        <!--<img src="{{asset('/')}}public/img/logo.png" alt="Metro Lab" />-->
                        <!---------------------------------------------------------------------------------------------------------------------LOGO---------->
                    </a>
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="arrow"></span>
                    </a>
                    <!-- END RESPONSIVE MENU TOGGLER -->


                    <!-- END  NOTIFICATION -->
                    <div class="top-nav ">
                        <ul class="nav pull-right top-menu" >

                            <!-- BEGIN USER LOGIN DROPDOWN -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="username">{{ Auth::user()->name }}</span>
                                    <b class="caret"></b>
                                </a>

                                <ul class="dropdown-menu extended logout">
                                    <li style="width:100%; height: 40px" >
                                        <!--<a href="{{url('/logout')}}"><i class="icon-key"></i> Log Out</a>-->
                                        <form  action="{{ route('logout') }}" method="POST">
                                            @csrf                                  
                                            <button type="submit" style="border:0px; width:100%; background: none;color:grey; margin-top:7px;margin-bottom:0px;"><b><i class="icon-key"></i>Log Out</b></button>
                                        </form>
                                    </li>

                                </ul>

                            </li>
                            <!-- END USER LOGIN DROPDOWN -->
                        </ul>
                        <!-- END TOP NAVIGATION MENU -->
                    </div>
                </div>
            </div>
            <!-- END TOP NAVIGATION BAR -->
        </div>
        <!-- END HEADER -->


        <!-- BEGIN CONTAINER --------------------------------------------------------------------------------------side bar----------------------------------------------->
        <div id="container" class="row-fluid">    

            <!-- BEGIN SIDEBAR -->
            <div class="sidebar-scroll">
                <div id="sidebar" class="nav-collapse collapse">

                    <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                    <div class="navbar-inverse">
                        <form class="navbar-search visible-phone">
                            <input type="text" class="search-query" placeholder="Search" />
                        </form>
                    </div>
                    <!-- END RESPONSIVE QUICK SEARCH FORM -->
                    <!-- BEGIN SIDEBAR MENU -->
                    <ul class="sidebar-menu">
                        <li class="sub-menu active">
                            <a class="" href="{{url('/')}}">
                                <i class="icon-dashboard"></i>
                                <span>DASHBOARD</span>
                            </a>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;" class="">
                                <span>SUPPLIER</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub">
                                <li><a class="" href="{{url('/addSupplier')}}">Add Supplier</a></li>
                                <li><a class="" href="{{url('/manageSupplier')}}">View Supplier</a></li>
                            </ul>
                        </li>

                        <li class="sub-menu">
                            <a href="javascript:;" class="">
                                <span>BRAND</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub">
                                <li><a class="" href="{{url('/addBrand')}}">Add Brand</a></li>
                                <li><a class="" href="{{url('/manageBrand')}}">View Brand</a></li>
                            </ul>
                        </li>

                        <li class="sub-menu">
                            <a href="javascript:;" class="">
                                <span>CATEGORY</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub">
                                <li><a class="" href="{{url('/addCategory')}}">Add Category</a></li>
                                <li><a class="" href="{{url('/manageCategory')}}">View Category</a></li>
                            </ul>
                        </li>

                        <li class="sub-menu">
                            <a href="javascript:;" class="">
                                <span>PRODUCT</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub">
                                <li><a class="" href="{{url('/addProduct')}}">Add Product</a></li>
                                <li><a class="" href="{{url('/manageProduct')}}">View Product</a></li>
                            </ul>
                        </li>

                        <li class="sub-menu">
                            <a href="javascript:;" class="">
                                <span>PURCHASE</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub">
                                <li><a class="" href="{{url('/purchase')}}">Purchase</a></li>
                            </ul>
                        </li>

                        <li class="sub-menu">
                            <a href="javascript:;" class="">
                                <span>STOCK</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub">
                                <li><a class="" href="{{url('/stock')}}">View Stock</a></li>
                            </ul>
                        </li>

                        <li class="sub-menu">
                            <a href="javascript:;" class="">
                                <span>POS</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub">
                                <li><a class="" href="{{url('/sale')}}">Sale</a></li>
                            </ul>
                        </li>

                        <li class="sub-menu">
                            <a href="javascript:;" class="">
                                <span>REPORT</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub">
                                <li><a class="" href="{{url('/report')}}">Daily Report</a></li>

                            </ul>
                        </li>
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN PAGE -->  
            <div id="main-content">
                <!-- BEGIN PAGE CONTAINER-->

                @yield('master-content')

                <!--------------------------------------------------------------------------------------------------------------------start Dashboard-->

            </div>
            <!-- END PAGE -->  
        </div>
        <!-- END CONTAINER -->


        <!---------------------------------------------------------------------------------------------------------------------------------------End-->






        <!-- BEGIN FOOTER -->
        <div id="footer">
            2022 &copy; MD MIRAJ HOSSAIN.
        </div>
        <!-- END FOOTER -->

        <!-- BEGIN JAVASCRIPTS -->


        <!-- Load javascripts at bottom, this will reduce page load time -->
        <script src="{{asset('/')}}public/js/jquery-1.8.3.min.js"></script>
        <script src="{{asset('/')}}public/js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="{{asset('/')}}public/assets/jquery-slimscroll/jquery-ui-1.9.2.custom.min.js"  type="text/javascript"></script>
        <script src="{{asset('/')}}public/assets/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript" ></script>
        <script src="{{asset('/')}}public/assets/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
        <script src="{{asset('/')}}public/assets/bootstrap/js/bootstrap.min.js"></script>

        <script src="{{asset('/')}}public/assets/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
        <script src="{{asset('/')}}public/js/jquery.blockui.js"></script>
        <script src="{{asset('/')}}public/assets/chosen-bootstrap/chosen/chosen.jquery.min.js" type="text/javascript"></script>
        <script src="{{asset('/')}}public/assets/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <script src="{{asset('/')}}public/js/form-wizard.js"></script>

        <!-- END JAVASCRIPTS -->
        <script>
$(function () {
    $(" input[type=radio], input[type=checkbox]").uniform();
});

        </script>



        <script src="{{asset('/')}}public/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script>
        <script src="{{asset('/')}}public/js/jquery.sparkline.js" type="text/javascript"></script>
        <script src="{{asset('/')}}public/assets/chart-master/Chart.js"></script>


        <!--common script for all pages-->
        <script src="{{asset('/')}}public/js/common-scripts.js"></script>

        <!--script for this page only-->

        <script src="{{asset('/')}}public/js/easy-pie-chart.js"></script>
        <script src="{{asset('/')}}public/js/sparkline-chart.js"></script>
        <script src="{{asset('/')}}public/js/home-page-calender.js"></script>
        <script src="{{asset('/')}}public/js/chartjs.js"></script>
        <script src="{{asset('public/js/app.js') }}" defer></script>
        <!-- END JAVASCRIPTS -->   
    </body>
    <!-- END BODY -->
</html>