<?php
  // Get IDs
  $p_id = $_POST['p_id'];
  // Delete the player from the database
  require_once('config.php');
  $query = "DELETE FROM players WHERE pID = '$p_id'";
  $db->query($query);
  // display the Product List page
  include('wel.php');
?>