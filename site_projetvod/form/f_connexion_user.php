<!DOCTYPE html>
<html lang="fr">

  <head>
  	<meta charset="utf-8">
  	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

  	<title> formulaire de connexion de l'UTILISATEUR - Projet VOD AP</title>
  	<link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/formulaire.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  </head>
  </head>
  <body>
    <?php include("include/header.php") ?>
    <main class ="f_connexion_user">
      <section class="marginB">
        <div class="contai ner">
           <form method="post" action="validation_inscription.php">
               <fieldset>
                   <legend>Inscription</legend>
                   <span>Titre : </span>
                   <input type="radio" name="titre" value="Mme" id="F" required/><label for="F" class="notmarge">Mme</label>
                   <input type="radio" name="titre" value="M" id="M" required/><label for="M" class="notmarge">M</label><br>
                   <label for="nom">Nom : </label>
                   <input type="text" name="nom" id="nom" required><br>
                   <label for="prenom">Prenom : </label>
                   <input type="text" name="prenom" id="prenom" required><br>
                   <label for="email">Email : </label>
                   <input type="email" name="email" id="email" required><br>
                   <label for="mdp1">Mot de passe : </label>
                   <input type="password" name="mdp1" id="mdp1" required><br>
                   <label for="mdp2">Confirmer mot de passe : </label>
                   <input type="password" name="mdp2" id="mdp2" required><br>
                   <label for="type">Vous êtes :</label><br>
                   <select name="type" id="type" required>
                       <option value="1">Un visiteur</option>
                       <option value="2">Un exposant</option>
                   </select><br>
                   <input type="submit" value="S'INSCRIRE">
                   <input type="reset" value="RESET">
               </fieldset>
           </form>
           </div>
        </section>
    </main>
    <?php include("include/footer.php") ?>
  </body>
</html>
