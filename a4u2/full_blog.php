<?php require_once("Include/DB.php"); ?>
<?php require_once("Include/Sessions.php"); ?>
<?php require_once("Include/Functions.php"); ?>
<?php require_once("cust/css/index.php"); ?>
<?php
if(isset($_POST["Submit"])){
$rating=mysql_real_escape_string($_POST["rating"]);
$Name=mysql_real_escape_string($_POST["Name"]);
$Email=mysql_real_escape_string($_POST["Email"]);
$Comment=mysql_real_escape_string($_POST["Comment"]);
$Suggestion=mysql_real_escape_string($_POST["suggestion"]);
date_default_timezone_set("Asia/Kolkata");
$CurrentTime=time();
//$DateTime=strftime("%Y-%m-%d %H:%M:%S",$CurrentTime);
$DateTime=strftime("%B-%d-%Y %H:%M:%S",$CurrentTime);
$DateTime;
$PostId=$_GET["id"];

if(empty($Name)||empty($Email) ||empty($Comment) ||empty($rating)){
    $_SESSION["ErrorMessage"]="All Fields are required";

}elseif(strlen($Comment)>500){
    $_SESSION["ErrorMessage"]="only 500  Characters are Allowed in Comment";

}elseif(strlen($Suggestion)>500){
    $_SESSION["ErrorMessage"]="only 500  Characters are Allowed in Suggestion";

}else{
    global $ConnectingDB;
    $PostIDFromURL=$_GET['id'];
        $Query="INSERT into comments (datetime,name,email,comment,suggestion,rating,approvedby,status,admin_panel_id)
    VALUES ('$DateTime','$Name','$Email','$Comment','$Suggestion','$rating','Pending','OFF','$PostIDFromURL')";
    $Execute=mysql_query($Query);
    if($Execute){
    $_SESSION["SuccessMessage"]="Comment Submitted Successfully";
    Redirect_to("full_blog.php?id={$PostId}");
    }else{
    $_SESSION["ErrorMessage"]="Something Went Wrong. Try Again !";
    Redirect_to("full_blog.php?id={$PostId}");

    }

}

}

?>
<!DOCTYPE>
<html>
    <head>

        <!-- Five star css -->
        <style type="text/css">
div{border: 1px solid blac }


fieldset, label { margin: 0; padding: 0; }
body{ margin: 20px; }
h1 { font-size: 1.5em; margin: 10px; }

/****** Style Star Rating Widget *****/

.rating {
  border: none;

}

.rating > input { display: none; }
.rating > label:before {
  margin: 5px;
  font-size: 1.25em;
  font-family: FontAwesome;
  display: inline-block;
  content: "\f005";
}

.rating > .half:before {
  content: "\f089";
  position: absolute;
}

.rating > label {
  color: white;
 float: right;
}

/***** CSS Magic to Highlight Stars on Hover *****/

.rating > input:checked ~ label, /* show gold star when clicked */
.rating:not(:checked) > label:hover, /* hover current star */
.rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

.rating > input:checked + label:hover, /* hover current star when changing rating */
.rating > input:checked ~ label:hover,
.rating > label:hover ~ input:checked ~ label, /* lighten current selection */
.rating > input:checked ~ label:hover ~ label { color: #FFED85;  }

    </style> <!-- end of five star css -->
        <head>
        <link rel="icon" type="text/css" href="img/logo2.jpeg">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>Ayurveda for you</title>

        <!--    Google Fonts-->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

        <!--Fontawesom-->
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <!--Animated CSS-->
        <link rel="stylesheet" type="text/css" href="css/animate.min.css">

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!--Bootstrap Carousel-->
        <link type="text/css" rel="stylesheet" href="css/carousel.css" />

        <link rel="stylesheet" href="css/isotope/style.css">

        <!--Main Stylesheet-->
        <link href="css/style.css" rel="stylesheet">
        <!--Responsive Framework-->
        <link href="css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>


        <title>Read Blog</title>
                <link rel="stylesheet" href="css/bootstrap.min.css">
                <script src="js/jquery-3.2.1.min.js"></script>
                <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/publicstyles.css">
               <style>


.FieldInfo{
    color: rgb(251, 174, 44);
    font-family: Bitter,Georgia,"Times New Roman",Times,serif;
    font-size: 1.2em;
}
.CommentBlock{
background-color:#F6F7F9;
}
.Comment-info{
    color: #365899;
    font-family: sans-serif;
    font-size: 1.1em;
    font-weight: bold;
    padding-top: 10px;


}
.comment{
    margin-top:-2px;
    padding-bottom: 10px;
    font-size: 1.1em
}


           </style>
    </head>
    <body style="font-family: times new Roman">


<!--Start Hedaer Section-->
        <section id="header">
            <div class="header-area">
                <div class="top_header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">

                            </div>
                            <div class="col-md-4">
                            </div>
                            <!--End of col-md-4-->
                            <div class="col-md-4">
                                <div class="social_icon text-right">
                                     <a href="https://www.facebook.com/Vanaushadhiilaj/"><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href="https://www.youtube.com/channel/UC7qKQDXCSbfokyp8Z6uhLvw"><i class="fa fa-youtube"></i></a>
                                </div>
                            </div>
                            <!--End of col-md-4-->
                        </div>
                        <!--End of row-->
                    </div>
                    <!--End of container-->
                </div>
                <!--End of top header-->
                <div class="header_menu text-center" data-spy="affix" data-offset-top="50" id="nav">
                    <div class="container">
                        <nav class="navbar navbar-default zero_mp ">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>

                                <div >
                                    <a class="navbar-brand custom_navbar-brand" href="index.php" class="logo" style="color: #43A906;font-size: 30px;padding-top: 30px;">Ayurveda for you</a>
                                </div>
                            </div>

                            <!--End of navbar-header-->

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse zero_mp" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav navbar-right main_menu">
                                    <li ><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
                                    <li class="active"><a href="blog.php">blog</a></li>
                                    <li ><a href="disclaimer.php">Disclaimer</a></li>
                                    <li ><a href="privacy_policy.php">Privacy Policies</a></li>
                                    <li ><a href="terms_&_conditions.php">Terms & Conditions</a></li>
                                    <li ><a href="about.php">About Us</a></li>
                                    <li><a href="contact.php">contact us</a></li>
                                    
                                </ul>
                            </div>
                            <!-- /.navbar-collapse -->
                        </nav>
                        <!--End of nav-->
                    </div>
                    <!--End of container-->

                </div>
                <!--End of header menu-->
            </div>
            <!--end of header area-->
        </section>
        <!--End of Header Section-->





<div class="container hide-txt"> <!--Container-->

    <div class="row"> <!--Row-->
        <div class="col-md-9"> <!--Main Blog Area-->
        <?php echo Message();
          echo SuccessMessage();
    ?>
        <?php
        global $ConnectingDB;
        if(isset($_GET["SearchButton"])){
            $Search=$_GET["Search"];
        $ViewQuery="SELECT * FROM admin_panel
        WHERE datetime LIKE '%$Search%' OR title LIKE '%$Search%'
        OR category LIKE '%$Search%' OR post LIKE '%$Search%'";
        }else{
            $PostIDFromURL=$_GET["id"];
        $ViewQuery="SELECT * FROM admin_panel WHERE id='$PostIDFromURL'
        ORDER BY datetime desc";}
        $Execute=mysql_query($ViewQuery);
        while($DataRows=mysql_fetch_array($Execute)){
            $PostId=$DataRows["id"];
            $DateTime=$DataRows["datetime"];
            $Title=$DataRows["title"];
            $Category=$DataRows["category"];
            $Admin=$DataRows["author"];
            $Image=$DataRows["image"];
            $Post=$DataRows["post"];
            $Video_link=$DataRows["video_link"];

        ?>
        <div class="pull-left blogpost thumbnail col-md-12">
                <img style="padding-top: 4%" class="img-responsive img-rounded"src="admin/images/<?php echo $Image;  ?>" >
        <div  dragable="true" class="caption">
            <h1 > <?php echo $Title; ?></h1>
        <p class="description">Category:<?php echo htmlentities($Category); ?> Published on
        <?php echo htmlentities($DateTime);?></p>
        <p class="post"><?php
        echo nl2br($Post); ?></p>

        </div>
        </div>
        <?php } ?>

        <br><br>
        <br><br>
<br><br><br><br><br>


 <!--Start of volunteer-->
        <section id="volunteer">
            <div class="container">
                <div class="row vol_area">
                    <div style="text-align: center;" class="col-md-9">
                        <div class="volunteer_content">
                            <h3>Join us with <span>Ayurveda</span></h3>
                            <p>Join us and help the world by sharing the information about ayurveda.</p>
                        </div>
                        <!--End of col-md-8-->
                    <div >
                        <div class="join_us">
                            <a href="blog.php" class="vol_cust_btn">More</a>
                        </div>
                    </div>
                    <!--End of col-md-3-->
                    </div>

                </div>
                <!--End of row and vol_area-->
            </div>
            <!--End of container-->
        </section>
        <!--end of volunteer-->

<br><br>  <br>
<div style="text-align: center;"><!--Start Video Section -->
<?php
    if (strlen($Video_link)==0 ) {

    }
    else{
        preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $Video_link, $matches);
        $id = $matches[1];
        $width = '80%';
        $height = '60%';
?>
<iframe id="ytplayer" type="text/html" width="<?php echo $width ?>" height="<?php echo $height ?>"
    src="https://www.youtube.com/embed/<?php echo $id ?>?rel=0&showinfo=0&color=white&iv_load_policy=3"
    frameborder="0" allowfullscreen></iframe>

   <?php } ?>


</div><!--End Video Section -->


      <br><br>  <br>
 <span class="col-comment"><b>Share your thoughts about this post</b></span>


<div><br>
<form action="full_blog.php?id=<?php echo $PostId; ?>" method="post" enctype="multipart/form-data">

<fieldset style="background-color: #D4D4D4" class="rating ">

    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
    <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
    <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="prety Nice - 3.5 stars"></label>
    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Nice - 3 stars"></label>
    <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kindly bad - 2.5 stars"></label>
    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kindly bad - 2 stars"></label>
    <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="bad - 1.5 stars"></label>
    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="very bad - 1 star"></label>
    <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="very very bad - 0.5 stars"></label>
   <div class="col-comment">Rate This Blog :</div>
</fieldset>

<fieldset >

    <div class=" col-comment">
 	   <label class="pull-left" for="Name"><span class="col-comment">Name</span></label>
    <input class="form-control" type="text" name="Name" id="Name" placeholder="Name">
    </div>
    <div class="col-comment">
    <label for="Email"><span class="col-comment">Email</span></label>
    <input class="form-control" type="email" name="Email" id="Email" placeholder="email">
    </div>
    <div class="col-comment">
    <label for="commentarea"><span class="col-comment">Comment</span></label>
    <textarea class="form-control" name="Comment" id="commentarea"></textarea>
    <br>

    <div class="col-comment">
    <label for="commentarea"><span class="col-comment">Any Suggestion</span></label>
    <textarea class="form-control" name="suggestion" id="commentarea"></textarea>
    <br>

<input class="btn btn-success" type="Submit" name="Submit" value="Submit">
    </fieldset>
    <br>
        </form>
</div>




<?php
$ConnectingDB;
$PostIdForComments=$_GET["id"];
$ExtractingCommentsQuery="SELECT * FROM comments
WHERE admin_panel_id='$PostIdForComments' AND status='ON' ";
$Execute=mysql_query($ExtractingCommentsQuery);
while($DataRows=mysql_fetch_array($Execute)){
    $CommentID=$DataRows["id"];
    $CommentDate=$DataRows["datetime"];
    $CommenterName=$DataRows["name"];
    $Comments=$DataRows["comment"];
?>

<div class="CommentBlock">
    <img style="margin-left: 10px; margin-top: 10px;" class="pull-left" src="admin/images/comment.png" width=70px; height=70px;>
    <p style="margin-left: 90px;" class="Comment-info"><?php echo $CommenterName; ?></p>
    <p style="margin-left: 90px;"class="description"><?php echo $CommentDate; ?></p>
    <p style="margin-left: 90px;" class="Comment"><?php echo nl2br($Comments); ?></p>
    <p style="margin-left: 90px;" class="Comment">

        


    </p>
</div>

    <hr>
<?php } ?>



</div> <!--Main Blog Area Ending-->

<div class="col-md-3"> <!--Start of Side Bar -->
    <div> <!--Start of Search Bar -->
        <div style="margin-top: 20%" >

            <h3 style="margin-bottom: 5%;text-align: center;">Search here</h3>
                <form action="blog.php" class="navbar-form navbar-right">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search" name="Search" >
                    </div>
                    <button class="btn btn-success" name="SearchButton">Go</button>
                </form>
        </div>
</div><!--End of Search Bar -->
 <!--Start of Related Post -->
    <div style="margin: 30% 0% 0% 0%;text-align: center;" >
        <h3 style="">Related Posts</h3>
    </div>


     <?php
$ConnectingDB;
$ViewQuery="SELECT * FROM admin_panel WHERE category='$Category' ORDER BY id desc LIMIT 0,5";
$Execute=mysql_query($ViewQuery);
while($DataRows=mysql_fetch_array($Execute)){
    $Id=$DataRows["id"];
    $Title=$DataRows["title"];
    $DateTime=$DataRows["datetime"];
    $Image=$DataRows["image"];
    if(strlen($DateTime)>11){$DateTime=substr($DateTime,0,12);}
    ?>

         <div class="pull-left" style="margin-bottom: 5%">   <!-- Area of latest blog -->

            <div class="pull-left col-md-12">
<img class="pull-left" style="margin-bottom: 10%; margin-top: 10%; margin-left: 0%;max-width: 100%;max-height: 100%" src="admin/images/<?php echo $Image ?>" width=100%; height=100%;>

            </div>
            <div >
                <p style=" padding-top: 3%;padding-right: 3%">
                    <h4><a href="full_blog.php?id=<?php echo $Id;?>"><?php if(strlen($Title)>30){$Title=substr($Title,0,30).'....';} echo $Title; ?> </a> </h4>
<span class="clock"><i class="fa fa-clock-o"></i></span>
                        <span class="time"> <?php  echo $DateTime; ?> </span>
                </p>
            </div>
            <div style="text-align: center;border-bottom: 1px solid #99AAAB" class="col-md-12">
                <p >
                        
                </p>
            </div>

<?php } ?>

</div> <!-- End Area of Related blog -->

<div> <!--Start of Latest Post -->
    <div style="margin: 30% 0% 0% 0%;text-align: center;" >
        <h3 style="">Latest Posts</h3>
    </div>


     <?php
$ConnectingDB;
$ViewQuery="SELECT * FROM admin_panel ORDER BY id desc LIMIT 0,5";
$Execute=mysql_query($ViewQuery);
while($DataRows=mysql_fetch_array($Execute)){
    $Id=$DataRows["id"];
    $Title=$DataRows["title"];
    $DateTime=$DataRows["datetime"];
    $Image=$DataRows["image"];
    if(strlen($DateTime)>11){$DateTime=substr($DateTime,0,12);}
    ?>

         <div class="pull-left" style="margin-bottom: 5%">   <!-- Area of latest blog -->

            <div class="pull-left col-md-12">
<img class="pull-left" style="margin-bottom: 10%; margin-top: 10%; margin-left: 0%;max-width: 100%;max-height: 100%" src="admin/images/<?php echo $Image ?>" width=100%; height=100%;>

            </div>
            <div >
                <p style=" padding-top: 3%;padding-right: 3%">
                    <h4><a href="full_blog.php?id=<?php echo $Id;?>"><?php if(strlen($Title)>30){$Title=substr($Title,0,30).'....';} echo $Title; ?> </a> </h4>
<span class="clock"><i class="fa fa-clock-o"></i></span>
                        <span class="time"> <?php  echo $DateTime; ?> </span>
                </p>
            </div>
            <div style="text-align: center;border-bottom: 1px solid #99AAAB" class="col-md-12">
                <p >
                        
                </p>
            </div>

<?php } ?>

</div> <!-- End Area of latest blog -->

<div></div>
    <div style="text-align: center; color: black; margin-top: 10%;margin-bottom: 7%;">
        <h3>Categories</h3>
    </div>

    <?php
global $ConnectingDB;
$ViewQuery="SELECT * FROM category ORDER BY id desc";
$Execute=mysql_query($ViewQuery);
while($DataRows=mysql_fetch_array($Execute)){
    $Id=$DataRows['id'];
    $Category=$DataRows['name'];
?>
<div style="text-align: center;font-size: 20px">
    <a href="blog.php?Category=<?php echo $Category; ?>">
<span id="heading" "><?php echo $Category."<br>"; ?></span>
</a>
<?php } ?>
</div>
</div><!--End of Side Bar -->


    </div> <!--Row Ending-->

</div><!--Container Ending-->

    </body>
<!-- Start Script on click reply -->
<?php
if (isset($_POST["Submitcmd"])) {
    $cmdemail = mysql_real_escape_string('cmdemail');
    $cmdcomment = mysql_real_escape_string('cmdcomment');

    if (empty($cmdemail) || empty($cmdcomment)) {
        echo "Please filled out all the fields";
    }
    else {
        $Insertcmd = "INSERT INTO comments(cmd_email,cmd_cmd) VALUES('$cmdemail','$cmdcomment') WHERE id = $CommentID ";
        $exeInsertcmd = mysql_query($Insertcmd);
        if ($exeInsertcmd) {
            echo "Successfully";
        }
        else {
            echo "not at all";
        }
    }

}
 ?>
<!-- Loading signup data -->
<!--  // ORDER BY id desc LIMIT 0,5 -->

<?php $idcmddata = 10; ?>
<!-- Closing signup data -->
<script type="text/javascript">
    function reply(idcmd) {
    var sndx = document.getElementById(idcmd);

    var data =  idcmd;
methodname="post";
     pagename="cust/test7.php?cmdid="+data;
     obj =new XMLHttpRequest();
     obj.open(methodname,pagename,true);
     obj.send();
     obj.onreadystatechange=function()
    {
      if(obj.readyState==4)
      {
        if(obj.responseText==0)
        {

        }
        else
        {

        }
      }
    }

    var sndxy = sndx.innerHTML=' <div style="margin-left: 11%;"><form id="frm" action="full_blog.php?id=<?php echo $PostIDFromURL ?> " method="post"><table><tr><td><label class="pull-left" for="Name"><span class="col-comment">Email</span></td></tr><tr><td><input class="form-control" type="email"name="cmdemail" onmouseleave="grabtext(value)"></td></tr> </label></table><span class="col-comment">Comment</span><textarea class="form-control" type="text" value="ajs" name="cmdcomment" id=" '+idcmd+'" onmouseleave="grabtext(value)"></textarea> <input style="margin: 1%" class="btn btn-success" type="button" name="Submitcmd" value="Submit" onclick="btnclick('+idcmd+')"></form><span id="sp1"></span> <span class="col-comment">Comments</span><?php

$ConnectingDB;
$VData=" SELECT * FROM signup WHERE db_name='<script>document.writeln(idcmd);</script>' ";
$Execute=mysql_query($VData);
while($DataRows=mysql_fetch_array($Execute)){
    $CId=$DataRows["db_name"];
    $CEmail=$DataRows["db_email"];
    $CComment=$DataRows["db_pass"]; ?>
    <table style ="margin: 20px"><tr><td rowspan="2"><img style="margin:10px" class="pull-left" src="admin/images/comment.png" width=50px; height=50px;></td><td class="tbl-e"><?php echo("$CEmail") ?></td></tr><tr><td   style="margin : 10px" class="tbl-c"><?php echo("$CComment") ?></td></tr></table><?php  } ?> </div> ' ;
    }

// var common = "";

    function btnclick(id) {

 var x = document.getElementById("frm");
  var text = "";
  var text2 = "";
  var text3 = id;
  var i;
  for (i = 0; i < x.length-2;i++) {
    text += x.elements[0].value;
    text2 += x.elements[1].value;
}
    alert(text);
    alert(text2);
    alert(text3);

var vSP=document.getElementById('sp1');
var data =  text+"brvalue"+text2+"brvalue"+text3;
alert(data);
methodname="post";
     pagename="cust/test7.php?qun="+data;
     obj =new XMLHttpRequest();
     obj.open(methodname,pagename,true);
     obj.send();
     obj.onreadystatechange=function()
    {
      if(obj.readyState==4)
      {
        if(obj.responseText==0)
        {
          vSP.innerHTML="data inserted successfully";
          vSP.style.color="green";
        }
        else
        {
          vSP.innerHTML="Kuch to Gadbad hai daya";
          vSP.style.color="red";
          vtitle.value="";
        }
      }
    }
}

</script>
<!-- End Script on click reply -->
</html>
