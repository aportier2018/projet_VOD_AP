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
           $fname = $_POST['prenom'];
           $mail = $_POST['email'];
           $login = $_POST['login'];
           $mdp1 = $_POST['mdp1'];
           $mdp2 = $_POST['mdp2'];

           echo "Bonjour ". $civilite." ". $name." ". $fname."<br/> Votre mail est : ".$mail."<br/>Votre login est ".$login;

           /*test sur la civilité*/
         if ($civilite == 'F')
         {
            $civilite = "Mme";
         }
         else
         {
            $civilite = "M";
          };

          /*test pour vérfier si les entrées du mot de passe sont identique*/
        if ($mdp1 == $mdp2)
        {
           $mdpsha = sha1($mdp1);
           echo "<br/>Vos mots de passe sont identiques.";
           // echo $mdpsha;

        $insertion ="INSERT INTO user(civilite, n_user, p_user, email_user, login_user, mdp_user) VALUES('$civilite','$name','$fname','$mail','$login','$mdpsha')";

        $dbh->exec($insertion);

        echo "<br/>Votre inscription est enregistrée.";
          }
          else
          {
            echo"<p>Les mots de passe dont différents, veuillez recommencer</p>";
          };
      ?>

    </main>

    <!-- FOOTER -->
    <?php include('footer.php')?>
    <!-- FOOTER -->

	   <script src="js/scripts.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </body>

</html>
