<!DOCTYPE html>
<html>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="./css/custom.css">
<!-- font awesome -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<!--google font-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<body style="background-image:url(img/bg.jpg);
	background-attachment:fixed;
	background-size:cover;
	">
<div class="title-container">
	<h3 class="title">My Featured Blogs <i class="fa fa-lg fa-newspaper-o" aria-hidden="true"></i>
</h3>
</div>
<div class="container">
	<div class="slider" id="slider">
	
		<!--
		<div class="featured-blog">
			
				<img src="picture/5f51e952c410c5.55556616.jpg">
				<p class="header"><i class="fa fa-newspaper-o" aria-hidden="true"></i> THIS IS THE BLOG HEADLINE</p>
				<p><i class="fa fa-user" aria-hidden="true"></i> Markhair</p>
				<p><i class="fa fa-calendar-o" aria-hidden="true"></i> 10/10/20</p>
			
		</div>
		<div class="featured-blog">Section 2</div>
		<div class="featured-blog">Section 3</div>
		<div class="featured-blog">Section 4</div>
		<div class="featured-blog">Section 5</div>
		<div class="featured-blog">Section 6</div>
		<div class="featured-blog">Section 7</div>
		<div class="featured-blog">Section 8</div>
		<div class="featured-blog">Section 9</div>
	
		</div>
		-->
		<?php 
		include ('functions/viewFeatured.php');
		?>
</div>
<div class="control">
		
		<span class="arrow left" id="left"><i class="fa fa-chevron-left fa-2x left-icon" aria-hidden="true"></i></span>
		<span class="arrow right" id="right"><i class="fa fa-chevron-right fa-2x right-icon" aria-hidden="true"></i></span>
		
		<ul>
			<li id="slide1" class="selected"></li>
			<li id="slide2" class=""></li>
			<li id="slide3" class=""></li>
		</ul>
	</div>
</div>
<div class="footer">
				<p class="about-description"><i class="fa fa-lg fa-external-link" aria-hidden="true"></i>
				Developed & Designed by Markhair Asim, links below:
				</p><br>
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
				</p>
				<p class="about-description">
				<i class="fa fa-sm fa-heart" aria-hidden="true"></i>
				<a href="https://markhair-asim.web.app" target="_blank">https://markhair-asim.web.app</a>
				</p>
</div>

<!-- The Modal -->
<div id="blogModal" class="blogModal">

    
  <!-- Modal content -->
<div class="blog-modal">
	<div class="xblog-modal-container">
  		<span class="xblog-modal" id="xblogModal">&times;</span>
  	</div>
  	<form method="post" id="blogForm">
  		
  	</form>
  	<img src="img/preloader.gif" class="content-preloader">
</div>

</div>
</body>

<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/myjs.js"></script>

</html>