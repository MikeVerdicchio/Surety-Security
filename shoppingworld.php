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
				The objective for this learning module is to complete the tasks on the right on the website below. The website below is embedded in an iframe, so please do not refresh the page or else some progress will be lost! Navigation can be done using back and forward to return to previous pages.
			</div>
			<div class="col-md-4">
				<h2>Task List</h2>
				<ul>
					<li><div data-toggle="modal" data-target="#taskone" style="display: inline-block;"><a href="#">Task One - Inject Automatic Buying Script</a></div><span id="taskonestatus">&nbsp;&nbsp;&nbsp;&nbsp; Incomplete</span></li>
				</ul>
			</div>
		</div>
		<div class="embed-responsive embed-responsive-16by9">
			<iframe class="embed-responsive-item" src="/xss2/storefront.php" style="border: 3px solid black;"></iframe>
		</div>
		<div id="taskone" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;  </button>
						<h4 class="modal-title" id="myModalLabel">Stored Attack</h4>
					</div>
					<div class="modal-body">
						A prewritten script src="../buyalotofbooks.js" makes a user buy 999 books at $24,000 each. Find a way to make this script execute properly and then go to
						your account to verify that it has worked.
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!-- Footer -->
		<?php include 'footer.php';?>
	</div>
</body>
</html>