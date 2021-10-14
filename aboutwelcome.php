<?php
//include('config.php');
$select = "select * from homewelcome";
$execute = @mysqli_query($link,$select) or die("query not executed");
while($column = mysqli_fetch_row($execute))
{


?>



<div class="welcome-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 order-2 order-lg-1">
                    <div class="welcome-content">
                        <header class="entry-header">
                            <h2 class="entry-title"><?php echo $column[1];?></h2>
                        </header><!-- .entry-header -->
<div class="entry-content mt-5">
<p><?php echo $column[2];?></p>
                        </div><!-- .entry-content -->

                        <div class="entry-footer mt-5">
                            <a href="#" class="btn gradient-bg mr-2">Read More</a>
                        </div><!-- .entry-footer -->
                    </div><!-- .welcome-content -->
                </div><!-- .col -->
   

                <div class="col-12 col-lg-6 order-1 order-lg-2">
                    <img src="images/<?php echo $column[3];?>" alt="welcome">
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .home-page-icon-boxes -->
<?php
}
?>
    <!--<div class="about-stats">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="circular-progress-bar">
                        <div class="circle" id="loader_1">
                            <strong class="d-flex justify-content-center"></strong>
                        </div>

                        <h3 class="entry-title">Hard Work</h3>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="circular-progress-bar">
                        <div class="circle" id="loader_2">
                            <strong class="d-flex justify-content-center"></strong>
                        </div>

                        <h3 class="entry-title">Student Satisfaction</h3>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="circular-progress-bar">
                        <div class="circle" id="loader_3">
                            <strong class="d-flex justify-content-center"></strong>
                        </div>

                        <h3 class="entry-title">Feedback</h3>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="circular-progress-bar">
                        <div class="circle" id="loader_4">
                            <strong class="d-flex justify-content-center"></strong>
                        </div>

                        <h3 class="entry-title">Councelling</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>-->

