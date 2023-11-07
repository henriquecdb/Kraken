<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro de Questão - Kraken - Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <!-- Navbar -->
    <?php include "../php/navbar.php" ?>

    <!-- Main Section -->
    <div class="container mt-5">
        <h2>Cadastro de Nova Questão</h2>
        <form action="../php/create_question.php" method="post">
            <div class="mb-3">
                <label for="id_questao" class="form-label">ID da Questão:</label>
                <input type="number" class="form-control" id="id_questao" name="id_questao" required>
            </div>
            <div class="mb-3">
                <label for="titulo" class="form-label">Título:</label>
                <input type="text" class="form-control" id="titulo" name="titulo" required>
            </div>
            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição:</label>
                <textarea class="form-control" id="descricao" name="descricao" rows="4" required></textarea>
            </div>
            <div class="mb-3">
                <label for="pontuacao" class="form-label">Pontuação:</label>
                <input type="number" class="form-control" id="pontuacao" name="pontuacao" step="0.01" required>
            </div>
            <div class="mb-3">
                <label for="categoria" class="form-label">Categoria (ID):</label>
                <select class="form-select" id="categoria" name="categoria" aria-label="Default select example" required>
                    <option value="" selected disabled>Selecione a categoria</option>
                    <?php
                    $categorias = ["Iniciante", "Lógica", "Grafos", "Estrutura de Dados", "String", "SQL", "Matemática"];
                    foreach ($categorias as $index => $categoria) {
                        echo "<option value=\"$index\">$categoria</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="descricao_input" class="form-label">Descrição de Entrada:</label>
                <textarea name="descricao_input" class="form-control" id="descricao_input" rows="4" cols="50"></textarea>
            </div>
            <div class="mb-3">
                <label for="descricao_output" class="form-label">Descrição de Saída:</label>
                <textarea name="descricao_output" class="form-control" id="descricao_output" rows="4" cols="50"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar Questão</button>
        </form>
    </div>

    <!-- Footer -->
    <?php include "../php/footer.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>