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

   <title>Responsive card slider - Bedimcode</title>
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
   <section class="container">
      <div class="card__container swiper">
         <div class="card__content">
            <div class="swiper-wrapper">
               <article class="card__article swiper-slide">
                  <div class="card__image">
                     <img src="avatar-1.png" alt="image" class="card__img">
                     <div class="card__shadow"></div>
                  </div>

                  <div class="card__data">
                     <h3 class="card__name">Kell Dawx</h3>
                     <p class="card__description">
                        Passionate about development and design,
                        I carry out projects at the request of users.
                     </p>

                     <a href="#" class="card__button">View More</a>
                  </div>
               </article>

               <article class="card__article swiper-slide">
                  <div class="card__image">
                     <img src="avatar-2.png" alt="image" class="card__img">
                     <div class="card__shadow"></div>
                  </div>

                  <div class="card__data">
                     <h3 class="card__name">Lotw Fox</h3>
                     <p class="card__description">
                        Passionate about development and design,
                        I carry out projects at the request of users.
                     </p>

                     <a href="#" class="card__button">View More</a>
                  </div>
               </article>

               <article class="card__article swiper-slide">
                  <div class="card__image">
                     <img src="avatar-3.png" alt="image" class="card__img">
                     <div class="card__shadow"></div>
                  </div>

                  <div class="card__data">
                     <h3 class="card__name">Sara Mit</h3>
                     <p class="card__description">
                        Passionate about development and design,
                        I carry out projects at the request of users.
                     </p>

                     <a href="#" class="card__button">View More</a>
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

   <!--=============== SWIPER JS ===============-->
   <script src="Ext_Slider.js"></script>

   <!--=============== MAIN JS ===============-->
   <script src="A_Propos.js"></script>
</body>

</html>