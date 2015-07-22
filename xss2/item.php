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
				if(isset($_GET['id'])){
					echo "value='http://shoppingworld.com/item?id=" . $_GET['id'] ."' id='url'>";
				}
				else{
					echo "value='http://shoppingworld.com/item' id='url'>";
				}
				?>
			</div>
			<div class="col-md-2">
				<input type="button" value="Go" onclick="urlInterpret()">
			</div>
		</div>
		<div class="row">
			<?php
			echo '<div class="col-md-4" style="text-align:center;">';
			echo '	<img src="/img/'.$_GET['id'].'.jpg">';
			echo '</div>';
			?>
		</div>
	</div>
</body>
</html>