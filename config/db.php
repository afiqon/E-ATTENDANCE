<?php

ob_start();

if(!isset($_SESSION)){
    session_start();
}

$host='localhost';
$user='root';
$dbpass='';
$db_name='eattendance';

$connection= mysqli_connect($host,$user,$dbpass,$db_name);

if(!$connection){
   die("connection to db failed" . mysqli_error($connection));
}
?>
