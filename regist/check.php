<?php
include 'db.php';  

if (isset($_COOKIE['id']) and isset($_COOKIE['hash'])) 
{    

    $userdata = mysql_fetch_assoc(mysql_query("SELECT * FROM tbl_users WHERE id = '".intval($_COOKIE['id'])."' LIMIT 1"));
    
    if((mysql_real_escape_string($userdata['user_hash']) !== $_COOKIE['hash']) or ($userdata['id'] !== $_COOKIE['id'])) 
    { 
      setcookie('id', '', time() - 60*24*30*12, '/'); 
      setcookie('hash', '', time() - 60*24*30*12, '/');
      setcookie('errors', '1', time() + 60*24*30*12, '/');
      // header('Location: asd'); exit();*/
    }
    echo "Success auth";
} 
else 
{ 
  setcookie('errors', '2', time() + 60*24*30*12, '/');
  echo "oops check check.php<br>";
    // header('Location: login.php'); exit();
}
?>