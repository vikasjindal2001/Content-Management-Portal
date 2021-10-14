<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password']))
{


include('config.php');
$execute = "SELECT * FROM `homewelcome`";
    $row = @mysqli_query($link,$execute) or die("<br>query could not executed");
    
?>

<!DOCTYPE html>
<html>
<head>
    <title> Home welcome</title>
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
    <br><br><br>
    <h1><b>Home Welcome Details</b></h1>
    <div class="container-fluid">
    <table class="table table-responsive table-bordered table-striped" style="text-align:center;">
    <thead style="background-color:black;">
        <tr>
            <th>
                <span style="color:white;">ID</span>
            </th>
            <th>
                <span style="color:white;">TITLE</span>
            </th>
            <th>
                <span style="color:white;">CONTENT</span>
            </th>
            
            <th>
                <span style="color:white;">IMAGE</span>
            </th>
            <th>
                <span style="color:white;">UPDATE</span>
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
                <?php echo $column[2];?>
            </td>
            <td>
                <?php echo "<img src='Photo/$column[3]' width='100px' height='50px'";?>
            </td>
            <td>
            <?php echo "<a href='updatehomewelcome.php?des=$column[2]'><input type='button' class='btn btn-primary' name='btn' value='UPDATE'></a>";?>
            </td>
        </tr>
    <?php
     }
     ?>
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