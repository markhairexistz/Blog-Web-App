<?php
require_once('connect.php');


$name = mysqli_real_escape_string($con,$_POST['name']);
$userName = mysqli_real_escape_string($con,$_POST['userName']);
$oldPassword = mysqli_real_escape_string($con,$_POST['oldPassword']);
$newPassword = password_hash(mysqli_real_escape_string($con,$_POST['newPassword']), PASSWORD_DEFAULT);

$validPasswordQuery = "SELECT password FROM server";
$validPassword = mysqli_query($con,$validPasswordQuery);
$validPasswordResult = mysqli_fetch_array($validPassword);

$verify_oldPassword = password_verify($oldPassword,$validPasswordResult['password']);

if($verify_oldPassword == 1){
	$updateServerDataQuery = "UPDATE server SET name ='".$name."', username = '".$userName."', password = '".$newPassword."'";
	$updateServerData = mysqli_query($con,$updateServerDataQuery);
	if($updateServerData){
		echo 'Account has been updated...';
	}else{
		echo 'Something went wrong!';
	}
}
else
{
	echo 'Old password is incorrect!';
}

?>