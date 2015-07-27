<!DOCTYPE html>
<html lang="en">
<head>
	<title>Man in the Middle</title>
	<!-- Dependencies -->
	<?php include 'header.php';?>
</head>
<body>
	<br>
	<div class="container-fluid">
		<div class="row" style="text-align:center;">
			<div class="col-md-8 col-md-offset-2">
				<h1>Man in the Middle Attack</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h2>What is a Man in the Middle attack?</h2>
				When a third party gets between, or in the middle, of a connection of two entities
				which can lead to the tampering and listening to the communications. Instead of user A
				talking to user B directly, there is a third party C that is in between them, potentially
				modifying messages. A->B turns into A->B->C
				<h3>Example</h3>
				Tony and Julie are two people communicating with each other and malicious Molly wants to listen into their conversation.
				Molly is able to intercept Julie's public key message to Tony. Molly then sends her own key to Tony.
				Tony believing he is communicating with Julie and using her key, sends a message back to Julie,
				but this message is encrypted with Molly's key. Molly decrypts the message using her key and reencrypts
				it using Julie's key potentially modifying the message in the process to give incorrect information, and sends the message to Julie.
				Julie receives the message and decrypts it using her key, thinking it was sent directly form Tony, not
				knowing about Molly.
				<h2>Repercussions of an Attack</h2>
				Data can be modified, like a bank account number being changed resulting in a payment going to another account or
				information being looked at by a third party and end parties not knowing their information is being looked
				at by another party.
				<h2>Where does SSL come in?</h2>
				SSL provides authentication of users with a certificate to ensure that they are communicating with the person they
				want to be communicating with. For example, if Julius wants to communicate with Google, Google provides their certificate
				to Julius to show that they are the ones he is communicating with or if both parties need to know who they are communicating with,
				both can send each other their certificates. This makes it very hard for a Man in the Middle attack to occur when both
				parties are using proper SSL protocols.
			</div>
		</div>

		<!-- Footer -->
		<?php include 'footer.php';?>
	</div>
</body>
</html>