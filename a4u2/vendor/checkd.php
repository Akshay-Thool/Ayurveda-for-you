<?php require_once("../Include/DB.php"); ?>
<?php
include '../Include/DB.php';
$Rec=$_REQUEST["qun"];
echo $Rec;
$part = explode("brvalue",$Rec);
$textTitle = $part[0];
$textPost = $part[1];

echo $textTitle;
echo $textPost;
 $varQuery ="INSERT INTO signup(db_email,db_pass) VALUES('$textTitle','$textPost')";

$tbl_login=$objCon->query($varQuery);
$varRecord=$tbl_login->num_rows;
echo $varRecord;

?>