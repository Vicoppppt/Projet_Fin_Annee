<?php


function Nuages_Arriere_Plan()

{
    for ($i = 1; $i <= 8; $i++) {
        echo "
        <div class=\"cloud$i\">
          <img src=\"Nuages_IMG/Nuage.png\">
        </div>
      ";
    }
}
