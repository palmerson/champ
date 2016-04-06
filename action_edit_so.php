<?php
  include "inc/conf.php";
  include "inc/errMsg.php";
  //print_r($_POST);
  checkPost($_REQUEST);

  //SO DB
  $product_id = $_POST['product_id'];
  $qty = $_POST['qty'];
  $stock = $_POST['stock'];
  $total = $_POST['total'];
  
  
  $po_id = $_POST['po_id'];
  $sid = $_GET['sid'];
  $created = toMysql($_POST['created']);
  
  $updateSo = "UPDATE $StockOut SET created='$created' WHERE stock_out_id='$sid'";
  $resultSo = mysql_db_query($db_name, $updateSo);
  if ($resultSo) {
    $loop = count($_POST['product_id']);

      for($i = 0; $i<$loop; $i++){
        if($stock[$i] != 0){

        $productsql_ = "select stock from $StockOutDetails WHERE product_id='$product_id[$i]'";
        $productquery_ = mysql_db_query($db_name, $productsql_);
        $product_ = mysql_fetch_row($productquery_);

        $updateSoDetails = "UPDATE $StockOutDetails SET qty='$qty[$i]', total='$total[$i]', stock='$stock[$i]'  WHERE product_id='$product_id[$i]' and stock_out_id='$sid' ";
        $resultSodetails = mysql_db_query($db_name, $updateSoDetails);


        $productsql = "select stock from $Products WHERE product_id='$product_id[$i]'";
        $productquery = mysql_db_query($db_name, $productsql);
        $product_id1 = mysql_fetch_row($productquery);
        $amount =  $product_id1[0] - ( $stock[$i] - $product_[0]) ;
        $sql = "UPDATE $Products SET stock='$amount' WHERE product_id='$product_id[$i]'";
        $result = mysql_db_query($db_name, $sql);
      }
  	}
  	mysql_close();
    header("location: overview_stock.php");
  }
  

?>