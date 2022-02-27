<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  body {
    font-family: "Lato", sans-serif;
  }

  .sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #ff8733;
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
    color: #ff6900;
  }

  .sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
  }

  @media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
    .Sidenav {
      display: none;
    }
  }
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>
<h2>Animated Sidenav Example</h2>
<p>Click on the element below to open the side navigation menu.</p>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
   
</body>
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
        <?php    if($admin==1){ ?>
            <button class="dropbtn"><a href="AddPortata.php">Inserisci Portata</a></button>
                <div class="dropdown-content">
            </div>
            <?php } ?>
            <div class="dropdown">
                <button class="dropbtn"> <?php echo $logged; ?> </button>
            <div class="dropdown-content">
                <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                    <a class="dropdown-item" href="Ordini.php">Ordini</a>
                    <a class="dropdown-item" href="carrello.php">carrello</a>
                </div>
            </div>
            
            <div class="bg">
            </div><br>
	    </nav>
    </div> 
</html>    