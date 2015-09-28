<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hashing</title>
    <?php include 'header.php';?>
    <script src="js/hashingJS.js"></script>
</head>

<body>
    <br>
    <div class="container-fluid">
        <div class="col-md-8 col-md-offset-2">
            <div class="row" style="text-align:center;">
                <h1>Password Hashing</h1>
            </div>
            <div class="row">
                <h2>Hashing Passwords</h2> When designing an application that requires the user to login with a password, the developer should not store this data in a plaintext format. If the database becomes compromised and an outside user obtains access, all of the passwords are visible without any outside work required to crack the passwords. Password hashing makes it harder for someone to get the correct password even when having access to the database.
                <br>
                <br>A password hash is a cryptographic technique that takes in a password and outputs a random, fixed-length string of characters. For example 123456 turns into 8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92 using SHA-256. A hash has preimage resistance which means that it is extremely difficult to discover the input based solely on the output of the hash as one small change to the input completely changes the resulting string. This makes it very hard to determine what password goes with the associated hash. However, some methods of hashing aren't considered to be secure anymore. Some hashes have precomputed password hash dictionaries that are associated with them that stores a password with its associated hash. This makes the job very easy for hackers as the only thing they have to do is type in the hash and the password will be returned from the table.
                <br>
                <br>As a defense against precomputed password hash dictionaries, a salt can be added to a password. A salt is a randomly generated string that is added to a password, which can make the password hash to a different string. For example, password + "kdjlkajdiI" and password + "eirupqweor" will hash differently despite them being the same password. The only drawback to using salt is that the salt has to be stored in a database. Precomputed password hash dictionaries are pretty much rendered useless with this.
                <br>
                <br>Having a slower hash function provides an extra layer of security against brute force attacks. If a database of hashes was compromised, then the hacker will still have to brute force the hashes. This will result in the hacker going through the hash function in order to try and match the hashes together. If a hashA takes five times longer than hashB, then it slows down the hacker because they can only go through 1/5 of the possibilities in the same amount of time.
                <br>
                <br>An easier way to have a user login system for some websites is just to use Facebook, Google, or another common service to login. There are also many well tested libraries that can be incorporated into a website without too much extra work. It's important to always stay current with password storage methods as over time newer methods are found or older techniques are compromised.
                <br>
                <br>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/z8tUW8Z96dI?hd1080"></iframe>
                </div>
            </div>
            <div class="row">
                <h2>Hash a String</h2> Type in a string to be hashed
                <input type='text' id="str">
                <select id="hash">
                    <option value='md5'>MD5</option>
                    <option value='sha256'>SHA-256</option>
                </select>
                <input type='submit' class='btn btn-default' onclick="hash()">
                <br>
                <span id='result'></span>
            </div>
            <div class="row">
                <h2>Lookup a Hash</h2> Type in a MD5 hash to be looked up
                <input type='text' id="toCrack">
                <input type='submit' class='btn btn-default' onclick="hashLookup()">
                <span id='crack'></span>
                <br>Powered by <a href="http://www.md5crack.com/">http://www.md5crack.com/</a> API
            </div>
            <div class="row">
                <h2>Problem</h2> You find a piece of paper on the ground with a hash written on it b2568979648e8c2364eac353b9fee7b358741ddc82dd262b9dbc4176b03e7fff What value does this hash go to?
                <input type='text' id="prob1str">
                <input type='submit' onclick="problem1()">
                <b><span id='prob1ans'></span></b>
            </div>
            <div class="row">
                <h2>External Resources</h2>
                <a href="https://www.youtube.com/watch?v=8ZtInClXe1Q">Computerphile - How NOT to Store Passwords! Video</a>
                <br>
                <a href="https://crackstation.net/hashing-security.htm">Crackstation - Doing Password Hashing Right</a>
            </div>
        </div>
        <?php include 'footer.php';?>
    </div>
</body>

</html>