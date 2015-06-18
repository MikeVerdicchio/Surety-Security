<!DOCTYPE html>

<html lang="en">

<head>
    <!-- Dependencies -->
    <?php include 'dependencies.php';?>
    <script src="js/passwordsJS.js"></script>
</head>
<body>
	<?php include 'header.php';?>
	<br>
	<div class="container-fluid">
		<div class="row" style="text-align:center;">
			<div class="col-md-8 col-md-offset-2">
				<h1>Passwords</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h2>What is Considered a Strong Password?</h2>
				A password provides protection against outside forces accessing one's account. A user having a strong password is important because
				it helps prevent account compromisation. Just using one word or common patterns like 123456 or monkey1 does not provide any protection
				as these passwords can be easily found. In trying to compromise an account, a hacker will try to obtain a correct password by going through
				<br>
				<ul>
					<li>Words found in a dictionary (dragon)</li>
					<li>Common patterns (qwerty or 123456)</li>
					<li>Basic transformations (dr4g0n)</li>
					<li>A brute force search (aaa, aab, aac, ...)</li>
				</ul>
				A longer password and inclusion of symbols, numbers, uppercase, and lowercase characters increases the number of potential combinations 
				by expanding the search space. A password containing 12 or more characters is highly reommended because at 350 billion password cracks per second would take
				<?php
				echo number_format(((pow(95, 12)/350000000000)/60), 2)." minutes or ";
				echo number_format(((pow(95, 12)/350000000000)/60/60), 2)." hours or ";
				echo number_format(((pow(95, 12)/350000000000)/60/60/24), 2)." days or ";
				echo number_format(((pow(95, 12)/350000000000)/60/60/24/365), 2)." years or ";
				echo number_format(((pow(95, 12)/350000000000)/60/60/24/365/1000), 2)." centuries ";
				echo "to break in a best case scenario."
				?>
				A password containing padding that includes an uppercase and lowercase character, symbol, and digit like U7^d can make a password even stronger.
				Reusing passwords on sites is not recommended because even though one site might be safe, other sites might not
				be secure and store their passwords in plaintext or other insecure manner<br>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h2>Search Space Strength Calculator</h2>
				Enter in a password: <input type="text" id="password"><br>
				Your password is hidden within a space of <span id="strength"> </span>
				<br><br>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h2>Two Factor Authentication</h2>
				Having a strong password is one way to avoid having one's account being compromised on the internet. Two factor authentication
				is another way to greatly increase the security on an account. Two factor authentication contains two of three things
				<ul>
				<li>Something you are (fingerprint)</li>
				<li>Something you have (generated key from an app or a security card)</li>
				<li>Something you know (password or an answer to a question)</li>
			</ul>
				Two factor authentication is usually a password and a generated one time use key.
				This key can be sent by a text message or accessed by an app on one's phone or other key generating device.
				If a hacker does obtain access to a password, two factor makes the hacker still most likely unable to access the account, the
				hacker won't have access to the one time key which is required to log in.<br><br>
				There are some disadvantages to two factor authentication. If the device is ever lost, then the user cannot access their account
				and has to go through a process in order to reset the account, though as precaution against this some services offer backup
				codes that can be printed and stored in a wallet. The device also has to be around at all times with the user.<br><br>
				Links to two step verification sites. <a href="https://www.google.com/landing/2step/">https://www.google.com/landing/2step/</a>
			</div>
		</div>
    </div>
        <!--
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h2>Hashing Passwords</h2>
				When designing an application that requires the user to login with a password, the developer should not store this
				data in a plaintext format. If there the database becomes compromised and an outside user obtains access, all of
				the passwords are visible without any outside work required. Password hashing makes it harder for someone to get
				the correct password even when having access to the database.<br><br>
				A password hash takes in the password and outputs a completely different string. For example 123456 turns into
				8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92 using SHA-256. A hash is a one way street, once
				the password is turned into a hash, there is no way to go from the hash to the password. This makes it very hard to
				determine what password goes with the associated hash. However, some methods of hashing aren't considered to be secure
				anymore. Some hashes have rainbow tables that are associated with them. A rainbow table stores a password with its
				associated hash. This makes the job very easy for hackers as the only thing they have to do is type in the hash and
				the password with be returned from the table.<br><br>
				As a defense against rainbow tables, a salt can be added to a password. A salt is a randomly generated string that is
				added to a password, which can make the password hash to a different string. For example, password + "kdjlkajdiI" and
				password + "eirupqweor" will hash differently despite them being the same password. The only drawback to using salt
				is that the salt has to be stored in a database. Rainbow tables are pretty much rendered useless. with this.<br><br>
				Having a slower hash function provides an extra layer of security against brute force attacks. If a database of hashes
				was compromised, then the hacker will still have to brute force the hashes. This will result in the hacker going through
				the hash function in order to try and match the hashes together. If a hashA takes five times longer than hashB, then it
				slows down the hacker because they can only go through 1/5 of the possibilities in the same amount of time.<br><br>
				An easier way to have a user login system for some websites is just to use Facebook, Google, or another common service
				to login. It's important to always stay current with password storage methods as over time 
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
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
	-->

        <!-- Footer -->
        <?php include 'footer.php';?>
    </div>
</body>

</html>