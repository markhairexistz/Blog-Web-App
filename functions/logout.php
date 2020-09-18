<?php
session_start();

$_SESSION['status'] = 'invalid';
unset($_SESSION['getuser']);


header("Location:../server-login.php");
exit;
?>