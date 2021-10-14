<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password']))
{


?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Contact</title>
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
    $execute = "SELECT * FROM `contactus` WHERE $id";
        $row = @mysqli_query($link,$execute) or die("<br>query could not executed");

    ?>
	<br>
	<br>
    <br>
    
    <?php
        
        $column = mysqli_fetch_row($row);
       
    ?>
	
	<h1><b>UPDATE CONTACT</b></h1>
	<div class="container">
	<form method="post"  enctype="multipart/form-data">
		<table class="table table-responsive table-bordered table-striped" >
			<tr>
				<td> Contact no :</td>
				<td><input style="width:60%" type="text" name="bannername" value="<?php echo $column[0]; ?>"></td>
			</tr>
			<tr>
			<td> Email</td>
				<td ><input type="text" name="myfile" value= "<?php echo $column[1]; ?>"></td>
			</tr>
			<tr>
				<td> ADRESS</td>
				<td><textarea name="description" rows="3" cols="70" ><?php echo $column[2]; ?></textarea></td>
			</tr>
			<tr>
			<td colspan=2 ><input style="margin-left:40%;" type="submit" class="btn-primary" name="sub" value="UPDATE">&nbsp &nbsp &nbsp &nbsp<a href="footercontact.php"><input  type="button" class="btn-danger" value="EXIT"></a></td>
			</tr>
			
		</table>
	</form>
	</div>
</center>


<?php

if(isset($_POST['sub']))
{
	$username = $_POST['bannername'];
	$filename = $_POST['myfile'];
	$description = $_POST['description'];
	
    $select = "update contactus set contactno='$username' , email='$filename' , location='$description' where id=".$id;
	$rows = @mysqli_query($link,$select) or die("query not executed");
	
	
	if($rows)
	{
        echo "<center><h1><font color='green'>UPDATED SUCESSFULLY!!!!</font></h1></center>";
	}
	else{
        echo "<center><h1><font color='red'>Try Again !!!!</font></h1></center>";
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
