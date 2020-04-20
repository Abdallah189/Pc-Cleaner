<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.brunogarcia.net/templates/3dify/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Nov 2018 10:02:05 GMT -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Challenge the Brain By TT </title>
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
	<link rel="stylesheet" href="css/style1.css"/>
	<link rel="stylesheet" href="css/demo1.css"/>
</head>
<style>
td-container{
	overflow:hidden;
	position:absolute;
	width:100%;
	height:100%;

	background-size:cover;
	perspective:5000px;
}
</style>
<body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-67703558-8', 'auto');
  ga('send', 'pageview');

</script>
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
		<div class="td-sheets-container td-hide td-sheet-active-1">
			<div id="scrollbar-container" class="td-sheet active">
				<div class="td-sheet-icon">
					<i class="ti-home"></i>
				</div>
				<div class="td-sheet-title">Landing</div>
				<div class="container-fluid">
					<div class="row homepage">
						<div class="col-md-6 text-center homepageleft">
								<img src="img/logo.png" alt="Logo" data-animation="fadeInDown" data-animation-delay="100" width="200%"/>
							<div class="text-uppercase" data-animation="fadeIn" data-animation-delay="200"><?php echo $_SESSION["nom"] ?></div>
							<div data-animation="fadeInUp" data-animation-delay="500" data-tdchangetext="2.5" >
								<span>Welcome to Tunisie Telecom</span>
								<span>Choose the Quiz you want to pass</span>
								<span>Good luck </span>
							</div>
							<div data-animation="fadeInDown" data-animation-delay="1500"><span onclick="tdNextPage();" class="ti-angle-down"></span></div>
						</div>
						<div class="col-md-6 text-center homepageright" data-animation="bounceInRight" data-animation-delay="750">
							<img src="img/cube.png" alt="Main Object" />
						</div>
					</div>
				</div>
			</div>
			
			<div class="td-sheet">
				<div class="td-sheet-icon">
					<i class="ti-user"></i>
				</div>
				<div class="td-sheet-title">About Us</div>
				
				<div class="container">
					<div class="row"style="margin-top:10%">
							
						<div class="col-md-6 text-center td-aboutus" data-animation="zoomIn" data-animation-delay="200" data-animation-instant=true >
							<div class="td-aboutus-header">
								<span class="ti-mobile"></span>
								<h3>Mobile TT Quiz1</h3>
							</div>
								<p style="margin-left:27%;margin-top:-3%">
									<a href="../Login//index.php"><button type="submit" class="btn btn-primary btn-lg btn-block" data-animation="fadeInLeft" data-animation-delay="700">Return to menu</button></a><br><span class="ti-line-double"></span><br><br>
									<a href="Quiz1/index.php"><button type="submit" class="btn btn-primary btn-lg btn-block" data-animation="fadeInLeft" data-animation-delay="700">Start Quiz</button></a>
							</p>
						</div>
						<div class="col-md-6 text-center td-aboutus" data-animation="zoomIn" data-animation-delay="400">
							<div class="td-aboutus-header">
								<span class="ti-world"></span>
								<h3> Net working TT</h3>
							</div>
							<p style="margin-left:27%;margin-top:-3%">
									<a href="../Login//index.php"><button type="submit" class="btn btn-primary btn-lg btn-block" data-animation="fadeInLeft" data-animation-delay="700">Return to menu</button></a><br><span class="ti-line-double"></span><br><br>
									<a href="Quiz1/index.php"><button type="submit" class="btn btn-primary btn-lg btn-block" data-animation="fadeInLeft" data-animation-delay="700">Start Quiz</button></a>
							</p>
						</div>
						
					</div>
				</div>	
			</div>
			
		
			<div class="td-sheet">
				<div class="td-sheet-icon">
					<i class="ti-email"></i>
				</div>
				<div class="td-sheet-title">Contact</div>
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<div class="page-header">
								<h1>Contact</h1>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<form action="cont.php" method="post">
								<input type="text" name="tel" value="<?php echo $_SESSION["login"] ?>" hidden>
							  <input type="hidden" value="brunogarcia3d@gmail.com" name="to">
							  <div class="form-group" data-animation="fadeInLeft" data-animation-delay="100">
								<label for="name">Name</label>
								<input type="text" name="name" class="form-control" id="name" placeholder="Name">
							  </div>
							  <div class="form-group" data-animation="fadeInLeft" data-animation-delay="300">
								<label for="email">Email address</label>
								<input type="email" name="email" class="form-control" id="email" placeholder="Email">
							  </div>
							  <div class="form-group" data-animation="fadeInLeft" data-animation-delay="500">
								<label for="mesesage">Message</label>
								<textarea id="message" name="message" class="form-control" rows="3"></textarea>
							  </div>
								<button style="margin-left:40%;width:30%" type="submit" class="btn btn-info">Envoyez</button>
							</form>
						</div>
						<div class="col-md-6 contactdata">
							<img class="img-responsive" src="img/office.jpg" alt="Headquarters"/>
							<address>
							  <strong>Tunisie Telecom</strong><br>
							  <abbr title="Phone">P:</abbr> (216) 97 100 100
							  <br><strong>Email :</strong>
							  <a href="mailto:#">tunisietelecom@gmail.tn</a>
							</address>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modals -->
	<div class="modal fade" id="modalSuccess" tabindex="-1" role="dialog">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title">Modal title</h4>
		  </div>
		  <div class="modal-body">
			...
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<button type="button" class="btn btn-success">Save changes</button>
		  </div>
		</div>
	  </div>
	</div>
	
	<div class="modal fade" id="modalInfo" tabindex="-1" role="dialog">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title">Modal title</h4>
		  </div>
		  <div class="modal-body">
			...
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<button type="button" class="btn btn-info">Save changes</button>
		  </div>
		</div>
	  </div>
	</div>
	
	<div class="modal fade" id="modalWarning" tabindex="-1" role="dialog">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title">Modal title</h4>
		  </div>
		  <div class="modal-body">
			...
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<button type="button" class="btn btn-warning">Save changes</button>
		  </div>
		</div>
	  </div>
	</div>
	
	<div class="modal fade" id="modalDanger" tabindex="-1" role="dialog">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title">Modal title</h4>
		  </div>
		  <div class="modal-body">
			...
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<button type="button" class="btn btn-danger">Save changes</button>
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
</body>

<!-- Mirrored from www.brunogarcia.net/templates/3dify/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Nov 2018 10:05:30 GMT -->
</html>