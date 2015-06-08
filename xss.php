<!DOCTYPE html>
<html>
<title>XSS</title>
<?php include 'dependencies.php';?>
<body>
	<?php include 'header.php';
	include 'getAll.php';
	$data = getData();
	?>
	<div class="container-fluid">
		<div class="row">
			<h1 style="text-align:center;">XSS</h1>
		</div>
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<?php
				$param = "";
				if (isset($_GET['xssparam'])){
					$param = $_GET['xssparam'];
				}
				echo "<input type='hidden' value=".$param.">";
				?>
			</div>
		</div>
		<div class="row">
			<br>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				This is an example of a XSS attack in which an object on the page is automatically
				filled in with a parameter in the URL. The parameter is not sanitized before being
				put into the object which can result in code being passed in.
				Put this at the end of the url and see what happens
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<pre><?php echo htmlspecialchars("?xssparam=><script type='text/javascript'>document.body.innerHTML = '';</script><p></p");?></pre>
			</div>
		</div>
		<div class="row">
			<br>
		</div>
		<div class="row">
			<br>
		</div>
		<div class="row">
			<form action="sqlForXssPage.php" method="post" class="form-horizontal">
				<div class="col-md-3 col-md-offset-4">
					<input type='text' class='form-control' name='val'>
				</div>
				<div class="col-md-1">
					<input type="submit" class="btn btn-default" value="Submit">
				</div>
			</form>
		</div>
		<div class="row">
			<div class="col-md-3 col-md-offset-4">
				<?php
				foreach($data as $line){
					echo $line['stringy'] . "<br>";
				}
				?>
			</div>
		</div>
	</div>
	<?php include 'footer.php';?>
</body>
</html>