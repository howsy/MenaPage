<?php
//validation

if(empty($_POST['name'])){
die('name is requierd');
}

if(empty($_POST['username'])){
    die('username is requierd');}

if(! filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
    die("valid email is requaierd");
}

if(!strlen($_POST['password']) > 8)
{
    die("password must be longer than 8 charecters");
}
if(! preg_match("/[a-z]/i",$_POST['password'])){
    die("password must contain at least one charecter");
}
if(! preg_match("/[0-9]/",$_POST['password'])){
    die("password must contain at least one number");
}
if($_POST['password']!==$_POST['password_confirmation']){
    die("passwords must match");
}
$hash = password_hash($_POST['password'],PASSWORD_DEFAULT);

/*prepering to send data */

$mysqli = require __DIR__ ."/database.php";

$sql = "INSERT INTO user (username,email,name,password_hash) VALUES (?,?,?,?)";

$stmt=mysqli_stmt_init($mysqli);

if(!$stmt->prepare($sql)){
    die("SQL ERROR: ".$mysqli->error);
}
$stmt->bind_param("ssss",$_POST['username'],$_POST['email'],$_POST['name'],$hash);

if(!$stmt->execute()){

    if($mysqli->errno==1062){
        echo'Email or username is alrady taken';
    }
    else
die($mysqli->error." ".$mysqli->errno);
}else
header("location: signup-success.html");
exit;
?>