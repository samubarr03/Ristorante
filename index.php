<html lang="en">
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
		<style>

		</style>
        <body>
		<div class="bg">
<?php
	session_start();
	if(isset($_SESSION['mail'])){
	?>
        <!-- NAVBAR PER UTENTE LOGGATO -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
				<div class="container p-2">
					<a class="navbar-brand" href="./">
      					<img src="img/logo.png" alt="" width="80" height="80" class="d-inline-block align-text-top">
					</a>
					<h1 class="navbar-brand">Prenota-One</h1>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
						<ul class="navbar-nav">
							<li class="nav-item active">
								<a class="nav-link" href="">Home<span class="sr-only">(current)</span></a>
							</li>
							
							<li class="nav-item">
								<a class="nav-link" href="html/compra/compra.html">Prenota</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="html/logout/logout.php">Logout</a>
							</li>
							<li class="nav-item active">
								<a class="nav-link" href=""></a>
							</li>
							<li class="nav-item active">
								<a class="nav-link" href=""></a>
							</li>

							<li class="nav-item">
								<a href="html/profilo/profilo.php">
									<img src="img/icone/profilo.svg" align=”right” alt="" width="40" height="40" class="d-inline-block align-text-top">
								</a>
							</li>
						</ul>
					</div>
				</div>
		</nav>

		<?php
			}else{
			?>
        <!-- NAVBAR PER UTENTE NON LOGGATO -->
        <!-- Image and text -->
		
	<nav class="navbar navbar-light" style="background-color: #ff6900;">
<div class="centrare">
		<a class="navbar-brand" href="#">
			<img src="img/logo_large_b.png" width="250" height="81" class="d-inline-block align-top" alt="">
		</a>
		<div class="topnav-centered">
			<a href="#menu">menù</a>
			<a href="#prenota">prenota</a>
			<a href="#chi siamo">chi siamo</a>
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
<?php
	}
	?>
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