
<?php
//include('config.php');
$select = "select * from homewelcome";
$execute = @mysqli_query($link,$select) or die("query not executed");
while($column = mysqli_fetch_row($execute))
{


?>
    <div class="home-page-welcome">
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

                <div class="col-12 col-lg-6 mt-4 order-1 order-lg-2">
                    <img src="images/<?php echo $column[3];?>" alt="welcome">
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .home-page-icon-boxes -->
<?php
}
?>






    <div class="home-page-events">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="upcoming-events">
                        <div class="section-heading">
                            <h2 class="entry-title">Courses Offered</h2>
                        </div><!-- .section-heading -->




                        <?php
        
        // include('config.php');
 $execute = "SELECT * FROM `homecourses`";
     $row = @mysqli_query($link,$execute) or die("<br>query could not executed");
     while($column = mysqli_fetch_row($row))
     {
 
         ?>




                        <div class="event-wrap d-flex flex-wrap justify-content-between">
                            <figure class="m-0">
                                <img src="images/<?php echo $column[2]; ?>" alt="">
                            </figure>
                            <div class="event-content-wrap">
                                <header class="entry-header d-flex flex-wrap align-items-center">
                                    <h3 class="entry-title w-100 m-0"><a href="register.php"><?php echo $column[1]; ?></a></h3>

                                    <div class="posted-date">
                                        <a href="#"><!-- i dont want it --> </a>
                                    </div><!-- .posted-date -->

                                    <div class="cats-links">
                                        <!--<a href="#">Android App Development, iPhone App Development, Iconic, Hybrid</a>-->
                                    </div><!-- .cats-links -->
                                </header><!-- .entry-header -->

                                <div class="entry-content">
                                    <p class="m-0"><?php echo $column[3]; ?></p>
                                </div><!-- .entry-content -->

                                <div class="entry-footer">
                                    <a href="#">Read More</a>
                                </div><!-- .entry-footer -->
                            </div><!-- .event-content-wrap -->
                        </div><!-- .event-wrap -->

<?php
}
?>

















                    </div><!-- .upcoming-events -->
                </div><!-- .col -->
                <div class="col-12 col-lg-6">
                    <div class="featured-cause">
                        <div class="section-heading">
                            <h2 class="entry-title">Featured Courses</h2>
                        </div><!-- .section-heading -->

                        <?php
        
        // include('config.php');
 $execute = "SELECT * FROM `specialcourse`";
     $row = @mysqli_query($link,$execute) or die("<br>query could not executed");
     //while($column = mysqli_fetch_row($row))
     //{
        $column = mysqli_fetch_row($row)
 
         ?>





                        <div class="cause-wrap d-flex flex-wrap justify-content-between">
                            <figure class="m-0">
                                <img src="Photo/<?php echo $column[2]; ?>" alt="">
                            </figure>

                            <div class="cause-content-wrap">
                                <header class="entry-header d-flex flex-wrap align-items-center">
                                    <h3 class="entry-title w-100 m-0"><a href="register.php"><?php echo $column[1]; ?></a></h3>

                                    <div class="posted-date">
                                        <a href="#"><!-- i dont want it --> </a>
                                    </div><!-- .posted-date -->

                                    <div class="cats-links">
                                        <!--<a href="#">Games using PYTHON</a>-->
                                    </div><!-- .cats-links -->
                                </header><!-- .entry-header -->

                                <div class="entry-content">
                                    <p class="m-0"><?php echo $column[3]; ?>
                                        </p>
                                </div><!-- .entry-content -->

                                <div class="entry-footer mt-5">
                                    <a href="register.php" class="btn gradient-bg mr-2">Register Now</a>
                                </div><!-- .entry-footer -->
                            </div><!-- .cause-content-wrap -->


     <?php //} ?>



                            <!--<div class="fund-raised w-100">
                                <div class="featured-fund-raised-bar barfiller">
                                    <div class="tipWrap">
                                        <span class="tip"></span>
                                    </div>

                                   <span class="fill" data-percentage="83"></span>
                                </div> .fund-raised-bar -->

                                <div class="fund-raised-details d-flex flex-wrap justify-content-between align-items-center">
                                    <div class="fund-raised-total mt-4">
                                       <!-- enroll now @: 6000 Rs i dont want it-->
                                    </div><!-- .fund-raised-total -->

                                    <div class="fund-raised-goal mt-4">
                                        <!-- enroll now @: 6000 Rs i dont want it-->
                                    </div><!-- .fund-raised-goal -->
                                </div><!-- .fund-raised-details -->
                            </div><!-- .fund-raised -->
                        </div><!-- .cause-wrap -->
                    </div><!-- .featured-cause -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .home-page-events -->

    