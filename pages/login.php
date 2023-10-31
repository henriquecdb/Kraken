<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kraken</title>
    <link rel="stylesheet" href="../styles/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>
  <body>

    <h2>Bem-vindo ao KRAKEN</h2>
    <div class="container" id="container">
      <div class="form-container sign-up-container">
        <form action="../php/cadastrar.php" method="post">
          <h1>Criar conta</h1>
          <span>Use o e-mail para se cadastrar</span>
          <input type="text" placeholder="Name" name="nameCadastro" id="nameCadastro" />
          <input type="email" placeholder="Email" name="emailCadastro" id="emailCadastro" />
          <input type="password" placeholder="Password" name="passwdCadastro" id="passwdCadastro" />
          <button type="submit" >Cadastrar</button>
        </form>
      </div>

      <div class="form-container sign-in-container">
        <form action="../php/logar.php" method="post">
          <h1>Entrar</h1>
          <span>Use sua conta</span>
          <input type="email" placeholder="Email" name="emailLogin" id="emailLogin" />
          <input type="password" placeholder="Password" name="passwdLogin" id="passwdLogin" />
          <a href="forget.php">Esqueceu a senha?</a>
          <button type="submit" >Entrar</button>
        </form>
      </div>

      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-left">
            <h1>Bem-vindo!</h1>
            <p>
              Para se manter conectado, entre com suas informações
            </p>
            <button class="ghost" id="signIn">Entrar</button>
          </div>
          <div class="overlay-panel overlay-right">
            <h1>Olá, Amigo!</h1>
            <p>Entre com suas informações e comece sua jornada</p>
            <button class="ghost" id="signUp" >Cadastrar</button>
          </div>
        </div>
      </div>
    </div>

    <footer>
      <p>Created by <a href="https://github.com/henriquecdb/Kraken">Kraken</a></p>
    </footer>
    <script src="../js/scripts.js"></script>
  </body>
</html>
