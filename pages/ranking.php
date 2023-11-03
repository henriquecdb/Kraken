<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kraken - Ranking</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <!-- <link rel="stylesheet" href="styles/aux.css" /> -->
  </head>
  <body>
    <?php include "../php/navbar.php" ?>
    
    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-12">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Posição</th>
                <th scope="col">Usuário</th>
                <th scope="col">Pontuação</th>
              </tr>
            </thead>
            <tbody>
            <?php include "../php/ranking.php" ?>              
            <!-- Adicione mais linhas conforme necessário 
              <tr>
                <th scope="row">1</th>
                <td>Usuário Exemplo 1</td>
                <td>1500</td>
              </tr>
               ... -->
            </tbody>
          </table>
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
