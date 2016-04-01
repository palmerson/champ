<? include('session.php');?>
<!DOCTYPE html>
<html class="nojs html" lang="en-US">
 <head>

  <script type="text/javascript">
   if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["jquery-1.8.3.min.js", "museutils.js", "jquery.musepolyfill.bgsize.js", "jquery.watch.js", "new_customer.css"], "outOfDate":[]};
</script>
  
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2015.1.1.343"/>
  <title>Edit_Customer</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?131700929"/>
  <link rel="stylesheet" type="text/css" href="css/master_a-master.css?336593918"/>
  <link rel="stylesheet" type="text/css" href="css/new_customer.css?487541153" id="pagesheet"/>
  <!-- Other scripts -->
  <script type="text/javascript">
   document.documentElement.className = document.documentElement.className.replace(/\bnojs\b/g, 'js');
</script>
<style> 
  .textbox { 
    outline:0; 
    height:40px; 
    width: 79px; 
  }
  .textbox2 { 
    outline:0; 
    height:40px; 
    width: 79px;
    left: 10px;
    position: relative; 
  }
  select {
    width: 145px;
    line-height: 40px;
    -webkit-appearance: menulist-button;
    border-radius: 0;
  }
</style> 
    <!--/*

*/
-->
 </head>
 <body class="museBGSize">
 <?php 
  include 'inc/conf.php';
  $id = $_GET['id'];

  $sql = "SELECT * FROM $Customers WHERE customer_id = '$id'";

  $query = mysql_db_query($db_name, $sql);
  $row = mysql_fetch_row($query);
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
    <form enctype="multipart/form-data" action="action_edit_customer.php?id=<?php echo $row[0];?>" method="POST" id="edit_customer">
    <div class="colelem" id="u169"><!-- simple frame --></div>
    <div class="clearfix colelem" id="u826-4"><!-- content -->
     <p>แก้ไขลูกค้า</p>
    </div>
    <div class="clearfix colelem" id="pu849-4"><!-- group -->
     <div class="clearfix grpelem" id="u849-4"><!-- content -->
      <p>รหัสลูกค้า</p>
     </div>
     <div class="clearfix grpelem" id="u960-4"><!-- content -->
      <p>ประเภทลูกค้า</p>
     </div>
    </div>
    <div class="clearfix colelem" id="pu840-3"><!-- group -->
     <div class="clearfix grpelem" id="u840-3"><!-- content -->
      <p id="u840"><?php echo $row[0];?></p>
     </div>
     <div class="clearfix grpelem" id="u963-3-1"><!-- content -->
      <select name="type">
      <?php
        $type = "SELECT * FROM $CustomersType";
        $query_type = mysql_db_query($db_name, $type);
        while($ct = mysql_fetch_array($query_type)) {
          if($ct[0] == $row[1]){
            echo "<option value=\"$ct[0]\" selected>$ct[1]</option>"; 
          }
          else{
            echo "<option value=\"$ct[0]\">$ct[1]</option>"; 
          }  
        }
        mysql_close();
      ?>
      </select>
     </div>
    </div>
    <div class="clearfix colelem" id="pu825-4"><!-- group -->
     <div class="clearfix grpelem" id="u825-4"><!-- content -->
      <p>ชื่อบริษัท</p>
     </div>
     <div class="clearfix grpelem" id="u975-4"><!-- content -->
      <p>ผู้ติดต่อ</p>
     </div>
    </div>
    <div class="clearfix colelem" id="pu837-3"><!-- group -->
     <input class="clearfix grpelem" id="u837-3" value="<?php echo $row[2];?>" name="company"><!-- content -->
     <input class="clearfix grpelem" id="u972-3" value="<?php echo $row[9];?>" name="contact"><!-- content -->
    </div>
    <div class="clearfix colelem" id="pu867-4"><!-- group -->
     <div class="clearfix grpelem" id="u867-4"><!-- content -->
      <p>ที่อยู่</p>
     </div>
     <div class="clearfix grpelem" id="u969-4"><!-- content -->
      <p>โทรศัพท์</p>
     </div>
     <div class="clearfix grpelem" id="u987-4"><!-- content -->
      <p>โทรสาร</p>
     </div>
     <div class="clearfix grpelem" id="u891-4"><!-- content -->
      <p>เครดิต</p>
     </div>
    </div>
    <div class="clearfix colelem" id="pu864-3"><!-- group -->
      <textarea class="clearfix grpelem" id="u864-3" name="address">
       <?php echo $row[3];?>
     </textarea><!-- content -->
     <input class="clearfix grpelem" id="u966-3" value="<?php echo $row[7];?>" name="phone"><!-- content -->
     <input class="clearfix grpelem" id="u984-3" value="<?php echo $row[8];?>" name="fax"><!-- content -->
     <input class="clearfix grpelem" id="u888-3" value="<?php echo $row[10];?>" name="credit"><!-- content -->
    </div>
    <div class="clearfix colelem" id="pu873-4"><!-- group -->
     <div class="clearfix grpelem" id="u873-4"><!-- content -->
      <p>เขต-อำเภอ</p>
     </div>
     <div class="clearfix grpelem" id="u894-4"><!-- content -->
      <p>จังหวัด</p>
     </div>
     <div class="clearfix grpelem" id="u954-4"><!-- content -->
      <p>รหัสไปรษณีย์</p>
     </div>
    </div>
    <div class="clearfix colelem" id="pu870-3"><!-- group -->
     <input class="clearfix grpelem" id="u870-3" value="<?php echo $row[4];?>" name="town"><!-- content -->
     <input class="clearfix grpelem" id="u897-3" value="<?php echo $row[5];?>" name="city"><!-- content -->
     <input class="clearfix grpelem" id="u957-3" value="<?php echo $row[6];?>" name="zip"><!-- content -->
    </div>
    <div class="clearfix colelem" id="pu5153"><!-- group -->
     <a class="nonblock nontext clip_frame grpelem" id="u5153" href="overview_customer.php"><!-- image --><img class="block" id="u5153_img" src="images/cancle_but.png" alt="" width="180" height="55"/></a>
     <button type="submit" form="edit_customer" value="Submit" class="nonblock nontext clip_frame grpelem" id="u1625" ><!-- svg --><img class="svg" id="u1626" src="images/pasted-svg-200x60.svg" width="183" height="55" alt="" data-mu-svgfallback="images/pasted%20svg%20200x60_poster_.png"/></button>
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
