<!DOCTYPE html>
<html>
<title>XSS</title>
<?php include 'dependencies.php';?>
<body>
	<?php include 'header.php';
	#include 'getAll.php';
	#$data = getData();
	?>
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
				<?php
				$param = "";
				if (isset($_GET['xssparam'])){
					$param = $_GET['xssparam'];
				}
				echo "<input type='hidden' value=".$param.">";
				?>
				<h3>Example</h3>
				This is an example of a XSS attack in which an object on the page is automatically
				filled in with a parameter in the URL. The parameter is not sanitized before being
				put into the object which can result in code being passed in.
				Put this at the end of the url and see what happens
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<pre><?php echo htmlspecialchars("?xssparam=><script type='text/javascript'>document.body.innerHTML = '';</script><p></p");?></pre>
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
				<h2>Stored</h2>
				Malicious code is stored on a website's servers as some form of data and when the data is requested
				by the site it is executed as it is displayed to the user.
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
			-->
			</div>
		</div>
	</div>
	<?php include 'footer.php';?>
</body>
</html>