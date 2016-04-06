<?php
  $type = $_GET['type'];
  $id = $_GET['id'];

  if($type == 'po'){
  	$page = 'print_po.php?id='.$id;
  }
  else{
  	$page = 'print_mo.php?id='.$id;
  }
?>


<center>
<iframe id="printf" name="printf" src="<?php echo $page?>" width="1200" height="800" style="margin-bottom: 30px;"></iframe>
<div style="height:60px">
  <input class="btn"type="button" onclick="window.frames['printf'].print();" value="print"/>
</div>
<style>
.btn {
  background: #3498db;
  background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
  background-image: -moz-linear-gradient(top, #3498db, #2980b9);
  background-image: -ms-linear-gradient(top, #3498db, #2980b9);
  background-image: -o-linear-gradient(top, #3498db, #2980b9);
  background-image: linear-gradient(to bottom, #3498db, #2980b9);
  -webkit-border-radius: 5;
  -moz-border-radius: 5;
  border-radius: 5px;
  font-family: Arial;
  color: #ffffff;
  font-size: 20px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
}

.btn:hover {
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  text-decoration: none;
}
</style>
</center>