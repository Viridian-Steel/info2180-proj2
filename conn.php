<?php
$host = "localhost";
$user = "admin@project2.com";
$password = password_hash("password123");
$dmName = "dolphin_crm";

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);




?>