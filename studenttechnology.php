<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password']))
{


include('config.php');
$execute = "SELECT * FROM `selecttechnology`";
    $row = @mysqli_query($link,$execute) or die("<br>query could not executed");
    
?>

<!DOCTYPE html>
<html>
<head>
    <title> STUDENTFORM</title>
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
    <h1><b>TECHNOLOGY ARE</b></h1>
    <div class="container-fluid">
    <table class="table table-responsive table-bordered ">
    <thead style="background-color:black;">
        <tr>
            <th>
                <span  style="color:white;">ID</span>
            </th>
            <th>
                <span  style="color:white;"> TECHNOLOGY</span>
            </th>
            <th>
            <span  style="color:white;">DELETE</span>
            </th>
        </tr>
        </thead>
     <?php
        
        while($column = mysqli_fetch_row($row))
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
            <?php echo "<a href='deletestudenttechnology.php?ID=$column[0]'><input type='button' class='btn btn-primary' name='btn' value='DELETE'></a>";?>
            </td>
        </tr>
    <?php
     }
     ?>
    <tr>
    <td colspan=6>
    <a style="margin-left:50%; padding:10px;" href="addstudenttechnology.php"><input class="btn btn-primary" type="button" name="AddFooter" value="ADD Footer Useful"></a>
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