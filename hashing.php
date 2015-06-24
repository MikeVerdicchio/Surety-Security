<!DOCTYPE html>
<html lang="en">
<head>
	<title>Hashing</title>
	<!-- Dependencies -->
	<?php include 'header.php';?>
	<script src="js/hashingJS.js"></script>
</head>
<body>
	<br>
	<div class="container-fluid">
		<div class="row" style="text-align:center;">
			<div class="col-md-8 col-md-offset-2">
				<h1>Password Hashing</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h2>Hashing Passwords</h2>
				When designing an application that requires the user to login with a password, the developer should not store this
				data in a plaintext format. If the database becomes compromised and an outside user obtains access, all of
				the passwords are visible without any outside work required to crack the passwords. Password hashing makes it harder for someone to get
				the correct password even when having access to the database.<br><br>
				A password hash is a cryptogrphic technique that takes in a password and outputs a completely different string. For example 123456 turns into
				8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92 using SHA-256. A hash is a one way street, once
				the password is turned into a hash, there is no way to go from the hash to the password. This makes it very hard to
				determine what password goes with the associated hash. However, some methods of hashing aren't considered to be secure
				anymore. Some hashes have precomputed password hash dictionaries that are associated with them that stores a password with its
				associated hash. This makes the job very easy for hackers as the only thing they have to do is type in the hash and
				the password with be returned from the table.<br><br>
				As a defense against precomputed password hash dictionaries, a salt can be added to a password. A salt is a randomly generated string that is
				added to a password, which can make the password hash to a different string. For example, password + "kdjlkajdiI" and
				password + "eirupqweor" will hash differently despite them being the same password. The only drawback to using salt
				is that the salt has to be stored in a database. Precomputed password hash dictionaries are pretty much rendered useless with this.<br><br>
				Having a slower hash function provides an extra layer of security against brute force attacks. If a database of hashes
				was compromised, then the hacker will still have to brute force the hashes. This will result in the hacker going through
				the hash function in order to try and match the hashes together. If a hashA takes five times longer than hashB, then it
				slows down the hacker because they can only go through 1/5 of the possibilities in the same amount of time.<br><br>
				An easier way to have a user login system for some websites is just to use Facebook, Google, or another common service
				to login. It's important to always stay current with password storage methods as over time newer methods are found or
				older techniques are compromised.
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h2>Hash a String</h2>
				Type in a string to be hashed 
				<input type='text' id="str"> 
				<select id="hash">
					<option value='md5'>MD5</option>
					<option value='sha256'>SHA-256</option>
				</select>
				<input type='submit' class='btn btn-default' onclick="hash()">
				<span id='result'></span>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h2>Lookup a Hash</h2>
				Type in a hash to be looked up
				<input type='text' id="toCrack">
				<input type='submit' class='btn btn-default' onclick="hashLookup()">
				<span id='crack'></span><br>
				Powered by <a href="http://www.md5crack.com/">http://www.md5crack.com/</a> API
			</div>
		</div>
		<!-- Footer -->
		<?php include 'footer.php';?>
	</div>
</body>
</html>