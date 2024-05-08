<?php


?>


<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../Barre Navigation et Footer/Pictures/Icon.png" type="image/x-icon">
  <title>Boop Adventure</title>
  <link rel="stylesheet" href="Unreal.css">
  <link rel="stylesheet" href="../Navigation_Footer/Navigation.css">

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Staatliches&display=swap');

    html::-webkit-scrollbar {
      width: 0.00001vw;
    }

    .NewsUnreal {
      background: #101014;
      position: relative;
      width: auto;
      height: auto;
      border-radius: 2vh;
      box-shadow: 0 0 50px #101014;
      /* Ombre créant l'effet de halo */
      padding: 5%;
      margin: 4% 2%;
      overflow: hidden;
      color: white;

    }

    .NewsUnreal img {
      aspect-ratio: 16/9;
      width: 100%;
      object-fit: cover;
      border-radius: 2vh;

    }

    .TitreTexteNews {
      padding-bottom: 2%;
      padding-top: 1%;
      font-size: 2vw;
      font-weight: normal;
      text-decoration: underline;
      transition: 0.4s;
      line-height: 1.5;
    }

    .NewsUnrealContainerImages {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      grid-template-rows: repeat(2, 1fr);
      grid-template-areas:

        "News1 News2 News3"
        "TexteNews1 TexteNews2 TexteNews3";
      column-gap: 2%;
      margin-bottom: 10vh;
    }

    .NewsUnreal video {
      width: 60%;
      height: 130%;
      position: relative;
      z-index: 2;
      border-radius: 3%;
      object-fit: cover;
      box-shadow: 0 0 50px rgba(255, 255, 255, 0.2);
    }

    video {
      width: 100%;
      height: 100%;
      position: fixed;
      top: 0;
      left: 0;
      z-index: -1;
      object-fit: cover;
    }

    .News3 img:hover {
      transform: scale(1.05);
      box-shadow: 0 0 50px rgba(255, 255, 255, 0.2);
    }

    .News1 img:hover {
      transform: scale(1.05);
      box-shadow: 0 0 50px rgba(255, 255, 255, 0.2);
    }

    .News2 img:hover {
      transform: scale(1.05);
      box-shadow: 0 0 50px rgba(255, 255, 255, 0.2);
    }

    .Séparation {
      border: white solid 0.1vw;
      margin-bottom: 3%;
    }

    .Fonctionnalités {
      position: relative;
      display: flex;
      margin-bottom: 10vh;
    }

    .Fonctionnalités p {
      position: relative;
    }

    .Fonctionnalités .Titre {
      position: relative;
      font-size: 3vw;
      word-break: break-word;
      margin-left: 2%;
      margin-top: 0.5%;
    }

    .Fonctionnalités img {
      position: relative;
      width: 20vw;
      aspect-ratio: auto;
      object-fit: contain;
      z-index: 200;
    }

    #Texte {
      position: relative;
      font-size: 1.2vw;
      word-break: break-word;
      margin-top: 2%;
      line-height: 1.5;
      text-align: justify;
    }

    .TexteNews1 {
      font-size: 1.2vw;
      text-align: justify;
      line-height: 1.3;
    }

    .TexteNews2 {
      font-size: 1.2vw;
      text-align: justify;
      line-height: 1.3;
    }

    .TexteNews3 {
      font-size: 1.2vw;
      text-align: justify;
      line-height: 1.3;
    }

    .InformationsInstalle {
      display: flex;
      gap: 2vw;
      margin-bottom: 2vw;
    }

    .InformationsInstalle p {
      margin-bottom: 3vh;
      font-size: 1vw;
      color: #98989C;
    }


    .InformationsInstalle h2 {
      margin-top: 3%;
      margin-bottom: 3%;
      font-weight: normal;
      font-size: 1.5vw;
    }

    .InformationsInstalle .bouton {
      display: inline-block;
      background-color: #26BBFF;
      /* Couleur bleue */
      color: #3b3b3f;
      /* Couleur du texte blanc */
      padding: 10px 20px;
      /* Espacement intérieur */
      text-decoration: none;
      border: none;
      border-radius: 5px;
      /* Coins arrondis */
      cursor: pointer;
      font-size: 16px;
      transition: background-color 0.3s ease;
      margin-top: 5.4%;
    }

    .InformationsInstalle .bouton2 {
      display: flex;
      background-color: #404044;
      /* Couleur bleue */
      color: white;
      /* Couleur du texte blanc */
      padding: 10px 20px;
      /* Espacement intérieur */
      text-decoration: none;
      border: none;
      border-radius: 5px;
      /* Coins arrondis */
      cursor: pointer;
      font-size: 16px;
      transition: background-color 0.3s ease;
      align-items: center;
    }

    .InformationsInstalle .bouton:hover {
      background-color: #61CDFF;
      /* Changement de couleur au survol */
    }

    .InformationsInstalle .bouton2:hover {
      background-color: #606064;
      /* Changement de couleur au survol */
    }

    .InformationsInstalle h1 {
      font-weight: normal;
      font-size: 1vw;
    }

    .FortniteInstaller {
      position: relative;
      background-color: transparent;
      /* Fond transparent */
      color: #333;
      /* Couleur du texte */
      border: 2px solid #999;
      /* Bordure grise */
      /* Espacement intérieur */
      box-sizing: border-box;
      /* Inclut le padding dans la taille définie */
      border-radius: 0.5vw;
      /* Coins arrondis */
      cursor: pointer;
      font-size: 16px;
      transition: background-color 0.3s ease;
    }

    .FortniteInstaller h2 {
      padding: 1.5vw;
      font-weight: normal;
      font-size: 1.5vw;
      color: white;
      padding-bottom: 0.5vw;
    }

    .FortniteInstaller h3 {
      padding: 1.5vw;
      padding-top: 0;
      font-weight: normal;
      font-size: 1vw;
      color: #3b3b3f;
    }

    .FortniteInstaller .bouton {
      position: absolute;
      background-color: #404044;
      top: 35%;
      right: 3%;
      /* Couleur bleue */
      color: white;
      /* Couleur du texte blanc */
      padding: 10px 20px;
      /* Espacement intérieur */
      text-decoration: none;
      border: none;
      border-radius: 5px;
      /* Coins arrondis */
      cursor: pointer;
      font-size: 16px;
      transition: background-color 0.3s ease;
    }

    .FortniteInstaller .bouton:hover {
      background-color: #606064;
      /* Changement de couleur au survol */
    }

    .InformationsInstalle .Installation {
      border-radius: 20px;
      flex: 1;
      width: 32%;
      /* Prend 33% de la largeur de son parent */
      background-color: #202024;
      /* Fond gris */
      padding: 2vw 2vw;
      box-sizing: border-box;
      /* Inclut le padding dans la largeur définie */
      display: inline-block;
      /* Pour permettre le redimensionnement automatique en hauteur */
    }

    .bouton2 img {
      width: 1vw;
      margin-right: 0.5vw;
      aspect-ratio: auto;
      object-fit: contain;
      border-radius: 0;
    }
  </style>

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
        <p class="TitreTexteNews">Unreal Engine 5.3 est disponible !</p>
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