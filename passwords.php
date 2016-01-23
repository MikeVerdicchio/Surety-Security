<!DOCTYPE html>
<html lang="en">

<head>
    <title>Passwords</title>
    <?php include 'header.php';?>
    <script src="js/passwordsJS.js"></script>
</head>

<body>
    <br>
    <div class="container-fluid">
        <div class="row" style="text-align:center;">
            <div class="col-md-8 col-md-offset-2">
                <h1>Passwords</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2>What Makes a Strong Password?</h2> 
                <p>
                    For most accounts, a password provides both the first and last protection against outsiders compromising and abusing the account. A password is strong <em>enough</em> if it thwarts an attackers' attempts to break into the account. How strong it needs to be to do this depends on the value of the account (how much is it worth to an attacker to break into it) and the expected capabilities and resources of the attackers.
                </p>
                <p></p>
                Some attackers just want to break into as many accounts as they can for a particular site (for example, to obtain accounts from a web-based email site to use for sending spam email), and don't have any way to try to compromise accounts other than to guess logins. They will guess a few simple passwords for each account, and only compromise the accounts with the weakest passwords. This is known as an "on-line" attack, since the attacker must try password guessed by actually attempting to login to the site with them. Passwords like "123456", "password", and "secret" provide little protection as they will be amongst the first passwords guessed. An on-line attacker has a limited number of guesses, however, since each guess takes a lot of time to executed, and if the site has reasonable security protections, it will limit the number of failed login attempts for each account and requesting IP address.
                </p>
                <p>
                    Other attackers are able to obtain the password database from the target site (usually because of other security vulnerabilities). If the passwords are stored in a sensible way (see <a href="/hashing">Password Hashing</a>), the attacker who obtains the hashed password database still has work to do to obtain actual password. Such an attacker can execute an "off-line" attack, trying passwords against the hashed passwords to find ones that work. An off-line attacker can guess trillions of passwords, so will be able to break accounts that have passwords that might seem strong enough to humans.
                </p>

                <p>
                    In trying to compromise an account, an attacker will try to obtain a correct password by searching the space of likely passwords:
                    <br>
                    <ul>
                        <li>Words found in a dictionary (dragon)</li>
                        <li>Common patterns (qwerty or 123456)</li>
                        <li>Basic transformations (dr4g0n)</li>
                        <li>A brute force search (aaa, aab, aac, ...)</li>
                    </ul>
                    Including symbols, numbers, uppercase, and lowercase characters increases the number of potential combinations by expanding the search space.
                </p>
                <p>
                    A longer password is the best defense against a brute force attack, as each additional character raises the amount of brute force guesses potentially needed exponentially. A password containing padding that includes an uppercase and lowercase characters, symbols, and digits can make a password even stronger. A password containing 12 or more characters with a mix of symbols, numbers, and upper and lowercase letters should be sufficient. A well-resources current attacker can attempt about 350 billion password guesses per second. At this rate, we would expect it to take 50,000 years for an attacker to guess a good 12-character password.
                </p>
                <p>
                    Reusing passwords on sites is not recommended because even though one site might be safe, other sites might not be secure and store their passwords in plaintext or other insecure manner. Its best to use a weak password for sites where your account has no value (that is, you don't mind if it gets broken), and use unique, strong passwords for the few sites you use that are most valuable. Keep in mind that your email account can be used to reset other passwords for most sites, so this needs to be one of your strongest passwords!
                </p>

                <h2>Search Space Strength Calculator</h2> Enter in a password:
                <input type="text" id="password">
                <br>Your password is hidden within a space of <span id="strength"> </span>
                <br>This is based on the search space calculator on <a href='https://www.grc.com/haystack.htm'>https://www.grc.com/haystack.htm</a>
                Note that this is making lots of (risky!) assumptions about how an attacker searches for your password.


                <h2>External Resources</h2>
                <a href="http://blog.codinghorror.com/your-password-is-too-damn-short/">Coding Horror Post About Password Length</a>
                <br>
                <a href="https://www.praetorian.com/blog/statistics-will-crack-your-password-mask-structure">Password Cracking Overview</a>
                <br>
                <br>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Wv0EgRVKaXw?hd1080"></iframe>
                </div>
                <br>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2>Infographic</h2>
                <div style="text-align:center;">
                    <img src='img/Password-Infographic-Small.gif'>
                    <p class="text-center"><a href='img/Passwords-Infographic.pdf'>Click here to view as PDF</a>
                    </p>
                </div>
            </div>
        </div>
	
        <nav>
            <ul class="pager">
				<li><a href="/twofactor">Next: Two Factor Authentication</a></li>
            </ul>
        </nav>

        <?php include 'footer.php';?>
    </div>
</body>

</html>
