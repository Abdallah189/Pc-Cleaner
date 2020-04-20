<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V2</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!--===============================================================================================-->
<style>

body, html {
    height: 100%;
    margin: 0;
}

.bg {

    background-image: url("new-abon.jpg");

    
    height: 100%; 

    
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.right{
float:right;
margin-right: 15%;
}

.vid{
float:left;
margin-left: 16.68%;
margin-top: 15.2%;
border-radius: 10%;
position: absolute;

}
.log{
	
	display: block;
 margin-top:-20%;
  margin-left: auto;
  margin-right: auto;

}
</style>

</head>
<body>
	<div class="bg" class="rounded" content="width=device-width, initial-scale=1.0">
   
		<div class="vid" class="shadow p-3 mb-5 bg-white rounded" >	
<video class="embed-responsive-item" media="all and (max-width:600px)" width="41.7%" height="16.4%" loop autoplay>
	<source src="vid.mp4" type="video/mp4">

<div class="shadow"></div>
   </div>
   




		<div class="right">
		<div class="limiter">
			<div class="container-login100">
				<div class="wrap-login100">
					<form class="login100-form validate-form">
						<img src="logo.png" width="50%" class="log" height="20%" alt="">
						
						<span class="login100-form-title p-b-26">
							Welcome To TT QUIZ
						</span>
						<span class="login100-form-title p-b-48">
						
						</span>
	                   <form action="logi.php" method="post">
						<div class="wrap-input100 validate-input" data-validate="Enter TTNumber" >
							<input class="input100" type="number" name="tel">
							<span class="focus-input100" data-placeholder="Numero TT"></span>
						</div>
	
						<div class="wrap-input100 validate-input" data-validate="Enter password">
							<span class="btn-show-pass">
								<i class="zmdi zmdi-eye"></i>
							</span>
							<input class="input100" type="password" name="pass">
							<span class="focus-input100" data-placeholder="Password"></span>
						</div>
	
						<div class="container-login100-form-btn">
							<div class="wrap-login100-form-btn">
								<div class="login100-form-bgbtn"></div>
								<button type="submit" class="login100-form-btn">
								 Login
								</button>								
							</div>
						</div>
						</form>
						<div class="text-center p-t-115">
							<span class="txt1">
								Don’t have an account?
							</span>
	
							<a class="txt2" href="#">
								Sign Up
							</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	
	</div>
	</div>
		

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=ttquiz;charset=utf8', 'root', '');
   } catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
   }
   $i=0;
   $corr = $bdd->query('SELECT *FROM client');
   $abd=false;
   if (!empty($_GET["tel"])&&!empty($_GET["pass"])) {
	$log=$_GET["tel"];
	$pas=$_GET["pass"];
   

   while($data=$corr->fetch()) {
    if (($data["logi"]==$log)&&($data["mdp"]==$pas)) {
      $_SESSION["nom"] =$data["nom_prenom"];
	  $_SESSION["cin"] =$data["cin"];
	  $_SESSION["tel"] =$_GET["tel"];
      $_SESSION["login"] =$data["logi"];
      $i=1;
	 $abd=true;
	 echo "<script type='text/javascript'>swal(\"wrong password !\", \"Try Again!\", \"error\");</script>";
	 echo "<script type='text/javascript'>swal({
		title: \"Hello".$_SESSION["nom"]."\",
		text: \"Are you sure You want to accede to your account ?\",
		icon: \"warning\",
		buttons: true,
		dangerMode: true,
	  })
	  .then((willDelete) => {
		if (willDelete) {
		  swal(\"Welcome! Have a Good Day We wish you a good luck!\", {
			icon: \"success\",
		  });
		} else {
		  swal(\"Good By!\");
		}
	  });</script>";
	 //header ('Location:../quizl/index.php');
	 echo "<script type='text/javascript'>document.location.replace('../Quizfin/');</script>";
	}
	else if (($data["logi"]==$log)&&($data["mdp"]!=$pas)) {
	   echo "<script type='text/javascript'>swal(\"wrong password !\", \"Try Again!\", \"error\");</script>";
	  }
	else {
		echo "<script type='text/javascript'>swal(\"Your number dosn't TT !\", \"Try Again!\", \"error\");</script>";
	}
}
   }
?>