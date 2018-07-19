
<?php include("connectbdd.php") ?>

<!DOCTYPE html>
<html lang="fr">

  <head>
  	<meta charset="utf-8">
  	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

  	<title> formulaire de contact - Projet VOD AP</title>
  	<link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  </head>

  <body>
          <!-- HEADER -->
          <?php include("header.php") ?>

      <main>
          Validation de votre inscription

        <?php
             $civilite = $_POST['civilite'];
             $name = $_POST['nom'];
             $fname = $_POST['prenom'];
             $mail = $_POST['email'];
             $mdp1 = $_POST['mdp1'];
             $mdp2 = $_POST['mdp2'];

             if ($gen == 'F') {
                $gen = "Mme";
            }
             else
             {
                $gen = "M";
             }

          if ($mdp1 == $mdp2){
            $mdpsha = sha1($mdp1);
            echo "OK";
            echo $mdpsha;
          }


          $insertion = 'INSERT INTO user(civilite, n_user, p_user, email_user, login_user, mdp_user) VALUES('$civilite','$name','$fname','$mail','$mdpsha')';
          $reponse = $dbh->prepare($insertion);
          $reponse->exec();

          echo "Inscription Confirmée";
         }
         else
         {
             echo "<p>erreur mdp</p>";
          };
        ?>

    <!-- FOOTER -->
    <?php include("footer.php") ?>
  </body>
</html>
