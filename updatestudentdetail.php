<?php
include('config.php');
if(isset($_POST['sub']))
{
    $id=$_GET['ID'];
    $username= $_POST['username'];
    $program=$_POST['program'];
    $location=$_POST['location'];
    $technology=$_POST['technology'];
    $batch=$_POST['batch'];
    $fullname=$_POST['fullname'];
    $password=$_POST['password'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $dob=$_POST['dob'];
    $state=$_POST['state'];
    $city=$_POST['city'];
    $university=$_POST['university'];
    $college=$_POST['college'];
    $course=$_POST['course'];
    $branch=$_POST['branch'];
    $semester=$_POST['semester'];
    $passingyear=$_POST['passingyear'];
    $find=$_POST['find'];
$insert = " UPDATE studentregister set fullname='$fullname' ,username='$username',gender='$gender' ,email='$email' , contact='$contact' ,dob='$dob' ,program='$program',location='$location',technology='$technology',batch='$batch',state='$state',city='$city',university='$university',college='$college',course='$course',branch='$branch',semester='$semester',passingyear='$passingyear',findus='$find',password='$password' where id=".$id ;
$rows = @mysqli_query($link,$insert) or die("COULD NOT EXECUTE QUERY");
	if($rows)
	{
		header("location:adminstudentdetail.php?updated");
	}
	else{
		header("location:adminstudentdetail.php?Notupdated");
	}
}



else{
  header("location:admin.php?Invalid");
}
?>