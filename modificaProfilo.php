<?php
session_start();
	if(!isset($_SESSION['email'])){
	    header("location: login.html");
	}
    require_once ('data.php');

    $nome=$_POST["nome"];
    $cognome=$_POST["cognome"];
    $telefono=$_POST["telefono"];
    $email=$_POST["email"];


    $sql = $query="UPDATE utente SET nome='$nome', cognome='$cognome', telefono='$telefono', email='$email' WHERE email='".$_SESSION['email']."'";
    
    $results= mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			



            header("location: profilo.php");
  

        
    
        
    
?>
