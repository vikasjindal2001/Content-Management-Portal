
    <footer class="site-footer">
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="foot-about">
                        <?php
        
        // include('config.php');
 $execute = "SELECT * FROM `footerimgcont`";
     $row = @mysqli_query($link,$execute) or die("<br>query could not executed");
     while($column = mysqli_fetch_row($row))
     {
 
         ?>
                            <h2><a class="foot-logo" href="register.php"><img src="Photo/<?php echo $column[1]; ?>" alt=""></a></h2>

                            <p><?php echo $column[2]; ?></p>
<?php
     }
     ?>
                            <ul class="d-flex flex-wrap align-items-center">
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div><!-- .foot-about -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <h2>Useful Links</h2>
                        <ul>
                        <?php
        
        // include('config.php');
 $execute = "SELECT * FROM `usefulfooterlinks`";
     $row = @mysqli_query($link,$execute) or die("<br>query could not executed");
     while($column = mysqli_fetch_row($row))
     {
 
         ?>
                            <li><a href="<?php echo $column[2]; ?>"><?php echo $column[1]; ?></a></li>
                            
                        <?php
     }
     ?>
     </ul>
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <div class="foot-latest-news">
                            <h2>Courses </h2>

                            <ul>
                            <?php
        
        // include('config.php');
 $execute = "SELECT * FROM `footercourses`";
     $row = @mysqli_query($link,$execute) or die("<br>query could not executed");
     while($column = mysqli_fetch_row($row))
     {
 
         ?>
                                <li>
                                    <h3><a href="<?php echo $column[1]; ?>"><?php echo $column[2]; ?></a></h3>
                                    
                                </li>
                                <?php
     }
     ?>
                            </ul>
                        </div><!-- .foot-latest-news -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <div class="foot-contact">
                            <h2>Contact</h2>
                                 
                                         
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
                        </div><!-- .foot-contact -->

                      
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .footer-widgets -->

        <div class="footer-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Microdot Tech Aspire Solutions (P) Ltd. <i class="fa fa-heart-o" aria-hidden="true"></i> <!--by <a href="https://colorlib.com" target="_blank">Colorlib</a>-->
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div><!-- .col-12 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .footer-bar -->
    </footer><!-- .site-footer -->