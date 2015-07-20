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
				<input type="text" class="form-control" id="url" value="http://newscache.com/register">
			</div>
			<div class="col-md-2">
				<input type="button" value="Go" onclick="urlInterpret();">
			</div>
		</div>
		<div class="row">
			<div class="col-md-12" style="text-align:center;">
				<h1>Register for Newsletter</h1>
			</div>
			<div class="col-md-12" style="text-align:center;">
				Name: <input type="text" id="username"><br><br>
			</div>
			<div class="col-md-12" style="text-align:center;">
				Email: <input type="text"><br><br>
			</div>
			<div class="col-md-12" style="text-align:center;">
				<input type="button" value="Register" onclick="register()">
			</div>
		</div>
	</div>
</body>
</html>