<?php

session_start();

if(isset($_SESSION['user_id']))
{
    $mysqli = require __DIR__ ."/database.php";
    $sql = "SELECT * FROM user WHERE ID = {$_SESSION['user_id']}";
    $resualt = $mysqli->query($sql);
    $user = $resualt->fetch_assoc();    
}
if(isset($user)){

    require __DIR__.'/LOGED-IN.html';
 }
 else{
    require __DIR__.'/NOT-LOGED-IN.html';
 }