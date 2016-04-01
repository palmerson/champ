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
  $id = $_GET['id'];

  // PODETAIL DB
  $pd_amount = $_POST['pd_amount'];
  $duedate = $_POST['duedate'];
  $price = $_POST['price'];
  $qty = $_POST['qty'];
  $pid = $_POST['pid'];


  $updatePo = "UPDATE $Po SET code='$code', customer_id='$customer_id', total='$total', vat='$vat', total_vat='$total_vat', created='$created', duedate='$due_date'";
  $updatePo .= " WHERE po_id='$id'";

  $resultPo = mysql_db_query($db_name, $updatePo);
  if ($resultPo) {
    $loop = count($pd_amount);
    for($i = 0; $i<$loop; $i++){
      $date = toMysql($duedate[$i]);
      $insertPoDetail = "INSERT INTO $PoDetails"; 
      $insertPoDetail .= " VALUES('$code', '$pid[$i]','$price[$i]','$qty[$i]','$pd_amount[$i]', '$date')";
      $resultPoDetail = mysql_db_query($db_name, $insertPoDetail);

      $updatePoDetail = "UPDATE $PoDetails SET";
      $updatePoDetail .= " unit_price='$price[$i]', qty='$qty[$i]', amount='$pd_amount[$i]', duedate='$date'";        
      $updatePoDetail .= " WHERE code='$code' AND product_id='$pid[$i]'";
      $resultPoDetail_ = mysql_db_query($db_name, $updatePoDetail);
    }
    mysql_close();
    header("location: overview_po.php");
  }
  else{
    die('Invalid query: ' . mysql_error());
  }

?>