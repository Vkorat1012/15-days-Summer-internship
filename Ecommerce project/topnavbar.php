<!-- Start Top Nav -->

<?php 
require_once("db/dbconn.php");

session_start();
?>
<title>Step Up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/apple-icon.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
<nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                <?php if(isset($_SESSION['User_id']))
             { 
                 echo "Welcome, ". $_SESSION['First_Name']."  " .$_SESSION['Last_Name'];

             }
	        ?>
                   
                </div>
                <div>
            <?php if(!isset($_SESSION['User_id']))  
             {
                
            ?>
                  <!--  <a class="text-light" href="https://fb.com/templatemo" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin fa-sm fa-fw"></i></a>
             --> 
                    <a class="navbar-sm-brand text-light text-decoration-none" href="index.php">Home  |</a>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="login.php">Login    |</a>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="registration.php">registration  </a>
					
			<?php
             }  
            ?>
						
	        <?php if(isset($_SESSION['User_id']))
             { 
                
	        ?>
	
                    <a class="navbar-sm-brand text-light text-decoration-none" href="logout.php">Logout |</a>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="editprofile.php">Edit profile</a>
             <?php
             }  
            ?>       

			
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Top Nav -->