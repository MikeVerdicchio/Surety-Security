<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sample Story</title>
	<?php include 'js/dependencies.php';?>
	<script src="js/xsslevel1.js"></script>
</head>
<body>
	<br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-10">
				<input type="text" class="form-control" value="http://newscache.com/samplestory1">
			</div>
			<div class="col-md-2">
				<input type="button" value="Go">
			</div>
		</div>
		<div class="row">
			<div class="col-md-12" style="text-align:center;">
				<h1>Too Much Salt?</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h2>Written by: Tony Smith, Freelance Writer</h2>
			</div>
			<div class="col-md-12">
				Today I ate a Chipotle buritto, canned chicken noodle soup, and pizza. This lead to me drinking around a galloon of water just this afternoon as all of the salt in the food made me very thirsty, but I have never felt better. Many people say that a diet high in sodium is bad and that it can lead to very bad health concerns. I don't think this is quite the case as I did my own research this past year. I also don't think that limiting our food consumption based on the nutritional values in the food is a good idea. People should eat what they wan't.
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h2>Most Recent Comment</h2>
			</div>
			<div class="col-md-2">
				<b>Username: </b><span id="username">lost404</span>
			</div>
			<div class="col-md-10">
				<b>Comment: </b><span id="comment">Great writing, but I really don't agree with the concept of what you're trying to get across here.</span>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h2>Post a New Comment</h2>
			</div>
			<div class="col-md-1">
				Username:
			</div>
			<div class="col-md-2">
				 <input type="text" class="form-control" id="usernameInput">
			</div>
			<div class="col-md-1 col-md-offset-1">
				Comment:
			</div>
			<div class="col-md-6">
				<input type="text" class="form-control" id="commentInput">
			</div>
			<div class="col-md-1">
				<input type="button" value="Post" onclick="postComment()">
			</div>
		</div>
	</div>
</body>
</html>