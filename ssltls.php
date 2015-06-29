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
				SSL/TLS is an internet protocol that provides encryption
				and identification for a user to ensure a secure internet
				connection by using asymmetric cyrptographic methods. SSL and TLS both refer to
				the same protocol, SSL 3.1 is the same as TLS 1.0.
				<h3>Encryption</h3>
				Data is encrypted so even if there happens to be ousiders who are
				looking at the connection, they won't be able to
				decipher the information because the messages are encrypted. This is done
				by using public key cryptography.
				<h3>Identification</h3>
				The protocol ensures the user is communicating with the actual server
				they want to be communicating with, not some entity pretending to be the server.
				This is done by the server providing a verifiable certificate stating who they are.
			</div>
			<div class="row">
				<h2>How It works</h2>

			</div>
		</div>

		<!-- Footer -->
		<?php include 'footer.php';?>
	</div>
</body>
</html>