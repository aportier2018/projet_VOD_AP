<footer class="footer-distributed">

  <div class="footer-left">

    <p class="footer-links">
      <a href="index.php">Liste des films</a> ·
      <a href="f_listefilm.php">Ajouter un film</i></a> .
      <a href="f_inscription.php">S'inscrire</a> .
      <a href="f_connexion_user.php">Se connecter/Désinscrire</a>

    </p>
    <div style = "display : flex;">
      <p class="footer-company-name">Copyright &copy; 2018 &#160;| </p>
      <p class="footer-company-name"> &#160; Mentions Légales </p>
    </div>
  </div>

  <div class="footer-center contact">

          <form method="post" action="v_contact.php">
            <h2>Contact</h2>
              <label for="fname"></label><br><input type="text" name="fname" id="fname" class="txtinput" placeholder="Votre nom" required/><br>
              <label for="lname"></label><br><input type="text" name="lname" id="lname" class="txtinput" placeholder="Votre prénom" required/><br>
              <label for="mail"></label><br><input type="email" name="mail" id="mail" class="txtinput" placeholder="Votre email" required/><br>
              <textarea name="detail" id="detail" placeholder="votre message"required></textarea><br><br>
              <input type="submit" value="ENVOYER">
          </form>
  </div>

  <div class="footer-right">
    <div>
      <i class="fa fa-map-marker"></i>
      <p><span>20 rue du cinéma</span> Charleville-Mézières, France</p>
    </div>
    <div>
      <i class="fa fa-phone"></i>
      <p>03 24 10 10 10</p>
    </div>

    <div>
      <i class="fa fa-envelope"></i>
      <p><a href="mailto:lafetedunumérique@company.com">lecinemaenvod@cinema.com</a></p>
    </div>
    <div class="footer-icons">
      <a href="#"><i class="fab fa-facebook"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
      <a href="#"><i class="fab fa-linkedin"></i></a>
      <a href="#"><i class="fab fa-github"></i></a>
    </div>
  </div>

</footer>
