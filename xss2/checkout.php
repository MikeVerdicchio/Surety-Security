<!DOCTYPE html>
<?php
header('X-XSS-Protection: 0');
$str = $_GET['id']." ".$_GET['name']." ".$_GET['qty']." ".$_GET['price'];
setcookie(time(),$str)
?>
<html lang="en">
<head>
	<title>Level 1 Tasks</title>
	<?php include '../js/dependencies.php';?>
	<script src="../js/xsslevel2.js"></script>
</head>
<body>
	<br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-10">
				<?php
				echo '<input type="text" class="form-control" id="url" value="http://shoppingworld.com/checkout?id='.$_GET['id'].'&qty='.$_GET['qty'].'&name='.$_GET['name'].'&price='.$_GET['price'].'"">';
				?>
			</div>
			<div class="col-md-2">
				<input type="button" value="Go" onclick="urlInterpret();">
			</div>
		</div>
		<div class="row">
			<div class="col-md-12" style="text-align:center;">
				<?php
				echo '<h3>Thank you for purchasing '.$_GET['qty'].' of '. $_GET['name'] .'!</h3>';
				?>
			</div>
			<div class="col-md-12" style="text-align:center;">
				<input type="button" onclick="returnHome()" value="Go to Storefront">
			</div>
		</div>
	</div>
</body>
</html>