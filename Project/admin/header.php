<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">COMPANY NAME</a>
            </div>

            <div class="header-right">

                <a href="message-task.php" class="btn btn-info" title="New Message"><b>30 </b><i class="fa fa-envelope-o fa-2x"></i></a>
                <a href="message-task.php" class="btn btn-primary" title="New Task"><b>40 </b><i class="fa fa-bars fa-2x"></i></a>
                <a href="login.php" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>

            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/user.png" class="img-thumbnail" />

                            <div class="inner-text">
                                Jhon Deo Alex
                            <br />
                                <small>Last Login : 2 Weeks Ago </small>
                            </div>
                        </div>

                    </li>


                    <li>
                        <a class="active-menu" href="dashboard"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-desktop "></i>Main Categories <span class="fa arrow"></span></a>
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
                        <a href="#"><i class="fa fa-desktop "></i>Sub Categories <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="add_subcategories"><i class="fa fa-toggle-on"></i>Add</a>
                            </li>
                            <li>
                                <a href="manage_subcategories"><i class="fa fa-bell "></i>Manage</a>
                            </li>
                            
                        </ul>
                    </li>
					<li>
                        <a href="#"><i class="fa fa-desktop "></i>Videos <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="add_videos"><i class="fa fa-toggle-on"></i>Add</a>
                            </li>
                            <li>
                                <a href="manage_videos"><i class="fa fa-bell "></i>Manage</a>
                            </li>
                            
                        </ul>
                    </li>
						 					
                    <li>
                        <a href="manage_user"><i class="fa fa-table "></i>User </a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-desktop "></i>Employee <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="add_employee"><i class="fa fa-toggle-on"></i>Add</a>
                            </li>
                            <li>
                                <a href="manage_employee"><i class="fa fa-bell "></i>Manage</a>
                            </li>
                            
                        </ul>
                    </li> 
					<li>
                        <a href="manage_watchlist"><i class="fa fa-table "></i>Watchlist</a>
                    </li>
					<li>
                        <a href="manage_download"><i class="fa fa-table "></i>Download</a>
                    </li>
					<li>
                        <a href="manage_comment"><i class="fa fa-table "></i>Comment</a>
                    </li>	
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->