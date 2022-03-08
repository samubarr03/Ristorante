<?php
$admin=0;


if(!isset($_SESSION['email'])){
	//
		$logged = '<a href="login.html" class="w3-bar-item w3-button"><img src="img/user.png" width="50px" height="40px">Accedi</a>';

	}
	else{
		$logged = '<a href="profilo.php" class="w3-bar-item w3-button"><img src = "img/utente.png" style = "width: 20px; height: 20px;">Loggato</a>';
        if($_SESSION['email']=="admin@gmail.com"){
            $admin=1;    
        }

	}
    

?>

<html>  
    <style>
        @media screen and (max-height: 450px) {
            body {background-color: coral;}
					.sidenav {padding-top: 15px;}
					.sidenav a {font-size: 18px;}
					.dropbtn{
						width: 0px;
						height: 0px;
					}
                    .button {
				background-color: #ff8733;
				border: none;
				color: white;
				padding: 15px 32px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				float:center;
				cursor: pointer;
				width: 0%;  
				height: 00%;
				font-family: "Open Sans", sans-serif;
			}
            .dropdown{
                width: 0%;  
				height: 0%; 
            }
            .veloznonhafattouncazzo{
                position:fixed;
                z-index: 1;
            }
        }
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
    <div class="bg">
        <!--NAVBAR -->
		<div style="veloznonhafattouncazzo">
        <nav class="navbar navbar-light" style="position:fixed;background-color:#ff6900;z-index: 1;width:100%">
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Clients</a>
            <a href="#">Contact</a>
        </div>
        <span id="sparisci" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;⠀</span>

		    <br><a class="navbar-brand" href="#">
		    <a href="index.php"><img src="img/logo_large_b.png" width="308" height="100" class="d-inline-block align-top" alt=""></a></a>
		    <div class="dropdown">
                <button class="dropbtn"><a href="menu.php">Menù</a></button>
                <div class="dropdown-content">
                    <a href="menu.php?action=aggiungi&id=primo">Primi</a>
                    <a href="menu.php?action=aggiungi&id=carne">Carne</a>
                    <a href="menu.php?action=aggiungi&id=pesce">Pesce</a>
                    <a href="menu.php?action=aggiungi&id=contorno">Contorni</a>
                    <a href="menu.php?action=aggiungi&id=dolce">Dolci</a>
                    <a href="menu.php?action=aggiungi&id=pizza">Pizze</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn"><a href="menu.php">Catering</a></button>
                <div class="dropdown-content">
                </div>
            </div>
        <?php    if($admin==1){ ?>
            <button class="dropbtn"><a href="AddPortata.php">Inserisci Portata</a></button>
                <div class="dropdown-content">
            </div>
            <?php } ?>
            <div class="dropdown">
                <button class="dropbtn"> <?php echo $logged; ?> </button>
            <div class="dropdown-content">
                    <a class="dropdown-item" href="Ordina.php">Ordini</a>
                    <a class="dropdown-item" href="carrello.php">Carrello</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </div>
            
            <div class="bg">
            </div><br>
	    </nav></div>
    </div> 
</html>        