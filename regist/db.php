<?php
# 
define ('DB_HOST', 'localhost');
define ('DB_LOGIN', 'root');
define ('DB_PASSWORD', '');
define ('DB_NAME', 'bookstore');

mysql_connect(DB_HOST, DB_LOGIN, DB_PASSWORD) ;
mysql_query("set names utf8") or die ("<br>Invalid query: " . mysql_error());
mysql_select_db(DB_NAME) or die ("<br>Invalid query: " . mysql_error());
#

$connection = @mysqli_connect(DB_HOST,DB_LOGIN,DB_PASSWORD,DB_NAME);
$base_url='regist/';

$error[0] = 'I do not know you';
$error[1] = 'Turn on cookies';
$error[2] = 'You are not allowed here';

$data = mysql_fetch_assoc(mysql_query("SELECT * FROM tbl_users WHERE user_hash='" . mysql_real_escape_string($_COOKIE['hash']) . "' LIMIT 1")or die ("MySQL Error: " . mysql_error()));

        $profilename = $data['name'];
        $profilesurname = $data['surname'];
        $email = $data['email'];
        $timetoreg = $data['timetoreg'];
?>


