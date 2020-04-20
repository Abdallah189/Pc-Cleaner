<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.brunogarcia.net/templates/3dify/creativeagency/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Nov 2018 10:06:56 GMT -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TEST HTML </title>
	<link href="css/lato.css" rel="stylesheet">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel='stylesheet' href='css/perfect-scrollbar.min.css' />
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/buttons.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/tooltip.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/main.css"/>
    <link href="../../Principale_admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../../plugins/switchery/switchery.min.css" rel="stylesheet" />
    <link href="../../plugins/jquery-circliful/css/jquery.circliful.css" rel="stylesheet" type="text/css" />
    <link href="../../Principale_admin/assets/css/icons.css" rel="stylesheet" type="text/css">
  <link href="../../Principale_admin/assets/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>

	<div class="td-preloading">
		<span class="fa fa-spinner fa-spin"></span>
	</div>
	<div class="td-container">
		<div class="td-menu">
		</div>
		<h1 style="margin-bottom:-4%;color: darkred;font-weight: bold;" id="time">TIME : EXPIRED</h1>

<!--<script>
var countDownDate = new Date().getTime()+3600*1000;;

var x = setInterval(function() {
  var now = new Date().getTime();

  var distance =countDownDate-now;

  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  document.getElementById("time").innerHTML ="TIME :"+ hours + "h "
  + minutes + "m " + seconds + "s ";

  if (distance < 0) {
    clearInterval(x);
    document.getElementById("time").innerHTML = "TIME : EXPIRED";
  }
},1000);
</script>-->
		<div class="td-sheets-container td-hide td-sheet-active-1">
			<div id="scrollbar-container" class="td-sheet active">
				<div class="td-sheet-icon">
					<a href="../../Principale_etudiant/index.php"><i class="ti-microsoft"></i></a>
				</div>
				<div class="td-sheet-title">Menu Pricipale</div>
				
				<div class="container">
					<div class="row site-title">
						<div class="col-md-12 text-center">
                        
							<img src="../img/logo.png" alt="Logo" data-animation="fadeInDown" data-animation-delay="100" width="50%" height="20%"/>
							<h1><span data-animation="lightSpeedIn">TEST HTML5</span></h1>
                            <?php 
                             if (round($_SESSION["score"])>65) {
                                 echo "<h3><span style=\"color:green\" data-animation=\"lightSpeedIn\">Bravo Télécharger votre cetication!!</span></h3>";
                                 echo "<a href=\"cetif.php\"><button>Télecharger</button></a>";
                             }
                             else{
                                echo "<h1><span style=\"color:red\" data-animation=\"lightSpeedIn\">Domage!!</span></h1>";                             }
                            ?>
						</div>
                            
                            <div style="margin-top:-8%" class="col-sm-6 col-xl-6">
                                <div class="widget-simple-chart text-right card-box">
                                    <div style="color:green" class="circliful-chart" data-dimension="90" data-text="<?php echo round($_SESSION["score"])?>%" data-width="5" data-fontsize="14" data-percent="<?php echo $_SESSION["score"]?>" data-fgcolor="green" data-bgcolor="#ebeff2"></div>
                                    <h2 style="text-align:center" class="text-success counter m-t-10"><?php echo round($_SESSION["score"])?></h2>
                                    <h3 class="text-muted text-nowrap m-b-10"> Correct question</h3>
                                </div>
                            </div>        
                            <div style="margin-top:-8%" class="col-sm-6 col-xl-6">
                                <div class="widget-simple-chart text-right card-box">
                                    <div style="color:green" class="circliful-chart" data-dimension="90" data-text="<?php echo 100-round($_SESSION["score"])?>%" data-width="5" data-fontsize="14" data-percent="<?php echo 100-$_SESSION["score"]?>" data-fgcolor="red" data-bgcolor="#ebeff2"></div>
                                    <h2 style="text-align:center" class="text-success counter m-t-10"><?php echo 100-round($_SESSION["score"])?></h2>
                                    <h3 class="text-muted text-nowrap m-b-10"> False question</h3>
                                </div>
                            </div>                        
                        
						
				</div>
				
			</div>
											
					
    <script src="js/jquery.min.js"></script>
	<script src="js/responsive.js"></script>
	<script src="js/perfect-scrollbar.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.visible.min.js"></script>
	<script src="js/script.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/detectanimation.js"></script>
	<script src="js/modernizr.custom.js"></script>
    <script src="../../plugins/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="../../plugins/counterup/jquery.counterup.min.js"></script>
    <script src="../../plugins/jquery-circliful/js/jquery.circliful.min.js"></script>
  <script src="../../plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
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

<!-- Mirrored from www.brunogarcia.net/templates/3dify/creativeagency/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Nov 2018 10:07:10 GMT -->
</html>