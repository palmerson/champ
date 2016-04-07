  <?php 

  include('session.php');
  include('inc/conf.php');

  $id = $_GET['id'];

  $sql = "SELECT a.*, b.* FROM $Po a LEFT JOIN $Customers b ON a.customer_id=b.customer_id  WHERE po_id = '$id'";

  $query = mysql_db_query($db_name, $sql);
  $row = mysql_fetch_row($query);

  // checkPost($row);


  $sql = "SELECT a.*, b.name as name FROM $PoDetails a "; 
  $num_rows_sql = "SELECT qty FROM $PoDetails WHERE po_id = '$row[0]'";
  $num_rows_query = mysql_db_query($db_name, $num_rows_sql);
  $num_rows = mysql_num_rows($num_rows_query);

  $amountSql = "SELECT amount FROM $PoDetails WHERE po_id = '$row[0]'";
  $rowAmount = mysql_db_query($db_name, $amountSql);

  ?>
<!DOCTYPE html>
<html class="nojs html" lang="en-US">
 <head>

  <script type="text/javascript">
   if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["jquery-1.8.3.min.js", "museutils.js", "jquery.watch.js", "print_po.css"], "outOfDate":[]};
</script>
  
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2015.1.1.343"/>
  <title>print_po</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?131700929"/>
  <link rel="stylesheet" type="text/css" href="css/print_po.css?125436210" id="pagesheet"/>
  <!-- Other scripts -->
  <script type="text/javascript">
   document.documentElement.className = document.documentElement.className.replace(/\bnojs\b/g, 'js');
</script>
    <!--/*

*/
-->

     <style>
      .cal{
        text-align: right;
        padding-top: 15px;
        padding-right: 50px;
      }
      .cal2{
        text-align: right;
        padding-top: 15px;
        padding-right: 50px;
        font-size: 20px;
      }
      .num{
        text-align: left;
        padding-top: 30px;
        padding-left: 32px;
        /*padding-right: 50px;*/
      }
      .qty{
        text-align: left;
        padding-top: 30px;
        padding-left: 35px;
        /*padding-right: 50px;*/
      }
      .unit{
        text-align: left;
        padding-top: 30px;
        padding-left: 20px;
        /*padding-right: 50px;*/
      }
      .amount{
        text-align: right;
        padding-top: 30px;
        padding-right: 50px;
      }
      .num_{
        text-align: left;
        padding-top: 10px;
        padding-left: 32px;
        /*padding-right: 50px;*/
      }
      .qty_{
        text-align: left;
        padding-top: 10px;
        padding-left: 35px;
        /*padding-right: 50px;*/
      }
      .unit_{
        text-align: left;
        padding-top: 10px;
        padding-left: 20px;
        /*padding-right: 50px;*/
      }
      .amount_{
        text-align: right;
        padding-top: 10px;
        padding-right: 50px;
      }  
     </style>
 </head>
 <body>

  <div class="clearfix" id="page"><!-- column -->
   <div class="clearfix colelem" id="u2526"><!-- column -->
    <div class="clearfix colelem" id="pu1826"><!-- group -->
     <div class="clip_frame grpelem" id="u1826"><!-- svg -->
      <img class="svg" id="u1824" src="images/pasted-svg-202959x40.svg" width="262" height="87" alt="" data-mu-svgfallback="images/pasted%20svg%20202959x40_poster_.png"/>
     </div>
     <div class="clearfix grpelem" id="u1843-6"><!-- content -->
      <p>บริษัท แชมป์ แมคคานิค แฟคตอรี่ จำกัด</p>
      <p>CHAMP MECHANIC FACTORY CO.,LTD.</p>
     </div>
    </div>
    <div class="clearfix colelem" id="pu1850-6"><!-- group -->
     <div class="clearfix grpelem" id="u1850-6"><!-- content -->
      <p>ใบเสร็จรับเงิน</p>
      <p>RECEIPT</p>
     </div>
     <div class="clearfix grpelem" id="u1846-10"><!-- content -->
      <p>48 ซ. อ่อนนุช 66 แยก 19 แขวงประเวศ เขตประเวศ กรุงเทพฯ 10250</p>
      <p>โทร. 02-1385539-41 โทรสาร. 02-1385542</p>
      <p>48 Soi Onnuch 66 Yak19, Pravet ,Bangkok 10250 Thailand</p>
      <p>Tel. 02-1385539-41 Fax. 02-1385542</p>
     </div>
    </div>
    <div class="clearfix colelem" id="pu1853-4"><!-- group -->
     <div class="clearfix grpelem" id="u1853-4"><!-- content -->
      <p>เลขที่ใบ</p>
     </div>
     <div class="clearfix grpelem" id="u1859-4"><!-- content -->
      <p><? echo $row[0]?></p>
     </div>
    </div>
    <div class="clearfix colelem" id="pu1865-4"><!-- group -->
     <div class="clearfix grpelem" id="u1865-4"><!-- content -->
      <p>เลขที่ใบสั่งขาย</p>
     </div>
     <div class="clearfix grpelem" id="u1862-4"><!-- content -->
      <p><? echo $row[0]?></p>
     </div>
    </div>
    <div class="clearfix colelem" id="pu1898-4"><!-- group -->
     <div class="clearfix grpelem" id="u1898-4"><!-- content -->
      <p>เลขที่ใบประจำตัวผู้เสียภาษี</p>
     </div>
     <div class="clearfix grpelem" id="u1871-4"><!-- content -->
      <p>วันที่ / Date</p>
     </div>
     <div class="clearfix grpelem" id="u1901-4"><!-- content -->
      <p>0105547156356</p>
     </div>
     <div class="clearfix grpelem" id="u1868-4"><!-- content -->
      <p><? echo toDatepicker($row[6])?></p>
     </div>
    </div>
    <div class="clearfix colelem" id="pu1874-4"><!-- group -->
     <div class="clearfix grpelem" id="u1874-4"><!-- content -->
      <p>นามผู้ซื้อ / Customer Name</p>
     </div>
     <div class="clearfix grpelem" id="u1916-4"><!-- content -->
      <p>กำหนดชำระเงิน / Term</p>
     </div>
     <div class="clearfix grpelem" id="u1937-4"><!-- content -->
      <p>วัน / Day</p>
     </div>
     <div class="clearfix grpelem" id="u1919-4"><!-- content -->
      <p><? echo dateDifference($row[6],$row[7])?></p>
     </div>
    </div>
    <div class="clearfix colelem" id="pu1880-8"><!-- group -->
     <div class="clearfix grpelem" id="u1880-8"><!-- content -->
      <p><? echo $row[10]?></p>
      <p><? echo $row[11]?></p>
      <!-- <p>กทม. 10210</p> -->
     </div>
     <div class="clearfix grpelem" id="pu1922-4"><!-- column -->
      <div class="clearfix colelem" id="u1922-4"><!-- content -->
       <p>วันชำระเงิน / Due Date</p>
      </div>
      <div class="clearfix colelem" id="u1928-4"><!-- content -->
       <p>ใบสั่งซื้อเลขที่ / Purchase Order No.</p>
      </div>
     </div>
     <div class="clearfix grpelem" id="pu1925-4"><!-- column -->
      <div class="clearfix colelem" id="u1925-4"><!-- content -->
       <p><? echo toDatepicker($row[7])?></p>
      </div>
      <div class="clearfix colelem" id="u1931-4"><!-- content -->
      <p><? echo $row[1]?></p>
      </div>
     </div>
    </div>
    <div class="clearfix colelem" id="pu2815"><!-- group -->
     <div class="clearfix grpelem" id="u2815"><!-- group -->
      <div class="clearfix grpelem" id="u1949-6"><!-- content -->
       <p>ลำดับ</p>
       <p>item</p>
      </div>
     </div>
     <div class="clearfix grpelem" id="u5513"><!-- group -->
      <div class="clearfix grpelem" id="u1964-6"><!-- content -->
       <p>จำนวน</p>
       <p>Quanity</p>
      </div>
     </div>
     <div class="clearfix grpelem" id="u5516"><!-- group -->
      <div class="clearfix grpelem" id="u1970-6"><!-- content -->
       <p>รายการ</p>
       <p>Unit Price</p>
      </div>
     </div>
     <div class="clearfix grpelem" id="u2845"><!-- group -->
      <div class="clearfix grpelem" id="u1976-6"><!-- content -->
       <p>จำนวนเงิน</p>
       <p>Total Amount</p>
      </div>
     </div>
    </div>
    <div class="clearfix colelem" id="pu5546"><!-- group -->
     <div class="grpelem" id="u5546"> 
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
     <div class="grpelem" id="u5543">
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
     </div>
     <div class="grpelem" id="u5540">
      <?php
        $sql = "SELECT a.unit_price, b.name, b.unit FROM $PoDetails a "; 
        $sql .= " LEFT JOIN $Products b ON a.product_id=b.product_id ";
        $sql .= " WHERE po_code = '$row[1]' ORDER BY po_code ASC";
        $query = mysql_db_query($db_name, $sql);
        $p = 1;
        while($lists = mysql_fetch_array($query)) {
          if($p == 1){
            echo "<p class=\"unit\">".$lists['name']."  (".$lists['unit_price']." บาท/".$lists['unit'].")</p>";
          }
          else{
            echo "<p class=\"unit_\">".$lists['name']."  (".$lists['unit_price']." บาท/".$lists['unit'].")</p>";
          }
          $p++;
        }
     ?>
     </div>
     <div class="grpelem" id="u5537">
      <?php
        $l = 1;
        while($col_amount = mysql_fetch_array($rowAmount)) {
          if($l == 1){
            echo "<p class=\"amount\">".number_format($col_amount['amount'],2,'.',',')."</p>";
          }
          else{
            echo "<p class=\"amount_\">".number_format($col_amount['amount'],2,'.',',')."</p>";
          }
          $l++;
        }
     ?>
     </div>
    </div>
    <div class="clearfix colelem" id="pu2242-6"><!-- group -->
     <div class="clearfix grpelem" id="u2242-6"><!-- content -->
      <p>รวมราคาทั้งสิ้น</p>
      <p>Net Amount</p>
     </div>
     <div class="grpelem" id="u2824"><p class="cal"></div>
     <div class="grpelem" id="u5528"><p class="cal"><? echo number_format($row[3],2,'.',',');?></p><!-- net --></div>
     <div class="grpelem" id="u5552"><p class="cal2"><? echo convert($row[3]);?></p><!-- Thai Number --></div>
    </div>
    <div class="clearfix colelem" id="ppu2293-4"><!-- group -->
     <div class="clearfix grpelem" id="pu2293-4"><!-- column -->
      <div class="clearfix colelem" id="u2293-4"><!-- content -->
       <p>รับชำระเป็น / Payment made by</p>
      </div>
      <div class="clearfix colelem" id="pu2791"><!-- group -->
       <div class="grpelem" id="u2791"><!-- simple frame --></div>
       <div class="clearfix grpelem" id="u2284-4"><!-- content -->
        <p>เงินสด / Cash</p>
       </div>
      </div>
     </div>
     <div class="clearfix grpelem" id="ppu2266-6"><!-- column -->
      <div class="clearfix colelem" id="pu2266-6"><!-- group -->
       <div class="clearfix grpelem" id="u2266-6"><!-- content -->
        <p>จำนวนภาษีมูลค่าเพิ่ม</p>
        <p>Vat / Amount 7%</p>
       </div>
       <div class="grpelem" id="u2827"><!-- simple frame --></div>
       <div class="grpelem" id="u5531"><p class="cal"><? echo number_format($row[4],2,'.',',')?></p><!-- vat --></div>
      </div>
      <div class="clearfix colelem" id="pu2275-6"><!-- group -->
       <div class="clearfix grpelem" id="u2275-6"><!-- content -->
        <p>จำนวนเงินรวมทั้งสิ้น</p>
        <p>&nbsp;Total Amount</p>
       </div>
       <div class="grpelem" id="u2830"></div>
       <div class="grpelem" id="u5534"><p class="cal"><? echo number_format($row[5],2,'.',',');?></p><!-- total --></div>
      </div>
     </div>
    </div>
    <div class="clearfix colelem" id="pu2287"><!-- group -->
     <div class="grpelem" id="u2287"><!-- simple frame --></div>
     <div class="clearfix grpelem" id="u2288-4"><!-- content -->
      <p>เช็คธนาคาร ............................................. เลขที่ ......................................................</p>
     </div>
    </div>
    <div class="clearfix colelem" id="pu2299-4"><!-- group -->
     <div class="clearfix grpelem" id="u2299-4"><!-- content -->
      <p>Cheque</p>
     </div>
     <div class="clearfix grpelem" id="u2305-4"><!-- content -->
      <p>No.</p>
     </div>
    </div>
    <div class="clearfix colelem" id="u2308-4"><!-- content -->
     <p>ลงวันที่ ............../..................../....................</p>
    </div>
    <div class="clearfix colelem" id="ppu2317-4"><!-- group -->
     <div class="clearfix grpelem" id="pu2317-4"><!-- column -->
      <div class="clearfix colelem" id="u2317-4"><!-- content -->
       <p>ผู้รับเงิน / Collector .................................................................................................</p>
      </div>
      <div class="clearfix colelem" id="u2323-4"><!-- content -->
       <p>เมื่อได้รับสินค้าเป็นที่เรียบร้อยแล้วโปรดลงนาม</p>
      </div>
     </div>
     <div class="clearfix grpelem" id="u2335-8"><!-- content -->
      <p id="u2335-2">...............................................................................................</p>
      <p id="u2335-4">ผู้ส่งของ</p>
      <p id="u2335-6">Delivery By</p>
     </div>
    </div>
    <div class="clearfix colelem" id="pu2329-6"><!-- group -->
     <div class="clearfix grpelem" id="u2329-6"><!-- content -->
      <p>ผู้รับของ/Received by ....................................................................</p>
      <p>วันที่/Date ..................../........................../........................................</p>
     </div>
     <div class="clearfix grpelem" id="u2338-8"><!-- content -->
      <p id="u2338-2">...............................................................................................</p>
      <p id="u2338-4">ผู้อนุมัติ</p>
      <p id="u2338-6">Approved By</p>
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
