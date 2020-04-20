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
	<link rel="shortcut icon" href="img/cube.png">
	<title>Quiz 1 For Mobile </title>
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
	<link href="../../Principale_admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Lobster|Pacifico" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Lobster|Pacifico|Patua+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Domine|Lobster|Pacifico|Patua+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Domine|Fira+Sans+Condensed|Lobster|Pacifico|Patua+One" rel="stylesheet">
	<style>
	#qui{
		font-family: 'Pacifico', cursive;
		
	}
	</style>
</head>
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
	<div class="td-containern">
		<div class="td-menu">
		</div>
		<h1 style="margin-bottom:-4%;font-family: 'Fira Sans Condensed', sans-serif;font-weight: bold;color:white;font-size:500%;" id="time"></h1>

<script>
var countDownDate = new Date().getTime()+3600*1000/4;

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
</script>
		<div class="td-sheets-container td-hide td-sheet-active-1">
			<div id="scrollbar-container" class="td-sheet active">
				<div class="td-sheet-icon">
					<i class="ti-face-smile"></i>
				</div>
				<div class="td-sheet-title">Challange The Brain</div>
				
				<div class="container">
					<div class="row site-title">
						<div class="col-md-12 text-center">
							<img src="../img/logo.png" alt="Logo" data-animation="fadeInDown" data-animation-delay="100" width="50%" height="20%"/><br><br>
							<h1><span data-animation="lightSpeedIn" id="qui"> TT Quiz</span></h1>
						</div>
						
						<div class="col-md-3 text-center" data-animation="fadeInUp" data-animation-delay="600">
							<div class="button-row text-center" style="margin-left:150%">
								<div><a title="COMMENCER LE QUIZ" onclick="tdNextPage();"></a></div>
							</div>
						</div>
					</div>
					
				</div>
				
			</div>
			
			
				

<?php
try {
  $bdd = new PDO('mysql:host=localhost;dbname=tunisie telecom;charset=utf8', 'root', '');
 } catch (Exception $e) {
  die('Erreur : ' . $e->getMessage());
 }
 $i=1;
 $corr = $bdd->query('SELECT *FROM reponses');
 $quest = array(array('Question' => '','rep1' => '','rep2' => '','rep3' => '','numQues' => ''));
 
 while($data=$corr->fetch()) {
  $quest[$i]["Question"]=$data["Question"];
  $quest[$i]["rep1"]=$data["rep1"];
  $quest[$i]["rep2"]=$data["rep2"];
  $quest[$i]["rep3"]=$data["rep3"];
  $quest[$i]["numQues"]=$data["numQues"];
  $i++;
 }
?>
<?php
 foreach ($quest as $key => $value) {
	 $count=$key;
 }
 $alea = array();
$k=rand(1,$count);
$alea[1] =$k;

for ($i=1; $i < $count+1; $i++) {
  do {
    $k=rand(1,$count);
    $b=1;
    for ($j=1; $j < count($alea)+1; $j++) {
   if ($k==$alea[$j]) {
        $b=0;
      }
    }
  } while ($b==0);
  $alea[$i] =$k;
}
?>
<?php
//var_dump($alea);
$m=$count+1;
$i=1;
foreach ($quest as $key => $value) {

 if($i==1){
		$q=$alea["$i"];	
		$a=$quest["$q"]["rep1"];
		$b=$quest["$q"]["rep2"];
		$c=$quest["$q"]["rep3"];
		$nq="Q".$quest["$q"]["numQues"];
		$q=$quest["$q"]["Question"];
	echo "	<div class=\"td-sheet\">
		<div class=\"td-sheet-icon\">
			<i class=\"ti-themify-favicon\"></i>
		</div>
		<div class=\"td-sheet-title\">Question $i</div>
		<form action=\"test.php\" method=\"post\">
		<div class=\"container\">
			<div class=\"row site-title\">
					<div class=\"col-md-12 text-center\">
					<h2 style=\"font-family: 'Patua One', cursive; text-align: center;text-shadow: 3px 2px blue; font-size: 300%;\">$q</h2><br><br>
					<h3>
					
					<!-- Group of default radios - option 1 -->
					<div class=\"custom-control custom-radio\"style=\"font-family: 'Domine', serif; text-align: center;text-shadow: 3px 2px blue; text-align: justify; text-align: center; font-size:200%;\">
					 <input type=\"radio\" class=\"custom-control-input\" id=\"$nq\" name=\"$nq\"value=\"A\">
					 <label class=\"custom-control-label\" for=\"$nq\">$a</label>
					</div><br>
	
					<!-- Group of default radios - option 2 -->
					<div class=\"custom-control custom-radio\"style=\"font-family: 'Domine', serif; text-align: center;text-shadow: 3px 2px blue; text-align: justify; text-align: center; font-size:200%;\">
					 <input type=\"radio\" class=\"custom-control-input\" id=\"$key\" name=\"$nq\" value=\"B\">
					 <label class=\"custom-control-label\" for=\"$key\">$b</label>
				   </div><br>
	
					<!-- Group of default radios - option 3 -->
				   <div class=\"custom-control custom-radio\"style=\"font-family: 'Domine', serif; text-align: center;text-shadow: 3px 2px blue; text-align: justify; text-align: center; font-size:200%;\">
					 <input type=\"radio\" class=\"custom-control-input\" id=\"$key+101\" name=\"$nq\" value=\"C\">
					 <label class=\"custom-control-label\" for=\"$key+101\">$c</label>
					</div>
					  </h3>
				</div>
				<div class=\"col-md-3 col-md-offset-3 text-center\" data-animation=\"fadeInUp\" data-animation-delay=\"400\">
					<div class=\"button-row text-left\">
						<div><a title=\"PREV\" onclick=\"tdPrevPage();\"></a></div>
					</div>
				</div>
				<div class=\"col-md-3 text-center\" data-animation=\"fadeInUp\" data-animation-delay=\"600\">
					<div class=\"button-row text-left\">
						<div><a title=\"NEXT\" onclick=\"tdNextPage();\"></a></div>
					</div>
				</div>
			</div>
		</div>
	</div>";
	}else if($i==$m) {
	$l=$i-1;
	$q=$alea["$l"];	
	$a=$quest["$q"]["rep1"];
	$b=$quest["$q"]["rep2"];
	$c=$quest["$q"]["rep3"];
	$nq="Q".$quest["$q"]["numQues"];
	$q=$quest["$q"]["Question"];
echo "	<div class=\"td-sheet\">
	<div class=\"td-sheet-icon\">
		<i class=\"ti-themify-favicon\"></i>
	</div>
	<div class=\"td-sheet-title\">Question $key</div>
	
	<div class=\"container\">
		<div class=\"row site-title\">
				<div class=\"col-md-12 text-center\">
				<h2 style=\"font-family: 'Patua One', cursive; text-align: center;text-shadow: 3px 2px blue; font-size: 300%;\">$q</h2><br><br>
				<h3>
				
				<!-- Group of default radios - option 1 -->
				<div class=\"custom-control custom-radio\"style=\"font-family: 'Domine', serif; text-align: center;text-shadow: 3px 2px blue; text-align: justify; text-align: center; font-size:200%;\">
				 <input type=\"radio\" class=\"custom-control-input\" id=\"$nq+1\" name=\"$nq\"value=\"A\">
				 <label class=\"custom-control-label\" for=\"$nq+1\">$a</label>
				</div><br>

				<!-- Group of default radios - option 2 -->
				<div class=\"custom-control custom-radio\"style=\"font-family: 'Domine', serif; text-align: center;text-shadow: 3px 2px blue; text-align: justify; text-align: center; font-size:200%;\">
				 <input type=\"radio\" class=\"custom-control-input\" id=\"$key\" name=\"$nq\" value=\"B\">
				 <label class=\"custom-control-label\" for=\"$key\">$b</label>
			   </div><br>

				<!-- Group of default radios - option 3 -->
			   <div class=\"custom-control custom-radio\"style=\"font-family: 'Domine', serif; text-align: center;text-shadow: 3px 2px blue; text-align: justify; text-align: center; font-size:200%;\">
				 <input type=\"radio\" class=\"custom-control-input\" id=\"$key+101\" name=\"$nq\" value=\"C\">
				 <label class=\"custom-control-label\" for=\"$key+101\">$c</label>
				</div>
				  </h3><br><br>
			</div>
			<input id=\"env\" style=\"width:20%;margin-left:40%;\" type=\"submit\" name=\"\" value=\"Envoyez\" class=\"btn btn-danger btn-lg float-right\">	
		</div>		    
	    </form>
	</div>
</div>";
	}
	if($i!=1 && $i!=$count+1 && $key!=0){
	$q=$alea["$i"];	
	$a=$quest["$q"]["rep1"];
	$b=$quest["$q"]["rep2"];
	$c=$quest["$q"]["rep3"];
	$nq="Q".$quest["$q"]["numQues"];
	$q=$quest["$q"]["Question"];
echo "	<div class=\"td-sheet\">
	<div class=\"td-sheet-icon\">
		<i class=\"ti-themify-favicon\"></i>
	</div>
	<div class=\"td-sheet-title\">Question $key</div>
	
	<div class=\"container\">
		<div class=\"row site-title\">
				<div class=\"col-md-12 text-center\">
				<h2 style=\"font-family: 'Patua One', cursive; text-align: center;text-shadow: 3px 2px blue; font-size: 300%;\">$q</h2><br><br>
				<h3>
				
				<!-- Group of default radios - option 1 -->
				<div class=\"custom-control custom-radio\" style=\"font-family: 'Domine', serif; text-align: center;text-shadow: 3px 2px blue; text-align: justify; text-align: center; font-size:200%;\">
				 <input type=\"radio\" class=\"custom-control-input\" id=\"$nq\" name=\"$nq\"value=\"A\" width=\"100%\" width=\"48\" height=\"48\">
				 <label class=\"custom-control-label\" for=\"$nq\">$a</label>
				</div><br>

				<!-- Group of default radios - option 2 -->
				<div class=\"custom-control custom-radio\" style=\"font-family: 'Domine', serif; text-align: center;text-shadow: 3px 2px blue; text-align: justify;text-align: center; font-size:200%;\">
				 <input type=\"radio\" class=\"custom-control-input\" id=\"$key\" name=\"$nq\" value=\"B\">
				 <label class=\"custom-control-label\" for=\"$key\">$b</label>
			   </div><br>

				<!-- Group of default radios - option 3 -->
			   <div class=\"custom-control custom-radio\" style=\"font-family: 'Domine', serif; text-align: center;text-shadow: 3px 2px blue; text-align: justify;text-align: center; font-size:200%;\">
				 <input type=\"radio\" class=\"custom-control-input\" id=\"$key+101\" name=\"$nq\" value=\"C\">
				 <label class=\"custom-control-label\" for=\"$key+101\">$c</label>
				</div>
				  </h3>
			</div>
			<div class=\"col-md-3 col-md-offset-3 text-center\" data-animation=\"fadeInUp\" data-animation-delay=\"400\">
				<div class=\"button-row text-left\">
					<div><a title=\"PREV\" onclick=\"tdPrevPage();\"></a></div>
				</div>
			</div>
			<div class=\"col-md-3 text-center\" data-animation=\"fadeInUp\" data-animation-delay=\"600\">
				<div class=\"button-row text-left\">
					<div><a title=\"NEXT\" onclick=\"tdNextPage();\"></a></div>
				</div>
			</div>
		</div>
	</div>
</div>";
}
$i++;
}
?>
										
											
					
    <script src="js/jquery.min.js"></script>
	<script src="js/responsive.js"></script>
	<script src="js/perfect-scrollbar.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.visible.min.js"></script>
	<script src="js/script.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/detectanimation.js"></script>
	<script src="js/modernizr.custom.js"></script>
</body>

<!-- Mirrored from www.brunogarcia.net/templates/3dify/creativeagency/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Nov 2018 10:07:10 GMT -->
</html>