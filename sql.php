<!DOCTYPE html>
<html>
<title>SQL Injection</title>
<?php include 'header.php';	?>
<body>
	<div class="container-fluid">
		<div class="row">
			<h1 style="text-align:center;">SQL Injection</h1>
		</div>
		<div class="row">
			<form action="sqlForSqlPage.php" method="post" class="form-horizontal">
				<div class="col-md-3 col-md-offset-4">
					<input type='text' class='form-control' name='username'>
				</div>
				<div class="col-md-1">
					<input type="submit" class="btn btn-default" value="Submit">
				</div>
			</form>
		</div>
		<?php include 'footer.php';?>
	</div>
</body>
</html>