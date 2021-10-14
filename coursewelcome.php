
   
<?php
//include('config.php');
$select = "select * from coursewelcome";
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
                            <p><?php echo $column[3];?></p>
                        </div><!-- .entry-content -->

                        <div class="entry-footer mt-5">
                            <a href="#" class="btn gradient-bg mr-2">Read More</a>
                        </div><!-- .entry-footer -->
                    </div><!-- .welcome-content -->
                </div><!-- .col -->

                <div class="col-12 col-lg-6 mt-4 order-1 order-lg-2">
                    <img src="images/<?php echo $column[2];?>" alt="welcome">
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .home-page-icon-boxes -->
<?php
}
?>

