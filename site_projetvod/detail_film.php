<?php include("connectbdd.php") ?>
<!DOCTYPE html>
<html lang="fr">

  <head>
  	<meta charset="utf-8">
  	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

  	<title>page detail film - Projet VOD AP</title>
  	<link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  </head>

  <body>

    <!--***********
    -    HEADER
     **************-->
    <?php include("header.php") ?>
    <!--**************
    *    FIN HEADER  *
     **************-->

    <main class="detail">
      <h1>Détail de votre film</h1>

   <?php
   $reponse = $dbh->query('SELECT titre, synopsis, affiche FROM film WHERE titre = "dragon" ');
   ?>

   <!-- // On affiche chaque entrée une à une -->
   <?php
     while ($donnees = $reponse->fetch())
     {
      ?>
      <img src ='<?php echo $donnees['affiche'];?>'>
      <div class="synopsis">
        <h3>Titre : <?php echo $donnees['titre'];?></h3>
        <h3>Synopsis :</h3> <p><?php echo $donnees['synopsis'];?></p>
      </div>
      <?php
      }
       $reponse->closeCursor();// Termine le traitement de la requête
     ?>

      <div class="acteur">
        <h3>Acteurs :</h3>
        <?php
          $reponse = $dbh->query('SELECT  p_acteur, n_acteur, genre FROM acteur NATURAL JOIN joue NATURAL JOIN film NATURAL JOIN possede NATURAL JOIN genre WHERE titre = "dragon" ');

            while ($donnees = $reponse->fetch())
            {
        ?>

          <p><?php echo $donnees['n_acteur']." ".$donnees['p_acteur'];?></p>


            <h3>Genre:</h3>
            <p><?php echo $donnees['genre'];?></p>
      <?php
        }
         $reponse->closeCursor();// Termine le traitement de la requête
    ?>
      </div>

  </main>

    <!--***********
    *   FOOTER    *
     **************-->
    <?php include("footer.php") ?>
    <!--***********
    *    FOOTER   *
     **************-->

    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
    <script src="js/scripts.js"></script>
  </body>

</html>
