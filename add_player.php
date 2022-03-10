<?php
  include("config.php");

  $nam = mysqli_real_escape_string($db,$_POST['table']);
  /*$fName = mysqli_real_escape_string($db,$_POST['fName']);
  $lName = mysqli_real_escape_string($db,$_POST['lName']);
  $email = mysqli_real_escape_string($db,$_POST['email']);
  $class = mysqli_real_escape_string($db,$_POST['class']);
  $state = mysqli_real_escape_string($db,$_POST['state']);
  $highSchool = mysqli_real_escape_string($db,$_POST['highSchool']);*/

  $query = "insert into `".$nam."` (fName,lName,email,class,state,highSchool) values(`$_POST[fName]`,`$_POST[lName]`,`$_POST[email]`,`$_POST[class]`,`$_POST[state]`,`$_POST[highSchool]`)";
  

  if(mysqli_query($db, $query)){
    die('An error occurred while inserting into your table.');
  } else {
    header("Location: wel.php");
  }
?>
  