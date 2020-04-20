<!DOCTYPE html>
<html>
    
<!-- Mirrored from coderthemes.com/DevAcademy/blue-dark/apps-team.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Oct 2018 08:48:28 GMT -->
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
                                    <h4 class="page-title">Team</h4>
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">DevAcademy</a></li>
                                        <li class="breadcrumb-item"><a href="#">Extras</a></li>
                                        <li class="breadcrumb-item active">Team</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                                
                                 <?php
                                  try {
                                    $bdd = new PDO('mysql:host=localhost;dbname=pro;charset=utf8', 'root', '');
                                   } catch (Exception $e) {
                                    die('Erreur : ' . $e->getMessage());
                                   }
                                   $i=1;
                                   $corr = $bdd->query('SELECT *FROM etudiant');
                                   while($data=$corr->fetch()) {
                                    $a =$data["nom_prenom"];
                                    $b =$data["num_carte"];
                                    $c =$data["cin"];
                                    $d =$data["cin"];
                                    $e=$data["email"];
                                    $f =$data["tel"];
                                    $id=$data["num"];
                                    if($data["etat"]==1){
                                   echo" <div class=\"col-lg-4 col-md-6\">
                                    <div class=\"text-center card-box\">
                                        <div class=\"member-card\">
                                            <div class=\"thumb-lg member-thumb m-b-10 center-page\">
                                                <img src=\"assets/images/users/avatar-3.png\" class=\"rounded-circle img-thumbnail\" alt=\"profile-image\">
                                            </div>
    
                                            <div class=\"\">
                                                <h4 class=\"m-b-5 mt-2\">$a</h4>
                                                <p class=\"text-muted\">Etudiant</p>
                                            </div>
                                            
                                            <button type=\"button\" class=\"btn btn-success btn-sm w-sm waves-effect m-t-10 waves-light\">Message</button>
                                            <a href=\"super.php?id=" . $data["num"]. "\"><button type=\"\" class=\"btn btn-danger btn-sm w-sm waves-effect m-t-10 waves-light\">Supprmer</button></a>
                                            
                                            <div class=\"text-left m-t-40\">
                                                <p class=\"text-muted font-13\"><strong>Full Name :</strong> <span class=\"m-l-15\">$a</span></p>
    
                                                <p class=\"text-muted font-13\"><strong>Mobile :</strong><span class=\"m-l-15\">(216) $f</span></p>
    
                                                <p class=\"text-muted font-13\"><strong>Email :</strong> <span class=\"m-l-15\">$e</span></p>
    
                                                <p class=\"text-muted font-13\"><strong>Location :</strong> <span class=\"m-l-15\">TN</span></p>
                                            </div>
    
                                            <ul class=\"social-links list-inline m-t-30 mb-0\">
                                                <li class=\"list-inline-item\">
                                                    <a title=\"\" data-placement=\"top\" data-toggle=\"tooltip\" class=\"tooltips\" href=\"#\" data-original-title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a>
                                                </li>
                                                <li class=\"list-inline-item\">
                                                    <a title=\"\" data-placement=\"top\" data-toggle=\"tooltip\" class=\"tooltips\" href=\"#\" data-original-title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a>
                                                </li>
                                                <li class=\"list-inline-item\">
                                                    <a title=\"\" data-placement=\"top\" data-toggle=\"tooltip\" class=\"tooltips\" href=\"#\" data-original-title=\"Skype\"><i class=\"fa fa-skype\"></i></a>
                                                </li>
                                            </ul>
    
                                        </div>
    
                                    </div> <!-- end card-box -->
                                </div> <!-- end col -->";}
    
                                   }
                                 ?>

                           

                           
                           
                            

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

<!-- Mirrored from coderthemes.com/DevAcademy/blue-dark/apps-team.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Oct 2018 08:48:28 GMT -->
</html>