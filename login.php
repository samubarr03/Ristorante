<?php
$servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password, 'restaurant');

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

	$email = $_POST["email"];
	$password = hash('sha256', $_POST["password"]);
		
	if (empty($email) || empty($password)) {
		$msg = 'Inserisci email e password %s';
	} else {
		$query = "
			SELECT email, password
			FROM users
			WHERE email = :email
		";
			
		$check = $pdo->prepare($query);
		$check->bindParam(':email', $email, PDO::PARAM_STR);
		$check->execute();
			
		$user = $check->fetch(PDO::FETCH_ASSOC);
			
		if (!$user || password_verify($password, $user['password']) === false) {
			$msg = 'Credenziali utente errate %s';
		} else {
			session_regenerate_id();
			$_SESSION['email'] =  $email;				
			header('Location: index.php');
			exit;
		}
		printf($msg, '<a href="../login.html">torna indietro</a>');	
	}	
			
?>	

<html>
	<head>
	<link rel="stylesheet" href="homepage.css">
	<link rel="icon" type="image/x-icon" href="immagini/icon.png">	
		<title>Erorre Login!</title>
	</head>
	<body class="registrato">
		<h1 class="titolino">  </h1>
		
		<a href="login.html"> <button class="sbagliato" >LOGIN</button></a>
	</body>
</html>	