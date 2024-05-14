<!DOCTYPE html>
<html lang="en">


<?php

function print_a($ar) {
    foreach ($ar as $s) {
        $s->afficher(); // Appelle la méthode afficher() pour chaque objet
    }
}

class Noeuds {
    public $type;  // 0 lumiere, 1 OR , 2 AND , 3 XOR , 4 NOT
    public $etat;
    public $enfants; // Propriété pour stocker les enfants du nœud

    public function __construct($type, $etat) {
        $this->type = $type;
        $this->etat = $etat;
        $this->enfants = array(); // Initialisation de la propriété enfants comme un tableau vide
    }

    public function afficher() {
        echo "Type: $this->type, État: $this->etat <br>";
    }
}


function creer_noeud_aleatoire() {
  // Générer un type aléatoire entre 0 et 4
  $type_aleatoire = rand(0, 4);
  
  // Générer un état aléatoire (pour l'exemple, choisissons 0 ou 1)
  $etat_aleatoire = rand(0, 1);

  // Créer un nouvel objet Noeuds avec le type et l'état aléatoires
  $nouveau_noeud = new Noeuds($type_aleatoire, $etat_aleatoire);
  
  return $nouveau_noeud;
}

function cree_arbre_bi($nbr_etage){
  if ($nbr_etage==0){
    
    return array(creer_noeud_aleatoire());
  }

  
  $arbre = array(creer_noeud_aleatoire());
  
  for ($j = 1;$j<=$nbr_etage;$j++){
    for ($i=1;$i<=2**$j;$i++){
      
      if( $j == $nbr_etage){
        array_push($arbre,new Noeuds(0, rand(0, 1)));  
      }
      else{
      array_push($arbre,creer_noeud_aleatoire());
      }
    }
  }
  return $arbre;
}


print_a(cree_arbre_bi(5));
?>
