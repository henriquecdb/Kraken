<?php

require('sql_connection.php');

$conn = connect_db();

if (isset($_SESSION['idComp']) && !empty($_SESSION['idComp'])) {
    $idComp = $_SESSION['idComp'];
    echo "ID COMPETICAO = ".$_GET['id'];

    $sql = "SELECT Questao.ID_Questao, Questao.Titulo, Categoria.Tipo, Questao.Pontuacao 
        FROM Questao 
        INNER JOIN Relacao_Questao_Equipe_Possui ON Questao.ID_Questao = Relacao_Questao_Equipe_Possui.fk_Questao_ID
        AND Relacao_Questao_Equipe_Possui.fk_Questao_ID = $idComp
        INNER JOIN Categoria ON Questao.fk_Categoria_ID = Categoria.ID_Categoria
        ORDER BY Questao.ID_Questao";
    $result = $conn->query($sql);
}

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