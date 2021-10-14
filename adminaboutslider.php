<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password']))
{


include('config.php');
$execute = "SELECT * FROM `aboutslider`";
    $row = @mysqli_query($link,$execute) or die("<br>query could not executed");
    
?>

<!DOCTYPE html>
<html>
<head>
    <title>About Slider</title>
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
    <?php include('adminheader.php');  ?>

    <center>
    <br>
    <br>
    <br>
    <h1><b>SLIDERS ARE</b></h1>
    <div class="container">
    <table class="table table-responsive table-bordered ">
    <thead style="background-color:black;">
        <tr>
            <th>
                <span  style="color:white;">ID</span>
            </th>
            <th>
                <span  style="color:white;">SLIDER NAME</span>
            </th>
            <th>
                <span  style="color:white;">IMAGE</span>
            </th>
            <th>
                <span  style="color:white;">DESCRIPTION</span>
            </th>
            <th>
            <span  style="color:white;">DELETE / EDIT</span>
            </th>
        </tr>
        </thead>
     <?php
        
       while( $column = mysqli_fetch_row($row))
    {
       
    ?>
    <tbody>
        <tr>
            <td>
                <?php echo $column[0];?>
            </td>
            <td>
                <?php echo $column[1];?>
            </td>
            <td>
                <?php  echo "<img src='Photo/$column[2]' width='500px' height='200px' alt ='img not available'>";?>
            </td>
            <td>
                <?php echo $column[3];?>
            </td>
            <td>
            <?php echo "<a href='deleteaboutslider.php?ID=$column[0]'><input type='button' class='btn btn-primary' name='btn' value='DELETE'></a><br><br><a href='updateaboutslider.php?ID=$column[0]'><input type='button' class='btn btn-primary' name='btn' value='UPDATE'></a>";?>
            </td>
        </tr>
    <?php
     }
     ?>
    <tr>
    <td colspan=6>
    <a style="margin-left:50%; padding:10px;" href="addaboutslider.php"><input class="btn-primary" type="button" name="AddSlider" value="ADD SLIDER"></a>
    </td>
    </tr>
     </tbody>         
    </table>
    </div><!--close container-->
       </center>
       
<br>
       <div class="footer">
     <h5 style="float:left;color:white;">You Logged in as <?php echo $_SESSION['username'];?></h5>
</div>


</body>
</html>
<?php

}//closing if
else{
	header("location:admin.php?login first");
}
//include('footer.php');
?>