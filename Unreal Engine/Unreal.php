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

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Staatliches&display=swap');
    @import url("https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600&display=swap");

    /*=============== VARIABLES CSS ===============*/
    :root {
      --header-height: 3.5rem;

      /*========== Colors ==========*/
      /*Color mode HSL(hue, saturation, lightness)*/
      --first-color: hsl(230, 75%, 56%);
      --title-color: white;
      --text-color: hsl(230, 12%, 40%);
      --body-color: hsl(230, 100%, 98%);
      --container-color: hsl(230, 100%, 97%);
      --border-color: hsl(230, 25%, 80%);

      /*========== Font and typography ==========*/
      /*.5rem = 8px | 1rem = 16px ...*/
      --body-font: "Syne", sans-serif;
      --h2-font-size: 1.25rem;
      --normal-font-size: .938rem;

      /*========== Font weight ==========*/
      --font-regular: 400;
      --font-medium: 500;
      --font-semi-bold: 600;

      /*========== z index ==========*/
      --z-fixed: 100;
      --z-modal: 1000;
    }

    /*========== Responsive typography ==========*/
    @media screen and (min-width: 1023px) {
      :root {
        --h2-font-size: 1.5rem;
        --normal-font-size: 1rem;
      }
    }

    /*=============== BASE ===============*/
    * {
      box-sizing: border-box;
      padding: 0;
      margin: 0;
    }

    html {
      scroll-behavior: smooth;
    }

    header,
    input,
    button {
      font-family: var(--body-font);
      font-size: var(--normal-font-size);
    }

    input,
    button {
      border: none;
      outline: none;
    }

    ul {
      list-style: none;
    }

    a {
      text-decoration: none;
    }


    /*=============== REUSABLE CSS CLASSES ===============*/
    .container {
      max-width: 1120px;
      margin-inline: 1.5rem;
    }

    .main {
      position: relative;
      height: 100vh;
    }

    .main__bg {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: center;
      z-index: -1;
    }

    .search,
    .login {
      position: relative;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      z-index: var(--z-modal);
      background-color: hsla(230, 75%, 15%, .1);
      backdrop-filter: blur(24px);
      -webkit-backdrop-filter: blur(24px);
      /* For safari */
      padding: 8rem 1.5rem 0;
      opacity: 0;
      pointer-events: none;
      transition: opacity .4s;
    }

    .search__close,
    .login__close {
      position: absolute;
      top: 2rem;
      right: 2rem;
      font-size: 1.5rem;
      color: var(--title-color);
      cursor: pointer;
    }

    /*=============== HEADER & NAV ===============*/
    .header {
      position: relative;
      top: 0;
      left: 0;
      width: 100%;
      box-shadow: 0 2px 16px hsla(230, 75%, 32%, .15);
      z-index: var(--z-fixed);
    }

    .nav {
      height: var(--header-height);
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .nav__logo {
      color: var(--title-color);
      font-weight: var(--font-semi-bold);
      transition: color .4s;
    }

    .nav__actions {
      display: flex;
      align-items: center;
      column-gap: 1rem;
    }

    .nav__search,
    .nav__login,
    .nav__toggle,
    .nav__close {
      font-size: 1.25rem;
      color: var(--title-color);
      cursor: pointer;
      transition: color .4s;
    }

    :is(.nav__logo, .nav__search, .nav__login, .nav__toggle, .nav__link):hover {
      color: var(--first-color);
    }

    /* Navigation for mobile devices */
    @media screen and (max-width: 1023px) {
      .nav__menu {
        position: fixed;
        top: -100%;
        left: 0;
        background-color: var(--body-color);
        box-shadow: 0 8px 16px hsla(230, 75%, 32%, .15);
        width: 100%;
        padding-block: 4.5rem 4rem;
        transition: top .4s;
      }
    }

    .nav__list {
      display: flex;
      flex-direction: column;
      row-gap: 2.5rem;
      text-align: center;
    }

    .nav__link {
      color: var(--title-color);
      font-weight: var(--font-semi-bold);
      transition: color .4s;
    }

    .nav__close {
      position: absolute;
      top: 1.15rem;
      right: 1.5rem;
    }

    /* Show menu */
    .show-menu {
      top: 0;
    }

    /*=============== SEARCH ===============*/
    .search__form {
      display: flex;
      align-items: center;
      column-gap: .5rem;
      background-color: var(--container-color);
      box-shadow: 0 8px 32px hsla(230, 75%, 15%, .2);
      padding-inline: 1rem;
      border-radius: .5rem;
      transform: translateY(-1rem);
      transition: transform .4s;
    }

    .search__icon {
      font-size: 1.25rem;
      color: var(--title-color);
    }

    .search__input {
      width: 100%;
      padding-block: 1rem;
      background-color: var(--container-color);
      color: var(--text-color);
    }

    .search__input::placeholder {
      color: var(--text-color);
    }

    /* Show search */
    .show-search {
      opacity: 1;
      pointer-events: initial;
    }

    .show-search .search__form {
      transform: translateY(0);
    }

    /*=============== LOGIN ===============*/
    .login__form,
    .login__group {
      display: grid;
    }

    .login__form {
      background-color: var(--container-color);
      padding: 2rem 1.5rem 2.5rem;
      box-shadow: 0 8px 32px hsla(230, 75%, 15%, .2);
      border-radius: 1rem;
      row-gap: 1.25rem;
      text-align: center;
      transform: translateY(-1rem);
      transition: transform .4s;
    }

    .login__title {
      font-size: var(--h2-font-size);
      color: var(--title-color);
    }

    .login__group {
      row-gap: 1rem;
    }

    .login__label {
      display: block;
      text-align: initial;
      color: var(--title-color);
      font-weight: var(--font-medium);
      margin-bottom: .25rem;
    }

    .login__input {
      width: 100%;
      background-color: var(--container-color);
      border: 2px solid var(--border-color);
      padding: 1rem;
      border-radius: .5rem;
      color: var(--text-color);
    }

    .login__input::placeholder {
      color: var(--text-color);
    }

    .login__signup {
      margin-bottom: .5rem;
    }

    .login__signup a {
      color: var(--first-color);
    }

    .login__forgot {
      display: inline-block;
      color: var(--first-color);
      margin-bottom: 1.25rem;
    }

    .login__button {
      display: inline-block;
      background-color: var(--first-color);
      width: 100%;
      color: #fff;
      font-weight: var(--font-semi-bold);
      padding: 1rem;
      border-radius: .5rem;
      cursor: pointer;
      transition: box-shadow .4s;
    }

    .login__button:hover {
      box-shadow: 0 4px 24px hsla(230, 75%, 40%, .4);
    }

    /* Show login */
    .show-login {
      opacity: 1;
      pointer-events: initial;
    }

    .show-login .login__form {
      transform: translateY(0);
    }

    /*=============== BREAKPOINTS ===============*/
    /* For medium devices */
    @media screen and (min-width: 576px) {

      .search,
      .login {
        padding-top: 10rem;
      }

      .search__form {
        max-width: 450px;
        margin-inline: auto;
      }

      .search__close,
      .login__close {
        width: max-content;
        top: 5rem;
        left: 0;
        right: 0;
        margin-inline: auto;
        font-size: 2rem;
      }

      .login__form {
        max-width: 400px;
        margin-inline: auto;
      }
    }

    /* For large devices */
    @media screen and (min-width: 1023px) {
      .nav {
        height: calc(var(--header-height) + 2rem);
        column-gap: 3rem;
      }

      .nav__close,
      .nav__toggle {
        display: none;
      }

      .nav__menu {
        margin-left: auto;
      }

      .nav__list {
        flex-direction: row;
        column-gap: 3rem;
      }

      .login__form {
        padding: 3rem 2rem 3.5rem;
      }
    }

    @media screen and (min-width: 1150px) {
      .container {
        margin-inline: auto;
      }
    }

    html::-webkit-scrollbar {
      width: 0.00001vw;
    }

    .NewsUnreal {
      background: #101014;
      position: relative;
      width: auto;
      height: 200vh;
      border-radius: 5vh;
      box-shadow: 0 0 20px 10px rgba(255, 255, 255, 0.7), 0 0 30px 20px rgba(255, 255, 255, 0.5), 0 0 40px 30px rgba(255, 255, 255, 0.3), 0 0 50px 40px rgba(255, 255, 255, 0.1);
      /* Ombre créant l'effet de halo */
      padding: 5%;
      margin: 4%;
      overflow: hidden;
      color: black;
    }

    .NewsUnreal img {
      aspect-ratio: 16/9;
      width: 100%;
      object-fit: cover;
      border-radius: 2vh;

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
      width: 100%;
      height: 100%;
    }

    video {
      width: 100%;
      height: 100%;
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
    <source src="Video/UnrealEdit.mp4" type="video/mp4">
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
        Cette nouvelle version contient de nombreuses améliorations très variées ainsi que de nouvelles fonctionnalités expérimentales qui viennent encore élargir le potentiel de l'UE5 pour les développeurs de jeu et les créateurs dans tous les secteurs. Découvrez ce qui change.</p>
      </div>
      <div class="News2">
        <img src="Pictures/Fortnite.png">
      </div>
      <div class="TexteNews2">
        <p class="TitreTexteNews">Unreal Editor pour Fortnite disponible en Bêta publique !</p>
        L'Unreal Editor pour Fortnite (UEFN) allie la puissance de l'Unreal Engine à l'ampleur de Fortnite. Grâce à des outils de développement, créez des jeux et des expériences encore inédites dans Fortnite et publiez-les pour en faire profiter des millions de joueurs.</p>
      </div>
      <div class="News3">
        <img src="Pictures/StateUnreal.png">
      </div>
      <div class="TexteNews3">
        <p class="TitreTexteNews">GDC 2023</p>
        Rejoignez Epic Games lors de la GDC 2023 pour assister au State of Unreal et à des conférences instructives et jouer aux derniers jeux créés avec l'Unreal Engine sur nos stands.</p>
      </div>
    </div>

    <div class="TitreUnrealNews" style="text-align: right;">
      Fonctionnalités de l'Unreal Engine
    </div>

    <div class="Séparation">
    </div>

    <video autoplay muted loop>
      <source src="Video/Epic.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>




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