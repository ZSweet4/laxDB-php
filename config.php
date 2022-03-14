<?php 

$host = "";
$username = "";
$password = "";
$db_name = "";

$db = mysqli_connect($host, $username, $password, $db_name);

$connection_error = $db->$connection_error;
if($connection_error != null){
  echo "<p>Error connecting to database: $connection_error</p>";
  exit();
}
?>