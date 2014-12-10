<?php
error_reporting(E_ALL);
include 'db.php';
function generateCode($length=6) { 
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPRQSTUVWXYZ0123456789"; 
    $code = ""; 
    $clen = strlen($chars) - 1;   
    while (strlen($code) < $length) { 
        $code .= $chars[mt_rand(0,$clen)];   
    } 
    return $code; 
  } 

if (isset($_COOKIE['errors'])) {
    $errors = $_COOKIE['errors'];
    setcookie('errors', '', time() - 60 * 24 * 30 * 12, '/');
}

if (isset($_POST['submit'])) {

    $email = $_POST['email'];

    $password = $_POST['password'];

    $data = mysql_fetch_assoc(mysql_query("SELECT id, password FROM `tbl_users` WHERE `email`='" . mysql_real_escape_string($_POST['email']) . "' LIMIT 1"));
  
    if ($data == NULL) {
        echo "wrong username/password";
    }
    # compare passwords 
    else if($data['password'] === $_POST['password']){
    	
        $hash = md5(generateCode(10)); 

      	mysql_query("UPDATE tbl_users SET user_hash='".$hash."' WHERE id='".$data['id']."'") or die("MySQL Error: " . mysql_error()); 
       
        # cookies
        setcookie("id", $data['id'], time()+60*60*24*30, '/'); 
        setcookie("hash", $hash, time()+60*60*24*30, '/'); 

        header("Location: check.php");
        exit(); 
       
    } 
    else if($data['role'] == 0) {
    	print "You did";
    }
    else {
        print "wrong username/password";
    }
}

 if (isset($errors)) {print '<h4>'.$error[$errors].'</h4>';}

?>