<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kraken - Page</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="page.html">Kraken</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="page.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="problemset.php">Problemset</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contest.html">Contests</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <button class="btn btn-outline-success" type="submit">Login</button>
          </form>
        </div>
      </div>
    </nav>
    
    <!-- Main Section -->
<div class="container mt-5">
  <h2 class="mb-3">Problemset</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">ID da Questão</th>
        <th scope="col">Nome da Questão</th>
        <th scope="col">Assunto</th>
        <th scope="col">Pessoas que Resolveram</th>
        <th scope="col">Nível da Questão</th>
      </tr>
    </thead>
    <tbody>
      <!-- Aqui você pode adicionar as linhas da tabela conforme necessário -->
      <!--<tr>
        <td>1</td>
        <td>Exemplo de Questão</td>
        <td>Estrutura de Dados</td>
        <td>100</td>
        <td>Fácil</td>
      </tr>
      <tr>
        <td>0001</td>
        <td><a href="problem.html">Soma Fácil</a></td>
        <td>Iniciante</td>
        <td>0</td>
        <td>Fácil</td>
      </tr>-->

      <?php include "../php/problemset.php" ?>
    </tbody>
  </table>
</div>

    <!-- footer -->
    <div class="container" id="footer">
      <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
          <li class="nav-item">
            <a href="#" class="nav-link px-2 text-body-secondary">Home</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link px-2 text-body-secondary">Problemset</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link px-2 text-body-secondary">Support</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link px-2 text-body-secondary">FAQs</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link px-2 text-body-secondary">About</a>
          </li>
        </ul>
        <p class="text-center text-body-secondary">© 2023 Kraken, Inc</p>
      </footer>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
