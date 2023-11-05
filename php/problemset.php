<?php
$servername = "108.179.253.195";
$username = "proje500_ralves";
$password = "5cYPggNpnK36";
$dbname = "proje500_G42023";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . mysqli_connect_error());
}

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
                <a href="unic.php?id=<?php echo $questao['ID_Questao']; ?>">
                    <?php echo $questao['Titulo']; 
                    ?>
                </a>
            </td>
            <td><?php echo $questao['Tipo']; ?> </td>
            <td><?php echo $questao['Pontuacao']; ?> </td>
            <td>Fácil</td>
        </tr>
        <?php
    }
} else {
    echo "Nenhuma questão encontrada.";
}

$conn->close();
?>