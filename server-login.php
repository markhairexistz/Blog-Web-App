<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>server-login</title>
</head>
<!--font awesome -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<!--google font-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<!--custom css-->
<link rel="stylesheet" type="text/css" href="css/server-login.css">
<body style="background-image:url(img/bg.jpg);
	background-attachment:fixed;
	background-size:cover;">
<div class="container">
	<div class="login-container">
		<?php include ('functions/login.php');?>
		<form method="post" id="loginForm">
			<p>Administrator Login</p>
			<input type="text" name="txt_user" class="txt-user" id="userName" placeholder="Username...">
			<input type="Password" name="txt_pass" class="txt-pass" id="passWord" placeholder="Password...">
			<input type="submit" name="btn_login" value="Login">
			<p class="login-footer">Want to add an Account?, Click <a href="#signup">here</a></p>
		</form>
	</div>


</div>
<div class="footer">
				<p class="about-description"><i class="fa fa-lg fa-external-link" aria-hidden="true"></i>
				Developed & Designed by Markhair Asim, links below:
				</p>
				<p class="about-description">
				<i class="fa fa-lg fa-facebook-official" aria-hidden="true"></i>
				<a href="https://www.facebook.com/Markhairunderscore17" target="_blank"> Markhair Asim</a>
				</p><br>
				
				<p class="about-description">
				<i class="fa fa-lg fa-instagram" aria-hidden="true"></i>
				<a href="https://www.instagram.com/markhair_/" target="_blank"> @markhair_</a>
				</p><br>
				<p class="about-description">
				<i class="fa fa-lg fa-youtube-square" aria-hidden="true"></i>
				<a href="https://www.youtube.com/channel/UCqJxW6fKqX4pIZSgFxckJbA" target="_blank"> EXISTZtv</a>
				</p><br>
				<p class="about-description">
				<i class="fa fa-lg fa-reddit" aria-hidden="true"></i>
				<a href="https://www.reddit.com/user/Markhair_ExistZ" target="_blank"> Markhair_ExistZ</a>
				</p><br>
				<p class="about-description">
				<i class="fa fa-lg fa-github" aria-hidden="true"></i>
				<a href="https://github.com/markhairexistz" target="_blank"> markhairexistz</a>
				</p><br>
				<p class="about-description">
				<i class="fa fa-lg fa-globe" aria-hidden="true"></i>
				<a href="https://markhair-asim.web.app" target="_blank">https://markhair-asim.web.app</a>
				</p>
</div>
<div class="signup" id="signup">
	
</div>

</body>
</html>