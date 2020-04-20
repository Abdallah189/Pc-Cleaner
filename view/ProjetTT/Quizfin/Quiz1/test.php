<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php
//var_dump($_POST['Q2']);
$score=0;
$reponse=array();
if(!empty($_POST['Q1']))
        $reponse[1]=$_POST['Q1'];
else
$reponse[1]='AA';
if(!empty($_POST['Q2']))
        $reponse[2]=$_POST['Q2'];
else
        $reponse[2]='AA';
if(!empty($_POST['Q3']))
        $reponse[3]=$_POST['Q3'];
else
$reponse[3]='AA';
if(!empty($_POST['Q4']))
        $reponse[4]=$_POST['Q4'];
else
$reponse[4]='AA';
if(!empty($_POST['Q5']))
        $reponse[5]=$_POST['Q5'];
else
$reponse[5]='AA';
if(!empty($_POST['Q6']))
        $reponse[6]=$_POST['Q6'];
else
$reponse[6]='AA';
if(!empty($_POST['Q7']))
        $reponse[7]=$_POST['Q7'];
else
$reponse[7]='AA';
if(!empty($_POST['Q8']))
        $reponse[8]=$_POST['Q8'];
else
$reponse[8]='AA';
if(!empty($_POST['Q9']))
        $reponse[9]=$_POST['Q9'];
else
$reponse[9]='AA';
if(!empty($_POST['Q10']))
        $reponse[10]=$_POST['Q10'];
else
$reponse[10]='AA';

        //var_dump($reponse);
       $correction = array();
       $corrid=array(array("rep1"=>'',"rep2"=>'',"rep3"=>'',"ques"=>''));
       $corrquiz = array(array('quescorr' => ' ','base'=>' ','user'=>' '));   
       $fauxquiz = array(array('user' => ' ','base'=>' ','quesfaux'=>' '));        
       try {
        $bdd = new PDO('mysql:host=localhost;dbname=tunisie telecom;charset=utf8', 'root', '');
       } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
       }

       $corr = $bdd->query('SELECT *FROM reponses');
       $i=1;
       while($data=$corr->fetch()) {
        $correction[$i]=$data["reponse"];
        $corrid[$i]["rep1"]=$data["rep1"];
        $corrid[$i]["rep2"]=$data["rep2"];
        $corrid[$i]["rep3"]=$data["rep3"];
        $corrid[$i]["ques"]=$data["Question"];
        $i++;
       }

$crr=1;

        //var_dump($correction);  
        //var_dump($reponse); 
       // var_dump($corrid);   
        
      foreach ($correction as $key => $value) {
           if($value==$reponse[$key]){
            //var_dump($value);
            //var_dump($reponse[$key]);
            //var_dump($key);
                 if ($value == 'A'){ 
                $corrquiz[$crr]['quescorr']= $corrid[$key]["ques"];
                $corrquiz[$crr]['base']= $corrid[$key]["rep1"];
                $corrquiz[$crr]['user']= $corrid[$key]["ques"];} 
                else if ($value == 'B'){ 
                 $corrquiz[$crr]['quescorr']= $corrid[$key]["ques"];
                $corrquiz[$crr]['base']= $corrid[$key]["rep2"];
                $corrquiz[$crr]['user']= $corrid[$key]["ques"];}
                else{ 
                $corrquiz[$crr]['quesfaux']= $corrid[$key]["ques"];
                $corrquiz[$crr]['base']= $corrid[$key]["rep3"];
                $corrquiz[$crr]['user']= $corrid[$key]["ques"];}      
           $score++;
           $crr++;
        }else{
                if ($value == 'A'){ 
                        $fauxquiz[$crr]['quesfaux']= $corrid[$key]["ques"];
                        $fauxquiz[$crr]['base']= $corrid[$key]["rep1"];
                  if ($reponse[$key]=='A') {
                        $fauxquiz[$crr]['user']= $corrid[$key]["rep1"];     
                  }  
                  else if ($reponse[$key]=='B') {
                        $fauxquiz[$crr]['user']= $corrid[$key]["rep2"];  
                  }   
                  else if ($reponse[$key]=='C') {
                        $fauxquiz[$crr]['user']= $corrid[$key]["rep3"];  
                  }   
                 else {
                        $fauxquiz[$crr]['user']= "Vous n'avez aucun reponse";      
                 }
                } 
                        else if ($value == 'B'){ 
                         $fauxquiz[$crr]['quesfaux']= $corrid[$key]["ques"];
                        $fauxquiz[$crr]['base']= $corrid[$key]["rep2"];
                        if ($reponse[$key]=='A') {
                                $fauxquiz[$crr]['user']= $corrid[$key]["rep1"];     
                          }  
                          else if ($reponse[$key]=='B') {
                                $fauxquiz[$crr]['user']= $corrid[$key]["rep2"];  
                          }   
                          else if ($reponse[$key]=='C') {
                                $fauxquiz[$crr]['user']= $corrid[$key]["rep3"];  
                          }   
                         else {
                                $fauxquiz[$crr]['user']= "Vous n'avez aucun reponse";      
                         }
                        }
                        else if ($value == 'C'){ 
                        $fauxquiz[$crr]['quesfaux']= $corrid[$key]["ques"];
                        $fauxquiz[$crr]['base']= $corrid[$key]["rep3"];
                        if ($reponse[$key]=='A') {
                        $fauxquiz[$crr]['user']= $corrid[$key]["rep1"];     
                  }  
                  else if ($reponse[$key]=='B') {
                        $fauxquiz[$crr]['user']= $corrid[$key]["rep2"];  
                  }   
                  else if ($reponse[$key]=='C') {
                        $fauxquiz[$crr]['user']= $corrid[$key]["rep3"];  
                  }   
                 else {
                        $fauxquiz[$crr]['user']= "Vous n'avez aucun reponse";      
                 }
                $crr++;
                } 
        }
       }
       //var_dump($corrquiz);
       //var_dump($fauxquiz);    
  $score=$score*100/10;
  $_SESSION["score"]=$score;


 // var_dump( $_SESSION["score"]);
 // var_dump($score);    

 //header("Location: result.php"); 
  ?>



<!-- Mirrored from www.brunogarcia.net/templates/3dify/creativeagency/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Nov 2018 10:06:56 GMT -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Quiz challange the brain </title>
        <link rel="shortcut icon" href="img/cube.png">
	<link href="css/lato.css" rel="stylesheet">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel='stylesheet' href='css/perfect-scrollbar.min.css' />
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/buttons.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/tooltip.css"/>
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="../css/style1.css"/>
        <link rel="stylesheet" href="css/main.css"/>
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="../../Principale_admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../../plugins/switchery/switchery.min.css" rel="stylesheet" />
    <link href="../../plugins/jquery-circliful/css/jquery.circliful.css" rel="stylesheet" type="text/css" />
    <link href="../../Principale_admin/assets/css/icons.css" rel="stylesheet" type="text/css">
  <link href="../../Principale_admin/assets/css/style.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lobster|Pacifico" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Lobster|Pacifico" rel="stylesheet">
</head>
<style>
.cadau{
        font-family: 'Lobster', cursive;
        color:#008C4A;
}
.ttt{
        font-family: 'Lobster', cursive;      
}
#c,#f{
        font-family: 'Dancing Script', cursive;
}

</style>
<body>

	<div class="td-preloading">
		<span class="fa fa-spinner fa-spin"></span>
        </div>
        <div id="ani" class="purple"></div>
<div id="ani" class="medium-blue"></div>
<div id="ani" class="light-blue"></div>
<div id="ani" class="red"></div>
<div id="ani" class="orange"></div>
<div id="ani" class="yellow"></div>
<div id="ani" class="cyan"></div>
<div id="ani" class="light-green"></div>
<div id="ani" class="lime"></div>
<div id="ani" class="magenta"></div>
<div id="ani" class="lightish-red"></div>
<div id="ani" class="pink"></div>
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
					<a href="../../Login/index.php"><i class="ti-face-smile"></i></a>
				</div>
				<div class="td-sheet-title">Menu Pricipale</div>
				
				<div class="container">
					<div class="row site-title">
						<div class="col-md-12 text-center">
                        
							<img src="../img/logo.png" alt="Logo" data-animation="fadeInDown" data-animation-delay="100" width="50%" height="20%"/>
							<h1><span data-animation="lightSpeedIn" class="ttt">TT QUIZ</span></h1>
                            <?php 
                             if (round($_SESSION["score"])>50 && round($_SESSION["score"])<65) {
                                 echo "<h3><span class=\"cadau\" data-animation=\"lightSpeedIn\">Bravo Vous avez ganez une abonnement TT</span></h3>";
                                 echo "<a href=\"challenge/abon.php\"><button    class=\"btn btn-warning\" style=\"width:35%;height:11%;font-size:150%;\"\">Consultez vous cadaux</button></a>";
                             }
                             else if (round($_SESSION["score"])>64 && round($_SESSION["score"])<75) {
                                echo "<h3><span class=\"cadau\" data-animation=\"lightSpeedIn\">Bravo Vous avez ganez un Téléphone by TT</span></h3>";
                                echo "<a href=\"challenge/tel.php\"><button   class=\"btn btn-warning\" style=\"width:35%;height:11%;font-size:150%;\"\">Consultez vous cadaux</button></a>";
                             }
                             else if (round($_SESSION["score"])>74 && round($_SESSION["score"])<85) {
                                echo "<h3><span class=\"cadau\" data-animation=\"lightSpeedIn\">Bravo Vous avez ganez une PC by TT</span></h3>";
                                echo "<a href=\"challenge/pc.php\"><button  class=\"btn btn-warning\" style=\"width:35%;height:11%;font-size:150%;\"\">Consultez vous cadaux</button></a>";
                             }
                             else if (round($_SESSION["score"])>84) {
                                echo "<h3><span class=\"cadau\" data-animation=\"lightSpeedIn\">Bravo Vous avez ganez un cheque depuis par Tunisie telecom</span></h3>";
                                echo "<a href=\"challenge/cheque.php\"><button class=\"btn btn-warning\"style=\"width:35%;height:11%;font-size:150%;\"\">Consultez vous cadaux</button></a>";
                             }
                             else{
                                echo "<h1><span class=\"cadau\" style=\"color:red\" data-animation=\"lightSpeedIn\">Domage!!</span></h1>";                             }
                            ?>
						</div>
                            
                            <div style="margin-top:-8%" class="col-sm-6 col-xl-6">
                                <div class="widget-simple-chart text-right card-box">
                                    <div style="color:green" class="circliful-chart" data-dimension="90" data-text="<?php echo round($_SESSION["score"])?>%" data-width="5" data-fontsize="14" data-percent="<?php echo $_SESSION["score"]?>" data-fgcolor="green" data-bgcolor="#ebeff2"></div>
                                    <h2 style="text-align:center" class="text-success counter m-t-10"><?php echo round($_SESSION["score"])/10?> </h2>
                                    <h3 class="text-muted text-nowrap m-b-10" id="c"> Correct question</h3>
                                    <table class="table table-bordered" style="color:black">
    <thead>
      <tr>
        <th>Question</th>
        <th>Reponse</th>
      </tr>
    </thead>
    <?php
                                    
                                    
                                       foreach ($corrquiz as $key => $value) {
                                       if ($key != 1) {                    
                                        echo " <tr>
                                        <td style=\"color:blue\">".$value["user"]."</td>
                                        <td style=\"color:green\">".$value["base"]."</td>
                                      </tr>";  
                                }    
                                       }
                                    ?>
                                     </table>
                                </div>
                            </div>        
                            <div style="margin-top:-8%" class="col-sm-6 col-xl-6">
                                <div class="widget-simple-chart text-right card-box">
                                    <div style="color:green" class="circliful-chart" data-dimension="90" data-text="<?php echo 100-round($_SESSION["score"])?>%" data-width="5" data-fontsize="14" data-percent="<?php echo 100-$_SESSION["score"]?>" data-fgcolor="red" data-bgcolor="#ebeff2"></div>
                                    <h2 style="text-align:center" class="text-success counter m-t-10"><?php echo 10-round($_SESSION["score"])/10?></h2>
                                    <h3 class="text-muted text-nowrap m-b-10" id="f"> False question</h3>
                                    <table class="table table-bordered" style="color:black">
    <thead>
      <tr>
        <th>Question</th>
        <th>Reponse</th>
        <th>correct</th>
      </tr>
    </thead>
    <?php
                                    
                                    
                                       foreach ($fauxquiz as $key => $value) {
                                       if ($key != 1) {                    
                                        echo " <tr>
                                        <td style=\"color:blue\">".$value["quesfaux"]."</td>
                                        <td style=\"color:red\">".$value["user"]."</td>
                                        <td style=\"color:green\">".$value["base"]."</td>
                                      </tr>";  
                                }    
                                       }
                                    ?>
                                     </table>
                                </div>
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