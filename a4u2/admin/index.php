<?php require_once("Include/DB.php"); ?>
<?php require_once("Include/Functions.php");  ?>
<?php

if(isset($_POST["Submit"])){
$Username=mysql_real_escape_string($_POST["Username"]);
$Password=mysql_real_escape_string($_POST["Password"]);


// session_start();

//session_destroy();

if (isset($_SESSION['username'])) 
{
	/*$url = "login.php";
	header('location:'.$url);
	exit();*/
}
else if(isset($_POST['username']))
{
	$username=$_POST['username'];
	$_SESSION['username']=$username;
	/*$url = "login.php";
	header('location:'.$url);
	exit();*/
}



if(empty($Username)||empty($Password)){
	$_SESSION["ErrorMessage"]="All Fields must be filled out";
	Redirect_to("index.php");
	
}
else{
	$Found_Account=Login_Attempt($Username,$Password);
	$_SESSION["User_Id"]=$Found_Account["id"];
	$_SESSION["Username"]=$Found_Account["username"];
	if($Found_Account){
	$_SESSION["SuccessMessage"]="Welcome  {$_SESSION["Username"]} ";
	Redirect_to("dashboard.php");
		
	}else{
		$_SESSION["ErrorMessage"]="Invalid Username / Password";
	Redirect_to("index.php");
	}
	
}	
}	


?>

<!DOCTYPE>

<html>
	<head>
		<title>Log-in</title>
                <link rel="stylesheet" href="../css/bootstrap.min.css">
                <script src="../js/jquery-3.2.1.min.js"></script>
                <script src="../js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="../css/adminstyles.css">
<style>
	.FieldInfo{
    color: rgb(251, 174, 44);
    font-family: Bitter,Georgia,"Times New Roman",Times,serif;
    font-size: 1.2em;
}
body{
	background-color: #ffffff;
}

</style>
                
	</head>
	<body>
		<!--Start Hedaer Section-->

		<div style="background-color: #EDE9ED; font-size: 200%;margin: %;text-align: center;padding: 3%">
			<a style="color: #43A906;" href="">Ayurved for you</a>
		</div> 
              
<!--End of Header Section-->
<div class="container-fluid">
<div class="row">
	
	<div class="col-sm-offset-4 col-sm-4">
		<br><br><br><br>
		<?php echo Message();
	      echo SuccessMessage();
	?>
	<h2>Welcome back !</h2>
	
<div>
<form action="index.php" method="post">
	<fieldset>
	<div class="form-group">
	<label for="Username"><span class="FieldInfo">UserName:</span></label>
	<div class="input-group input-group-lg">
	<span class="input-group-addon">
	<span class="glyphicon glyphicon-envelope text-primary"></span>
	</span>
	<input class="form-control" type="text" name="Username" id="Username" placeholder="Username">
	</div>	
	</div>
	
	<div class="form-group">
	<label for="Password"><span class="FieldInfo">Password:</span></label>
	<div class="input-group input-group-lg">
	<span class="input-group-addon">
	<span class="glyphicon glyphicon-lock text-primary"></span>
	</span>
	<input class="form-control" type="Password" name="Password" id="Password" placeholder="Password">
	</div>
	</div>
	
	<br>
<input class="btn btn-info btn-block" type="Submit" name="Submit" value="Login">
	</fieldset>
	<br>
</form>

	</div> <!-- Ending of Main Area-->
	
</div> <!-- Ending of Row-->
	
</div> <!-- Ending of Container-->

	    
	</body>
</html>