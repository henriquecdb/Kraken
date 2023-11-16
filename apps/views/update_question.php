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

// Verifica se o ID da questão foi passado na URL
if (isset($_GET['id']) && $_GET['id'] !== null) {
    $idQuestao = $_GET['id'];

    $sql = "SELECT Questao.ID_Questao, Questao.Titulo, Questao.Pontuacao, Questao.Descricao, Questao.Descricao_Input, Questao.Descricao_Output, Categoria.Tipo, fk_Categoria_ID
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
            <title>Editar Questão - Kraken - Page</title>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
        </head>

        <body>
            <!-- Navbar -->
            <?php include "../controller/navbar.php" ?>

            <!-- Main Section -->
            <div class="container mt-5">
                <h2>Editar Questão</h2>
                <form action="../controller/update_question.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $questaoDetalhes['ID_Questao']; ?>">

                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título:</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo $questaoDetalhes['Titulo']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="descricao" class="form-label">Descrição:</label>
                        <textarea class="form-control" id="descricao" name="descricao" rows="4" required><?php echo $questaoDetalhes['Descricao']; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="pontuacao" class="form-label">Pontuação:</label>
                        <input type="number" class="form-control" id="pontuacao" name="pontuacao" step="0.01" value="<?php echo $questaoDetalhes['Pontuacao']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="categoria" class="form-label">Categoria (ID):</label>
                        <select class="form-select" id="categoria" name="categoria" aria-label="Default select example" required>
                            <option value="" disabled>Selecione a categoria</option>
                            <?php
                            $categorias = ["Iniciante", "Lógica", "Grafos", "Estrutura de Dados", "String", "SQL", "Matemática"];
                            foreach ($categorias as $index => $categoria) {
                                $selected = ($questaoDetalhes['fk_Categoria_ID'] == $index) ? 'selected' : '';
                                echo "<option value=\"$index\" $selected>$categoria</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="descricao_input" class="form-label">Descrição de Entrada:</label>
                        <textarea name="descricao_input" class="form-control" id="descricao_input" rows="4" cols="50"><?php echo $questaoDetalhes['Descricao_Input']; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="descricao_output" class="form-label">Descrição de Saída:</label>
                        <textarea name="descricao_output" class="form-control" id="descricao_output" rows="4" cols="50"><?php echo $questaoDetalhes['Descricao_Output']; ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Atualizar Questão</button>
                </form>
                <a href="javascript:history.back()" class="btn btn-secondary mt-3">Voltar</a>
            </div>

            <!-- Footer -->
            <?php include "../controller/footer.php" ?>

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
?>