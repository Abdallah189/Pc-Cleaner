<!DOCTYPE html>
<html>
    
<!-- Mirrored from coderthemes.com/DevAcademy/blue-dark/apps-calendar.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Oct 2018 08:48:25 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="image/logo.png">

        <title>Dev Academy</title>

        <link href="../plugins/switchery/switchery.min.css" rel="stylesheet" />

        <!--calendar css-->
        <link href="../plugins/fullcalendar/css/fullcalendar.min.css" rel="stylesheet" />

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">

        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body class="fixed-left">

     <?php include 'menu_prin.php'?>
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
                                    <h4 class="page-title">Calendar</h4>
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">DevAcademy</a></li>
                                        <li class="breadcrumb-item"><a href="#">Extras</a></li>
                                        <li class="breadcrumb-item active">Calendar</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-12">

                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="widget">
                                            <div class="widget-body">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <button type="button" data-toggle="modal" data-target="#add-category" class="btn btn-lg btn-primary btn-block waves-effect waves-light">
                                                            <i class="fa fa-plus"></i> Create New
                                                        </button>
                                                        <div id="external-events" class="m-t-20">

                                                            <p>Gérer les évenement est les test a Dev Academy Iset Bizerte</p>
                                                            <?php
                                  try {
                                    $bdd = new PDO('mysql:host=localhost;dbname=pro;charset=utf8', 'root', '');
                                   } catch (Exception $e) {
                                    die('Erreur : ' . $e->getMessage());
                                   }
                                   $i=0;
                                   $corr = $bdd->query('SELECT *FROM even');
                                   
                                   while($data=$corr->fetch()) {
                                    $a =$data["nom_event"];
                                    $cat=$data["cat_event"];
                                    $date=$data["date"];
                                                            echo "<div class=\"external-event bg-danger\" data-class=\"bg-danger\" style=\"position: relative;\">
                                                                <i class=\"fa fa-move\"></i>$a  $cat a $date
                                                                </div>";                                                           
                                                            }
                                                            ?>
                                                            
                                                        </div>

                                                        <!-- checkbox -->
                                                        <div class="checkbox m-t-20">
                                                            <input id="drop-remove" type="checkbox">
                                                            <label for="drop-remove">
                                                                Remove after drop
                                                            </label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end col-->
                                    <div class="col-lg-9">
                                        <div class="card-box">
                                            <div id="calendar"></div>
                                        </div>
                                    </div> <!-- end col -->
                                </div>  <!-- end row -->

                                <!-- BEGIN MODAL -->
                                <div class="modal fade none-border" id="event-modal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h5 class="modal-title mt-0"><strong>Add Event</strong></h5>
                                            </div>
                                            <!-- <div class="modal-body"></div> -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                                                <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal Add Category -->
                                <div class="modal fade none-border" id="add-category">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h5 class="modal-title mt-0"><strong>Add</strong> un Evénement</h5>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" action="event.php">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label class="control-label">Evénement Name</label>
                                                            <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name"/>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="control-label">Evénement Date</label>
                                                            <input class="form-control form-white" placeholder="Enter name" type="date" name="category-date"/>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="control-label">Choose Category </label>
                                                            <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                                            <?php
                                  try {
                                    $bdd = new PDO('mysql:host=localhost;dbname=pro;charset=utf8', 'root', '');
                                   } catch (Exception $e) {
                                    die('Erreur : ' . $e->getMessage());
                                   }
                                   $i=0;
                                   $corr = $bdd->query('SELECT *FROM reussit');
                                   
                                   while($data=$corr->fetch()) {
                                    $a =$data["nom"];
                                    $id=$data["id"];

                                                         echo " 
                                                                <option value=\"$a\">$a</option>";}
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                       <button type="submit" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                                       <button type="submit" class="btn btn-danger waves-effect waves-light save-category">Save</button>
                                                    </div>
                                                </form>
                                            </div>
                                
                                        </div>
                                    </div>
                                </div>
                                <!-- END MODAL -->
                            </div>
                            <!-- end col-12 -->
                        </div> <!-- end row -->

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

        <script src="../plugins/jquery-ui/jquery-ui.min.js"></script>

        <!-- BEGIN PAGE SCRIPTS -->
        <script src="../plugins/moment/moment.js"></script>
        <script src='../plugins/fullcalendar/js/fullcalendar.min.js'></script>
        <script src="assets/pages/jquery.fullcalendar.js"></script>

        <!-- Custom main Js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>

<!-- Mirrored from coderthemes.com/DevAcademy/blue-dark/apps-calendar.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Oct 2018 08:48:28 GMT -->
</html>