<?php
session_start();
	if(!isset($_SESSION['email'])){
	    header("location: login.html");
	}
    require_once ('data.php');

    $nome=$_POST["nome"];
    $descrizione=$_POST["descrizione"];
    $preparazione=$_POST["tempoPreparazione"];
    $prezzo=$_POST["prezzo"];
    $tipo=$_POST["tipo"];

    
    $upload_percorso = 'img/Immagini/';
    // salvo il percorso temporaneo dell'immagine caricata
    $file_tmp = $_FILES['img']['tmp_name'];
    // salvo il nome dell'immagine caricata
    $file_nome = $_FILES['img']['name'];
    // sposto l'immagine nel percorso che prima abbiamo deciso
    move_uploaded_file($file_tmp, $upload_percorso.$file_nome);

    $sql = "SELECT MAX(id) as id FROM portata";    
    $result= mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
    $data = mysqli_fetch_assoc($result);
    $id = $data['id']+1;
   

    
    $sql = "INSERT INTO portata VALUES ('{$id}','{$nome}', '$upload_percorso$file_nome','{$prezzo}','{$preparazione}','{$descrizione}','{$tipo}')";    


    if ($conn->query($sql) === TRUE) {
        
        header("location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    header("location: menu.php");
  
?>
