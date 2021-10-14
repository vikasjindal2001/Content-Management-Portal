
    <div class="featured-cause">
        <div class="container">


 


            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2 class="entry-title">Featured Course</h2>
                    </div><!-- .section-heading -->
                </div><!-- .col -->
            </div><!-- .row -->

            <div class="row">





                
        <?php
        
        // include('config.php');
 $execute = "SELECT * FROM `specialcourse`";
     $row = @mysqli_query($link,$execute) or die("<br>query could not executed");
     while($column = mysqli_fetch_row($row))
     {
 
         ?>

                <div class="col-12 col-lg-6">
                    <div class="cause-wrap d-flex flex-wrap justify-content-between">
                        <figure class="m-0">
                            <img src="Photo/<?php echo $column[2]; ?>" alt="">
                        </figure>

                        <div class="cause-content-wrap">
                            <header class="entry-header d-flex flex-wrap align-items-center">
                                <h3 class="entry-title w-100 m-0"><a href="#"><?php echo $column[1]; ?></a></h3>

                                <div class="posted-date">
                                    <!--<a href="#">Sep 25, 2020 </a>-->
                                </div><!-- .posted-date -->

                                <div class="cats-links">
                                   <!-- <a href="#">Ghaziabad Rajnagar</a>-->
                                </div><!-- .cats-links -->
                            </header><!-- .entry-header -->

                            <div class="entry-content">
                                <p class="m-0"><?php echo $column[3]; ?></p>
                            </div><!-- .entry-content -->

                            <div class="entry-footer mt-5">
                                <a href="#" class="btn gradient-bg mr-2">Register Now</a>
                            </div><!-- .entry-footer -->
                        </div><!-- .cause-content-wrap -->

                        <div class="fund-raised w-100">
                            <!--<div class="featured-fund-raised-bar barfiller">
                                <div class="tipWrap">
                                    <span class="tip"></span>
                                </div>-- .tipWrap --

                                <span class="fill" data-percentage="83"></span>
                            </div>-- .fund-raised-bar -->

                            <div class="fund-raised-details d-flex flex-wrap justify-content-between align-items-center">
                                <div class="fund-raised-total mt-4">
                                    <!-- Goal: $70 000  i dont want it i want it to be remove-->
                                </div><!-- .fund-raised-total -->

                                <div class="fund-raised-goal mt-4">
                                    <!-- Goal: $70 000  i dont want it i want it to be remove-->
                                </div><!-- .fund-raised-goal -->
                            </div><!-- .fund-raised-details -->
                        </div><!-- .fund-raised -->
                    </div><!-- .cause-wrap -->
                </div><!-- .col -->

               <?php
               }
               ?>
        
        
        
        
        
        
        
        
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .featured-cause -->









    <div class="our-causes pt-0">
        <div class="container">
            <div class="row">















            <?php
        
        // include('config.php');
 $execute = "SELECT * FROM `coursefeatureslider`";
     $row = @mysqli_query($link,$execute) or die("<br>query could not executed");
     while($column = mysqli_fetch_row($row))
     {
 
         ?>




                <div class="col-12 col-md-6 col-lg-4">
                    <div class="cause-wrap">
                        <figure class="m-0">
                            <img src="Photo/<?php echo $column[2];?>" alt="">

                            <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                                <a href="#" class="btn gradient-bg mr-2">Register Now</a>
                            </div><!-- .figure-overlay -->
                        </figure>

                        <div class="cause-content-wrap">
                            <header class="entry-header d-flex flex-wrap align-items-center">
                                <h3 class="entry-title w-100 m-0"><a href="#"><?php echo $column[1];?></a></h3>
                            </header><!-- .entry-header -->

                            <div class="entry-content">
                                <p class="m-0"><?php echo $column[3];?></p>
                            </div><!-- .entry-content -->

                            <div class="fund-raised w-100">
                               <!--<div class="featured-fund-raised-bar barfiller">
                                <div class="tipWrap">
                                    <span class="tip"></span>
                                </div>-- .tipWrap --

                                <span class="fill" data-percentage="83"></span>
                            </div>-- .fund-raised-bar -->

                                <div class="fund-raised-details d-flex flex-wrap justify-content-between align-items-center">
                                    <div class="fund-raised-total mt-4">
                                         <!--Goal: $70 000  i dont want it-->
                                    </div><!-- .fund-raised-total -->

                                    <div class="fund-raised-goal mt-4">
                                         <!--Goal: $70 000  i dont want it-->
                                    </div><!-- .fund-raised-goal -->
                                </div><!-- .fund-raised-details -->
                            </div><!-- .fund-raised -->
                        </div><!-- .cause-content-wrap -->
                    </div><!-- .cause-wrap -->
                </div><!-- .col -->


     <?php
     }
     ?>








            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .our-causes -->