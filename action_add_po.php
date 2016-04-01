<?php
  include "inc/conf.php";
  include "inc/errMsg.php";

  // checkPost($_POST);

  //PO DB
  $code = $_POST['code'];
  $customer_id = $_POST['customer_id'];
  $created = toMysql($_POST['created']);
  $due_date = toMysql($_POST['due_date']);
  $total = $_POST['total'];
  $vat = $_POST['vat'];
  $total_vat = $_POST['total_vat'];

  // PODETAIL DB
  $pd_amount = $_POST['pd_amount'];
  $duedate = $_POST['duedate'];
  $price = $_POST['price'];
  $qty = $_POST['qty'];
  $pid = $_POST['pid'];




  $insertPo = "INSERT INTO $Po VALUES(null, '$code','$customer_id','$total','$vat', '$total_vat' , '$created', '$due_date')";
  $resultPo = mysql_db_query($db_name, $insertPo);
  if ($resultPo) {
    // if ($result) {
    //  die('Invalid query: ' . mysql_error());
    // }
    $loop = count($pd_amount);
    for($i = 0; $i<$loop; $i++){
      $date = toMysql($duedate[$i]);
      $insertPoDetail = "INSERT INTO $PoDetails VALUES('$code', '$pid[$i]','$price[$i]','$qty[$i]','$pd_amount[$i]', '$date')";
      $resultPoDetail = mysql_db_query($db_name, $insertPoDetail);
      if (!$resultPoDetail) {
       die('Invalid query: ' . mysql_error());
      }
    }
    mysql_close();
    header("location: overview_po.php");
  }

?>