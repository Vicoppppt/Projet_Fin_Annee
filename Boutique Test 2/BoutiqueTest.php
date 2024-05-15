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
    <link rel="stylesheet" href="BoutiqueTest.css">
    <link rel="stylesheet" href="../Navigation_Footer/Navigation.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">
</head>

<body>


    <div class="containerShop">
        <h1>Les Articles </h1>
        <div class="listProduct">
            <?php
            for ($i = 0; $i < 4; $i++) {
                echo '<div class="item">
                <img src="image/1.png">
                <h2> Loung chair </h2>
                <div class="price">200$</div>
                <button class="addCart">Add to cart</button>
            </div>';
            }

            for ($i = 0; $i < 4; $i++) {

                echo '<div class="item" style="margin-bottom:5vh";>
            <img src="image/1.png">
            <h2> Loung chair </h2>
            <div class="price">200$</div>
            <button class="addCart">Add to cart</button>
        </div>';
            }

            ?>

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

        <h1>Avis</h1>
    </div>

    <script src="app.js"></script>
</body>

</html>