<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Xadmino - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="{{asset('/backend')}}/images/favicon.ico">

        <!-- DataTables -->
        <link href="{{asset('/backend')}}/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('/backend')}}/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('/backend')}}/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>


        <link href="{{asset('/backend')}}/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="{{asset('/backend')}}/css/icons.css" rel="stylesheet" type="text/css">
        <link href="{{asset('/backend')}}/css/style.css" rel="stylesheet" type="text/css">

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="index.html" class="logo"><img src="{{asset('/backend')}}/images/logo_white_2.png" height="28"></a>
                        <a href="index.html" class="logo-sm"><img src="{{asset('/backend')}}/images/logo_sm.png" height="36"></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button type="button" class="button-menu-mobile open-left waves-effect waves-light">
                                    <i class="ion-navicon"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>
                            <form class="navbar-form pull-left" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control search-bar" placeholder="Search...">
                                </div>
                                <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                            </form>

                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li class="dropdown hidden-xs">
                                    <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                        <i class="fa fa-bell"></i> <span class="badge badge-xs badge-danger">3</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-lg">
                                        <li class="text-center notifi-title">Notification <span class="badge badge-xs badge-success">3</span></li>
                                        <li class="list-group">
                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="media-heading">Your order is placed</div>
                                                 <p class="m-0">
                                                   <small>Dummy text of the printing and typesetting industry.</small>
                                                 </p>
                                              </div>
                                           </a>
                                           <!-- list item-->
                                            <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="media-body clearfix">
                                                    <div class="media-heading">New Message received</div>
                                                    <p class="m-0">
                                                       <small>You have 87 unread messages</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                            <!-- list item-->
                                            <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="media-body clearfix">
                                                    <div class="media-heading">Your item is shipped.</div>
                                                    <p class="m-0">
                                                       <small>It is a long established fact that a reader will</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                           <!-- last list item -->
                                            <a href="javascript:void(0);" class="list-group-item">
                                              <small class="text-primary">See all notifications</small>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="fa fa-crosshairs"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true"><img src="{{asset('/backend')}}/images/users/avatar-1.jpg" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)"> Profile</a></li>
                                        <li><a href="javascript:void(0)"><span class="badge badge-success pull-right">5</span> Settings </a></li>
                                        <li><a href="javascript:void(0)"> Lock screen</a></li>
                                        <li class="divider"></li>
                                        {{-- <li><a href="javascript:void(0)"> Logout</a></li> --}}
                                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a></li>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            @include('backend.slider')
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                   
                    @yield('content');

                </div> <!-- content -->

                <footer class="footer">
                    2016 © Xadmino.
                </footer>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="{{asset('/backend')}}/js/jquery.min.js"></script>
        <script src="{{asset('/backend')}}/js/bootstrap.min.js"></script>
        <script src="{{asset('/backend')}}/js/modernizr.min.js"></script>
        <script src="{{asset('/backend')}}/js/detect.js"></script>
        <script src="{{asset('/backend')}}/js/fastclick.js"></script>
        <script src="{{asset('/backend')}}/js/jquery.slimscroll.js"></script>
        <script src="{{asset('/backend')}}/js/jquery.blockUI.js"></script>
        <script src="{{asset('/backend')}}/js/waves.js"></script>
        <script src="{{asset('/backend')}}/js/wow.min.js"></script>
        <script src="{{asset('/backend')}}/js/jquery.nicescroll.js"></script>
        <script src="{{asset('/backend')}}/js/jquery.scrollTo.min.js"></script>

        <script src="{{asset('/backend')}}/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!-- Datatables-->
        <script src="{{asset('/backend')}}/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="{{asset('/backend')}}/plugins/datatables/dataTables.bootstrap.js"></script>
        <script src="{{asset('/backend')}}/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="{{asset('/backend')}}/plugins/datatables/responsive.bootstrap.min.js"></script>

        <script src="{{asset('/backend')}}/pages/dashborad.js"></script>

        <script src="{{asset('/backend')}}/js/app.js"></script>

    </body>
</html>