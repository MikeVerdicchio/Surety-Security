<!DOCTYPE html>
<html lang="en">
<head>
	<title>Beginner XSS</title>
	<!-- Dependencies -->
	<?php include 'header.php';?>
</head>
<body>
	<br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12" style="text-align:center;">
				<h1>Task List</h1>
			</div>
			<div class="col-md-4">
				<h2>Instructions</h2>
				The objective for this learning module is to complete the tasks on the left on the website below. The website below is embedded in an iframe, so please do not refresh the page or else all progress will be lost! Navigation can be done using the back and forward to return to previous pages.
			</div>
			<div class="col-md-6">
				<br><br><br>
				<ul>
					<li><span id='1'>Find a way to get the script, src='/js/xsssuccess.js', to execute through the search function</span></li>
					<li><span id='2'>Register</span></li>
					<li><span id='3'>Comment</span></li>
				</ul>
			</div>
		</div>
		<div class="row embed-responsive embed-responsive-16by9">
			<iframe class="embed-responsive-item col-md-12" src="/xss2/storefront.php" style="border: 3px solid black;"></iframe>
		</div>
		<span id="demo"></span>

		<!-- Footer -->
		<?php include 'footer.php';?>
	</div>
</body>
</html>