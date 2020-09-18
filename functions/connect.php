 <?php 
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'myblog');


if(!$con){
	die('Please check ur connection..'.mysqli_error());
}
?>