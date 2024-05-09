<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!--=============== REMIXICONS ===============-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">

   <!--=============== SWIPER CSS ===============-->
   <link rel="stylesheet" href="A_Propos2.css">

   <!--=============== CSS ===============-->
   <link rel="stylesheet" href="A_propos.css">
   <link rel="stylesheet" href="../Navigation_Footer/Navigation.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

   <title>Boop Adventure | A propos</title>
</head>

<style>
   :root {
      /*========== Colors ==========*/
      /*Color mode HSL(hue, saturation, lightness)*/
      --first_color: hsl(38, 92%, 58%);
      --first_color_light: hsl(38, 100%, 78%);
      --first_color_alt: hsl(32, 75%, 50%);
      --second_color: hsl(195, 75%, 52%);
      --dark_color: hsl(212, 40%, 12%);
      --white_color: #2e4a6b;
      --body_color: hsl(212, 42%, 15%);
      --container_color: hsl(212, 42%, 20%);

      /*========== Font and typography ==========*/
      /*.5rem = 8px | 1rem = 16px ...*/
      --body_font: "Bai Jamjuree", sans-serif;
      --h2_font_size: 1.25rem;
      --normal_font_size: 1rem;
   }

   /*=============== BASE ===============*/
   * {
      box-sizing: border-box;
      padding: 0;
      margin: 0;
   }

   img {
      display: block;
      max-width: 100%;
      height: auto;
   }

   /*=============== CARD ===============*/

   .card__container {
      padding-block: 5rem;
   }

   .LesDevs .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 50vh;
   }

   .card__content {
      margin-inline: 1.75rem;
      border-radius: 1.25rem;
      overflow: hidden;
   }

   .card__article {
      width: 300px;
      /* Remove after adding swiper js */
      border-radius: 1.25rem;
      overflow: hidden;
   }

   .card__image {
      position: relative;
      background-color: var(--first_color_light);
      padding-top: 1.5rem;
      margin-bottom: -.75rem;
   }

   .card__data {
      background-color: var(--container_color);
      padding: 1.5rem 2rem;
      border-radius: 1rem;
      text-align: center;
      position: relative;
      z-index: 10;
   }

   .card__img {
      width: 180px;
      margin: 0 auto;
      position: relative;
      z-index: 5;
   }

   .card__shadow {
      width: 200px;
      height: 200px;
      background-color: var(--first_color_alt);
      border-radius: 50%;
      position: absolute;
      top: 3.75rem;
      left: 0;
      right: 0;
      margin-inline: auto;
      filter: blur(45px);
   }

   .card__name {
      font-size: var(--h2_font_size);
      color: var(--second_color);
      margin-bottom: .75rem;
   }

   .card__description {
      font-weight: 500;
      margin-bottom: 1.75rem;
   }

   .card__button {
      display: inline-block;
      background-color: var(--first_color);
      padding: .75rem 1.5rem;
      border-radius: .25rem;
      color: var(--dark_color);
      font-weight: 600;
   }

   /* Swiper class */
   .swiper-button-prev:after,
   .swiper-button-next:after {
      content: "";
   }

   .swiper-button-prev,
   .swiper-button-next {
      width: initial;
      height: initial;
      font-size: 3rem;
      color: var(--second_color);
      display: none;
   }

   .swiper-button-prev {
      left: 0;
   }

   .swiper-button-next {
      right: 0;
   }

   .swiper-pagination-bullet {
      background-color: hsl(212, 32%, 40%);
      opacity: 1;
   }

   .swiper-pagination-bullet-active {
      background-color: var(--second_color);
   }

   /*=============== BREAKPOINTS ===============*/
   /* For small devices */
   @media screen and (max-width: 320px) {
      .card__data {
         padding: 1rem;
      }
   }

   /* For medium devices */
   @media screen and (min-width: 768px) {
      .card__content {
         margin-inline: 3rem;
      }

      .swiper-button-next,
      .swiper-button-prev {
         display: block;
      }
   }

   /* For large devices */
   @media screen and (min-width: 1120px) {
      .card__container {
         max-width: 1120px;
      }

      .swiper-button-prev {
         left: -1rem;
      }

      .swiper-button-next {
         right: -1rem;
      }
   }

   body {
      font-family: var(--body-font);
      font-size: var(--normal-font-size);
      background-color: #2e4a6b;
      color: var(--white-color);
   }

   body h1 {
      font-size: 5vw;
      text-align: center;
      padding-top: 10vh;
      padding-bottom: 4vh;
   }

   body h2 {
      font-size: 1.4vw;
      text-align: justify;
      padding: 0 43vh;
      text-indent: 2em;
   }

   .LesDevs {
      margin-bottom: 10vh;
   }

   /* Styles pour le lecteur audio */
   .audio-card {
      max-width: 400px;
      margin: 50px auto;
      background-color: #f9f9f9;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
   }

   .audio-player {
      padding: 20px;
   }

   /* Style pour le bouton play/pause */
   #playPauseBtn {
      cursor: pointer;
      font-size: 24px;
      color: #fff;
      /* Changer la couleur du texte en blanc */
      transition: color 0.3s ease;
      text-indent: 0em;
   }

   /* Changement de couleur au survol */
   #playPauseBtn:hover {
      color: #ccc;
      /* Changer la couleur du texte au survol */
   }

   /* Styles pour les icônes de volume */
   .fa-volume-down,
   .fa-volume-up {
      cursor: pointer;
   }
</style>

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
   <div class="Who">
      <h1>Qui sommes-nous ?</h1>
      <h2>Avant de plonger dans la lecture, je te recommande vivement d'activer la musique
         <span id="playPauseBtn" class="play"><i class="fas fa-play"></i></span>
         <audio id="audio" src="Imaginer.mp3"></audio>
         <script>
            const audio = document.getElementById('audio');
            const playPauseBtn = document.getElementById('playPauseBtn');

            // Événement pour le bouton Play/Pause
            playPauseBtn.addEventListener('click', function() {
               if (audio.paused) {
                  audio.play();
                  playPauseBtn.innerHTML = '<i class="fas fa-pause"></i>';
                  playPauseBtn.classList.remove('play');
                  playPauseBtn.classList.add('pause');
               } else {
                  audio.pause();
                  playPauseBtn.innerHTML = '<i class="fas fa-play"></i>';
                  playPauseBtn.classList.remove('pause');
                  playPauseBtn.classList.add('play');
               }
            });
         </script>
         pour ajouter une dimension épique à ta lecture ! (Ne t'attends pas à des extravagances non plus, haha.) Tout d'abord, permets-moi de te présenter qui nous sommes. Nous formons un groupe de quatre passionnés de programmation, réunis dans le cadre d'un projet de fin d'année des plus ambitieux ! Notre objectif ? Développer un jeu en langage C et le rendre accessible sur notre site web. Cependant, nous n'avons pas voulu nous limiter à une simple page web affichant notre jeu. Nous avons plutôt opté pour la création d'un site complet et convivial, disponible en français et en anglais.
         <br><br>
      </h2>
      <h2>Tout au long de ta navigation, tu découvriras donc notre expertise en matière de programmation web (bien que ce ne soit pas notre domaine de prédilection, je le confesse !). Nous avons investi un temps considérable dans ce projet et espérons sincèrement qu'il saura te satisfaire. Si tu as des suggestions ou des remarques à nous transmettre, n'hésite surtout pas à nous contacter. Nous consultons régulièrement nos boîtes de réception chez Boop Adventure ! En outre, nous t'encourageons également à partager ton avis dans la section commentaire de notre site, c’est important pour l’évolution de notre projet. Sur ce, bonne découverte, jeune aventurier !
      </h2>


   </div>











   <div class="LesDevs">
      <h1>Les Développeurs</h1>
      <section class="container">
         <div class="card__container swiper">
            <div class="card__content">
               <div class="swiper-wrapper">
                  <article class="card__article swiper-slide">
                     <div class="card__image" style="scale: 2;">
                        <img src="AvatarVico.png" alt="image" class="card__img">
                        <div class="card__shadow"></div>
                     </div>

                     <div class="card__data">
                        <h3 class="card__name">Vico Petit</h3>
                        <p class="card__description">
                           Il est juste là pour tout exploser et prouver que Unreal Engine est la meilleure technologie
                        </p>

                        <a href="#" class="card__button">Voir plus</a>
                     </div>
                  </article>

                  <article class="card__article swiper-slide">
                     <div class="card__image" style="scale: 1.7;">
                        <img src="AvatarAnas.png" alt="image" class="card__img">
                        <div class="card__shadow"></div>
                     </div>

                     <div class="card__data">
                        <h3 class="card__name">Anas Gaoua</h3>
                        <p class="card__description">
                           Maîtrise divers languages, notamment celui de Roubaix. Amateur en pyrotechnie.
                        </p>

                        <a href="#" class="card__button">Voir plus</a>
                     </div>
                  </article>

                  <article class="card__article swiper-slide">
                     <div class="card__image" style="scale: 2.2;">
                        <img src="AvatarMax.png" alt="image" class="card__img">
                        <div class="card__shadow"></div>
                     </div>

                     <div class="card__data">
                        <h3 class="card__name">Maxence Roussel</h3>
                        <p class="card__description">
                           Amateur de volleyball, Il est également un grand adepte de frites salées au sel salé.
                        </p>

                        <a href="#" class="card__button">Voir plus</a>
                     </div>
                  </article>

                  <article class="card__article swiper-slide">
                     <div class="card__image">
                        <img src="avatar-4.png" alt="image" class="card__img">
                        <div class="card__shadow"></div>
                     </div>

                     <div class="card__data">
                        <h3 class="card__name">Jenny Wert</h3>
                        <p class="card__description">
                           Passionate about development and design,
                           I carry out projects at the request of users.
                        </p>

                        <a href="#" class="card__button">View More</a>
                     </div>
                  </article>
               </div>
            </div>

            <!-- Navigation buttons -->
            <div class="swiper-button-next">
               <i class="ri-arrow-right-s-line"></i>
            </div>

            <div class="swiper-button-prev">
               <i class="ri-arrow-left-s-line"></i>
            </div>

            <!-- Pagination -->
            <div class="swiper-pagination"></div>
         </div>
      </section>
   </div>

   <!--=============== SWIPER JS ===============-->
   <script src="Ext_Slider.js"></script>

   <!--=============== MAIN JS ===============-->
   <script src="A_Propos.js"></script>
</body>

</html>