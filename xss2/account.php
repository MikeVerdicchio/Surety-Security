<!DOCTYPE html>
<?php
header('X-XSS-Protection: 0');
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
			<div class="col-md-12">
				<table class="table tabled striped">
					<tr>
						<th>Item #</th>
						<th>Name</th>
						<th>Price</th>
						<th>Quantity</th>
						<th>Total Price</th>
					</tr>
					<?php
					foreach ($_COOKIE as $value)
					{
						$value = explode(",", $value);
						if(isset($value[3])){
							echo "<tr><td>" . $value[0] . "</td>";
							echo "<td>" . $value[1] . "</td>";
							echo "<td>$" . number_format($value[3],2) . "</td>";
							echo "<td>" . $value[2] . "</td>";
							echo "<td>$" . number_format(($value[2]*$value[3]),2) . "</td></tr>";
						}
					}
					?>
				</table>
			</div>
			<div class="col-md-12" style="text-align:center;">
				<input type="button" onclick="returnHome()" value="Back">
			</div>
		</div>
	</div>
</body>
</html>