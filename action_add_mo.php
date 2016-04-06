<?php
  include "inc/conf.php";
  include "inc/errMsg.php";

  // checkPost($_POST);

  //MO DB
  // $mo_id = $_POST['code'];
  $po_id = $_POST['po_id'];
  $po_code = $_POST['po_code'];
  $customer_id = $_POST['customer_id'];
  $created = toMysql($_POST['created']);
  $duedate_ = toMysql($_POST['duedate'][0]);

  // MODETAIL DB
  $duedate = $_POST['duedate'];
  $senddate = $_POST['senddate'];
  $qty = $_POST['qty'];
  $pid = $_POST['pid'];


  $insertProduction = "INSERT INTO $Production VALUES(null, '$po_id','$customer_id','$created', '$duedate_')";
  $resultProduction = mysql_db_query($db_name, $insertProduction);
  if ($resultProduction) {

    $productionSql = "select production_id from $Production Order by production_id Desc limit 0,1";
    $query3 = mysql_db_query($db_name, $productionSql);
    $production_id = mysql_fetch_row($query3);


    $loop = count($pid);
    for($i = 0; $i<$loop; $i++){
      $due = toMysql($duedate[$i]);
      $send = toMysql($senddate[$i]);
      $insertProductionDetail = "INSERT INTO $ProductionDetails VALUES('$production_id[0]', '$pid[$i]','$qty[$i]', '$send',  '$due')";
      $resultProductionDetail = mysql_db_query($db_name, $insertProductionDetail);
      if (!$resultProductionDetail) {
       die('Invalid query: ' . mysql_error());
      }
    }
    mysql_close();
    header("location: overview_mo.php");
  }

?>