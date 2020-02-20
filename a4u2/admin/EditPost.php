<?php require_once("Include/DB.php"); ?>
<?php require_once("Include/Sessions.php"); ?>
<?php require_once("Include/Functions.php"); ?>
<?php Confirm_Login(); ?>
<?php
if(isset($_POST["Submit"])){
$Title=mysql_real_escape_string($_POST["Title"]);
$Category=mysql_real_escape_string($_POST["Category"]);
$Post=mysql_real_escape_string($_POST["Post"]);
date_default_timezone_set("Asia/Karachi");
$CurrentTime=time();
//$DateTime=strftime("%Y-%m-%d %H:%M:%S",$CurrentTime);
$DateTime=strftime("%B-%d-%Y %H:%M:%S",$CurrentTime);
$DateTime;
$Admin=$_SESSION["Username"];
$Image=$_FILES["Image"]["name"];
$Target="Upload/".basename($_FILES["Image"]["name"]);
if(empty($Title)){
	$_SESSION["ErrorMessage"]="Title can't be empty";
	Redirect_to("AddNewPost.php");
	
}elseif(strlen($Title)<2){
	$_SESSION["ErrorMessage"]="Title Should be at-least 2 Characters";
	Redirect_to("AddNewPost.php");
	
}else{
	global $ConnectingDB;
	$EditFromURL=$_GET['Edit'];
	$Query="UPDATE admin_panel SET datetime='$DateTime', title='$Title',
	category='$Category', author='$Admin',image='$Image',post='$Post'
	WHERE id='$EditFromURL'";
	
	$Execute=mysql_query($Query);
	move_uploaded_file($_FILES["Image"]["tmp_name"],$Target);
	if($Execute){
	$_SESSION["SuccessMessage"]="Post Updated Successfully";
	Redirect_to("Dashboard.php");
	}else{
	$_SESSION["ErrorMessage"]="Something Went Wrong. Try Again !";
	Redirect_to("Dashboard.php");
		
	}
	
}	
	
}

?>

<!DOCTYPE>

<html>
	<head>
		<title>Edit Post</title>
                <link rel="stylesheet" href="../css/bootstrap.min.css">
                <script src="../js/jquery-3.2.1.min.js"></script>
                <script src="../js/bootstrap.min.js"></script>
                <script src="ckeditor/ckeditor.js" type="text/javascript"></script>
		<link rel="stylesheet" href="../css/adminstyles.css">
<style>
	.FieldInfo{
    color: rgb(251, 174, 44);
    font-family: Bitter,Georgia,"Times New Roman",Times,serif;
    font-size: 1.2em;
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
	
	<div class="col-sm-2">
	
	<ul id="Side_Menu" class="nav nav-pills nav-stacked">
	<li ><a href="Dashboard.php">
	<span class="glyphicon glyphicon-th"></span>
	&nbsp;Dashboard</a></li>
	<li class="active"><a href="AddNewPost.php">
	<span class="glyphicon glyphicon-list-alt"></span>
	&nbsp;Add New Post</a></li>
	<li ><a href="Categories.php">
	<span class="glyphicon glyphicon-tags"></span>
	&nbsp;Categories</a></li>
	<li><a href="#">
	<span class="glyphicon glyphicon-user"></span>
	&nbsp;Manage Admins</a></li>
	<li><a href="#">
	<span class="glyphicon glyphicon-comment"></span>
	&nbsp;Comments</a></li>
	<li><a href="#">
	<span class="glyphicon glyphicon-equalizer"></span>
	&nbsp;Live Blog</a></li>
	<li><a href="#">
	<span class="glyphicon glyphicon-log-out"></span>
	&nbsp;Logout</a></li>	
		
	</ul>
	
	
	
	
	</div> <!-- Ending of Side area -->
	<div class="col-sm-10">
	<h1>Update Post</h1>
	<?php echo Message();
	      echo SuccessMessage();
	?>
<div>
	<?php
	$SerachQueryParameter=$_GET['Edit'];
	$ConnectingDB;
	$Query="SELECT * FROM admin_panel WHERE id='$SerachQueryParameter'";
	$ExecuteQuery=mysql_query($Query);
	while($DataRows=mysql_fetch_array($ExecuteQuery)){
		$TitleToBeUpdated=$DataRows['title'];
		$CategoryToBeUpdated=$DataRows['category'];
		$ImageToBeUpdated=$DataRows['image'];
		$PostToBeUpdated=$DataRows['post'];
		
	}
	
	
	?>
<form action="EditPost.php?Edit=<?php echo $SerachQueryParameter; ?>" method="post" enctype="multipart/form-data">
	<fieldset>
	<div class="form-group">
	<label for="title"><span class="FieldInfo">Title:</span></label>
	<input value="<?php echo $TitleToBeUpdated; ?>" class="form-control" type="text" name="Title" id="title" placeholder="Title">
	</div>
	<div class="form-group">
	<span class="FieldInfo"> Existing Category: </span>
	<?php echo $CategoryToBeUpdated;?>
	<br>
	<label for="categoryselect"><span class="FieldInfo">Category:</span></label>
	<select class="form-control" id="categoryselect" name="Category" >
	<?php
global $ConnectingDB;
$ViewQuery="SELECT * FROM category ORDER BY datetime desc";
$Execute=mysql_query($ViewQuery);
while($DataRows=mysql_fetch_array($Execute)){
	$Id=$DataRows["id"];
	$CategoryName=$DataRows["name"];
?>	
	<option><?php echo $CategoryName; ?></option>
	<?php } ?>
			
	</select>
	</div>
	<div class="form-group">
		<span class="FieldInfo"> Existing Image: </span>
	<img src="Upload/<?php echo $ImageToBeUpdated;?>" width=170px; height=70px;>
	<br>
	<label for="imageselect"><span class="FieldInfo">Select Image:</span></label>
	<input type="File" class="form-control" name="Image" id="imageselect">
	</div>
	<div class="form-group">
	<label for="postarea"><span class="FieldInfo">Post:</span></label>
	<textarea class="ckeditor" class="form-control" name="Post" id="postarea">
		<?php echo $PostToBeUpdated; ?>
	</textarea>
	<br>
<input class="btn btn-success btn-block" type="Submit" name="Submit" value="Update Post">
	</fieldset>
	<br>
</form>
</div>



	</div> <!-- Ending of Main Area-->
	
</div> <!-- Ending of Row-->
	
</div> <!-- Ending of Container-->
<!--Start of footer-->
        <section style="background-color: black" id="footer">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12" style="text-align: center;color: white;margin: 2%">
                        <div >
                            <p>All Rights Reserved<br> ©2018-2019
                        </div>
                    </div>
                    
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </section>
        <!--End of footer-->
	    
	</body>
</html>