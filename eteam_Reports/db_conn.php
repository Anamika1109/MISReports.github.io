<?php
$sname = "localhost";
$uname = "root";
$dbpwd = "";
$dbname = "eteams";
$conn = mysqli_connect($sname, $uname, $dbpwd, $dbname);
if(!$conn){
	echo " Connection Failed";
}
?>