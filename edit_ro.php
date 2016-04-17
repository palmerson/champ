<?php 
  include('session.php');
?>
<!DOCTYPE html>
<html class="nojs html" lang="en-US">
 <head>

  <script type="text/javascript">
   if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["jquery-1.8.3.min.js", "museutils.js", "jquery.musepolyfill.bgsize.js", "jquery.watch.js", "new_recive.css"], "outOfDate":[]};
</script>
  
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2015.1.1.343"/>
  <title>Edit_Recive</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?131700929"/>
  <link rel="stylesheet" type="text/css" href="css/master_a-master.css?336593918"/>
  <link rel="stylesheet" type="text/css" href="css/new_recive.css?287436447" id="pagesheet"/>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <!-- Other scripts -->
  <script type="text/javascript">
   document.documentElement.className = document.documentElement.className.replace(/\bnojs\b/g, 'js');
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
    </div>
    <?php 
	  // include('inc/conf.php');
    include('inc/conf.php');
      $id = $_GET['id'];
      $sql = "SELECT * FROM $StockIn a LEFT JOIN $Products b ON a.product_id=b.product_id WHERE stock_in_id = '$id'";
      $query = mysql_db_query($db_name, $sql);
      $row = mysql_fetch_row($query);
      
     ?>
    <form enctype="multipart/form-data" action="action_edit_ro.php?id=<?php echo $row[0];?>" method="POST" id="edit_po">
    <div class="colelem" id="u169"><!-- simple frame --></div>
    <div class="clearfix colelem" id="u4690-4"><!-- content -->
     <p>แก้ไขงานผลิตเข้าสต๊อก</p>
    </div>
    <div class="clearfix colelem" id="pu4689-4"><!-- group -->
     <div class="clearfix grpelem" id="u4689-4"><!-- content -->
      <p>รหัสสินค้า</p>
     </div>
     <div class="clearfix grpelem" id="u4692-4"><!-- content -->
      <p>ชื่อสินค้า</p>
     </div>
     <div class="clearfix grpelem" id="u4722-4"><!-- content -->
      <p>จำนวน</p>
     </div>
     <div class="clearfix grpelem" id="u4691-4"><!-- content -->
      <p>วันที่</p>
     </div>
    </div>
    <div class="clearfix colelem" id="pu4696"><!-- group -->
     <div class="grpelem" id="u4696"><!-- custom html -->
     <input name="product_id" class="textbox"type="text" value="<?php echo $row[1];?>" readonly>
<style> 
 .textbox { 
    outline:0; 
    height:40px; 
    width: 187px; 
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
     <div class="grpelem" id="u4700"><!-- custom html -->
      <input id="product_name" class="textbox"type="text" value="<?php echo $row[5];?>" readonly> 
<style> 
 .textbox { 
    outline:0; 
    height:40px; 
    width: 187px; 
  } 
</style> 


</div>
     <div class="grpelem" id="u4725"><!-- custom html -->
      <input name="qty" class="textbox"type="text" value="<?php echo $row[2];?>" style="text-align: right;"> 
<style> 
 .textbox { 
    outline:0; 
    height:40px; 
    width: 187px; 
  } 
</style> 


</div>
     <div class="grpelem" id="u4697"><!-- custom html -->
      <input name="created" class="textbox datepicker" type="text" value="<?php echo toDatepicker($row[3]);?>" readonly> 
<style> 
 .textbox { 
    outline:0; 
    height:40px; 
    width: 187px; 
  } 
</style> 


</div>
    </div>
    <div class="clearfix colelem" id="pu4694"><!-- group -->
     <a class="nonblock nontext clip_frame grpelem" id="u4694" href="overview_recive.php"><!-- image --><img class="block" id="u4694_img" src="images/cancle_but.png" alt="" width="180" height="55"/></a>
     <a class="nonblock nontext clip_frame grpelem" id="u4698" href="#" onclick="$(this).closest('form').submit()"><!-- image --><img class="block" id="u4698_img" src="images/save_but.png" alt="" width="180" height="55"/></a>
    </div>
    </form>
    <div class="verticalspacer"></div>
    <div class="clearfix colelem" id="u258-7"><!-- content -->
     <p id="u258-2">48 ซ. อ่อนนุช 66 แยก 19 แขวงประเวศ เขตประเวศ กรุงเทพฯ 10250 โทร. 02-1385539-41 โทรสาร. 02-1385542</p>
     <p id="u258-4">48 Soi Onnuch 66 Yak19, Pravet ,Bangkok 10250 Thailand Tel. 02-1385539-41 Fax. 02-1385542</p>
     <p>&nbsp;</p>
    </div>
   </div>
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
  <script src="scripts/jquery.musepolyfill.bgsize.js?120190942" type="text/javascript"></script>
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
<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js" integrity="sha256-xNjb53/rY+WmG+4L6tTl9m6PpqknWZvRt0rO1SRnJzw=" crossorigin="anonymous"></script>
<script src="scripts/ro.js"></script>
   </body>
</html>
