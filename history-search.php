<?php 
  include('session.php');
  include('inc/conf.php');

  if(isset($_GET['db']) && $_GET['db'] != 'เลือกหัวข้อ'){
    if(isset($_GET['db'])){ $db = $_GET['db']; }  
    if(isset($_GET['po_id']) && $_GET['po_id'] != 'เลือกใบสั่งขาย'){ $po = $_GET['po_id']; }
    if(isset($_GET['mo'])){ $po = $_GET['mo']; }  
    if(isset($_GET['customer_id']) && $_GET['customer_id'] != 'เลือกลูกค้า'){ $customer_id = $_GET['customer_id']; } 
    if(isset($_GET['product_id'])){ $product_id = $_GET['product_id']; } 
    if(isset($_GET['from'])){ $from = $_GET['from']; } 
    if(isset($_GET['to'])){ $to = $_GET['to']; }
    if(isset($_GET['pd']) && $_GET['pd'] != 'เลือกสินค้า'){ $pd = $_GET['pd']; }

//     if($db = 'po'){
// //
//     }
//     else if($db = 'mo'){
//       //
//     }
//     else if($db = 'ro'){
//       //
//     }
//     else{
//       //
//     } 
  }
?>

<!DOCTYPE html>
<html class="nojs html" lang="en-US">
 <head>

  <script type="text/javascript">
   if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["jquery-1.8.3.min.js", "museutils.js", "jquery.musepolyfill.bgsize.js", "jquery.watch.js", "history-search.css"], "outOfDate":[]};
</script>
  
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2015.1.1.343"/>
  <title>History Search</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?131700929"/>
  <link rel="stylesheet" type="text/css" href="css/master_a-master.css?336593918"/>
  <link rel="stylesheet" type="text/css" href="css/history-search.css?29483539" id="pagesheet"/>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <!-- Other scripts -->
  <script type="text/javascript">
   document.documentElement.className = document.documentElement.className.replace(/\bnojs\b/g, 'js');
</script>
  <!-- JS includes -->
  <script type="text/javascript">
   document.write('\x3Cscript src="' + (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//use.typekit.net/ik/9Xu70v9GMAeCunzsShwEmirn4lJcNDKJSy49nvYWTVXfec3JCG_bMsJGwDb35QSUFBvkZ2JtZQSUjD8cFQj3w29DwDwtjR9Xw2JoFcjhZ2bXFgGmjhyydWM0jhNlOfG0jhyydWM0jhNlJ6U3ScNt-AuyOAozicI7fbKzMsMMeMb6MqGIQWmDZZMg0JV0l39.js" type="text/javascript">\x3C/script>');
</script>
  <!-- Other scripts -->
  <script type="text/javascript">
   try {Typekit.load();} catch(e) {}
</script>
    <!--/*

*/
-->
 </head>
 <body class="museBGSize">

  <div class="clearfix" id="page"><!-- column -->
   <div class="position_content" id="page_position_content">
    <div class="clearfix colelem" id="pu156"><!-- group -->
     <a class="nonblock nontext clip_frame grpelem" id="u156" href="home.php"><!-- svg --><img class="svg" id="u154" src="images/pasted-svg-201.svg" width="201" height="40" alt="" data-mu-svgfallback="images/pasted%20svg%20201_poster_.png"/></a>
     <div class="clearfix grpelem" id="u164-6"><!-- content -->
      <p>บริษัท แชมป์ แมคคานิค แฟคตอรี่ จำกัด</p>
      <p>CHAMP MECHANIC FACTORY CO.,LTD.</p>
     </div>
    <form enctype="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET" id="search" >
    </div>
    <div class="colelem" id="u169"><!-- simple frame --></div>
    <div class="clearfix colelem" id="u3823-4"><!-- content -->
     <p>ค้นหาประวัติ<span class="hd"></span></p>
    </div>
    <div class="clearfix colelem" id="pu5160-4"><!-- group -->
     <div class="clearfix grpelem" id="u5160-4"><!-- content -->
      <p>หัวข้อรายงานที่ต้องการค้นหา</p>
     </div>
     <div class="clearfix grpelem" id="u5168-4"><!-- content -->
      <p>ช่วงวันที่ต้องการค้นหา</p>
     </div>
    </div>
    <div class="clearfix colelem" id="pu5161"><!-- group -->
     <div class="grpelem" id="u5161"><!-- custom html -->
<!--       <input class="textbox"type="text"> 
<style> 
 .textbox { 
    outline:0; 
    height:40px; 
    width: 404px;
  } 
</style>  -->
<select name='db' class='db'>
  <option>เลือกหัวข้อ</option>
  <option value="po" <?php if($db == 'po'){ echo 'selected'; } ?>>ใบสั่งขาย</option>
  <option value="mo" <?php if($db == 'mo'){ echo 'selected'; } ?>>สั่งผลิต</option>
  <option value="ro" <?php if($db == 'ro'){ echo 'selected'; } ?>>รับงานผลิตเข้าสต๊อก</option>
  <option value="so" <?php if($db == 'so'){ echo 'selected'; } ?>>ตัดสต๊อก</option>
</select>


</div>
     <div class="grpelem" id="u5171"><!-- custom html -->
      <input class="textbox datepicker"type="text" name="from" <?php if(isset($from)) { ?> value=<?php echo $from;   }?> > 
<style> 
 .textbox { 
    outline:0; 
    height:40px; 
    width: 186px; 
  } 
  select {
    width: 187px;
    line-height: 40px;
    height: 40px;
    -webkit-appearance: menulist-button;
    border-radius: 0;
  }
</style> 


</div>
     <div class="clearfix grpelem" id="u5176-4"><!-- content -->
      <p id="u5176-2">ถึง</p>
     </div>
     <div class="grpelem" id="u5184"><!-- custom html -->
      <input class="textbox datepicker"type="text" name="to" <?php if(isset($to)) { ?> value=<?php echo $to;   }?>> 
<style> 
 .textbox { 
    outline:0; 
    height:40px; 
    width: 186px; 
  } 
</style> 


</div>
    </div>
    <div class="clearfix colelem" id="ppu5218-4"><!-- group -->
     <div class="clearfix grpelem" id="pu5218-4"><!-- column -->
      <div class="clearfix colelem" id="u5218-4"><!-- content -->
       <p class='pd_txt'>สินค้า</p>
      </div>
      <div class="colelem" id="u5213"><!-- product -->
       <select class="pdt" disabled name="pd">
       <option>เลือกสินค้า</option>
    <?php
      $type = "SELECT product_id, name FROM $Products";
      $query_type = mysql_db_query($db_name, $type);
      while($ct = mysql_fetch_array($query_type)) {
        if($ct[0] == $pd){
          echo "<option value=\"$ct[0]\" selected>($ct[0]) $ct[1]</option>";  
        }
        else{
          echo "<option value=\"$ct[0]\">($ct[0]) $ct[1]</option>";  
        } 
      }
    ?>
    </select> 
<style> 
 .textbox { 
    outline:0; 
    height:40px; 
    width: 186px; 
  } 
</style> 


</div>
     </div>
     <div class="clearfix grpelem" id="pu5189-4"><!-- column -->
      <div class="clearfix colelem" id="u5189-4"><!-- content -->
       <p class="cus_txt">ลูกค้า</p>
      </div>
      <div class="colelem" id="u5192"><!-- custom html -->
         <select name="customer_id" class="customer_id" disabled>
         <option>เลือกลูกค้า</option>>

  <?php
    $type = "SELECT customer_id, company_name FROM $Customers";
    $query_type = mysql_db_query($db_name, $type);
    while($ct = mysql_fetch_array($query_type)) {
      if($ct[0] == $customer_id){
        echo "<option value=\"$ct[0]\" selected>($ct[0]) $ct[1]</option>"; 
      }else{
        echo "<option value=\"$ct[0]\">($ct[0]) $ct[1]</option>";  
      }  
    }
  ?>
  </select>
<style> 
 .textbox { 
    outline:0; 
    height:40px; 
    width: 186px; 
  } 
</style> 


</div>
     </div>
     <div class="clearfix grpelem" id="pu5205-4"><!-- column -->
      <div class="clearfix colelem" id="u5205-4"><!-- content -->
       <p class='lc'>เลขที่ใบ P/O - LC</p>
      </div>
      <div class="colelem" id="u5208"><!-- custom html -->
         <select class="po_id" name="po_id" <?php if($db != 'po') { ?> disabled  <?php }?>>
    <option>เลือกใบสั่งขาย</option>
    <?php
      $type = "SELECT po_id, po_code FROM $Po";
      $query_type = mysql_db_query($db_name, $type);
      while($ct = mysql_fetch_array($query_type)) {
        if($ct[1] == $po){
          echo "<option value=\"$ct[1]\" selected>$ct[1]</option>"; 
        }
          echo "<option value=\"$ct[1]\"> $ct[1]</option>";   
      }
      // mysql_close();
    ?>
    </select> 
<style> 
 .textbox { 
    outline:0; 
    height:40px; 
    width: 186px; 
  }
  .head {
    font-size: 40px;
    color:#FFF;
    font-family: '__ThaiSans Neue_5';
    font-weight: 700px;
    margin-bottom: 50px
    margin-top: 50px
  } 
</style> 


</div>
     </div>
     <div class="clip_frame grpelem" id="u5221"><!-- image -->
      <button type="submit" form="search" value="Submit"><img class="block" id="u5221_img" src="images/search_but.png" alt="" width="180" height="55"/></button>
     </div>
    </div>
    <div class="colelem" id="u3828"><!-- custom html -->
<!--     <iframe id="printf" name="printf" src="report_so.php" width="1200" height="800" style="margin-bottom: 30px;"></iframe> -->
  <center>
    <p class="head">
    </p>
  </center>
  <div style="height: 20px;"></div>
     <style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;border-color:#999;border:none;margin:0px auto;}

.tg td{font-family:Arial, sans-serif;font-size:14px;width:960px;padding:20px 20px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#999;color:#444;background-color:#F7FDFA;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:20px 20px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#999;color:#fff;background-color:#26ADE4;}
.tg .tg-vn4c{background-color:#D2E4FC}
</style>
<div class="tg-wrap"><table id="tg-0YX8L" class="tg">

<?php
if(isset($_GET['db']) && $_GET['db'] != 'เลือกหัวข้อ'){
  if($_GET['db'] == 'po'){
      $sql = "SELECT a.*, b.company_name name, c.qty qty FROM $Po a "; 
      $sql .= " left JOIN $Customers b ON a.customer_id=b.customer_id ";
      $sql .= " left JOIN $PoDetails c ON a.po_id=c.po_id ";
      if(isset($po)){
        $sql .= " WHERE a.po_code like '%$po%' ";
        if(isset($from) && isset($to) && $from != '' && $to != ''){
          $from = toMysql($from);
          $to = toMysql($to);
          $sql .= " AND ((a.created BETWEEN '$from' AND '$to') AND (a.duedate BETWEEN '$from' AND '$to'))";
        }
      }
      if(isset($from) && isset($to) && $from != '' && $to != ''){
        $from = toMysql($from);
        $to = toMysql($to);
        $sql .= " WHERE ((a.created BETWEEN '$from' AND '$to') AND (a.duedate BETWEEN '$from' AND '$to')) ";
        if(isset($po)){
          $sql .= "  AND a.po_code like '%$po%' ";
        }
      }
      // $sql .= " GROUP BY po_code";
      $query = mysql_db_query($db_name, $sql);

?>
  <tr>
    <th class="tg-031e">ลำดับ</th>
    <th class="tg-031e">เลขที่ใบสั่งขาย</th>
    <th class="tg-031e">เลขที่ใบ P/O</th>
    <th class="tg-031e">ชื่อลูกค้า</th>
    <th class="tg-031e">จำนวนที่สั่ง</th>
    <th class="tg-031e">กำหนดส่ง</th>
    <th class="tg-031e"></th>
    <!-- <th class="tg-031e"></th> -->
  </tr>
<?php
    $counter = 1;
    while($row = mysql_fetch_array($query)) {
      if($counter%2 != 0){ ?>
        <tr>
        <td class="tg-vn4c"><?php echo $counter;?></td>
        <td class="tg-vn4c"><?php echo $row['po_id'];?></td>
        <td class="tg-vn4c"><?php echo $row['po_code'];?></td>
        <td class="tg-vn4c"><?php echo $row['name'];?></td>
        <td class="tg-vn4c"><?php echo $row['qty'];?></td>
        <td class="tg-vn4c"><?php echo toDatepicker($row['duedate']);?></td>
        <td class="tg-vn4c" class='btn'><a href="edit_po.php?id=<?php echo $row['po_id'];?>"><img src="images/edit.png" alt="แก้" width="16" height="16"></a>&nbsp;&nbsp;<a target="_blank" href="print.php?type=po&id=<?php echo $row['po_id'];?>"><img src="images/print.png" alt="พิมพ์" width="17" height="16"></a></td>
        </tr>
    <?php
      }else{
    ?>
        <tr>
          <td class="tg-031e"><?php echo $counter;?></td>
          <td class="tg-031e"><?php echo $row['po_id'];?></td>
          <td class="tg-031e"><?php echo $row['po_code'];?></td>
          <td class="tg-031e"><?php echo $row['name'];?></td>
          <td class="tg-031e"><?php echo $row['qty'];?></td>
          <td class="tg-031e"><?php echo toDatepicker($row['duedate']);?></td>
          <td class="tg-031e" class='btn'><a href="edit_po.php?id=<?php echo $row['po_id'];?>"><img src="images/edit.png" alt="แก้" width="16" height="16"></a>&nbsp;&nbsp;<a target="_blank" href="print.php?type=po&id=<?php echo $row['po_id'];?>"><img src="images/print.png" alt="พิมพ์" width="17" height="16"></a></td>
        </tr>
  <?php }
        $counter++;
      }
    }

  else if($_GET['db'] == 'mo'){ 
    // print_r($_POST);
    $sql2 = "SELECT a.*, c.*, d.po_code, e.name FROM production a left JOIN production_details c ON a.production_id=c.production_id left JOIN po d ON a.po_id=d.po_id left JOIN products e ON c.product_id=e.product_id";

    // echo $sql2;
    // if(isset($po)){
    //   $sql .= " WHERE a.po_code like '%$po%' ";
    //   if(isset($from) && isset($to) && $from != '' && $to != ''){
    //     $from = toMysql($from);
    //     $to = toMysql($to);
    //     $sql .= " AND (a.created BETWEEN '$from' AND '$to')";
    //   }
    // }
    if(isset($from) && isset($to) && $from != '' && $to != ''){
      $from = toMysql($from);
      $to = toMysql($to);
      $sql2 .= " WHERE ((a.created BETWEEN '$from' AND '$to') AND (a.duedate BETWEEN '$from' AND '$to'))";
      // if(isset($pd)){
      //   $sql2 .= "  AND a.production_id like '%$po%' ";
      // }
    }

    if(isset($pd) && $pd != ''){
      $sql2 .= " WHERE c.product_id = '$pd'";
    }

    if(isset($customer_id) && $customer_id != ''){
      $sql2 .= " WHERE a.customer_id = '$customer_id'";
    }
    // // $sql .= " GROUP BY po_code";

    // echo $sql2;
      $query2 = mysql_db_query($db_name, $sql2);
  ?>
      <tr>
        <th class="tg-031e">ลำดับ</th>
        <th class="tg-031e">เลขที่ใบสั่งขาย</th>
        <th class="tg-031e">เลขที่ใบ P/O</th>
        <th class="tg-031e">สินค้า</th>
        <th class="tg-031e">จำนวน</th>
        <th class="tg-031e">กำหนดเสร็จ</th>
        <th class="tg-031e">วันที่สั่ง</th>
        <!-- <th class="tg-031e">วันที่เสร็จ</th> -->
        <!-- <th class="tg-031e"></th> -->
        <th class="tg-031e"></th>
        <!-- <th class="tg-031e"></th> -->
      </tr>
  <?php
    $counter = 1;
    while($row2 = mysql_fetch_array($query2)) { //print_r($row2);
      if($counter%2 != 0){ ?>
        <tr>
        <td class="tg-vn4c"><?php echo $counter;?></td>
        <td class="tg-vn4c"><?php echo $row2['po_id'];?></td>
        <td class="tg-vn4c"><?php echo $row2['po_code'];?></td>
        <td class="tg-vn4c"><?php echo $row2['name'];?></td>
        <td class="tg-vn4c"><?php echo $row2['qty'];?></td>
        <td class="tg-vn4c"><?php echo toDatepicker($row2['duedate']);?></td>
        <td class="tg-vn4c"><?php echo toDatepicker($row2['created']);?></td>
        <td class="tg-vn4c" class='btn'><a href="edit_mo.php?id=<?php echo $row2['po_id'];?>"><img src="images/edit.png" alt="แก้" width="16" height="16"></a>&nbsp;&nbsp;<a target="_blank" href="print.php?type=mo&id=<?php echo $row2['po_id'];?>"><img src="images/print.png" alt="พิมพ์" width="17" height="16"></a></td>
        </tr>
    <?php
      }else{
    ?>
        <tr>
          <td class="tg-031e"><?php echo $counter;?></td>
          <td class="tg-031e"><?php echo $row2['po_id'];?></td>
          <td class="tg-031e"><?php echo $row2['po_code'];?></td>
          <td class="tg-031e"><?php echo $row2['name'];?></td>
          <td class="tg-031e"><?php echo $row2['qty'];?></td>
          <td class="tg-031e"><?php echo toDatepicker($row2['duedate']);?></td>
          <td class="tg-031e"><?php echo toDatepicker($row2['created']);?></td>
          <td class="tg-031e" class='btn'><a href="edit_mo.php?id=<?php echo $row2['po_id'];?>"><img src="images/edit.png" alt="แก้" width="16" height="16"></a>&nbsp;&nbsp;<a target="_blank" href="print.php?type=mo&id=<?php echo $row2['po_id'];?>"><img src="images/print.png" alt="พิมพ์" width="17" height="16"></a></td>
        
        </tr>
  <?php }
        $counter++;
      }

    }
    else if($_GET['db'] == 'ro'){ 
      $sql3 = "SELECT a.*, b.name FROM $StockIn a left JOIN $Products b ON a.product_id=b.product_id ";

      if(isset($from) && isset($to) && $from != '' && $to != ''){
        $from = toMysql($from);
        $to = toMysql($to);
        $sql3 .= " WHERE (a.created BETWEEN '$from' AND '$to')";
      }

      if(isset($pd) && $pd != ''){
        $sql3 .= " WHERE b.product_id = '$pd'";
      }
      $query3 = mysql_db_query($db_name, $sql3);
  ?>
      <tr>
        <th class="tg-031e">ลำดับ</th>
        <th class="tg-031e">สินค้า</th>
        <th class="tg-031e">จำนวน</th>
        <th class="tg-031e">วันที่</th>
        <!-- <th class="tg-031e">วันที่เสร็จ</th> -->
        <!-- <th class="tg-031e"></th> -->
        <!-- <th class="tg-031e"></th> -->
        <th class="tg-031e"></th>
      </tr>
  <?php
    $counter = 1;
    while($row3 = mysql_fetch_array($query3)) { //print_r($row2);
      if($counter%2 != 0){ ?>
        <tr>
        <td class="tg-vn4c"><?php echo $counter;?></td>
        <td class="tg-vn4c"><?php echo $row3['name'];?></td>
        <td class="tg-vn4c"><?php echo $row3['qty'];?></td>
        <td class="tg-vn4c"><?php echo toDatepicker($row3['created']);?></td>
        <td class="tg-vn4c" class='btn'><a href="edit_ro.php?id=<?php echo $row3['ro_id'];?>"><img src="images/edit.png" alt="แก้" width="16" height="16"></a></td>
        </tr>
    <?php
      }else{
    ?>
        <tr>
          <td class="tg-031e"><?php echo $counter;?></td>
          <td class="tg-031e"><?php echo $row3['name'];?></td>
          <td class="tg-031e"><?php echo $row3['qty'];?></td>
          <td class="tg-031e"><?php echo toDatepicker($row3['created']);?></td>
          <td class="tg-031e" class='btn' ><a href="edit_ro.php?id=<?php echo $row3['ro_id'];?>"><img src="images/edit.png" alt="แก้" width="16" height="16"></a></td>
        </tr>
  <?php }
        $counter++;
      }
    }
    else if($_GET['db'] == 'so') {

      $sql4 = "SELECT a.*, c.*, d.po_code, e.name FROM $StockOut a left JOIN $StockOutDetails c ON a.stock_out_id=c.stock_out_id left JOIN po d ON a.po_id=d.po_id left JOIN products e ON c.product_id=e.product_id";

      if(isset($from) && isset($to) && $from != '' && $to != ''){
      $from = toMysql($from);
      $to = toMysql($to);
      $sql4 .= " WHERE (a.created BETWEEN '$from' AND '$to')";
      }

      if(isset($pd) && $pd != ''){
        $sql4 .= " WHERE c.product_id = '$pd'";
      }

      if(isset($customer_id) && $customer_id != ''){
        $sql4 .= " WHERE d.customer_id = '$customer_id'";
      }
        $query4 = mysql_db_query($db_name, $sql4);
      ?>
      <tr>
        <th class="tg-031e">ลำดับ</th>
        <th class="tg-031e">วันที่</th>
        <th class="tg-031e">สินค้า</th>
        <th class="tg-031e">จำนวน</th>
        <th class="tg-031e"></th>
      </tr>
      <?php
    $counter = 1;
    while($row4 = mysql_fetch_array($query4)) { //print_r($row4[0]);
      if($counter%2 != 0){ ?>
        <tr>
        <td class="tg-vn4c"><?php echo $counter;?></td>
        <td class="tg-vn4c"><?php echo toDatepicker($row4['created']);?></td>
        <td class="tg-vn4c"><?php echo $row4['name'];?></td>
        <td class="tg-vn4c"><?php echo $row4['qty'];?></td>
        <td class="tg-vn4c" class='btn'><a href="edit_stock.php?s_id=<?php echo $row4['po_id'];?>"><img src="images/edit.png" alt="แก้" width="16" height="16"></a></td>
        </tr>
    <?php
      }else{
    ?>
        <tr>
          <td class="tg-031e"><?php echo $counter;?></td>
          <td class="tg-031e"><?php echo toDatepicker($row4['created']);?></td>
          <td class="tg-031e"><?php echo $row4['name'];?></td>
          <td class="tg-031e"><?php echo $row4['qty'];?></td>
          <td class="tg-031e" class='btn'><a href="edit_stock.php?s_id=<?php echo $row4['po_id'];?>"><img src="images/edit.png" alt="แก้" width="16" height="16"></a></td>
        </tr>
  <?php }
        $counter++;
      }
    }
  }
 ?>
 
</table></div>
<script type="text/javascript" charset="utf-8">var TgTableSort=window.TgTableSort||function(n,t){"use strict";function r(n,t){for(var e=[],o=n.childNodes,i=0;i<o.length;++i){var u=o[i];if("."==t.substring(0,1)){var a=t.substring(1);f(u,a)&&e.push(u)}else u.nodeName.toLowerCase()==t&&e.push(u);var c=r(u,t);e=e.concat(c)}return e}function e(n,t){var e=[],o=r(n,"tr");return o.forEach(function(n){var o=r(n,"td");t>=0&&t<o.length&&e.push(o[t])}),e}function o(n){return n.textContent||n.innerText||""}function i(n){return n.innerHTML||""}function u(n,t){var r=e(n,t);return r.map(o)}function a(n,t){var r=e(n,t);return r.map(i)}function c(n){var t=n.className||"";return t.match(/\S+/g)||[]}function f(n,t){return-1!=c(n).indexOf(t)}function s(n,t){f(n,t)||(n.className+=" "+t)}function d(n,t){if(f(n,t)){var r=c(n),e=r.indexOf(t);r.splice(e,1),n.className=r.join(" ")}}function v(n){d(n,L),d(n,E)}function l(n,t,e){r(n,"."+E).map(v),r(n,"."+L).map(v),e==T?s(t,E):s(t,L)}function g(n){return function(t,r){var e=n*t.str.localeCompare(r.str);return 0==e&&(e=t.index-r.index),e}}function h(n){return function(t,r){var e=+t.str,o=+r.str;return e==o?t.index-r.index:n*(e-o)}}function m(n,t,r){var e=u(n,t),o=e.map(function(n,t){return{str:n,index:t}}),i=e&&-1==e.map(isNaN).indexOf(!0),a=i?h(r):g(r);return o.sort(a),o.map(function(n){return n.index})}function p(n,t,r,o){for(var i=f(o,E)?N:T,u=m(n,r,i),c=0;t>c;++c){var s=e(n,c),d=a(n,c);s.forEach(function(n,t){n.innerHTML=d[u[t]]})}l(n,o,i)}function x(n,t){var r=t.length;t.forEach(function(t,e){t.addEventListener("click",function(){p(n,r,e,t)}),s(t,"tg-sort-header")})}var T=1,N=-1,E="tg-sort-asc",L="tg-sort-desc";return function(t){var e=n.getElementById(t),o=r(e,"tr"),i=o.length>0?r(o[0],"td"):[];0==i.length&&(i=r(o[0],"th"));for(var u=1;u<o.length;++u){var a=r(o[u],"td");if(a.length!=i.length)return}x(e,i)}}(document);document.addEventListener("DOMContentLoaded",function(n){TgTableSort("tg-0YX8L")});</script>

</div>
    <div class="clearfix colelem" id="pu3826"><!-- group -->
     <a class="nonblock nontext clip_frame grpelem" id="u3826" href="home.php"><!-- image --><img class="block" id="u3826_img" src="images/back_but.png" alt="" width="180" height="55"/></a>
     <div class="clip_frame grpelem" id="u5231"><!-- image -->
      <img class="block" id="u5231_img" src="images/printhistory_but.png" alt="" width="180" height="55" onclick="printDiv()"/>
     </div>
    </div>
    <div class="verticalspacer"></div>
    <div class="clearfix colelem" id="u258-7"><!-- content -->
     <p id="u258-2">48 ซ. อ่อนนุช 66 แยก 19 แขวงประเวศ เขตประเวศ กรุงเทพฯ 10250 โทร. 02-1385539-41 โทรสาร. 02-1385542</p>
     <p id="u258-4">48 Soi Onnuch 66 Yak19, Pravet ,Bangkok 10250 Thailand Tel. 02-1385539-41 Fax. 02-1385542</p>
     <p>&nbsp;</p>
    </div>
   </div>
  </div>
  </form>
  <!-- JS includes -->
  <script type="text/javascript">
   if (document.location.protocol != 'https:') document.write('\x3Cscript src="http://musecdn2.businesscatalyst.com/scripts/4.0/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
</script>
  <script type="text/javascript">
   window.jQuery || document.write('\x3Cscript src="scripts/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
</script>
  <script src="scripts/museutils.js?531812214" type="text/javascript"></script>
  <script src="scripts/whatinput.js?84559013" type="text/javascript"></script>
  <script src="scripts/jquery.musepolyfill.bgsize.js?120190942" type="text/javascript"></script>
  <script src="scripts/jquery.watch.js?3866665977" type="text/javascript"></script>
  <!-- Other scripts -->
  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js" integrity="sha256-xNjb53/rY+WmG+4L6tTl9m6PpqknWZvRt0rO1SRnJzw=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="scripts/history.js"></script>
  <script type="text/javascript">
   $(document).ready(function() { try {
(function(){var a={},b=function(a){if(a.match(/^rgb/))return a=a.replace(/\s+/g,"").match(/([\d\,]+)/gi)[0].split(","),(parseInt(a[0])<<16)+(parseInt(a[1])<<8)+parseInt(a[2]);if(a.match(/^\#/))return parseInt(a.substr(1),16);return 0};(function(){$('link[type="text/css"]').each(function(){var b=($(this).attr("href")||"").match(/\/?css\/([\w\-]+\.css)\?(\d+)/);b&&b[1]&&b[2]&&(a[b[1]]=b[2])})})();(function(){$("body").append('<div class="version" style="display:none; width:1px; height:1px;"></div>');
for(var c=$(".version"),d=0;d<Muse.assets.required.length;){var f=Muse.assets.required[d],g=f.match(/([\w\-\.]+)\.(\w+)$/),k=g&&g[1]?g[1]:null,g=g&&g[2]?g[2]:null;switch(g.toLowerCase()){case "css":k=k.replace(/\W/gi,"_").replace(/^([^a-z])/gi,"_$1");c.addClass(k);var g=b(c.css("color")),h=b(c.css("background-color"));g!=0||h!=0?(Muse.assets.required.splice(d,1),"undefined"!=typeof a[f]&&(g!=a[f]>>>24||h!=(a[f]&16777215))&&Muse.assets.outOfDate.push(f)):d++;c.removeClass(k);break;case "js":k.match(/^jquery-[\d\.]+/gi)&&
typeof $!="undefined"?Muse.assets.required.splice(d,1):d++;break;default:throw Error("Unsupported file type: "+g);}}c.remove();if(Muse.assets.outOfDate.length||Muse.assets.required.length)c="Some files on the server may be missing or incorrect. Clear browser cache and try again. If the problem persists please contact website author.",(d=location&&location.search&&location.search.match&&location.search.match(/muse_debug/gi))&&Muse.assets.outOfDate.length&&(c+="\nOut of date: "+Muse.assets.outOfDate.join(",")),d&&Muse.assets.required.length&&(c+="\nMissing: "+Muse.assets.required.join(",")),alert(c)})()})();
/* body */
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
} catch(e) { if (e && 'function' == typeof e.notify) e.notify(); else Muse.Assert.fail('Error calling selector function:' + e); }});
</script>
   </body>
</html>