<?php
  include "inc/conf.php";
  $pid = $_GET['pid'];
  $sql = "SELECT product_id, name, price FROM $Products WHERE product_id = '$pid'";
  $query = mysql_db_query($db_name, $sql);
  $result = mysql_fetch_row($query);
  print_r(json_encode($result));
  mysql_close();
?>  