<!DOCTYPE html>
<html>
<head>
	<title>Cross Site Scripting</title>
	<?php include 'header.php';?>
</head>
<body>
	<br>
	<div class="container-fluid">
		<div class="row">
			<h1 style="text-align:center;">Cross Site Scripting</h1>
		</div>
		<div class="col-md-8 col-md-offset-2">
			<div class="row">
				<h2>What is Cross Site Scripting?</h2>
				Cross Site Scriping (XSS) is an injection attack in which a person enters in
				malicious code, usually Javascript, into a website by some means. Another person then
				views the website with the injected code which is then exucted as the browser can't
				really tell the difference between the malicious and real code.
			</div>
			<div class="row">
				<h2>Reflected</h2>
				Malicious code is sent as input to a server and the code is then "reflected" back to the user
				and displayed (seen or unseen) somewhere on the page.
			</div>
			<div class="row">
				<h3>Example</h3>
				This is a simplified version of a reflected attack. The user types in a search term into the input box
				for the website to search on the web. This search term is taken in by the server and then reflected
				back to the user to show what they searched for. If this input is not validated and output is not
				sanitized, then code can get injected in an XSS attack.<br><br>
				<div class="row">
					<div class="col-md-2 col-md-offset-1">
						Enter a search term:
					</div>
					<form action='' method="post">
					<div class="col-md-4">
						<input type='text' class='form-control' name='val'>
					</div>
					<div class="col-md-2">
						<input type="submit" class="btn btn-default" value="Submit"><br>
					</div>
				</form>
				</div>
				<div class="row">
					<div class="col-md-12 col-md-offset-1">
						<br>You searched for  
						<?php
						if (isset($_POST['val'])){
							print_r($_POST['val']);
						}
						?>
						<span id="search"></span><br>
					</div>
				</div>
			</div>
			<div class="row">
				<h2>Stored</h2>
				Malicious code is stored on a website's servers as some form of data and when the data is requested
				by the site it is executed as it is displayed to the user.
				<h3>Example</h3>
				In the example below, user6781 makes a comment and embeddeds the comment with an onmouseover event on it. Try moving your mouse over
				the comment and see what happens. <br><br>
			</div>
			<div class="row" style="text-align:center;">
				<b>User6781:</b> <span onmouseover='alert("This can be used in a XSS attack")'>Great post with informative information.</span><br><br>
			</div>
			<div class="row">
				If a website doesn't sanitize the input coming into a site, like a comment or a post on a forum, then it stores whatever the user inputs directly
				into the database. This can be very dangerous on a site that diplays a lot of user input like Reddit or any comment section on a news site.
			</div>
			<div class="row">
				<h2>DOM Based</h2>
				Malicious code is injected into an element on a website.
			</div>
			<div class="row">
				<h3>Example</h3>
				This is an example of a XSS attack in which an object on the page is automatically
				filled in with a parameter in the URL. The parameter is not sanitized before being
				put into the object which can result in code being passed in.
				<br><code>$param = '';
				if (isset($_GET&#91;'xssparam'&#93;)){
				$param = $_GET&#91;'xssparam'&#93;;}
				echo "&lt;input type='hidden' value=".$param."&gt;";</code><br>
				The code sets a hidden input's value to the GET paramater value directly without
				checking if the value is safe and valid.<br>
				Put either of these code snipets at the end of the url and see what happens!
				The first example might not work with some browsers, as they might block anything with
				the script tag.
				<pre><?php echo htmlspecialchars("?xssparam=><script type='text/javascript'>document.body.innerHTML = '';</script>");?></pre>
				This is a very basic Javascript line of code that sets the html document body to blank, but this isn't the only thing a hacker can do.
				Rearranging the site's layout and adding or removing elements are just a couple of the things possible with Javascript manipulation.
				Most browsers block any url with the script tag to provide users protection against such URL attacks.
				<pre><?php echo htmlspecialchars("?xssparam=><b>");?></pre>
				<?php
				$param = "";
				if (isset($_GET['xssparam'])){
					$param = $_GET['xssparam'];
				}
				echo "<input type='hidden' value=".$param."></input>";
				?>
				This injects a HTML bold tag, which was injected by a GET parameter, for the value in the hidden input. This results in the hidden
				input having the bold tag for its value and the rest of the page below the input being bold.<br><br>
			</div>
		</div>
		<?php include 'footer.php';?>
	</div>
</body>
</html>