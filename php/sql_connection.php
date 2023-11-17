<?php

function connect_db() {

  $servername = "108.179.253.195";
  $username = "proje500_ralves";
  $password = "5cYPggNpnK36";
  $dbname = "proje500_G42023";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . mysqli_connect_error());
  }

  return $conn;
}

?>