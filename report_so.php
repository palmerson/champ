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
tr{
  text-align: center;
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
    <center><h1>รายงานตัดสต๊อก</h1></center>
  <div style="height: 20px;"></div>
 <style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;border-color:#999;border:none;margin:0px auto;}

.tg td{font-family:Arial, sans-serif;font-size:14px;width:960px;padding:20px 20px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#999;color:#444;background-color:#F7FDFA;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:20px 20px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#999;color:#fff;background-color:#26ADE4;}
</style>
<div class="tg-wrap"><table id="tg-0YX8L" class="tg">
  <tr>
    <th class="tg-031e">ลำดับ</th>
    <th class="tg-031e">รหัสสินค้า</th>
    <th class="tg-031e">ชื่อสินค้า</th>
    <th class="tg-031e">จำนวนที่เพิ่ม</th>
    <th class="tg-031e">เลขที่ใบสั่งขาย</th>
    <th class="tg-031e">วันที่</th>
  </tr>
  <?php 

  $sql = "SELECT a.*, b.name,c.created,c.po_id FROM $StockOutDetails a LEFT JOIN products b ON a.product_id=b.product_id LEFT JOIN $StockOut c ON a.stock_out_id=c.stock_out_id where a.stock != 0";
  
  $query = mysql_db_query($db_name, $sql);
  // $po = mysql_fetch_row($query);
  $counter = 1;
  while ($po = mysql_fetch_array($query)) {
  //print_r($po);
  //}
 
  // $po = mysql_fetch_row($query);
      if($counter%2 != 0){
    ?>
  <tr>
    <td class="tg-vn4c"><?php echo $counter;?></td>
    <td class="tg-vn4c"><?php echo $po['product_id'];?></td>
    <td class="tg-vn4c"><?php echo $po['name'];?></td>
    <td class="tg-vn4c"><?php echo $po['stock'];?></td>
    <td class="tg-vn4c"><?php echo $po['po_id'];?></td>
    <td class="tg-vn4c"><?php echo toDatepicker($po['created']);?></td>
  </tr>
  <?php
   }else{
  ?>
  <tr>
    <td class="tg-031e"><?php echo $counter;?></td>
    <td class="tg-031e"><?php echo $po['product_id'];?></td>
    <td class="tg-031e"><?php echo $po['name'];?></td>
    <td class="tg-031e"><?php echo $po['stock'];?></td>
    <td class="tg-vn4c"><?php echo $po['po_id'];?></td>
    <td class="tg-031e"><?php echo toDatepicker($po['created'])?></td>
  </tr>
  <?php
    }
  $counter++;
  }
   mysql_close();
  ?>
</table>

  </page>

  </body>
</html>