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

  // MODETAIL DB
  $duedate = $_POST['duedate'];
  $qty = $_POST['qty'];
  $pid = $_POST['pid'];


  $insertMo = "INSERT INTO $Mo VALUES(null, '$mo_id','$po_code','$customer_id','$created', '$duedate_')";
  $resultMo = mysql_db_query($db_name, $insertMo);
  if ($resultMo) {
    // if ($result) {
    //  die('Invalid query: ' . mysql_error());
    // }
    $loop = count($pid);
    for($i = 0; $i<$loop; $i++){
      $date = toMysql($duedate[$i]);
      $insertMoDetail = "INSERT INTO $MoDetails VALUES('$mo_id', '$pid[$i]','$qty[$i]', '$date')";
      $resultMoDetail = mysql_db_query($db_name, $insertMoDetail);
      if (!$resultMoDetail) {
       die('Invalid query: ' . mysql_error());
      }
    }
    mysql_close();
    header("location: overview_mo.php");
  }

?>