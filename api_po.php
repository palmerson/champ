<?php
  include "inc/conf.php";

  $pid = $_GET['pid'];

  $list = array();

  $sql = "SELECT a.*, b.company_name as name FROM $Po a "; 
  $sql .= " LEFT JOIN $Customers b ON a.customer_id=b.customer_id ";
  $sql .= " WHERE po_id = '$pid'";
  $query = mysql_db_query($db_name, $sql);
  // $po = mysql_fetch_row($query);
  while ($po = mysql_fetch_assoc($query)) {
    $detail = $po;
  }


  $sql2 = "SELECT a.code,b.product_id,b.qty,b.duedate,c.name FROM $Po a "; 
  $sql2 .= " LEFT JOIN $PoDetails b ON a.code=b.code ";
  $sql2 .= " LEFT JOIN $Products c ON b.product_id=c.product_id ";
  $sql2 .= " WHERE po_id = '$pid'";

  $query2 = mysql_db_query($db_name, $sql2);
  // $po = mysql_fetch_row($query);

  while ($row = mysql_fetch_assoc($query2)) {
    $list[] = $row;
  }

  $data = array( 'detail' => $detail, 'lists' => $list);
  print_r(json_encode($data));
  mysql_close();
?>  