<?php
include '../../db.php';

$query=mysql_query("SELECT * FROM tbl_users WHERE user_hash='" . mysql_real_escape_string($_COOKIE['hash']) . "' LIMIT 1") or die( mysql_error());

$data = mysql_fetch_assoc($query);

if (isset($_POST['submit'])) {

	mysqli_query($connection, "SET NAMES 'utf8'") or die( mysql_error());

	mysqli_query($connection, "UPDATE tbl_users SET name = '".$_POST['firstname']."', surname = '".$_POST['lastname']."', 
		phonenumber = '".$_POST['phone']."' WHERE id = '".$data['id']."'") or die( mysql_error());

}

if (isset($_POST['aiu'])) {
	if(sha1($_POST['currentPassword']) == $data['password']){
		
		mysqli_query($connection, "SET NAMES 'utf8'") or die( mysql_error());

		mysqli_query($connection, "UPDATE tbl_users SET password = '".sha1($_POST['newPassword'])."' WHERE id = '".$data['id']."'") or die( mysql_error());
	
		echo "success";

	}

	else
		echo "error";

}

?>