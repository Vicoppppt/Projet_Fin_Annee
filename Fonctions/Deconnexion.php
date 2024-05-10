<?php
session_start();

if (isset($_SERVER['HTTP_REFERER'])) {
    // Enregistrer l'URL de la page précédente dans une variable de session
    $_SESSION['previous_page'] = $_SERVER['HTTP_REFERER'];
} else {
    // Si aucune page précédente n'est disponible, rediriger vers une page par défaut
    $_SESSION['previous_page'] = 'index.php'; // Remplacez index.php par l'URL de votre choix
}

$Avant = $_SESSION['previous_page'];

// Rediriger vers la page précédente

session_unset();
session_destroy();

header('Location: ' . $Avant);
