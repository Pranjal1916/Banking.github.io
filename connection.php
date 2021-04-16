<?php
mysqli_connect('localhost','root','');
$mysqli->select_db($banking);
if ($result = $mysqli->query("SELECT DATABASE()")) {
} else {
  die;
}
?>