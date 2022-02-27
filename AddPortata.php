<?php
session_start();
if($_SESSION['email']!='admin@gmail.com'){
	
        header("location: index.php"); 
	}

	require_once ('data.php');

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
                    .profilo{
                        margin-left:18%;
                        margin-right:18%;
                        margin-top:2%;
                        width:64%;
                        height:70%;
                        background-color: #ff8733;
                    }           
                    .fotoprofilo{
                        background-color: #ff6900;
                        margin-left:6%;
                        width:35%;
                        height:63%;
                        border: 10px solid #ff6900;
                        float:left;
                    }
                    .titolo{
                        background-color: #ff6900;
                        width:40%;
                        margin-left:30%;
                        margin-right:30%;
                    }
                    .titolo .h1{
                        font-size: 4.9em;
                    }
                    .info{
                        background-color: #ff6900;
                        margin-left:5%;
                        margin-right:5%;
                        width:49%;
                        float:left;
                    }
                    .infoscritte{
                        background-color: #ff7816;
                        float:left;
                        margin-left:5%;
                        margin-right:5%;
                    }
                    .button{
                    background-color: #ff6900;
                    border: none;
                    color: white;
                    padding: 10px 0px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 28px;
                    margin: 4px 2px;
                    margin-left:13.5%;
                    margin-right:2%;
                    margin-top:2%;
                    cursor: pointer;
                        width: 20%;  
                        height: 10%;
                        font-family: "Open Sans", sans-serif;

                     }
                    #abc{
                        font-family: "Lucida Console", "Courier New", monospace;
                        font-size:150%;
                        width:90%;
                        background-color: #ff7816;
                        border:0px;
                        margin-left:5%;
                        margin-right:5%;
                        color: white;
                    }
                     #invia{
                        background-color: #ff6900;
                        border: none;
                        color: white;
                        padding: 10px 0px;
                        text-align: center;
                        text-decoration: none;
                        float: center;
                        font-size: 28px;
                        margin: 4px 2px;
                        margin-left:13.5%;
                        margin-right:2%;
                        margin-top:2%;
                        cursor: pointer;
                        width: 20%;  
                        height: 10%;
                        font-family: "Open Sans", sans-serif;
                    }
                    @media screen and (max-width: 430px) {
                        .bg{
                            background: repeating-linear-gradient(
                            45deg,
                            #ff6900,
                            #ff6900 40px,
                            #ff8733 40px,
                            #ff8733 80px
                            );
                        }
                     .profilo{
                        margin-left:5%;
                        margin-right:5%;
                        margin-top:2%;
                        width:90%;
                        height:120%;
                        background-color: #ff8733;
                    }           
                    .fotoprofilo{
                        
                        margin-left:12.5%;
                        margin-top:2%;
                        width:75%;
                        height:30%;
                        border: 10px solid #ff6900;
                    }
                    .titolo{
                        background-color: #ff6900;
                        width:85%;
                        margin-left:7.5%;
                        margin-right:7.5%;
                    }
                    .titolo .h1{
                        font-size: 4.9em;
                    }
                    .info{
                        background-color: #ff6900;
                        margin-left:12.5%;
                        margin-right:12.5%;
                        width:75%;
                    }
                    .infoscritte{
                        background-color: #ff7816;
                        float:left;
                        margin-left:10%;
                        margin-right:5%;
                    }
                        #invia{
                        background-color: #ff6900;
                        border: none;
                        color: white;
                        padding: 10px 0px;
                        text-align: center;
                        text-decoration: none;
                        display: inline-block;
                        font-size: 22px;
                        margin: 4px 2px;
                        margin-left:13%;
                        cursor: pointer;
                        width: 30%;  
                        height: 5%;
                        font-family: "Open Sans", sans-serif;
                    }
                    .button{
                        background-color: #ff6900;
                        border: none;
                        color: white;
                        padding: 10px 0px;
                        text-align: center;
                        text-decoration: none;
                        display: inline-block;
                        font-size: 18px;
                        margin: 4px 2px;
                        margin-left:13%;
                        cursor: pointer;
                        width: 30%;  
                        height: 5%;
                        font-family: "Open Sans", sans-serif;}      
                     }
                    @media screen and (max-width: 352px) {
                    .dropbtn {
                        background-color: #ff8733;
                        color: white;
                        padding: 16px;
                        font-size: 24px;
                        border: none;
                        cursor: pointer;
                        width: 140px;
                        height: 70px;
                    }
                    .titolo{
                        background-color: #ff6900;
                        width:90%;
                        margin-left:5%;
                        margin-right:5%;
                    }
                    .titolo .h1{
                        font-size: 4.5em;
                    }
                    .profilo{
                        margin-left:3%;
                        margin-right:3%;
                        margin-top:2%;
                        width:94%;
                        height:100%;
                        background-color: #ff8733;
                    }
                    .fotoprofilo{
                        margin-left:12.5%;
                        margin-top:2%;
                        width:75%;
                        height:25%;
                        border: 10px solid #ff6900;
                    }   
                    .infoscritte{
                        background-color: #ff7816;
                        float:left;
                        margin-left:8%;
                        margin-right:5%;
                        
                    }
                    #invia{
                        background-color: #ff6900;
                        border: none;
                        color: white;
                        padding: 10px 0px;
                        text-align: center;
                        text-decoration: none;
                        display: inline-block;
                        font-size: 22px;
                        margin: 4px 2px;
                        margin-left:13%;
                        cursor: pointer;
                        width: 30%;  
                        height: 5%;
                        margin-top: 5%;
                        font-family: "Open Sans", sans-serif;
                    }
                    .button{
                        background-color: #ff6900;
                        border: none;
                        color: white;
                        padding: 10px 0px;
                        text-align: center;
                        text-decoration: none;
                        display: inline-block;
                        font-size: 18px;
                        margin: 4px 2px;
                        margin-left:13%;
                        margin-top: 5%;
                        cursor: pointer;
                        width: 30%;  
                        height: 5%;
                        font-family: "Open Sans", sans-serif;
                    }
        
                }
            </style>
		<body>
			<div class="bg">
        <!--NAVBAR -->
			<?php require_once ("nav.php"); ?>
			<img src="img/immagina.png" class="flex">
			<div class="bottonialcentro">
				<a href="menu.php" class="button">Menù </a>
				<a href="#" class="button">Prenota</a>
				<a href="#" class="button">Chi siamo</a>
			</div>
			<br><br>		

		<div class="portata">
        	<br>
        	<div class="titolo">
        		<center><h1><b>Aggiungi portata</b></h1></center>
        	</div>
        	<div class="fotoportata">  
			<?php

			if(isset($_POST['submit'])){
				echo $_POSt['img'];
			}	
			?>
		</div>
        <!--<input name="nome" ID="abc" type="text" placeholder="Inserire nome"<br>
        <input name="cognome" ID="abc" type="text" placeholder="Inserire cognome"<br>
        <input name="email" ID="abc" type="email" placeholder="esempio@mail.com"<br><br>
        <label for="sesso">Seleziona il sesso:</label>
        <input type="radio" name="sesso" value="Maschio"/><label>M</label> 
        <input type="radio" name="sesso" value="Femmina"/><label>F</label> 
        <br><input ID="invia" type="submit" value="Invia"><br>⠀-->
        <form method="POST" action="UploadPortata.php">
            <div class="info">  
                    <h2>⠀Nome:</h2><div class="infoscritte"><input name="nome" ID="abc" type="text" ></div><br>
                <br><h2>Descrizione:</h2><div class="infoscritte"><input name="descrizione" ID="abc" type="text" >></div><br>      
                <br><h2>Tempo Preparazione:</h2><div class="infoscritte"><input name="tempoPreparazione" ID="abc" type="text" ></div><br>
                <br><h2>Prezzo:</h2><div class="infoscritte"><input name="prezzo" ID="abc" type="text" ></div><br>
				<br><h2>tipo:</h2><div class="infoscritte"><input name="tipo" ID="abc" type="text" ></div><br>
                <h4>⠀</h4>
            </div><br>
            </div>
            <div style="clear:both;"></div>

            <div  method="post" enctype="multipart/form-data" name="upload_immagine">
            	Scegli immagine <input name="img" type="file" />
            	

		</div>
            <input ID="invia" type="submit" value="Salva">
        </form>
    
        <br>
        <div style="clear:both;"></div>
            </div>				


    
		<!-- Footer -->
	<footer class="page-footer font-small" style="background-color: #ff8733;">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-2" style=padding-top:1%;><center><img src="img/logo_small_icon_only_inverted.png"  width="128" height="128" ></center> </div>
				<div class="col-sm" style=padding-top:2%;><center><a href="#" class="buttonfooterb">About our food</a></center></div>
				<div class="col-sm" style=padding-top:2%;><center><a href="#" class="buttonfooter">Aiuto</a></center></div>
				<div class="col-sm" style=padding-top:2%;><center><a href="#" class="buttonfooter">Feedback</a></center></div>
				<div class="col-sm" style=padding-top:2%;><center><a href="#" class="buttonfooterb">Seguici sui social</a></center></div>
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