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
$Production = "production";
$ProductionDetails = "production_details";
$StockIn = "stock_in";
$StockOut = "stock_out";
$StockOutDetails = "stock_out_details";

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

function convert($number){ 
$txtnum1 = array('ศูนย์','หนึ่ง','สอง','สาม','สี่','ห้า','หก','เจ็ด','แปด','เก้า','สิบ'); 
$txtnum2 = array('','สิบ','ร้อย','พัน','หมื่น','แสน','ล้าน','สิบ','ร้อย','พัน','หมื่น','แสน','ล้าน'); 
$number = str_replace(",","",$number); 
$number = str_replace(" ","",$number); 
$number = str_replace("บาท","",$number); 
$number = explode(".",$number); 
if(sizeof($number)>2){ 
return 'ทศนิยมหลายตัวนะจ๊ะ'; 
exit; 
} 
$strlen = strlen($number[0]); 
$convert = ''; 
for($i=0;$i<$strlen;$i++){ 
    $n = substr($number[0], $i,1); 
    if($n!=0){ 
        if($i==($strlen-1) && $n==1){ $convert .= 'เอ็ด'; } 
        elseif($i==($strlen-2) && $n==2){  $convert .= 'ยี่'; } 
        elseif($i==($strlen-2) && $n==1){ $convert .= ''; } 
        else{ $convert .= $txtnum1[$n]; } 
        $convert .= $txtnum2[$strlen-$i-1]; 
    } 
} 

$convert .= 'บาท'; 
if($number[1]=='0' || $number[1]=='00' || $number[1]==''){ 
$convert .= 'ถ้วน'; 
}else{ 
$strlen = strlen($number[1]); 
for($i=0;$i<$strlen;$i++){ 
$n = substr($number[1], $i,1); 
    if($n!=0){ 
    if($i==($strlen-1) && $n==1){$convert 
    .= 'เอ็ด';} 
    elseif($i==($strlen-2) && 
    $n==2){$convert .= 'ยี่';} 
    elseif($i==($strlen-2) && 
    $n==1){$convert .= '';} 
    else{ $convert .= $txtnum1[$n];} 
    $convert .= $txtnum2[$strlen-$i-1]; 
    } 
} 
$convert .= 'สตางค์'; 
} 
return $convert; 
} 

?>