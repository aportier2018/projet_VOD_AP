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
          <!--**********- HEADER -->
    <?php include("header.php") ?>
         <!---****** FIN HEADER -->

        <!--*********FORMULAIRE -->
    <main class="f_listfilm">
      <section class="marginB">
        <div class="container">
           <form method="post" action="v_listefilm.php">
               <fieldset>
                   <legend>Formulaire pour l'ajout d'un film</legend>

                   <label for='titre'>Titre : </label>
                   <input type="text" name="titre" id="titre" required><br>
                   <label for="synopsis">Synopsis : </label>
                   <input type="text" name="synopsis" id="synopsis" required><br>
                   <label for="date_sortie">Date de sortie : </label>
                   <input type="date" name="date_sortie" id="date_sortie" required><br>
                   <label for="genre">Genre : </label>
                    <select name="genre">
                         <?php
                            $reqgenre = 'SELECT * FROM genre';
                            $reponse = $dbh->prepare($reqgenre);
                            // Execution de la requête
                            $reponse->execute();

                            // On affiche chaque entrée une à une
                            while($row = $reponse->fetch(PDO::FETCH_ASSOC))
                              {
                          ?>

                     <option value="<?php $row['id_genre'];?>"><?php echo $row['genre'];?></option>

                           <?php
                          }
                                 $reponse->closeCursor(); // Termine le traitement de la requête
                            ?>
                      </select><br/>

                   <label for="n_acteur"> nom de l'acteur : </label>
                   <input type="text" name="n_acteur" id="n_acteur" ><br/>
                   <label for="p_acteur">Prénom de l'acteur : </label>
                   <input type="text" name="p_acteur" id="p_acteur" ><br>

                   <label for="n_realisateur">Nom du réalisateur : </label>
                   <input type="text" name="n_realisateur" id="n_realisateur" ><br>
                   <label for="p_realisateur">Prénom du réalisateur : </label>
                   <input type="text" name="p_realisateur" id="p-realisateur"><br>

                   <label for="affiche">Affiche: </label>
                   <input type="text" name="affiche" id="affiche"><br>
                   <label for ="ba">Bande-Annonce : </label>
                   <input type="" name="ba" id="ba" ><br>

                   <input type="submit" value="ENVOYER">
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
    <script src="js/scripts.js"></script>

  </body>
</html>
