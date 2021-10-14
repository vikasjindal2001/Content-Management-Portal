
    <div class="about-testimonial">
        <div class="container">
            <div class="row">

            <?php
//include('config.php');
$select = "select * from aboutfeedback";
$execute = @mysqli_query($link,$select) or die("query not executed");
while($column = mysqli_fetch_row($execute))
{


?>

                <div class="col-12 col-md-6 col-lg-5">
                    <div class="testimonial-cont">
                        <div class="entry-content">
                            <p><?php echo $column[3];?></p>
                        </div>

                        <div class="entry-footer d-flex flex-wrap align-items-center mt-5">
                            <img src="images/<?php echo $column[4];?>" alt="">

                            <h4><?php echo $column[1];?>, <span><?php echo $column[2];?></span></h4>
                        </div>
                    </div>
                </div>

          <?php
                }
          ?>    

            </div>
        </div>
    </div>



    <div class="help-us">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                    <h2>Join Now if you have not joined yet</h2>

                    <a class="btn orange-border" href="register.php">Register now</a>
                </div>
            </div>
        </div>
    </div>