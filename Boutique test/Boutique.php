<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Boutique.css">
    <link rel="stylesheet" href="../Navigation_Footer/Navigation.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">
</head>
<body>
<?php 
include '../Annexes/header.php';
?>

<!--==================== SEARCH ====================-->
<div class="search" id="search">
  <form action="" class="search__form">
    <i class="ri-shopping-cart search__icon"></i>
    <input type="search" placeholder="What are you looking for?" class="search__input">
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

<h1 class="Categorie">
    <div>
    Merch
    </div>
</h1>

<div class="Carte_Boutique">
    <article>
        <img src="../Annexes/Logo.png">
        <i class="ri-star-line"></i>
        <i class="ri-star-line"></i>
        <i class="ri-star-line"></i>
        <i class="ri-star-line"></i>
        <i class="ri-star-line"></i> (230 avis)
        <p>Peluche Boop</p>
        <i class="ri-shopping-cart-line" id="Cart" style="color: black;"></i>
        <p class="Prix">2$99</p>
    </article>
    <article>
        <img src="../Annexes/Logo.png">
        <i class="ri-star-line"></i>
        <i class="ri-star-line"></i>
        <i class="ri-star-line"></i>
        <i class="ri-star-line"></i>
        <i class="ri-star-line"></i> (230 avis)
        <p>Peluche Boop</p>
        <i class="ri-shopping-cart-line" id="Cart" style="color: black;"></i>
        <p class="Prix">2$99</p>
    </article>
    <article>
        <img src="../Annexes/Logo.png">
        <i class="ri-star-line"></i>
        <i class="ri-star-line"></i>
        <i class="ri-star-line"></i>
        <i class="ri-star-line"></i>
        <i class="ri-star-line"></i> (230 avis)
        <p>Peluche Boop</p>
        <i class="ri-shopping-cart-line" id="Cart" style="color: black;"></i>
        <p class="Prix">2$99</p>
    </article>
</div>

<div class="Reviews">
    <h1>Les avis</h1>
<div class="wrapper__Vico">
    <div class="box__Vico">
      <i class="fas fa-quote-left quote__Vico"></i>
      <p>Lorem aliasry ipsum dolor sits ametans, consectetur adipisicing elitits. Expedita reiciendis itaque placeat thuratu, quasi yiuos repellendus repudiandae deleniti ideas fuga molestiae, alias.</p>
      <div class="content__Vico">
        <div class="info__Vico">
          <div class="name__Vico">Alex Smith</div>
          <div class="job__Vico">Designer | Developer</div>
          <div class="stars__Vico">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
          </div>
        </div>
        <div class="image__Vico">
          <img src="images/profile-1.jpeg" alt="">
        </div>
      </div>
    </div>
    <div class="box__Vico">
      <i class="fas fa-quote-left quote__Vico"></i>
      <p>Lorem aliasry ipsum dolor sits ametans, consectetur adipisicing elitits. Expedita reiciendis itaque placeat thuratu, quasi yiuos repellendus repudiandae deleniti ideas fuga molestiae, alias.</p>
      <div class="content__Vico">
        <div class="info__Vico">
          <div class="name__Vico">Steven Chris</div>
          <div class="job__Vico">YouTuber | Blogger</div>
          <div class="stars__Vico">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
          </div>
        </div>
        <div class="image__Vico">
          <img src="images/profile-2.jpeg" alt="">
        </div>
      </div>
    </div>
    <div class="box__Vico">
      <i class="fas fa-quote-left quote__Vico"></i>
      <p>Lorem aliasry ipsum dolor sits ametans, consectetur adipisicing elitits. Expedita reiciendis itaque placeat thuratu, quasi yiuos repellendus repudiandae deleniti ideas fuga molestiae, alias.</p>
      <div class="content__Vico">
        <div class="info__Vico">
          <div class="name__Vico">Kristina Bellis</div>
          <div class="job__Vico">Freelancer | Advertiser</div>
          <div class="stars__Vico">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
        </div>
        <div class="image__Vico">
          <img src="images/profile-3.jpeg" alt="">
        </div>
      </div>
    </div>
  </div>
</div>

<h1 class="Categorie">
    <div>
        Cosmetics in-game
    </div>
</h1>

<div class="Carte_Boutique">
    <article>
        <img src="../Annexes/Logo.png">
        <i class="ri-star-line"></i>
        <i class="ri-star-line"></i>
        <i class="ri-star-line"></i>
        <i class="ri-star-line"></i>
        <i class="ri-star-line"></i> (230 avis)
        <p>Peluche Boop</p>
        <i class="ri-shopping-cart-line" id="Cart" style="color: black;"></i>
        <p class="Prix">2$99</p>
    </article>
    <article>
        <img src="../Annexes/Logo.png">
        <i class="ri-star-line"></i>
        <i class="ri-star-line"></i>
        <i class="ri-star-line"></i>
        <i class="ri-star-line"></i>
        <i class="ri-star-line"></i> (230 avis)
        <p>Peluche Boop</p>
        <i class="ri-shopping-cart-line" id="Cart" style="color: black;"></i>
        <p class="Prix">2$99</p>
    </article>
    <article>
        <img src="../Annexes/Logo.png">
        <i class="ri-star-line"></i>
        <i class="ri-star-line"></i>
        <i class="ri-star-line"></i>
        <i class="ri-star-line"></i>
        <i class="ri-star-line"></i> (230 avis)
        <p>Peluche Boop</p>
        <i class="ri-shopping-cart-line" id="Cart" style="color: black;"></i>
        <p class="Prix">2$99</p>
    </article>
</div>




</body>
</html>