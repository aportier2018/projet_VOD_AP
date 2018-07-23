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
           $titre = addslashes($_POST['titre']);
           $synopsis = addslashes($_POST['synopsis']);
           $date = addslashes($_POST['date_sortie']);
           $genre = addslashes($_POST['genre']);
           $n_acteur= addslashes($_POST['n_acteur']);
           $p_acteur= addslashes($_POST['p_acteur']);
           $n_real= addslashes($_POST['n_realisateur']);
           $p_real= addslashes($_POST['p_realisateur']);
           $affiche= addslashes($_POST['affiche']);

           echo "<p>Votre film a été ajouté <p>";// $titre." ". $n_acteur."</h1>";

           //: $dbh->exec($sql1);
           //$lienidfilm = $dbh->query('SELECT id_films FROM Films WHERE Titre = "'.$titre.'"');
           //$lienid = $lienidfilm->fetch();
           //$currentid = $lienid['id_films'];
           //$sql7 = "INSERT INTO Appartenir (id_films, id_genre) VALUES ('$currentid', '$genre')";//

           //Inserer les données dans les tables "film, acteur, realisateur"
        $insertfilm ="INSERT INTO film(titre, synopsis, date_sortie, affiche) VALUES('$titre','$synopsis',' $date', '$affiche')";
        $dbh->exec($insertfilm);

        $insert_acteur ="INSERT INTO acteur(n_acteur, p_acteur) VALUES('$n_acteur','$p_acteur')";
        $dbh->exec($insert_acteur);

        $insert_real ="INSERT INTO realisateur(n_real, p_real) VALUES('$n_real','$p_real')";
        $dbh->exec($insert_real);


        //récupérer les id_film et id_genre pour faire l'association dans la table" "POSSEDE"

        $select_idfilm = $dbh->query('SELECT id_film FROM film WHERE titre = "'.$titre.'"');
        $lire_idfilm = $select_idfilm ->fetch();
        $currentidf = $lire_idfilm['id_film'];

        $select_idgenre = $dbh->query('SELECT id_genre FROM genre WHERE genre = "'.$genre.'"');
        $lire_idgenre = $select_idgenre ->fetch();
        $currentidg = $lire_idgenre['id_film'];

        $insert_possede ="INSERT INTO possede(id_film, id_genre) VALUES ('$currentidf','$currentidg')";
        $dbh->exec($insert_possede);

        //récupérer les id_film et id_acteur pour faire l'association dans la table" "JOUE"
        $select_idacteur = $dbh->query('SELECT id_acteur FROM acteur WHERE n_acteur = "'.$n_acteur.'" AND p_acteur = "'.$p_acteur.'"');
        $lire_idacteur = $select_idacteur ->fetch();
        $currentida = $lire_idacteur['id_acteur'];

        $insert_joue="INSERT INTO joue(id_film, id_acteur) VALUES ('$currentidf','$currentida')";
        $dbh->exec($insert_joue);

        //récupérer les id_film et id_real pour faire l'association dans la table "REALISE"
        $select_idreal = $dbh->query('SELECT id_real FROM realisateur WHERE n_real = "'.$n_real.'" AND p_real = "'.$p_real.'"');
        $lire_idreal = $select_idreal ->fetch();
        $currentidr = $lire_idreal['id_real'];

        $insert_real ="INSERT INTO realise(id_film, id_real) VALUES ('$currentidf','$currentidr')";
        $dbh->exec($insert_real);
      ?>

    </main>

    <!-- FOOTER -->
    <?php include('footer.php')?>
    <!-- FOOTER -->

	   <script src="js/scripts.js"></script>
  </body>

</html>
