<?php include("connectbdd.php") ?>
<!DOCTYPE html>
<html lang="fr">

  <head>
  	<meta charset="utf-8">
  	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

  	<title>Index - Projet VOD AP</title>
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

     <main class="liste_film">

               <?php
             // Requête SQL qui va retourner toutes les entrées de la table "films"
             $QueryToExecute = 'SELECT * FROM film';
             $reponse = $dbh->prepare($QueryToExecute);
             // Execution de la requête
             $reponse->execute();
             // On affiche chaque entrée une à une
             while ($row = $reponse->fetch(PDO::FETCH_ASSOC))
             {
             ?>
     <div>
       <a href="detail.php?id=<?php echo $row['id_film']; ?>"><img src="<?php echo $row['affiche']; ?>" class="resize" /></a>
     </div>
             <?php
             }
             $reponse->closeCursor(); // Termine le traitement de la requête
             ?>

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
