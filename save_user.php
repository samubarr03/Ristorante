<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";




	$email= $_POST["email"];
	$pw= $_POST["password"];
	$nome= $_POST["nome"];
	$cognome= $_POST["cognome"];
	$città= $_POST["citta"];
	$via= $_POST["via"];
	$civico= $_POST["civico"];
	$telefono= $_POST["telefono"];	

if (isset($_POST['register'])) {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
	
    $pwdLenght = mb_strlen($password);
    
    if (empty($email) || empty($password) ) {
        $msg = 'Compila tutti i campi %s';
    } elseif ($pwdLenght < 8 || $pwdLenght > 20) {
        $msg = 'Lunghezza minima password 8 caratteri.
                Lunghezza massima 20 caratteri';
    } else {
        $password_hash = password_hash($password, PASSWORD_BCRYPT);

        $query = "
            SELECT email
            FROM utente
            WHERE email = :email
        ";
        
        $check = $pdo->prepare($query);
        $check->bindParam(':email', $email, PDO::PARAM_STR);
        $check->execute();
        
        $user = $check->fetchAll(PDO::FETCH_ASSOC);
        
        if (count($user) > 0) {
            $msg = 'email già in uso %s';
        } else {
            $query = "
                INSERT INTO utente
                VALUES (:email, :password , :nome, :cognome , :citta, :via , :civico, :telefono)";
        
            $check = $pdo->prepare($query);
            $check->bindParam(':email', $email, PDO::PARAM_STR);
            $check->bindParam(':password', $password_hash, PDO::PARAM_STR);
            $check->bindParam(':nome', $nome, PDO::PARAM_STR);
            $check->bindParam(':cognome', $cognome, PDO::PARAM_STR);
            $check->bindParam(':citta', $citta, PDO::PARAM_STR);
            $check->bindParam(':via', $via, PDO::PARAM_STR);
            $check->bindParam(':civico', $civico, PDO::PARAM_STR);
            $check->bindParam(':telefono', $telefono, PDO::PARAM_STR);
            $check->execute();
            
            if ($check->rowCount() > 0) {
                $msg = 'Registrazione eseguita con successo';
            } else {
                $msg = 'Problemi con l\'inserimento dei dati %s';
            }
        }
    }
    
}
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