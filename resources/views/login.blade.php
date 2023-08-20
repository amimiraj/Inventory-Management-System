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
        <link href="{{asset('/')}}assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="{{asset('/')}}assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
        <link href="{{asset('/')}}assets/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" />
        <link href="{{asset('/')}}assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link href="{{asset('/')}}css/style.css" rel="stylesheet" />
        <link href="{{asset('/')}}css/style-responsive.css" rel="stylesheet" />
        <link href="{{asset('/')}}css/style-default.css" rel="stylesheet" id="style_color" />
        <link href="{{asset('/')}}assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
        <link href="{{asset('/')}}assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    </head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
    <body class="fixed-top">

        <div class="lock-header">
            <!-- BEGIN LOGO -->

            MD MIRAJ HOSSAIN

            <!-- END LOGO -->
        </div>
        <div class="login-wrap">
            <div class="metro single-size red">
                <div class="locked">
                    <i class="icon-lock"></i>            
                </div>
            </div>
            <div class="metro double-size green">
                <form action="">
                    <div class="input-append lock-input">
                        <input type="text" class="" placeholder="Username">
                    </div>
                </form>
            </div>
            
            <div class="metro double-size yellow">
                <form action="">
                    <div class="input-append lock-input">
                        <input type="password" class="" placeholder="Password">
                    </div>
                </form>
            </div>


            <div class="metro single-size terques login">
                <form action="">
                    <button type="submit" class="btn login-btn">
                        Login
                        <i class=" icon-long-arrow-right"></i>
                    </button>
                </form>
            </div>


            <div class="metro double-size navy-blue ">

            </div>
            <div class="metro single-size deep-red">

            </div>
            <div class="metro double-size blue">

            </div>
            <div class="metro single-size purple">

            </div>

        </div>




        <!-- Load javascripts at bottom, this will reduce page load time -->
        <script src="{{asset('/')}}js/jquery-1.8.3.min.js"></script>
        <script src="{{asset('/')}}js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="{{asset('/')}}assets/jquery-slimscroll/jquery-ui-1.9.2.custom.min.js"  type="text/javascript"></script>
        <script src="{{asset('/')}}assets/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript" ></script>
        <script src="{{asset('/')}}assets/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
        <script src="{{asset('/')}}assets/bootstrap/js/bootstrap.min.js"></script>

        <script src="{{asset('/')}}assets/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
        <script src="{{asset('/')}}js/jquery.blockui.js"></script>
        <script src="{{asset('/')}}assets/chosen-bootstrap/chosen/chosen.jquery.min.js" type="text/javascript"></script>
        <script src="{{asset('/')}}assets/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <script src="{{asset('/')}}js/form-wizard.js"></script>

        <!-- END JAVASCRIPTS -->
        <script>
     $(function () {
         $(" input[type=radio], input[type=checkbox]").uniform();
     });

        </script>



        <script src="{{asset('/')}}assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script>
        <script src="{{asset('/')}}js/jquery.sparkline.js" type="text/javascript"></script>
        <script src="{{asset('/')}}assets/chart-master/Chart.js"></script>


        <!--common script for all pages-->
        <script src="{{asset('/')}}js/common-scripts.js"></script>

        <!--script for this page only-->

        <script src="{{asset('/')}}js/easy-pie-chart.js"></script>
        <script src="{{asset('/')}}js/sparkline-chart.js"></script>
        <script src="{{asset('/')}}js/home-page-calender.js"></script>
        <script src="{{asset('/')}}js/chartjs.js"></script>
        <!-- END JAVASCRIPTS -->   
    </body>
    <!-- END BODY -->
</html>