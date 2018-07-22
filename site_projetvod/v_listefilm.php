<?php
include("connectbddlocal.php")//include("connectbdd.php")
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title> Ajout d'un film - Projet VOD AP</title>
  <link rel="stylesheet" type="text/css" href="css/reset.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>

<body>
    <!-- <header> -->
      <?php include("header.php") ?>
    <!-- </header> -->

    <main class='v_listefilm'>

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

           echo "<h1>Bonjour validation de l'ajout du film <h1>";// $titre." ". $n_acteur."</h1>";

           //: $dbh->exec($sql1);
           //$lienidfilm = $dbh->query('SELECT id_films FROM Films WHERE Titre = "'.$titre.'"');
           //$lienid = $lienidfilm->fetch();
           //$currentid = $lienid['id_films'];
           //$sql7 = "INSERT INTO Appartenir (id_films, id_genre) VALUES ('$currentid', '$genre')";//

           //Inserer les données dans les tables hfiml, acteur, realisateur
        $insertfilm ="INSERT INTO film(titre, synopsis, date_sortie) VALUES('$titre','$synopsis',' $date')";
        $dbh->exec($insertfilm);

        // $insert_acteur ="INSERT INTO acteur(n_acteur, p_acteur) VALUES('$n_acteur','$p_acteur')";
        // $dbh->exec($insert_acteur);
        //
        // $insert_real ="INSERT INTO realisateur(n_real, p_real) VALUES('$n_real','$p_real')";
        // $dbh->exec($insert_real);


        //récupérer les id_film et id_genre pour faire l'association dans la table JOUE

        //$select_idfilm = $dbh->query('SELECT id_film FROM film WHERE titre = "'.$titre.'"');
        //$lire_idfilm = $select_idfilm ->fetch();
      //  $currentid = $lire_idfilm['id_films'];

        //$insert_joue="INSERT INTO joue(id_film, id_acteur) VALUES ('$currentid','$genre')";
      //  $dbh->exec($insert_joue);
      ?>

    </main>

    <!-- FOOTER -->
    <?php include('footer.php')?>
    <!-- FOOTER -->

	   <script src="js/scripts.js"></script>
  </body>

</html>
