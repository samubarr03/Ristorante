<link rel="stylesheet" href="homepage.css">
<link rel="icon" type="image/x-icon" href="immagini/icon.png">
<?php



	$user= $_POST["username"];
	$pw= hash('sha256', $_POST["password"]);
	$nome= $_POST["nome"];
	$cognome= $_POST["cognome"];
	$mail= $_POST["mail"];

    
	
	$file= "dati/datij.json";
	fopen($file,"a+");
	$filej=file_get_contents($file);
	$arr=json_decode($filej,true);
	$array = array(
        "username" => $user,
        "password" => $pw,
		"nome" => $nome,
        "cognome" => $cognome,
		"mail" => $mail
	);
	array_push( $arr, $array );	
	$json = json_encode($arr);
	$bytes = file_put_contents($file, $json); 
?>



<html>
	<head>

		<title>Registrato!</title>
	</head>
	<body class="registrato">
		<h1 class="titolino"> Hai effettuato la registrazione con successo! </h1>
		
		<a href="index.php"> <button class="sbagliato" >LOGIN</button></a>
	</body>
</html>	