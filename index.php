		<?php


		if(!isset($_SESSION['user']))
		//user non loggato
		$logged = '<a href="login.html" class="w3-bar-item w3-button"><img src="user.png" width="50" height="40"></a>';
		else{
		$logged = '<a href="profilo.php" class="w3-bar-item w3-button"><img src = "utente.png" style = "width: 20px; height: 20px;"></a>';
		}
?>
<html>
		<head>
			<!-- Required meta tags -->
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
	
			<!-- Bootstrap CSS -->
			<link rel="stylesheet" href="css/bootstrap.min.css">
			<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


			<!-- LINK FOOTER -->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    		<link rel="stylesheet" href="css/assets/style.css">
			<link rel="stylesheet" href="def.css">
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
	
			<title>Prenota-One</title>
	  	</head>

        <body>
		<div class="bg">

	<nav class="navbar navbar-light" style="background-color: #ff6900;">
		<div class="centrare">
			<a class="navbar-brand" href="#">
				<img src="img/logo_large_b.png" width="250" height="81" class="d-inline-block align-top" alt="">
			</a>
		</div>
		<div class="dropdown">
			<button class="dropbtn">Menù</button>
			<div class="dropdown-content">
				<a href="#">Primi</a>
				<a href="#">Secondi</a>
				<a href="#">Dolci</a>
				<a href="#">Pizze</a>
				<a href="#">Bevande</a>
			</div>	
			<button class="dropbtn">Prenota</button>
			<!--<button class="dropbtn">Chi siamo</button>
			<button class="dropbtn">Quality</button>-->
		</div>
		<div style="float:right;">
		<a>

			<?php
				echo $logged;
			?>

		</div>
	</nav>
<img src="img/immagina.png" class="flex">
<!-- <div class="bottonialcentro">
		<a href="#" class="button">Menù</a>
	<a href="#" class="button">Prenota</a>
	<a href="#" class="button">Chi siamo</a>
</div> -->
	</div>
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
<!-- Footer Elements -->
  <!--Grid row-->
</div>
<!-- Footer Elements -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2020 Copyright:
  <a href="#">SCV.com</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->	
	</body>
	</html>