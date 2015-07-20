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
	<!--		
		<div class="row" style="text-align:center;">
			<div class="col-md-8 col-md-offset-2">
				<h1>XSS Beginner Tasks</h1>
				
			</div>
		</div>
	-->
	<div class="row">
		<div class="col-md-12" style="text-align:center;">
			<h1>Task List</h1>
		</div>
		<div class="col-md-6">
			<ul>
				<li>1</li>
				<li>2</li>
				<li>3</li>
				<li>4</li>
				<li>5</li>
			</ul>
		</div>
		<div class="col-md-6">
			<h2>Instructions</h2>
			The objective for this learning module is to complete the tasks on the left on the website below. The website below is embedded in an iframe, so please do no refresh the page or else all progress will be lost!
		</div>
	</div>
		<div class="row embed-responsive embed-responsive-16by9">
			<iframe class="embed-responsive-item col-md-12" src="/xsslevel1tasks.php" style="border: 3px solid black;"></iframe>
		</div>

		<!-- Footer -->
		<?php include 'footer.php';?>
	</div>
</body>
</html>