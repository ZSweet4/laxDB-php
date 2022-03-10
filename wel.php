<?php
  include('config.php');
?>
<html> 
  <head>
    <link rel="stylesheet" href="styles.css">
    <title>Welcome</title>
  </head>
  <body>
    <h3>Welcome Coach please create your table, if you already have one please click add to start uploading players to the table.</h3>
    <form action="createTable.php" id="main2" method="POST">
      <div class="input-parent">
        <label for="fName">First Name</label>
        <input type="text" name="fName">
        <br>
        <label for="lName">Last Name</label>
        <input type="text" name="lName">
        <br>
        <label for="email">Email</label>
        <input type="Email" name="email">
        <br>
        <label for="class">Class</label>
        <input type="text" name="class" placeholder="SO">
        <br>
        <label for="state">State</label>
        <input type="text" name="state" placeholder="MI">
        <br>
        <label for="highSchool">High School</label>
        <input type="text" name="highSchool">
        <br>
        <input type="radio" id="radio1" name="pos" value="Attack">
         <label for="radio1">Attack</label>
        <input type="radio" id="radio2" name="pos" value="Defense">
         <label for="radio2">Defense</label>
        <input type=radio id="radio3" name="pos" value="Goalie">
         <label for="radio3">Goalie</label>
        <input type="radio" id="radio4" name="pos" value="Face Off">
         <label for="radio4">Face Off</label>
      </div>
      <button type="submit" name="btnSub">Add</button>
    </form>
  </body>
</html>