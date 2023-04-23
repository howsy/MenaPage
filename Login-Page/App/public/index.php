<?php

declare(strict_types=1);

session_start();
date_default_timezone_set('Asia/Baghdad');

if(isset($_SESSION['user_id']))
{
    $mysqli = require __DIR__ ."../../../login-assets/database.php";
    $sql = "SELECT * FROM user WHERE ID = {$_SESSION['user_id']}";
    $resualt = $mysqli->query($sql);
    $user = $resualt->fetch_assoc();

}

if(isset($user)){


$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;

define('APP_PATH', $root . 'APP'.DIRECTORY_SEPARATOR);
define('FILE_PATH',$root.'transactions-file'.DIRECTORY_SEPARATOR);
define('VIEWS_PATH', $root . 'views'.DIRECTORY_SEPARATOR);

require APP_PATH .'app.php';
require APP_PATH.'helper.php';

$files = getTransactionFiles(FILE_PATH);
 
$transactions = [];

foreach($files as $file ){
    
    $transactions = array_merge($transactions,getTransactions($file, 'extractTransaction'));

}


$totals = calculateTotals($transactions);

if(isset($_POST['submit'])
){
$arr=['date'=>date("M d , Y"), 'checkNum'=>$_POST['checkNum'], 'comment'=>$_POST['comment'], 'amount'=>$_POST['amount']] ;
  
  ADDTransactions(FILE_PATH.'sample.csv',$arr);
  require __DIR__.'/reload.php';
}

require VIEWS_PATH .'transactions.php';
}
else
echo 'PLEASE LOGIN FIRST';
