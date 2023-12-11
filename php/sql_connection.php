<?php

function connect_db() {

  $servername = "projetos.linceonline.com.br";
  $username = "projetos_kraken";
  $password = "ppbgc}F(xzao";
  $dbname = "projetos_kraken"; 
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . mysqli_connect_error());
  }

  return $conn;
}

?>