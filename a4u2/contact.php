<?php require_once("Include/DB.php"); ?>
<?php require_once("Include/Sessions.php"); ?>
<?php require_once("Include/Functions.php"); ?>
<?php require_once("cust/css/index.php"); ?>

<?php 

if (isset($_POST['submit'])) 
{
	$name = mysql_real_escape_string($_POST['name']);
	$email = mysql_real_escape_string($_POST['email']);
	$subject = mysql_real_escape_string($_POST['subject']);
	$message = mysql_real_escape_string($_POST['message']);

	if ($name==null || $email==null || $subject==null || $message==null) 
	{
		echo "Please Fill Out All The Fields";
	}
	else
	{
		global $ConnectingDB;
	$Query="INSERT INTO mail(name,email,subject,message)
	VALUES('$name','$email','$subject','$message')";
	$Execute=mysql_query($Query);
	if ($Execute) {
		echo "mail Send";
	}
	else
	{
		echo "Mail Not Send";
	}

	}

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
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
</head>
<body>
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
                                    <form action="contact.php" method="post" class="form-horizontal contact-1" role="form" name="contactform" id="contactform">
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
                                                <input type="subject" class="form-control" id="subject" placeholder="Subject *" name="subject">
                                                <div class="text_area">
                                                    <textarea id="msg" class="form-control" cols="30" rows="8" placeholder="Message" name="message"></textarea>
                                                </div>
                                                <button type="submit" name="submit" class="btn custom-btn" data-loading-text="Loading...">Send</button>
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
</body>
</html>