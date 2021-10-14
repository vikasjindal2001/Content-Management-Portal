<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password']))
{


include('config.php');
$execute = "SELECT * FROM `studentregister`";
    $row = @mysqli_query($link,$execute) or die("<br>query could not executed");
    
?>

<!DOCTYPE html>
<html>
<head>
    <title> Student register Details</title>
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
    <h1><b>Student Details Are</b></h1>
    <div class="container-fluid">
    <table class="table table-responsive table-bordered table-striped" style="text-align:center;">
    <thead style="background-color:black;">
        <tr>
            <th>
                <span style="color:white;">ID</span>
            </th>
            <th>
                <span style="color:white;">Fullname</span>
            </th>
            <th>
                <span style="color:white;">Username</span>
            </th>
            
            <th>
                <span style="color:white;">Paasword</span>
            </th>
            <th>
                <span style="color:white;">Email</span>
            </th>
            <th>
                <span style="color:white;">Contact</span>
            </th>
            
            <th>
                <span style="color:white;">Program</span>
            </th>
           
            <th>
                <span style="color:white;">Technology</span>
            </th>
            <th>
                <span style="color:white;">Batch</span>
            </th>
         
            <th>
                <span style="color:white;">Course</span>
            </th>
            <th>
                <span style="color:white;">College</span>
            </th>
         
            <th>
            <span style="color:white;">DELETE / EDIT</span>
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
                <?php echo $column[20];?>
            </td>
            <td>
                <?php echo $column[4];?>
            </td>
            <td>
                <?php echo $column[5];?>
            </td>
            <td>
                <?php echo $column[7];?>
            </td>
            <td>
                <?php echo $column[9];?>
            </td>
            <td>
                <?php echo $column[10];?>
            </td>
            <td>
                <?php echo $column[15];?>
            </td>
            <td>
                <?php echo $column[14];?>
            </td>
           
            <td>
            <?php echo "<a href='admindeletestudent.php?ID=$column[0]'><input type='button' class='btn btn-primary' name='btn' value='DELETE'></a><br><br> <a href='editdetail.php?ID=$column[0]'><input type='button' class='btn btn-primary' name='btn' value='Edit'></a>";?>
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