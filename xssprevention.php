<!DOCTYPE html>
<html lang="en">
<head>
	<title>XSS Prevention</title>
	<!-- Dependencies -->
	<?php include 'header.php';?>
</head>
<body>
	<br>
	<div class="container-fluid">
		<div class="row" style="text-align:center;">
			<div class="col-md-8 col-md-offset-2">
				<h1>How to Prevent Cross Site Scripting</h1>
			</div>
		</div>
		<div class="col-md-8 col-md-offset-2">
			<div class="row">
				<h2>Input Validation</h2>
				<h3>Whitelisting</h3>
				Restrict user input to only an approved list of characters that are necessary
				for the specified input. For example, to enter in a zip
				code a user doesn't need to enter in any letters or speical
				characters.
				<h3>Blacklisting</h3>
				Compare the input with a list of untrust inputs. For example don't allow any
				input that contains the script tag. This shouldn't be the main form of validation
				however becuase there can be always something not on the list that is malicious.
			</div>
			<div class="row">
				<h2>HTML Entity Encoding</h2>
				There are some characters that can be used to manipulate a html page, like &lt; &gt; that
				need to be encoded so that they aren't interpreted as the browser as code. This is done by
				using HTML character entities. &lt; should be encoded as &amp;lt; and &gt; should be encoded by
				&amp;gt; This helps to prevent users entering in malicious code that would be executed by the
				browser because the browser can't tell the different between the actual code on the website and
				what the user injected, so the characters need to be encoded so that they can be displayed but not
				interpreted as code.
			</div>
			<div class="row">
				<h2>Using XSS prevention libraries</h2>
				There are many code libaries built to help developers in defending against XSS. These libraries
				shouldn't be relied upon solely as the only defense against XSS however.
			</div>
		</div>

		<!-- Footer -->
		<?php include 'footer.php';?>
	</div>
</body>
</html>