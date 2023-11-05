<?php
$servername = "108.179.253.195";
$username = "proje500_ralves";
$password = "5cYPggNpnK36";
$dbname = "proje500_G42023";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_GET['id']) && $_GET['id'] !== null) {
    $idQuestao = $_GET['id'];

    // Consulta para obter os detalhes da questão com base no ID
    $sql = "SELECT Questao.ID_Questao, Questao.Titulo, Categoria.Tipo, Questao.Pontuacao, Questao.Descricao, Questao.Descricao_Input, Questao.Descricao_Output 
            FROM Questao 
            INNER JOIN Categoria ON Questao.fk_Categoria_ID = Categoria.ID_Categoria 
            WHERE Questao.ID_Questao = $idQuestao";

    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $questaoDetalhes = $result->fetch_assoc();
?>
        <!DOCTYPE html>
        <html lang="pt-br">

        <head>
            <meta charset="UTF-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <title><?php echo $questaoDetalhes['Titulo']; ?> - Kraken - Page</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
            <style>
                .limites li {
                    display: inline-block;
                    list-style-type: none;
                    margin-right: 10px;
                }

                .limites span {
                    border-bottom: 1px solid;
                }

                pre {
                    white-space: pre-wrap;
                    background-color: #f8f9fa;
                    padding: 10px;
                    border: 1px solid #dee2e6;
                    border-radius: 4px;
                }
            </style>
        </head>

        <body>
            <!-- Navbar -->
            <?php include "../php/navbar.php" ?>

            <!-- Main Section -->
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

                <button type="button" class="btn btn-primary">Submeter Solução</button>

                <form action="../php/delete_question.php" method="post">
                <input type="hidden" name="id" value="<?php echo $idQuestao; ?>">
                <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja deletar esta questão?')">Deletar Questão</button>
            </form>
            </div>

            <!-- Footer -->
            <?php include "../php/footer.php" ?>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        </body>

        </html>
<?php
    } else {
        echo "Questão não encontrada.";
    }
} else {
    echo "ID da questão não especificado.";
}

$conn->close();
?>