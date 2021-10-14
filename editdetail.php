<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password']))
{


?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Student Details</title>
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
    <?php
    include('config.php');
    $id = $_GET['ID'];
     $select = "SELECT * FROM `studentregister` WHERE id=".$id;
        $rows = @mysqli_query($link,$select) or die("Query Not executed!!!!");
         //while($column = mysqli_fetch_row($rows))
         //{
			$column = mysqli_fetch_row($rows);
    ?>
	<h1><b>Edit Student Details</b></h1>
	<div class="container-fluid">
        <center>
    <form method="post" action="updatestudentdetail.php?ID=<?php echo $id;?>"> 


		<table class="table table-responsive table-bordered table-striped" >
			<tr>
				<td>Full Name </td>
				<td><input style="width:60%" type="text" name="fullname" value="<?php echo $column[1] ;?>"></td>
			</tr>
            <tr>
				<td>User Name </td>
				<td><input style="width:60%" type="text" name="username" value="<?php echo $column[2] ;?>"></td>
			</tr>
            <tr>
				<td>Password</td>
				<td><input style="width:60%" type="text" name="password" value=<?php echo $column[20] ;?>></td>
			</tr>
            <tr>
				<td>Gender</td>
				<td><input style="width:60%" type="text" name="gender" value=<?php echo $column[3] ;?>></td>
			</tr>
            <tr>
				<td>Email</td>
				<td><input style="width:60%" type="text" name="email" value=<?php echo $column[4] ;?>></td>
			</tr>
            <tr>
				<td>Contact No</td>
				<td><input style="width:60%" type="text" name="contact" value=<?php echo $column[5] ;?>></td>
			</tr>
            <tr>
				<td>DOB</td>
				<td><input style="width:60%" type="date" name="dob" value=<?php echo $column[6] ;?>></td>
			</tr>
            <tr>
				<td>Program</td>
				<td><input style="width:60%" type="text" name="program" value="<?php echo $column[7] ;?>"></td>
			</tr>
            <tr>
				<td>Location</td>
				<td><input style="width:60%" type="text" name="location" value="<?php echo $column[8] ;?>"></td>
			</tr>
            <tr>
				<td>Technology</td>
				<td><input style="width:60%" type="text" name="technology" value="<?php echo $column[9] ;?>"></td>
			</tr>
            <tr>
				<td>Batch</td>
				<td><input style="width:60%" type="text" name="batch" value=<?php echo $column[10] ;?>></td>
			</tr>
            <tr>
				<td>State</td>
				<td><input style="width:60%" type="text" name="state" value="<?php echo $column[11] ;?>"></td>
			</tr>
            <tr>
				<td>City</td>
				<td><input style="width:60%" type="text" name="city" value=<?php echo $column[12] ;?>></td>
			</tr>
            <tr>
				<td>University</td>
				<td><input style="width:60%" type="text" name="university" value="<?php echo $column[13] ;?>"></td>
			</tr>
            <tr>
				<td>College</td>
				<td><input style="width:60%" type="text" name="college" value="<?php echo $column[14] ;?>"></td>
			</tr>
            <tr>
				<td>Course</td>
				<td><input style="width:60%" type="text" name="course" value=<?php echo $column[15] ;?>></td>
			</tr>
            <tr>
				<td>Branch</td>
				<td><input style="width:60%" type="text" name="branch" value="<?php echo $column[16] ;?>"></td>
			</tr>
            <tr>
				<td>Semester</td>
				<td><input style="width:60%" type="text" name="semester" value=<?php echo $column[17] ;?>></td>
			</tr>
            <tr>
				<td>Passing Year</td>
				<td><input style="width:60%" type="text" name="passingyear" value=<?php echo $column[18] ;?>></td>
			</tr>
            <tr>
				<td>Find Us</td>
				<td><input style="width:60%" type="text" name="find" value="<?php echo $column[19] ;?>"></td>
			</tr>			
			<tr>
			<td colspan=2 ><input style="margin-left:40%;" type="submit" class="btn-primary" name="sub" value="UPDATE">&nbsp &nbsp &nbsp &nbsp<a href="adminstudentdetail.php"><input  type="button" name="sub" class="btn btn-primary" value="EXIT"></a></td>
			</tr>
			
		</table>
        </form>
	</div>
    <?php
         //}
    ?>
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
	header("location:admin.php");
}
?>