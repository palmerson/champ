  <?php 

  // include('session.php');
  include('inc/conf.php');

  $id = $_GET['id'];

  $sql = "SELECT a.*, b.* FROM $Production a LEFT JOIN $Customers b ON a.customer_id=b.customer_id  WHERE production_id = '$id'";

  $query = mysql_db_query($db_name, $sql);
  $row = mysql_fetch_row($query);

  // checkPost($row);
  $num_rows_sql = "SELECT qty FROM $ProductionDetails WHERE production_id = '$id'";
  $num_rows_query = mysql_db_query($db_name, $num_rows_sql);
  $num_rows_query2 = mysql_db_query($db_name, $num_rows_sql);
  $num_rows = mysql_num_rows($num_rows_query);


  $productSql = "SELECT product_id FROM $ProductionDetails WHERE production_id = '$id'";
  $productQuery = mysql_db_query($db_name, $productSql);
  $productQuery2 = mysql_db_query($db_name, $productSql);

  ?>


<!DOCTYPE html>
<html class="nojs html" lang="en-US">
 <head>

  <script type="text/javascript">
   if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["jquery-1.8.3.min.js", "museutils.js", "jquery.watch.js", "print_mo.css"], "outOfDate":[]};
</script>
  
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2015.1.1.343"/>
  <title>print_mo</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?131700929"/>
  <link rel="stylesheet" type="text/css" href="css/print_mo.css?343598093" id="pagesheet"/>
  <!-- Other scripts -->
  <script type="text/javascript">
   document.documentElement.className = document.documentElement.className.replace(/\bnojs\b/g, 'js');
</script>
    <!--/*

*/
-->
<style>
  .num, .num_, .pdt, .pdt_, .qty, .qty_, .unit, .unit_ {
    font-size: 8px;
  }
  .num, .num_, .pdt, .pdt_, .qty, .qty_{
    text-align: center;
  }
  .unit, .unit_ {
    padding-left: 10px;
  }
  .num, .pdt, .qty, .unit{
    padding-top: 30px;
  }
</style>
 </head>
 <body>

  <div class="clearfix" id="page"><!-- column -->
   <div class="clearfix colelem" id="u4140"><!-- column -->
    <div class="clearfix colelem" id="pu4151"><!-- group -->
     <div class="clip_frame grpelem" id="u4151"><!-- svg -->
      <img class="svg" id="u4152" src="images/pasted-svg-202959x40.svg" width="120" height="40" alt="" data-mu-svgfallback="images/pasted%20svg%20202959x40_poster_.png"/>
     </div>
     <div class="clearfix grpelem" id="u4105-6"><!-- content -->
      <p>บริษัท แชมป์ แมคคานิค แฟคตอรี่ จำกัด</p>
      <p>CHAMP MECHANIC FACTORY CO.,LTD.</p>
     </div>
     <div class="clip_frame grpelem" id="u4525"><!-- svg -->
      <img class="svg" id="u4526" src="images/pasted-svg-202959x40.svg" width="120" height="40" alt="" data-mu-svgfallback="images/pasted%20svg%20202959x40_poster_.png"/>
     </div>
     <div class="clearfix grpelem" id="u4564-6"><!-- content -->
      <p>บริษัท แชมป์ แมคคานิค แฟคตอรี่ จำกัด</p>
      <p>CHAMP MECHANIC FACTORY CO.,LTD.</p>
     </div>
    </div>
    <div class="clearfix colelem" id="pu4116-4"><!-- group -->
     <div class="clearfix grpelem" id="u4116-4"><!-- content -->
      <p>ใบสั่งผลิต</p>
     </div>
     <div class="clearfix grpelem" id="u4110-10"><!-- content -->
      <p>48 ซ. อ่อนนุช 66 แยก 19 แขวงประเวศ เขตประเวศ กรุงเทพฯ 10250</p>
      <p>โทร. 02-1385539-41 โทรสาร. 02-1385542</p>
      <p>48 Soi Onnuch 66 Yak19, Pravet ,Bangkok 10250 Thailand</p>
      <p>Tel. 02-1385539-41 Fax. 02-1385542</p>
     </div>
     <div class="clearfix grpelem" id="u4534-4"><!-- content -->
      <p>ใบสั่งผลิต</p>
     </div>
     <div class="clearfix grpelem" id="u4567-10"><!-- content -->
      <p>48 ซ. อ่อนนุช 66 แยก 19 แขวงประเวศ เขตประเวศ กรุงเทพฯ 10250</p>
      <p>โทร. 02-1385539-41 โทรสาร. 02-1385542</p>
      <p>48 Soi Onnuch 66 Yak19, Pravet ,Bangkok 10250 Thailand</p>
      <p>Tel. 02-1385539-41 Fax. 02-1385542</p>
     </div>
    </div>
    <div class="clearfix colelem" id="pu4106-4"><!-- group -->
     <div class="clearfix grpelem" id="u4106-4"><!-- content -->
      <p>นามผู้ซื้อ / Customer Name</p>
     </div>
     <div class="clearfix grpelem" id="u4123-4"><!-- content -->
      <p>เลขที่ใบสั่งผลิต</p>
     </div>
     <div class="clearfix grpelem" id="u4130-4"><!-- content -->
      <p><? echo $row[0]?></p>
     </div>
     <div class="clearfix grpelem" id="u4540-4"><!-- content -->
      <p>นามผู้ซื้อ / Customer Name</p>
     </div>
     <div class="clearfix grpelem" id="u4573-4"><!-- content -->
      <p>เลขที่ใบสั่งผลิต</p>
     </div>
     <div class="clearfix grpelem" id="u4591-4"><!-- content -->
      <p><? echo $row[0]?></p>
     </div>
    </div>
    <div class="clearfix colelem" id="pu4112-8"><!-- group -->
     <div class="clearfix grpelem" id="u4112-8"><!-- content -->
      <p><?php echo $row[7]?></p>
      <p><?php echo $row[8]?></p>
      <!-- <p>กทม. 10210</p> -->
     </div>
     <div class="clearfix grpelem" id="pu4142-4"><!-- column -->
      <div class="clearfix colelem" id="u4142-4"><!-- content -->
       <p>เลขที่ใบสั่งขาย</p>
      </div>
      <div class="clearfix colelem" id="u4154-4"><!-- content -->
       <p>วันที่สั่งผลิต</p>
      </div>
     </div>
     <div class="clearfix grpelem" id="pu4136-4"><!-- column -->
      <div class="clearfix colelem" id="u4136-4"><!-- content -->
       <p><?php echo $row[0]?></p>
      </div>
      <div class="clearfix colelem" id="u4147-4"><!-- content -->
       <p><?php echo toDatepicker($row[3])?></p>
      </div>
     </div>
     <div class="clearfix grpelem" id="u4537-8"><!-- content -->
      <p><?php echo $row[7]?></p>
      <p><?php echo $row[8]?></p>
     </div>
     <div class="clearfix grpelem" id="pu4570-4"><!-- column -->
      <div class="clearfix colelem" id="u4570-4"><!-- content -->
       <p>เลขที่ใบสั่งขาย</p>
      </div>
      <div class="clearfix colelem" id="u4576-4"><!-- content -->
       <p>วันที่สั่งผลิต</p>
      </div>
     </div>
     <div class="clearfix grpelem" id="pu4588-4"><!-- column -->
      <div class="clearfix colelem" id="u4588-4"><!-- content -->
       <p><?php echo $row[0]?></p>
      </div>
      <div class="clearfix colelem" id="u4594-4"><!-- content -->
       <p><?php echo toDatepicker($row[3])?></p>
      </div>
     </div>
    </div>
    <div class="clearfix colelem" id="pu4133-4"><!-- group -->
     <div class="clearfix grpelem" id="u4133-4"><!-- content -->
      <p>กำหนดเสร็จ</p>
     </div>
     <div class="clearfix grpelem" id="u4228-4"><!-- content -->
      <p><?php echo toDatepicker($row[4])?></p>
     </div>
     <div class="clearfix grpelem" id="u4579-4"><!-- content -->
      <p>กำหนดเสร็จ</p>
     </div>
     <div class="clearfix grpelem" id="u4597-4"><!-- content -->
      <p><?php echo toDatepicker($row[4])?></p>
     </div>
    </div>
    <div class="clearfix colelem" id="ppu4543-4"><!-- group -->
     <div class="clearfix grpelem" id="pu4543-4"><!-- group -->
      <div class="clearfix grpelem" id="u4543-4"><!-- content -->
       <p>ลำดับ</p>
      </div>
      <div class="clearfix grpelem" id="u4552-4"><!-- content -->
       <p>รหัสสินค้า</p>
      </div>
      <div class="clearfix grpelem" id="u4561-4"><!-- content -->
       <p>ชื่อสินค้า</p>
      </div>
      <div class="clearfix grpelem" id="u4585-4"><!-- content -->
       <p>จำนวน</p>
      </div>
      <div class="grpelem" id="u4555"><!-- simple frame --></div>
      <div class="grpelem" id="u4549">
      <?php 
        $x=1;
        while($x <= $num_rows) {
          if($x == 1){
            echo "<p class=\"num\">".$x."</p>";
          }
          else{
            echo "<p class=\"num_\">".$x."</p>";
          }
        $x++;
      }
     ?>
      </div>
      <div class="grpelem" id="u4546">
      <?php
        $k = 1;
        while($col_pdt = mysql_fetch_array($productQuery)) {
          if($k == 1){
            echo "<p class=\"pdt\">".$col_pdt['product_id']."</p>";
          }
          else{
            echo "<p class=\"pdt_\">".$col_pdt['product_id']."</p>";
          }
          $k++;
        }
     ?>
      </div>
      <div class="grpelem" id="u4558">
      <?php
        $sql = "SELECT b.name FROM $ProductionDetails a "; 
        $sql .= " LEFT JOIN $Products b ON a.product_id=b.product_id ";
        $sql .= " WHERE a.production_id = '$row[1]' ORDER BY a.product_id ASC";
        $query = mysql_db_query($db_name, $sql);

        $p = 1;
        while($lists = mysql_fetch_array($query)) {
          if($p == 1){
            echo "<p class=\"unit\">".$lists['name']."</p>";
          }
          else{
            echo "<p class=\"unit_\">".$lists['name']."</p>";
          }
          $p++;
        }
     ?>
      </div>
      <div class="grpelem" id="u4582">
        <?php
        $k = 1;
        while($col_qty = mysql_fetch_array($num_rows_query2)) {
          if($k == 1){
            echo "<p class=\"qty\">".$col_qty['qty']."</p>";
          }
          else{
            echo "<p class=\"qty_\">".$col_qty['qty']."</p>";
          }
          $k++;
        }
     ?>
      </div>
     </div>
     <div class="clearfix grpelem" id="u4122-4"><!-- content -->
      <p>ลำดับ</p>
     </div>
     <div class="clearfix grpelem" id="u4234-4"><!-- content -->
      <p>รหัสสินค้า</p>
     </div>
     <div class="clearfix grpelem" id="u4237-4"><!-- content -->
      <p>ชื่อสินค้า</p>
     </div>
     <div class="clearfix grpelem" id="u4243-4"><!-- content -->
      <p>จำนวน</p>
     </div>
     <div class="grpelem" id="u4137"><!-- simple frame --></div>
     <div class="grpelem" id="u4249">
      <?php 
        $x=1;
        while($x <= $num_rows) {
          if($x == 1){
            echo "<p class=\"num\">".$x."</p>";
          }
          else{
            echo "<p class=\"num_\">".$x."</p>";
          }
        $x++;
      }
     ?>
     </div>
     <div class="grpelem" id="u4255">
     <!-- simple frame -->
      <?php
        $k = 1;
        while($col_pdt = mysql_fetch_array($productQuery2)) {
          if($k == 1){
            echo "<p class=\"pdt\">".$col_pdt['product_id']."</p>";
          }
          else{
            echo "<p class=\"pdt_\">".$col_pdt['product_id']."</p>";
          }
          $k++;
        }
     ?>
     </div>
     <div class="grpelem" id="u4258">
      <?php
        $sql = "SELECT b.name FROM $ProductionDetails a "; 
        $sql .= " LEFT JOIN $Products b ON a.product_id=b.product_id ";
        $sql .= " WHERE production_id = '$id' ORDER BY production_id ASC";
        $query = mysql_db_query($db_name, $sql);
        $p = 1;
        while($lists = mysql_fetch_array($query)) {
          if($p == 1){
            echo "<p class=\"unit\">".$lists['name'].")</p>";
          }
          else{
            echo "<p class=\"unit_\">".$lists['name'].")</p>";
          }
          $p++;
        }
     ?>
     </div>
     <div class="grpelem" id="u4261">
      <?php
        $k = 1;
        while($col_qty = mysql_fetch_array($num_rows_query)) {
          if($k == 1){
            echo "<p class=\"qty\">".$col_qty['qty']."</p>";
          }
          else{
            echo "<p class=\"qty_\">".$col_qty['qty']."</p>";
          }
          $k++;
        }
     ?>
     <!-- simple frame --></div>
    </div>
    <div class="clearfix colelem" id="pu4128-6"><!-- group -->
     <div class="clearfix grpelem" id="u4128-6"><!-- content -->
      <p id="u4128-2">................................................................................</p>
      <p id="u4128-4">( &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; )</p>
      <p id="u4128-4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ผู้อนุมัติจ่ายงาน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
     </div>
     <div class="clearfix grpelem" id="u4267-6"><!-- content -->
      <p id="u4267-2">................................................................................</p>
      <p id="u4267-4">( &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; )</p>
      <p id="u4128-4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ผู้รับใบสั่ง&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
     </div>
     <div class="clearfix grpelem" id="u5498-6"><!-- content -->
      <p id="u5498-2">................................................................................</p>
      <p id="u5498-4">( &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; )</p>
      <p id="u4128-4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ผู้อนุมัติจ่ายงาน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
     </div>
     <div class="clearfix grpelem" id="u5495-6"><!-- content -->
      <p id="u5495-2">................................................................................</p>
      <p id="u5495-4">( &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; )</p>
            <p id="u4128-4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ผู้รับใบสั่ง&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
     </div>
    </div>
   </div>
   <div class="verticalspacer"></div>
  </div>
  <!-- JS includes -->
  <script type="text/javascript">
   if (document.location.protocol != 'https:') document.write('\x3Cscript src="http://musecdn2.businesscatalyst.com/scripts/4.0/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
</script>
  <script type="text/javascript">
   window.jQuery || document.write('\x3Cscript src="scripts/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
</script>
  <script src="scripts/museutils.js?531812214" type="text/javascript"></script>
  <script src="scripts/whatinput.js?84559013" type="text/javascript"></script>
  <script src="scripts/jquery.watch.js?3866665977" type="text/javascript"></script>
  <!-- Other scripts -->
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
