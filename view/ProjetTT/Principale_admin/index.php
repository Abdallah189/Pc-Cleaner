<!DOCTYPE html>
<html>
    
<!-- Mirrored from coderthemes.com/Dev Academy/blue-dark/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Oct 2018 08:46:17 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="image/logo.png">

        <title>Dev Academy</title>

        <link href="../plugins/switchery/switchery.min.css" rel="stylesheet" />
        <link href="../plugins/jquery-circliful/css/jquery.circliful.css" rel="stylesheet" type="text/css" />

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">

        <script src="assets/js/modernizr.min.js"></script>
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/millenium.min.css">
    
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link rel="stylesheet" href="css/demo.css">
        
    </head>

<!--color -->
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

                


                        <div class="row">
                            <div class="col-sm-6 col-xl-3">
                                <div class="widget-simple-chart text-right card-box">
                                    <div class="circliful-chart" data-dimension="90" data-text="70%" data-width="5" data-fontsize="14" data-percent="70" data-fgcolor="#5fbeaa" data-bgcolor="#ebeff2"></div>
                                    <h3 class="text-success counter m-t-10">70</h3>
                                    <p class="text-muted text-nowrap m-b-10"> Passer HTML5</p>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xl-3">
                                <div class="widget-simple-chart text-right card-box">
                                    <div class="circliful-chart" data-dimension="90" data-text="46%" data-width="5" data-fontsize="14" data-percent="46" data-fgcolor="#3bafda" data-bgcolor="#ebeff2"></div>
                                    <h3 class="text-primary counter m-t-10">1</h3>
                                    <p class="text-muted text-nowrap m-b-10"> Passer Java</p>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xl-3">
                                <div class="widget-simple-chart text-right card-box">
                                    <div class="circliful-chart" data-dimension="90" data-text="1%" data-width="5" data-fontsize="14" data-percent="1" data-fgcolor="#f76397" data-bgcolor="#ebeff2"></div>
                                    <h3 class="text-pink m-t-10">  <span class="counter">1</span></h3>
                                    <p class="text-muted text-nowrap m-b-10">TAUX de ressuit</p>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xl-3">
                                <div class="widget-simple-chart text-right card-box">
                                    <div class="circliful-chart" data-dimension="90" data-text="1%" data-width="5" data-fontsize="14" data-percent="1" data-fgcolor="#98a6ad" data-bgcolor="#ebeff2"></div>
                                    <h3 class="text-inverse counter m-t-10">1</h3>
                                    <p class="text-muted text-nowrap m-b-10">Pending Orders</p>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->




                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card-box">
                                    <h4 class="text-dark  header-title m-t-0 m-b-30">Total Revenue</h4>

                                    <div class="widget-chart text-center">
                                        <div id="sparkline1"></div>
                                        <ul class="list-inline m-t-15 mb-0">
                                            <li>
                                                <h5 class="text-muted m-t-20">Target</h5>
                                                <h4 class="m-b-0">$56,214</h4>
                                            </li>
                                            <li>
                                                <h5 class="text-muted m-t-20">Last week</h5>
                                                <h4 class="m-b-0">$98,251</h4>
                                            </li>
                                            <li>
                                                <h5 class="text-muted m-t-20">Last Month</h5>
                                                <h4 class="m-b-0">$10,025</h4>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                            <div class="col-xl-4">
                                <div class="card-box">
                                    <h4 class="text-dark  header-title m-t-0 m-b-30">Yearly Sales Report</h4>

                                    <div class="widget-chart text-center">
                                        <div id="sparkline2"></div>
                                        <ul class="list-inline m-t-15 mb-0">
                                            <li>
                                                <h5 class="text-muted m-t-20">Target</h5>
                                                <h4 class="m-b-0">$1000</h4>
                                            </li>
                                            <li>
                                                <h5 class="text-muted m-t-20">Last week</h5>
                                                <h4 class="m-b-0">$523</h4>
                                            </li>
                                            <li>
                                                <h5 class="text-muted m-t-20">Last Month</h5>
                                                <h4 class="m-b-0">$965</h4>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                            <div class="col-xl-4">
                                <div class="card-box">
                                    <h4 class="text-dark header-title m-t-0 m-b-30">Weekly Sales Report</h4>

                                    <div class="widget-chart text-center">
                                        <div id="sparkline3"></div>
                                        <ul class="list-inline m-t-15 mb-0">
                                            <li>
                                                <h5 class="text-muted m-t-20">Target</h5>
                                                <h4 class="m-b-0">$1,84,125</h4>
                                            </li>
                                            <li>
                                                <h5 class="text-muted m-t-20">Last week</h5>
                                                <h4 class="m-b-0">$50,230</h4>
                                            </li>
                                            <li>
                                                <h5 class="text-muted m-t-20">Last Month</h5>
                                                <h4 class="m-b-0">$87,451</h4>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- end row -->



                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-sm-7">
                                            <div class="row">
                                                <div class="col-6 text-center">
                                                    <canvas id="partly-cloudy-day" width="100" height="100"></canvas>
                                                </div>
                                                <div class="col-6">
                                                    <h2 class="m-t-0 text-muted"><b>32°</b></h2>
                                                    <p class="text-muted">Partly cloudy</p>
                                                    <p class="text-muted mb-0">15km/h - 37%</p>
                                                </div>
                                            </div><!-- End row -->
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="row">
                                                <div class="col-4 text-center">
                                                    <h4 class="text-muted m-t-0">SAT</h4>
                                                    <canvas id="cloudy" width="35" height="35"></canvas>
                                                    <h4 class="text-muted">30<i class="wi wi-degrees"></i></h4>
                                                </div>
                                                <div class="col-4 text-center">
                                                    <h4 class="text-muted m-t-0">SUN</h4>
                                                    <canvas id="wind" width="35" height="35"></canvas>
                                                    <h4 class="text-muted">28<i class="wi wi-degrees"></i></h4>
                                                </div>
                                                <div class="col-4 text-center">
                                                    <h4 class="text-muted m-t-0">MON</h4>
                                                    <canvas id="clear-day" width="35" height="35"></canvas>
                                                    <h4 class="text-muted">33<i class="wi wi-degrees"></i></h4>
                                                </div>
                                            </div><!-- end row -->
                                        </div>
                                    </div><!-- end row -->
                                </div>
                            </div> <!-- end col -->

                            <div class="col-lg-6">
                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-sm-7">
                                            <div class="">
                                                <div class="row">
                                                    <div class="col-6 text-center">
                                                        <canvas id="snow" width="100" height="100"></canvas>
                                                    </div>
                                                    <div class="col-6">
                                                        <h2 class="m-t-0 text-muted"><b> 23°</b></h2>
                                                        <p class="text-muted">Partly cloudy</p>
                                                        <p class="text-muted mb-0">15km/h - 37%</p>
                                                    </div>
                                                </div><!-- end row -->
                                            </div><!-- weather-widget -->
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="row">
                                                <div class="col-4 text-center">
                                                    <h4 class="text-muted m-t-0">SAT</h4>
                                                    <canvas id="sleet" width="35" height="35"></canvas>
                                                    <h4 class="text-muted">30<i class="wi wi-degrees"></i></h4>
                                                </div>
                                                <div class="col-4 text-center">
                                                    <h4 class="text-muted m-t-0">SUN</h4>
                                                    <canvas id="fog" width="35" height="35"></canvas>
                                                    <h4 class="text-muted">28<i class="wi wi-degrees"></i></h4>
                                                </div>
                                                <div class="col-4 text-center">
                                                    <h4 class="text-muted m-t-0">MON</h4>
                                                    <canvas id="partly-cloudy-night" width="35" height="35"></canvas>
                                                    <h4 class="text-muted">33<i class="wi wi-degrees"></i></h4>
                                                </div>
                                            </div><!-- End row -->
                                        </div> <!-- col-->
                                    </div><!-- End row -->
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!--end row/ WEATHER -->


                        <div class="row">
                            <div class="col-lg-8">
                                <div class="card-box">
                                    <h4 class="text-dark  header-title m-t-0">Les dernier demande</h4>
                                    <p class="text-muted m-b-25 font-13">
                                       Dev Academy
                                    </p>

                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead>
                                            <tr>
                                                <th>numero</th>
                                                <th>Nom & prenom</th>
                                                <th>email</th>
                                                <th>Carte etudian</th>
                                                <th>Status</th>
                                                <th>Assign</th>
                                            </tr>

                                            </thead>
                                            <tbody>
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
    if($data["etat"]==0){
   echo "<tr>";
   echo "<td>$i</td>";
   echo "<td>$a</td>";
   echo "<td>$e</td>";
   echo "<td>$b</td>";
   echo "<td><form action=\"acepte.php\" method=\"post\">
   <input type=\"radio\" name=\"Acp\" value=\"$e\"> Acepter<br>
   <input type=\"radio\" name=\"Acp\" value=\"$c\">Refusé</td>";
   echo "<td><input type=\"submit\" name=\"submit\" value=\"Confirme\" class=\"btn btn-danger btn-md float-right\"></form></td>";
   echo "</tr>";
   $i++;}
   }
       ?>
                                            
                                           
                                           
    
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -8 -->

                            <div class="col-lg-4">
                                <div class="card-box widget-user">
                                    <div>
                                        <img src="image/kah.jpg" class="img-responsive rounded-circle" alt="user">
                                        <div class="wid-u-info">
                                            <h5 class="mt-0 m-b-5 font-16">Kahled</h5>
                                            <p class="text-muted m-b-5 font-13">@gmail.com</p>
                                            <small class="text-warning"><b>Admin</b></small>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-box widget-user">
                                    <div>
                                        <img src="image/am.jpg" class="img-responsive rounded-circle" alt="user">
                                        <div class="wid-u-info">
                                            <h5 class="mt-0 m-b-5 font-16">Amal</h5>
                                            <p class="text-muted m-b-5 font-13">@gmail.com</p>
                                            <small class="text-success"><b>Admin</b></small>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-box widget-user">
                                    <div>
                                        <img src="image/abd.jpg" class="img-responsive rounded-circle" alt="user">
                                        <div class="wid-u-info">
                                            <h5 class="mt-0 m-b-5 font-16">Abdallah</h5>
                                            <p class="text-muted m-b-5 font-13">@gmail.com</p>
                                            <small class="text-pink"><b>Admin</b></small>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- end row -->


                    </div>
                    <!-- end container -->
                </div>
                <!-- end content -->

                <footer class="footer">
                    2016 - 2018 © Dev Academy <span class="hide-phone">- Coderthemes.com</span>
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

        <!-- Counter Up  -->
        <script src="../plugins/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="../plugins/counterup/jquery.counterup.min.js"></script>

        <!-- circliful Chart -->
        <script src="../plugins/jquery-circliful/js/jquery.circliful.min.js"></script>
        <script src="../plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!-- skycons -->
        <script src="../plugins/skyicons/skycons.min.js" type="text/javascript"></script>

        <!-- Page js  -->
        <script src="assets/pages/jquery.dashboard.js"></script>

        <!-- Custom main Js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
      <!--coulour -->
        <script src="js/setting-demo.js"></script>
	    <script src="js/demo.js"></script>

        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
                $('.circliful-chart').circliful();
            });

            // BEGIN SVG WEATHER ICON
            if (typeof Skycons !== 'undefined'){
                var icons = new Skycons(
                        {"color": "#3bafda"},
                        {"resizeClear": true}
                        ),
                        list  = [
                            "clear-day", "clear-night", "partly-cloudy-day",
                            "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                            "fog"
                        ],
                        i;

                for(i = list.length; i--; )
                    icons.set(list[i], list[i]);
                icons.play();
            };

        </script>


    </body>
</html>