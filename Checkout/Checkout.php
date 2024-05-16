<?php
  require('../Fonctions/Fonctions.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Boop Adventure | Boutique </title>
  <link rel="stylesheet" href="Checkout.css">
  <link rel="stylesheet" href="../Navigation_Footer/Navigation.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">
</head>

<body>
  <?php
  include '../Navigation_Footer/Navigation.php';
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

  <?php
  session_start();
  Connexion();
  IssetConnexion();
  ?>

  <script type="text/javascript">
    var count = <?php echo json_encode($counter); ?>;

    document.addEventListener("DOMContentLoaded", function() {
      var timer;
      var bulle = document.getElementById("bulle");
      var loginBtn = document.getElementById("login-btn");
      var bulleCart = document.getElementById("bulleCart");
      var CartBtn = document.getElementById("Cart");

      function showMenu() {
        clearTimeout(timer);
        bulle.classList.add("active");
      }

      function showCart() {
        clearTimeout(timer2);
        bulleCart.classList.add("active");
      }

      function hideMenu() {
        timer = setTimeout(function() {
          bulle.classList.remove("active");
        }, 50); // Délai de 1 seconde (1000 millisecondes)
      }

      function hideCart() {
        timer2 = setTimeout (function () {
            bulleCart.classList.remove("active");
        }, 50);
      }

      loginBtn.addEventListener('mouseenter', function() {
        if (count != null) {
          showMenu()
        }
      });

      loginBtn.addEventListener('mouseleave', function() {
        hideMenu()
      });

      bulle.addEventListener('mouseenter', function() {
        showMenu();
      });

      loginBtn.addEventListener('click', function() {
        if (count == null) {
          login.classList.add('show-login');
        }
      });

      CartBtn.addEventListener('click', function() {
        if (count != null) {
          showCart();
        }
      });
    });
  </script>

  <div id="main">
    <h1>Payement</h1>
    <h5>Credit card only</h5>

    <div class="formulaire">
      
    </div>
  </div>

</body>

</html>