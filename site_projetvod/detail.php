<?php
include("connectbddlocal.php")//include("connectbdd.php")
?> ?>
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

                 <?php
                    $idfilm =$_GET["id"];

                    $descriptif = 'SELECT * FROM film WHERE id_film="'.$idfilm.'"';
                    $reponse = $dbh->prepare($descriptif);
                    // Execution de la requête
                    $reponse->execute();

                    // On affiche chaque entrée une à une
                    $row = $reponse->fetch(PDO::FETCH_ASSOC);

                  ?>

        <div>

        <img src ='<?php echo $row['affiche'];?>'></div>

        <div class="descriptif">
          <h1><?php echo $row['titre'];?></h1>
          <span>Synopsis : </span><p>" <?php echo $row['synopsis'];?> "</p>
          <span>Date de sortie : </span><p>- <?php echo date("d/m/Y", strtotime($row['date_sortie'])); ?></p>
                    <?php

                     $reponse->closeCursor();// Termine le traitement de la requête
                    ?>


          <div class="genre">

                    <?php
                       $genre = 'SELECT  genre FROM genre NATURAL JOIN possede NATURAL JOIN film WHERE id_film ="'.$idfilm.'" ';
                       $reponse = $dbh->prepare($genre);
                       // Execution de la requête
                       $reponse->execute();  ?>
                       <!-- // On affiche chaque entrée une à une -->
                       <span>Genre :</span><p>-

                      <?php
                     while ($row = $reponse->fetch(PDO::FETCH_ASSOC))
                     {
                     echo $row['genre']." ";?></p>

                       <?php
                    }
                      $reponse->closeCursor();// Termine le traitement de la requête
                    ?>
            </div>

          <div class="acteur">
          <span>Acteurs :</span>
                      <?php
                        $acteur ='SELECT  p_acteur, n_acteur FROM acteur NATURAL JOIN joue NATURAL JOIN film WHERE id_film = "'.$idfilm.'"';

                        $reponse = $dbh->prepare($acteur);
                        // Execution de la requête
                        $reponse->execute();
                        // On affiche chaque entrée une à une
                         while ($row = $reponse->fetch(PDO::FETCH_ASSOC))
                          {
                      ?>

              <p>- <?php echo $row['n_acteur']." ".$row['p_acteur'];?></p>
                      <?php
                          }
                           $reponse->closeCursor();// Termine le traitement de la requête
                      ?>
          </div>

          <div class="realisateur">
            <span>Réalisateurs :</span>
                    <?php
                        $realisateur ='SELECT  p_real, n_real FROM realisateur NATURAL JOIN realise NATURAL JOIN film WHERE id_film = "'.$idfilm.'"';
                        $reponse = $dbh->prepare($realisateur);
                        // Execution de la requête
                        $reponse->execute();
                        // On affiche chaque entrée une à une
                         while ($row = $reponse->fetch(PDO::FETCH_ASSOC))
                        {
                    ?>

              <p>- <?php echo $row['n_real']." ".$row['p_real'];?></p>
                    <?php
                        }
                         $reponse->closeCursor();// Termine le traitement de la requête
                    ?>
          </div>
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
