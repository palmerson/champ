<? include('session.php');?>
<!DOCTYPE html>
<html class="nojs html" lang="en-US">
 <head>

  <script type="text/javascript">
   if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["jquery-1.8.3.min.js", "museutils.js", "jquery.musepolyfill.bgsize.js", "jquery.watch.js", "new_product.css"], "outOfDate":[]};
</script>
  
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2015.1.1.343"/>
  <title>Edit_Product</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?131700929"/>
  <link rel="stylesheet" type="text/css" href="css/master_a-master.css?336593918"/>
  <link rel="stylesheet" type="text/css" href="css/new_product.css?13223855" id="pagesheet"/>
  <!-- Other scripts -->
  <script type="text/javascript">
   document.documentElement.className = document.documentElement.className.replace(/\bnojs\b/g, 'js');
</script>
    <!--/*

*/
-->
 </head>
 <body class="museBGSize">
  <?php 
  include 'inc/conf.php';
  $pid = $_GET['pid'];

  $sql = "SELECT * FROM $Products WHERE product_id = '$pid'";

  $query = mysql_db_query($db_name, $sql);
  $row = mysql_fetch_row($query);
  mysql_close();
  ?>
  <div class="clearfix" id="page"><!-- column -->
   <div class="position_content" id="page_position_content">
    <div class="clearfix colelem" id="pu156"><!-- group -->
     <a class="nonblock nontext clip_frame grpelem" id="u156" href="home.php"><!-- svg --><img class="svg" id="u154" src="images/pasted-svg-201.svg" width="201" height="40" alt="" data-mu-svgfallback="images/pasted%20svg%20201_poster_.png"/></a>
     <div class="clearfix grpelem" id="u164-6"><!-- content -->
      <p>บริษัท แชมป์ แมคคานิค แฟคตอรี่ จำกัด</p>
      <p>CHAMP MECHANIC FACTORY CO.,LTD.</p>
     </div>
    </div>
    <form enctype="multipart/form-data" action="action_edit_product.php?pid=<?php echo $row[0];?>" method="POST" id="edit_product">
    <div class="colelem" id="u169"><!-- simple frame --></div>
    <div class="clearfix colelem" id="u430-4"><!-- content -->
     <p>แก้ไขสินค้า</p>
    </div>
    <div class="clearfix colelem" id="pppu611-4"><!-- group -->
     <div class="clearfix grpelem" id="ppu611-4"><!-- column -->
      <div class="clearfix colelem" id="pu611-4"><!-- group -->
       <div class="clearfix grpelem" id="u611-4"><!-- content -->
        <p>รหัสสินค้า</p>
       </div>
       <div class="clearfix grpelem" id="u617-4"><!-- content -->
        <p>ชื่อสินค้า</p>
       </div>
      </div>
      <div class="clearfix colelem" id="pu1364"><!-- group -->
      <div class="grpelem" id="u1364" ><!-- custom html -->
      
      <input class="product_id" type="text" name="product_id" readonly value="<?php echo $row[0];?>"> 
        <style> 
         .product_id { 
            outline:0; 
            height:40px; 
            width: 80px; 
          } 
        </style> 
      </div>
       <div class="grpelem" id="u1375"><!-- custom html -->
        <input class="product_name_box" type="text" value="<?php echo $row[1];?>" name="name"> 
<style> 
 .product_name_box { 
    outline:0; 
    height:40px; 
    width: 308px; 
  } 
</style> 


</div>
      </div>
      <div class="clearfix colelem" id="pu629-4"><!-- group -->
       <div class="clearfix grpelem" id="u629-4"><!-- content -->
        <p>สต๊อก</p>
       </div>
       <div class="clearfix grpelem" id="u638-4"><!-- content -->
        <p>ราคา</p>
       </div>
      </div>
      <div class="clearfix colelem" id="pu641-3"><!-- group -->
       <div class="clearfix grpelem" id="u641-3"><!-- content -->
        <input class="textbox2" type="text" value="<?php echo $row[3];?>" name="price">
        <style> 
         .textbox2 { 
            outline:0; 
            height:40px; 
            width: 80px;
            padding-left: 20px;
            /*text-align: center; */
          } 
        </style> 
        <!-- <p id="u641">&nbsp;</p> -->
       </div>
       <div class="grpelem" id="u1385"><!-- custom html -->
        <input class="textbox"type="text" value="<?php echo $row[6];?>" name="stock"> 
<style> 
 .textbox { 
    outline:0; 
    height:40px; 
    width: 80px; 
  } 
</style> 


</div>
       <div class="clearfix grpelem" id="u5503-4"><!-- content -->
        <p id="u5503-2">บาท</p>
       </div>
      </div>
      <div class="clearfix colelem" id="u635-4"><!-- content -->
       <p>หมายเหตุ</p>
      </div>
      <div class="clearfix colelem" id="u632-3"><!-- content -->
       <!-- <p id="u632">&nbsp;</p> -->
      <textarea rows="6" cols="64" name="remark">
        <?php echo $row[4];?>
      </textarea>
      </div>
     </div>
     <div class="museBGSize grpelem" id="u650">
      <input type="file" name="pic" accept="image/*">
      <?php if(empty($row[5])){
        // echo "<img src=\"images/vector%20smart%20object.png\"/>";
        echo "<img src=\"images/nophoto.jpg\" width=\"337\" height=\"323\"/>";
      }
        else{
        echo "<img src=\"$row[5]\" width=\"337\" height=\"323\"/>";
      } 
      ?>
     </div>
    </div>
    <div class="clearfix colelem" id="pu5058"><!-- group -->
     <a class="nonblock nontext clip_frame grpelem" id="u5058" href="overview_product.php"><!-- image --><img class="block" id="u5058_img" src="images/cancle_but.png" alt="" width="180" height="55"/></a>
     <button type="submit" form="edit_product" value="Submit" class="nonblock nontext clip_frame grpelem" id="u1616"><!-- svg --><img class="svg" id="u1617" src="images/pasted-svg-200x60.svg" width="183" height="55" alt="" data-mu-svgfallback="images/pasted%20svg%20200x60_poster_.png"/></button>
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
   </body>
</html>
