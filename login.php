<link rel="stylesheet" href="homepage.css">
<link rel="icon" type="image/x-icon" href="immagini/icon.png">
<?php
	
	$user= $_POST["username"];
	$pw= hash('sha256', $_POST["password"]);



	$Json = file_get_contents("dati/datij.json");
	$myarray = json_decode($Json);

	foreach($myarray as $var){
	/*	echo "<br>";
	echo var_dump ( $var );
	echo "<br>";*/
		if($var->username==$user  && $var->password==$pw){
			session_start();
			$_SESSION['user'] = $user;
			$_SESSION['nome'] =$var->nome;
			$_SESSION['cognome']  =$var->cognome;
			//$_SESSION['email'] = $var->email;
			header("location: index.php");
		}	
	}
	

?>
<html>
	<head>

		<title>Erorre Login!</title>
	</head>
	<body class="registrato">
		<h1 class="titolino"> Credenziali errate! </h1>
		
		<a href="login.html"> <button class="sbagliato" >LOGIN</button></a>
	</body>
</html>	