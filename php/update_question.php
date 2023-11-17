<?php

require('sql_connection.php');

$conn = connect_db();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera os dados do formulário
    $idQuestao = $_POST["id"];
    $titulo = $_POST["titulo"];
    $descricao = $_POST["descricao"];
    $pontuacao = $_POST["pontuacao"];
    $categoria = $_POST["categoria"];
    $descricao_input = $_POST["descricao_input"];
    $descricao_output = $_POST["descricao_output"];

    $sql = "UPDATE Questao 
            SET Titulo = '$titulo', Pontuacao = '$pontuacao', Descricao = '$descricao', 
                fk_Categoria_ID = '$categoria', Descricao_Input = '$descricao_input', 
                Descricao_Output = '$descricao_output' 
            WHERE ID_Questao = $idQuestao";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../admin_pages/problem.php?id=$idQuestao");
        exit();
    } else {
        echo "Erro ao atualizar a questão: " . $conn->error;
    }
}

$conn->close();
