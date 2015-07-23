<!DOCTYPE html>
<?php
header('X-XSS-Protection: 0');
?>
<html lang="en">
<head>
	<title>Level 2 Tasks</title>
	<?php include '../js/dependencies.php';?>
	<script src="../js/xsslevel2.js"></script>
</head>
<body>
	<br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-10">
				<input type="text" class="form-control" id="url" value="http://shoppingworld.com/storefront">
			</div>
			<div class="col-md-2">
				<input type="button" value="Go" onclick="urlInterpret();">
			</div>
		</div>
		<div class="row">
			<div class="col-md-12" style="text-align:center;">
				<h1>Welcome to Shopping World!</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
			<nav class="navbar navbar-default">
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Books<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="/xss2/fantasy">Fantasy</a></li>
								<li><a href="/xss2/sports">Sports</a></li>
							</ul>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						 <li><a href="/xss2/account">Account</a></li>
				</ul>
				</div>
			</nav>
		</div>
		</div>
	</div>
</body>
</html>