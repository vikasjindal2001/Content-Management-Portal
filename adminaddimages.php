<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password']))
{


?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Images</title>
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
	<?php include('adminheader.php');  ?>
	<br>
	<br>
	<br>
	
	<h1><b>ADD IMAGES</b></h1>
	<div class="container">
	<form method="post" enctype="multipart/form-data">
		<table class="table table-responsive table-bordered table-striped" >
			<tr>
				<td>Enter image name :</td>
				<td><input style="width:60%" type="text" name="bannername"></td>
			</tr>
			<tr>
			<td>Upload Image</td>
				<td colspan=><input type="file" name="myfile"></td>
			</tr>
			<tr>
				<td>Enter image title </td>
				<td><textarea name="description" rows="3" cols="70"></textarea></td>
			</tr>
			<tr>
			<td colspan=2 ><input style="margin-left:40%;" type="submit" class="btn-primary" name="sub" value="ADD">&nbsp &nbsp &nbsp &nbsp<a href="adminportfolio.php"><input  type="button" name="sub" class="btn btn-primary" value="EXIT"></a></td>
			</tr>
			
		</table>
	</form>
	</div>
</center>


<?php
include('config.php');
if(isset($_POST['sub']))
{
	$username = $_POST['bannername'];
	$filename = $_FILES['myfile']['name'];
	$filetemp = $_FILES['myfile']['tmp_name'];
	$description = $_POST['description'];
	//echo $username;
	//echo $filename;
	//echo $filetemp;
	$des = $_SERVER['DOCUMENT_ROOT']."/finalproject/Photo/".$_FILES['myfile']['name'];
	if(move_uploaded_file($filetemp,$des))
	{
		//echo "sucess";
	}
	$select = "INSERT INTO `portfolio`( `imagename`, `imagetitle`, `image`) VALUES ('$username','$description','$filename')";
	$rows = @mysqli_query($link,$select) or die("query not executed");
	if($rows)
	{
		//header("location:adminportfolio.php");
		echo "<center><h1><font color='green'>INSERTED SUCESSFULLY!!!!</font></h1></center>";
	}
	else{
		echo "<h1>not work</h1>";
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