<?php

$files = getTransactionFiles(FILE_PATH);
 
$transactions = [];

foreach($files as $file ){
    
    $transactions = array_merge($transactions,getTransactions($file, 'extractTransaction'));

}


$totals = calculateTotals($transactions);


?>