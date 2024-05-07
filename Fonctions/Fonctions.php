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
