<!DOCTYPE html>
<html>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="./css/server.css">
<!-- font awesome -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<!--google font-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<body style="background:linear-gradient(120deg, #f39c12, #f4fdfa
);
	background-attachment:fixed;
	background-size:cover;
	">

<div class="container">
<div class="header">
	<?php
	if(empty($_SESSION)) // if the session not yet started 
   	session_start();

	if(!isset($_SESSION['getuser']) || $_SESSION['status'] == 'invalid') { //if not yet logged in

	$_SESSION['status'] = 'invalid'; //set log to false
	unset($_SESSION['getuser']); // unser username
    header("Location:server-login.php");// send to login page
    exit;
	} 

	
		$user_name = $_SESSION['getuser'];
		
	?>
	<p class="admin"><a href=""><i class="fa fa-lg fa-user-secret" aria-hidden="true"></i><?php echo $user_name;?></a></p>
	<p class="setting"><a href=""><i class="fa fa-lg fa-cog"></i> Account</a></p>
	<p class="logout"><a class="nav-link" href = "functions/logout.php"><i class="fa fa-lg fa-sign-out" aria-hidden="true"></i>Logout</a>&nbsp;&nbsp;&nbsp;</p>
</div>
<div class="form-container">
	<?php include ('functions/post.php');?>
	<form id="formPost" method="POST" action="" enctype="multipart/form-data">
		<h3 class="title"><i class="fa fa-lg fa-newspaper-o" aria-hidden="true"></i> CREATE A NEWS</h3><br>
		<input type="file" class="upload-img" name="image" id="image">
		<button type="button" class="choose-file"><i class="fa fa-lg fa-upload" aria-hidden="true"></i>
 Upload IMAGE</button><br><br>
		<i class="fa fa-lg fa-file-o" aria-hidden="true"></i> <label class="file-name"></label><br><br>
		<div class="imgDiv">
			
		</div>
		<i class="fa fa-lg fa-book" aria-hidden="true"></i><p class="author">Author</p>
		<input type="text" class="blog-author" name="author" id="author" placeholder="Author..." required="required" value="<?php if(isset($_POST['author'])){ 
			echo $_POST['author'];
		} ?>"><br>
		<input type="text" class="blog-header" name="header" id="header" placeholder="Header" required="required" value="<?php if(isset($_POST['header'])){ 
			echo $_POST['header'];
		} ?>"><br>
		<textarea class="blog-content" name="content" id="content" placeholder="White something..." required="required">
			<?php 
			if(isset($_POST['content'])){ 
				echo $_POST['content'];
				} 
			?>
		</textarea><br>
		<button type="submit" class="publish" name="publish" id="publish"><i class="fa fa-lg fa-newspaper-o" aria-hidden="true"></i> PUBLISH
</button>
	</form>
	
</div>
</div>
<!--update user modal-->
<div class="modal-signup">
	<div class="preloader">
		<img src="img/preloader.gif">
	</div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script type="text/javascript" src="js/server.js"></script>
</html>
