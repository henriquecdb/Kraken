<?php

$email = $_POST["emailLogin"];
$senha = $_POST["passwdLogin"];

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

$sql = "SELECT Nome_Aluno FROM Aluno WHERE Email='$email' AND Senha='$senha'";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
    header("Location: ../pages/page.html");
    $conn->close();
    exit();
    //echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>