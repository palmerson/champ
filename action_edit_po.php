<?php
  include "inc/conf.php";
  include "inc/errMsg.php";

  checkPost($_POST);

  //PO DB
  $code = $_POST['code'];
  $customer_id = $_POST['customer_id'];
  $created = toMysql($_POST['created']);
  $total = str_replace(',', '', $_POST['total']);
  $vat = str_replace(',', '', $_POST['vat']);
  $total_vat = str_replace(',', '', $_POST['total_vat']);

  $id = $_GET['id'];

  // PODETAIL DB
  $pd_amount = $_POST['pd_amount'];
  $duedate = $_POST['duedate'];
  $price = $_POST['price'];
  $qty = $_POST['qty'];
  $pid = $_POST['pid'];
  $due_date = toMysql($duedate[0]);


  $updatePo = "UPDATE $Po SET po_code='$code', customer_id='$customer_id', total='$total', vat='$vat', total_vat='$total_vat', created='$created', duedate='$due_date'";
  $updatePo .= " WHERE po_id='$id'";
  // echo $updatePo;

  $resultPo = mysql_db_query($db_name, $updatePo);
  if ($resultPo) {
    $loop = count($pd_amount);
    for($i = 0; $i<$loop; $i++){
      $date = toMysql($duedate[$i]);
      $price_ = str_replace(',', '', $price[$i]);
      $qty_ = str_replace(',', '', $qty[$i]);
      $pd_amount_ = str_replace(',', '', $pd_amount[$i]);

      $insertPoDetail = "INSERT INTO $PoDetails"; 
      $insertPoDetail .= " VALUES('$id','$code', '$pid[$i]','$price_','$qty_','$pd_amount_', '$date')";
      $resultPoDetail = mysql_db_query($db_name, $insertPoDetail);
      // echo $insertPoDetail;

      $updatePoDetail = "UPDATE $PoDetails SET";
      $updatePoDetail .= " unit_price='$price_', qty='$qty_', amount='$pd_amount_', duedate='$date'";        
      $updatePoDetail .= " WHERE po_code='$code' AND product_id='$pid[$i]'";
      $resultPoDetail_ = mysql_db_query($db_name, $updatePoDetail);
      // echo $updatePoDetail;
    }
    mysql_close();
    header("location: overview_po.php");
  }
  else{
    die('Invalid query: ' . mysql_error());
  }

?>