

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../css/login.css" />
  </head>
  <body>
    <a href="index.php"><img src="../img/arrow-left.svg" id="go-back" /></a>
    <main>
      <div class="part">
        <form
          method="post"
          action="../php/Function_Dashbord/log.php"
          class="content"
        >
          <h2>Sign In</h2>
          <p class="first-p">Connectez-vous pour rester connecté.</p>
          <label for="user">Nom utilisateur</label>
          <input type="text" name="user" />
          <label for="mdp">Mot de passe</label>
          <input type="password" name="mdp" />

          <button type="submit">Sign in</button>
        </form>
      </div>
      <div class="img-side"></div>
    </main>
  </body>
</html>
