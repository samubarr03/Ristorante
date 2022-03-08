<?php
session_start();
	if(!isset($_SESSION['email'])){
	//
		$logged = '<a href="login.html" class="w3-bar-item w3-button"><img src="img/user.png" width="50px" height="40px">Accedi</a>';

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
					body {
					font-family: "Lato", sans-serif;
					transition: background-color .5s;
					}

					.sidenav {
					height: 100%;
					width: 0;
					position: fixed;
					z-index: 1;
					top: 0;
					left: 0;
					background-color: #ff6900;
					overflow-x: hidden;
					transition: 0.5s;
					padding-top: 60px;
					}

					.sidenav a {
					padding: 8px 8px 8px 32px;
					text-decoration: none;
					font-size: 25px;
					color: white;
					display: block;
					transition: 0.3s;
					}

					.sidenav a:hover {
					color: #ff8733;
					}

					.sidenav .closebtn {
					position: absolute;
					top: 0;
					right: 25px;
					font-size: 36px;
					margin-left: 50px;
					}
					#main {
					transition: margin-left .5s;
					padding: 16px;
					}
					@media screen and (max-height: 450px) {
					.sidenav {padding-top: 15px;}
					.sidenav a {font-size: 18px;}
					.dropbtn{
						width: 0px;
						height: 0px;
					}}
					@media screen and (max-width: 450px) {
                        .bg{
                            background: repeating-linear-gradient(
                            45deg,
                            #ff6900,
                            #ff6900 45px,
                            #ff8733 45px,
                            #ff8733 90px
                            );
                        }
						.dropdown {
							position: relative;
							display: none;
						}
						.dropbtn {
							display:none;
						}
						.bottonialcentro{
							background-color:#ff6900;
							margin-left:3%;
							margin-right:3%;
							width:92%;
							padding-left:1%;
							padding-right:1%;
							height:64px;
						}
						.button {
							background-color: #ff8733;
							border: none;
							color: white;
							text-align: center;
							text-decoration: none;
							display: inline-block;
							float:center;
							font-size: 20px;
							cursor: pointer;
							width: 28%;  
							height: 75%;
							font-family: "Open Sans", sans-serif;
							padding: 10px 0;
						}
						.piatti a{
							width: 180px;
							height: 180px;	
							font-size: 200%;
							display: inline-block;
							float:center;
						}
						.dropbtn {
							background-color:#ff6900 ;
							color: white;

							border: none;
							cursor: pointer;
						}
						.pparte{
							background-color:#ff8733;
							text-align: center;
							padding-left:2%;
							padding-right:2%;
						}
						.pparte p {
							font-variant-numeric: oldstyle-nums;
							padding-left:2%;
							padding-right:2%;
							width:96%;
						}
						.pparte h1 {
							font-variant-numeric: oldstyle-nums;
							color: #000000;
							padding-left:1%;
							width:98%;
							padding-right:1%;
						}

					}
					.veloznonfanullaincredibileprofquestaèunadenuncianonsipuòlavorarecosilaprossimavoltaigruppipiùequilibrati{
						height:106px;
						width:100%;
						background-color:#ff6900;
					}
					.veloznonfanullaincredibileprofquestaèunadenuncianonsipuòlavorarecosilaprossimavoltaigruppipiùequilibrati .a{
						width: 50%;
						height: 2%;
						color: green;
						font-size:1px;
					}
					.veloznonfanullaincredibileprofquestaèunadenuncianonsipuòlavorarecosilaprossimavoltaigruppipiùequilibrati .button{
						width: 40%;
						height: 2%;
						color: green;
						font-size:18px;
					}
        	</style>
		<body>
		<script>
			function openNav() {
			document.getElementById("mySidenav").style.width = "300px";
			document.getElementById("main").style.marginLeft = "300px";
			document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
			}

			function closeNav() {
			document.getElementById("mySidenav").style.width = "0";
			document.getElementById("main").style.marginLeft= "0";
			document.body.style.backgroundColor = "white";
			}
		</script>
			<div class="bg">
        <!--NAVBAR -->
				
				<?php require_once ("nav.php"); ?>
				<div class="veloznonfanullaincredibileprofquestaèunadenuncianonsipuòlavorarecosilaprossimavoltaigruppipiùequilibrati">
					<a href="#" class="button">ehy che ci fai qua</a>
				</div>
				<img src="img/immagina.png" class="flex">
				<div class="bottonialcentro">
					<a href="menu.php" class="button">Menù </a>
					<a href="#" class="button">Prenota</a>
					<a href="info.php" class="button">Info</a>
				</div>
				<br><br>
				<center><div class="piatti">
					<a href="#" class="button"><img src="img/primodue.png" width="90%" height="90%"></a>
					<a href="#" class="button"><img src="img/primodue.png" width="90%" height="90%"></a>
					<a href="#" class="button"><img src="img/primodue.png" width="90%" height="90%"></a><br><br>
				</div></center>
			</div>
			<div style="clear: both"></div>	
	<div class="pparte">
		<br>
		<img src="img/primo.svg">
		<br><br>
		<h1>WHERE'S THE BEST PLACE TO GET A BURGER IN BRIGHTON & HOVE?</h1>
		<br>
		<h4>Un luogo celebre e presente ormai dal 1970 solo nella clamorosa città quale è Genova, venite a gustare i piatti celebri del luogo! Il ristorante è in apertura dalle 19:00 a 00:00 in Via XX Settembre.</h3>
		
		<h4>We've spent the last few months visiting and reviewing some of Brighton's premier eating establishments and chuffing our way through countless burgers, fries, relishes and coleslaws.</h4>
		<h4>Come and join us on our culinary caper.</h4>
		<br>		
	</div>
	<div class="sparte">
		<br>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm">
				<center><div class="card">
						<img src="img/pizza.jpg" alt="Avatar" style="width:100%">
						<div class="container">
							<h4><b>John Doe</b></h4>
							<p>Architect & Engineer</p>
						</div>
					</div></center>
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
				<center><div class="card">
						<img src="img/bibite.png" alt="Avatar" style="width:100%">
						<div class="container">
						<h4><b>John Doe</b></h4>
						<p>Architect & Engineer</p>
						</div>
					</div></center>
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
				<div class="col-sm" style=padding-top:2%;><center><a href="info.php" class="buttonfooterb">About our food</a></center></div>
				<div class="col-sm" style=padding-top:2%;><center><a href="info.php" class="buttonfooter">Aiuto</a></center></div>
				<div class="col-sm" style=padding-top:2%;><center><a href="info.php" class="buttonfooter">Feedback</a></center></div>
				<div class="col-sm" style=padding-top:2%;><center><a href="social.html" class="buttonfooterb">Seguici sui social</a></center></div>
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