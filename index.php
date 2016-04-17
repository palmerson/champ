<?php
  session_start();
?>

<!DOCTYPE html>
<html class="nojs html" lang="en-US">
 <head>

  <script type="text/javascript">
   if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["jquery-1.8.3.min.js", "museutils.js", "jquery.musepolyfill.bgsize.js", "jquery.watch.js", "index.css"], "outOfDate":[]};
</script>
  
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2015.1.1.343"/>
  <title>Login</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?131700929"/>
  <link rel="stylesheet" type="text/css" href="css/index.css?176109598" id="pagesheet"/>
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
   <div class="clearfix colelem" id="u3405"><!-- group -->
    <div class="clearfix grpelem" id="pu3333"><!-- column -->
     <a class="nonblock nontext clip_frame colelem" id="u3333" href="home.php"><!-- svg --><img class="svg" id="u3334" src="images/pasted-svg-201.svg" width="302" height="60" alt="" data-mu-svgfallback="images/pasted%20svg%20201_poster_.png"/></a>
     <div class="clearfix colelem" id="u3335-6"><!-- content -->
      <p>บริษัท แชมป์ แมคคานิค แฟคตอรี่ จำกัด</p>
      <p>CHAMP MECHANIC FACTORY CO.,LTD.</p>
     </div>
     <div class="clearfix colelem" id="u3337-9"><!-- content -->
      <p id="u3337-2">48 ซ. อ่อนนุช 66 แยก 19 แขวงประเวศ เขตประเวศ กรุงเทพฯ 10250 โทร. 02-1385539-41 โทรสาร. 02-1385542</p>
      <p id="u3337-4">48 Soi Onnuch 66 Yak19, Pravet ,Bangkok 10250 Thailand</p>
      <p id="u3337-6">Tel. 02-1385539-41 Fax. 02-1385542</p>
      <p>&nbsp;</p>
     </div>
    </div>
    <div class="grpelem" id="u3336"><!-- simple frame --></div>
    <div class="clearfix grpelem" id="pu3384-4"><!-- column -->
      <form method="post" action="action_check_login.php" id="form1">
     <div class="clearfix colelem" id="u3384-4"><!-- content -->
      <p id="u3384-2">เข้าสู่ระบบงานขายวาล์วก๊าซปิโตรเลียมเหลว</p>
     </div>
     <div class="clearfix colelem" id="u3351"><!-- group -->
      <div class="clip_frame grpelem" id="u3356"><!-- svg -->
       <img class="svg" id="u3354" src="images/pasted-svg-23.svg" width="23" height="26" alt="" data-mu-svgfallback="images/pasted%20svg%2023_poster_.png"/>
      </div>
      <input class="clearfix grpelem" id="u3363-4" placeholder="Username" type="text" name="username"><!-- content -->
     </div>
     <div class="clearfix colelem" id="u3378"><!-- group -->
      <div class="clip_frame grpelem" id="u3389"><!-- svg -->
       <img class="svg" id="u3387" src="images/pasted-svg-26x12.svg" width="26" height="12" alt="" data-mu-svgfallback="images/pasted%20svg%2026x12_poster_.png"/>
      </div>
      <input class="clearfix grpelem" id="u3366-4" placeholder="Password" type="password" name="password"><!-- content -->
     </div>
     <div class="clearfix colelem" id="u3408"><!-- group -->
      <div class="pointer_cursor clearfix grpelem" id="u3396"><!-- group -->
       <!-- <a class="block" href="home.php"></a> -->
       <button type="submit" form="form1" value="Submit" class="nonblock nontext rgba-background clearfix grpelem" id="u3402-4"><!-- content --><p id="u3402-2">Login</p></button>
      </div>
     </div>
     </form>
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
