<?php
//Logout.php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password']))
{
    unset($_SESSION['username']);
    unset($_SESSION['password']);
    session_destroy();
    header("location:admin.php");
}
else
{
    echo "Try to Logout Again";
    //header("location:registration.php");
}


?>