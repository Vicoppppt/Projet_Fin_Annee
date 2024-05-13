<!DOCTYPE html>
<html lang="en" className="!scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Accueil.css">
</head>
<style>
    body,
    html {
        margin: 0;
        padding: 0;
        height: 100%;
        font-family: Arial, sans-serif;
        overflow: hidden;
        /* Empêche le défilement de la barre de défilement principale */
    }

    .container {
        height: 100vh;
        overflow-y: scroll;
        scroll-snap-type: y mandatory;
        transition: transform 1s cubic-bezier(0.22, 0.61, 0.36, 1);
        -webkit-overflow-scrolling: touch;
        scroll-snap-stop: normal;
        /* Améliore la fluidité du défilement sur les appareils iOS */
    }

    .section {
        height: 100vh;
        scroll-snap-align: start;
        padding: 20px;
        border-bottom: 1px solid #ccc;
        transition: transform 1s cubic-bezier(0.22, 0.61, 0.36, 1);
        /* Transition plus lente avec une fonction d'animation personnalisée */
        transform: translateZ(0);
        /* Active le rendu matériel pour améliorer les performances de l'animation */
    }

    h2 {
        margin-top: 0;
        font-size: 10vw;
    }

    p {
        margin-bottom: 0;
        font-size: 7vw;
    }
</style>

<body>
    <div class="container">
        <div class="section">
            <h2>Section 1</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
        </div>
        <div class="section">
            <h2>Section 2</h2>
            <p>Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta.</p>
        </div>
        <div class="section">
            <h2>Section 3</h2>
            <p>Donec quam felis, ultricies nec,zdza pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>