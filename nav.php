<?php

	if(!isset($_SESSION['email'])){
	
		$logged = '<a href="login.html" class="w3-bar-item w3-button"><img src="img/user.png" width="50" height="40">Accedi</a>';

	}
	else{
		$logged = '<a href="profilo.php" class="w3-bar-item w3-button"><img src = "img/utente.png" style = "width: 20px; height: 20px;">Loggato</a>';
		

	}
echo $logged;
?>

<html>  	
    <div class="bg">
        <!--NAVBAR -->
		<nav class="navbar navbar-light" style="background-color: #ff6900;">
		    <br><a class="navbar-brand" href="#">
		    <a href="index.php"><img src="img/logo_large_b.png" width="333" height="108" class="d-inline-block align-top" alt=""></a></a>
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
  
            <div class="dropdown">
                <button class="dropbtn"> <php echo("Hello world!"); ?> </button>
            <div class="dropdown-content">
                <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </div>
            <div class="bg">
            </div><br>
	    </nav>
    </div> 
</html>        