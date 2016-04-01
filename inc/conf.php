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
$PoDetail = "po_details";

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
  $new  = date('d/m/Y', strtotime(implode('/', array_reverse($explode))));
  return $new;
}

?>