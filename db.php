<?php

$servername = "sql303.byethost12.com";
$username = "b12_23183042";
$password = "ahsanISCOOL";
$dbName = "b12_23183042_result";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);
// Check connection
if (!$conn) {
  echo("Connection failed: " . mysqli_connect_error());
}

?>