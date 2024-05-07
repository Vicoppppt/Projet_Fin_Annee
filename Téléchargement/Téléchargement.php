<?php

require('../Fonctions/Fonctions.php');

session_start();
$bdd = new PDO('mysql:host=localhost;dbname=boop_adventure;charset=utf8;', 'customer', 'customer');

?>


<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../Barre Navigation et Footer/Pictures/Icon.png" type="image/x-icon">
  <title>Boop Adventure | Jeu de platforme en ligne</title>
  <link rel="stylesheet" href="Téléchargement.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">
</head>

<header class="header" id="header">
  <nav class="nav container">
    <a href="#" class="nav__logo">Logo</a>

    <div class="nav__menu" id="nav-menu">
      <ul class="nav__list">
        <li class="nav__item">
          <a href="../Accueil/Accueil.php" class="nav__link">Accueil</a>
        </li>

        <li class="nav__item">
          <a href="#" class="nav__link">A propos</a>
        </li>

        <li class="nav__item">
          <a href="../Unreal Engine/Unreal.php" class="nav__link">Unreal</a>
        </li>

        <li class="nav__item">
          <a href="#" class="nav__link">Téléchargement</a>
        </li>

        <li class="nav__item">
          <a href="#" class="nav__link">Boutique</a>
        </li>
      </ul>

      <div class="nav__close" id="nav-close">
        <i class="ri-close-line"></i>
      </div>
    </div>

    <div class="nav__actions">
      <i class="ri-search-line nav__search" id="search-btn"></i>
      <i class="ri-user-line nav__login" id="login-btn"></i>
      <div class="nav__toggle" id="nav-toggle">
        <i class="ri-menu-line"></i>
      </div>
    </div>
  </nav>
</header>

<!--==================== SEARCH ====================-->
<div class="search" id="search">
  <form action="" class="search__form">
    <i class="ri-search-line search__icon"></i>
    <input type="search" placeholder="What are you looking for?" class="search__input">
  </form>

  <i class="ri-close-line search__close" id="search-close"></i>
</div>

<!--==================== LOGIN ====================-->
<div class="login" id="login">
  <form action="" class="login__form">
    <h2 class="login__title">Log In</h2>

    <div class="login__group">
      <div>
        <label for="email" class="login__label">Email</label>
        <input type="email" placeholder="Write your email" id="email" class="login__input">
      </div>

      <div>
        <label for="password" class="login__label">Password</label>
        <input type="password" placeholder="Enter your password" id="password" class="login__input">
      </div>
    </div>

    <div>
      <p class="login__signup">
        You do not have an account? <a href="#">Sign up</a>
      </p>

      <a href="#" class="login__forgot">
        You forgot your password
      </a>

      <button type="submit" class="login__button">Log In</button>
    </div>
  </form>

  <i class="ri-close-line login__close" id="login-close"></i>
</div>

<section class="Photo">
  <img src="../Annexes/Ville.png">
</section>

<section class="Separationn">
  <p>Communauté</p>
  <p>Téléchargement et Infos</p>
  <p>Patch Note</p>
</section>


<section class="Total">

  <div class="comment-box" id="zone-actualisee">
    <div class="comment-title">Commentaires</div>

    <form method="post">
      <textarea class="comment-input" name="Commentaire" placeholder="Écrivez votre commentaire ici..."></textarea>
      <button class="comment-button" type="submit" name="send">Envoyer</button>
    </form>

    <?php

    if (isset($_POST['send'])) {
      if ($_SESSION['Mail'] == NULL) {
        header("Location:../Connexion/Connexion.php");
      }

      if (!empty($_POST['Commentaire'])) {
        $commentaire = $_POST['Commentaire'];
        $Insert = $bdd->prepare('INSERT INTO commentaires(Texte,Mail) VALUES(?,?)');
        $Insert->execute(array($commentaire, $_SESSION['Mail']));
      }
    }

    AfficherCommentaires();

    ?>
  </div>

  <div class="Credits">
    <p class="CreditsTitle">Infos</p>
    <p class="CreditsInfos">Vous avez besoin d'un petit PC quand même pour jouer!<br>
      Les specs:</p>
    <li class="CreditsInfos">PC fixe (tournera mieux).</li>
    <li class="CreditsInfos">Windows 7 64-bit ou mieux.</li>
    <li class="CreditsInfos">Quad-core Intel ou AMD processor, 2.5 GHz ou mieux.</li>
    <li class="CreditsInfos">Carte NVIDIA GeForce 470 GTX ou AMD Radeon 6870 HD series ou mieux.</li>
    <li class="CreditsInfos">4 GB RAM ou plus.</li>
    <div class="SéparationPetit"></div>
    <p class="CreditsInfos">Features!</p>
    <li class="CreditsInfos">5 Niveaux différents avec gameplays uniques!</li>
    <li class="CreditsInfos">Des cinématiques avec des voix d'acteurs.</li>
    <li class="CreditsInfos">Des OST's faites pour le jeu.</li>
    <li class="CreditsInfos">Des sons faits main.</li>
    <li class="CreditsInfos">Et plus! </li>
  </div>




  <div class="Maj">

    <?php

    $Patch = $bdd->prepare('SELECT * FROM patch ORDER BY id_patch DESC');
    $Patch->execute();
    $Resultat = $Patch->fetchAll();

    foreach ($Resultat as $row) {
      $Nom = $row['Nom'];
      $Texte = $row['Texte'];
      $Date = $row['Date'];
      $NumeroPatch = $row['id_patch'];
      echo '
      <p class="PatchNoteNumber">Patch #' . $NumeroPatch . '</p>
      <p class="PatchNoteDate">' . afficherDateRelative($Date) . '</p>
      <div class="SeparationPetitPoint"></div>
      <p class="PatchNoteDescription">' . $Texte . '</p>';
    }

    ?>

  </div>
  <div class="GridPrincipale">

    <?php

    $Version = $bdd->prepare('SELECT Prix FROM version_jeu ORDER BY id_version DESC');
    $Version->execute();
    $Resultat = $Version->fetch();
    echo '<div class="Gratuit">' . $Resultat[0] . '</div>';

    ?>
    <p class="TitreTele">Boop Adventure</p>

    <?php

    $Version = $bdd->prepare('SELECT * FROM version_jeu ORDER BY id_version DESC');
    $Version->execute();
    $Resultat = $Version->fetchAll();

    $PremiereLigne = $Resultat[0];

    $Version_jeu = $PremiereLigne['Version'];
    $Date_Jeu = $PremiereLigne['Date'];

    echo '<p class="DescriptionTele">Version ' . $Version_jeu . '●' . afficherDateRelative($Date_Jeu) . ' </p>';

    ?>

    <?php

    if (isset($_SESSION['Mail']) || isset($_COOKIE['Mail'])) {

      $Mail = $_SESSION['Mail'];

      $Utilisateur = $bdd->prepare('SELECT Paye FROM clients WHERE Mail=?');
      $Utilisateur->execute(array($Mail));
      $Resultat = $Utilisateur->fetch();

      if ($Resultat[0] == 1) {
        echo '  
    <div class="button">
      <div class="game-name">Téléchargement</div>
      <div class="transparent-info">64-bits</div>
      <div class="transparent-info">(132Mb)</div>
      <img src="../Annexes/Windows.png" alt="Windows Logo">
      <img src="../Annexes/Apple.png" id="Apple">
    </div>';
      } else {
        BoutonComplet();
      }
    } else {
      BoutonComplet();
    }



    ?>


    <form method="post">
      <div class="Avis">
        <style>
          .Avis img {
            height: 3vh;
            color: white;
          }

          .Avis {
            position: absolute;
            display: flex;
            right: 10%;
            bottom: 15%;
            align-items: end;

          }

          .Avis p {
            margin-right: 1vh;
            color: white;
          }

          .submit-btn {
            border: none;
            background: none;
            padding: 0;
          }
        </style>

      </div>
    </form>






  </div>
</section>
</body>

</html>