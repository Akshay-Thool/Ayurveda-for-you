<?php require_once("Include/DB.php"); ?>
<?php require_once("Include/Sessions.php"); ?>
<?php
function Redirect_to($New_Location){
    header("Location:".$New_Location);
	exit;
}

function Login_Attempt($Username,$Password){
    $ConnectingDB;
    $Query="SELECT * FROM signup
    WHERE db_email='$Username' AND db_pass='$Password'";
    $Execute=mysql_query($Query);
    if($admin=mysql_fetch_assoc($Execute)){
	return $admin;
    }else{
	return null;
    }
}

function for_pass($Username){
    $ConnectingDB;
    $null="Not match";
    $Query="SELECT * FROM signup
    WHERE db_email='$Username' ";
    $Execute=mysql_query($Query);
    if($admin=mysql_fetch_assoc($Execute)){
    return $admin;
    }else{
    return $null;
    }
}


function Login(){
    if(isset($_SESSION["User_Id"])){
	return true;
    }
}
 function Confirm_Login(){
    if(!Login()){
	$_SESSION["ErrorMessage"]="Login Required ! ";
	Redirect_to("Login.php");
    }
    
 }

function Signin_attempt($Username)
{

    $Connection;
    $Query="SELECT * FROM register WHERE db_email='$Username'";
    $Execute=mysql_query($Query);
    if ($admin=mysql_fetch_assoc($Execute)) 
    {
        $_SESSION["ErrorMessage"]="Username alredy taken";
        Redirect_to("login.php");
    }
    else
    {
        return null;
    }
}


?>