<?php
  include "inc/conf.php";
  include "inc/errMsg.php";

  // checkPost($_POST);

  //MO DB
  $mo_id = $_POST['code'];
  $po_id = $_POST['po_id'];
  $po_code = $_POST['po_code'];
  $customer_id = $_POST['customer_id'];
  $created = toMysql($_POST['created']);
  $duedate_ = toMysql($_POST['duedate'][0]);
  $id = $_GET['id'];

  // MODETAIL DB
  $duedate = $_POST['duedate'];
  $qty = $_POST['qty'];
  $pid = $_POST['pid'];


  $updateMo = "UPDATE $Production SET created='$created',duedate='$duedate_'";
  $updateMo .= " WHERE production_id='$id'"; 

  $resultMo = mysql_db_query($db_name, $updateMo);
  if ($resultMo) {
    $loop = count($pd_amount);
    for($i = 0; $i<$loop; $i++){
      $date = toMysql($duedate[$i]);

      $updateMoDetail = "UPDATE $ProductionDetails SET";
      $updateMoDetail .= " due_date='$date'";        
      $updateMoDetail .= " WHERE production_code='$production_code' AND product_id='$pid[$i]'";
      $resultMoDetail_ = mysql_db_query($db_name, $updateMoDetail);
    }
    mysql_close();
    header("location: overview_mo.php");
  }
  else{
    die('Invalid query: ' . mysql_error());
  }

?>