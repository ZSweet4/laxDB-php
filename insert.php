<?php
  include("config.php");

  $query = "insert into tblusers (fName, lName, userName, userPass) values ('$_POST[fName]','$_POST[lName]', '$_POST[userName]', '$_POST[userPass]')";

  if(!mysqli_query($db,$query)){
    die('An error occurred when submitting your student.');
  } else {
    header("Location: index.php");
  }
?>