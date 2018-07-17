<!DOCTYPE html>
<html lang="fr">

  <head>
  	<meta charset="utf-8">
  	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

  	<title> formulaire de contact - Projet VOD AP</title>
  	<link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/formulaire.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  </head>
  </head>
  <body>
    <!-- HEADER -->
    <?php include("../include/header.php") ?>

      <main>
          validation inscription
        <?php
          $host_name = 'db745063418.db.1and1.com';
          $database = 'db745063418';
          $user_name = 'dbo745063418';
          $password = '/Anne023';

          $dbh = null;

          try {
            $dbh = new PDO("mysql:host=$host_name; dbname=$database;", $user_name, $password);
          } catch (PDOException $e) {
            echo "Erreur!: " . $e->getMessage() . "<br/>";
            die();
          }
          ?>

        <?php
             $gen=$_POST['titre'];
             $name=$_POST['nom'];
             $fname=$_POST['prenom'];
             $mail=$_POST['email'];
             $mdp1=$_POST['mdp1'];
             $mdp2=$_POST['mdp2'];
             $type=$_POST['type'];

             if ($gen == 'F') {
                $gen = "Mme";
                }
             else {
                $gen = "M";
                }

            if($type == 1){
                $type = "Visiteur";
            }else if ($type == 2){
                $type = "Exposant";
             }
            else  if ($type == 3){
            $type = "Administrateur";
             };

          echo $type;
                     if ($mdp1 == $mdp2){
                         $mdpsha = sha1($mdp1);
          echo "OK";
          echo $mdpsha;

          $base->exec("INSERT INTO clients(titre,nom, prenom, mail, mdp, typeco) VALUES('$gen','$name','$fname','$mail','$mdpsha','$type')");
          echo "Inscription Confirmée";
                           }else {
                               echo "<p>erreur mdp</p>";
                           };
        ?>

    <!-- FOOTER -->
    <?php include("../include/footer.php") ?>
  </body>
</html>
