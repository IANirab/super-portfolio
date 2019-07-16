<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Personal PortFolio website :: Admin Template - Developed By WpHostBD.net</title>
    <!--favicon-->
    <link rel="icon" href="{{ asset('panel/images/favicon.ico') }}" type="image/x-icon">
    <!-- Vector CSS -->
    <link href="{{ asset('panel/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet"/>
    <!-- simplebar CSS-->
    <link href="{{ asset('panel/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet"/>
    <!-- Bootstrap core CSS-->
    <link href="{{ asset('panel/css/bootstrap.min.css') }}" rel="stylesheet"/>
    <!-- animate CSS-->
    <link href="{{ asset('panel/css/animate.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Icons CSS-->
    <link href="{{ asset('panel/css/icons.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Sidebar CSS-->
    <link href="{{ asset('panel/css/sidebar-menu.css') }}" rel="stylesheet"/>
    <!-- Custom Style-->
    <link href="{{ asset('panel/css/app-style.css') }}" rel="stylesheet"/>
    <link href="{{ asset('panel/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('panel/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('panel/plugins/fancybox/css/jquery.fancybox.min.css') }}" rel="stylesheet" type="text/css"/>
</head>
<body>
<!-- Start wrapper-->
<div id="wrapper">
    <!--Start sidebar-wrapper-->
    <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
        <div class="brand-logo">
            <a href="https://wphostbd.net" target="_blank">
                <img src="{{ asset('panel/images/logo-icon.png') }}" class="logo-icon" alt="Bangodash">
                <h5 class="logo-text">WpHostBD</h5>
            </a>
        </div>
        <ul class="sidebar-menu do-nicescrol">
            <li class="sidebar-header">MAIN NAVIGATION</li>
            <li>
                <a href="{{ url('/admin') }}" class="waves-effect">
                    <i class="icon-home"></i> <span>Dashboard</span>
                </a>
            </li>

            <li><a href="{{ url('/inbox') }}" class="waves-effect"><i class="fa fa-circle-o text-red"></i> <span>Message</span></a></li>

            <li>
                <a href="javaScript:void();" class="waves-effect">
                    <i class="icon-folder-alt"></i> <span>Blog's</span>
                    <i class="fa fa-angle-left float-right"></i>
                </a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ url('/post-category') }}"><i class="fa fa-circle-o"></i> CateGory</a></li>
                    <li><a href="{{ url('/all-posts') }}"><i class="fa fa-circle-o"></i>  Post's</a></li>
                </ul>
            </li>

            <li>
                <a href="javaScript:void();" class="waves-effect">
                    <i class="icon-folder-alt"></i> <span>About</span>
                    <i class="fa fa-angle-left float-right"></i>
                </a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ url('/about-me') }}"><i class="fa fa-circle-o"></i> About Me</a></li>
                    <li><a href="{{ url('/skills') }}"><i class="fa fa-circle-o"></i> Skill's</a></li>
                </ul>
            </li>

            <li><a href="{{ url('/services-lists') }}" class="waves-effect"><i class="fa fa-circle-o text-red"></i> <span>Services</span></a></li>

            <li>
                <a href="javaScript:void();" class="waves-effect">
                    <i class="icon-folder-alt"></i> <span>PortFolio's</span>
                    <i class="fa fa-angle-left float-right"></i>
                </a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ url('/portfolio-category') }}"><i class="fa fa-circle-o"></i> CateGory</a></li>
                    <li><a href="{{ url('/all-portfolio') }}"><i class="fa fa-circle-o"></i>  PortFolio's</a></li>
                </ul>
            </li>

            <li><a href="{{ url('/all-reviews') }}" class="waves-effect"><i class="fa fa-circle-o text-red"></i> <span>Reviews</span></a></li>

            <li><a href="{{ url('/all-counters') }}" class="waves-effect"><i class="fa fa-circle-o text-red"></i> <span>Counters</span></a></li>

            <li><a href="{{ url('/all-contacts') }}" class="waves-effect"><i class="fa fa-circle-o text-red"></i> <span>Contact</span></a></li>

            <li>
                    <a href="javaScript:void();" class="waves-effect">
                        <i class="icon-folder-alt"></i> <span>Header</span>
                        <i class="fa fa-angle-left float-right"></i>
                    </a>
                    <ul class="sidebar-submenu">
                        <li><a href="{{ url('/header-settings') }}"><i class="fa fa-circle-o"></i> Header Settings</a></li>
                        <li><a href="{{ url('/professions') }}"><i class="fa fa-circle-o"></i>Professions</a></li>
                    </ul>
                </li>

            <li><a href="{{ url('/socials') }}" class="waves-effect"><i class="fa fa-circle-o text-red"></i> <span>Socials</span></a></li>

            <li><a href="{{ url('/meta') }}" class="waves-effect"><i class="fa fa-circle-o text-red"></i> <span>Meta</span></a></li>

            <li><a href="{{ url('/user-settings') }}" class="waves-effect"><i class="fa fa-circle-o text-red"></i> <span>User Settings</span></a></li>

            <li><a href="{{ url('/logout') }}" class="waves-effect"><i class="fa fa-circle-o text-red"></i> <span>Log-Out</span></a></li>

        </ul>
    </div>
    <!--End sidebar-wrapper-->

    <!--Start topbar header-->
    <header class="topbar-nav">
        <nav class="navbar navbar-expand fixed-top gradient-ibiza">
            <ul class="navbar-nav mr-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link toggle-menu" href="javascript:void();">
                        <i class="icon-menu menu-icon"></i>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav align-items-center right-nav-link"></ul>
        </nav>
    </header>
    <!--End topbar header-->

    <div class="clearfix"></div>
