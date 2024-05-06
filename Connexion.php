<?php

session_start();
$bdd = new PDO('mysql:host=localhost;dbname=boop_adventure;charset=utf8;', 'customer', 'customer');


if (isset($_COOKIE['Email']) && isset($_COOKIE['Password'])) {

  $recupUser = $bdd->prepare('SELECT * FROM users WHERE email = ? AND mdp = ?');
  $recupUser->execute(array($_COOKIE['Email'], $_COOKIE['Password']));
  if ($recupUser->rowCount() > 0) {
    $Pseudo = $recupUser->fetch()['Pseudo'];
    $_SESSION['email'] = $_COOKIE['Email'];
    $_SESSION['mdp'] = $_COOKIE['Password'];
    $_SESSION['Pseudo'] = $Pseudo;
    $_SESSION['Avatar'] = $recupUser->fetch()['Avatar'];
    $_SESSION['id'] = $recupUser->fetch()['id'];
  }
}

if (isset($_POST['envoie'])) {
  if (!empty($_POST['email']) and !empty($_POST['mdp'])) {
    $email = htmlspecialchars($_POST['email']);
    $mdp = sha1($_POST['mdp']);


    $recupUser = $bdd->prepare('SELECT * FROM users WHERE email = ? AND mdp = ?');
    $recupUser->execute(array($email, $mdp));
    if ($recupUser->rowCount() > 0) {
      $Pseudo = $recupUser->fetch()['Pseudo'];
      $_SESSION['email'] = $email;
      $_SESSION['mdp'] = $mdp;
      $_SESSION['Pseudo'] = $Pseudo;
      $_SESSION['Avatar'] = $recupUser->fetch()['Avatar'];
      $_SESSION['id'] = $recupUser->fetch()['id'];


      header('Location: ../Téléchargement/Téléchargement.php');
    }
  }
}

?>

<!DOCTYPE html>
<html lang="FR">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Boop Adventure</title>
  <link rel="stylesheet" href="Connexion.css">
</head>

<body>

  <?php
  for ($i = 1; $i <= 8; $i++) {
    echo "
    <div class=\"cloud$i\">
      <img src=\"Nuages_IMG/pngwing.com.png\">
    </div>
  ";
  }
  ?>

  <div class="center">
    <h1>Connexion</h1>
    <form method="POST">
      <div class="txt_field">
        <input type="email" name="email" required autocomplete="on">
        <span></span>
        <label>Email</label>
      </div>
      <div class="txt_field">
        <input type="password" name="mdp" required autocomplete="on">
        <span></span>
        <label>Mot de passe</label>
      </div>
      <a href="../Mot de Passe Oublié/forgot_password.php">
        <div class="pass">Mot de passe oublié?</div>
      </a>
      <input type="submit" class='submit' name='envoie' value="Connexion">
      <div class="signup_link">
        T'as pas ton équipement? <a href="Register.php">Incris toi!</a>
      </div>
    </form>
  </div>

</body>

</html>