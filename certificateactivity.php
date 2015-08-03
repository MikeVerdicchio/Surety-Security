<!DOCTYPE html>
<html lang="en">
<head>
	<title>Scavenger Hunt</title>
	<!-- Dependencies -->
	<?php include 'header.php';?>
</head>
<body>
	<br>
	<div class="container-fluid">
		<div class="row" style="text-align:center;">
			<div class="col-md-8 col-md-offset-2">
				<h1></h1>
				<?php
					echo exec('openssl s_client -connect google.com:443')
				?>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<?php include 'footer.php';?>
</div>
</body>
</html>