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
      <center><h1>รายงานลูกค้า</h1></center>
  <div style="height: 20px;"></div>
  <style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;border-color:#999;border:none;margin:0px auto;}

.tg td{font-family:Arial, sans-serif;font-size:14px;width:960px;padding:20px 20px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#999;color:#444;background-color:#F7FDFA;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:20px 20px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#999;color:#fff;background-color:#26ADE4;}
.tg .tg-vn4c{background-color:#D2E4FC}
th.tg-sort-header::-moz-selection { background:transparent; }th.tg-sort-header::selection      { background:transparent; }th.tg-sort-header { cursor:pointer; }table th.tg-sort-header:after {  content:'';  float:right;  margin-top:7px;  border-width:0 4px 4px;  border-style:solid;  border-color:#404040 transparent;  visibility:hidden;  }table th.tg-sort-header:hover:after {  visibility:visible;  }table th.tg-sort-desc:after,table th.tg-sort-asc:after,table th.tg-sort-asc:hover:after {  visibility:visible;  opacity:0.4;  }table th.tg-sort-desc:after {  border-bottom:none;  border-width:4px 4px 0;  }@media screen and (max-width: 767px) {.tg {width: auto !important;}.tg col {width: auto !important;}.tg-wrap {overflow-x: auto;-webkit-overflow-scrolling: touch;margin: auto 0px;}}</style>
<div class="tg-wrap"><table id="tg-0YX8L" class="tg">
  <tr>
    <th class="tg-031e">รหัสลูกค้า</th>
    <th class="tg-031e">ชื่อลูกค้า</th>
    <th class="tg-031e">ที่อยู่ลูกค้า</th>
    <th class="tg-031e">ผู้ติดต่อ</th>
 <th class="tg-031e">เบอร์โทรศัพท์</th>
  </tr>
  <?php
    $sql = "SELECT * FROM $Customers ORDER BY customer_id";

  $query = mysql_db_query($db_name, $sql);
  $counter = 1;
    while($row = mysql_fetch_array($query)) {
    if($counter%2 == 0){
  ?>
    <tr>
      <td class="tg-vn4c"><?php echo $row['customer_id'];?></td>
      <td class="tg-vn4c"><?php echo $row['company_name'];?></td>
      <td class="tg-vn4c"><?php echo $row['address'];?></td>
     <td class="tg-vn4c"><?php echo $row['contact'];?></td>
      <td class="tg-vn4c"><?php echo $row['phone'];?></td>
    </tr>
  <?php
    } else{
  ?>
    <tr>
      <td class="tg-031e"><?php echo $row['customer_id'];?></td>
      <td class="tg-031e"><?php echo $row['company_name'];?></td>
      <td class="tg-031e"><?php echo $row['address'];?></td>
     <td class="tg-031e"><?php echo $row['contact'];?></td>
      <td class="tg-031e"><?php echo $row['phone'];?></td>
    </tr>
  <?php  }
   $counter++;
  }
  ?>
</table>
  </table>

  </page>

  </body>
</html>