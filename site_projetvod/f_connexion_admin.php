<!DOCTYPE html>
<html lang="fr">

  <head>
  	<meta charset="utf-8">
  	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

  	<title>formulaire connexion Admin - Projet VOD AP</title>
  	<link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  </head>

  <body>
    <?php include("header.php") ?>
    <main>
      <div>
        <form method="post" action="v_connexion_admin.php">
          <legend>Connexion</legend>
          <label for="mail">Email : </label>
          <input type="email" name="mail" id="mail" required><br>

          <label for="mdp">Mot de passe : </label>
          <input type="password" name="mdp" id="mdp" required><br>
          <input type="submit" value="SE CONNECTER">
        </form>
    </div>
    </main>
    <?php include("footer.php") ?>
  </body>
</html>
