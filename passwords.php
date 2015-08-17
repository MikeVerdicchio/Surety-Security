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
            <div class="col-lg-7">
                <h2>What is Considered a Strong Password?</h2> A password provides protection against outside forces accessing one's account. A user having a strong password is important because it helps prevent account compromisation. Just using one word or common patterns like 123456 or monkey1 does not provide any protection as these passwords can be easily guessed. In trying to compromise an account, a hacker will try to obtain a correct password by going through
                <br>
                <ul>
                    <li>Words found in a dictionary (dragon)</li>
                    <li>Common patterns (qwerty or 123456)</li>
                    <li>Basic transformations (dr4g0n)</li>
                    <li>A brute force search (aaa, aab, aac, ...)</li>
                </ul>
                The inclusion of symbols, numbers, uppercase, and lowercase characters increases the number of potential combinations by expanding the search space. A longer password is the best defense against a brute force attack, as each additional character raises the amount of brute force guesses potentially needed exponentially. A password containing padding that includes an uppercase and lowercase character, symbol, and digit like U7^d can make a password even stronger. A password containing 12 or more characters with a symbol, number, and upper/lowercase letter is highly recommended because at 350 billion password cracks per second, it would take 50,000 years to break in a best case scenario. Reusing passwords on sites is not recommended because even though one site might be safe, other sites might not be secure and store their passwords in plaintext or other insecure manner.
                <br><br>

                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Wv0EgRVKaXw?hd1080"></iframe>
                </div>

                <h2>Search Space Strength Calculator</h2> Enter in a password:
                <input type="text" id="password">
                <br>Your password is hidden within a space of <span id="strength"> </span>
                <br>This is based on the search space calculator on <a href='https://www.grc.com/haystack.htm'>https://www.grc.com/haystack.htm</a>

                <h2>External Resources</h2>
                <a href="http://blog.codinghorror.com/your-password-is-too-damn-short/">Coding Horror Post About Password Length</a>
                <br>
                <a href="https://www.praetorian.com/blog/statistics-will-crack-your-password-mask-structure">Password Cracking Overview</a>

            </div>
            <div class="col-lg-5" style="text-align:right;">
                <img src='img/Password-Infographic-Small.gif'>
                <p class="text-center"><a href='img/Passwords-Infographic.pdf'>Click here to view as PDF</a></p>
            </div>
        </div>

        <?php include 'footer.php';?>
    </div>
</body>

</html>