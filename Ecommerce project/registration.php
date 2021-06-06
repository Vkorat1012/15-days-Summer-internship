<!doctype html>
<html lang="en">
	
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
	<?php 
	include("topnavbar.php");	
	?>
<?php 
require_once("db/dbconn.php");
?>


<body>

	<!--================Header Menu Area =================-->

	<?php
						
						
								if($_SERVER["REQUEST_METHOD"]== "POST")
								{							
									
									if(isset($_POST["fname"]) && isset($_POST["mname"]) && isset($_POST["lname"]) && isset($_POST["zipcode"]) && isset($_POST["address"]) && isset($_POST["contact"]) && isset($_POST["email"]) && isset($_POST["pass"])) 
									{
										$fname=$_POST["fname"];
										$fname1=$_POST["mname"];
										$fname2=$_POST["lname"];
										$fname3=$_POST["zipcode"];
										$fname4=$_POST["address"];
										$fname5=$_POST["contact"];
										$fname6=$_POST["email"];
										$password=$_POST["pass"];
									
									     
										 if($fname!='' && $fname1!='' && $fname2!='' && $fname3!='' && $fname4!='' && $fname5!='' && $fname6!='' && $password!='')
										 {
										
										echo "value not null";
	
											 $sql ="insert into customer(firstname,middlename,lastname,zipcode,address,,mobile,email,password)
									         values('".$fname."','".$fname1."','".$fname2."','".$fname3."','".$fname4."','".$fname5."','".$fname6."','".$password."')";
											 $result=mysqli_query($conn,$sql);
										   if($result)
										   {
											   echo "<meta http-equiv='refresh' content='3; url=login.php'>";
										   }
										 }
									}
									else
									{
										echo "value not set";
									}
										}
										?>

	<section class="login_box_area p_120">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="login_box_img">
						<img class="img-fluid" src="img/loginjpg" alt="">
						<div class="hover">
							<h4>New to our website?</h4>
							<p>There are advances being made in science and technology everyday, and a good example of this is the</p>
							<a class="#" href="#"></a>
						</div>
					</div>
				</div>
				
    <!--================Login Box Area =================-->
				
				
				<div class="col-lg-6">
					<div class="login_form_inner reg_form">
						<h3>Create an Account</h3>
						<form class="row login_form" action="#" method="post" id="contactForm" novalidate="novalidate">
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="fname" placeholder="First Name">
							</div>
							
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="mname" placeholder="Middle Name">
							</div>
							
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="lname" placeholder="Last Name">
							</div>
							
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="Pincode">  
						  	</div>
							  
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="address" name="address" placeholder="Address">  
						  	</div>
							
							 

							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="number" name="contact" placeholder="Contact_No">
							</div>
							
							<div class="col-md-12 form-group">
								<input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
							</div>
							
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="password" name="pass" placeholder="Password">
							</div>
							<div class="col-md-12 form-group">
							
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="btn submit_btn">Register</button>
							</div>
						</form>
						
										</div>
				</div>
			</div>
		</div>
	</section>
	<script src="bk/js/jquery-3.2.1.min.js"></script>
	<script src="bk/js/popper.js"></script>
	<script src="bk/js/bootstrap.min.js"></script>
	<script src="bk/js/stellar.js"></script>
	<script src="bk/vendors/lightbox/simpleLightbox.min.js"></script>
	<script src="bk/vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="bk/vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="bk/vendors/isotope/isotope-min.js"></script>
	<script src="bk/vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="bk/js/jquery.ajaxchimp.min.js"></script>
	<script src="bk/js/mail-script.js"></script>
	<script src="bk/vendors/jquery-ui/jquery-ui.js"></script>
	<script src="bk/vendors/counter-up/jquery.waypoints.min.js"></script>
	<script src="bk/vendors/counter-up/jquery.counterup.js"></script>
	<script src="bk/js/theme.js"></script>
</body>

</html>