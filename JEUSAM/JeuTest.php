<?php
  class Noeud {
      public $valeur;
      public $etat;
      public $enfant_g;
      public $enfant_d;
      public $parent;

      public function __construct($valeur) {
          $this->valeur = $valeur;
          $this->etat = rand(0, 1);
          $this->enfant_g = null;
          $this->enfant_d = null;
          $this->parent = null;
      }

      public function ajouterEnfantGauche(Noeud $enfant) {
          $this->enfant_g = $enfant;
          $enfant->parent = $this;
      }

      public function ajouterEnfantDroit(Noeud $enfant) {
          $this->enfant_d = $enfant;
          $enfant->parent = $this;
      }

      public function ajouterParent(Noeud $parent) {
          $this->parent = $parent;
      }

      public function def_etat(){
        
        if ($this->type == 1) { // AND
            if ($this->enfant_g !== null && $this->enfant_d !== null) {
                if ($this->enfant_g->etat == 1 && $this->enfant_d->etat == 1) {
                    $this->etat = 1;
                } else {
                    $this->etat = 0;
                }
            }
        } 
        elseif ($this->type == 2) { // OR
            if ($this->enfant_g !== null && $this->enfant_d !== null) {
                if ($this->enfant_g->etat == 1 || $this->enfant_d->etat == 1) {
                    $this->etat = 1;
                } else {
                    $this->etat = 0;
                }
            }
        } 
        elseif ($this->type == 3) { // XOR
            if ($this->enfant_g !== null && $this->enfant_d !== null) {
                if ($this->enfant_g->etat != $this->enfant_d->etat) {
                    $this->etat = 1;
                } else {
                    $this->etat = 0;
                }
            }
        } 
         elseif ($this->type == 4) { // NOT
            if ($this->enfant_g !== null && $this->enfant_d !== null) {
                if ($this->enfant_g->etat == 0 && $this->enfant_d->etat == 0) {
                    $this->etat = 1;
                } else {
                    $this->etat = 0;
                }
            }
        }
      }
      
      public function inverserEtat() {
        $this->etat = ($this->etat == 0) ? 1 : 0;
    }

  }

  class Arbre {
      public $racine;

      public function cree_arbre($hauteur, $est_racine = true) {
        if ($hauteur == 0) {
            // Si la hauteur est 0, retourne une feuille avec la valeur 0 et l'état 0
            return new Noeud(0);
        }
    
        // Crée un nœud avec une valeur aléatoire entre 1 et 4 pour les nœuds autres que la racine
        $valeur = ($est_racine) ? rand(1, 4) : rand(1, 4);
        
        // L'état de la racine doit toujours être 0
        $etat = ($est_racine) ? 0 : rand(0, 1);
    
        $noeud = new Noeud($valeur);
        $noeud->etat = $etat; // Définit l'état du nœud
    
        // Crée les enfants récursivement avec une hauteur diminuée
        $noeud->enfant_g = $this->cree_arbre($hauteur - 1, false);
        $noeud->enfant_d = $this->cree_arbre($hauteur - 1, false);
    
        return $noeud;
    }

      public function affiche() {
          // Si la racine est null, rien à afficher
          if ($this->racine === null) {
              return;
          }

          $niveau_actuel = [$this->racine]; // Niveau actuel de l'arbre
          $niveau_suivant = []; // Niveau suivant de l'arbre

          while (!empty($niveau_actuel)) {
              foreach ($niveau_actuel as $noeud) {
                  echo $noeud->valeur . "(" . $noeud->etat . ") "; // Affiche la valeur du nœud
                  if ($noeud->enfant_g !== null) {
                      $niveau_suivant[] = $noeud->enfant_g; // Ajoute l'enfant gauche au niveau suivant
                  }
                  if ($noeud->enfant_d !== null) {
                      $niveau_suivant[] = $noeud->enfant_d; // Ajoute l'enfant droit au niveau suivant
                  }
              }
              echo "\n"; // Passage à la ligne pour le prochain niveau
              $niveau_actuel = $niveau_suivant; // Met à jour le niveau actuel avec le niveau suivant
              $niveau_suivant = []; // Réinitialise le niveau suivant
          }
      }
  
      public function end() {
        return $this->racine->etat;
      }

    }
  

  // Exemple d'utilisation
  $arbre = new Arbre();
  $arbre->racine = $arbre->cree_arbre( 3); // Crée un arbre avec 3 étages
  $arbre->affiche(); // Affiche l'arbre par niveau
  $end = $arbre->end();
  echo"$end";
?>