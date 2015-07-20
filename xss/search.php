<!DOCTYPE html>
<?php
header('X-XSS-Protection: 0');
?>
<html lang="en">
<head>
	<title>Level 1 Tasks</title>
	<?php include '../js/dependencies.php';?>
	<script src="../js/xsslevel1.js"></script>
</head>
<body>
	<br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-10">
				<?php
				echo "<input type='text' class='form-control'";
				if(isset($_GET['term'])){
					echo "value='http://newscache.com/search?term=" . $_GET['term'] ."' id='url'>";
				}
				else{
					echo "value='http://newscache.com/search?term=' id='url'>";
				}
				?>
			</div>
			<div class="col-md-2">
				<input type="button" value="Go" onclick="urlInterpret();">
			</div>
		</div>
		<div class="row">
			<div class="col-md-12" style="text-align:center;">
				<h1>Search Results for <?php if(isset($_GET['term'])){ echo $_GET['term'];}?></h1>
			</div>
			<div class="col-md-12">
			</div>
		</div>
	</div>
</body>
</html>