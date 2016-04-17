<?php
  include('session.php');
  include('inc/conf.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title></title>

    <style>
    body {
  background: rgb(204,204,204); 
}
page[size="A4"] {
  background: white;
  width: 21cm;
  height:100%;
  display: block;
  margin: 0 auto;
  margin-bottom: 0.5cm;
  box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
  padding: 2cm 3cm 2cm 3cm;
}
@media print {
  body, page[size="A4"] {
    margin: 0;
    box-shadow: 0;
  }
}
    </style>
  </head>
  <body>
  <page size="A4">
  <center><h1>รายงานสินค้า</h1></center>
  <div style="height: 20px;"></div>
<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;border-color:#999;border:none;margin:0px auto;width:100%;}

.tg td{font-size:14px;padding:5px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#000;color:#444;background-color:#F7FDFA;}
.tg th{font-size:14px;font-weight:normal;padding:10px 10px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#000;color:#fff;background-color:#26ADE4;text-align: center;}
.tg .tg-vn4c{background-color:#D2E4FC}

.center { text-align: center; }
</style>
<div class="tg-wrap"><table id="tg-0YX8L" class="tg">
  <tr>
    <th class="tg-031e">ลำดับ</th>
    <th class="tg-031e">รูปสินค้า</th>
    <th class="tg-031e">รหัสสินค้า</th>
    <th class="tg-031e">ชื่อสินค้า</th>
    <th class="tg-031e">ราคา</th>
    <th class="tg-031e">สต๊อก</th>
    <th class="tg-031e">หมายเหตุ</th>
  </tr>

  <?php 

  if (isset($_GET['p'])) {
    $page =  $_GET['p'];
    $p = $page - 1;
  }else{
    $page = 1;
    $p = 0;
  }

  $sql = "SELECT * FROM $Products ORDER BY product_id ASC LIMIT $p , 100";

  $query = mysql_db_query($db_name, $sql);
  $counter = 1;
  while($row = mysql_fetch_array($query)) {
    if($counter%2 == 0){
    ?>
      <tr>
      <td class="tg-031e center"><?php echo $counter;?></td>
      <td class="tg-031e center">
        <?php if(empty($row['pic'])){
          // echo "<img src=\"images/vector%20smart%20object.png\"/>";
          echo "<img src=\"images/nophoto.jpg\" width=\"60\" height=\"60\"/>";
        }
          else{
          echo "<img src=\"$row[5]\" width=\"60\" height=\"60\"/>";
        } 
        ?>
      </td>
      <td class="tg-031e center"><?php echo $row['product_id']?></td>
      <td class="tg-031e"><?php echo $row['name']?></td>
      <td class="tg-031e center"><?php echo number_format($row['price'],2,'.',',')?></td>
      <td class="tg-031e center"><?php echo number_format($row['stock'],0,'',',')?></td>
     <td class="tg-031e"><?php echo $row['remark']?></td>
    
    </tr> 
    <?php
    }
    else{ ?>
      <tr>
      <td class="tg-vn4c center"><?php echo $counter;?></td>
      <td class="tg-vn4c center">
        <?php if(empty($row['pic'])){
          // echo "<img src=\"images/vector%20smart%20object.png\"/>";
          echo "<img src=\"images/nophoto.jpg\" width=\"60\" height=\"60\"/>";
        }
          else{
          echo "<img src=\"$row[5]\" width=\"60\" height=\"60\"/>";
        } 
        ?>
      </td>
      <td class="tg-vn4c center"><?php echo $row['product_id']?></td>
      <td class="tg-vn4c"><?php echo $row['name']?></td>
      <td class="tg-vn4c center"><?php echo number_format($row['price'],2,'.',',')?></td>
      <td class="tg-vn4c center"><?php echo number_format($row['stock'],0,'',',')?></td>
     <td class="tg-vn4c"><?php echo $row['remark']?></td>
    </tr> 
    <?php }
    $counter++;
  }
  // echo $page;
  mysql_close();
  ?>
</table>

  </page>

  </body>
</html>
