<?php
	
	include("db/dbconn.php");
	
	include 'topnavbar.php';
	
?>
<!DOCTYPE html>
<html>
<head>

	<link rel = "stylesheet" type = "text/css" href="fin3/css/style.css" media="all">
	<link rel="stylesheet" type="text/css" href="fin3/css/bootstrap.css">
	<script src="fin3/js/bootstrap.js"></script>
	<script src="fin3/js/jquery-1.7.2.min.js"></script>
	<script src="fin3/js/carousel.js"></script>
	<script src="fin3/js/button.js"></script>
	<script src="fin3/js/dropdown.js"></script>
	<script src="fin3/js/tab.js"></script>
	<script src="fin3/js/tooltip.js"></script>
	<script src="fin3/js/popover.js"></script>
	<script src="fin3/js/collapse.js"></script>
	<script src="fin3/js/modal.js"></script>
	<script src="fin3/js/scrollspy.js"></script>
	<script src="fin3/js/alert.js"></script>
	<script src="fin3/js/transition.js"></script>
	<script src="fin3/js/bootstrap.min.js"></script>
</head>
<body>
	

	
	<br>
<div id="container">
	

	<form method="post" class="well" style="background-color:#fff;">
	<table class="table">
	<label style="font-size:25px;">My Cart</label>
		<tr>
			<th><h3>Image</h3></td>
			<th><h3>Product Name</h3></th>
			<th><h3>Size</h3></th>
			<th><h3>Quantity</h3></th>
			<th><h3>Price</h3></th>
			<th><h3>Add</h3></th>
			<th><h3>Remove</h3></th>
			<th><h3>Subtotal</h3></th>
		</tr>

<?php





	if (isset($_GET['User_id']))
	$id=$_GET['User_id'];
	else
	$id=1;
	if (isset($_GET['action']))
	$action=$_GET['action'];
	else
	$action="empty";

	switch($action)
	{

		case "view":
			if (isset($_SESSION['cart'][$id]))
			$_SESSION['cart'][$id];
		break;
		case "add":
			if (isset($_SESSION['cart'][$id]))
			$_SESSION['cart'][$id]++;
			else
			$_SESSION['cart'][$id]=1;
		break;
		case "remove":
			if (isset($_SESSION['cart'][$id]))
			{
				$_SESSION['cart'][$id]--;
				if ($_SESSION['cart'][$id]==0)
				unset($_SESSION['cart'][$id]);
			}
		break;
		case "empty":
			unset($_SESSION['cart']);
		break;
	}
if (isset($_SESSION['cart']))
	{
		

	$total=0;
	foreach($_SESSION['cart'] as $id => $x)
	{
		
	$sql = "Select * from product where product_id=$id";
	$result=mysqli_query($conn,$sql);
	$myrow=mysqli_fetch_array($result);
	$name=$myrow['product_name'];
	$name=substr($name,0,40);
	$price=$myrow['product_price'];
	$image=$myrow['product_image'];
	$product_size=$myrow['product_size'];
	$line_cost=$price*$x;
	$total=$total+$line_cost;


		echo "<tr class='table'>";
		echo "<td><h4><img height='70px' width='70px' src='fin3/photo/".$image."'></h4></td>";
		echo "<td><h4><input type='hidden' required value='".$id."' name='pid[]'> ".$name."</h4></td>";
		echo "<td><h4>".$product_size."</h4></td>";
		echo "<td><h4><input type='hidden' required value='".$x."' name='qty[]'> ".$x."</h4></td>";
		echo "<td><h4>".$price."</h4></td>";
		echo "<td><h4><a href='cart.php?id=".$id."&action=add'><i class='icon-plus-sign'></i></a></td>";
		echo "<td><h4><a href='cart.php?id=".$id."&action=remove'><i class='icon-minus-sign'></i></a></td>";
		echo "<td><strong><h3>P ".$line_cost."</h3></strong>";
		echo "</tr>";
		}

		echo"<tr>";
		echo "<td></td>";
		echo "<td></td>";
		echo "<td></td>";
		echo "<td></td>";
		echo "<td><h2>TOTAL:</h2></td>";
		echo "<td><strong><input type='hidden' value='".$total."' required name='total'><h2 class='text-danger'>P ".$total."</h2></strong></td>";
		echo "<td></td>";
		echo "<td><a class='btn btn-danger btn-sm pull-right' href='cart.php?id=".$id."&action=empty'><i class='fa fa-trash-o'></i> Empty cart</a></td>";
		echo "</tr>";
	}
 	else
		echo "<font color='#111' class='alert alert-error' style='float:right'>Cart is empty</font>";

?>
	</table>


	<div class='pull-right'>
	<a href='index.php' class='btn btn-inverse btn-lg'>Continue Shopping</a>
	<?php echo "<button name='pay_now' type='submit' class='btn btn-inverse btn-lg' >Purchase</button>";
	include ("function/paypal.php");
	?>
	</form>
	</div>

		<div id="purchase" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:400px;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
				<h3 id="myModalLabel">Mode Of Payment</h3>
			</div>
				<div class="modal-body">
					<form method="post">
					<center>
						<input type="image" src="images/button.jpg" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!"  />
						<br/>
						<br/>
						<button class="btn btn-lg" >Cash</button>
					</center>
				</div>
			<div class="modal-footer">
				<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
					</form>
			</div>
		</div>


		<br />
		<br />
</div>
<br />
	<?php include 'footer.php'; ?>
</body>
</html>
