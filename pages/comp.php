<?php
session_start();
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $_SESSION['idComp'] = $_GET['id'];
}
?>

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
  <?php include "../php/navbar.php" ?>

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
        <?php include "../php/contest_problems.php" ?>
      </tbody>
    </table>
  </div>
 
  <!-- footer -->
  <?php include "../php/footer.php" ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>