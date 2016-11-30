<?php
$host_name  = "db622103225.db.1and1.com";
$database   = "db622103225";
$user_name  = "dbo622103225";
$password   = "youtube01";
$db = mysqli_connect($host_name, $user_name, $password, $database);
if(mysqli_connect_errno()) {die('The connection to the database could not be established.');}
$db->set_charset("utf8");
?>