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
					<li><div data-toggle="modal" data-target="#taskone" style="display: inline-block;"><a href="#">Task One - Make Stored Attack</a></div><span id="taskonestatus">&nbsp;&nbsp;&nbsp;&nbsp; Incomplete</span></li>
					<li><div data-toggle="modal" data-target="#tasktwo" style="display: inline-block;"><a href="#">Task Two - Make Reflected</a></div><span id="tasktwostatus">&nbsp;&nbsp;&nbsp;&nbsp; Incomplete</span></li>
					<li><div data-toggle="modal" data-target="#taskthree" style="display: inline-block;"><a href="#">Task Three - Make Reflected/DOM Attack</a></div><span id="taskthreestatus">&nbsp;&nbsp;&nbsp;&nbsp; Incomplete</span></li>
				</ul>
			</div>
		</div>
		<div class="embed-responsive embed-responsive-16by9">
			<iframe class="embed-responsive-item" src="/xss/home.php" style="border: 3px solid black;"></iframe>
		</div>
		<div id="taskone" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;  </button>
						<h4 class="modal-title" id="myModalLabel">Stored Attack</h4>
					</div>
					<div class="modal-body">
						A stored attack is a script that is persistant on the website's servers. Your goal is to try to make an attack through the comments section
						on one of the stories on the website through embedded an onmouseover event on an image in a comment. When you go back to the page the comment will still be there.
						(Note: Data will only stay through browsing session as storage is only done through cookies)
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<div id="tasktwo" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;  </button>
						<h4 class="modal-title" id="myModalLabel">Reflected Attack</h4>
					</div>
					<div class="modal-body">
						Through the search function, it is possible to inject a script as a keyword for the search. Your goal is to inject the script
						src='/js/xsssuccess.js' into the search function or url parameter.
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<div id="taskthree" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;  </button>
						<h4 class="modal-title" id="myModalLabel">Stored Attack</h4>
					</div>
					<div class="modal-body">
						This attack can be done two ways, one by injecting the script while registering the newsletter, or by changing a url paramter
						on the hompage after you register for the newsletter. (Note: No email is actually stored while registering for the newsletter and
						you must include script tags in your attack to register completing the task)
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