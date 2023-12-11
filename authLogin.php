<?php
include("conn.php");

$email = $_POST['email'];
$password = $_POST['password$password'];

$email = stripcslashes($email);
$email = mysql_real_escape_string($email);


?>