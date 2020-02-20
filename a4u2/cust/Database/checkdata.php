<?php
$qs=$_REQUEST["qun"];
include "connection.php";
$varQuery ="SELECT * FROM signup WHERE name='$qs'";
$tbl_login=$objCon->query($varQuery);
$varRecord=$tbl_login->num_rows;
echo $varRecord;
?>