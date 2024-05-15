<?php

  class Noeud {
      public $valeur ;
      public $enfant_g;
      public $enfant_d;
      public $parent;

      public function __construct($valeur) {
          $this->valeur = $valeur;
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

      public function afficherParNiveau() {
        $queue = [];
        array_push($queue, $this);

        while (!empty($queue)) {
            $noeud = array_shift($queue);
            echo $noeud->valeur . " ";

            if ($noeud->enfant_g !== null) {
                array_push($queue, $noeud->enfant_g);
            }
            if ($noeud->enfant_d !== null) {
                array_push($queue, $noeud->enfant_d);
            }
        }
        echo "\n";
    }
      
  }

  // Exemple d'utilisation
  $racine = new Noeud(1);
  $noeud2 = new Noeud(2);
  $noeud3 = new Noeud(3);
  $noeud4 = new Noeud(4);
  $noeud5 = new Noeud(5);

  $racine->ajouterEnfantGauche($noeud2);
  $racine->ajouterEnfantDroit($noeud3);
  $noeud2->ajouterEnfantGauche($noeud4);
  $noeud2->ajouterEnfantDroit($noeud5);

  $racine->afficherParNiveau();
?>