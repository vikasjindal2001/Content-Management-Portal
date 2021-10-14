<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact</title>

     <script>
           function myFunction() {
              alert("We will contact you soon");
           }
     </script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- ElegantFonts CSS -->
    <link rel="stylesheet" href="css/elegant-fonts.css">

    <!-- themify-icons CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
</head>
<body class="single-page contact-page">
<?php include('homeheader.php'); ?>

    <div class="page-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>Contact</h1>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .page-header -->

    <div class="contact-page-wrap">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <div class="entry-content">
                        <h2>Get In touch with us</h2>

                        <p>Enroll in any course of your choice and we promise you to help in possible ways by which you complete your course with excellence.</p>

                        <ul class="contact-social d-flex flex-wrap align-items-center">
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>

                        <!--<ul class="contact-info p-0">
                            <li><i class="fa fa-phone"></i><span>+91 7827574047</span></li>
                            <li><i class="fa fa-envelope"></i><span>info@mtaindia.org</span></li>
                            <li><i class="fa fa-map-marker"></i><span>www.mtaindia.org</span></li>
                        </ul>-->

                        <?php
        
        // include('config.php');
 $execute = "SELECT * FROM `contactus`";
     $row = @mysqli_query($link,$execute) or die("<br>query could not executed");
     while($column = mysqli_fetch_row($row))
     {
 
         ?>
                            <ul>
                                <li><i class="fa fa-phone"></i><span>+91 <?php echo $column[0]; ?></span></li>
                                <li><i class="fa fa-envelope"></i><span><?php echo $column[1]; ?></span></li>
                                <li><i class="fa fa-map-marker"></i><span><?php echo $column[2]; ?></span></li>
                            </ul>
                            <?php
                        }
                        ?>




                    </div>
                </div><!-- .col -->

                <div class="col-12 col-lg-7">
                    <form class="contact-form" method="post">
                        <input type="text" name="name" placeholder="Name" required>
                        <input type="email" name="email" placeholder="Email" required>
                        <textarea rows="15" cols="6" name="message" placeholder="Messages"></textarea>

                        <span>
                            <button onclick="myFunction()" class="btn gradient-bg" name="sub" type="submit" value="Contact us">Contact Us</button>
                         
                        </span>
                    </form><!-- .contact-form -->

                </div><!-- .col -->

               <!-- <div class="col-12">
                    <div class="contact-gmap">
                        <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=usa&key=AIzaSyC2LvnNLzWxHgFm_XfpFG9wHUuyEj6rXSs" allowfullscreen></iframe>
                    </div>
                </div>
            </div>-->
        </div><!-- .container -->
    </div>
<?php include('homefooter.php'); ?>

    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='js/swiper.min.js'></script>
    <script type='text/javascript' src='js/jquery.countdown.min.js'></script>
    <script type='text/javascript' src='js/circle-progress.min.js'></script>
    <script type='text/javascript' src='js/jquery.countTo.min.js'></script>
    <script type='text/javascript' src='js/jquery.barfiller.js'></script>
    <script type='text/javascript' src='js/custom.js'></script>

</body>
</html>
<?php
if(isset($_POST['sub']))
{
   
	$username = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$select = "INSERT INTO `contactform`( `name`, `email`, `message`) VALUES ('$username','$email','$message')";
	$rows = @mysqli_query($link,$select) or die("query not executed");
	if($rows)
	{
		//echo "<center><h1><font color='green'>SAVED SUCESSFULLY <br> we will contact you soon!!!!</font></h1></center>";

	}
	else{
		echo "<h1>not work</h1>";
	}

}
?>