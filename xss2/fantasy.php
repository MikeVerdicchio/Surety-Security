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
				<input type="text" class="form-control" id="url" value="http://shoppingworld.com/fantasy">
			</div>
			<div class="col-xs-1">
				<input type="button" value="Go" onclick="urlInterpret();">
			</div>
		</div>
		<div class="row">
			<div class="col-md-12" style="text-align:center;">
				<h2>Fantasy Selections</h2>
			</div>
			<div class="col-md-4" style="text-align:center;">
				<img src="/img/1.jpg"><br>
				<b><a href="/xss2/item?id=1">Buy Game of Thrones</a></b>
				$9.99
			</div>
			<div class="col-md-4" style="text-align:center;">
				<img src="/img/2.jpg"><br>
				<b><a href="/xss2/item?id=2">Buy Fellowship of the Ring</a></b>
				$8.62
			</div>
			<div class="col-md-4" style="text-align:center;">
				<img src="/img/3.jpg"><br>
				<b><a href="/xss2/item?id=3">Buy Twenty Thousand Leagues Under the Sea</a></b>
				$24,000
			</div>
		</div>
	</div>
</body>
</html>