<?php

require_once '../inc/config.php';

$username = $_POST['username'];
$password= $_POST['password'];

$query = "UPDATE admin SET password='$password'
		WHERE username='$username'";
$result = mysql_query($query) or die(mysql_error());

mysql_close();

if ($result > 0) {
	header('Location:user_form_view.php?konfirmasi=1');
} else {
	header('Location:user_form_view.php');
}
?>