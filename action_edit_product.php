<?php
  include "inc/conf.php";
  include "inc/errMsg.php";

  $name = $_POST['name'];
  $price = $_POST['price'];
  $unit = $_POST['unit'];
  $remark = $_POST['remark'];
  $product_id = $_GET['pid'];

  if($_FILES['pic']['size'] > 0){
    $upload_dir = 'imgs';
    $tmp_name = $_FILES["pic"]["tmp_name"];
    $pic_name = $_FILES["pic"]["name"];
    copy($tmp_name,"imgs/".$pic_name);
    $pic_path = "imgs/".$pic_name;
  }
  else{
    $pic_path = "";
  }

  $sql = "UPDATE $Products SET name='$name', price='$price', unit='$unit' , remark='$remark', pic='$pic_path' WHERE product_id='$product_id'";
  // echo $sql;
  $result = mysql_db_query($db_name, $sql);
  if ($result) {
    header("location: overview_product.php");
  } // end if
  else {
    echo "<b>$error_edit_product</b> <br>"."<br>";
    echo "<a href=\"javascript:history.go(-1)\"><font color=\"black\">Go Back</a>";
  }
  mysql_close();  
 // header("location: home.php");
?>