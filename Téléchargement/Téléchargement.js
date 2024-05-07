var clickCount = 0;

document.getElementById("shake").addEventListener("click", function () {
    var text = document.getElementById("Cadenas");

    if (text.classList.contains("shake")) {
        return;
    }

    text.classList.add("shake");
    setTimeout(function () {
        text.classList.remove("shake");
    }, 500);

    clickCount++;

    // Générer un nombre aléatoire entre 5 et 20
    var randomClicks = Math.floor(Math.random() * (20 - 5 + 1)) + 5;

    // Vérifier si le nombre de clics atteint le nombre aléatoire
    if (clickCount === randomClicks) {
        // Afficher un message de pop-up
        alert("Stop !!");
        clickCount = 0;
    }
});
