
    <div class="portfolio-wrap">
        <div class="container">
        <div class="row portfolio-container">
           
            <?php
//include('config.php');
$sel = "select * from portfolio";
$exe = @mysqli_query($link,$sel) or die("query not executed");
while($column = mysqli_fetch_row($exe))
{
    
    
    ?>

    <div class="col-12 col-md-6 col-lg-3 mt-72 portfolio-item">
    <div class="portfolio-cont">
                        <a href="#"><img src="images/<?php echo $column[3];?>" height="400px"  alt=""></a>

                        <h3 class="entry-title"><a href="#"><?php echo $column[2];?></a></h3>
                        <!--<h4>2020  Batches</h4>-->
                    </div>
                </div>

<?php
}
?>

</div>



            <div class="row">
                <div class="col-12 d-flex justify-content-center mt-72">
                    <a href="#" class="btn gradient-bg load-more-btn">Load More</a>
                </div>
            </div>
        </div>
    </div>