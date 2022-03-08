<?php
    require_once ('data.php');
    require_once ('product.php');
    session_start();

	if(!isset($_SESSION['email'])){
	
        $logged = '<a href="login.html" class="w3-bar-item w3-button"><img src="img/user.png" width="50" height="40">Accedi</a>';
    
        }
        else{
            $logged = '<a href="profilo.php" class="w3-bar-item w3-button"><img src = "img/utente.png" style = "width: 20px; height: 20px;">Loggato</a>';
            
    
        }
        require_once ('data.php');


        
        if(isset($_GET['id'])) {
            $var=$_GET['id'];
            if( $var=="primo"){
                $sql = "SELECT * FROM portata where tipo='primo' ORDER BY id ASC";    
            }
            if( $var=="pizza"){
                $sql = "SELECT * FROM portata where tipo='pizza' ORDER BY id ASC";    
            }
            if( $var=="pesce"){
                $sql = "SELECT * FROM portata where tipo='pesce' ORDER BY id ASC";    
            }
            if( $var=="contorno"){
                $sql = "SELECT * FROM portata where tipo='contorno' ORDER BY id ASC";    
            }
            if( $var=="carne"){
                $sql = "SELECT * FROM portata where tipo='carne' ORDER BY id ASC";    
            }
            if( $var=="dolce"){
                $sql = "SELECT * FROM portata where tipo='dolce' ORDER BY id ASC";    
            }
        }
        else{
            $sql = "SELECT * FROM portata ORDER BY id ASC";    
        }

?>


<html>
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
        <title>Prenota-One</title>
    </head>
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
        <style>
            @import url(style.css);
            body {
                z-index: -1;
	background: repeating-linear-gradient(
	45deg,
	#ff6900,
	#ff6900 40px,
	#ff8733 40px,
	#ff8733 80px
	);
					}
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
                    .dropbtn {
				background-color:#ff6900 ;
				color: white;

				border: none;
				cursor: pointer;
			}
			.dropbtn {
				background-color: #ff8733;
				color: white;
				padding: 16px;
				font-size: 16px;
				border: none;
				cursor: pointer;
                margin-left:5%;
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
            a {
                color: black;
                text-decoration: none;
                background-color: transparent;
}
            
            </style>
    <body>
        <div class="bg">
        <!--NAVBAR -->
        <?php require_once ("nav.php"); ?>
				<div class="veloznonfanullaincredibileprofquestaèunadenuncianonsipuòlavorarecosilaprossimavoltaigruppipiùequilibrati">
					<a href="#" class="button">ehy che ci fai qua</a>
				</div>
        
    <!-- inizia parte menu -->

        <div style="carte">
            <?php
                $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			
                if(mysqli_num_rows($resultset) > 0)
                    {
                        while($row = mysqli_fetch_array($resultset))
                        {
                            component($row['nome'], $row['prezzo'], $row['img'], $row['id']);
                        }
                    }    
                    ?>
        </div>
    <br><br><br></div>                
    <div style="clear: both"></div>     

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
<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2020 Copyright:
  <a href="#">SCV.com</a>
</div>
</footer>
<!-- Footer --> 
    </body>
    </html>