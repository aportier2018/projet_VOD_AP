<!DOCTYPE html>
<html lang="fr">

  <head>
  	<meta charset="utf-8">
  	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

  	<title> formulaire de connexion de l'UTILISATEUR - Projet VOD AP</title>
  	<link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  </head>
  </head>
  <body>
    <?php include("header.php") ?>
    <main class ="f_connexion_user">
      <section class="marginB">
        <div class="container">
           <form method="post" action="validation_inscription.php">
               <fieldset>
                   <legend>Renseignez les champs pour vous connecter</legend>

                   <label for="nom">Nom : </label>
                   <input type="text" name="nom" id="nom" required><br>
                   <label for="prenom">Prenom : </label>
                   <input type="text" name="prenom" id="prenom" required><br>
                   <label for="email">Votre Email est </label>
                   <input type="email" name="email" id="email" required><br>
                   <label for="mdp1">Votre mot de passe est </label>
                   <input type="password" name="mdp1" id="mdp1" required><br>

                   <input type="submit" value="VALIDER">
                   <input type="reset" value="RESET">
               </fieldset>
           </form>
           </div>
        </section>
    </main>
    <?php include("footer.php") ?>
    <script src="js/scripts.js"></script>
  </body>
</html>
