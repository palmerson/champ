<? include('session.php');?>
<!DOCTYPE html>
<html class="nojs html" lang="en-US">
 <head>

  <script type="text/javascript">
   if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["jquery-1.8.3.min.js", "museutils.js", "jquery.musepolyfill.bgsize.js", "jquery.watch.js", "overview_customer.css"], "outOfDate":[]};
</script>
  
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2015.1.1.343"/>
  <title>Overview_Customer</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?131700929"/>
  <link rel="stylesheet" type="text/css" href="css/master_a-master.css?336593918"/>
  <link rel="stylesheet" type="text/css" href="css/overview_customer.css?194339949" id="pagesheet"/>
  <!-- Other scripts -->
  <script type="text/javascript">
   document.documentElement.className = document.documentElement.className.replace(/\bnojs\b/g, 'js');
</script>
  <!-- JS includes -->
  <script type="text/javascript">
   document.write('\x3Cscript src="' + (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//use.typekit.net/ik/-d7bWbi8noWKUWYEEq-cHJCiYZ86Cj1fs9h6S4PhTwMfec3JCG_bMsJGwDb35QSUFBvkZ2JtZQSUjD8cFQj3w29DwDwtjR9Xw2JoFcjhZ2bXFgGmjhyydWM0jhNlOfG0jhyydWM0jhNlJ6U3ScNt-AuyOAozicI7fbKzMsMMeMb6MqGIQWmDZZMgzGV0l39.js" type="text/javascript">\x3C/script>');
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
    </div>
    <div class="colelem" id="u169"><!-- simple frame --></div>
    <div class="clearfix colelem" id="u5120-4"><!-- content -->
     <p>ข้อมูลลูกค้า</p>
    </div>
    <div class="clearfix colelem" id="pu5116"><!-- group -->
     <a class="nonblock nontext clip_frame grpelem" id="u5116" href="home.php"><!-- image --><img class="block" id="u5116_img" src="images/back_but.png" alt="" width="180" height="55"/></a>
     <a class="nonblock nontext clip_frame grpelem" id="u5143" href="new_customer.php"><!-- image --><img class="block" id="u5143_img" src="images/newcustomer_but.png" alt="" width="180" height="55"/></a>
     <div class="clip_frame grpelem" id="u5445"><!-- image -->
<!--       <a href="report_customer.php" target="_blank"><img class="block" id="u5445_img" src="images/printhistory_but.png" alt="" width="180" height="55"/></a> -->
    <img class="block" id="u5445_img" src="images/printhistory_but.png" alt="พิมพ์รายงาน" title="พิมพ์รายงาน" width="180" height="55" onclick="printDiv()"/>
     </div>
    </div>
    <div class="colelem" id="u5121"><!-- custom html -->
      <center>
        <span class="head"></span>
        <br/><br/><br/><br/> 
      </center>
     <style type="text/css">
     .head {font-size: 22px;font-weight: bold;}
.tg  {border-collapse:collapse;border-spacing:0;border-color:#999;border:none;margin:0px auto;width: 100%;}

.tg td{font-size:14px;padding:10px 10px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#000;color:#444;background-color:#F7FDFA;}
.tg th{font-size:14px;font-weight:normal;padding:10px 10px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#000;color:#000;background-color:#26ADE4;text-align: center;}
.tg .tg-vn4c{background-color:#D2E4FC}

.center { text-align: center; }</style>
<div class="tg-wrap"><table id="tg-0YX8L" class="tg">
  <tr>
    <th class="tg-031e">รหัสลูกค้า</th>
    <th class="tg-031e">ชื่อลูกค้า</th>
    <th class="tg-031e">ที่อยู่ลูกค้า</th>
    <th class="tg-031e">ผู้ติดต่อ</th>
    <th class="tg-031e">เบอร์โทรศัพท์</th>
    <th class="tg-031e"></th>
  </tr>
 <?php 
  include 'inc/conf.php';

  if (isset($_GET['p'])) {
    $page =  $_GET['p'];
    $p = $page - 1;
  }else{
    $page = 1;
    $p = 0;
  }

  $sql = "SELECT * FROM $Customers ORDER BY customer_id ASC LIMIT $p , 100";

  $query = mysql_db_query($db_name, $sql);
  $counter = 1;
    while($row = mysql_fetch_array($query)) {
    if($counter%2 == 0){
  ?>
    <tr>
      <td class="tg-vn4c center" width="5%"><?php echo $row['customer_id'];?></td>
      <td class="tg-vn4c" width="40%"><?php echo $row['company_name'];?></td>
      <td class="tg-vn4c" width="10%"><?php echo $row['address'];?></td>
      <td class="tg-vn4c" width="15%"><?php echo $row['contact'];?></td>
      <td class="tg-vn4c" width="25%"><?php echo $row['phone'];?></td>
     <td class="tg-vn4c" width="5%"><!-- <a href="view_customer.php?id=<?php //echo $row['customer_id'];?>"><img src="images/view.png" alt="ดู" width="17" height="16"></a>&nbsp; -->
      <a href="edit_customer.php?id=<?php echo $row['customer_id'];?>"><img src="images/edit.png" alt="แก้" width="16" height="16" title="แก้ไข"></a></td>
    </tr>
  <?php
    } else{
  ?>
    <tr>
      <td class="tg-031e center" width="5%"><?php echo $row['customer_id'];?></td>
      <td class="tg-031e" width="40%"><?php echo $row['company_name'];?></td>
      <td class="tg-031e" width="10%"><?php echo $row['address'];?></td>
      <td class="tg-031e" width="15%"><?php echo $row['contact'];?></td>
      <td class="tg-031e" width="25%"><?php echo $row['phone'];?></td>
     <td class="tg-031e" width="5%"><!-- <a href="view_customer.php?id=<?php //echo $row['customer_id'];?>"><img src="images/view.png" alt="ดู" width="17" height="16"></a>&nbsp; -->
      <a href="edit_customer.php?id=<?php echo $row['customer_id'];?>"><img src="images/edit.png" alt="แก้" width="16" height="16" title="แก้ไข"></a></td>
    </tr>
  <?php  }
   $counter++;
  }
  ?>
</table></div>
<script type="text/javascript" charset="utf-8">var TgTableSort=window.TgTableSort||function(n,t){"use strict";function r(n,t){for(var e=[],o=n.childNodes,i=0;i<o.length;++i){var u=o[i];if("."==t.substring(0,1)){var a=t.substring(1);f(u,a)&&e.push(u)}else u.nodeName.toLowerCase()==t&&e.push(u);var c=r(u,t);e=e.concat(c)}return e}function e(n,t){var e=[],o=r(n,"tr");return o.forEach(function(n){var o=r(n,"td");t>=0&&t<o.length&&e.push(o[t])}),e}function o(n){return n.textContent||n.innerText||""}function i(n){return n.innerHTML||""}function u(n,t){var r=e(n,t);return r.map(o)}function a(n,t){var r=e(n,t);return r.map(i)}function c(n){var t=n.className||"";return t.match(/\S+/g)||[]}function f(n,t){return-1!=c(n).indexOf(t)}function s(n,t){f(n,t)||(n.className+=" "+t)}function d(n,t){if(f(n,t)){var r=c(n),e=r.indexOf(t);r.splice(e,1),n.className=r.join(" ")}}function v(n){d(n,L),d(n,E)}function l(n,t,e){r(n,"."+E).map(v),r(n,"."+L).map(v),e==T?s(t,E):s(t,L)}function g(n){return function(t,r){var e=n*t.str.localeCompare(r.str);return 0==e&&(e=t.index-r.index),e}}function h(n){return function(t,r){var e=+t.str,o=+r.str;return e==o?t.index-r.index:n*(e-o)}}function m(n,t,r){var e=u(n,t),o=e.map(function(n,t){return{str:n,index:t}}),i=e&&-1==e.map(isNaN).indexOf(!0),a=i?h(r):g(r);return o.sort(a),o.map(function(n){return n.index})}function p(n,t,r,o){for(var i=f(o,E)?N:T,u=m(n,r,i),c=0;t>c;++c){var s=e(n,c),d=a(n,c);s.forEach(function(n,t){n.innerHTML=d[u[t]]})}l(n,o,i)}function x(n,t){var r=t.length;t.forEach(function(t,e){t.addEventListener("click",function(){p(n,r,e,t)}),s(t,"tg-sort-header")})}var T=1,N=-1,E="tg-sort-asc",L="tg-sort-desc";return function(t){var e=n.getElementById(t),o=r(e,"tr"),i=o.length>0?r(o[0],"td"):[];0==i.length&&(i=r(o[0],"th"));for(var u=1;u<o.length;++u){var a=r(o[u],"td");if(a.length!=i.length)return}x(e,i)}}(document);document.addEventListener("DOMContentLoaded",function(n){TgTableSort("tg-0YX8L")});</script>

<script type="text/javascript">
  function printDiv() {
    $("#tg-0YX8L th:last-child, #tg-0YX8L td:last-child").remove();
    $('.head').css('color','#000');
    $('.head').text('รายงานลูกค้า');
    divToPrint = $("#u5121").html();
    w = window.open();
    w.document.writeln(divToPrint);
    location.reload();
    w.print();
    w.close();
  }
</script>

</div>
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
