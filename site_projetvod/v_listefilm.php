<?php include("connectbdd.php") ?>
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
    <!-- <header> -->
      <?php include("header.php") ?>
    <!-- </header> -->
  validation inscription
    <main class='v_listfilm'>

      <?php
           $titre = $_POST['titre'];
           $synopsis = $_POST['synopsis'];
           $date = $_POST['date_sortie'];
           $genre = $_POST['genre'];
           $n_acteur= $_POST['n_acteur'];
           $p_acteur= $_POST['p_acteur'];
           $n_real= $_POST['n_realisateur'];
           $p_real= $_POST['p_realisateur'];
           $affiche= $_POST['affiche'];

           echo "Bonjour ";

           //: $dbh->exec($sql1);
           //$lienidfilm = $dbh->query('SELECT id_films FROM Films WHERE Titre = "'.$titre.'"');
           //$lienid = $lienidfilm->fetch();
           //$currentid = $lienid['id_films'];
           //$sql7 = "INSERT INTO Appartenir (id_films, id_genre) VALUES ('$currentid', '$genre')";//


        $insertfilm ="INSERT INTO film(titre, synopsis, date_sortie, affiche) VALUES('$titre','$synopsis',' $date','$affiche')";
        $idfilm =
        $insertacteur ="INSERT INTO acteur(n_acteur, p_acteur) VALUES('$n_acteur','$p_acteur')";
        $insertreal ="INSERT INTO realisateur(n_real, p_real) VALUES('$p_real','$p_real')";


        $insertjoue="INSERT INTO joue(id_film, id_acteur) VALUES ('')"


        $dbh->exec($insertfilm);
        $dbh->exec($insertacteur);
        $dbh->exec($insertreal);



      ?>

    </main>

    <!-- FOOTER -->
    <?php include('footer.php')?>
    <!-- FOOTER -->

	   <script src="js/scripts.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </body>

</html>
