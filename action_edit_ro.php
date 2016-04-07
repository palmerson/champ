<?php
  include "inc/conf.php";
  include "inc/errMsg.php";

  // echo "<pre>";
  // print_r($_POST);
  // echo "</pre>";
  $product_id = $_POST['product_id'];
  $qty = $_POST['qty'];
  $ro_id = $_GET['id'];

  $sql = "UPDATE $StockIn SET qty='$qty' WHERE stock_in_id='$ro_id'";
  // echo $sql;
  $result = mysql_db_query($db_name, $sql);
  if ($result) {
    $updateStock = "UPDATE $Products SET stock='$qty' WHERE product_id='$product_id'";
    $resultStock = mysql_db_query($db_name, $updateStock);
    header("location: overview_recive.php");
  } // end if
  else {
    echo "<b>$error_edit_customer</b> <br>"."<br>";
    echo "<a href=\"javascript:history.go(-1)\"><font color=\"black\">Go Back</a>";
  }
  mysql_close();  
 // header("location: home.php");
?>