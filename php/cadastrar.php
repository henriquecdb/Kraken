<?php

$nome = $_POST["nameCadastro"];
$email = $_POST["emailCadastro"];
$senha = $_POST["passwdCadastro"];

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

$sql = "INSERT INTO Aluno VALUES ('$nome', '$email', 160, 0, '$senha')";
$result = $conn->query($sql);
$conn->close();


if ($result === TRUE) {
    header("Location: ../pages/login.php");
    exit();
    //echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>