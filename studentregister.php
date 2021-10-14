<?php
include('config.php');
if(isset($_POST['sub']))
{
    $Username= $_POST['userid'];
    $program=$_POST['program'];
    $location=$_POST['location'];
    $technology=$_POST['technology'];
    $batch=$_POST['batch'];
    $name=$_POST['name'];
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

    $insert = " INSERT INTO `studentregister`( `fullname`, `username`, `gender`, `email`, `contact`, `dob`, `program`, `location`, `technology`, `batch`, `state`, `city`, `university`, `college`, `course`, `branch`, `semester`, `passingyear`, `findus`, `password`) VALUES ('$name','$Username','$gender','$email','$contact','$dob','$program','$location','$technology','$batch','$state','$city','$university','$college','$course','$branch','$semester','$passingyear','$find','$password')";
    $rows = @mysqli_query($link,$insert) or die("COULD NOT EXECUTE QUERY");
    if($rows>0)
    {
        echo "<h1><b>Thank You !!!</b></h1>";
        echo "<br><h2> RECORD SAVED SUCCESSFULLY!!</h2>";
        echo "<br><a href='index.php'><input type='button' value='GO Back'></a>";
    }
    else{
        echo "<h1>RECORD NOT SAVED</h1>";
        echo "<br><a href='register.php'><input type='button' value='GO Back'></a>";
        header("location:register.php");
    }
}
else{
    header("location:register.php");
}

?>