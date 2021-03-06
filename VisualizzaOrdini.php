<?php
    require_once ('data.php');
    require_once ('product.php');
    session_start();

	if(!isset($_SESSION['email'])){
	
        $logged = '<a href="login.html" class="w3-bar-item w3-button"><img src="img/user.png" width="50" height="40">Accedi</a>';
    
        }
        else{
            $logged = '<a href="profilo.php" class="w3-bar-item w3-button"><img src = "img/utente.png" style = "width: 20px; height: 20px;">Loggato</a>';
            
    
        }
        require_once ('data.php');


        


?>


<html>
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
        <title>Prenota-One</title>
    </head>
    <style>
            .centrare{
                padding-left:8%;
                padding-right:8%;
                display: inline-block;
            }
            .bg{
                z-index: -1;
                background: repeating-linear-gradient(
                45deg,
                #ff6900,
                #ff6900 40px,
                #ff8733 40px,
                #ff8733 80px
                );
            }
            .button {
                background-color: #ff8733;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                float:center;
                font-size: 280%;
                margin: 4px 2px;
                margin-left:2%;
                margin-right:2%;
                cursor: pointer;
                width: 28%;  
                height: 10%;
                font-family: "Open Sans", sans-serif;
            }
            .buttonfooter {
                background-color: #ff6900;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                float:center;
                font-size: 180%;
                margin: 4px 2px;
                margin-left:2%;
                margin-right:2%;
                cursor: pointer;
                width: 75%;  
                height: 70%;
            }.buttonfooterb{
                background-color: #ff6900;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                float:center;
                font-size: 180%;
                margin: 4px 2px;
                margin-left:2%;
                margin-right:2%;
                cursor: pointer;
                width: 97%;  
                height: 70%;
            }
            .bottonialcentro{
                background-color:#ff6900;
                margin-left:22.5%;
                margin-right:22.5%;
                padding-left:1%;
                padding-right:1%;
                padding-bottom:0.75%;
                padding-top:0.75%;
                text-align: center;
                position: relative;
                z-index: 0;
                top:-10%;
            }
            .flex {max-width: 89%;
                position: relative;
                z-index: 0;
                margin-left:5.5%;
                margin-right:5.5%;
                border-radius: 0.1%;
            }
            .bottonialfooter{
                text-align: center;
                padding-left:1%;
                padding-right:1%;
                padding-bottom:0.75%;
                padding-top:0.75%;
                text-align: center;
                position: relative;
                z-index: 0;
                top:-10%;
            }
            .parent {
                text-align: center;
                margin: 20px 0;
                padding: 20px;
                }

            .parent div {
                margin:10px;
                padding: 10px;
                display: inline-block;
                text-align: left;
            }
            .pparte{
                background-color:#ff8733;
                text-align: center;
                padding-left:20%;
                padding-right:20%;
            }
            .pparte p {
                font-variant-numeric: oldstyle-nums;
                padding-left:10%;
                padding-right:10%;
            }
            .pparte h1 {
                font-variant-numeric: oldstyle-nums;
                color: #000000;
                padding-left:20%;
                padding-right:20%;
            }
            .sparte{
                background-color:#ff6900;
                text-align: center;
            }
            .sparte p {
                font-variant-numeric: oldstyle-nums;
                padding-left:10%;
                padding-right:10%;
            }
            .sparte h1 {
                font-variant-numeric: oldstyle-nums;
                padding-left:20%;
                padding-right:20%;
            }
            .card {
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                transition: 0.3s;
                width: 66%;
            }
            .card:hover {
                box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            }
            .allinea{
                display: inline;
            }
            .piatti a{
                display: inline-block;
                width: 512px;
                height: 512px;
                color: #ff6900;
                vertical-align: middle;
                text-decoration: none;
                font-size: 400%;
                border: .5em solid rgba(0,0,0,0);
                border-radius: 100%;
                background: rgb(245,245,245);
                box-shadow:
                inset 0 -6px 20px rgba(255,255,255,1),
                inset 0 6px 20px rgba(0,0,0,.4),
                0 4px 8px rgba(0,0,0,.9);
                text-align: center;
                position: relative;
                .dropbtn {
                background-color:#ff6900 ;
                color: white;

                border: none;
                cursor: pointer;
            }
            .dropbtn {
            background-color: #04AA6D;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            }

            .dropdown {
            position: relative;
            display: inline-block;
            }

            .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            }

            .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            }

            .dropdown-content a:hover {background-color: #ddd;}

            .dropdown:hover .dropdown-content {display: block;}

            .dropdown:hover .dropbtn {background-color: #3e8e41;}
    </style>
    <body>
        <div class="bg">
        <!--NAVBAR -->
        <?php require_once ("nav.php"); ?> 
    <!-- inizia parte menu -->


    <div class="container">
					<div class="row text-center py-5">
						<?php
							$sql = "SELECT * FROM Spedizione where email='{$_SESSION['email']}' ORDER BY id ASC";
							$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			
							if(mysqli_num_rows($resultset) > 0)
							{
								while($res = mysqli_fetch_array($resultset))
								{ 
                                                            
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
                                $id=$qta['quantita'];

										$element =
											"<div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
													<div>
														<div class=\"card shadow\" style=\"width: 18rem; height: 30rem; border-radius:0.25rem; \">
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
																	
																	<span class=\"price\">???$prezzo</span>
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
																		
																		<input type=\"number\" min=\"0\" name=\"quantity\" value=$qta type=\"number\" >
																		
																	</div>
																</h1>
       	         
															</div>
														</div>
													</div>
												</div>
										";
										echo $element;
								}								
							}
									
									
									?>
									
									

					</div>           
            

        <!-- Footer -->
<footer class="page-footer font-small" style="background-color: #ff8733;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm" style=padding-top:1%;><center><img src="img/logo_small_icon_only_inverted.png"  width="128" height="128" ></center> </div>
            <div class="col-sm" style=padding-top:2%;><center><a href="#" class="buttonfooterb">About our food</a></center></div>
            <div class="col-sm" style=padding-top:2%;><center><a href="#" class="buttonfooter">Aiuto</a></center></div>
            <div class="col-sm" style=padding-top:2%;><center><a href="#" class="buttonfooter">Feedback</a></center></div>
            <div class="col-sm" style=padding-top:2%;><center><a href="#" class="buttonfooterb">Seguici sui social</a></center></div>
            <div class="col-sm" style=padding-top:1%;><center>???</center> </div>
        </div>
    </div>
<!-- Footer Elements -->
  <!--Grid row-->
</div>
<!-- Footer Elements -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">?? 2020 Copyright:
  <a href="#">SCV.com</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer --> 
    </body>
    </html>