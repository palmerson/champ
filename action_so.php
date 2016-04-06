<?php
  include "inc/conf.php";
  include "inc/errMsg.php";
  //print_r($_POST);
   //checkPost($_POST);

  //SO DB
  $product_id = $_POST['product_id'];
  $qty = $_POST['qty'];
  $stock = $_POST['stock'];
  $total = $_POST['total'];
  
  
  $po_id = $_GET['po_id'];
  $created = toMysql($_POST['created']);
  
  $insertSo = "INSERT INTO $StockOut VALUES(null, '$po_id','$created')";
  $resultSo = mysql_db_query($db_name, $insertSo);
  if ($resultSo) {
  	$sosql = "select stock_out_id from $StockOut Order by stock_out_id Desc limit 0,1";
	$soquery = mysql_db_query($db_name, $sosql);
	$stock_id = mysql_fetch_row($soquery);
    $loop = count($_POST['product_id']);
    for($i = 0; $i<$loop; $i++){
      // if($stock[$i] != 0){
        // echo 'palm';
        $insertSoDetails = "INSERT INTO $StockOutDetails VALUES('$stock_id[0]', '$product_id[$i]','$qty[$i]','$stock[$i]','$total[$i]')";
        $resultSodetails = mysql_db_query($db_name, $insertSoDetails);
        $productsql = "select stock from $Products WHERE product_id='$product_id[$i]'";
        $productquery = mysql_db_query($db_name, $productsql);
        $product_id1 = mysql_fetch_row($productquery);
        $amount =  $product_id1[0] - $stock[$i] ;
        $sql = "UPDATE $Products SET stock='$amount' WHERE product_id='$product_id[$i]'";
        $result = mysql_db_query($db_name, $sql);
      // }
	}
  	mysql_close();
    header("location: overview_stock.php");
  }
  

?>