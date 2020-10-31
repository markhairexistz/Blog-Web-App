<?php
require_once('connect.php');
$serverDataQuery = "SELECT * FROM server";
$serverData = mysqli_query($con,$serverDataQuery);
while($showServerData = mysqli_fetch_assoc($serverData)){
echo '
	<div class="modal-container">
		<span class="xsignupModal">&times;</span>
		<p class="setting"><i class="fa fa-lg fa-cog"></i> Account</p><br >
		<p class="accSettingMessage"></p><br >
		<p class=""><i class="fa fa-user-secret" aria-hidden="true"></i> Admin Name</p>
		<input type="text" name="" class="name" placeholder="Name..." value="'.$showServerData['name'].'"><br>
		<p class=""><i class="fa fa-user" aria-hidden="true"></i> Username</p>
		<input type="text" name="" class="userName" placeholder="Username..." value="'.$showServerData['username'].'"><br>
		<p class=""><i class="fa fa-key" aria-hidden="true"></i> Old Password</p>
		<input type="password" name="" class="oldPassword" placeholder="Old password..."><br>
		<p class=""><i class="fa fa-lock" aria-hidden="true"></i> New Password</p>
		<input type="password" name="" class="newPassword" placeholder="New password..."><br>
		<button type="button" name="" class="updateBtn"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update</button>
	</div>
	';
}
?>