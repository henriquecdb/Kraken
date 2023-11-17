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

$sql = "SELECT Nome_Aluno, Email FROM Aluno WHERE Email='$email' AND Senha='$senha'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($user = $result->fetch_assoc()) {
        $admin = strcmp("@cefetmg.br", strstr($user['Email'], "@cefetmg.br"));
    
        if($admin == 0) {
            header("Location: ../admin_pages/page.php");
        } else {
            header("Location: ../pages/page.php");
        }
    }
} else {
    header('Location: ../pages/login.php?erroLogin=1');
}

$conn->close();
exit();

?>