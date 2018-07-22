<?php include("connectbddlocal.php")// include("connectbdd.php")
?>
<!DOCTYPE html>
<html lang="fr">

  <head>
  	<meta charset="utf-8">
  	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

  	<title> formulaire pour supprimer un compte - Projet VOD AP</title>
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
    <main>
      <section class="marginB">
        <div class="container">
           <form method="post" action="v_suppression.php">
               <fieldset>
                   <legend>Pour supprimer votre compte, veuillez remplir tous les champs</legend>
                   <span>Civilité : </span>
                   <input type="radio" name="civilite" value="Mme" id="F" required/><label for="F" class="notmarge">Mme</label>
                   <input type="radio" name="civilite" value="M" id="M" required/><label for="M" class="notmarge">M</label><br>
                   <label for="nom">Nom : </label>
                   <input type="text" name="nom" id="nom" required><br>
                   <label for="prenom">Prenom : </label>
                   <input type="text" name="prenom" id="prenom" required><br>
                   <label for="email">Email : </label>
                   <input type="email" name="email" id="email" required><br>
                   <label for="login">Login: </label>
                   <input type="text" name="login" id="login" required><br>
                   <!-- <label for="mdp1">Mot de passe : </label>
                   <input type="password" name="mdp1" id="mdp1" required><br> -->

                    <p class="suppression"><span> ATTENTION </br> Vous devrez vous réinscrire pour obtenir un nouveau compte.</span></p>
                   <input type="submit" value="SUPPRIMER">
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
