<?php
require_once('connect.php');

$selectFeaturedQuery = "SELECT * FROM post ORDER BY date_publish DESC LIMIT 9 ";
$selectFeatured = mysqli_query($con,$selectFeaturedQuery);
if($selectFeatured){
while($show = mysqli_fetch_row($selectFeatured)){
echo "
<div class='featured-blog' data-id =".$show[0].">
			
				<img src=".$show[2].">
				<p class='header'><i class='fa fa-newspaper-o' aria-hidden='true'></i>".$show[3]."</p>
				<p><i class='fa fa-user' aria-hidden='true'></i>".$show[1]."</p>
				<p><i class='fa fa-calendar-o' aria-hidden='true'></i> ".$show[5]."</p>
			
</div>
";
}
}else{
	echo 'went wrong';
}

?>
