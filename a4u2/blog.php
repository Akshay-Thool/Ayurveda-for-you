<?php require_once("Include/DB.php"); ?>
<?php require_once("Include/Sessions.php"); ?>
<?php require_once("Include/Functions.php"); ?>
<?php require_once("cust/css/index.php"); ?>

<!DOCTYPE html>
<html lang="en">

    <head>
        
        <link href="cust/css/cust_css.css" rel="stylesheet">
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

    <body data-spy="scroll" data-target="#header">

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


        <!--Start of blog-->
        <section >
            <div class="container">
               
                <!--End of row-->
                <div class="col-md-9">
<!-- Start Session -->
<div class="col-md-12" >        
    <div style=" text-align: center;"><br><h3><?php echo Message(); echo SuccessMessage(); ?></h3>  </div>
</div>
<!--Stop Session -->
 <!--Start of blog-->
        <section id="blog" style="margin-bottom: 10%">
            <div class="container">
                
                <div class="col-md-9">

                     <?php
         global $ConnectingDB;
        // Query when Search Button is Active
        if(isset($_GET["SearchButton"])){
            $Search=$_GET["Search"];

        $ViewQuery="SELECT * FROM admin_panel
        WHERE datetime LIKE '%$Search%' OR title LIKE '%$Search%'
        OR category LIKE '%$Search%' OR post LIKE '%$Search%' ORDER BY id desc";
        }

        // QUery When Category is active URL Tab
        elseif(isset($_GET["Category"])){
        $Category=$_GET["Category"];
        $ViewQuery="SELECT * FROM admin_panel WHERE category='$Category' ORDER BY id desc";
        }

        // Query When Pagination is Active i.e Blog.php?Page=1
        elseif(isset($_GET["Page"])){
        $Page=$_GET["Page"];
        if($Page==0||$Page<1){
            $ShowPostFrom=0;
        }else{
        $ShowPostFrom=($Page*6)-6;}
    $ViewQuery="SELECT * FROM admin_panel ORDER BY id desc LIMIT $ShowPostFrom,6";
        }
        // The Default Query for Blog.php Page
        else{

                    $ViewQuery ="SELECT * FROM admin_panel ORDER by DateTime desc limit 0,6 "; }
                    $Execute=mysql_query($ViewQuery);
                    $SrNo=0;
                    while($DataRows=mysql_fetch_array($Execute)) {
                        $Id=$DataRows["id"];
                        $DateTime=$DataRows["datetime"];
                        $Title=$DataRows["title"];
                        $Category=$DataRows["category"];
                        $Admin=$DataRows["author"];
                        $Image=$DataRows["image"];
                        $Post=$DataRows["post"];
                        $SrNo++;
    if(strlen($DateTime)>11){$DateTime=substr($DateTime,0,12);}
                    ?>

                    <div class="col-md-4 zoom" id="cust-blog" style="margin-bottom:18%">
                        <div class="blog_news ">

                            <div class="single_blog_item">
                                <div id="gallery_show" class="thumbnail img-back col-sm-12">
                                    <div class="blog_img">
                                        <img   class="img-responsive img-rounded"
                                        src="admin/images/<?php echo $Image; ?>">
                                    </div>
                                 </div>
                            </div>

                            <div>
                                <div  class="blog_content " style="padding-top: 5%;text-align: center;">
                                    <a  href="full_blog.php?id=<?php echo $Id; ?>"><h3 class="zoom-txt" ><?php echo $Title; ?></h3></a>
                                    <div class="expert">
                                        <div class="left-side text-left" style="padding-top: 5%;text-align: center;">
                                            <p class="left_side">
                                                <span class="clock"><i class="fa fa-clock-o"></i></span>
                                                <span class="time"><?php echo $DateTime; ?></span>
                                                <span class="admin"><i class="fa fa-user"></i><?php echo "  ". $Admin ?></span></a>
                                            </p>

                                        </div>
                                    </div>

                                    <p class="blog_news_content"><?php if(strlen($Post)>30){$Post=substr($Post,0,19).'..';}
                                                                        echo $Post;
                                                                echo "$Post"; ?> </p>
                                    <a href="" class="blog_link">read more</a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!--End of col-md-6-->
                <?php      } ?>


                </div>
                <!--End of row-->
            </div>
            <!--End of container-->

        </section>
        <!-- end of blog-->


<!--Start of Navigation -->
<div style="text-align: center;" class=" col-md-12">     
           
<nav>
            <ul class="pagination pagination-template d-flex justify-content-center">
    <!-- Creating backward Button -->
    <?php
    if(isset($Page))
    {
           if($Page>1){
        ?>
        <li><a href="Blog.php?Page=<?php echo $Page-1; ?>"> &laquo; </a></li>
         <?php        }
    } ?>            
        <?php
        global $ConnectingDB;
        $QueryPagination="SELECT COUNT(*) FROM admin_panel";
        $ExecutePagination=mysql_query($QueryPagination);
        $RowPagination=mysql_fetch_array($ExecutePagination);
          $TotalPosts=array_shift($RowPagination);
         // echo $TotalPosts;
          $PostPagination=$TotalPosts/3;
          $PostPagination=ceil($PostPagination);
         // echo $PostPerPage;
        
        for($i=1;$i<=$PostPagination;$i++){
    if(isset($Page)){
        if($i==$Page){
        ?>
        <li class="active"><a href="Blog.php?Page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
        <?php
        }else{ ?>
        <li><a href="blog.php?Page=<?php echo $i; ?>"><?php echo $i; ?></a></li>    
        <?php
        }
    }
        } ?>
        <!-- Creating Forward Button -->
        <?php
    if(isset($Page))
    {
           if($Page+1<=$PostPagination){
        ?>
        <li><a href="blog.php?Page=<?php echo $Page+1; ?>"> &raquo; </a></li>
         <?php        }
    } ?>    
        </ul>
        </nav>
<ul class="pagination pull-right pagination-lg">
                        <li><a href="Blog.php?Page=<?php echo "1" ?>"> &raquo;More Posts </a></li>
            </ul>
    </div><!--End of Navigation -->

</div><!--end of blog space -->


<div class="col-md-3 hide-txt"> <!--Start of Side Bar -->
<div> <!--Start of Search Bar -->
   <div style="margin-top: 20%" >

        <h3 style="margin-bottom: 5%;text-align: center;" >Search here</h3>
           <form action="blog.php" class="navbar-form navbar-right">
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Search" name="Search" >
        </div>
             <button class="btn btn-success" name="SearchButton">Go</button>
            
        </form>
        </div>
</div><!--End of Search Bar -->  

<div> <!--Start of Latest Post -->
    <div style="margin: 10% 0% 10%;text-align: center;"  >
        <h3 style="">Latest Posts</h3>
 </div><!--End of Latest Post -->     

       


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

         <div class="pull-left" style="margin-bottom: 5%;text-align: center;">   <!-- Area of latest blog -->
            
            <div class="pull-left col-md-12">
<img class="pull-left" style="margin-bottom: 10%; margin-top: 10%; margin-left: 0%;max-width: 100%;max-height: 100%" src="admin/images/<?php echo $Image ?>" width=100%; height=100%;>
                 <a href="FullPost.php?id=<?php echo $Id;?>">
            </div>  
            <div >


                <p style=" padding-top: 3%;padding-right: 3%">
                    <h4><a href="full_blog.php?id=<?php echo $Id ?>"><?php if(strlen($Title)>30){$Title=substr($Title,0,30).'....';} echo $Title; ?></a> </h4>
                </p>
            </div>
            <div>
                <p class="left_side">
                        <span class="clock"><i class="fa fa-clock-o"></i></span>
                        <span class="time"> <?php  echo $DateTime; ?> </span>
                </p>
            </div>
        
        </div> <!-- End Area of latest blog --> 
<?php } ?>
        
        </div> <!-- End Area of latest blog --> 

<div>_________________________________</div>
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
<div style="text-align: center;">
    <a href="Blog.php?Category=<?php echo $Category; ?>">
<span id="heading" "><?php echo $Category."<br>"; ?></span>
</a>
<?php } ?>        
</div>
   



</div><!--End of Side Bar -->










        </div>
        <!--End of row-->
    </div>
    <!--End of container-->
</section>
<!-- end of blog-->


        

        <!--Start of footer-->
        <section id="footer">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12" style="text-align: center;">
                        <div class="copyright">
                            All rights reserved @ www.ayurved4u.com ©2018-2019
                        </div>
                    </div>
                    
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </section>
        <!--End of footer-->



        <!--Scroll to top-->
        <a href="#" id="back-to-top" title="Back to top">&uarr;</a>
        <!--End of Scroll to top-->


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>-->
        <script src="js/jquery-1.12.3.min.js"></script>

        <!--Counter UP Waypoint-->
        <script src="js/waypoints.min.js"></script>
        <!--Counter UP-->
        <script src="js/jquery.counterup.min.js"></script>

       
    

        <!--Isotope-->
        <script src="js/isotope/min/scripts-min.js"></script>
        <script src="js/isotope/cells-by-row.js"></script>
        <script src="js/isotope/isotope.pkgd.min.js"></script>
        <script src="js/isotope/packery-mode.pkgd.min.js"></script>
        <script src="js/isotope/scripts.js"></script>


        <!--Back To Top-->
        <script src="js/backtotop.js"></script>


        <!--JQuery Click to Scroll down with Menu-->
        <script src="js/jquery.localScroll.min.js"></script>
        <script src="js/jquery.scrollTo.min.js"></script>
        <!--WOW With Animation-->
        <script src="js/wow.min.js"></script>
        <!--WOW Activated-->
        <script>
            new WOW().init();
        </script>


        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Custom JavaScript-->
        <script src="js/main.js"></script>
    </body>

</html>

