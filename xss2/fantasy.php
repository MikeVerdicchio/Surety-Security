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
				<input type="text" class="form-control" id="url" value="http://shoppingworld.com/fantasy">
			</div>
			<div class="col-md-2">
				<input type="button" value="Go" onclick="urlInterpret();">
			</div>
		</div>
		<div class="row">
			<div class="col-md-12" style="text-align:center;">
				<h2>Fantasy Selections</h2>
			</div>
			<div class="col-md-4" style="text-align:center;">
				<img src="/img/gameofthrones.jpg"><br>
				<a href="/xss2/gameofthrones">Buy Game of Thrones</a>
				$9.99
			</div>
			<div class="col-md-4" style="text-align:center;">
				<img src="/img/fellowship.jpg"><br>
				<a href="/xss2/fellowship">Buy Fellowship of the Ring</a>
				$8.62
			</div>
			<div class="col-md-4" style="text-align:center;">
				<img src="/img/underthesea.jpg"><br>
				<a href="/xss2/underthesea">Buy Twenty Thousand Leagues Under the Sea</a>
				$24,000
			</div>
		</div>
	</div>
</body>
</html>