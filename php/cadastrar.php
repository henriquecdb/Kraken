<?php
session_start();

$nome = $_POST["nameCadastro"];
$email = $_POST["emailCadastro"];
$senha = $_POST["passwdCadastro"];

if (empty($nome) || empty($email) || empty($senha)) {
    $_SESSION['message'] = "Todos os campos devem ser preenchidos!";
    $_SESSION['msg_type'] = "failure";
    header("Location: ../pages/login.php");
    exit();
}

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
    $_SESSION['message'] = "Cadastro realizado com sucesso!";
    $_SESSION['msg_type'] = "success";
    header("Location: ../pages/login.php");
    exit();
} else {
    $_SESSION['message'] = "Error: " . $sql . "<br>" . $conn->error;
    $_SESSION['msg_type'] = "failure";
    header("Location: ../pages/login.php");
    exit();
}
?>
