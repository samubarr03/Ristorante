<?php
	session_start();
	require_once ('product.php');

	if(!isset($_SESSION['email'])){
	    header("location: login.html");
	}
	else{
		$logged = '<a href="profilo.php" class="w3-bar-item w3-button"><img src = "img/utente.png" style = "width: 20px; height: 20px;"></a>';	
	}

	require_once ('data.php');
    $email=$_SESSION['email'];

	if(isset($_GET['action'])){
		if($_GET['action']=="aggiungi"){
			$var=$_GET['id']; 
				

			$sql = "INSERT INTO ClienteAggiungePortata
			VALUES ('{$var}','1','{$email}')";
		}

		if($_GET['action']=="rimuovi"){
			$var=$_GET['id']; 
			
			$sql = "DELETE FROM portata WHERE id=$var";	
		}


		
		if($_GET['action']=="rimuovic"){
			$var=$_GET['id']; 
			
			$sql = "DELETE FROM clienteaggiungeportata WHERE num=$var";	
		}	

	

		if ($conn->query($sql) === TRUE) {
			echo"bueno";
			} 
			else {
				echo"mucho";
				$sql = "SELECT * FROM ClienteAggiungePortata where `num`='{$var}' ORDER BY num ASC";
				$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			
				if(mysqli_num_rows($resultset) > 0)

					{
					while($row = mysqli_fetch_array($resultset))
					{
					$qta=$row['quantita'];	

					}
				}
				$qta=$qta+1;

				$sql = "INSERT INTO ClienteAggiungePortata
				VALUES ('{$var}','{$qta}','{$email}')";
				if ($conn->query($sql) === TRUE){}
			}
	}
	
	
	
	
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
					
																	input[type=\"number\"] {
																		-webkit-appearance: textfield;
																		-moz-appearance: textfield;
																		appearance: textfield;
																	}
																	
																	input[type=number]::-webkit-inner-spin-button,
																	input[type=number]::-webkit-outer-spin-button {
																		-webkit-appearance: none;
																	}
																	
																	.number-input {
																		border: 0;
																		display: inline-flex;
																	}
																	
																	.number-input,
																	.number-input * {
																		box-sizing: border-box;
																	}
																	
																	.number-input button {
																		outline:none;
																		-webkit-appearance: none;
																		background-color: transparent;
																		border: none;
																		align-items: center;
																		justify-content: center;
																		width: 3rem;
																		height: 3rem;
																		cursor: pointer;
																		margin: 0;
																		position: relative;
																		box-shadow: 0px 0px 1px #474747;
																		border-radius: 50%;
																	}
																	
																	.number-input button:before,
																	.number-input button:after {
																		display: inline-block;
																		position: absolute;
																		content: '';
																		width: 1rem;
																		height: 2px;
																		background-color: #212121;
																		transform: translate(-50%, -50%);
																	}
																	.number-input button.plus:after {
																		transform: translate(-50%, -50%) rotate(90deg);
																	}
																	
																	.number-input input[type=number] {
																		font-family: sans-serif;
																		max-width: 5rem;
																		padding: .5rem;
																		border: none;
																		border-width: 0 2px;
																		font-size: 2rem;
																		height: 3rem;
																		font-weight: bold;
																		text-align: center;
																		color:#9be3df;
																	}
													 
																
				
		.veloznonfanullaincredibileprofquestaèunadenuncianonsipuòlavorarecosilaprossimavoltaigruppipiùequilibrati{
						height:116px;
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
					.bottonialcentro3 .button{
						background-color:#ff6900;
						border-radius: 25px;
						font-size:300%;
						border: 5px solid #ff8733;
  						border-radius: 25px;
						
			}		
			.bottonialcentro3 .a {margin: 0 auto;}	
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
                        .bottonialcentro3 .button{
						background-color:#ff6900;
						border-radius: 25px;
						font-size:300%;
						border: 5px solid #ff8733;
  						border-radius: 25px;	
						width:200px;
						height:100px;	
						}	
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
			<div class="bg">
        <!--NAVBAR -->
				<?php require_once ("nav.php"); ?>
				<div class="veloznonfanullaincredibileprofquestaèunadenuncianonsipuòlavorarecosilaprossimavoltaigruppipiùequilibrati">
					<a href="#" class="button">ehy che ci fai qua</a>
				</div>
				<div class="pparte">
		<br>
		<img src="img/carrello.png" width="50%">
		<h1>CARRELLO</h1>
		<br>
		<br>
		<h4>Qui potrai vedere i tuoi ordini. Per ordinare clicca il pulsante ordina sotto i prodotti che ti porterà ad una pagina dove inserire i dati della carta</h3>
		<h4>Nel caso il carrello fosse vuoto, vai nella sezione menu per riempirlo!</h4>
		<br>		
	</div>

				<div class="bg">
						<?php
							$sql = "SELECT * FROM ClienteAggiungePortata,Portata where ClienteAggiungePortata.num=Portata.id ORDER BY id ASC";
							$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			
							if(mysqli_num_rows($resultset) > 0)

								{
								while($row = mysqli_fetch_array($resultset))
								{
								$nome=$row['nome'];	
								$prezzo=$row['prezzo'];	
								$img=$row['img'];
								$id=$row['id'];	
								$qta=$row['quantita'];	
										$element =
										"</div>
		
														<div class=\"card shadow\" style=\"width: 18rem; height: 32rem;border-radius:0.25rem;display:inline-block;margin-top:3%;margin-right:4.5%;margin-left:4.5%;@media screen and (max-width: 7070px){.card shadow{margin-left:20%;} \">
														<div style=\"carte\">
																<img src=img/Immagini/$img alt=\"Image1\" class=\"img-fluid card-img-top\" style=\"width: 18rem; height: 14rem; \">
															</div>
															<div class=\"card-body\"><center>
																<h5 class=\"card-title\">$nome</h5>
																<h6>
																	<i class=\"fas fa-star\"></i>
																	<i class=\"fas fa-star\"></i>
																	<i class=\"fas fa-star\"></i>
																	<i class=\"fas fa-star\"></i>
																	<i class=\"far fa-star\"></i>
																</h6>
																<p class=\"card-text\"></p>
																<h5><span class=\"price\">€$prezzo</span></h5>
																<h1>
																<div class=\"number-input\">
																		
																		<input type=\"number\" min=\"0\" name=\"quantity\" value=$qta type=\"number\" >
																		
																	</div>
																</h1>
																<button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\">  <a href=\"carrello.php?action=aggiungi&id=$id\">Aggiungi al carrello.</a><i class=\"fas fa-shopping-cart\"></i></button>
																 <input type='hidden' name='product_id' value='$id'>
															<button type=\"submit\" class=\"btn btn-warning my-3\" name=\"remc\">  <a href=\"carrello.php?action=rimuovic&id=$id\">Rimuovi dal carrello</a><i class=\"fas fa-shopping-cart\"></i></button></center>       	         
															</div>
										";
										echo $element;
								}
							}
									
									
									?>
									
									
									</div><div style="clear: both"></div><br>
					<div class="bottonialcentro3">
					<center><a href="ordina.php" class="button">Ordina</a></center>
				</div><br>
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

    <!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2020 Copyright:
  <a href="#">SCV.com</a>
</div>
    </footer>
	</body>
	<script src="js/bootstrap.bundle.min.js"></script>
	</html>