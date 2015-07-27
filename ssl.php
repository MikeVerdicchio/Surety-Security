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
				SSL and TLS both refer to a similar protocol, but there are some small technical differences that separate them into two different entities.
				For our purposes we will just refer to it as SSL.
				<h3>How can a user ensure that data is safely transmitted on the Internet?</h3>
				Sensitive information, like transmitting a credit card number during a purchase, needs to be safely transmitted from the client to the server.
				The data needs to be encrypted, to ensure privacy in case of an outsider listening in on the connection.
				The data needs to be ensured that it is going to the right server as sometimes outsiders can imitate sites to lead users believing that they are talking to the real one.
				THe data also needs to be unaltered, as an outsider could have the power to change the packets going back and forth.
				That's where SSL comes in, it provides a secure internet connection between the client and the server.
				<h3>What does SSL Provide the user?</h3>
				<ul>
					<li>Encryption</li>
					<ul>
						<li>The user's communication between them and the server is protected
							so only the user and the server can interpret the communication</li>
							<li>Prevents outsiders from being able to interpret a grabbed packet from eavesdropping</li>
							<li>This is especially important when logging into websites using passwords financial transactions, and even viewing email</li>
						</ul>
						<li>Verifiability</li>
						<ul>
							<li>The user is actually communicating with the server they want to be communicating with;
								the server verifies that they are who they claim to be, this is done using certificates</li>
							</ul>
							<li>Integrity</li>
							<ul>
								<li>There won't be any changes to the packet's information by an outside force once it is sent</li>
							</ul>
						</ul>
						<h2>Encryption</h2>
						SSL uses asymmetric, or public key, encryption in the initial handshake. After the handshake,
						a symmetric key is used for further communication
						<h2>Verification</h2>
						A website is able to verify they are who they say they are by use of a certificate. A website typically goes
						through a third party, a Certificate Authority, in order to obtain a certificate for their site.
						The Certificate Authority checks if the site is legitimate by looking at the information on their web server,
						company, and location. The CA then creates a certificate for the website and signs it. The site then puts the certificate on their servers.
						The browser generally has root CAs that are trusted by the developer of the browser, but the user can also manually
						add/remove certificates if they want more control over their security. The browser verifies the signature of the website's certificate when connecting to their site.
						<h2>Integrity</h2>
						A Message Authentication Code provides a way to ensure the message is intact when arrived. The MAC is computed and sent
						with the message by the sender, the receiver then computes the MAC for the message, if the two MAC values differ then the message isn't intact.
						<h2>Computation Cost</h2>
						With modern hardware and software improvements, SSL doesn't take up much of the CPU load or network overhead anymore.
						Companies that switched over to SSL didn't have to purchase any additional hardware.
					</div>
				</div>
				<!-- Footer -->
				<?php include 'footer.php';?>
			</div>
		</body>
		</html>