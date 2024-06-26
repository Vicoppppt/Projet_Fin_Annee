<?php
include '../Navigation_Footer/Navigation.php';
require('../Fonctions/Fonctions.php');
?>


<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../Annexes/Logo.png" type="image/x-icon">
  <title>Boop Adventure | Unreal Engine</title>
  <link rel="stylesheet" href="Unreal.css">
  <link rel="stylesheet" href="../Navigation_Footer/Navigation.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">

</head>
<!--==================== SEARCH ====================-->
<div class="search" id="search">
  <form action="" class="search__form">
    <i class="ri-shopping-cart search__icon"></i>
  </form>

  <i class="ri-close-line search__close" id="search-close"></i>
</div>

<!--==================== LOGIN ====================-->
<div class="login" id="login">
  <form class="login__form" method="post">
    <h2 class="login__title">Connexion</h2>

    <div class="login__group">
      <div>
        <label for="email" class="login__label">Email</label>
        <input type="email" placeholder="Ecris ton mail" id="email" class="login__input" name="Mail">
      </div>

      <div>
        <label for="password" class="login__label">Mot de passe</label>
        <input type="password" placeholder="Entre ton mot de passe" id="password" class="login__input" name="Password">
      </div>
    </div>

    <div>
      <p class="login__signup">
        Tu n'as pas de compte ? <a href="#">Incris-toi !</a>
      </p>

      <a href="#" class="login__forgot">
        J'ai paumé mon mot de passe...
      </a>

      <button type="submit" class="login__button" name="Envoyer">Connexion</button>
    </div>
  </form>

  <i class="ri-close-line login__close" id="login-close"></i>
  <script src="../Navigation_Footer/Navigation.js"></script>
</div>

<?php

Connexion();

if(isset($_SESSION['Mail'])){
  $counter = $_SESSION['Mail'];
} else {
  $counter=null;
}

?>

<script type="text/javascript">
  var count = <?php echo json_encode($counter); ?>;

  document.addEventListener("DOMContentLoaded", function() {
    var timer;
    var bulle = document.getElementById("bulle");
    var loginBtn = document.getElementById("login-btn");

    function hideMenu() {
      timer = setTimeout(function() {
        bulle.classList.remove("active");
      }, 100); // Délai de 1 seconde (1000 millisecondes)
    }

    function showMenu() {
      clearTimeout(timer);
      bulle.classList.add("active");
    }

    loginBtn.addEventListener('mouseenter', function() {
      if (count != null) {
        showMenu();
      }
    });

    loginBtn.addEventListener('click', function() {

      if (count == null) {
        login.classList.add('show-login');
      }
    });
  });
</script>


<body>

  <video autoplay muted loop>
    <source src="Video/Unreal.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>


  <div class="TexteHautDiv">
    <p class="TexteHaut">
      Par des développeurs.<br>
      Pour des développeurs.<br>
      Avec des conditions justes pour tous.<br>
      Créons ensemble des choses incroyables.<br>
  </div>


  <div class="NewsUnreal">

    <div class="TitreUnrealNews">
      Dernières actualités de l'Unreal Engine
    </div>

    <div class="Séparation">
    </div>

    <div class="NewsUnrealContainerImages">
      <div class="News1">
        <img src="Pictures/5.3.png">
      </div>
      <div class="TexteNews1">
        <p class="TitreTexteNews">Unreal Engine 5.4 disponible !</p>
        Cette version regorge de nouvelles fonctionnalités et d’améliorations qui profiteront aux développeurs et aux créateurs de jeux de tous les secteurs, y compris les outils que nous avons utilisés en interne pour créer et livrer Fortnite Chapter 5, Rocket Racing et Fortnite Festival</p>
      </div>
      <div class="News2">
        <img src="Pictures/Fortnite.png">
      </div>
      <div class="TexteNews2">
        <p class="TitreTexteNews">Unreal Editor pour Fortnite !</p>
        L'Unreal Editor pour Fortnite (UEFN) allie la puissance de l'Unreal Engine à l'ampleur de Fortnite. Grâce à des outils de développement, créez des jeux et des expériences encore inédites dans Fortnite et publiez-les pour en faire profiter des millions de joueurs.</p>
      </div>
      <div class="News3">
        <img src="Pictures/StateUnreal.png">
      </div>
      <div class="TexteNews3">
        <p class="TitreTexteNews">GDC 2024</p>
        (Re)découvrez les annonces d'Epic Games à la GDC 2024 pour en savoir plus sur l'UE 5.4, les LEGO® Elements proposés aux créateurs Fortnite, le lancement sur mobile de l'Epic Games Store et bien plus encore.</p>
      </div>
    </div>

    <div class="TitreUnrealNews" style="text-align: right;">
      Fonctionnalités de l'Unreal Engine
    </div>

    <div class="Séparation">
    </div>


    <div class="Fonctionnalités">
      <video autoplay muted loop>
        <source src="Video/Epic.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>

      <div class="Titre">
        <img src="Pictures/Unreal Engine.svg"><br>

        La puissance qui peut concrétiser les rêves les plus fous.
        <div id="Texte">Définissez une physique révolutionnaire,
          créez des personnages réalistes ou animez le mouvement d'un brin d'herbe et obtenez un rendu en un temps record.
          À l'origine, nous avons conçu l'Unreal Engine pour bénéficier de la liberté de création dont nous rêvions en tant que développeurs.
          Aujourd'hui, nous avons pour objectif de repousser les limites de l'innovation à chaque nouvelle version,
          pour que vous, et vous uniquement, puissiez fixer les limites du possible. </div>
      </div>


    </div>

    <div class="TitreUnrealNews">
      Comment installer l'Unreal Engine ?
    </div>

    <div class="Séparation">
    </div>

    <div class="InformationsInstalle">
      <div class="Installation">
        <h1>Etape 1</h1>
        <h2>Téléchargez le lanceur</h2>
        <p>Avant d'installer et d'exécuter l'Unreal Editor, vous devez télécharger et installer le lanceur Epic Games.</p>
        <button class="bouton">Télécharger le lanceur</button>
      </div>
      <div class="Installation">
        <h1>Etape 2</h1>
        <h2>Installez le lanceur Epic Games

        </h2>
        <p>Une fois le lanceur téléchargé et installé, ouvrez-le et créez un compte ou connectez-vous à votre compte Epic Games.</p>
      </div>
      <div class="Installation">
        <h1>Etape 3</h1>
        <h2>Installez l'Unreal Engine</h2>
        <p>Connectez-vous, puis accédez à l'onglet Unreal Engine et cliquez sur le bouton Installer pour télécharger la version la plus récente.</p>
        <button class="bouton2">
          <img src="../Annexes/Play.svg">Regarder la vidéo d'installation</button>
      </div>

    </div>
    <div class="FortniteInstaller">
      <h2>Vous souhaitez installer l'Unreal Editor pour Fortnite ?</h2>
      <h3>Mettez en place tout le nécessaire pour utiliser l'Unreal Editor pour Fortnite depuis le lanceur Epic Games.</h3>
      <button class="bouton">Télécharger l'UEFN</button>
    </div>




  </div>
  <div class="TexteHautDiv">
    <p class="TexteHaut">
      Maintenant,<br>
      Vous savez tout sur Unreal Engine<br>
      Qu'attendez-vous pour créer ?<br>
      Téléchargez Unreal Engine dès maintenant !<br>
  </div>
</body>

</html>

