<?php require_once("Include/DB.php"); ?>
<?php require_once("Include/Sessions.php"); ?>
<?php require_once("Include/Functions.php"); ?>
<?php require_once("../cust/css/index.php"); ?>

<?php Confirm_Login(); ?>
<?php
if(isset($_POST["Submit"])){
$Title=mysql_real_escape_string($_POST["Title"]);
$Category=mysql_real_escape_string($_POST["Category"]);
$Video_link=mysql_real_escape_string($_POST["video_link"]);
$Post=mysql_real_escape_string($_POST["Post"]);
date_default_timezone_set("Asia/Karachi");
$CurrentTime=time();
//$DateTime=strftime("%Y-%m-%d %H:%M:%S",$CurrentTime);
$DateTime=strftime("%B-%d-%Y %H:%M:%S",$CurrentTime);
$DateTime;
$Admin=$_SESSION["Username"];
$Image=$_FILES["Image"]["name"];
$File_size=$_FILES["Image"]['size'];
$Target="images/".basename($_FILES["Image"]["name"]);
if(empty($Title)){
	$_SESSION["ErrorMessage"]="Title can't be empty";
	Redirect_to("AddNewPost.php");
	
}elseif(strlen($Title)<2){
	$_SESSION["ErrorMessage"]="Title Should be at-least 2 Characters";
	Redirect_to("AddNewPost.php");
}else{
	global $ConnectingDB;
	$Query="INSERT INTO admin_panel(datetime,title,category,author,image,video_link,post)
	VALUES('$DateTime','$Title','$Category','$Admin','$Image','$Video_link','$Post')";
	$Execute=mysql_query($Query);
	move_uploaded_file($_FILES["Image"]["tmp_name"],$Target);
	if($Execute){
	$_SESSION["SuccessMessage"]="Post Added Successfully";
	Redirect_to("AddNewPost.php");
	}else{
	$_SESSION["ErrorMessage"]="Something Went Wrong. Try Again !";
	Redirect_to("AddNewPost.php");
		
	}
	
}	
	
}

?>

<!DOCTYPE>

<html>
	<head>
		<title>Add New Post</title>
                <link rel="stylesheet" href="../css/bootstrap.min.css">
                <script src="../js/jquery-3.2.1.min.js"></script>
                <script src="../js/bootstrap.min.js"></script>
<script src="ckeditor/ckeditor.js" type="text/javascript"></script>
		<link rel="stylesheet" href="../css/adminstyles.css">
                
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
	<br><br>
	<ul id="Side_Menu" class="nav nav-pills nav-stacked">
	<li ><a href="Dashboard.php">
	<span class="glyphicon glyphicon-th"></span>
	&nbsp;Dashboard</a></li>
	<li class="active"><a href="AddNewPost.php">
	<span class="glyphicon glyphicon-list-alt"></span>
	&nbsp;Add New Post</a></li>
	<li><a href="Categories.php">
	<span class="glyphicon glyphicon-tags"></span>
	&nbsp;Categories</a></li>
	<li><a href="Admins.php">
	<span class="glyphicon glyphicon-user"></span>
	&nbsp;Manage Admins</a></li>
	<li ><a href="Comments.php">
	<span class="glyphicon glyphicon-comment"></span>
	&nbsp;Comments</a></li>
	<li><a href="mails.php">
	<span class="glyphicon glyphicon-tags"></span>
	&nbsp;Mails</a></li>
	<li><a href="Logout.php">
	<span class="glyphicon glyphicon-log-out"></span>
	&nbsp;Logout</a></li>	
		
	</ul>
	
	
	
	
	</div> <!-- Ending of Side area -->
	<div class="col-sm-10">
	<h1>Add New Post</h1>
	<?php echo Message();
	      echo SuccessMessage();
	?>
<div>
<form action="AddNewPost.php" method="post" enctype="multipart/form-data">
	<fieldset>
	<div class="form-group">
	<label for="title"><span class="FieldInfo">Title:</span></label>
	<input class="form-control" type="text" name="Title" id="title" placeholder="Title">
	</div>
	<div class="form-group">
	<label for="categoryselect"><span  class="FieldInfo">Category:</span></label>
	<select class="form-control" id="categoryselect" name="Category" >
	<?php
global $ConnectingDB;
$ViewQuery="SELECT * FROM category ORDER BY id desc";
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
	<label for="imageselect"><span class="FieldInfo">Select Thumnail:</span></label>
	<input type="File" class="form-control" name="Image" id="imageselect">
	</div>
	
	<div class="form-group">
	<label for="imageselect"><span  class="FieldInfo">Select Videos:</span></label>
	<input type="File" class="form-control" name="video" id="imageselect">
	</div>
	<div class="form-group">
	<label for="imageselect"><span  class="FieldInfo">Put Video Link:</span></label>
	<input type="text" class="form-control" name="video_link" id="imageselect">
	</div>
	<div class="form-group">
	<label for="postarea"><span  class="FieldInfo">Post:</span></label>
		<textarea class="ckeditor" name="Post" id="postarea">
			
		</textarea>
	<br>
<input class="btn btn-success btn-block" type="Submit" name="Submit" value="Add New Post">
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