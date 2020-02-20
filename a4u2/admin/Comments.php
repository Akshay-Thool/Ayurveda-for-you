<?php require_once("Include/Sessions.php"); ?>
<?php require_once("Include/Functions.php"); ?>
<?php require_once("Include/DB.php"); ?>
<?php Confirm_Login(); ?>
<!DOCTYPE>

<html>
	<head>
		<title>Comments</title>
                <link rel="stylesheet" href="../css/bootstrap.min.css">
                <script src="../js/jquery-3.2.1.min.js"></script>
                <script src="../js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="../css/adminstyles.css">
<style>

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
	<br><br>
	<ul id="Side_Menu" class="nav nav-pills nav-stacked">
	<li ><a href="Dashboard.php">
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
	<li class="active"><a href="Comments.php">
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
	<div class="col-sm-10"> <!--Main Area-->
	<br>
	<div><?php echo Message();
	      echo SuccessMessage();
	?></div>	
	<h1>Un-Approved Comments</h1>
	<div class="table-responsive">
		<table class="table table-striped table-hover">
	<tr>
	<th>No.</th>
	<th>Name</th>
	<th> Date</th>
	<th>Comment</th>
	<th>Rating</th>
	<th>Suggestion</th>
	<th>Approve</th>
	<th>Delete Comment</th>
	<th>Details</th>
	</tr>
<?php
$ConnectingDB;
$Query="SELECT * FROM comments WHERE status='OFF' ORDER BY id desc";
$Execute=mysql_query($Query);
$SrNo=0;
while($DataRows=mysql_fetch_array($Execute)){
	$CommentId=$DataRows['id'];
	$DateTimeofComment=$DataRows['datetime'];
	$PersonName=$DataRows['name'];
	$PersonComment=$DataRows['comment'];
	$Rating=$DataRows['rating'];
	$Suggestion=$DataRows['suggestion'];
	$CommentedPostId=$DataRows['admin_panel_id'];
	$SrNo++;

if(strlen($PersonName) >10) { $PersonName = substr($PersonName, 0, 10).'..';}
	


?>
<tr>
	<td><?php echo htmlentities($SrNo); ?></td>
	<td style="color: #5e5eff;"><?php echo htmlentities($PersonName); ?></td>
	<td><?php echo htmlentities($DateTimeofComment); ?></td>
	<td><?php echo htmlentities($PersonComment); ?></td>
	<td><?php echo htmlentities($Rating); ?></td>
	<td><?php echo htmlentities($Suggestion); ?></td>
	<td><a href="ApproveComments.php?id=<?php echo $CommentId; ?>">
	<span class="btn btn-success">Approve</span></a></td>
	<td><a href="DeleteComments.php?id=<?php echo $CommentId;?>">
	<span class="btn btn-danger">Delete</span></a></td>
	<td><a href="FullPost.php?id=<?php echo $CommentedPostId; ?>" target="_blank">
	<span class="btn btn-primary">Live Preview</span></a></td>
</tr>
<?php } ?>			
			
			
		</table>
	</div>
	    <h1>Approved Comments</h1>
	<div class="table-responsive">
		<table class="table table-striped table-hover">
	<tr>
	<th>No.</th>
	<th>Name</th>
	<th>Date & Time</th>
	<th>Comment</th>
	<th>Rating</th>
	<th>Suggestions</th>
	<th>Revert Approval </th>
	<th>Dis-approve</th>
	<th>Delete</th>
	<th>Preview</th>
	</tr>
<?php
$ConnectingDB;
$Query="SELECT * FROM comments WHERE status='ON' ORDER BY id desc";
$Execute=mysql_query($Query);
$SrNo=0;
while($DataRows=mysql_fetch_array($Execute)){
	$CommentId=$DataRows['id'];
	$DateTimeofComment=$DataRows['datetime'];
	$PersonName=$DataRows['name'];
	$PersonComment=$DataRows['comment'];
	$ApprovedBy=$DataRows['approvedby'];
	$Rating=$DataRows['rating'];
	$Suggestions=$DataRows['suggestion'];
	$CommentedPostId=$DataRows['admin_panel_id'];
	$SrNo++;
if(strlen($PersonName) >10) { $PersonName = substr($PersonName, 0, 10).'..';}
if(strlen($DateTimeofComment)>18){$DateTimeofComment=substr($DateTimeofComment,0,18);}


?>
<tr>
	<td><?php echo htmlentities($SrNo); ?></td>
	<td style="color: #5e5eff;"><?php echo htmlentities($PersonName); ?></td>
	<td><?php echo htmlentities($DateTimeofComment); ?></td>
	<td><?php echo htmlentities($PersonComment); ?></td>
	<td><?php echo htmlentities($Rating); ?></td>
	<td><?php echo htmlentities($Suggestions); ?></td>
	<td><?php echo htmlentities($ApprovedBy); ?></td>
	<td><a href="DisApproveComments.php?id=<?php echo $CommentId;?>">
	<span class="btn btn-warning">Dis-Approve</span></a></td>
	<td><a href="DeleteComments.php?id=<?php echo $CommentId;?>">
	<span class="btn btn-danger">Delete</span></a></td>
	<td><a href="FullPost.php?id=<?php echo $CommentedPostId; ?>"target="_blank">
	<span class="btn btn-primary">Live Preview</span></a></td>
</tr>
<?php } ?>			
			
			
		</table>
	</div>
	    
	    
	    
	</div> <!-- Ending of Main Area-->
	
</div> <!-- Ending of Row-->
	
</div> <!-- Ending of Container-->
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