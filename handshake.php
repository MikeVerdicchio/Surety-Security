<!DOCTYPE html>
<html lang="en">
<head>
	<title>SSL Handshake</title>
	<!-- Dependencies -->
	<?php include 'header.php';?>
</head>
<body>
	<br>
	<div class="container-fluid">
		<div class="row" style="text-align:center;">
			<div class="col-md-8 col-md-offset-2">
				<h1>SSL Handshake</h1>
			</div>
		</div>
		<div class="col-md-8 col-md-offset-2">
			<div class="row">
				<h2>What is the SSL Handshake?</h2>
				Before communications between two entities start, a secure connection must first be established. The handshake establishes the connection and provides both sides information of how they are going to be communicating and ensures a secure connection.
				<h2>Major Parts</h2>
				<h3>ClientHello Message</h3>
				Contains version of SSL the browser is using, siphersuites supported, random number, and other options
				<h3>ServerHello Message</h3>
				Contains what SSL version and siphersuite will be used, random number, and other toptions
				<h3>Certificate</h3>
				Contains the public key and a potential request for the client certificate
				<h3>ServerHelloDone</h3>
				Server sends message that it is done
				<h3>ClientKeyExchange</h3>
				Client starts key exchange to begin to create the symmetric key that will be used for encrypting communication
				<h3>ChangeCipherSpec from Client</h3>
				From now on messages will be encrypted from the client
				<h3>Finished from Client</h3>
				Ensures that the message was intact from server and sends back Finished
				<h3>ChangeCipherSpec from Server</h3>
				From now on messages will be encrypted from the server
				<h3>Finished from the Server</h3>
				Ensures that the message was intact from the client and then sends back Finished
				<h3>Client begins transmitting data</h3>
				Make sure that the message is intact and then secure data transmission can begin
			</div>
		</div>
		<!-- Footer -->
		<?php include 'footer.php';?>
	</div>
</body>
</html>