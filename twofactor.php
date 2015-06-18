<!DOCTYPE html>

<html lang="en">

<head>
    <!-- Dependencies -->
    <?php include 'dependencies.php';?>
    <script src="js/twofactorJS.js"></script>
</head>

<body>
    <?php include 'header.php';?>
    <br>
    <div class="container-fluid">
        <div class="row" style="text-align:center;">
            <div class="col-md-8 col-md-offset-2">
                <h1>Two Factor Authentication</h1>
            </div>
        </div>
        <div class="row">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2>Two Factor Authentication</h2>
                    Having a strong password is one way to avoid having one's account being compromised on the internet. Two factor authentication is another way to greatly increase the security on an account. Two factor authentication contains two of three things
                    <ul>
                        <li>Something you are (fingerprint)</li>
                        <li>Something you have (generated key from an app or a security card)</li>
                        <li>Something you know (password or an answer to a question)</li>
                    </ul>
                    Two factor authentication is usually a password and a generated one time use key. This key can be sent by a text message or accessed by an app on one's phone or other key generating device. If a hacker does obtain access to a password, two factor makes the hacker still most likely unable to access the account, the hacker won't have access to the one time key which is required to log in.
                    <br>
                    <br>There are some disadvantages to two factor authentication. If the device is ever lost, then the user cannot access their account and has to go through a process in order to reset the account, though as precaution against this some services offer backup codes that can be printed and stored in a wallet. The device also has to be around at all times with the user.
                    <br>
                    <br>Links to two step verification sites. <a href="https://www.google.com/landing/2step/">https://www.google.com/landing/2step/</a>
                </div>
            </div>
			
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<h2>Sample Login</h2>
					<p>Below is a simple example of how Two Factor Authentication works when logging into a website. Try logging in with the credentials. (Username="SuretySecurity" and Password="helloworld").</p>
					Username: <input type="text" id="username">
					Password: <input type="text" id="password">
					<button type="button" id="submit" class="btn btn-default btn-md">Login</button>
				</div>
			</div>
        </div>

        <!-- Footer -->
        <?php include 'footer.php';?>
    </div>
</body>

</html>