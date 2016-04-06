<?php
  include "inc/conf.php";
  $po_id = $_GET['po_id'];
  $list = array();
  $detail = array();
  $sql = "SELECT a.*, b.company_name as name FROM $Po a "; 
  $sql .= " LEFT JOIN $Customers b ON a.customer_id=b.customer_id ";
  $sql .= " WHERE po_id = '$po_id'";
  
  $query = mysql_db_query($db_name, $sql);
  // $po = mysql_fetch_row($query);
  while ($po = mysql_fetch_assoc($query)) {
    $detail = $po;
  }
  $sql2 = "SELECT a.po_code,b.product_id,b.qty,b.duedate,c.name FROM $Po a "; 
  $sql2 .= " LEFT JOIN $PoDetails b ON a.po_code=b.po_code ";
  $sql2 .= " LEFT JOIN $Products c ON b.product_id=c.product_id ";
  $sql2 .= " WHERE a.po_id = '$po_id'";
  $query2 = mysql_db_query($db_name, $sql2);
  // echo $sql2;
  // $po = mysql_fetch_row($query);
  while ($row = mysql_fetch_assoc($query2)) {
    $list[] = $row;
  }
  $data = array( 'detail' => $detail, 'lists' => $list);
  print_r(json_encode($data));
  mysql_close();
?>