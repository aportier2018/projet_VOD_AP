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

    <main>
      <h1>Détail de votre film</h1>

 <div class="detail">
   <?php
   $reponse = $dbh->query('SELECT titre, synopsis FROM film WHERE titre = "dragon" ');
   ?>

   <!-- // On affiche chaque entrée une à une -->
   <?php
     while ($donnees = $reponse->fetch())
     {
      ?>
      <h3>Titre</h3><?php echo $donnees['titre'];?><br/>
      <h3>Synopsis</h3> <?php echo $donnees['synopsis'];?><br/>
      <?php
      }
       $reponse->closeCursor();// Termine le traitement de la requête
     ?>

    <?php
      $reponse = $dbh->query('SELECT  p_acteur, n_acteur FROM acteur NATURAL JOIN joue NATURAL JOIN film WHERE titre = "dragon" ');
      echo "<h3>Acteurs : </h3>";
        while ($donnees = $reponse->fetch())
        {
          echo $donnees['n_acteur']." ".$donnees['p_acteur']."<br/>";
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
