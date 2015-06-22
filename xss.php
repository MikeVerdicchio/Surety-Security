<!DOCTYPE html>
<html>
<title>XSS</title>
<head>
	<?php include 'header.php';?>
	<script src="js/xssJS.js"></script>
</head>
<body>
	<br>
	<div class="container-fluid">
		<div class="row">
			<h1 style="text-align:center;">Cross Site Scripting</h1>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h2>What is Cross Site Scripting?</h2>
				Cross Site Scriping (XSS) is an injection attack in which a person enters in
				malicious code, usually Javascript, into a website by some means. Another person then
				views the website with the injected code which is then exucted as the browser can't
				really tell the difference between the malicious and real code.
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h2>Reflected</h2>
				Malicious code is sent as input to a server and the code is then "reflected" back to the user
				and displayed (seen or unseen) somewhere on the page.
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
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
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<pre><?php echo htmlspecialchars("?xssparam=><script type='text/javascript'>document.body.innerHTML = '';</script><p></p");?></pre>
				This is a very basic Javascript line of code that sets the html document body to blank, but this isn't the only thing a hacker can do.
				Rearranging the site's layout and adding or removing elements are just a couple of the things possible with Javascript manipulation.
				Most browsers block any url with the script tag to provide users protection against such URL attacks.
				<pre><?php echo htmlspecialchars("?xssparam=><b></p");?></pre>
				This injects a HTML bold tag, which was injected by a GET parameter, for the value in the hidden input. This results in the hidden
				input having the bold tag for its value and the rest of the page below the input being bold.
			</div>
			<?php
			$param = "";
			if (isset($_GET['xssparam'])){
				$param = $_GET['xssparam'];
			}
			echo "<input type='hidden' value=".$param.">";
			?>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h2>Stored</h2>
				Malicious code is stored on a website's servers as some form of data and when the data is requested
				by the site it is executed as it is displayed to the user.
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="col-md-3 col-md-offset-4">
					<input type='text' class='form-control' id='val'>
				</div>
				<div class="col-md-1">
					<input type="submit" class="btn btn-default" value="Submit" onclick="simulateStored()"> 
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2" style="text-align:center;">
				<span id="stored"></span>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h2>DOM Based</h2>
				Malicious code is injected into an element on a website and the code is executed when the element
				is interacted with.
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<select>
					<script>
					document.write("<OPTION value=1>"+document.location.href.substring(document.location.href.indexOf("default=")+8)+"</OPTION>");
					document.write("<OPTION value=2>English</OPTION>");
					</script>
				</select>
			</div>
		</div>
		<!--
		<div class="row">
			<form action="sqlForXssPage.php" method="post" class="form-horizontal">
				<div class="col-md-3 col-md-offset-4">
					<input type='text' class='form-control' name='val'>
				</div>
				<div class="col-md-1">
					<input type="submit" class="btn btn-default" value="Submit">
				</div>
			</form>
		</div>
		<div class="row">
			<div class="col-md-3 col-md-offset-4">
				<!--
				<?php
				foreach($data as $line){
					echo $line['stringy'] . "<br>";
				}
				?>
			
		</div>
	-->
	<?php include 'footer.php';?>
</div>
</body>
</html>