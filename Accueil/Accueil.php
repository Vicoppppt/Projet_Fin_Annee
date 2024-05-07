<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
    <link rel="stylesheet" href="Accueil.css">
</head>

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
        position: fixed;
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
        position: fixed;
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
</style>

<body>

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
                        <a href="#" class="nav__link">Unreal</a>
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

    <footer>
        <p>Ce site a été créé avec amour</p>
    </footer>

    <?php
    function getRandomPhrase()
    {
        $phrases = array(
            "La vie est un mystère qu'il faut vivre, et non un problème à résoudre. - Gandhi",
            "Le bonheur n'est pas une destination à atteindre mais une façon de voyager. - Margaret Lee Runbeck",
            "La seule façon de faire du bon travail est d'aimer ce que vous faites. - Steve Jobs",
            "Soyez vous-même ; tous les autres sont déjà pris. - Oscar Wilde",
            "La vie c'est comme une bicyclette, il faut avancer pour ne pas perdre l'équilibre. - Albert Einstein"
        );
        $randomIndex = array_rand($phrases);
        return $phrases[$randomIndex];
    }
    ?>

</body>

</html>