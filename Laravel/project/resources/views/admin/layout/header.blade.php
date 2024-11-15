<?php
if (session()->has('ses_adminid')) {
} else {
    echo "<script>window.location='/admin_login';</script>";
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="{{url('admin/assets/css/bootstrap.css')}}" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="{{url('admin/assets/css/font-awesome.css')}}" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="{{url('admin/assets/css/basic.css')}}" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="{{url('admin/assets/css/custom.css')}}" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

   
   
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">

    <!--
3 Call this single function 
-->
    <script>
        $(document).ready(function() {
            $('#mytable').DataTable();
        });
    </script>
</head>

<body>

<script id="messenger-widget-b" src="https://cdn.botpenguin.com/website-bot.js" defer>673051c63550526a802ca576,673051911db6dc41403ff096</script>
    @include('sweetalert::alert');
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard">COMPANY NAME</a>
            </div>

            <div class="header-right">
                <a href="admin_logout" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>
            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="{{url('admin/assets/img/user.png')}}" class="img-thumbnail" />

                            <div class="inner-text">
                                <?php //echo $_SESSION['aname']
                                ?>
                                <br />
                                <small>Hi .. {{session()->get('ses_adminname')}} </small>
                            </div>
                        </div>

                    </li>


                    <li>
                        <a class="active-menu" href="dashboard"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-desktop "></i>Categories <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="add_categories"><i class="fa fa-toggle-on"></i>Add</a>
                            </li>
                            <li>
                                <a href="manage_categories"><i class="fa fa-bell "></i>Manage</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-desktop "></i>Service <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="add_service"><i class="fa fa-toggle-on"></i>Add</a>
                            </li>
                            <li>
                                <a href="manage_service"><i class="fa fa-bell "></i>Manage</a>
                            </li>

                        </ul>
                    </li>


                    <li>
                        <a href="manage_user"><i class="fa fa-table "></i>User </a>
                    </li>
                    <li>
                        <a href="manage_contact"><i class="fa fa-table "></i>Contact </a>
                    </li>

                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->