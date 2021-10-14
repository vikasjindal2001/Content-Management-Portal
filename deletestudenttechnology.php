<?php
include('config.php');

if(isset($_GET['ID']))
{
$delete ="delete from selecttechnology where id=".$_GET['ID'];
$rows = @mysqli_query($link,$delete) or die(" <font color='red'>Query could not executed!!!!</font>");
if($rows>0)
{
	header("location:studenttechnology.php?deleted");
}
mysqli_close($link);
}
else
{
	header("location:studenttechnology.php?NOT DELETED");

}

?>