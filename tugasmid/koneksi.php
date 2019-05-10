<?php 
$host="localhost";
$user="root";
$pass="";
$db="data";

$conn=mysqli_connect("$host", "$user", "$pass");
if(!$conn){
	die("database tidak connect").mysql_error();
}


$database=mysqli_select_db($conn, "$db");
if(!$database){
	die("database tidak terpilih").mysql_error();

}
 ?>
