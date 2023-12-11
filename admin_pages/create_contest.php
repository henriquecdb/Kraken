<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Kraken - Cadastro de Competição</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
          crossorigin="anonymous"/>
    <!-- <link rel="stylesheet" href="styles/aux.css" /> -->
</head>
<body>
<?php include "../php/navbar.php" ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6">
            <h2>Cadastrar Competição</h2>
            <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                <div class="mb-3">
                    <label for="nomeCompeticao" class="form-label">Nome da Competição</label>
                    <input type="text" class="form-control" id="nomeCompeticao" name="nomeCompeticao" required>
                </div>
                <div class="mb-3">
                    <label for="dataInicio" class="form-label">Data de Início</label>
                    <input type="date" class="form-control" id="dataInicio" name="dataInicio" required>
                </div>
                <div class="mb-3">
                    <label for="dataFim" class="form-label">Data de Fim</label>
                    <input type="date" class="form-control" id="dataFim" name="dataFim" required>
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>
    </div>
</div>

<!-- footer -->
<?php include "../php/footer.php" ?>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"
></script>
</body>
</html>