<?php
    session_start();
    if(!isset($_SESSION['email'])){
        header("location: login.html");
    }
    require_once ('data.php');


    $upload_percorso = 'img/utenti/';
    // salvo il percorso temporaneo dell'immagine caricata
    $file_tmp = $_FILES['img']['tmp_name'];
    // salvo il nome dell'immagine caricata
    $file_nome = $_FILES['img']['name'];
    // sposto l'immagine nel percorso che prima abbiamo deciso
    move_uploaded_file($file_tmp, $upload_percorso.$file_nome);

    $sql = $query="UPDATE utente SET  foto=' $upload_percorso$file_nome' WHERE email='".$_SESSION['email']."'";
    
    $results= mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			


    header("location: profilo.php");
?>