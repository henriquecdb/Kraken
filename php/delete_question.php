<?php

require('sql_connection.php');

$conn = connect_db();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $idQuestao = $_POST['id'];
    $sqlDelete = "DELETE FROM Questao WHERE ID_Questao = $idQuestao";
    if ($conn->query($sqlDelete) === TRUE) {
        header("Location: ../admin_pages/problemset.php");
        exit;    
    } else {
        echo "Erro ao deletar a questão: " . $conn->error;
    }
}

$conn->close();
?>