<?php

$servername = "localhost";
$username = "root";
$password = null;
$dbName = "bpiResult";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);
// Check connection
if (!$conn) {
  echo("Connection failed: " . mysqli_connect_error());
}

?>
