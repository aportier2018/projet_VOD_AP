<!DOCTYPE html>
<html lang="fr">

  <head>
  	<meta charset="utf-8">
  	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

  	<title> formulaire d'inscription - Projet VOD AP</title>
  	<link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  </head>

  <body>
          <!--**********- HEADER -->
    <?php include("header.php") ?>
         <!---****** FIN HEADER -->

        <!--*********FORMULAIRE -->
    <main class="v_inscription">
      <section class="marginB">
        <div class="container">
           <form method="post" action="v_inscription.php">
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

                   <input type="submit" value="S'INSCRIRE">
                   <input type="reset" value="RESET">
               </fieldset>
           </form>
           </div>
        </section>
    </main>
    <!--********* FIN FORMULAIRE -->

    <!--*********FOOTER -->
    <?php include("footer.php") ?>
    <!--*********FIN FOOTER -->
    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
    <script src="../js/scripts.js"></script>

  </body>
</html>
