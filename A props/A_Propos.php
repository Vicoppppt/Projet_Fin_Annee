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

<header class="header" id="header">
   <nav class="nav container">
      <a href="#" class="nav__logo">Logo</a>

      <div class="nav__menu" id="nav-menu">
         <ul class="nav__list">
            <li class="nav__item">
               <a href="../Accueil/Accueil.php" class="nav__link">Accueil</a>
            </li>

            <li class="nav__item">
               <a href="../A props/A_Propos.php" class="nav__link">A propos</a>
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
         <i class="ri-user-line nav__login" id="login-btn">
            <div class="bulle" id="bulle">
               <ul>
                  <a href="#">
                     <li>Compte</li>
                  </a>
                  <a href="../Fonctions/Deconnexion.php">
                     <li>Déconnexion</li>
                  </a>
               </ul>
            </div>
         </i>
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
      <input type="search" placeholder="Que recherches-tu ?" class="search__input">
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

session_start();
$bdd = new PDO('mysql:host=localhost;dbname=boop_adventure;charset=utf8;', 'root', 'root');


if (isset($_POST['Envoyer'])) {
   if (!empty($_POST['Mail']) and !empty($_POST['Password'])) {
      $Mail = htmlspecialchars($_POST['Mail']);
      $Password = ($_POST['Password']);


      $Utilisateur = $bdd->prepare('SELECT * FROM clients WHERE Mail = ? AND Passwords = ?');
      $Utilisateur->execute(array($Mail, $Password));
      if ($Utilisateur->rowCount() > 0) {
         $_SESSION['Mail'] = $Mail;
         $_SESSION['Password'] = $Password;
      } else {
      }
   }
}

$counter = $_SESSION['Mail'];

?>

<script type="text/javascript">
   var count = <?php echo json_encode($counter); ?>;

   document.addEventListener("DOMContentLoaded", function() {
      var timer;
      var bulle = document.getElementById("bulle");
      var loginBtn = document.getElementById("login-btn");

      function showMenu() {
         clearTimeout(timer);
         bulle.classList.add("active");
      }

      function hideMenu() {
         timer = setTimeout(function() {
            bulle.classList.remove("active");
         }, 100); // Délai de 1 seconde (1000 millisecondes)
      }

      loginBtn.addEventListener('mouseenter', function() {
         if (count != null) {
            showMenu();
         }
      });

      loginBtn.addEventListener('mouseleave', function() {
         hideMenu();
      });

      bulle.addEventListener('mouseenter', function() {
         showMenu();
      });

      loginBtn.addEventListener('click', function() {

         if (count == null) {
            login.classList.add('show-login');
         }
      });
   });
</script>

<body>
   <div class="Who">
      <h1>Qui sommes-nous ?</h1>
      <h2>Avant de plonger dans la lecture, je te recommande vivement d'activer la musique
         <span id="playPauseBtn" class="play"><i class="fas fa-play"></i></span>
         <audio id="audio" src="../Annexes/Imaginer.mp3"></audio>
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





   <div class="Isen">
      <h1>Nos études</h1>
      <div class="IsenCon">
         <div style="display:flex; flex-direction: column; width:50%;">
            <img src="../Annexes/IsenLogo.png">
            <h2>"Nos études se déroulent à JUNIA Isen, une grande école d'inégnieur<br><br> L’ISEN est un programme de JUNIA, grande école d'ingénieurs. Avec une expertise reconnue depuis plus de 60 ans, JUNIA ISEN forme des ingénieurs aux métiers d’avenir du numérique à Lille et Bordeaux."</h2>
            <a class="button" href="https://junia.isen.fr/" target="_blank">Visiter le site JUNIA ISEN</a>
         </div>
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5061.236572351682!2d3.046185476959151!3d50.63420747411537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2d578da129f7d%3A0xd134d73fb7f4c699!2sJunia%20ISEN%20Lille!5e0!3m2!1sfr!2sfr!4v1715434412249!5m2!1sfr!2sfr" width="450" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
   </div>





   <div class="LesDevs">
      <h1>Les Développeurs</h1>
      <section class="container">
         <div class="card__container swiper">
            <div class="card__content">
               <div class="swiper-wrapper">
                  <article class="card__article swiper-slide">
                     <div class="card__image" style="scale: 2;">
                        <img src="../Annexes/AvatarVico.png" alt="image" class="card__img">
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
                        <img src="../Annexes/AvatarAnas.png" alt="image" class="card__img">
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
                        <img src="../Annexes/AvatarMax.png" alt="image" class="card__img">
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
                     <div class="card__image" style="scale: 2.1;">
                        <img src="../Annexes/AvatarSam.png" alt="image" class="card__img">
                        <div class="card__shadow"></div>
                     </div>

                     <div class="card__data">
                        <h3 class="card__name">Samuel Umtiti</h3>
                        <p class="card__description">
                           Grand amateur de jus de pomme,et violoniste de renomé, cet être encule les pitchs.
                        </p>

                        <a href="#" class="card__button">Voir plus</a>
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