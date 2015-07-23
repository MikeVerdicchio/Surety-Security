<!DOCTYPE html>
<?php
header('X-XSS-Protection: 0');
?>
<html lang="en">
<head>
	<title>Level 1 Tasks</title>
	<?php include '../js/dependencies.php';?>
	<script src="../js/xsslevel2.js"></script>
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
			<br>
			<?php
			echo '<div class="col-md-4" style="text-align:center;">';
			echo '	<img src="/img/'.$_GET['id'].'.jpg">';
			echo '</div>';
			$price = 0;
			$title = "";
			if($_GET['id'] == 1){
				$title = "Game Of Thrones";
				$price = 9.99;
			}
			elseif ($_GET['id'] == 2) {
				$title = "Fellowship Of The Ring";
				$price = 8.62;
			}
			elseif ($_GET['id'] == 3) {
				$title = "Twenty Thousand Leagues Under The Sea";
				$price = 24000.00;
			}
			echo '<div class="col-md-4" style="text-align:center;">';
			echo '</div>';
			echo '<div class="col-md-4" style="text-align:center;">';
			echo '	Buy '.$title.' for $'.$price.'<br>
					Quantity
					<select id="qty">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>&nbsp;&nbsp;';
			echo '<input type="hidden" id="id" value="'.$_GET['id'].'">
			<button type="button" onclick="buy();">Buy</button><br>
			Item #'. $_GET['id'] .'
			<input type="hidden" id="name" value="'.$title.'">
			<input type="hidden" id="price" value="'.$price.'">';
			echo '</div>';
			?>
		</div>
	</div>
</body>
</html>