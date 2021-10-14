<div class="swiper-container hero-slider">
        <div class="swiper-wrapper">
        <?php
        
$execute = "SELECT * FROM `banner`";
    $row = @mysqli_query($link,$execute) or die("<br>query could not executed");
    while($column = mysqli_fetch_row($row))
    {

        ?>
        <div class="swiper-slide hero-content-wrap">
        <?php  echo "<img src='Photo/$column[2]' alt ='img not available'>";?>

                <div class="hero-content-overlay position-absolute w-100 h-100">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-12 col-lg-8 d-flex flex-column justify-content-center align-items-start">
                                <header class="entry-header">
                                <!--<h1></h1>-->
                                    <h4><?php echo $column[3];?></h4>
                                </header><!-- .entry-header -->

                                <div class="entry-content mt-4">
                                    <p><?php echo $column[4];?></p>
                                </div><!-- .entry-content -->

                                <footer class="entry-footer d-flex flex-wrap align-items-center mt-5">
                                    <a href="register.php" class="btn gradient-bg mr-2">Register Now</a>
                                    <a href="#" class="btn orange-border">Read More</a>
                                </footer><!-- .entry-footer -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .container -->
                </div><!-- .hero-content-overlay -->
            </div><!-- .hero-content-wrap -->
<?php
    }
?>
   </div><!-- .swiper-wrapper -->           

       