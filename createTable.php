<?php
  include("config.php");

  $query = "insert into players (fName, lName, highSchool, position, state, email, class) values ('$_POST[fName]','$_POST[lName]', '$_POST[highSchool]', '$_POST[pos]', '$_POST[state]', '$_POST[email]', '$_POST[class]')";

  if(!mysqli_query($db,$query)){
    die('An error occurred when submitting your player.');
  } else {
    header("Location: wel.php");
  }
  
?>