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
         <div class="form-container sign-in-container">
            <form action="../php/logar.php" method="post">
               <h2 style="margin-bottom: 5px !important">
               Recupere sua senha</h1>
               <span>Use seu email</span>
               <input type="email" placeholder="Email" name="emailLogin" id="emailLogin" />
               <input type="password" placeholder="Password" name="passwdLogin" id="passwdLogin" />
               <button type="submit" >Enviar</button>
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
                  <p>Recupere suas informações e continue sua jornada</p>
               </div>
            </div>
         </div>
      </div>
      <footer>
         <p>Created by <a href="https://github.com/henriquecdb/Kraken">Kraken</a></p>
      </footer>
   </body>
</html>