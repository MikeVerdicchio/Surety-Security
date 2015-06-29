<!DOCTYPE html>
<html>
<head>
	<title>SQL Injection</title>
	<?php include 'header.php';	?>
	<script src="js/sqlJS.js"></script>
</head>
<body>
	<br>
	<div class="container-fluid">
		<div class="row">
			<h1 style="text-align:center;">SQL Injection</h1>
		</div>
		<div class="col-md-8 col-md-offset-2">
			<div class="row">
				<h2>What is SQL Injection</h2>
			</div>
			<div class="row">
				On this webpage there is a username input field in which the user types in a
				username to login. However on the backend, the input field doesn't do any checking of what
				is inputted. Try to input a statement that will always be true.<br><br>
				Username: <input type='text' id='sql'>
				<input type='submit' class='btn btn-default' onclick="checkIfAlwaysTrue()"></input>
				<span id='result'></span>
				<input class='btn btn-default' value="Show Hint" onclick="showHint()"></input>
				<span id='hint'></span><br><br>
			</div>
		</div>
		<?php include 'footer.php';?>
	</div>
</body>
</html>