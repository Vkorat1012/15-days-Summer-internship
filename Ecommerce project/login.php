<!doctype html>
<html lang="en">
<?php 
	
    include 'topnavbar.php';
	?>
	
	<?php 
require_once("db/dbconn.php");
?>

	<?php 
	 $emailErr = $passwordErr ="";
	 $email = $password ="";
	 
{
	if($_SERVER["REQUEST_METHOD"]== "POST")
								{
									if(empty($_POST["email"]))
								{
									$emailErr="email Name is required";
								}
								else
								{
									$email=$_POST["email"];
								}
								if(empty($_POST["password"]))
								{
									$passwordErr="password is required";
								}
								else
								{
									$password=$_POST["password"];
								}
	if(isset($_POST["email"]) && isset($_POST["password"]))
	{	
		$email = $_POST["email"];
		$password = $_POST["password"];
		
		if( $email !='' && $password !='')
		{
			 $sql= "select * from customer where email= '".$email."' and password='".$password."' and is_active = 1";
			$result=mysqli_query($conn,$sql);
			if( $row = mysqli_fetch_array($result))
			  {
				  //session_start();
				 
				  $_SESSION['User_id'] = $row['customerid'];
				  $_SESSION['Email']=$row['email'];
                  $_SESSION['First_Name']=$row['firstname'];
                  $_SESSION['Last_Name']=$row['lastname'];
				 echo "<meta http-equiv='refresh' content='0;index.php'>";
			  }
		
			else
			{
			
			}
			
		}
	}
}
}
  
  
		
		?>

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/apple-icon.png">
    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
	<title>Step up</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="bk/css/bootstrap.css">
	<link rel="stylesheet" href="bk/vendors/linericon/style.css">
	<link rel="stylesheet" href="bk/css/font-awesome.min.css">
	<link rel="stylesheet" href="bk/vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="bk/vendors/lightbox/simpleLightbox.css">
	<link rel="stylesheet" href="bk/vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="bk/vendors/animate-css/animate.css">
	<link rel="stylesheet" href="bk/vendors/jquery-ui/jquery-ui.css">
	<!-- main css -->
	<link rel="stylesheet" href="bk/css/style.css">
	<link rel="stylesheet" href="bk/css/responsive.css">
	
	
	
<style>
	.error{color:red;}
</style>


</head>

<body>
	
	<!--================Header Menu Area =================-->
	
	<!--================Header Menu Area =================-->

	
	

	<!--================Login Box Area =================-->
	<section class="login_box_area p_120">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="bk/img/login3.jpg" alt="">
						<div class="hover">
							<h4>New to our website?</h4>
							<p>Let’s make excellent happen.</p>
							<a class="main_btn" href="registration.php">Create an Account</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
	
	<h3>Log in to enter</h3>
						<form class="row login_form"  method="post" id="contactForm" novalidate="novalidate">
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="email" placeholder="Username">
								 <span class="error"> <?php echo $emailErr;?> </span>
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="name" name="password" placeholder="Password">
							<span class="error"> <?php echo $passwordErr;?> </span>
							</div>
						
							
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="btn submit_btn">log in</button>
								<a href="forgot1.php">Forgot Password</a>
							</div>
							<div class="col-md-12 form-group">
								<a href="resetpassword1.php">Reset password</a>
							</div>
						</form>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->

	<!--================ Subscription Area ================-->
	<!--================ End Subscription Area ================-->

	
	<!--================ End footer Area  =================-->




	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="vendors/lightbox/simpleLightbox.min.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="vendors/isotope/isotope-min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="vendors/jquery-ui/jquery-ui.js"></script>
	<script src="vendors/counter-up/jquery.waypoints.min.js"></script>
	<script src="vendors/counter-up/jquery.counterup.js"></script>
	<script src="js/theme.js"></script>
</body>

</html>