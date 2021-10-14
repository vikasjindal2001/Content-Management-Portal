<?php
define("HOST","localhost:3306");
define("DBNAME","mtacms");
define("USER","root");
define("PASSWORD","");
$link = mysqli_connect(HOST,USER,PASSWORD,DBNAME) or die("<font color='red'>Mysql Server could not Connected!!!</font>");
//var_dump($link);
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
?>
