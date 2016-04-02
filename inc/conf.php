<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "champ";

$Customers = "customers";
$CustomersType = "customers_type";
$Products = "products";
$Users = "users";
$Po = "po";
$PoDetails = "po_details";
$Mo = "mo";
$MoDetails = "mo_details";
$Ro = "ro";

$objConnect = mysql_connect($servername, $username, $password) or die("Error Connect to Database");
$objDB = mysql_select_db($db_name);
mysql_query("SET NAMES UTF8");


function checkPost($post){
	echo "<pre>";
  print_r($post);
  echo "</pre>";
}

function toMysql($date){
  $explode = explode('/', $date);
  $new  = date('Y-m-d', strtotime(implode('-', array_reverse($explode))));
  return $new;
}

function toDatepicker($date){
  $explode = explode('-', $date);
  $new  = implode('/', array_reverse($explode));
  return $new;
}

function dateDifference($date_1 , $date_2 , $differenceFormat = '%a' )
{
	$datetime1 = date_create($date_1);
  $datetime2 = date_create($date_2);
    
  $interval = date_diff($datetime1, $datetime2);
    
  return $interval->format($differenceFormat);
    
}

?>