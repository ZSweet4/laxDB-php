<?php

  include("config.php");
  $query = "select * from tblusers";
  $result = $db->query($query);

  if($result == false){
    $error_message = $db->error;
    echo "<p>An error occurred: $error_message</P>";
    exit();
  }

  if($_SERVER["REQUEST_METHOD"] == "POST") {
  // username and password sent from form 
  
    $username = mysqli_real_escape_string($db,$_POST['userName']);
    $password = mysqli_real_escape_string($db,$_POST['userPass']); 
    
    $sql = "SELECT userID FROM tblusers WHERE userName = '$username' and userPass = '$password'";
    $result = mysqli_query($db,$sql) or die(mysqli_error($db));
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];
    
    $count = mysqli_num_rows($result);
    
    // If result matched $myusername and $mypassword, table row must be 1 row
    if($count == 1) {
      $_SESSION['login_user'] = $username;
      header("location: wel.php");
    }else {
      echo "Your username or password is incorrect.";
    }
  }
?> 
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="styles.css">
    <title>Lacrosse Database</title>
  </head>
  <body>

    <h3 align="center">Welcome back, please add an account or click for the sign in page.</h3>
    <h5 align="center"><a href="add.php">ADD</a></h5>
    <br>
    <form action="" id="main" method="post">
      <div class="input-parent">
        <label for="userName">Username</label>
        <input type="text" name="userName">
      </div>
      <div class="input-parent">
        <label for="userPass">Password</label>
        <input type="text" name="userPass">
      </div>
      <button type="submit">Submit</button>
    </form>
    <br>
  </body>
</html>
  

    