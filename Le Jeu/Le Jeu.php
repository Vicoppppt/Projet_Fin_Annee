<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Navigation_Footer/Navigation.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">
</head>
<style>
    body {
        background-color: black;
    }
</style>

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

</body>

</html>