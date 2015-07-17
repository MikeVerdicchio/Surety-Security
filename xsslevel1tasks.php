<!DOCTYPE html>
<html lang="en">
<head>
	<title>Level 1 Tasks</title>
	<?php include 'js/dependencies.php';?>
	<script src="js/xsslevel1.js"></script>
</head>
<body>
	<br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-10">
				<?php
				echo "<input type='text' class='form-control'";
				if(isset($_GET['username'])){
					echo "value='http://newscache.com?username=" . $_GET['username'] ."' id='url'>";
				}
				else{
					echo "value='http://newscache.com' id='url'>";
				}
				?>
			</div>
			<div class="col-md-2">
				<input type="button" value="Go" onclick="urlInterpret()">
			</div>
		</div>
		<div class="row">
			<div class="col-md-12" style="text-align:center;">
				<h1> Welcome to News Cache!</h1>
			</div>
			<?php 
			if(isset($_GET['username'])){
				echo "<div class='col-md-12' style='text-align:center;'>";
				echo "Thanks for registering " .$_GET['username'] . "!";
				echo "</div>";
			}
			?>
		</div>
		<div class="row">
			<div class="col-md-3">
				<a href="/xssregister">Click here to register for the daily newsletter!</a>
			</div>
			<div class="col-md-2 col-md-offset-6">
				<input type="text" class="form-control">
			</div>
			<div class="col-md-1">
				<input type="button" value="Search">
			</div>
			<div class="col-md-12">
				<h2>HEADLINES TODAY</h2>
				<ul>
					<li>Is too much salt really detremental to a healthy lifestyle?<a href="/samplestory1"> Link to article and discussion</a></li>
					<li>Panda bear spotted in California forest</li>
					<li>Washington Nationals make it to the World Series</li>
					<li>One way websites are being hacked that you won't beleve!</li>
				</ul>
			</div>
			<div class="col-md-12">

			</div>
		</div>
	</div>
</body>
</html>