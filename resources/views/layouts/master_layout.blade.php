    <!doctype html>
    <html lang="en" dir="ltr">
    <head>
        <!-- META DATA -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- FAVICON -->
        <link rel="shortcut icon" type="image/x-icon" href="" />

        <!-- TITLE -->
        <title>Winners App </title>

        <!-- BOOTSTRAP CSS -->
        <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />

        <!-- STYLE CSS -->
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet"/>
        <link href="{{ asset('assets/css/skin-modes.css') }}" rel="stylesheet"/>
        <link href="{{ asset('assets/css/dark-style.css') }}" rel="stylesheet"/>

        <!-- SIDE-MENU CSS -->
        <link href="{{ asset('assets/css/sidemenu.css') }}" rel="stylesheet">

        <!--C3 CHARTS CSS -->
        <link href="{{ asset('assets/plugins/charts-c3/c3-chart.css') }}" rel="stylesheet"/>

        <!-- P-scroll bar css-->
        <link href="{{ asset('assets/plugins/p-scroll/perfect-scrollbar.css') }}" rel="stylesheet" />

        <!--- FONT-ICONS CSS -->
        <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet"/>

        <!-- SIDEBAR CSS -->
        <link href="{{ asset('assets/plugins/sidebar/sidebar.css') }}" rel="stylesheet">

        <!-- COLOR SKIN CSS -->
        <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/colors/color1.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/datatable/datatables.css') }}">
        <style>
            table{
                width: 100% !important;
            }
        </style>
    </head>

    <body class="dark-mode app sidebar-mini">

        <!-- GLOBAL-LOADER -->
        <div id="global-loader">
            <img src="{{ asset('assets/images/loader.svg') }}" class="loader-img" alt="Loader">
        </div>
        <!-- /GLOBAL-LOADER -->

        <!-- PAGE -->
        <div class="page">
            <div class="page-main">

                <!--APP-SIDEBAR-->
                <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
                <aside class="app-sidebar">
                    <div class="side-header">
                        <a class="header-brand1" href="{{ url('/') }}">
                            <img src="../../assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
                            <img src="../../assets/images/brand/logo-1.png" class="header-brand-img toggle-logo" alt="logo">
                            <img src="../../assets/images/brand/logo-2.png" class="header-brand-img light-logo" alt="logo">
                            <img src="../../assets/images/brand/logo-3.png" class="header-brand-img light-logo1" alt="logo">
                        </a><!-- LOGO -->
                        <a aria-label="Hide Sidebar" class="app-sidebar__toggle ml-auto" data-toggle="sidebar" href="#"></a><!-- sidebar-toggle-->
                    </div>
                    <div class="app-sidebar__user">
                        <div class="dropdown user-pro-body text-center">
                            <div class="user-pic">
                                <img src="../../assets/images/users/10.jpg" alt="user-img" class="avatar-xl rounded-circle">
                            </div>
                            <div class="user-info">
                                <h6 class=" mb-0 text-dark">{{ auth()->user()->name}}</h6>
                                <span class="text-muted app-sidebar__user-name text-sm">Administrator</span>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-navs">
                        <ul class="nav  nav-pills-circle">
                            <li class="nav-item" data-toggle="tooltip" data-placement="top" title="Settings">
                                <a class="nav-link text-center m-2">
                                    <i class="fe fe-settings"></i>
                                </a>
                            </li>
                            <li class="nav-item" data-toggle="tooltip" data-placement="top" title="Chat">
                                <a class="nav-link text-center m-2">
                                    <i class="fe fe-mail"></i>
                                </a>
                            </li>
                            <li class="nav-item" data-toggle="tooltip" data-placement="top" title="Followers">
                                <a class="nav-link text-center m-2">
                                    <i class="fe fe-user"></i>
                                </a>
                            </li>
                            <li class="nav-item" data-toggle="tooltip" data-placement="top" title="Logout">
                                <a class="nav-link text-center m-2" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="fe fe-power"></i>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                        </li>
                    </ul>
                </div>
                <ul class="side-menu">
                    <li><h3>Main</h3></li>
                    <li>
                        <a class="side-menu__item" href="widgets.html"><i class="side-menu__icon ti-home"></i><span class="side-menu__label">Dashboard</span></a>
                    </li>

                    <li><h3>Matches</h3></li>
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon ti-panel"></i><span class="side-menu__label">Matches</span><i class="angle fa fa-angle-right"></i></a>
                        <ul class="slide-menu">
                            <li><a href="{{ route('match.create') }}" class="slide-item"> Add Match</a></li>
                            <li><a href="calendar.html" class="slide-item"> View Matches</a></li>
                        </ul>
                    </li>
                    <li><h3>Leagues</h3></li>
                    <li>
                        <a class="side-menu__item" href="{{ route('league.index') }}"><i class="side-menu__icon ti-home"></i><span class="side-menu__label">Leagues</span></a>
                    </li>
                </ul>
            </aside>
            <!--/APP-SIDEBAR-->

            <!-- Mobile Header -->
            <div class="mobile-header">
                <div class="container-fluid">
                    <div class="d-flex">
                        <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a><!-- sidebar-toggle-->
                        <a class="header-brand" href="index.html">
                            <img src="../../assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
                            <img src="../../assets/images/brand/logo-3.png" class="header-brand-img desktop-logo mobile-light" alt="logo">
                        </a>
                        <div class="d-flex order-lg-2 ml-auto header-right-icons">
                            <button class="navbar-toggler navresponsive-toggler d-md-none" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
                            aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon fe fe-more-vertical text-white"></span>
                        </button>
                        <div class="dropdown profile-1">
                            <a href="#" data-toggle="dropdown" class="nav-link pr-2 leading-none d-flex">
                              <span>
                                 <img src="../../assets/images/users/10.jpg" alt="profile-user" class="avatar  profile-user brround cover-image">
                             </span>
                         </a>
                         <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <div class="drop-heading">
                                <div class="text-center">
                                    <h5 class="text-dark mb-0">Elizabeth Dyer</h5>
                                    <small class="text-muted">Administrator</small>
                                </div>
                            </div>
                            <div class="dropdown-divider m-0"></div>
                            <a class="dropdown-item" href="login.html">
                                <i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
                            </a>
                        </div>
                    </div>
                    <div class="dropdown d-md-flex header-settings">
                        <a href="#" class="nav-link icon " data-toggle="sidebar-right" data-target=".sidebar-right">
                            <i class="fe fe-align-right"></i>
                        </a>
                    </div><!-- SIDE-MENU -->
                </div>
            </div>
        </div>
    </div>
    <div class="mb-1 navbar navbar-expand-lg  responsive-navbar navbar-dark d-md-none bg-white">
        <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
            <div class="d-flex order-lg-2 ml-auto">
                <div class="dropdown d-sm-flex">
                    <a href="#" class="nav-link icon" data-toggle="dropdown">
                        <i class="fe fe-search"></i>
                    </a>
                    <div class="dropdown-menu header-search dropdown-menu-left">
                        <div class="input-group w-100 p-2">
                            <input type="text" class="form-control " placeholder="Search....">
                            <div class="input-group-append ">
                                <button type="button" class="btn btn-primary ">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div><!-- SEARCH -->
                <div class="dropdown d-md-flex">
                    <a class="nav-link icon full-screen-link nav-link-bg">
                        <i class="fe fe-maximize fullscreen-button"></i>
                    </a>
                </div><!-- FULL-SCREEN -->
                <div class="dropdown d-md-flex notifications">
                    <a class="nav-link icon" data-toggle="dropdown">
                        <i class="fe fe-bell"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <div class="notifications-menu">
                            <a class="dropdown-item d-flex pb-3" href="#">
                                <div class="fs-16 text-success mr-3">
                                    <i class="fa fa-thumbs-o-up"></i>
                                </div>
                                <div class="">
                                    <strong>Someone likes our posts.</strong>
                                </div>
                            </a>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item text-center">View all Notification</a>
                    </div>
                </div><!-- NOTIFICATIONS -->
                <div class="dropdown d-md-flex message">
                    <a class="nav-link icon text-center" data-toggle="dropdown">
                        <i class="fe fe-mail"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <div class="message-menu">
                            <a class="dropdown-item d-flex pb-3" href="#">
                                <span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="../../assets/images/users/15.jpg"></span>
                                <div>
                                    <strong>Sanderson</strong> New Schedule Realease......
                                    <div class="small text-muted">
                                        2 days ago
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item text-center">See all Messages</a>
                    </div>
                </div><!-- MESSAGE-BOX -->
            </div>
        </div>
    </div>
    <!-- /Mobile Header -->

    <!--app-content open-->
    <div class="app-content">
        <!-- PAGE-HEADER -->
        <div class="side-app">
        <div class="page-header">
            <div>
                <h1 class="page-title">{{ $pageName }}</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $pageName }}</li>
                </ol>
            </div>
            <div class="d-flex  ml-auto header-right-icons header-search-icon">
                <div class="dropdown d-sm-flex">
                    <a href="#" class="nav-link icon" data-toggle="dropdown">
                        <i class="fe fe-search"></i>
                    </a>
                    <div class="dropdown-menu header-search dropdown-menu-left">
                        <div class="input-group w-100 p-2">
                            <input type="text" class="form-control " placeholder="Search....">
                            <div class="input-group-append ">
                                <button type="button" class="btn btn-primary ">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div><!-- SEARCH -->
                <div class="dropdown d-md-flex">
                    <a class="nav-link icon full-screen-link nav-link-bg">
                        <i class="fe fe-maximize fullscreen-button"></i>
                    </a>
                </div><!-- FULL-SCREEN -->
                <div class="dropdown d-md-flex notifications">
                    <a class="nav-link icon" data-toggle="dropdown">
                        <i class="fe fe-bell"></i>
                        <span class="nav-unread badge badge-success badge-pill">2</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <div class="notifications-menu">
                            <a class="dropdown-item d-flex pb-3" href="#">
                                <div class="fs-16 text-danger mr-3">
                                    <i class="fa fa-cogs"></i>
                                </div>
                                <div class="">
                                    <strong>Server Rebooted</strong>
                                </div>
                            </a>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item text-center">View all Notification</a>
                    </div>
                </div><!-- NOTIFICATIONS -->
                <div class="dropdown d-md-flex message">
                    <a class="nav-link icon text-center" data-toggle="dropdown">
                        <i class="fe fe-mail"></i>
                        <span class="nav-unread badge badge-danger badge-pill">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <div class="message-menu">
                            <a class="dropdown-item d-flex pb-3" href="#">
                                <span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="../../assets/images/users/15.jpg"></span>
                                <div>
                                    <strong>Sanderson</strong> New Schedule Realease......
                                    <div class="small text-muted">
                                        2 days ago
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item text-center">See all Messages</a>
                    </div>
                </div><!-- MESSAGE-BOX -->
                <div class="dropdown profile-1">
                    <a href="#" data-toggle="dropdown" class="nav-link pr-2 leading-none d-flex">
                          <span>
                             <img src="../../assets/images/users/10.jpg" alt="profile-user" class="avatar  profile-user brround cover-image">
                         </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <div class="drop-heading">
                            <div class="text-center">
                                <h5 class="text-dark mb-0">{{ auth()->user()->name }}</h5>
                                <small class="text-muted">Administrator</small>
                            </div>
                        </div>
                        <div class="dropdown-divider m-0"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            <i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
                <div class="dropdown d-md-flex header-settings">
                    <a href="#" class="nav-link icon " data-toggle="sidebar-right" data-target=".sidebar-right">
                        <i class="fe fe-align-right"></i>
                    </a>
                </div><!-- SIDE-MENU -->
            </div>
        </div>

    <!-- PAGE-HEADER END -->
    @yield('content')

    <!-- SIDE-BAR -->
    <div class="sidebar sidebar-right sidebar-animate">
        <div class="p-4 border-bottom">
            <span class="fs-17">Notifications</span>
            <a href="#" class="sidebar-icon text-right float-right" data-toggle="sidebar-right" data-target=".sidebar-right"><i class="fe fe-x"></i></a>
        </div>
        <div class="list d-flex align-items-center border-bottom p-4">
            <div class="">
                <span class="avatar bg-primary brround avatar-md">CH</span>
            </div>
            <div class="wrapper w-100 ml-3">
                <p class="mb-0 d-flex">
                    <b>New Websites is Created</b>
                </p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <i class="mdi mdi-clock text-muted mr-1"></i>
                        <small class="text-muted ml-auto">30 mins ago</small>
                        <p class="mb-0"></p>
                    </div>
                </div>
            </div>
        </div><!-- LIST END -->
        <div class="list d-flex align-items-center p-4">
            <div class="">
                <span class="avatar bg-blue brround avatar-md">U</span>
            </div>
            <div class="wrapper w-100 ml-3">
                <p class="mb-0 d-flex">
                    <b>Prepare for Presentation</b>
                </p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <i class="mdi mdi-clock text-muted mr-1"></i>
                        <small class="text-muted ml-auto">2 days ago</small>
                        <p class="mb-0"></p>
                    </div>
                </div>
            </div>
        </div><!-- LIST END -->
    </div>
    <!-- SIDE-BAR CLOSED -->

    <!-- FOOTER -->
    <footer class="footer">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-md-12 col-sm-12 text-center">
                    Copyright © {{ date('Y')}} <a href="#">winnerApp</a>. Designed by <a href="#"> Bizzle </a> All rights reserved.
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER END -->
</div>


<!-- BACK-TO-TOP -->
<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

<!-- JQUERY JS -->
<script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>

<!-- BOOTSTRAP JS -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/popper.min.js') }}"></script>

<!-- SPARKLINE JS-->
<script src="{{ asset('assets/js/jquery.sparkline.min.js') }}"></script>

<!-- CHART-CIRCLE JS-->
<script src="{{ asset('assets/js/circle-progress.min.js') }}"></script>

<!-- RATING STARJS -->
<script src="{{ asset('assets/plugins/rating/jquery.rating-stars.js') }}"></script>

<!-- CHARTJS CHART JS-->
<script src="{{ asset('assets/plugins/chart/Chart.bundle.js') }}"></script>
<script src="{{ asset('assets/plugins/chart/utils.js') }}"></script>

<!-- PIETY CHART JS-->
<script src="{{ asset('assets/plugins/peitychart/jquery.peity.min.js') }}"></script>
<script src="{{ asset('assets/plugins/peitychart/peitychart.init.js') }}"></script>

<!-- ECHART JS-->
<script src="{{ asset('assets/plugins/echarts/echarts.js') }}"></script>

<!-- SIDE-MENU JS-->
<script src="{{ asset('assets/plugins/sidemenu/sidemenu.js') }}"></script>

<!-- SIDEBAR JS -->
<script src="{{ asset('assets/plugins/sidebar/sidebar.js') }}"></script>

<!-- Perfect SCROLLBAR JS-->
<script src="{{ asset('assets/plugins/p-scroll/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('assets/plugins/p-scroll/pscroll.js') }}"></script>
<script src="{{ asset('assets/plugins/p-scroll/pscroll-1.js') }}"></script>

<!-- APEXCHART JS -->
<script src="{{ asset('assets/js/apexcharts.js') }}"></script>

<!-- INDEX JS -->
<script src="{{ asset('assets/js/index1.js') }}"></script>

<!-- CUSTOM JS -->
<script src="{{ asset('assets/js/custom.js') }}"></script>
        <script src="{{ asset('assets/datatable/datatables.js') }}"></script>
        @stack('scripts')
        @include('sweetalert::alert')
</body>
</html>
