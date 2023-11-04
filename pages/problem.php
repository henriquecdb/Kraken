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
    <style>
      .limites li {
        display: inline-block;
        list-style-type: none;
        margin-right: 10px;
      }
      .limites span {
        border-bottom: 1px solid;
      }
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <?php include "../php/navbar.php" ?>
    
    <!-- Main Section -->
    <div class="container mt-5">
      <h1 class="mb-3">0001 - Soma Fácil</h2>
      <hr>
      <ul class="limites">
        <li><span>Time Limit:</span> 1.00s</li>
        <li><span>Memory Limit:</span> 512 MB</li>
      </ul>

      <p>Calcular a soma de dois números inteiros A e B.</p>

      <h5>Input</h5>
      <p>O input consiste em dois números inteiros separados por um espaço.</p>
      <h5>Output</h5>
      <p>O output deve ser a soma dos dois números.</p>
      <h5>Example</h5>
      <p>
        Input:<br />
        2 3
      </p>
      <p>
        Output:<br />
        5
      </p>
      <button type="button" class="btn btn-primary">Submeter Solução</button>
    </div>

    <!-- footer -->
    <?php include "../php/footer.php" ?>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
