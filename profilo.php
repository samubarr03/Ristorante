<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<link rel="stylesheet" href="homepage.css">
	<link rel="icon" type="image/x-icon" href="immagini/icon.png">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<title>Profilo</title>
	<style>
		body {
			background-image: url('immagini/sfondo2.jpg');
			background-repeat: no-repeat;
			background-attachment: fixed; 
			background-size: 100% 100%;
		}
		
		.centrale{
			margin-top:100px;
			height: 850px;
			width: 50%;
			margin-left: 25%;

		}
		
		.foto{
			height: 20%;
			width: 50%;
			margin-left: 25%;
			text-align: center;
		}
		
		.mezzo{
			font-family:'Syne';
			text-align: center;
			font-size: 30px;
			height: 550px;
			width: 100%;
			border-style: solid;
			border-width: 2px;
			border-color: black;
			background-color: white; 
		}
		
		.sotto{
			text-align: center;
			padding-top: 30px;
		}
		
	input[type=button]{
		background-color: red; 
		border: 2px solid black;
		color: white;  
		font-size: 16px;
		margin: 8px 0;		
		padding: 15px 32px; 
		border-radius: 8px;
		width: 20%;
	}
		
	input[type=button]:hover{
		opacity: 0.8;
	}
		
	</style>
</head>
<body>
	<div class="w3-top">
		<div class="w3-bar w3-white w3-wide w3-padding w3-card">
			<a href="index.php" class="w3-bar-item w3-button"><b>BT</b> CINEMA </a>
	   
		<div class="w3-right w3-hide-small">
			<a href="logout.php" class="w3-bar-item w3-button" style = "color: black;">LOGOUT</a>
			<a href="eliminaPrenotazione.html" class="w3-bar-item w3-button" style = "color: black;">ELIMINA PRENOTAZIONE</a>
		</div>
	  </div>
	</div>
	
	<div class="centrale">
		<div class = "foto"><img src = "utente.png" height="100%";></div>
		<div class = "mezzo">
			<?php
				session_start();
				echo '<pre>'."Username: ".$_SESSION['user'].PHP_EOL.'<pre>';
				echo '<pre>'."Nome: ".$_SESSION['nome'].PHP_EOL.'<pre>';
				echo '<pre>'."Cognome: ".$_SESSION['cognome'].PHP_EOL.'<pre>';
			?>
	
		</div>
		<div class = "sotto">
			<a href="logout.php"><input type = "button" value = "LOGOUT"></a></br>
		</div>
	</div>
</body>
</html>