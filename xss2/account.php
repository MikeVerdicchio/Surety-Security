<!DOCTYPE html>
<?php
header('X-XSS-Protection: 0');
?>
<html lang="en">
<head>
	<?php include '../js/dependencies.php';?>
	<link rel="stylesheet" type="text/css" href="../css/stylesxss.css">
	<script src="../js/xsslevel2.js"></script>
</head>
<body>
	<br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-11">
				<input type="text" class="form-control" id="url" value="http://shoppingworld.com/account">
			</div>
			<div class="col-xs-1">
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
							echo "<script>checkIfExecuted(" .$value[0].",".$value[1].",".$value[3].",".$value[2].",".($value[2]*$value[3]) .");</script>";
							if($value[0] == 3 && $value[1] == "Twenty Thousand Leagues Under The Sea" && $value[3] == 24000 && $value[2] ==  999 &&  $value[2]*$value[3] == 23976000){
								echo "<script>window.top.document.getElementById('taskonestatus').innerHTML = '&nbsp;&nbsp;&nbsp;&nbsp;<b>Complete</b>';</script>";
							}
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