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

	

	if($_POST){
		
			if($_POST["nomeCarta"]){
				$nomeCarta=$_POST["nomeCarta"];
			}
			if($_POST["nCarta"]){
				$nCarta=$_POST["nCarta"];
			}
	
			if($_POST["cognomeCarta"]){
				$cognomeCarta=$_POST["cognomeCarta"];
			}
	
			if($_POST["scadenza"]){
				$scadenza=$_POST["scadenza"];
			}
			if($_POST["cvv"]){
				$cvv=$_POST["cvv"];
			}
			$sql = " SELECT * FROM cartacredito where email='".$_SESSION['email']."' AND nCarta<>\"'.$nCarta.'\" ";
			$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			
			if(mysqli_num_rows($resultset) = 0)
					$res = mysqli_fetch_array($resultset);
						
			$sql = "INSERT INTO cartacredito VALUES ('{$nomeCarta}','{$cognomeCarta}','{$nCarta}','{$scadenza}','{$cvv}','{$_SESSION['email']}')";
			$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			
		}
		else{
			$res['nome']='';
			$res['cognome']='';
			$res['nCarta']='';
			$res['scadenza']='';
			$res['CVV']='';
		}   

	}

    if($_POST){


        if($_POST["citta"]){
            $citta=$_POST["citta"];
        }
        if($_POST["via"]){
            $via=$_POST["via"];
        }
        if($_POST["civico"]){
            $civico=$_POST["civico"];
        }
		if($_POST["data"]){
            $data = strtotime($_POST["data"]);
        }
		$sql = "SELECT MAX(id) as id FROM spedizione";    
		$result= mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
		$data = mysqli_fetch_assoc($result);
		$id = $data['id']+1;

		$sql = "SELECT SUM(prezzo) FROM ClienteAggiungePortata,Portata where ClienteAggiungePortata.num=Portata.id ";
		$totale = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));		
   
		$sql = "INSERT INTO Spedizione VALUES ('{$id}','{$_SESSION['email']}','{$nCarta}','{$citta}','{$via}','{$civico}','{$totale}',now(),'{$data}')";
		$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));	
		

		$sql = "SELECT * FROM ClienteAggiungePortata ";
		$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			
		if(mysqli_num_rows($resultset) > 0)

			{
			while($row = mysqli_fetch_array($resultset))
			{
			$num=$row['num'];	
			$quantita=$row['quantita'];	

			$sql = "INSERT INTO PortataVieneSpedita VALUES ('{$num}','{$quantita}','{$id}')";
			$add = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));		

			$sql = "DELETE FROM ClienteAggiungePortata WHERE num='{$num}'";
			$del = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));		
			}	
    	}

		header("location: index.php");
	}

	$sql = "SELECT SUM(prezzo) FROM ClienteAggiungePortata,Portata where ClienteAggiungePortata.num=Portata.id ";
	$totale = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));		
   

	$sql = "SELECT * FROM Utente where email= '".$_SESSION['email']."'";
    
    $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			
    if(mysqli_num_rows($resultset) > 0)
        {
            $row = mysqli_fetch_array($resultset);
            
        } 


     
		if(!isset($qta)){
			$qta=1;
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
					.profilo{
                        margin-left:15%;
                        margin-right:15%;
                        margin-top:2%;
                        width:70%;
                        height:60%;
                        background-color: #ff8733;
						float:right;
                    }   
					.infoscritte{
                        background-color: #ff7816;
                        float:right;
                        margin-left:5%;
                        margin-right:5%;
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
				<div class="profilo" style="border: 12px solid #ff6900;">
					<h1>Inserisci dati consegna</h1>
					<form method="POST" > 
                <h2>Città:</h2><div class="infoscritte"><input name="citta" ID="abc" type="text" value=<?php echo $row['Citta']; ?>></div>
                <h2>Via:</h2><div class="infoscritte"><input name="via" ID="abc" type="text" value=<?php echo $row['via']; ?>></div>
                <h2>Civico:</h2><div class="infoscritte"><input name="civico" ID="abc" type="text" value=<?php echo $row['civico']; ?>></div>
				<h2>Consegna:(Per consegna immediata mettere l'ora attuale)</h2><div class="infoscritte"><input type="datetime-local" id="meeting-time" name="data" value="2022-02-12T19:30"min="2022-02-28T00:00" max="2025-06-14T00:00"></div>
                <h2>Nome Carta:</h2><div class="infoscritte"><input name="nomeCarta" ID="abc" type="text" value=<?php echo $res['nome']; ?>></div>
                <h2>Cognome Carta:</h2><div class="infoscritte"><input name="cognomeCarta" ID="abc" type="text" value=<?php echo $res['cognome']; ?>></div>
                <h2>Numero Carta:</h2><div class="infoscritte"><input name="nCarta" ID="abc" type="text" min="16" max="16" value=<?php echo $res['nCarta']; ?>></div>
                <h2>Scadenza:</h2><input type="datetime-local" id="meeting-time" name="scadenza" value="2022-02-12T19:30"min="2022-02-28T00:00" max="2025-06-14T00:00">
                <h2>CVV:</h2><div class="infoscritte"><input name="cvv" ID="abc" type="text" min="3" max="3"value=<?php echo $res['CVV']; ?>></div>  
                <br><button type="submit"> Salva</a></button>
            </form><br>
		</div>

			<div class="container">
					<div class="row text-center py-5">
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
										$element =
											"<div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
													<div>
														<div class=\"card shadow\" style=\"width: 18rem; height: 32rem; border-radius:0.25rem; \">
															<div>
																<img src=img/Immagini/$img alt=\"Image1\" class=\"img-fluid card-img-top\" style=\"width: 18rem; height: 14rem; \">
															</div>
															<div class=\"card-body\">
																<h5 class=\"card-title\">$nome</h5>
																<h6>
																	<i class=\"fas fa-star\"></i>
																	<i class=\"fas fa-star\"></i>
																	<i class=\"fas fa-star\"></i>
																	<i class=\"fas fa-star\"></i>
																	<i class=\"far fa-star\"></i>
																</h6>
																<p class=\"card-text\">
									
																</p>
																<h5>
																	
																	<span class=\"price\">€$prezzo</span>
																</h5>
																<h1>
																<style>
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
																</style>  
																
																	<div class=\"number-input\">
																		<button onclick=\"dec()\" ></button>
																		<input type=\"number\" min=\"0\" name=\"quantity\" value=$qta type=\"number\" >
																		<button onclick=\" inc()\" class=\"plus\"></button>
																	</div>
																</h1>
																<button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\">  <a href=\"carrello.php?action=aggiungi&id=$id&qta=$qta\">Aggiungi al carrello.</a><i class=\"fas fa-shopping-cart\"></i></button>
																 <input type='hidden' name='product_id' value='$id'>
															<button type=\"submit\" class=\"btn btn-warning my-3\" name=\"remc\">  <a href=\"carrello.php?action=rimuovic&id=$id\">Rimuovi dal carrello</a><i class=\"fas fa-shopping-cart\"></i></button>         	         
															</div>
														</div>
													</div>
												</div>
										";
										echo $element;
								}								
							}
									
									
									?>
									
									

					</div>		</div>		
            <div style="clear:both;"></div>        
		<!-- Footer -->
	<footer class="page-footer font-small" style="background-color: #ff8733;">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-2" style=padding-top:1%;><center><img src="img/logo_small_icon_only_inverted.png"  width="128" height="128" ></center> </div>
				<div class="col-sm" style=padding-top:2%;><center><a href="#" class="buttonfooterb">About our food</a></center></div>
				<div class="col-sm" style=padding-top:2%;><center><a href="#" class="buttonfooter">Aiuto</a></center></div>
				<div class="col-sm" style=padding-top:2%;><center><a href="#" class="buttonfooter">Feedback</a></center></div>
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