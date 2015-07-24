<!DOCTYPE html>
<html lang="en">
<head>
	<title>SSL/TLS</title>
	<!-- Dependencies -->
	<?php include 'header.php';?>
</head>
<body>
	<br>
	<div class="container-fluid">
		<div class="row" style="text-align:center;">
			<div class="col-md-8 col-md-offset-2">
				<h1>SSL/TLS</h1>
			</div>
		</div>
		<div class="col-md-8 col-md-offset-2">
			<div class="row">
				<h2>Secure Sockets Layer/Transport Layer Security</h2>
				SSL and TLS both refer to a similar protocol, but there are some small technical differences that seperate them into two different entities.
				For our purposes we will just refer to it as SSL.
				<h3>How can a user ensure that data is safely transmitted on the Internet?</h3>
				Sensitive information, like transmitting a credit card number during a purchase, needs to be safely transmited from the client to the server.
				The data needs to be encrypted, to ensure privacy in case of an outsider liistening in on the connection.
				The data needs to be ensured that it is going to the right server as sometimes outsiders can imitate sites to lead users believing that they are talking to the real one.
				THe data also needs to be unaltered, as an outsider could have the power to change the packets going back and forth.
				That's where SSL comes in, it provides a secure internet connection between the client and the server.
			</div>
		</div>

		<!-- Footer -->
		<?php include 'footer.php';?>
	</div>
</body>
</html>