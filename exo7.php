<?php
/*
Crée une fonction personnalisée permmettant de générer des cases à cocher. On pourra préciser dans le tableau associatif si la case est cochée ou non 

genererCheckbox($elements);
//où $elements est un tableau associatif clé => valeur avec 3 entrées.

*/

$elements = [1, 2, 3];

genererCheckbox($elements);

function genererCheckbox($elements) {
    echo "<form action='/exo5.php'>";

    foreach ($elements as $value => $choix) {
       
        echo "<input type='checkbox' id='choix' name='choix' value='choix'>";
        echo "<label for='titre de civilite'>Choix ".$choix."</label><br>";
    }
    echo "</form>";
}