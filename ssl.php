<!DOCTYPE html>
<html lang="en">
<head>
	<title>SSL</title>
	<!-- Dependencies -->
	<?php include 'header.php';?>
</head>
<body>
	<br>
	<div class="container-fluid">
		<div class="row" style="text-align:center;">
			<div class="col-md-8 col-md-offset-2">
				<h1>Secure Sockets Layer</h1>
			</div>
		</div>
		<div class="col-md-8 col-md-offset-2">
			<div class="row">
				<h2>Communicating Securely</h2>
				Communicating on the internet requires packets traveling across the Internet
				through routers controlled by different organizations. This leaves the packets
				vulnerable to eavesdropping and tampering. Sensitive information, like passwords
				and credit card numbers, need to be transmitted securely. Data needs to be encrypted
				so eavesdroppers cannot decipher or alter the message and the receiver can trust 
				the message came from the claimed sender. To communicate safely over the Internet,
				a secure channel must be established. This is done using a key to encrypt messages.
				Both parties using the same key to encrypt and decrypt messages is called symmetric encryption.
				SSL provides a way to create the secure channel and distribute the symmetric key safely.
				The challenge is to established the shared, secret key without the two parties involved
				obtaining the key.
				<h2>SSL Overview</h2>
				Before the secure channel is created, the user needs to know who they are communicating with.
				They cannot accept at face value that a message containing a cryptographic key is from who
				the sender claims to be. SSL uses a strategy to build up trust, starting with a key for a trusted
				Certificate Authority that is pre-loaded into the client's browser. This cannot be done using
				symmetric cryptography because if the key used to establish trust is distributed in browsers,
				any semi-competent hacker would be able to extract the key and impersonate the trusted authority.
				This is where asymmetric cryptography comes into play.<br><br>
				Asymmetric cryptography uses two different keys, a public key that is available to everyone and
				a private key that is only available to one party. If something is encrypted using the private key,
				the only way it can be decrypted is by using the public key. This allows for a signature to be generated
				using the private key that can be only decrypted using the public key. The receiver of a message
				is then guaranteed that the message came from the person who signed it. <br><br>
				The public key of the trusted Certificate Authority is built into the client's browser. This can be used
				to verify a signature generated using the corresponding private key, which should be kept securely
				by the Certificate Authority. To convince the client it represents the intended site, a server needs to
				provide a certificate that contains the identity of the website an is singed by a trusted Certificate Authority.
				The other important thing that is in this certificate is the website's public key. Since it is part of
				the signed certificate, the client trusts that only the server that matches the identity in the certificate
				as the corresponding private key. <br><br>
				When a user tries to connect to a website securely, the website will send their certificate to the user.
				The user's browser has trusted CAs built into it, which contains the public key of the CA. When the certificate
				is received, the signature can be verified that it was issued by the CA by using the public key in the browser
				to decrypt the signature. <br><br>
				After verifying that they are communicating with the correct website, the client then generates a secretly key, encrypts
				it using the server's public key, and sends it to the server. This message is secure because the only party that can
				decrypt the message is the server with their private key. The server decrypts the secret key using their private key
				and starts using the secret key to encrypt messages from their end. Both sides are using the secret key, that only they know,
				to create a secure channel for communication over the Internet.
				<h2>Summary</h2>
				SSL works by establishing a secure channel for communication through distributing a shared symmetric key to both parties.
				Having a signature on a certificate stored on a site by a third party Certificate Authority allows for a user to ensure
				that they are communicating with the correct website. Once both parties have the secret key, secure communication can begin.

			</div>
			<!-- Footer -->
			<?php include 'footer.php';?>
		</div>
	</div>
</body>
</html>