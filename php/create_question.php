<?php

require('sql_connection.php');

$conn = connect_db();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $pontuacao = $_POST['pontuacao'];
    $categoria = $_POST['categoria'];
    $descricaoInput = $_POST['descricao_input'];
    $descricaoOutput = $_POST['descricao_output'];

    $sql = "INSERT INTO Questao (Titulo, Descricao, Pontuacao, fk_Categoria_ID, Descricao_Input, Descricao_Output)
            VALUES ('$titulo', '$descricao', $pontuacao, $categoria, '$descricaoInput', '$descricaoOutput')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../admin_pages/problemset.php");
        exit(); 
    } else {
        echo "Erro ao cadastrar a questão: " . $conn->error;
    }
}

$conn->close();
