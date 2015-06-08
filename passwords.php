<!DOCTYPE html>
<html>
<title>Passwords</title>
<?php include 'dependencies.php';?>
<script type="text/javascript">
$(document).ready(function () {
	$('#password').keyup(function () { 
		document.getElementById("strength").innerHTML = Math.pow(95,document.getElementById("password").value.length);
	});
});
</script>
<script type="text/javascript">
function hash() {
	var xmlhttp = new XMLHttpRequest();
	var str = $('#str').val();
	var hash = $('#hash').val();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById("result").innerHTML = xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET", "hash.php?string=" + str + "&hash=" + hash);
	xmlhttp.send();
}
</script>
<body>
	<?php include 'header.php';?>
	<div class="container-fluid">
		<div class="row" style="text-align:center;">
			<div class="col-md-8 col-md-offset-2">
				<h1 style=" font-size: 400%;">Passwords</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h2>Overview</h2>
				A password provides protection against other people accessing one's account. A strong password is important because
				it helps to prevent account compromising. A strong password is easy to remember and type in along with being hard
				for hackers to steal and guess. Generally a hacker will go about gaining a password by going through a dictionary of words
				like the English dictionary for example, then through some common patterns like 123456 or substition of numbers for letters,
				and then finally brute force every single combination of passwords.<br><br>
				A passphrase is recommended as they are long and easy to remember. A passphrase can be thought of as a sentence like
				johnwenttothestorewithjennytoday. This is a very strong password because it is long and easy to remember. The longer
				the password, the amount of combinations it takes to guess is greatly expanded. Including symbols, numbers, uppercase, and
				lowercase numbers expands the number of combinations. Having 12 or more characters in the password makes it very strong
				and a very long time to brute force. Also using a padding that contains a uppercase, lowercase, symbol, and digit can make
				a strong password even stronger. Adding U7h^ for example to johnwenttothestoreU7h^withjennytoday is a very strong password,
				as it has length, a large search space, and easy to remember. It would take 48.17 trillion trillion trillion trillion
				centuries to guess and that's assuming one hundred trillion guesses per second.<br><br>
				Just using one word or common patterns like 123456 or monkey1 do not provide any protection as these passwords can be easily
				found. Reusing passwords on sites is not recommended because even though one site might be secure, other sites might not
				be secure and store their passwords in plaintext<br><br>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				Enter in a password: <input type="text" id="password">
				Your password is hidden within a space of <span id="strength"></span>
				<br><br>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				A 12 character password at 350 billion password cracks per second would take
				<?php
				echo number_format(((pow(95, 12)/350000000000)/60), 2)." minutes or ";
				echo number_format(((pow(95, 12)/350000000000)/60/60), 2)." hours or ";
				echo number_format(((pow(95, 12)/350000000000)/60/60/24), 2)." days or ";
				echo number_format(((pow(95, 12)/350000000000)/60/60/24/365), 2)." years or ";
				echo number_format(((pow(95, 12)/350000000000)/60/60/24/365/1000), 2)." centuries ";
				echo "to break your password with a best case scenario.<br><br>"
				?>
			</div>
		</div>
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
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h2>Two Factor Authentication</h2>
				Having a strong password is a way to avoid having one's account being compromised on the internet. Two factor authentication
				is another way to greatly increase the probability that a person is who they claim to be on a computer. Two factor authentication
				contains two of three things.
				-Something you are (fingerprint)
				-Something you have (generated key from an app or a security card)
				-Something you know (password or an answer to a question)<br><br>
				For the most part, two factor authentication is something you know and have. A password and a generated one time key are usually
				what is used. This one time key can be sent by a text message or accessed by an app on one's phone or other key generating device.
				If a hacker does obtain access to a password, two factor makes the hacker still most likely unable to access the account. The
				hacker won't have access to the one time key which is required to log in.<br><br>
				There are some disadvantages to two factor authentication. If the device is ever lost, then the user cannot access their account
				and has to go through a process in order to reset the account, though as precaution against this some services offer backup
				codes that can be printed and stored in a wallet. The device also has to be around at all times with the user.<br><br>
				Links to two step verification sites. <a href="https://www.google.com/landing/2step/">https://www.google.com/landing/2step/</a>
			</div>
		</div>
	</div>
	<?php include 'footer.php';?>
</body>
</html>