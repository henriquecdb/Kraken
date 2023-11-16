<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Kraken - Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
  <!-- Navbar -->
  <?php include "../apps/controller/navbar.php" ?>

  <!-- Filtro por Categoria e Busca por Nome -->
  <div class="container mt-3">
    <form action="problemset.php" method="get" class="d-flex justify-content-end">
      <label for="categoria" class="me-2">Filtrar por Categoria:</label>
      <select name="categoria" id="categoria">
        <option value="">Todas as Categorias</option>
        <option value="Iniciante">Iniciante</option>
        <option value="Lógica">Lógica</option>
        <option value="Grafos">Grafos</option>
        <option value="Estrutura de Dados">Estrutura de Dados</option>
        <option value="String">String</option>
        <option value="SQL">SQL</option>
        <option value="Matemática">Matemática</option>
        <!-- Adicione outras opções de categoria aqui -->
      </select>
      <label for="nomeQuestao" class="me-2">Buscar por Nome:</label>
      <input type="text" name="nomeQuestao" id="nomeQuestao" class="form-control me-2" placeholder="Digite o nome da questão">

      <button type="submit" class="btn btn-primary">Filtrar</button>
    </form>
  </div>

  <!-- Main Section -->
  <div class="container mt-5">
    <h2 class="mb-3">Problemset</h2>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">ID da Questão</th>
          <th scope="col">Nome da Questão</th>
          <th scope="col">Assunto</th>
          <th scope="col">Pontuação da Questão</th>
          <th scope="col">Nível da Questão</th>
        </tr>
      </thead>
      <tbody>
        <?php include "../apps/controller/problemset.php" ?>
      </tbody>
    </table>
    <div class="container mt-3">
    <a href="create_question.php" class="btn btn-success">Cadastrar Nova Questão</a>
</div>
  </div>
 
  <!-- footer -->
  <?php include "../apps/controller/footer.php" ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>