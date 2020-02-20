<?php

$Rec=$_REQUEST["qun"];

$part = explode("brvalue",$Rec);
$textTitle = $part[0];
$textPost = $part[1];

 include "connection2.php";
$varQuery ="INSERT INTO comments(cmd_email,cmd_cmd) VALUES('$textTitle','$textPost')";
 // $varQuery ="INSERT INTO admin_panel(title,post)VALUES('$textTitle','$textPost')";
 $tbl_login=$objCon->query($varQuery);
 $varRecord=$tbl_login->num_rows;
 echo $varRecord;

?>