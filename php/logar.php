<?php

$login_erro = false;

$email = $_POST["emailLogin"];
$senha = $_POST["passwdLogin"];

if (empty($email) || empty($senha)) {
    header('Location: ../pages/login.php?erroLogin=1');
    exit();
}

require('sql_connection.php');
$conn = connect_db();

$sql = "SELECT Nome_Aluno, Email, Senha FROM Aluno WHERE Email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($user = $result->fetch_assoc()) {
        $senha_armazenada = base64_decode($user['Senha']);

        if ($senha === $senha_armazenada) {
            $admin = strcmp("@cefetmg.br", strstr($user['Email'], "@cefetmg.br"));

            if($admin == 0) {
                header("Location: ../admin_pages/page.php");
            } else {
                header("Location: ../pages/page.php");
            }
        } else {
            header('Location: ../pages/login.php?erroLogin=1');
        }
    }
} else {
    header('Location: ../pages/login.php?erroLogin=1');
}

$conn->close();
exit();
?>