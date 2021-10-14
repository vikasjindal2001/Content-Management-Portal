<?php
include('config.php');
class Blogic
{
    function connection()
    {
        $conn = @mysqli_connect(HOST,USER,PASSWORD,DBNAME) or die("<font color='red'>Mysql Server could not Connected!!!</font>");
        if(!$conn)
        {
            return false;
        }
        else
        {
            return $conn;
        }
    }
    function executeQuery($query)
    {
        $rows = mysqli_query(Blogic::connection(),$query);
        if($rows>0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    function selectRecord($query)
    {
        $rows = mysqli_query(Blogic::connection(),$query);
        if($rows)
        {
            return $rows;
        }
        else
        {
            return false;
        }
    }
    function closeConnection()
    {
        if(Blogic::connection())
        {
            mysqli_close(Blogic::connection());
        }
    }
}
?>