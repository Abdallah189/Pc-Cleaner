<!DOCTYPE html>
<html>
    
<!-- Mirrored from coderthemes.com/DevAcademy/blue-dark/apps-filemanager.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Oct 2018 08:48:13 GMT -->
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
                        <a href="index.php" class="logo"><img width="95%" src="image/logo.png" alt="">
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
                                   
                                    <li><a href="apps-companies.php">Companies</a></li>
                                    <li><a href="apps-filemanager.php">File Manager</a></li>
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
                                    <i class="ti-map"></i><span> Maps </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="list-unstyled">
                                    <li><a href="map-google.php"> Google Maps</a></li>
                         
                                </ul>
                            </li>

                                    <li><a href="extras-profile.php">Profile</a></li>
                                    <li><a href="extras-timeline.php">Timeline</a></li>
                                    <li><a href="extras-coming-soon.php">Coming-soon</a></li>
                        
                              
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
                                    <h4 class="page-title">File Manager</h4>
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">DevAcademy</a></li>
                                        <li class="breadcrumb-item"><a href="#">Apps</a></li>
                                        <li class="breadcrumb-item active">File Manager</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <div class="fileupload btn btn-success waves-effect waves-light btn-sm mb-3">
                                        <span><i class="ion-upload m-r-5"></i>Upload Files</span>
                                        <input type="file" class="upload">
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-centered mb-0">
                                            <thead class="font-13 bg-light text-muted">
                                                <tr>
                                                    <th class="font-weight-medium">File Name</th>
                                                    <th class="font-weight-medium">Date Modified</th>
                                                    <th class="font-weight-medium">Size</th>
                                                    <th class="font-weight-medium">Contributors</th>
                                                    <th class="font-weight-medium text-center" style="width: 110px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <img src="assets/images/file_icons/pdf.svg" height="30" alt="icon" class="mr-2">
                                                        <a href="javascript:void(0);" class="text-dark">Invoice-project.pdf</a>
                                                    </td>
                                                    <td class="text-muted font-13">17-Jan-18 2:55 PM</td>
                                                    <td>2.31 MB</td>
                                                    <td>
                                                        <img src="assets/images/users/avatar-4.jpg" alt="task-user" class="thumb-sm img-thumbnail rounded-circle"> 
                                                        <img src="assets/images/users/avatar-6.jpg" alt="task-user" class="thumb-sm img-thumbnail rounded-circle"> 
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="btn btn-link font-18 text-muted btn-sm">
                                                            <i class="mdi mdi-close"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="btn btn-link font-18 text-muted btn-sm">
                                                            <i class="mdi mdi-pencil"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="assets/images/file_icons/png.svg" height="30" alt="icon" class="mr-2">
                                                        <a href="javascript:void(0);" class="text-dark">Dashboard-design.png</a>
                                                    </td>
                                                    <td class="text-muted font-13">21-May-18 1:12 PM</td>
                                                    <td>3.89 MB</td>
                                                    <td>
                                                        <img src="assets/images/users/avatar-5.jpg" alt="task-user" class="thumb-sm img-thumbnail rounded-circle"> 
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="btn btn-link font-18 text-muted btn-sm">
                                                            <i class="mdi mdi-close"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="btn btn-link font-18 text-muted btn-sm">
                                                            <i class="mdi mdi-pencil"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="assets/images/file_icons/psd.svg" height="30" alt="icon" class="mr-2">
                                                        <a href="javascript:void(0);" class="text-dark">Graphic-logo-main.psd</a>
                                                    </td>
                                                    <td class="text-muted font-13">23-May-18 11:34 AM</td>
                                                    <td>125 MB</td>
                                                    <td>
                                                        <img src="assets/images/users/avatar-1.jpg" alt="task-user" class="thumb-sm img-thumbnail rounded-circle"> 
                                                        <img src="assets/images/users/avatar-2.jpg" alt="task-user" class="thumb-sm img-thumbnail rounded-circle"> 
                                                        <img src="assets/images/users/avatar-3.jpg" alt="task-user" class="thumb-sm img-thumbnail rounded-circle"> 
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="btn btn-link font-18 text-muted btn-sm">
                                                            <i class="mdi mdi-close"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="btn btn-link font-18 text-muted btn-sm">
                                                            <i class="mdi mdi-pencil"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="assets/images/file_icons/avi.svg" height="30" alt="icon" class="mr-2">
                                                        <a href="javascript:void(0);" class="text-dark">Audio-video-file.avi</a>
                                                    </td>
                                                    <td class="text-muted font-13">18-Feb-18 4:29 PM</td>
                                                    <td>12.3 MB</td>
                                                    <td>
                                                        <img src="assets/images/users/avatar-7.jpg" alt="task-user" class="thumb-sm img-thumbnail rounded-circle"> 
                                                        <img src="assets/images/users/avatar-8.jpg" alt="task-user" class="thumb-sm img-thumbnail rounded-circle"> 
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="btn btn-link font-18 text-muted btn-sm">
                                                            <i class="mdi mdi-close"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="btn btn-link font-18 text-muted btn-sm">
                                                            <i class="mdi mdi-pencil"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <img src="assets/images/file_icons/pdf.svg" height="30" alt="icon" class="mr-2">
                                                        <a href="javascript:void(0);" class="text-dark">Holiday-trip-expenses.pdf</a>
                                                    </td>
                                                    <td class="text-muted font-13">10-Apr-18 1:12 PM</td>
                                                    <td>256 KB</td>
                                                    <td>
                                                        <img src="assets/images/users/avatar-6.jpg" alt="task-user" class="thumb-sm img-thumbnail rounded-circle"> 
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="btn btn-link font-18 text-muted btn-sm">
                                                            <i class="mdi mdi-close"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="btn btn-link font-18 text-muted btn-sm">
                                                            <i class="mdi mdi-pencil"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="assets/images/file_icons/txt.svg" height="30" alt="icon" class="mr-2">
                                                        <a href="javascript:void(0);" class="text-dark">File-changes-notes.txt</a>
                                                    </td>
                                                    <td class="text-muted font-13">17-Jan-18 2:55 PM</td>
                                                    <td>57.3 MB</td>
                                                    <td>
                                                        <img src="assets/images/users/avatar-9.jpg" alt="task-user" class="thumb-sm img-thumbnail rounded-circle"> 
                                                        <img src="assets/images/users/avatar-10.jpg" alt="task-user" class="thumb-sm img-thumbnail rounded-circle"> 
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="btn btn-link font-18 text-muted btn-sm">
                                                            <i class="mdi mdi-close"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="btn btn-link font-18 text-muted btn-sm">
                                                            <i class="mdi mdi-pencil"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="assets/images/file_icons/eps.svg" height="30" alt="icon" class="mr-2">
                                                        <a href="javascript:void(0);" class="text-dark">Eps-file-formate.eps</a>
                                                    </td>
                                                    <td class="text-muted font-13">21-Jun-18 1:12 PM</td>
                                                    <td>429 MB</td>
                                                    <td>
                                                        <img src="assets/images/users/avatar-1.jpg" alt="task-user" class="thumb-sm img-thumbnail rounded-circle"> 
                                                        <img src="assets/images/users/avatar-2.jpg" alt="task-user" class="thumb-sm img-thumbnail rounded-circle"> 
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="btn btn-link font-18 text-muted btn-sm">
                                                            <i class="mdi mdi-close"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="btn btn-link font-18 text-muted btn-sm">
                                                            <i class="mdi mdi-pencil"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="assets/images/file_icons/dll.svg" height="30" alt="icon" class="mr-2">
                                                        <a href="javascript:void(0);" class="text-dark">Software-activation.dll</a>
                                                    </td>
                                                    <td class="text-muted font-13">23-May-18 11:34 AM</td>
                                                    <td>58 KB</td>
                                                    <td>
                                                        <img src="assets/images/users/avatar-3.jpg" alt="task-user" class="thumb-sm img-thumbnail rounded-circle"> 
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="btn btn-link font-18 text-muted btn-sm">
                                                            <i class="mdi mdi-close"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="btn btn-link font-18 text-muted btn-sm">
                                                            <i class="mdi mdi-pencil"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="assets/images/file_icons/sql.svg" height="30" alt="icon" class="mr-2">
                                                        <a href="javascript:void(0);" class="text-dark">Database-db.sql</a>
                                                    </td>
                                                    <td class="text-muted font-13">18-July-18 4:29 PM</td>
                                                    <td>89.3 MB</td>
                                                    <td>
                                                        <img src="assets/images/users/avatar-9.jpg" alt="task-user" class="thumb-sm img-thumbnail rounded-circle"> 
                                                        <img src="assets/images/users/avatar-10.jpg" alt="task-user" class="thumb-sm img-thumbnail rounded-circle"> 
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="btn btn-link font-18 text-muted btn-sm">
                                                            <i class="mdi mdi-close"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="btn btn-link font-18 text-muted btn-sm">
                                                            <i class="mdi mdi-pencil"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <img src="assets/images/file_icons/zip.svg" height="30" alt="icon" class="mr-2">
                                                        <a href="javascript:void(0);" class="text-dark">DevAcademy-latest.zip</a>
                                                    </td>
                                                    <td class="text-muted font-13">10-Aug-18 1:12 PM</td>
                                                    <td>248 MB</td>
                                                    <td>
                                                        <img src="assets/images/users/avatar-4.jpg" alt="task-user" class="thumb-sm img-thumbnail rounded-circle">
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="btn btn-link font-18 text-muted btn-sm">
                                                            <i class="mdi mdi-close"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="btn btn-link font-18 text-muted btn-sm">
                                                            <i class="mdi mdi-pencil"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

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

<!-- Mirrored from coderthemes.com/DevAcademy/blue-dark/apps-filemanager.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Oct 2018 08:48:21 GMT -->
</html>