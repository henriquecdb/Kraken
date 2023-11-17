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

require('sql_connection.php');

$conn = connect_db();

$sql = "INSERT INTO Aluno (Nome_Aluno, Email, Ranking, Senha) VALUES ('$nome', '$email', 0, '$senha')";
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
