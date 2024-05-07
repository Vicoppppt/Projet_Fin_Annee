<?php

require('../Fonctions/Nuages.php');

session_start();
$bdd = new PDO('mysql:host=localhost;dbname=boop_adventure;charset=utf8;', 'customer', 'customer');

?>

<!DOCTYPE html>
<html lang="FR">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Boop Adventure</title>
  <link rel="stylesheet" href="Inscription.css">
</head>

<body>

  <?php
  Nuages_Arriere_Plan();
  ?>

  <div class="center">
    <h1>Inscription</h1>
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
      <div class="txt_field">
        <input type="pseudo" name="Pseudo" required autocomplete="off">
        <span></span>
        <label>Pseudo</label>
      </div>
      <a href="../Connexion/Connexion.php">
        <div class="pass">Déjà inscrit ? Connexion</div>
      </a>
      <input type="submit" class='submit' name='Envoyer' value="Inscription">
    </form>
  </div>

</body>

</html>