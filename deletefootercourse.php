<?php
include('config.php');

if(isset($_GET['ID']))
{
$delete ="delete from footercourses where id=".$_GET['ID'];
$rows = @mysqli_query($link,$delete) or die(" <font color='red'>Query could not executed!!!!</font>");
if($rows>0)
{
	header("location:footercourses.php?deleted");
}
mysqli_close($link);
}
else
{
	header("location:footercourses.php?NOT DELETED");

}

?>