<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>معمل مينا</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Arabic:wght@900&display=swap" rel="stylesheet">
      
      <style>
          @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Arabic:wght@900&display=swap');
        </style>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
      <link rel="stylesheet" href="assets/css/fontawesome.min.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Arabic:wght@600&display=swap" rel="stylesheet">    
      <style>
           h2 ,h3,h4,h5,h6,p{
              font-family: 'Noto Sans Arabic', sans-serif;
          }
</style>
<style>
h1{
    font-size: 30px;
    color: #fff;
    text-transform: uppercase;
    font-weight: 300;
    text-align: center;
    margin-bottom: 15px;
  }
  table{
    width:100%;
    table-layout: fixed;
  }
  .tbl-header{
    background-color: rgba(255,255,255,0.3);
   }
  .tbl-content{
    height:300px;
    overflow-x:auto;
    margin-top: 0px;
    border: 1px solid rgba(255,255,255,0.3);
  }
  th{
    padding: 20px 15px;
    text-align: left;
    font-weight: 500;
    font-size: 12px;
    color: #fff;
    text-transform: uppercase;
  }
  input{
    background-color: rgba(255,255,255,0.3);
    float: right;
    margin-top: 5px;
    margin: 10px ;
    padding:5px 8px;
    text-align: left;
    font-weight: 500;
    font-size: 18px;
    color: #333;
    border: black solid 1px;
    display: flex;
    border-radius: 5px;}
  
    label{
      float: right;
    margin:5px ;
    padding:10px;
    text-align: left;
    font-weight: 500;
    font-size: 16px;
    color: #333;
    display: flex;}
  button{
  
    background-color: rgba(255,255,255,0.3);
    padding:5px 8px;
    font-weight: 500;
    font-size: 18px;
    color: #333;
    border: black solid 1px;
    border-radius: 5px;
    size: 10px 5px;
  }
  button:hover{
    background-color: #333;
    position: relative;
    color: #fff;
    cursor: pointer;
  }
  td{
    padding: 15px;
    text-align: left;
    vertical-align:middle;
    font-weight: 300;
    font-size: 12px;
    color: #fff;
    border-bottom: solid 1px rgba(255,255,255,0.1);
  }
  
  .form{
    margin: 50px;
    display: flexbox;
    float: right;
  
  }
  
  /* demo styles */
  
  @import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
  body{
    background: -webkit-linear-gradient(left, #25c481, #25b7c4);
    background: linear-gradient(to right, #25c481, #25b7c4);
    font-family: 'Roboto', sans-serif;
    font-family: 'Noto Sans Arabic', sans-serif;
  
  }
  section{
    margin: 50px;
  }
  
  
  /* follow me template */
  .made-with-love {
    margin-top: 40px;
    padding: 10px;
    clear: left;
    text-align: center;
    font-size: 10px;
    font-family: arial;
    color: #fff;
  }
  .made-with-love i {
    font-style: normal;
    color: #F50057;
    font-size: 14px;
    position: relative;
    top: 2px;
  }
  .made-with-love a {
    color: #fff;
    text-decoration: none;
  }
  .made-with-love a:hover {
    text-decoration: underline;
  }
  .main-btn-link{
    color: #F50057;
    font-size: 18px;
    position: relative;
    top: 2px;

  }
  .main-btn-link a{
    color: #333;
    text-decoration: none;
  }
  .main-btn-link a:hover{
    text-decoration: underline;
  }
  .resualt-class{
  
    margin-top: 40px;
    margin-left: 50%;
    padding: 10px;
    clear: left;
    text-align: center;
    font-size: 10px;
    font-family: arial;
    color: #fff;
    align-self: center;
    float: calc(right * 50%);
  
  }
  .resualt-class h4{
    font-style: normal;
    color: #F50057;
    font-size: 14px;
  
    position: relative;
    top: 2px;
    float:right;
  }
  
  .form-button{
    text-align: center;
  }
  
  /* for custom scrollbar for webkit browser*/
  
  ::-webkit-scrollbar {
      width: 6px;
  } 
  ::-webkit-scrollbar-track {
      -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
  } 
  ::-webkit-scrollbar-thumb {
      -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
  }
          .nav-llink{
              font-size: 24px !important;
      font-weight: 500 !important;
      display: block;
      padding: 0.5rem 1rem;
      text-decoration: none;
      transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out;
  
          }
        </style>

<link rel="stylesheet" href="style.css" >
</head>
<body>
<!-- partial:index.partial.html -->
<section>
  <!--for demo wrap-->
  <h1>مصاريف المعمل</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
              <th>التاريخ</th>
              <th>رقم الطلب</th>
              <th>الوصف</th>
              <th>مقدار الطلب</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <?php if(!empty($transactions)): ?>
        <?php foreach($transactions as $transaction ): ?>
        <tr>
          <td><?= FormatDate($transaction['date']); ?></td>
          <td><?= $transaction['checkNumber']; ?></td>
          <td><?= $transaction['description']; ?></td>
          <td>
          <?php if($transaction['amount']<0):?>
          <span style="color:red;"> <?=formatDollarAmount($transaction['amount']); ?></span>
          <?php elseif($transaction['amount']>=0):?>
              <span style="color:darkgreen;"> <?=formatDollarAmount($transaction['amount']); ?></span>
          <?php endif?>    
         </td>
        </tr>
              <?php endforeach; ?>
                        <?php endif;?>      
         
      </tbody>
      <tfoot>
      <tr>
                    <th colspan="3">Total Income:</th>
                    <td style="color:darkgreen;">
                        <?= formatDollarAmount($totals['totalIncome']) ?>
                    </td>
                </tr>
                <tr>
                    <th colspan="3">Total Expense:</th>
                    <td style="color:red;"><?= formatDollarAmount($totals['totalExpense']) ?></td>
                </tr>
                <tr>
                    <th colspan="3">Net Total:</th>
                    <td><?= formatDollarAmount($totals['netTotal']) ?></td>
                </tr>
      </tfoot>
    </table>
  </div>
</section>
<section>
<div class="tbl-header">
  <table>
    <thead cellpadding="0" cellspacing="0" border="0" >
    <tr>
      <th>
        المدخول الكلي 
      </th>
      <th>
      المصاريف الكلية 
      </th>
      <th>
      الربح الصافي 
      </th>
    </tr>
    </thead>
  </table>
</div>
<div>
  <table>
    <tbody>
      <tr>
        <td style="color:green;"><?= formatDollarAmount($totals['totalIncome']) ?> </td>
        <td style="color:darkred;"><?= formatDollarAmount($totals['totalExpense']) ?></td>
        <td><?= formatDollarAmount($totals['netTotal']) ?></td>
      </tr>
    </tbody>
  </table>
</div>

</section>


<section>
<div class="form">


<form method="POST" action="../../App/public/index.php">

<?php

?>

  <table>
<thead>
  <tr>
    <th></th>
    <th><label for="checkNum">: رقم الطلب</label></th>
    <th><label for="comment">: الوصف</label></th>
    <th><label for="amount">: المبلغ</label></th>
  </tr>
</thead>

  </table>
  <div>
    <table>
      <tbody>
        <tr>
        <td class="form-button">
          <button  type="submit" name="submit">اضف الطلب</button>
        </td>  
        <td><input type="text" name="checkNum"></td>
        <td><input type="text" name="comment" placeholder="الوصف"></td>
        <td><input type="number" name="amount" placeholder="$$$" required ></td>
        </tr>

        <tr>
          <td class="form-button" colspan="4">
            <div class="main-btn-link">
          <a href="../../login-assets/index.php">الرجوع لواجهة التحكم </a>
            </div>
        </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>


    
  </form>
</div>
</section>

<!-- follow me template -->
<section>
<div class="made-with-love">
  Made by
  <a target="_blank" href="https://hasanenwaleed.000webhostapp.com/">HOWSY</a>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>
</section>
</body>
</html>
