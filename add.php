<html>
  <head>
    <link rel="stylesheet" href="styles.css">
    <title>Lacrosse Database</title>
  </head>
  <body>

    <?php

      include("config.php");

      $query = "select * from tblusers";
      $result = $db->query($query);

      if($result == false){
        $error_message = $db->error;
        echo "<p>An error occurred: $error_message</P>";
        exit();
      }
    ?> 

    <h3 align="center">Please add a new user, and redirect to the login screen</h3>
    
    <br>

    <h5>Entry the information below for a new user</h5>
    <form action="insert.php" id="main4" method="post">
      <div class="input-parent">
        <label for="fName">First name</label>
        <input type="text" name="fName">
        <br>
        <label for="lName">Last Name</label>
        <input type="text" name="lName">
        <br>
        <label for="userName">Username</label>
        <input type="text" name="userName">
        <br>
        <label for="userPass">Password</label>
        <input type="text" name="userPass">
        <br>
      </div>
      <button type="submit">Add</button>
    </form>
    <input type="submit" value="LOGIN" onclick="location.href='index.php'">
  </body>
</html>