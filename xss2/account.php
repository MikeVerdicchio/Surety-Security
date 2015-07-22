<!DOCTYPE html>
<?php
header('X-XSS-Protection: 0');
?>
<html lang="en">
<head>
	<title>Level 1 Tasks</title>
	<?php include '../js/dependencies.php';?>
	<script src="../js/xsslevel1.js"></script>
</head>
<body>
	<br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-10">
				<input type="text" class="form-control" id="url" value="http://shoppingworld.com/account">
			</div>
			<div class="col-md-2">
				<input type="button" value="Go" onclick="urlInterpret();">
			</div>
		</div>
		<div class="row">
			<div class="col-md-12" style="text-align:center;">
				<h2>Current Orders</h2>
			</div>
		</div>
	</div>
</body>
</html>