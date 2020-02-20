<?php require_once("Include/Functions.php"); ?>
<?php require_once("Include/DB.php"); ?>
<!-- <?php Login(); ?>  -->


<!DOCTYPE>

<html>
	<head>
		<title>Admin Dashboard</title>
                <link rel="stylesheet" href="../css/bootstrap.min.css">
                <script src="../js/jquery-3.2.1.min.js"></script>
                <script src="../js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="../css/adminstyles.css">
<style>
	th{
	color:black;
	background-color: #ede9ed;
	
}

</style>
                
	</head>
	<body>


<!--Start Hedaer Section-->

		<div style="background-color: #EDE9ED; font-size: 200%;margin: %;text-align: center;padding: 3%">
			<a style="color: #43A906;" href="">Ayurved for you</a> 
		</div> 
              
<!--End of Header Section-->
				<div style="text-align: center;"> <!--Start of Session Message -->
					<h3><?php echo SuccessMessage();?></h3>
				</div> <!--End of Session Message -->


<div class="container-fluid" >
<div class="row">
	
	<div class="col-sm-2" >
	<br><br>
	<ul id="Side_Menu" class="nav nav-pills nav-stacked">
	<li class="active">
	<a href="Dashboard.php">
	<span class="glyphicon glyphicon-th"></span>
	&nbsp;Dashboard</a></li>
	<li><a href="AddNewPost.php">
	<span class="glyphicon glyphicon-list-alt"></span>
	&nbsp;Add New Post</a></li>
	<li><a href="Categories.php">
	<span class="glyphicon glyphicon-tags"></span>
	&nbsp;Categories</a></li>
	<li><a href="Admins.php">
	<span class="glyphicon glyphicon-user"></span>
	&nbsp;Manage Admins</a></li>
	<li><a href="Comments.php">
	<span class="glyphicon glyphicon-comment"></span>
	&nbsp;Comments
	<li><a href="mails.php">
	<span class="glyphicon glyphicon-tags"></span>
	&nbsp;Mails</a></li>
<?php
$ConnectingDB;
$QueryTotal="SELECT COUNT(*) FROM comments WHERE status='OFF'";
$ExecuteTotal=mysql_query($QueryTotal);
$RowsTotal=mysql_fetch_array($ExecuteTotal);
$Total=array_shift($RowsTotal);
if($Total>0){
?>
<span class="label pull-right label-warning">
<?php echo $Total;?>
</span>
		
<?php } ?>
	</a>	
	</li>
	
	<li><a href="Logout.php">
	<span class="glyphicon glyphicon-log-out"></span>
	&nbsp;Logout</a></li>	
		
	</ul>
	
	
	
	
	</div> <!-- Ending of Side area -->
	<div class="col-sm-10"> <!--Main Area-->
	<div style="font-size: 200%">Admin Panel</div> 
	
	
	
<div class="table-responsive">
	<table class="table table-striped table-hover">
		<tr>
			<th>No</th>
			<th>Post Title</th>
			<th>Date &Time</th>
			<th>Author</th>
			<th>Category</th>
			<th>Banner</th>
			<th>Comments</th>
			<th>Action</th>
			<th>Details</th>
			
		</tr>
<?php
$ConnectingDB;
$ViewQuery="SELECT * FROM admin_panel ORDER BY id desc;";
$Execute=mysql_query($ViewQuery);
$SrNo=0;
while($DataRows=mysql_fetch_array($Execute)){
	$Id=$DataRows["id"];
	$DateTime=$DataRows["datetime"];
	$Title=$DataRows["title"];
	$Category=$DataRows["category"];
	$Admin=$DataRows["author"];
	$Image=$DataRows["image"];
	$Post=$DataRows["post"];
	$SrNo++;
	?>
	<tr>
		
	<td><?php echo $SrNo; ?></td>
	<td style="color: #5e5eff;"><?php
	if(strlen($Title)>19){$Title=substr($Title,0,19).'..';}
	echo $Title;
	?></td>
	<td><?php
	if(strlen($DateTime)>12){$DateTime=substr($DateTime,0,12);}
	echo $DateTime;
	?></td>
	<td><?php
	if(strlen($Admin)>9){$Admin=substr($Admin,0,9);}
	echo $Admin; ?></td>
	<td><?php
	if(strlen($Category)>10){$Category=substr($Category,0,10);}
	echo $Category;
	?></td>
	<td><img src="images/<?php echo $Image; ?>" width="170px"; height="50px"></td>
	<td>
<?php
$ConnectingDB;
$QueryApproved="SELECT COUNT(*) FROM comments WHERE admin_panel_id='$Id' AND status='ON'";
$ExecuteApproved=mysql_query($QueryApproved);
$RowsApproved=mysql_fetch_array($ExecuteApproved);
$TotalApproved=array_shift($RowsApproved);
if($TotalApproved>0){
?>
<span class="label pull-right label-success">
<?php echo $TotalApproved;?>
</span>
		
<?php } ?>

<?php
$ConnectingDB;
$QueryUnApproved="SELECT COUNT(*) FROM comments WHERE admin_panel_id='$Id' AND status='OFF'";
$ExecuteUnApproved=mysql_query($QueryUnApproved);
$RowsUnApproved=mysql_fetch_array($ExecuteUnApproved);
$TotalUnApproved=array_shift($RowsUnApproved);
if($TotalUnApproved>0){
?>
<span class="label  label-danger">
<?php echo $TotalUnApproved;?>
</span>
		
<?php } ?>
		
		
	</td>
	<td>
	<a href="EditPost.php?Edit=<?php echo $Id; ?>">
	<span class="btn btn-warning">Edit</span>
	</a>
	<a href="DeletePost.php?Delete=<?php echo $Id; ?>">
	<span class="btn btn-danger">Delete</span>
	</a>
	</td>
	<td>
	<a href="../full_blog.php?id=<?php echo $Id; ?>" target="_blank">
	<span class="btn btn-primary"> Live Preview</span>
	</a>
	</td>
	</tr>
	
	
<?php } ?>






	</table>
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
                            <p>All Rights Reserved<br> ©2018-2020
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