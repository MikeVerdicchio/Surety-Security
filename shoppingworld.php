<!DOCTYPE html>
<html lang="en">
<head>
	<title>Shopping World</title>
	<?php include 'header.php';?>
</head>
<body>
	<br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12" style="text-align:center;">
				<h1>Shopping Site XSS Example</h1>
			</div>
			<div class="col-md-4 col-md-offset-2">
				<h2>Instructions</h2>
				The objective for this learning module is to complete the tasks on the left on the website below. The website below is embedded in an iframe, so please do not refresh the page or else some progress will be lost! Navigation can be done using back and forward to return to previous pages.
			</div>
			<div class="col-md-4">
				<h2>Task List</h2>
				<ul>
					<li><span id='1'>Figure a way how to purchase 999 of the $24,000 dollar book by using the script src="../js/buyalotofbooks.js"</span></li>
				</ul>
			</div>
		</div>
		<div class="embed-responsive embed-responsive-16by9">
			<iframe class="embed-responsive-item" src="/xss2/storefront.php" style="border: 3px solid black;"></iframe>
		</div>
		<!-- Footer -->
		<?php include 'footer.php';?>
	</div>
</body>
</html>