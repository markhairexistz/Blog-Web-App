<?php 
require_once('connect.php');
session_start();

if($_SESSION['status'] == 'valid' || empty($_SESSION['getuser']))
{
	$_SESSION['status'] == 'invalid';
}
if($_SESSION['status'] == 'valid')
{
	header("Location:server.php");// send to mainpage
}

/**/
if(isset($_POST['btn_login'])){

	$username = mysqli_real_escape_string($con,$_POST['txt_user']);
	$password = mysqli_real_escape_string($con,$_POST['txt_pass']);

	$check = "SELECT * FROM server WHERE username = '".$username."'";

	$result = mysqli_query($con,$check);
	
	$get_data = mysqli_fetch_array($result);

	//Check if hashed password matches 
	$verify_password = password_verify($password,$get_data['password']);
	

	if(mysqli_num_rows($result)==1 and $verify_password == 1)
	{

		
		$_SESSION['getuser'] = $get_data['name'];
		$_SESSION['status'] = 'valid';
		//echo 'success';
		
		echo '<script language="javascript"> 
			location.href="server.php";
			</script>';

	}
	else
	{
		//echo 'unsuccessful';
		$_SESSION['status']='invalid';
	echo '<script language="javascript"> 
			alert("Cant login!");
			location.href="server-login.php";
			</script>';	

}
	

	

}




?>
