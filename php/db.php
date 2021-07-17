<?php
@session_start();
$host = 'localhost';
$dbuser = 'user';
$dbpw = 'password';
$dbname = 'sky_db';

$_SESSION['link'] = mysqli_connect($host, $dbuser, $dbpw, $dbname);

if($_SESSION['link']){
	mysqli_query($_SESSION['link'], "SET NAMES utf8");
	//echo "已正確連線";
}
else{
	echo '無法連線musql資料庫 :<br/>' . mysqli_connect_error();
}
?>