<!DOCTYPE html>
<?php
header('X-XSS-Protection: 0');
?>
<html lang="en">
<head>
	<title>Sample Story</title>
	<?php include '../js/dependencies.php';?>
	<link rel="stylesheet" type="text/css" href="../css/stylesxss.css">
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<script src="../js/xsslevel1.js"></script>
</head>
<body>
	<br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-11">
				<input type="text" class="form-control" value="http://newscache.com/samplestory1">
			</div>
			<div class="col-xs-1">
				<input type="button" value="Go">
			</div>
		</div>
		<div class="row">
			<div class="col-md-12" style="text-align:center;">
				<h1>Too Much Salt?</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h2>Written by: Tony Smith, Freelance Writer</h2>
			</div>
			<div class="col-md-8 col-md-offset-2">
				Today I ate a Chipotle buritto, canned chicken noodle soup, and pizza. This lead to me drinking around a galloon of water <img src="../img/chipotle.jpg" align="right">just this afternoon as all of the salt in the food made me very thirsty, but I have never felt better. Many people say that a diet high in sodium is bad and that it can lead to very bad health concerns. I don't think this is quite the case as I did my own research this past year. I also don't think that limiting our food consumption based on the nutritional values in the food is a good idea. People should eat what they want.
				What types of food do you like to eat? Are you okay with eating a lot of salt? Please leave a comment pertaining to this discussion in the comment section below! We love to hear any sort of feedback on the articleand hear your opinions on the matter. Feel free to contact me personally by sending me an email at saltisgood@newscache.com or call my personal cell phone number toll free at 123-456-7890.
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h2>Post a New Comment</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-1 col-md-offset-2">
				Username:
			</div>
			<div class="col-md-2">
				 <input type="text" class="form-control" id="usernameInput">
			</div>
			<div class="col-md-1">
				Comment:
			</div>
			<div class="col-md-3">
				<input type="text" class="form-control" id="commentInput">
			</div>
			<div class="col-md-1">
				<input type="button" value="Post" onclick="postComment()">
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h2>All Comments</h2>
			</div>
			<div class="col-md-8 col-md-offset-2">
				<table class="table tabled striped" id="t">
					<tr>
						<th>Username</th>
						<th>Comment</th>
					</tr>
					<tr>
						<td>lost404</td>
						<td>Great writing, but I really don't agree with the concept of what you're trying to get across here.</td>
					</tr>
					<?php
					foreach ($_COOKIE as $value)
					{
						$value = explode(",", $value);
						if(isset($value[1])){
							echo "<tr><td>" . $value[0] . "</td>";
							echo "<td>" . $value[1] . "</td></tr>";
						}
					}
					?>
				</table>
			</div>
		</div>
	</div>
</body>
</html>