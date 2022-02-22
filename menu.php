<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


        <!-- LINK FOOTER -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="css/assets/style.css">
        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <!-- Development version -->
        <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
        <title>Prenota-One</title>
    </head>
    <style>
            .centrare{
                padding-left:8%;
                padding-right:8%;
                display: inline-block;
            }
            .bg{
                z-index: -1;
                background: repeating-linear-gradient(
                45deg,
                #ff6900,
                #ff6900 40px,
                #ff8733 40px,
                #ff8733 80px
                );
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
                font-size: 280%;
                margin: 4px 2px;
                margin-left:2%;
                margin-right:2%;
                cursor: pointer;
                width: 28%;  
                height: 10%;
                font-family: "Open Sans", sans-serif;
            }
            .buttonfooter {
                background-color: #ff6900;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                float:center;
                font-size: 180%;
                margin: 4px 2px;
                margin-left:2%;
                margin-right:2%;
                cursor: pointer;
                width: 75%;  
                height: 70%;
            }.buttonfooterb{
                background-color: #ff6900;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                float:center;
                font-size: 180%;
                margin: 4px 2px;
                margin-left:2%;
                margin-right:2%;
                cursor: pointer;
                width: 97%;  
                height: 70%;
            }
            .bottonialcentro{
                background-color:#ff6900;
                margin-left:22.5%;
                margin-right:22.5%;
                padding-left:1%;
                padding-right:1%;
                padding-bottom:0.75%;
                padding-top:0.75%;
                text-align: center;
                position: relative;
                z-index: 0;
                top:-10%;
            }
            .flex {max-width: 89%;
                position: relative;
                z-index: 0;
                margin-left:5.5%;
                margin-right:5.5%;
                border-radius: 0.1%;
            }
            .bottonialfooter{
                text-align: center;
                padding-left:1%;
                padding-right:1%;
                padding-bottom:0.75%;
                padding-top:0.75%;
                text-align: center;
                position: relative;
                z-index: 0;
                top:-10%;
            }
            .parent {
                text-align: center;
                margin: 20px 0;
                padding: 20px;
                }

            .parent div {
                margin:10px;
                padding: 10px;
                display: inline-block;
                text-align: left;
            }
            .pparte{
                background-color:#ff8733;
                text-align: center;
                padding-left:20%;
                padding-right:20%;
            }
            .pparte p {
                font-variant-numeric: oldstyle-nums;
                padding-left:10%;
                padding-right:10%;
            }
            .pparte h1 {
                font-variant-numeric: oldstyle-nums;
                color: #000000;
                padding-left:20%;
                padding-right:20%;
            }
            .sparte{
                background-color:#ff6900;
                text-align: center;
            }
            .sparte p {
                font-variant-numeric: oldstyle-nums;
                padding-left:10%;
                padding-right:10%;
            }
            .sparte h1 {
                font-variant-numeric: oldstyle-nums;
                padding-left:20%;
                padding-right:20%;
            }
            .card {
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                transition: 0.3s;
                width: 66%;
            }
            .card:hover {
                box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            }
            .allinea{
                display: inline;
            }
            .piatti a{
                display: inline-block;
                width: 512px;
                height: 512px;
                color: #ff6900;
                vertical-align: middle;
                text-decoration: none;
                font-size: 400%;
                border: .5em solid rgba(0,0,0,0);
                border-radius: 100%;
                background: rgb(245,245,245);
                box-shadow:
                inset 0 -6px 20px rgba(255,255,255,1),
                inset 0 6px 20px rgba(0,0,0,.4),
                0 4px 8px rgba(0,0,0,.9);
                text-align: center;
                position: relative;
                .dropbtn {
                background-color:#ff6900 ;
                color: white;

                border: none;
                cursor: pointer;
            }
            .dropbtn {
            background-color: #04AA6D;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            }

            .dropdown {
            position: relative;
            display: inline-block;
            }

            .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            }

            .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            }

            .dropdown-content a:hover {background-color: #ddd;}

            .dropdown:hover .dropdown-content {display: block;}

            .dropdown:hover .dropbtn {background-color: #3e8e41;}
    </style>
    <body>
        <div class="bg">
        <!--NAVBAR -->
            <nav class="navbar navbar-light" style="background-color: #ff6900;">
                <a class="navbar-brand" href="#">
                    <img src="img/logo_large_b.png" width="333" height="108" class="d-inline-block align-top" alt="">
                </a>
                <div class="dropdown">
                    <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Dropdown button
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </nav>
            <img src="img/immagina.png" class="flex">
            <div class="bottonialcentro">
                <a href="#" class="button">Menù </a>
                <a href="#" class="button">Prenota</a>
                <a href="#" class="button">Chi siamo</a>
            </div>
        </div>    
    <!-- inizia parte menu -->
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

			$sql = "SELECT * FROM portata ORDER BY id ASC";
			$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			
			if(mysqli_num_rows($resultset) > 0)
				{
					while($row = mysqli_fetch_array($resultset))
					{
            
			    ?>
			<div class="col-md-4">
				<form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>">
					<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
						<img src="images/<?php echo $row["img"]; ?>" class="img-responsive" /><br />

						<h4 class="text-info"><?php echo $row["nome"]; ?></h4>

						<h4 class="text-danger">$ <?php echo $row["prezzo"]; ?></h4>

						<input type="text" name="quantity" value="1" class="form-control" />

						<input type="hidden" name="hidden_name" value="<?php echo $row["nome"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["prezzo"]; ?>" />

						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />

					</div>
				</form>
			</div>
	            <?php 
                    }
            } ?>
    
        <!-- Footer -->
<footer class="page-footer font-small" style="background-color: #ff8733;">
    <div class="container-fluid">
        <div class="row">
            <div class="col" style=padding-top:1%;><center><img src="img/logo_small_icon_only_inverted.png"  width="128" height="128" ></center> </div>
            <div class="col" style=padding-top:2%;><center><a href="#" class="buttonfooterb">About our food</a></center></div>
            <div class="col" style=padding-top:2%;><center><a href="#" class="buttonfooter">Aiuto</a></center></div>
            <div class="col" style=padding-top:2%;><center><a href="#" class="buttonfooter">Feedback</a></center></div>
            <div class="col" style=padding-top:2%;><center><a href="#" class="buttonfooterb">Seguici sui social</a></center></div>
            <div class="col" style=padding-top:1%;><center>⠀</center> </div>
        </div>
    </div>
<!-- Footer Elements -->
  <!--Grid row-->
</div>
<!-- Footer Elements -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2020 Copyright:
  <a href="#">SCV.com</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer --> 
    </body>
    </html>