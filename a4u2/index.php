<?php require_once("Include/DB.php"); ?>
<?php require_once("Include/Sessions.php"); ?>
<?php require_once("Include/Functions.php"); ?>
<?php require_once("cust/css/index.php"); ?>

<!DOCTYPE html>
<html lang="en">

    <head>


        <title>Ayurveda For You</title>

        <link rel="icon" type="text/css" href="img/logo2.jpeg">

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
        <link href="cust/css/cust_css.css" rel="stylesheet">
        <!--Responsive Framework-->
        <link href="css/responsive.css" rel="stylesheet">



<!-- <style type="text/css">div{border: 1px solid black;}</style>
 -->    </head>

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
                                	<a class="navbar-brand custom_navbar-brand" href="index.php" class="logo" style="color: #43A906;font-size: 40px;padding-top: 30px;"><b>Ayurveda For You</b></a>
                                </div>
                            </div>

                            <!--End of navbar-header-->

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse zero_mp" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav navbar-right main_menu">
                                    <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
                                    <li><a href="blog.php">blog</a></li>
                                    <li><a href="disclaimer.php">Disclaimer</a></li>
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
        <!--End of Hedaer Section-->



        <!--Start of slider section-->
        <section id="slider">
            <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="slider_overlay">
                            <img src="img/img1.jpg" alt="...">
                            <div class="carousel-caption">
                                <div class="slider_text">
                                    <h3>Blog</h3>
                                    <h2>Ayurved for You</h2>
                                    <p>Medicine information about Ayurveda.</p>
                                    <a href="index.php#blog" class="custom_btn">Read  More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of item With Active-->
                    <div class="item">
                        <div class="slider_overlay">
                            <img src="img/img2.jpg" alt="...">
                            <div class="carousel-caption">
                                <div class="slider_text">
                                   <h3>Blog</h3>
                                    <h2>Ayurved for You</h2>
                                    <p>Medicine information about Ayurveda.</p>
                                    <a href="index.php#blog" class="custom_btn">Read  More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of Item-->
                    <div class="item">
                        <div class="slider_overlay">
                            <img src="img/img3.jpg" alt="...">
                            <div class="carousel-caption">
                                <div class="slider_text">
                                   <h3>Blog</h3>
                                    <h2>Ayurved for You</h2>
                                    <p>Medicine information about Ayurveda.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of item-->
                </div>
                <!--End of Carousel Inner-->
            </div>
        </section>
        <!--end of slider section-->



        <div class="container">
        	<div class="row">
        		<div class="col-md-12" style="padding-top: 10%">

        		</div>
        	</div>
        </div>


        <!--Start of volunteer-->
        <section id="volunteer">
            <div class="container">
                <div class="row vol_area">
                    <div class="col-md-8">
                        <div class="volunteer_content">
                            <h3>Join us with <span>Ayurveda</span></h3>
                            <p>Join us and help the world by sharing the information about ayurveda.</p>
                        </div>
                    </div>
                    <!--End of col-md-8-->
                    <div class="col-md-3 col-md-offset-1">
                        <div class="join_us">
                            <a href="index.php#blog" class="vol_cust_btn">More</a>
                        </div>
                    </div>
                    <!--End of col-md-3-->
                </div>
                <!--End of row and vol_area-->
            </div>
            <!--End of container-->
        </section>
        <!--end of volunteer-->


<div class="">

        <!--Start of blog-->
        <section id="blog" style="margin-bottom: 10%">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="latest_blog text-center">
                            <h2>latest blog</h2>
                            <p>We are uploading daily latest blogs about Ayurveda following are some latest blogs about ayurveda.</p>
                        </div>
                    </div>
                </div>
                <!--End of row-->
                <div class="row">

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

                    $ViewQuery ="SELECT * FROM admin_panel ORDER by DateTime desc limit 0,3 "; }
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
<ul class="pagination pull-right pagination-lg">
                        <li><a href="Blog.php?Page=<?php echo "1" ?>"> &raquo;More Posts </a></li>
            </ul>
        </section>
        <!-- end of blog-->



</div>



        <!--Start of contact-->
        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="colmd-12">
                        <div class="contact_area text-center">
                            <h3>get in touch</h3>

                        </div>
                    </div>
                </div>
                <!--End of row-->
                <div class="row">
                    <div class="col-md-6">
                        <div>
                        	<img width="80%" height="60%" src="img/logo.jpeg">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="msg">
                            <div class="msg_title">
                                <h5>Drop A Message</h5>
                            </div>
                            <div class="form_area">
                                <!-- CONTACT FORM -->
                                <div class="contact-form wow fadeIn animated" data-wow-offset="10" data-wow-duration="1.5s">
                                    <div id="message"></div>
                                    <form action="scripts/contact.php" class="form-horizontal contact-1" role="form" name="contactform" id="contactform">
                                        <div class="form-group">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <input type="subject" class="form-control" id="subject" placeholder="Subject *">
                                                <div class="text_area">
                                                    <textarea name="contact-message" id="msg" class="form-control" cols="30" rows="8" placeholder="Message"></textarea>
                                                </div>
                                                <button type="submit" class="btn custom-btn" data-loading-text="Loading...">Send</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-6-->
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </section>
        <!--End of contact-->



        <!--Start of footer-->
        <section id="footer">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-6">
                        <div class="copyright" style="text-align: center;">
                            <p>All rights reserved<br><a href="http://www.ayurved4u.com">www.ayurved4u.com</a>  2018-2019
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="designer">
                            
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

        <script>
            //for counter up
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        </script>

        <!--Gmaps-->
        <script src="js/gmaps.min.js"></script>
        <script type="text/javascript">
            var map;
            $(document).ready(function () {
                map = new GMaps({
                    el: '#map',
                    lat: 23.6911078,
                    lng: 90.5112799,
                    zoomControl: true,
                    zoomControlOpt: {
                        style: 'SMALL',
                        position: 'LEFT_BOTTOM'
                    },
                    panControl: false,
                    streetViewControl: false,
                    mapTypeControl: false,
                    overviewMapControl: false,
                    scrollwheel: false,
                });


                map.addMarker({
                    lat: 23.6911078,
                    lng: 90.5112799,
                    title: 'Office',
                    details: {
                        database_id: 42,
                        author: 'Foysal'
                    },
                    click: function (e) {
                        if (console.log)
                            console.log(e);
                        alert('You clicked in this marker');
                    },
                    mouseover: function (e) {
                        if (console.log)
                            console.log(e);
                    }
                });
            });
        </script>
        <!--Google Maps API-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjxvF9oTfcziZWw--3phPVx1ztAsyhXL4"></script>


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
