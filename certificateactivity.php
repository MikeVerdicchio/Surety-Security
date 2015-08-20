<!DOCTYPE html>
<html lang="en">
<head>
	<title>Certificate Lookup</title>
	<!-- Dependencies -->
	<?php include 'header.php';?>
	<script src="js/certLookup.js"></script>
</head>
<body>
	<br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h1 style="text-align:center;">Certificate Lookup</h1>
				<h2>Objectives</h2>
				<ul>
					<li><div data-toggle="modal" data-target="#taskone" style="display: inline-block;"><a href="#">Task One - Find a certificate chain that is four or longer</a></div><span id="taskonestatus">&nbsp;&nbsp;&nbsp;&nbsp; Incomplete</span></li>
					<li><div data-toggle="modal" data-target="#tasktwo" style="display: inline-block;"><a href="#">Task Two - Find a website using SSL 3.0 or lower</a></div><span id="tasktwostatus">&nbsp;&nbsp;&nbsp;&nbsp; Incomplete</span></li>
				</ul>
				<div style="text-align:center;">
					Enter a website: <input type='text' id="site">
					<input type='submit' class='btn btn-default' onclick="certLookup()">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h1></h1>
				<span id="certInfo"></span>
			</div>
		</div>
	</div>
	<div id="taskone" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;  </button>
					<h4 class="modal-title" id="myModalLabel">Long Certificate Chain</h4>
				</div>
				<div class="modal-body">
					Try and find a website that has a certificate chain that is longer than four. Long certificate chains are not
					necessarily bad, but could be cause for concern.
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<div id="taskone" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;  </button>
					<h4 class="modal-title" id="myModalLabel">Using SSL 3.0 or lower</h4>
				</div>
				<div class="modal-body">
					Try and find a website that is currently using SSL 3.0 or lower, most websites have made the switch to TLS, but a
					few websites have not. 
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer -->
	<?php include 'footer.php';?>
</body>
</html>