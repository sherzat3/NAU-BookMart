<?php

error_reporting(E_ALL);
$today = date("Y-m-d H:i:s");

include 'db.php';
$msg = '';
if (isset($_POST['submit'])) {
    if (!empty($_POST['email']) && isset($_POST['email']) && !empty($_POST['password']) && isset($_POST['password'])) {
// username and password sent from Form
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phonenumber = $_POST['phonenumber'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];

        $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/';

        if (preg_match($regex, $email)) {
 //           $password = sha1($password); // Encrypted password
 //           $user_hash = md5($email . time()); // Encrypted email+timestamp

            $count = mysqli_query($connection, "SELECT id FROM tbl_users WHERE email='$email'");
            if (mysqli_num_rows($count) < 1) {
                mysqli_query($connection, "SET NAMES 'utf8'") or die( mysql_error());
                mysqli_query($connection, "INSERT INTO tbl_users(email, password, phonenumber, activated,  name, surname, timetoreg) VALUES('$email','$password', '$phonenumber','$user_hash',  '$name', '$surname', '$today');");

                

                echo "success reg";
            } else {
                echo "This email address is already taken";
            }
        } else {
            echo "Email address is invalid";
        }
    }
}
else {

    echo "error!";
}
?>
