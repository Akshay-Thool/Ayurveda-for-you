<?php
error_reporting('all');
$servername="localhost";
$username="root";
$password="";
$dbname="phppro";

$objCon=new mysqli($servername,$username,$password,$dbname);

if($objCon->connect_error)
{
	die("Connection Failed : ".$objCon->connect_error);
}
?>