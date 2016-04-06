<?php
  include "inc/conf.php";
  include "inc/errMsg.php";

  // checkPost($_POST);

  //PO DB
  $code = $_POST['code'];
  $customer_id = $_POST['customer_id'];
  $created = toMysql($_POST['created']);
  $total = str_replace(',', '', $_POST['total']);
  $vat = str_replace(',', '', $_POST['vat']);
  $total_vat = str_replace(',', '', $_POST['total_vat']);

  // PODETAIL DB
  $pd_amount = $_POST['pd_amount'];
  $duedate = $_POST['duedate'];
  $price = $_POST['price'];
  $qty = $_POST['qty'];
  $pid = $_POST['pid'];



  $due_date = toMysql($duedate[0]);
  $insertPo = "INSERT INTO $Po VALUES(null, '$code','$customer_id','$total','$vat', '$total_vat' , '$created', '$due_date')";
  $resultPo = mysql_db_query($db_name, $insertPo);
  // echo $insertPo;
  if ($resultPo) {

    $posql = "select po_id from $Po Order by po_id Desc limit 0,1";
    $poquery = mysql_db_query($db_name, $posql);
    $po_id = mysql_fetch_row($poquery);

    $loop = count($pd_amount);
    for($i = 0; $i<$loop; $i++){
      $date = toMysql($duedate[$i]);
      $price_ = str_replace(',', '', $price[$i]);
      $qty_ = str_replace(',', '', $qty[$i]);
      $pd_amount_ = str_replace(',', '', $pd_amount[$i]);
      $insertPoDetail = "INSERT INTO $PoDetails VALUES('$po_id[0]','$code', '$pid[$i]','$price_','$qty_','$pd_amount_', '$date')";
      echo $insertPoDetail;
      $resultPoDetail = mysql_db_query($db_name, $insertPoDetail);
      if (!$resultPoDetail) {
       die('Invalid query: ' . mysql_error());
      }
    }
    mysql_close();
    header("location: overview_po.php");
  }

?>