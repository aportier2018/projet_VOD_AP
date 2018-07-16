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
    <?php include("include/header.php") ?>
    <!--**************
    *    FIN HEADER  *
     **************-->

    <main>
      <h1>Détail de votre film</h1>

 <div class="detail">
    <?php
    $reponse = $dbh->query('SELECT id_film, titre, synopsis FROM film WHERE titre="avatar"');

    // On affiche chaque entrée une à une
    while ($donnees = $reponse->fetch())
    {
    ?>
    <p>

    Titre  : <?php echo $donnees['titre']; ?><br />
    Synopsis : <?php echo $donnees['synopsis']; ?>
    </p>
    <?php
    }

    $reponse->closeCursor(); // Termine le traitement de la requête

    ?>
    <?php
    $req = $dbh->query(('SELECT n_acteur, p_acteur FROM acteur') INNER JOIN ('SELECT id_film, titre, synopsis FROM film WHERE titre="avatar"'));

    // On affiche chaque entrée une à une
    while ($donnees = $req->fetch())
    {
    ?>
    <p>

    nom acteur  : <?php echo $donnees['n_acteur']; ?><br />
    prénom acteur : <?php echo $donnees['p_acteur']; ?>
    </p>
    <?php
    }

    $reponse->closeCursor(); // Termine le traitement de la requête

    ?>


 </div>
  </main>

    <!--***********
    *   FOOTER    *
     **************-->
    <?php include("include/footer.php") ?>
    <!--***********
    *    FOOTER   *
     **************-->

    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
    <script src="js/scripts.js"></script>
  </body>

</html>
