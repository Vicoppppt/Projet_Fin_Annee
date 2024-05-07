<?php


function Nuages_Arriere_Plan()

{
  for ($i = 1; $i <= 8; $i++) {
    echo "
        <div class=\"cloud$i\">
          <img src=\"../Annexes/Nuage.png\">
        </div>
      ";
  }
}


function afficherDateRelative($date)
{
  // Convertir la date de la base de données en timestamp
  $timestamp_date_jeu = strtotime($date);

  // Récupérer la date actuelle
  $date_actuelle = time();

  // Comparer la date du jeu avec la date actuelle
  if (date('Y', $timestamp_date_jeu) == date('Y', $date_actuelle)) {
    if (date('n', $timestamp_date_jeu) == date('n', $date_actuelle)) {
      if (date('W', $timestamp_date_jeu) == date('W', $date_actuelle)) {
        return "cette semaine";
      } else {
        return "ce mois-ci";
      }
    } else {
      return "cette année";
    }
  } else {
    // Si la date ne correspond pas à cette année
    return date('d/m/Y', $timestamp_date_jeu);
  }
}


function BoutonComplet()
{
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
