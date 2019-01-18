<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("location:index.php");
}
?>
    <!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Administrator </title>
    <!-- Bootstrap Styles-->
    <link href="{{ url('assets/admin/css/bootstrap.css') }}" rel="stylesheet"/>
    <!-- FontAwesome Styles-->
    <link href="{{ url('assets/admin/css/font-awesome.css') }}" rel="stylesheet"/>
    <!-- Morris Chart Styles-->
    <link href="{{ url('assets/admin/js/morris/morris-0.4.3.min.css') }}" rel="stylesheet"/>
    <!-- Custom Styles-->
    <link href="{{ url('assets/admin/css/custom-styles.css') }}" rel="stylesheet"/>
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>
</head>

<body>
<div id="wrapper">
    <nav class="navbar navbar-default top-navbar" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="home.php"> <?php echo $_SESSION["user"]; ?> </a>
        </div>

        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="usersetting.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="settings.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
    </nav>
    <!--/. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">

                <li>
                    <a class="active-menu" href="home.php"><i class="fa fa-dashboard"></i> Status</a>
                </li>
                <li>
                    <a href="messages.php"><i class="fa fa-desktop"></i> News Letters</a>
                </li>
                <li>
                    <a href="roombook.php"><i class="fa fa-bar-chart-o"></i> Room Booking</a>
                </li>
                <li>
                    <a href="payment.php"><i class="fa fa-qrcode"></i> Payment</a>
                </li>
                <li>
                    <a href="profit.php"><i class="fa fa-qrcode"></i> Profit</a>
                </li>
                <li>
                    <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>


            </ul>

        </div>

    </nav>

    @yield('content')

    <!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->
<!-- JS Scripts-->
<!-- jQuery Js -->
<script src="{{ url('assets/admin/js/jquery-1.10.2.js') }}"></script>
<!-- Bootstrap Js -->
<script src="{{ url('assets/admin/js/bootstrap.min.js') }}"></script>
<!-- Metis Menu Js -->
<script src="{{ url('assets/admin/js/jquery.metisMenu.js') }}"></script>
<!-- Morris Chart Js -->
<script src="{{ url('assets/admin/js/morris/raphael-2.1.0.min.js') }}"></script>
<script src="{{ url('assets/admin/js/morris/morris.js') }}"></script>
<!-- Custom Js -->
<script src="{{ url('assets/admin/js/custom-scripts.js') }}"></script>


</body>

</html>
