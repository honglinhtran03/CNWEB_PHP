<?php
$server=$_SERVER[ 'SERVER_NAME'];
$user="root";
$pass="";
$db="udn";
$con=mysql_connect($server,$user,$pass,$db);
mysql_connect($con,"set names 'utf8'");
?>