<?php require_once("Include/DB.php"); ?>
<?php require_once("Include/Sessions.php"); ?>
<?php require_once("Include/Functions.php"); ?>
<?php
$_SESSION["User_Id"]=null;
session_destroy();
Redirect_to("index.php");



?>