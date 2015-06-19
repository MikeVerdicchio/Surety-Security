<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Dependencies -->
    <?php include 'dependencies.php';?>
</head>

<body>
    <!-- Header and Navbar -->
    <?php include 'header.php';?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Videos <small>Developers</small></h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Video 1: What is Password Hashing? -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x300" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>What is Password Hashing?</h3>
                <p>Password hashing is astronomical in keeping your users' information safe. Storing information in a database in plaintext can be devastating if that database gets hacked. Hashing passwords gives one more large layer of security between the hackers and users' information if something like that were to happen.</p>
                <a class="btn btn-primary" href="http://www.youtube.com" target="_blank">View Video<span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <!-- /.row -->
		
		<hr>

        <!-- Video 2: What is Cross-Site Scripting (XSS)? -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x300" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>What is Cross-Site Scripting (XSS)?</h3>
                <p>Cross Site Scriping (XSS) is an injection attack in which a person enters in malicious code, usually Javascript, into a website by some means. Another person then views the website with the injected code which is then exucted as the browser can't really tell the difference between the malicious and real code.</p>
                <a class="btn btn-primary" href="http://www.youtube.com" target="_blank">View Video<span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <!-- /.row -->

        <!-- Footer -->
        <?php include 'footer.php';?>

    </div>
    <!-- /.container -->

</body>

</html>
