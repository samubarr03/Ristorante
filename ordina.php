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

    IF($_POST){
        if($_POST["nome"]){
            $nome=$_POST["nome"];
        }

        if($_POST["cognome"]){
            $cognome=$_POST["cognome"];
        }
        if($_POST["telefono"]){
            $telefono=$_POST["telefono"];
        }
        if($_POST["citta"]){
            $citta=$_POST["citta"];
        }
        if($_POST["via"]){
            $via=$_POST["via"];
        }
        if($_POST["civico"]){
            $civico=$_POST["civico"];
        }
        $sql = $query="UPDATE utente SET nome='$nome', cognome='$cognome', telefono='$telefono' WHERE email='".$_SESSION['email']."'";
        $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			
    }

    IF($_POST){
        if($_POST["nomeCarta"]){
            $nomeCarta=$_POST["nomeCarta"];
        }

        if($_POST["cognomeCarta"]){
            $cognomeCarta=$_POST["cognomeCarta"];
        }
        if($_POST["nCarta"]){
            $nCarta=$_POST["nCarta"];
        }
        if($_POST["scadenza"]){
            $scadenza=$_POST["scadenza"];
        }
        if($_POST["cvv"]){
            $cvv=$_POST["cvv"];
        }

        
        $sql = $query="UPDATE utente SET nome='$nomeCarta', cognome='$cognomeCarta', nCarta='$nCarta' , scadenza='$scadenza', cvv='$cvv' WHERE email='".$_SESSION['email']."'";
        $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			
    }


    $sql = "SELECT * FROM Utente where email= '".$_SESSION['email']."'";
    
    $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			
    if(mysqli_num_rows($resultset) > 0)
        {
            $row = mysqli_fetch_array($resultset);
            
        } 


    require_once ('data.php');

    $sql = "SELECT * FROM cartacredito where email= '".$_SESSION['email']."'";
    
    $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			
    if(mysqli_num_rows($resultset) > 0)
        {
            $res = mysqli_fetch_array($resultset);
            
        }
    else{
        $res['nome']='';
        $res['cognome']='';
        $res['nCarta']='';
        $res['scadenza']='';
        $res['CVV']='';
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

            <form method="POST" >

                    <h2>⠀Nome:</h2><div class="infoscritte"><input name="nome" ID="abc" type="text" value=<?php echo $row['nome']; ?>></div><br>
                <br><h2>⠀Cognome:</h2><div class="infoscritte"><input name="cognome" ID="abc" type="text" value=<?php echo $row['cognome']; ?>></div><br>
                <br><h2>⠀Telefono:</h2><div class="infoscritte"><input name="telefono" ID="abc" type="text" value=<?php echo $row['telefono']; ?>></div><br>
                <h2>Città:</h2><div class="infoscritte"><input name="citta" ID="abc" type="text" value=<?php echo $row['Citta']; ?>></div><br>
                <br><h2>Via:</h2><div class="infoscritte"><input name="via" ID="abc" type="text" value=<?php echo $row['via']; ?>></div><br>
                <br><h2>Civico:</h2><div class="infoscritte"><input name="civico" ID="abc" type="text" value=<?php echo $row['civico']; ?>></div><br>
                <h2>Nome Carta:</h2><div class="infoscritte"><input name="nomeCarta" ID="abc" type="text" value=<?php echo $res['nome']; ?>></div><br>
                <br><h2>⠀Cognome Carta:</h2><div class="infoscritte"><input name="cognomeCarta" ID="abc" type="text" value=<?php echo $res['cognome']; ?>></div><br>
                <br><h2>Numero Carta:</h2><div class="infoscritte"><input name="nCarta" ID="abc" type="text" value=<?php echo $res['nCarta']; ?>></div><br>
                <h2>Scadenza:</h2><div class="infoscritte"><input name="scadenza" ID="abc" type="text" value=<?php echo $res['scadenza']; ?>></div><br>
                <br><h2>CVV:</h2><div class="infoscritte"><input name="cvv" ID="abc" type="text" value=<?php echo $res['CVV']; ?>></div><br>     
                <button type="submit"> Salva</a></button>
            </form><br>
            </div>
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