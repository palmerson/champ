<?php
  include "inc/conf.php";
  include "inc/errMsg.php";

  // echo "<pre>";
  // print_r($_POST);
  // echo "</pre>";

  $company = $_POST['company'];
  $contact = $_POST['contact'];
  $type= $_POST['type'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];
  $fax = $_POST['fax'];
  $credit = $_POST['credit'];
  $town = $_POST['town'];
  $city = $_POST['city'];
  $zip = $_POST['zip'];
  $customer_id = $_GET['id'];

  $sql = "UPDATE $Customers SET company_name='$company', contact='$contact', customer_type='$type', address='$address', phone='$phone', fax='$fax', credit='$credit', town='$town', city='$city', zip='$zip' WHERE customer_id='$customer_id'";
  // echo $sql;
  $result = mysql_db_query($db_name, $sql);
  if ($result) {
    header("location: overview_customer.php");
  } // end if
  else {
    echo "<b>$error_edit_customer</b> <br>"."<br>";
    echo "<a href=\"javascript:history.go(-1)\"><font color=\"black\">Go Back</a>";
  }
  mysql_close();  
 // header("location: home.php");
?>