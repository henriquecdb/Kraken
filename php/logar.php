<?php

$login_erro = false;

$email = $_POST["emailLogin"];
$senha = $_POST["passwdLogin"];

if (empty($email) || empty($senha)) {
    header('Location: ../pages/login.php?erroLogin=1');
    exit();
}

$servername = "108.179.253.195";
$username = "proje500_ralves";
$password = "5cYPggNpnK36";
$dbname = "proje500_G42023";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT Nome_Aluno FROM Aluno WHERE Email='$email' AND Senha='$senha'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    header("Location: ../pages/page.php");
} else {
    header('Location: ../pages/login.php?erroLogin=1');
}

$conn->close();
exit();

?>