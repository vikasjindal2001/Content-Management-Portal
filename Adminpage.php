<!DOCTYPE html>
<html>
<head>
    <title>login</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>
  .footer {
    position:fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: black;
   color: white;
   text-align: center;
}
</style>




</head>
<body>

<br><br>
<?php
if(isset($_GET['confirm']))
{
  session_start();
include('adminheader.php');
}
else{
header("location:admin.php?INVALID USER");
}


?>

<div class="container">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

   



      <?php
      $count=1;
        include('config.php');
        $execute = "SELECT * FROM `banner`";
            $row = @mysqli_query($link,$execute) or die("<br>query could not executed");
            while($column = mysqli_fetch_row($row))
            {
              if($count==1)
              {
                ?>

              <div class="item active">
                 <img src="Photo/<?php echo $column[2];?>" alt="Los Angeles" style="width:100%;">
                 <div class="carousel-caption">
                   <h3><?php echo $column[3];?></h3>
                   <p><?php echo $column[4];?></p>
                 </div>
              </div>
              <?php
              $count = $count + 1;
              }
              else{
              ?>




      <div class="item">
        <img src="Photo/<?php echo $column[2];?>" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
          <h3><?php echo $column[3];?></h3>
          <p><?php echo $column[4];?></p>
        </div>
      </div>
      <?php
              }
          }//closing while
      ?>

      
    
  
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>









       <div class="footer">
     <h5 style="float:left;color:white;">You Logged in as <?php echo $_SESSION['username'];?></h5>
</div>
</body>
</html>