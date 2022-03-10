<html>
  <head>
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
    <form action="insert.php" method="post">

      First Name:<input type="text" name="fName">
      <br>
      Last Name:<input type="text" name="lName">
      <br>
      Username:<input type="text" name="userName">
      <br>
      Password:<input type="text" name="userPass">
      <br>
      <input type="submit" value="ADD">
    </form>
    <input type="submit" value="LOGIN" onclick="location.href='index.php'">
  </body>
</html>