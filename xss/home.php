<!DOCTYPE html>
<?php
header('X-XSS-Protection: 0');
?>
<html lang="en">
<head>
	<?php include '../js/dependencies.php';?>
	<link rel="stylesheet" type="text/css" href="../css/stylesxss.css">
	<script src="../js/xsslevel1.js"></script>
</head>
<body>
	<br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-11">
				<?php
				echo "<input type='text' class='form-control'";
				if(isset($_GET['username'])){
					echo "value='http://newscache.com/home?username=" . $_GET['username'] ."' id='url'>";
					if(strpos($_GET['username'],"<script>") !== false && strpos($_GET['username'],"</script>") !== false ){
						echo '<script>window.top.document.getElementById("taskthreestatus").innerHTML = "&nbsp;&nbsp;&nbsp;&nbsp;<b>Complete</b>"</script>';
					}
				}
				else{
					echo "value='http://newscache.com/home' id='url'>";
				}
				?>
			</div>
			<div class="col-xs-1">
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
				<b><a href="/xss/register">Click here to register for the daily newsletter!</a></b>
			</div>
			<div class="col-md-2 col-md-offset-6">
				<input type="text" class="form-control" id="term">
			</div>
			<div class="col-md-1">
				<input type="button" value="Search" onclick="search()">
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<h2>Headlines</h2>
				<ul>
					<li>Is too much salt really detremental to a healthy lifestyle? <a href="/xss/story1">Comment</a></li>
					<li>Panda bear spotted in California forest</li>
					<li>Washington Nationals make it to the World Series</li>
					<li>One way websites are being hacked that you won't believe!</li>
				</ul>
			</div>
			<div class="col-md-4" style="text-align:center;">
				<h2>Top Story of the Day</h2>
				<img src="../img/assembly.jpg">
				<h3>Why you need to learn assembly code</h3>
			</div>
			<div class="col-md-4">
				<h2>Other News</h2>
				<ul>
					<li>Mathematician claims one year away from solving P=NP</li>
					<li>Data break exposing over 15 million md5 hashed passwords</li>
					<li>New trends in fashion that are all the color orange</li>
					<li>The celebrity that is making more money than Bill Gates</li>
				</ul>
				<h2>Top Searches</h3>
					<ul>
						<li>Javascript syntax</li>
						<li>Outer space</li>
						<li>Mac and cheese recipies</li>
						<li>Loan savings</li>
					</ul>	
				</div>
			</div>
		</div>
	</body>
	</html>