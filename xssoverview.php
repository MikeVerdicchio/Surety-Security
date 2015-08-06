<!DOCTYPE html>
<?php
//header('X-XSS-Protection: 0');
?>
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
				Cross Site Scripting (XSS) is an injection attack in which a person enters in
				malicious code, usually Javascript, into a website by some means. Another person then
				views the website with the injected code which is then executed as the browser can't
				really tell the difference between the malicious injected code and real website code. A XSS attack can steal user data,
				like cookies, modify the information on a site, redirect the user to another website, and install
				malicious programs among other harmful operations.
				There are three types of cross site scripting: Reflected, Stored, and DOM based.
			</div>
			<div class="row">
				<h2>Reflected</h2>
				In a reflected XSS attack, malicious code is sent as input to a server. The server then "reflects" the
				code back to a user's browser and is displayed (seen or unseen) somewhere on the page. This can be done
				by a user clicking on a malignant link or through a virulent email.
			</div>
			<div class="row">
				<h3>Example</h3>
				This is a simplified version of a reflected attack. The user types in a search term into the input box
				for the website to search on the web. This search term is taken in by the server and then reflected
				back to the user to show what they searched for verbatim. This allows a person to type in a malicious script that will
				be executed by the browser because it interprets the input as code as it was not validated when inputted and not sanitized when outputted.
				Put each of these code snippets in the search box and see what happens! The first example might not work with browsers that have a XSS filter.<br>
				<pre><?php echo htmlspecialchars("<input onmouseover='alert(\"This can be used in a XSS attack\")'></input>");?></pre>
				The code above will inject a input box that has a popup on mouseover into the page. This can be modified to be more discrete and activate every time,
				like changing onmouseover to onload and the text input box to a hidden input.<br><br>
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
				A malicious user inputs malignant code on a website through a data input, like a comment or post, and gets stored on a website’s servers.
				When the data is requested by the site, it retrieves the lethal code that was inputted.
				<h3>Example</h3>
				In the example below, user6781 makes a comment and embeds the comment with an onmouseover event on it. Try moving your mouse over
				the comment and see what happens. <br><br>
			</div>
			<div class="row" style="text-align:center;">
				<b>User6781:</b> <span onmouseover='alert("This can be used in a XSS attack")'>Great post with informative information.</span><br><br>
			</div>
			<div class="row">
				If a website doesn't sanitize the input coming into a site, like a comment or a post on a forum, then it stores whatever the user inputs directly
				into the database. This can be very dangerous on a site that displays a lot of user input like Reddit or any comment section on a news site.
			</div>
			<div class="row">
				<h2>DOM Based</h2>
				Malicious code is injected into the DOM on a website. This is different than a reflected attack as a DOM attack doesn’t modify the server response,
				but rather modifies the client side code.
			</div>
			<div class="row">
				<h3>Example</h3>
				This is an example of a XSS attack in which an object on the page is automatically
				filled in with a parameter in the URL. The parameter is not sanitized before being
				put into the object which can result in code being passed in.
				<br><code>
				if (isset($_GET&#91;'xssparam'&#93;)){
				echo "&lt;span&gt;Hello ".$_GET['xssparam']."!&lt;/span&gt;"
			}</code><br>
			The code sets a hidden input's value to the GET parameter value directly without checking if the value is safe and valid.<br>
			Put this code snippet at the end of the url and see what happens! The example might not work with some browsers, as they have strict XSS filtering.
			<pre><?php echo htmlspecialchars("?xssparam=<script>alert(\"This can be used in a XSS attack\")</script>");?></pre>
			This will set the displayed text for a select option to an be the code for a javascript popup. This doesn't require the browser to make any 
			request from to server, this only changes the client side code.<br><br>
			<?php
			if (isset($_GET['xssparam'])){
				echo "<span>Hello ".$_GET['xssparam']."!</span>";
			}
			?>
		</div>
		<div class="row">
			<h2>External Resources</h2>
			<a href="https://www.youtube.com/watch?v=L5l9lSnNMxg">Computerphile - Cracking Websites with Cross Site Scripting Video</a><br>
			<a href="https://www.owasp.org/index.php?title=Cross-site_Scripting_%28XSS%29&setlang=es">OWASP - Cross Site Scripting</a><br>
			<a href="https://www.youtube.com/watch?v=yzJG7GPuFyo">Short Video Overview of XSS</a>
		</div>
	</div>
	<?php include 'footer.php';?>
</div>
</body>
</html>