<?php

$host = 'localhost';
$user = 'root';
$pass = 'mysql';
$dbname = 'user_info';

$mysqli = new mysqli($host, $user,$pass ,$dbname);


if($mysqli->connect_errno){
    die("Error:".$mysqli->connect_error);
}
return $mysqli;
?>