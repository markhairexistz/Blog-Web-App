<?php
require_once('connect.php');
$dataId = $_POST['dataId'];
$selectBlog = "SELECT * FROM post WHERE id = '$dataId'";
$selectOneFeatured = mysqli_query($con,$selectBlog);
if($selectOneFeatured){
while($showContent = mysqli_fetch_row($selectOneFeatured)){
echo '
<div class="header">
  		<div class="img-container">
  			<img src='.$showContent[2].' class="blogImg">
  		</div>
  		<div class="headline-container">
  			<div class="headline">
  				<p class="content-header"><i class="fa fa-user" aria-hidden="true"></i> '.$showContent[1].'</p>
  				<p class="content-header"><i class="fa fa-calendar-o" aria-hidden="true"></i> '.$showContent[5].'</p>
  				<h3 class="blog-header"><i class="fa fa-newspaper-o" aria-hidden="true"></i> '.$showContent[3].'</h3>
  			</div>
   		
   		</div>
  	</div>
  	<div class="content">
  	<br>
  		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$showContent[4].'</p>
  	</div>
	';
}
}else{
	echo 'went wrong';
}

?>