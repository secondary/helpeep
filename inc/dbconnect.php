<?php
$con= mysql_connect("localhost","root","password");

if(!$con){
  die("Error on Database connection".mysql_error());
}else{
//  echo "database connection success<br>";
}

$db_select=mysql_select_db("helpeep");
if(!$db_select){
  echo "database not selected or some interruption<br>";
}else{
  //echo "database selected and success<br>";
}

$db_query= mysql_query("select * from  user");
if(!$db_query){
  echo "database query interruption <br>";
}

$db_query2= mysql_query("select * from providers");
if(!$db_query){
  echo "database query to providers table experience interruption";
}

$data= mysql_fetch_array($db_query);
//$data2= mysql_fetch_array($db_query2);

?>
