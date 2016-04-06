<!DOCTYPE html>
<html class="nojs html" lang="en-US">
 <head>

  <script type="text/javascript">
   if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["jquery-1.8.3.min.js", "museutils.js", "jquery.musepolyfill.bgsize.js", "jquery.watch.js", "overview_stock.css"], "outOfDate":[]};
</script>
  
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2015.1.1.343"/>
  <title>Overview_Stock</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?131700929"/>
  <link rel="stylesheet" type="text/css" href="css/master_a-master.css?336593918"/>
  <link rel="stylesheet" type="text/css" href="css/overview_stock.css?143438673" id="pagesheet"/>
  <!-- Other scripts -->
  <script type="text/javascript">
   document.documentElement.className = document.documentElement.className.replace(/\bnojs\b/g, 'js');
</script>
  <!-- JS includes -->
  <script type="text/javascript">
   document.write('\x3Cscript src="' + (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//use.typekit.net/ik/871IPstGDY0n_qzQATK-K0b4n5yVco0dRz-qiEsvHhtfec3JCG_bMsJGwDb35QSUFBvkZ2JtZQSUjD8cFQj3w29DwDwtjR9Xw2JoFcjhZ2bXFgGmjhyydWM0jhNlOfG0jhyydWM0jhNlJ6U3ScNt-AuyOAozicI7fbKzMsMMeMb6MqGIQWmDZZMgzJV0l39.js" type="text/javascript">\x3C/script>');
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
    <div class="clearfix colelem" id="u4760-4"><!-- content -->
     <p>ตัดสต๊อก</p>
    </div>
    <div class="clearfix colelem" id="pu4763"><!-- group -->
     <a class="nonblock nontext clip_frame grpelem" id="u4763" href="home.php"><!-- image --><img class="block" id="u4763_img" src="images/back_but.png" alt="" width="180" height="55"/></a>
     <a class="nonblock nontext clip_frame grpelem" id="u4950" href="cut_stock.php"><!-- image --><img class="block" id="u4950_img" src="images/cutstock_but.png" alt="" width="180" height="55"/></a>
     <a class="nonblock nontext clip_frame grpelem" id="u4761" href="print_so.php" target="_blank"><!-- image --><img class="block" id="u4761_img" src="images/searchreport_but.png" alt="" width="180" height="55"/></a>
    </div>
    <div class="colelem" id="u4767"><!-- custom html -->
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
    <th class="tg-031e"></th>
  </tr>
  <?php 
  include 'inc/conf.php';

  $sql = "SELECT a.*, b.name,c.created,c.po_id FROM $StockOutDetails a LEFT JOIN products b ON a.product_id=b.product_id LEFT JOIN $StockOut c ON a.stock_out_id=c.stock_out_id where a.qty != 0 and a.stock != 0";
  
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
    <td class="tg-vn4c"><a href="edit_stock.php?s_id=<?php echo $po['stock_out_id']?>"><img src="images/edit.png" alt="แก้" width="16" height="16"></a></td>
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
    <td class="tg-031e"><a href="edit_stock.php?s_id=<?php echo $po['stock_out_id']?>"><img src="images/edit.png" alt="แก้" width="16" height="16"></a></td>
  </tr>
  <?php
    }
	$counter++;
  }
  ?>
 
</table></div>
<script type="text/javascript" charset="utf-8">var TgTableSort=window.TgTableSort||function(n,t){"use strict";function r(n,t){for(var e=[],o=n.childNodes,i=0;i<o.length;++i){var u=o[i];if("."==t.substring(0,1)){var a=t.substring(1);f(u,a)&&e.push(u)}else u.nodeName.toLowerCase()==t&&e.push(u);var c=r(u,t);e=e.concat(c)}return e}function e(n,t){var e=[],o=r(n,"tr");return o.forEach(function(n){var o=r(n,"td");t>=0&&t<o.length&&e.push(o[t])}),e}function o(n){return n.textContent||n.innerText||""}function i(n){return n.innerHTML||""}function u(n,t){var r=e(n,t);return r.map(o)}function a(n,t){var r=e(n,t);return r.map(i)}function c(n){var t=n.className||"";return t.match(/\S+/g)||[]}function f(n,t){return-1!=c(n).indexOf(t)}function s(n,t){f(n,t)||(n.className+=" "+t)}function d(n,t){if(f(n,t)){var r=c(n),e=r.indexOf(t);r.splice(e,1),n.className=r.join(" ")}}function v(n){d(n,L),d(n,E)}function l(n,t,e){r(n,"."+E).map(v),r(n,"."+L).map(v),e==T?s(t,E):s(t,L)}function g(n){return function(t,r){var e=n*t.str.localeCompare(r.str);return 0==e&&(e=t.index-r.index),e}}function h(n){return function(t,r){var e=+t.str,o=+r.str;return e==o?t.index-r.index:n*(e-o)}}function m(n,t,r){var e=u(n,t),o=e.map(function(n,t){return{str:n,index:t}}),i=e&&-1==e.map(isNaN).indexOf(!0),a=i?h(r):g(r);return o.sort(a),o.map(function(n){return n.index})}function p(n,t,r,o){for(var i=f(o,E)?N:T,u=m(n,r,i),c=0;t>c;++c){var s=e(n,c),d=a(n,c);s.forEach(function(n,t){n.innerHTML=d[u[t]]})}l(n,o,i)}function x(n,t){var r=t.length;t.forEach(function(t,e){t.addEventListener("click",function(){p(n,r,e,t)}),s(t,"tg-sort-header")})}var T=1,N=-1,E="tg-sort-asc",L="tg-sort-desc";return function(t){var e=n.getElementById(t),o=r(e,"tr"),i=o.length>0?r(o[0],"td"):[];0==i.length&&(i=r(o[0],"th"));for(var u=1;u<o.length;++u){var a=r(o[u],"td");if(a.length!=i.length)return}x(e,i)}}(document);document.addEventListener("DOMContentLoaded",function(n){TgTableSort("tg-0YX8L")});</script>

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
