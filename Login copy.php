<?php 

require_once '../Cookies/Cookies.php';

session_start();
$bdd = new PDO('mysql:host=localhost;dbname=clients;charset=utf8;', 'root', 'root');


if(isset($_COOKIE['Email']) && isset($_COOKIE['Password'])){

  $recupUser = $bdd->prepare('SELECT * FROM users WHERE email = ? AND mdp = ?');
  $recupUser->execute(array($_COOKIE['Email'], $_COOKIE['Password']));
  if($recupUser->rowCount() > 0){
    $Pseudo = $recupUser->fetch()['Pseudo'];
    $_SESSION['email'] = $_COOKIE['Email'];
    $_SESSION['mdp'] = $_COOKIE['Password'];
    $_SESSION['Pseudo'] = $Pseudo;
    $_SESSION['Avatar'] = $recupUser->fetch()['Avatar'];
    $_SESSION['id'] = $recupUser->fetch()['id'];
  }

  header('Location: ../Téléchargement/Téléchargement.php');

}

if(isset($_POST['envoie'])){
    if(!empty($_POST['email']) AND !empty($_POST['mdp'])){
        $email = htmlspecialchars($_POST['email']);
        $mdp = sha1($_POST['mdp']);


        $recupUser = $bdd->prepare('SELECT * FROM users WHERE email = ? AND mdp = ?');
        $recupUser->execute(array($email, $mdp));
        if($recupUser->rowCount() > 0){
          $Pseudo = $recupUser->fetch()['Pseudo'];
            $_SESSION['email'] = $email;
            $_SESSION['mdp'] = $mdp;
            $_SESSION['Pseudo'] = $Pseudo;
            $_SESSION['Avatar'] = $recupUser->fetch()['Avatar'];
            $_SESSION['id'] = $recupUser->fetch()['id'];

            Cookie();
            
            

            header('Location: ../Téléchargement/Téléchargement.php');
        }
      }
    }
  

    ?>
        



<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="FR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../Barre Navigation et Footer/Pictures/Icon.png" type="image/x-icon">
    <title>Boop Adventure</title>
    <link rel="stylesheet" href="Login.css">
    <link rel="stylesheet" href="../Bar and Footer/Footer/Footer.css">
    <link rel="stylesheet" href="../Bar and Footer/NavBar/NavBar.css">
    <link rel="stylesheet" href="../Bar and Footer/Footer/Terms.css">
  </head>

  <body>
    <div class="cloud1">
    <img src="Clouds/pngwing.com.png"></div>
    <div class="cloud2">
    <img src="Clouds/pngwing.com.png"></div>
    <div class="cloud3">
    <img src="Clouds/pngwing.com.png"></div>
    <div class="cloud4">
    <img src="Clouds/pngwing.com.png"></div>
    <div class="cloud5">
    <img src="Clouds/pngwing.com.png"></div>
    <div class="cloud6">
    <img src="Clouds/pngwing.com.png"></div>
    <div class="cloud7">
    <img src="Clouds/pngwing.com.png"></div>
    <div class="cloud8">
    <img src="Clouds/pngwing.com.png"></div>

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
        <a href="../Mot de Passe Oublié/forgot_password.php">        <div class="pass">Mot de passe oublié?</div></a>
        <input type="submit" class='submit' name='envoie' value="Connexion"><!--  Ici on devrait utiliser le input Submit ou quelque chose de similaire mais nous n'avions ni le droit au Java script ni à la gestion de bases de données... -->
        <div class="signup_link">
          T'as pas ton équipement? <a href="Register.php">Incris toi!</a>
        </div>
        <style>
        /* Appliquer aucun soulignement aux liens */
        a {
            text-decoration: none;
        }
    </style>
      </form>
      <style>
        .Texte {
    color: red;
    text-align: center;
    margin-bottom: 3vh;
}

      </style>
      <div class="Texte">

      
      
      
    
    </div>
    </div>

  </body>
</html>