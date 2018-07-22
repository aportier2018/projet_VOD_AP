<?php
include("connectbddlocal.php")//include("connectbdd.php")
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title> Suppression d'un compte - Projet VOD AP</title>
  <link rel="stylesheet" type="text/css" href="css/reset.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>

<body>
    <!-- <header> -->
      <?php include("header.php") ?>
    <!-- </header> -->

    <main class='v_suppression'>

      <?php
           $civilite = $_POST['civilite'];
           $name = $_POST['nom'];
           $fname = $_POST['prenom'];
           $email = $_POST['email'];
           $login = $_POST['login'];
           $mdp1 = $_POST['mdp1'];

        $suppression ='DELETE FROM user WHERE civilite = "$civilite" AND n_user ="$name" AND p_user = "$fname" AND email_user = "$email"AND login_user = "$login" AND mdp_user="$mdp1"';

         $dbh->exec($suppression);
          echo "<br/>Votre compte a été supprimé.";
        // }
        //
        //   else
        //   {
        //     ?>
        <!-- //     <p>Un champ est incorrect, veuillez recommencer <a href='f_suppression_user.php'>merci</a></p> -->
           <?php
        //   };
      ?>

    </main>

    <!-- FOOTER -->
    <?php include('footer.php')?>
    <!-- FOOTER -->

	   <script src="js/scripts.js"></script>
    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
  </body>

</html>
