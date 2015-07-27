<!DOCTYPE html>
<html lang="en">
<head>
	<title>News Cache</title>
	<?php include 'header.php';?>
</head>
<body>
	<br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12" style="text-align:center;">
				<h1>News Site XSS Example</h1>
			</div>
			<div class="col-md-4 col-md-offset-2">
				<h2>Instructions</h2>
				The objective for this learning module is to complete the tasks on the right on the website below. The website below is embedded in an iframe, so please do not refresh the page or else some progress will be lost! Navigation can be done using back and forward to return to previous pages.
			</div>
			<div class="col-md-4">
				<h2>Tasks</h2>
				<ul>
					<li><span id='1'>Get the script, src='/js/xsssuccess.js', to execute by the search function</span></li>
					<li><span id='2'>Execute a stored attack by posting a comment in the salt story</span></li>
					<li><span id='3'>Make a XSS attack by registering for the daily newsletter</span></li>
				</ul>
			</div>
		</div>
		<div class="embed-responsive embed-responsive-16by9">
			<iframe class="embed-responsive-item" src="/xss/home.php" style="border: 3px solid black;"></iframe>
		</div>

		<!-- Footer -->
		<?php include 'footer.php';?>
	</div>
</body>
</html>