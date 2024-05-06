<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
    <link rel="stylesheet" href="Accueil.css">
</head>

<body>

    <div class="navbar">
        <a class="active" href="#">Accueil</a>
        <a href="#">Services</a>
        <a href="#">Produits</a>
        <a href="#">À propos</a>
        <a href="#">Contact</a>
    </div>
    <div class="container">
        <h1>Bienvenue sur notre site</h1>
        <p><?php echo "Phrase aléatoire : " . getRandomPhrase(); ?></p>
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