<?php

require('sql_connection.php');

$conn = connect_db();

// Filtro por categoria
$whereClause = "";
if (isset($_GET['categoria']) && !empty($_GET['categoria'])) {
    $categoriaFiltrada = $_GET['categoria'];
    $whereClause = "WHERE Categoria.Tipo = '$categoriaFiltrada'";
}

// Filtro por nome da questão
if (isset($_GET['nomeQuestao']) && !empty($_GET['nomeQuestao'])) {
    $nomeQuestao = $_GET['nomeQuestao'];
    $whereClause .= (empty($whereClause) ? "WHERE" : " AND") . " Questao.Titulo LIKE '%$nomeQuestao%'";
}

$sql = "SELECT Questao.ID_Questao, Questao.Titulo, Categoria.Tipo, Questao.Pontuacao 
        FROM Questao 
        INNER JOIN Categoria ON Questao.fk_Categoria_ID = Categoria.ID_Categoria 
        $whereClause
        ORDER BY Questao.ID_Questao";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($questao = $result->fetch_assoc()) {
        ?>
        <tr>
            <td><?php echo $questao['ID_Questao']; ?></td>
            <td>
                <a href="problem.php?id=<?php echo $questao['ID_Questao']; ?>">
                    <?php echo $questao['Titulo']; 
                    ?>
                </a>
            </td>
            <td><?php echo $questao['Tipo']; ?> </td>
            <td><?php echo $questao['Pontuacao']; ?> </td>
            <td><?php echo categorizarDificuldade($questao['Pontuacao']); ?></td>
        </tr>
        <?php
    }
} else {
    echo "Nenhuma questão encontrada.";
}

$conn->close();
function categorizarDificuldade($pontuacao) {
    if ($pontuacao <= 20) {
        return "Fácil";
    } elseif ($pontuacao > 20 && $pontuacao <= 50) {
        return "Média";
    } else {
        return "Difícil";
    }
}
?>