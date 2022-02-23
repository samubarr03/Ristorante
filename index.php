<?php
session_start();
	if(!isset($_SESSION['email'])){
	
	$logged = '<a href="login.html" class="w3-bar-item w3-button"><img src="img/user.png" width="50" height="40">Accedi</a>';

	}
	else{
		$logged = '<a href="profilo.php" class="w3-bar-item w3-button"><img src = "img/utente.png" style = "width: 20px; height: 20px;">Loggato</a>';
		

	}
	require_once ('data.php');
?>
<html lang="en">
		<head>
			<!-- Required meta tags -->
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
	
			<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
			<!-- Bootstrap CSS -->
			<link rel="stylesheet" href="css/bootstrap.min.css">
			<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
			<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
    		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
			<script src="js/bootstrap.bundle.min.js"></script>
			<!-- Development version -->
			<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
			<title>Prenota-One</title>
			<link rel="stylesheet" href="css/bootstrap.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  	</head>
			<style>
		  		@import url(style.css);
				  .dropbtn {
					background-color: #ff8733;
					color: white;
					padding: 16px;
					font-size: 24px;
					border: none;
					cursor: pointer;
					width: 160px;
					height: 80px;
					}

					.dropdown {
					position: relative;
					display: inline-block;
					}

					.dropdown-content {
					display: none;
					position: absolute;
					background-color: #ff8733;
					min-width: 160px;
					box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
					z-index: 1;
					}

					.dropdown-content a {
					color: white;
					padding: 12px 16px;
					text-decoration: none;
					display: block;
					}

					.dropdown-content a:hover {background-color: #ff6900}

					.dropdown:hover .dropdown-content {
					display: block;
					}

					.dropdown:hover .dropbtn {
					background-color: #ff6900;
					}
        	</style>
		<body>
			<div class="bg">
        <!--NAVBAR -->
				<?php require_once ("nav.html"); ?>
	
				<img src="img/immagina.png" class="flex">
				<div class="bottonialcentro">
					<a href="menu.php" class="button">Menù </a>
					<a href="#" class="button">Prenota</a>
					<a href="#" class="button">Chi siamo</a>
				</div>
				<br><br>
				<div class="piatti">
					<a href="#" class="button">Primo <img src="img/primo.svg" width="80%" height="80%" padding-bottom="100px"></a>
					<a href="#" class="button">Primo <img src="img/primo.svg" width="80%" height="80%"></a>
					<a href="#" class="button">Primo <img src="img/primo.svg" width="80%" height="80%"></a><br><br>
				</div>
			</div>
		
	<div class="pparte">
		<br>
		<img src="img/primo.svg">
		<br><br>
		<h1>WHERE'S THE BEST PLACE TO GET A BURGER IN BRIGHTON & HOVE?</h1>
		<br>
		<h4>We're a Hove based web design and development agency with a penchant for burgers. We started this project as a bit of fun, designed to showcase our mad skillz.</h3>
		
		<h4>We've spent the last few months visiting and reviewing some of Brighton's premier eating establishments and chuffing our way through countless burgers, fries, relishes and coleslaws.</h4>
		<h4>Come and join us on our culinary caper.</h4>
		<br>		
	</div>
	<div class="sparte">
		<br>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm">
					<div class="card">
						<img src="img/pizza.jpg" alt="Avatar" style="width:100%">
						<div class="container">
							<h4><b>John Doe</b></h4>
							<p>Architect & Engineer</p>
						</div>
					</div>
				</div>
				<div class="col-sm">
					<center><div class="card">
						<img src="img/mc.jpg" alt="Avatar" style="width:100%">
						<div class="container">
						<h4><b>John Doe</b></h4>
						<p>Architect & Engineer</p>
						</div>
					</div></center>
				</div>
				<div class="col-sm">
					<div class="card">
						<img src="img/bibite.png" alt="Avatar" style="width:100%">
						<div class="container">
						<h4><b>John Doe</b></h4>
						<p>Architect & Engineer</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br>	
	</div>
</div>	
    
		<!-- Footer -->
	<footer class="page-footer font-small" style="background-color: #ff8733;">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-2" style=padding-top:1%;><center><img src="img/logo_small_icon_only_inverted.png"  width="128" height="128" ></center> </div>
				<div class="col-sm" style=padding-top:2%;><center><a href="#" class="buttonfooterb">About our food</a></center></div>
				<div class="col-sm" style=padding-top:2%;><center><a href="#" class="buttonfooter">Aiuto</a></center></div>
				<div class="col-sm" style=padding-top:2%;><center><a href="#" class="buttonfooter">Feedback</a></center></div>
				<div class="col-sm" style=padding-top:2%;><center><a href="#" class="buttonfooterb">Seguici sui social</a></center></div>
				<div class="col-sm-2" style=padding-top:1%;><center>⠀</center> </div>
			</div>
		</div>
	</div>
<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2020 Copyright:
  <a href="#">SCV.com</a>
</div>
</footer>
	</body>
	<script src="js/bootstrap.bundle.min.js"></script>
	</html>