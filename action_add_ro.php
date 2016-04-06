<?php
  include "inc/conf.php";
  include "inc/errMsg.php";

  // checkPost($_POST);

  //PO DB
  $product_id = $_POST['product_id'];
  $qty = $_POST['qty'];
  $created = toMysql($_POST['created']);
  


  $insertRo = "INSERT INTO $StockIn VALUES(null, '$product_id','$qty','$created')";
  $resultRo = mysql_db_query($db_name, $insertRo);
  if ($resultRo) {
    // if ($result) {
    //  die('Invalid query: ' . mysql_error());
    // }
    $updateStock = "UPDATE $Products SET stock='$qty' WHERE product_id='$product_id'";
    $resultStock = mysql_db_query($db_name, $updateStock);
    mysql_close();
    header("location: overview_recive.php");
  } 

?>