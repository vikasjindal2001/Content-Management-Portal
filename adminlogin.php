<?php
include('config.php');
if(!empty($_POST['username']) && !empty($_POST['password']) && isset($_POST['sub']))
{
    session_start();
    $select = "select * from usertable" ;
    $rows = mysqli_query($link,$select) or die("query could not executed");
    $cols = mysqli_fetch_row($rows);
    if($_POST['username'] == $cols[2] && $_POST['password'] == $cols[3])
    {
    $_SESSION['username'] = $cols[2];
    $_SESSION['password'] = $cols[3];
    $confirm = "confirm";
    header("location:Adminpage.php?$confirm");
    }
    else{
        header("location:admin.php?FILL/USERNAME/PASSWORD");
    }
    
}
else{
    //echo "Invalid Admin";
  header("location:admin.php?FILLDETAILS");
}

?>