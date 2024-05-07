<?php

require('../Fonctions/Fonctions.php');

session_start();
$bdd = new PDO('mysql:host=localhost;dbname=boop_adventure;charset=utf8;', 'customer', 'customer');

?>


<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../Barre Navigation et Footer/Pictures/Icon.png" type="image/x-icon">
  <title>Boop Adventure</title>
  <link rel="stylesheet" href="Téléchargement.css">
</head>

<style>
  .PatchNoteDate {
    color: #76b5c5;
  }
</style>


<section class="Photo">
  <img src="../Annexes/Ville.png">
</section>

<section class="Separationn">
  <p>Communauté</p>
  <p>Téléchargement et Infos</p>
  <p>Patch Note</p>
</section>


<section class="Total">

  <div class="comment-box" id="zone-actualisee">
    <div class="comment-title">Commentaires</div>

    <form method="post">
      <textarea class="comment-input" name="Commentaire" placeholder="Écrivez votre commentaire ici..."></textarea>
      <button class="comment-button" type="submit" name="send">Envoyer</button>
    </form>
  </div>

  <div class="Credits">
    <p class="CreditsTitle">Infos</p>
    <p class="CreditsInfos">Vous avez besoin d'un petit PC quand même pour jouer!<br>
      Les specs:</p>
    <li class="CreditsInfos">PC fixe (tournera mieux).</li>
    <li class="CreditsInfos">Windows 7 64-bit ou mieux.</li>
    <li class="CreditsInfos">Quad-core Intel ou AMD processor, 2.5 GHz ou mieux.</li>
    <li class="CreditsInfos">Carte NVIDIA GeForce 470 GTX ou AMD Radeon 6870 HD series ou mieux.</li>
    <li class="CreditsInfos">4 GB RAM ou plus.</li>
    <div class="SéparationPetit"></div>
    <p class="CreditsInfos">Features!</p>
    <li class="CreditsInfos">5 Niveaux différents avec gameplays uniques!</li>
    <li class="CreditsInfos">Des cinématiques avec des voix d'acteurs.</li>
    <li class="CreditsInfos">Des OST's faites pour le jeu.</li>
    <li class="CreditsInfos">Des sons faits main.</li>
    <li class="CreditsInfos">Et plus! </li>
  </div>




  <div class="Maj">

    <?php

    $Patch = $bdd->prepare('SELECT * FROM patch ORDER BY id_patch DESC');
    $Patch->execute();
    $Resultat = $Patch->fetchAll();

    foreach ($Resultat as $row) {
      $Nom = $row['Nom'];
      $Texte = $row['Texte'];
      $Date = $row['Date'];
      $NumeroPatch = $row['id_patch'];
      echo '
      <p class="PatchNoteNumber">Patch #' . $NumeroPatch . '</p>
      <p class="PatchNoteDate">' . afficherDateRelative($Date) . '</p>
      <div class="SeparationPetitPoint"></div>
      <p class="PatchNoteDescription">' . $Texte . '</p>';
    }

    ?>

  </div>
  <div class="GridPrincipale">

    <?php

    $Version = $bdd->prepare('SELECT Prix FROM version_jeu ORDER BY id_version DESC');
    $Version->execute();
    $Resultat = $Version->fetch();
    echo '<div class="Gratuit">' . $Resultat[0] . '</div>';

    ?>
    <p class="TitreTele">Boop Adventure</p>

    <?php

    $Version = $bdd->prepare('SELECT * FROM version_jeu ORDER BY id_version DESC');
    $Version->execute();
    $Resultat = $Version->fetchAll();

    $PremiereLigne = $Resultat[0];

    $Version_jeu = $PremiereLigne['Version'];
    $Date_Jeu = $PremiereLigne['Date'];

    echo '<p class="DescriptionTele">Version ' . $Version_jeu . '●' . afficherDateRelative($Date_Jeu) . ' </p>';

    ?>

    <?php

    $Mail = $_SESSION['Mail'];

    $Utilisateur = $bdd->prepare('SELECT Paye FROM clients WHERE Mail=?');
    $Utilisateur->execute(array($Mail));
    $Resultat = $Utilisateur->fetch();

    if ($Resultat[0] == 1) {
      echo '  
    <div class="button">
      <div class="game-name">Téléchargement</div>
      <div class="transparent-info">64-bits</div>
      <div class="transparent-info">(132Mb)</div>
      <img src="../Annexes/Windows.png" alt="Windows Logo">
      <img src="../Annexes/Apple.png" id="Apple">
    </div>';
    } else {
      echo '  

      <style>
      .button {
        background-color:white;
      }

      .game-name {
        opacity:0;
      }

      .transparent-info {
        opacity:0;
      }

      .button img {
        opacity: 0;
    }
      </style>
    <div class="button" id="shake">
      <div class="Cadenas"><img src="../Annexes/Cadenas.png" alt="Description de l\'image" id="Cadenas"></div>
      <script src="Téléchargement.js"></script>
      <div class="game-name">Téléchargement</div>
      <div class="transparent-info">64-bits</div>
      <div class="transparent-info">(132Mb)</div>
      <img src="../Annexes/Windows.png" alt="Windows Logo">
      <img src="../Annexes/Apple.png" id="Apple">
    </div>';
    }



    ?>






  </div>
</section>
</body>

</html>