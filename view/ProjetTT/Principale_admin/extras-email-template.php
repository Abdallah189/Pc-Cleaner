<!DOCTYPE html>
<html>
    
<!-- Mirrored from coderthemes.com/DevAcademy/blue-dark/extras-email-template.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Oct 2018 08:50:34 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="image/logo.png">

        <title>Dev Academy</title>

        <link href="../plugins/switchery/switchery.min.css" rel="stylesheet" />

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">

        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="index.php" class="logo"><img width="95%" src="image/logo.png" alt=""></a>
                    </div>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <nav class="navbar-custom">

                    <ul class="list-inline float-right mb-0">

                        <li class="list-inline-item notification-list hide-phone">
                            <a class="nav-link waves-light waves-effect" href="#" id="btn-fullscreen">
                                <i class="mdi mdi-crop-free noti-icon"></i>
                            </a>
                        </li>

                        <li class="list-inline-item notification-list">
                            <a class="nav-link right-bar-toggle waves-light waves-effect" href="#">
                                <i class="mdi mdi-dots-horizontal noti-icon"></i>
                            </a>
                        </li>

                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <i class="mdi mdi-bell noti-icon"></i>
                                <span class="badge badge-pink noti-icon-badge">4</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg" aria-labelledby="Preview">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="font-16"><span class="badge badge-danger float-right">5</span>Notification</h5>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-comment-account"></i></div>
                                    <p class="notify-details">Robert S. Taylor commented on Admin<small class="text-muted">1 min ago</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info"><i class="mdi mdi-account"></i></div>
                                    <p class="notify-details">New user registered.<small class="text-muted">1 min ago</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger"><i class="mdi mdi-airplane"></i></div>
                                    <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">1 min ago</small></p>
                                </a>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item notify-all">
                                    View All
                                </a>

                            </div>
                        </li>

                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <img src="assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="text-overflow"><small>Welcome ! John</small> </h5>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-account"></i> <span>Profile</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-settings"></i> <span>Settings</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-lock-open"></i> <span>Lock Screen</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-logout"></i> <span>Logout</span>
                                </a>

                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-light waves-effect">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </li>
                        <li class="hide-phone app-search">
                            <form role="search" class="">
                                <input type="text" placeholder="Search..." class="form-control">
                                <a href="#"><i class="fa fa-search"></i></a>
                            </form>
                        </li>
                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li class="menu-title">Main</li>

                            <li>
                                <a href="index.php" class="waves-effect waves-primary">
                                    <i class="ti-home"></i><span> Dashboard </span>
                                </a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect waves-primary">
                                    <i class="ti-shine"></i><span> Apps </span> 
                                    <span class="badge badge-pink pull-right">New</span> 
                                </a>
                                <ul class="list-unstyled">
                                    <li><a href="apps-kanban.php">Kanban Board</a></li>
                                    <li><a href="apps-companies.php">Companies</a></li>
                                    <li><a href="apps-filemanager.php">File Manager</a></li>
                                    <li><a href="apps-tickets.php">Tickets</a></li>
                                    <li><a href="apps-calendar.php">Calendar</a></li>
                                    <li><a href="apps-team.php">Team Members</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect waves-primary">
                                    <i class="ti-email"></i><span> Mail </span> 
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="list-unstyled">
                                    <li><a href="mail-inbox.php">Inbox</a></li>
                                    <li><a href="mail-compose.php">Compose Mail</a></li>
                                    <li><a href="mail-read.php">View Mail</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect waves-primary">
                                    <i class="ti-paint-bucket"></i> <span> UI Kit </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="list-unstyled">
                                    <li><a href="ui-buttons.php">Buttons</a></li>
                                    <li><a href="ui-cards.php">Cards</a></li>
                                    <li><a href="ui-portlets.php">Portlets</a></li>
                                    <li><a href="ui-checkbox-radio.php">Checkboxs-Radios</a></li>
                                    <li><a href="ui-tabs.php">Tabs & Accordions</a></li>
                                    <li><a href="ui-modals.php">Modals</a></li>
                                    <li><a href="ui-progressbars.php">Progress Bars</a></li>
                                    <li><a href="ui-notification.php">Notification</a></li>
                                    <li><a href="ui-bootstrap.php">BS Elements</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="typography.php" class="waves-effect waves-primary">
                                    <i class="ti-infinite"></i><span> Typography </span>
                                </a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect waves-primary">
                                    <i class="ti-light-bulb"></i><span> Components </span> 
                                    <span class="menu-arrow"></span> 
                                </a>
                                <ul class="list-unstyled">
                                    <li><a href="components-grid.php">Grid</a></li>
                                    <li><a href="components-carousel.php">Carousel</a></li>
                                    <li><a href="components-widgets.php">Widgets</a></li>
                                    <li><a href="components-nestable-list.php">Nesteble</a></li>
                                    <li><a href="components-range-sliders.php">Range Sliders </a></li>
                                    <li><a href="components-sweet-alert.php">Sweet Alerts </a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect waves-primary">
                                    <i class="ti-pencil-alt"></i><span> Forms </span> 
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="list-unstyled">
                                    <li><a href="form-elements.php">General Elements</a></li>
                                    <li><a href="form-advanced.php">Advanced Form</a></li>
                                    <li><a href="form-validation.php">Form Validation</a></li>
                                    <li><a href="form-wizard.php">Form Wizard</a></li>
                                    <li><a href="form-wysiwig.php">WYSIWYG Editor</a></li>
                                    <li><a href="form-summernote.php">Summernote</a></li>
                                    <li><a href="form-uploads.php">Multiple File Upload</a></li>
                                    <li><a href="form-xeditable.php">X-editable</a></li>
                                </ul>
                            </li>

                            <li class="menu-title">More</li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect waves-primary">
                                    <i class="ti-menu-alt"></i><span> Tables </span> 
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="list-unstyled">
                                    <li><a href="tables-basic.php">Basic Tables</a></li>
                                    <li><a href="tables-datatable.php">Data Table</a></li>
                                    <li><a href="tables-editable.php">Editable Table</a></li>
                                    <li><a href="tables-responsive.php">Responsive Table</a></li>
                                    <li><a href="tables-tablesaw.php">Tablesaw Table</a></li>
                                    <li><a href="tables-foo-tables.php">Foo Table</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect waves-primary">
                                    <i class="ti-stats-up"></i><span> Charts </span> 
                                    <span class="badge badge-primary pull-right">8</span> 
                                </a>
                                <ul class="list-unstyled">
                                    <li><a href="chart-flot.php">Flot Chart</a></li>
                                    <li><a href="chart-morris.php">Morris Chart</a></li>
                                    <li><a href="chart-chartist.php">Chartist chart</a></li>
                                    <li><a href="chart-nvd3.php">Nvd3 charts</a></li>
                                    <li><a href="chart-chartjs.php">Chartjs charts</a></li>
                                    <li><a href="chart-peity.php">Peity Charts</a></li>
                                    <li><a href="chart-sparkline.php">Sparkline Charts</a></li>
                                    <li><a href="chart-other.php">Other Chart</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect waves-primary">
                                    <i class="ti-map"></i><span> Maps </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="list-unstyled">
                                    <li><a href="map-google.php"> Google Maps</a></li>
                                    <li><a href="map-vector.php"> Vector Maps</a></li>
                                    <li><a href="map-mapael.php"> Mapael Maps</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect waves-primary">
                                    <i class="ti-spray"></i> <span> Icons </span> 
                                    <span class="menu-arrow"></span> 
                                </a>
                                <ul class="list-unstyled">
                                    <li><a href="icons-materialdesign.php">Material Design</a></li>
                                    <li><a href="icons-themifyicon.php">Themify Icons</a></li>
                                    <li><a href="icons-ionicons.php">Ion Icons</a></li>
                                    <li><a href="icons-fontawesome.php">Font awesome</a></li>
                                    <li><a href="icons-weather.php">Weather Icons</a></li>
                                </ul>
                            </li>

                            <li class="menu-title">Extras</li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect waves-primary">
                                    <i class="ti-files"></i><span> Pages </span> 
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="list-unstyled">
                                    <li><a href="pages-blank.php">Blank Page</a></li>
                                    <li><a href="pages-login.php">Login</a></li>
                                    <li><a href="pages-register.php">Register</a></li>
                                    <li><a href="pages-recoverpw.php">Recover Password</a></li>
                                    <li><a href="pages-lock-screen.php">Lock Screen</a></li>
                                    <li><a href="pages-confirmmail.php">Confirm Mail</a></li>
                                    <li><a href="pages-404.php">404 Error</a></li>
                                    <li><a href="pages-500.php">500 Error</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect waves-primary">
                                    <i class="ti-gift"></i><span> Extras </span> 
                                    <span class="badge badge-success pull-right">10</span>
                                </a>
                                <ul class="list-unstyled">
                                    <li><a href="extras-profile.php">Profile</a></li>
                                    <li><a href="extras-timeline.php">Timeline</a></li>
                                    <li><a href="extras-invoice.php">Invoice</a></li>
                                    <li><a href="extras-email-template.php">Email template</a></li>
                                    <li><a href="extras-maintenance.php">Maintenance</a></li>
                                    <li><a href="extras-coming-soon.php">Coming-soon</a></li>
                                    <li><a href="extras-gallery.php">Gallery</a></li>
                                    <li><a href="extras-pricing.php">Pricing</a></li>
                                    <li><a href="extras-faq.php">FAQ</a></li>
                                    <li><a href="extras-treeview.php">Treeview</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect">
                                    <i class="ti-share"></i><span>Multi Level </span> 
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li class="has_sub">
                                        <a href="javascript:void(0);" class="waves-effect"><span>Menu Level 1.1</span>  <span class="menu-arrow"></span></a>
                                        <ul>
                                            <li><a href="javascript:void(0);"><span>Menu Level 2.1</span></a></li>
                                            <li><a href="javascript:void(0);"><span>Menu Level 2.2</span></a></li>
                                            <li><a href="javascript:void(0);"><span>Menu Level 2.3</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);"><span>Menu Level 1.2</span></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End -->




            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Email Template</h4>
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">DevAcademy</a></li>
                                        <li class="breadcrumb-item"><a href="#">Extras</a></li>
                                        <li class="breadcrumb-item active">Email Template</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <h4 class="m-t-0 m-b-20 header-title"><b>Basic action email</b></h4>
                                            <a href="email-templates/action.php" target="_blank"> <img src="assets/images/email/1.png" class="img-fluid" alt=""> </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <h4 class="m-t-0 m-b-20 header-title"><b>Email alert</b> </h4>
                                            <a href="email-templates/alert.php" target="_blank"> <img src="assets/images/email/2.png" class="img-fluid" alt=""> </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <h4 class="m-t-0 m-b-20 header-title"><b>Billing email</b></h4>
                                            <a href="email-templates/billing.php" target="_blank"> <img src="assets/images/email/3.png" class="img-fluid" alt=""> </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                    <!-- end container -->
                </div>
                <!-- end content -->

                <footer class="footer">
                    2016 - 2018 © DevAcademy <span class="hide-phone">- Coderthemes.com</span>
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar">
                <div class="">
                    <ul class="nav nav-tabs tabs-bordered nav-justified">
                        <li class="nav-item">
                            <a href="#home-2" class="nav-link active" data-toggle="tab" aria-expanded="false">
                                Activity
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#messages-2" class="nav-link" data-toggle="tab" aria-expanded="true">
                                Settings
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="home-2">
                            <div class="timeline-2">
                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">5 minutes ago</small>
                                        <p><strong><a href="#" class="text-info">John Doe</a></strong> Uploaded a photo <strong>"DSC000586.jpg"</strong></p>
                                    </div>
                                </div>

                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">30 minutes ago</small>
                                        <p><a href="#" class="text-info">Lorem</a> commented your post.</p>
                                        <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                    </div>
                                </div>

                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">59 minutes ago</small>
                                        <p><a href="#" class="text-info">Jessi</a> attended a meeting with<a href="#" class="text-success">John Doe</a>.</p>
                                        <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                    </div>
                                </div>

                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">1 hour ago</small>
                                        <p><strong><a href="#" class="text-info">John Doe</a></strong>Uploaded 2 new photos</p>
                                    </div>
                                </div>

                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">3 hours ago</small>
                                        <p><a href="#" class="text-info">Lorem</a> commented your post.</p>
                                        <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                    </div>
                                </div>

                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">5 hours ago</small>
                                        <p><a href="#" class="text-info">Jessi</a> attended a meeting with<a href="#" class="text-success">John Doe</a>.</p>
                                        <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane" id="messages-2">

                            <div class="row m-t-20">
                                <div class="col-8">
                                    <h5 class="m-0 font-15">Notifications</h5>
                                    <p class="text-muted m-b-0"><small>Do you need them?</small></p>
                                </div>
                                <div class="col-4 text-right">
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#3bafda" data-size="small"/>
                                </div>
                            </div>

                            <div class="row m-t-20">
                                <div class="col-8">
                                    <h5 class="m-0 font-15">API Access</h5>
                                    <p class="m-b-0 text-muted"><small>Enable/Disable access</small></p>
                                </div>
                                <div class="col-4 text-right">
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#3bafda" data-size="small"/>
                                </div>
                            </div>

                            <div class="row m-t-20">
                                <div class="col-8">
                                    <h5 class="m-0 font-15">Auto Updates</h5>
                                    <p class="m-b-0 text-muted"><small>Keep up to date</small></p>
                                </div>
                                <div class="col-4 text-right">
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#3bafda" data-size="small"/>
                                </div>
                            </div>

                            <div class="row m-t-20">
                                <div class="col-8">
                                    <h5 class="m-0 font-15">Online Status</h5>
                                    <p class="m-b-0 text-muted"><small>Show your status to all</small></p>
                                </div>
                                <div class="col-4 text-right">
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#3bafda" data-size="small"/>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- Plugins  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script><!-- Popper for Bootstrap -->
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>

        <!-- Custom main Js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>

<!-- Mirrored from coderthemes.com/DevAcademy/blue-dark/extras-email-template.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Oct 2018 08:50:38 GMT -->
</html>