<?php
  include('config.php');
  if (!isset($p_id)) {
    if(isset($_GET['p_id']) &&  !empty($_GET['p_id'])){
      $p_id = $_GET['p_id'];
    }
  }
   $query2 = "SELECT * FROM players ORDER BY pID";
  $players = $db->query($query2);

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
    <div id="content">
       <table>
        <tr>
          <th>ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>High School</th>
          <th>Position</th>
          <th>State</th>
          <th>Email</th>
          <th class="right">Class</th>
          <th>&nbsp;</th>
        </tr>
        <?php foreach ($players as $player) : ?>
        <tr>
          <td><?php echo $player['pID']; ?></td>
          <td><?php echo $player['fName']; ?></td>
          <td><?php echo $player['lName']; ?></td>
          <td><?php echo $player['highSchool']; ?></td>
          <td><?php echo $player['position']; ?></td>
          <td><?php echo $player['state']; ?></td>
          <td><?php echo $player['email']; ?></td>
          <td class="right"><?php echo $player['class']; ?> </td>
          <td><form action="delete_player.php" method="post" id="delete_player_form">
            <input type="hidden" name="p_id" value="<?php echo $player['pID']; ?>" />
            <input type="submit" value="Delete" />
            </form></td>
        </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </body>
</html>