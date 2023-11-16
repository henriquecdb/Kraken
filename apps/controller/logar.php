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

$sql = "SELECT Nome_Aluno, Email FROM Aluno WHERE Email='$email' AND Senha='$senha'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($user = $result->fetch_assoc()) {
        $admin = strcmp("@cefetmg.br", strstr($user['Email'], "@cefetmg.br"));
    
        if($admin == 0) {
            header("Location: ../../admin_pages/page.php");
        } else {
            header("Location: ../views/page.php");
        }
    }
} else {
    header('Location: ../views/login.php?erroLogin=1');
}

$conn->close();
exit();

?>