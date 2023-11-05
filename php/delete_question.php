<?php
$servername = "108.179.253.195";
$username = "proje500_ralves";
$password = "5cYPggNpnK36";
$dbname = "proje500_G42023";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $idQuestao = $_POST['id'];

    // Execute a consulta para deletar a questão
    $sqlDelete = "DELETE FROM Questao WHERE ID_Questao = $idQuestao";
    if ($conn->query($sqlDelete) === TRUE) {
        echo "Questão deletada com sucesso!";
    } else {
        echo "Erro ao deletar a questão: " . $conn->error;
    }
}

$conn->close();
?>