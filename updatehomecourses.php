<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password']))
{


?>
<!DOCTYPE html>
<html>
<head>
	<title>Update home courses</title>
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
	<center>
    <?php include('adminheader.php');  
    $id= $_GET['ID'];


    include('config.php');
    $execute = "SELECT * FROM `homecourses` WHERE $id";
        $row = @mysqli_query($link,$execute) or die("<br>query could not executed");

    ?>
	<br>
	<br>
    <br>
    
    <?php
        
        $column = mysqli_fetch_row($row);
       
    ?>
	
	<h1><b>UPDATE Courses</b></h1>
	<div class="container">
	<form method="post"  enctype="multipart/form-data">
		<table class="table table-responsive table-bordered table-striped" >
			<tr>
				<td> Course name :</td>
				<td><input style="width:60%" type="text" name="bannername" value=<?php echo $column[1]; ?>></td>
			</tr>
			<tr>
			<td> Image</td>
				<td ><input type="file" name="myfile" ?></td>
			</tr>
			<tr>
				<td> Description </td>
				<td><textarea name="description" rows="3" cols="70" ><?php echo $column[3]; ?></textarea></td>
			</tr>
			<tr>
			<td colspan=2 ><input style="margin-left:40%;" type="submit" class="btn-primary" name="sub" value="UPDATE">&nbsp &nbsp &nbsp &nbsp<a href="adminhomecourses.php"><input  type="button" class="btn-danger" value="EXIT"></a></td>
			</tr>
			
		</table>
	</form>
	</div>
</center>


<?php

if(isset($_POST['sub']))
{
	$username = $_POST['bannername'];
	if(!empty($_FILES['myfile']['name']))
	{
	$filename=$_FILES['myfile']['name'];
        $filetemp = $_FILES['myfile']['tmp_name'];
	$des = $_SERVER['DOCUMENT_ROOT']."/finalproject/Photo/".$_FILES['myfile']['name'];
	if(move_uploaded_file($filetemp,$des))
	{
		//echo "sucess";
        }
	}
	else{
		$filename=$column[2];
	}
        $description = $_POST['description'];
	
    $select = "update homecourses set name='$username' , image='$filename' , description='$description' where id=".$id;
	$rows = @mysqli_query($link,$select) or die("query not executed");
	
	
	if($rows)
	{
        
        echo "<center><h1><font color='green'>UPDATED SUCESSFULLY!!!!</font></h1></center>";
        
	}
	else{ 
          echo "<center><h1><font color='red'>Try Again!!!!</font></h1></center>";
        
	}

}



}//closing if
else{
	header("location:admin.php");
}
?>
<br>
       <div class="footer">
     <h5 style="float:left;color:white;">You Logged in as <?php echo $_SESSION['username'];?></h5>
</div>
</body>
</html>
