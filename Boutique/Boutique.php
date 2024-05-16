<?php
include '../Annexes/header.php';
require('../Fonctions/Fonctions.php');

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Boutique.css">
    <link rel="stylesheet" href="../Navigation_Footer/Navigation.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">
</head>

<body>
    <div class="containerShop">
        <h1>Les Articles </h1>
        <div class="listProduct">
            <?php
            for ($i = 0; $i < 6; $i++) {
                echo '<div class="item">
                <img src="../Annexes/Logo.png">
                <h2> Loung chair </h2>
                <div class="price">200$</div>
                <button class="addCart">Add to cart</button>
            </div>';
            }

            ?>

        </div>
        <h1>Avis</h1>
    </div>
    <div class="Avis">
        <div class="wrapper__Vico">
            <div class="box__Vico">
                <i class="ri-double-quotes-l quote__Vico"></i>
                <p>Lorem aliasry ipsum dolor sits ametans, consectetur adipisicing elitits. Expedita reiciendis itaque placeat thuratu, quasi yiuos repellendus repudiandae deleniti ideas fuga molestiae, alias.</p>
                <div class="content__Vico">
                    <div class="info__Vico">
                        <div class="name__Vico">Alex Smith</div>
                        <div class="job__Vico">Designer | Developer</div>
                        <div class="stars__Vico">
                            <i class="ri-star-line"></i>
                            <i class="ri-star-line"></i>
                            <i class="ri-star-line"></i>
                            <i class="ri-star-line"></i>
                            <i class="ri-star-line"></i>
                        </div>
                    </div>
                    <div class="image__Vico">
                        <img src="../Annexes/Logo.png" alt="">
                    </div>
                </div>
            </div>
            <div class="box__Vico">
                <i class="ri-double-quotes-l quote__Vico"></i>
                <p>Lorem aliasry ipsum dolor sits ametans, consectetur adipisicing elitits. Expedita reiciendis itaque placeat thuratu, quasi yiuos repellendus repudiandae deleniti ideas fuga molestiae, alias.</p>
                <div class="content__Vico">
                    <div class="info__Vico">
                        <div class="name__Vico">Steven Chris</div>
                        <div class="job__Vico">YouTuber | Blogger</div>
                        <div class="stars__Vico">
                            <i class="ri-star-line"></i>
                            <i class="ri-star-line"></i>
                            <i class="ri-star-line"></i>
                            <i class="ri-star-line"></i>
                            <i class="ri-star-line"></i>
                        </div>
                    </div>
                    <div class="image__Vico">
                        <img src="../Annexes/Logo.png" alt="">
                    </div>
                </div>
            </div>
            <div class="box__Vico">
                <i class="ri-double-quotes-l quote__Vico"></i>
                <p>Lorem aliasry ipsum dolor sits ametans, consectetur adipisicing elitits. Expedita reiciendis itaque placeat thuratu, quasi yiuos repellendus repudiandae deleniti ideas fuga molestiae, alias.</p>
                <div class="content__Vico">
                    <div class="info__Vico">
                        <div class="name__Vico">Kristina Bellis</div>
                        <div class="job__Vico">Freelancer | Advertiser</div>
                        <div class="stars__Vico">
                            <i class="ri-star-line"></i>
                            <i class="ri-star-line"></i>
                            <i class="ri-star-line"></i>
                            <i class="ri-star-line"></i>
                            <i class="ri-star-line"></i>
                        </div>
                    </div>
                    <div class="image__Vico">
                        <img src="../Annexes/Logo.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="cartTab">
        <h1>Shopping Cart</h1>
        <div class="listCart">

        </div>
        <div class="btn">
            <button class="close">CLOSE</button>
            <button class="checkOut">Check Out</button>
        </div>
    </div>

    <script src="Boutique.js"></script>
</body>

</html>