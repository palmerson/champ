<?php
	include "inc/errMsg.php";
	
	$user = $_POST['username'];
	$pwd = $_POST['password'];	
	
	if ($user == "" || $pwd == "") {
		echo "<b>$error_member_space</b><br>";
		echo "<a href=\"javascript:history.go(-1)\">Go Back</a>";
		exit();		
	}
	
	include "inc/conf.php";

	$sql = "SELECT * FROM $Users WHERE username='$user' and password='$pwd'";
	$result = mysql_db_query($db_name, $sql);

  if ($result==false)
  {
      die(mysql_error());
  }
  $count=mysql_num_rows($result);
  mysql_close();
	
	if ($count <= 0) {
		echo "<b>$error_member_mismatch</b><br><br>";
		echo "<a href=\"javascript:history.go(-1)\">Go Back</a>";
	}
	else {
		session_start();
		$_SESSION[sess_userid] = session_id();
		$_SESSION[sess_username] = $user;
		header("location: home.php");	
	}
?>