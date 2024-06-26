<?php

require('../Fonctions/Fonctions.php');

session_start();
Connexion();
?>

<!DOCTYPE html>
<html lang="FR">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Boop Adventure</title>
  <link rel="stylesheet" href="Connexion.css">
  <script src="Connexion.js"></script>
</head>

<body>

  <?php
  Nuages_Arriere_Plan();
  ?>

  <div class="center">
    <h1>Connexion</h1>
    <form method="POST">
      <div class="txt_field">
        <input type="email" name="Mail" required autocomplete="on">
        <span></span>
        <label>Email</label>
      </div>
      <div class="txt_field">
        <input type="password" name="Password" required autocomplete="on">
        <span></span>
        <label>Mot de passe</label>
      </div>
      <a href="../Mot de Passe Oublié/forgot_password.php">
        <div class="pass">Mot de passe oublié?</div>
      </a>
      <input type="submit" class='submit' name='Envoyer' value="Connexion">
      <div class="signup_link">
        T'as pas ton équipement? <a href="../Inscription/Inscription.php">Incris toi!</a>
      </div>
    </form>
  </div>

</body>

</html>