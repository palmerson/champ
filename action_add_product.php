<?php
  include "inc/conf.php";
  include "inc/errMsg.php";

  $name = $_POST['name'];
  $price = $_POST['price'];
  $unit = $_POST['unit'];
  $remark = $_POST['remark'];
  $product_id = $_POST['product_id'];

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

  $sql = "INSERT INTO $Products VALUES('$product_id', '$name','$unit','$price','$remark', '$pic_path' , '0')";
  // echo $sql;
  $result = mysql_db_query($db_name, $sql);
  if ($result) {
    header("location: overview_product.php");
  } // end if
  else {
    echo "<b>$error_add_product</b> <br>"."<br>";
    echo "<a href=\"javascript:history.go(-1)\"><font color=\"black\">Go Back</a>";
  }
  mysql_close();  
 // header("location: home.php");
?>