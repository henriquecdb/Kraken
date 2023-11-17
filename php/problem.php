<?php

require('sql_connection.php');

$conn = connect_db();

if (isset($_GET['id']) && $_GET['id'] !== null) {
    $idQuestao = $_GET['id'];

    $sql = "SELECT Questao.ID_Questao, Questao.Titulo, Categoria.Tipo, Questao.Pontuacao, Questao.Descricao, Questao.Descricao_Input, Questao.Descricao_Output 
            FROM Questao 
            INNER JOIN Categoria ON Questao.fk_Categoria_ID = Categoria.ID_Categoria 
            WHERE Questao.ID_Questao = $idQuestao";

    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $questaoDetalhes = $result->fetch_assoc();
?>
<head>
<title><?php echo $questaoDetalhes['Titulo']; ?> - Kraken - Page</title>
    </head>

    <!-- Main Section -->
<div class="container mt-5" id="questao-<?php echo $idQuestao; ?>">
    <div class="container mt-5">
        <h1 class="mb-3"><?php echo $questaoDetalhes['Titulo']; ?></h1>
        <hr>
        <ul class="limites">
            <li><span>Time Limit:</span> 1.00s</li>
            <li><span>Memory Limit:</span> 512 MB</li>
        </ul>

        <p><?php echo $questaoDetalhes['Descricao']; ?></p>

        <h5>Input</h5>
        <pre><?php echo $questaoDetalhes['Descricao_Input']; ?></pre>

        <h5>Output</h5>
        <pre><?php echo $questaoDetalhes['Descricao_Output']; ?></pre>
        <div class="mb-3">
            <button type="button" class="btn btn-primary mr-2">Submeter Solução</button>
            <form class="d-inline">
            <a href="javascript:history.back()" class="btn btn-secondary">Voltar</a>
            </form>
        </div>
    </div>
</div>
<?php
    } else {
        echo "Questão não encontrada.";
    }
} else {
    echo "ID da questão não especificado.";
}

$conn->close();
?>