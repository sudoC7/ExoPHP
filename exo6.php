<?php
/*

Crée une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs.

Exemple : 
$elements = array("Monsieur","Madame","Mademoiselle");
alimenterListeDeroulante($elements);

*/

$elements = array("monsieur","madame","mademoiselle");

alimenterListeDeroulante($elements);

function alimenterListeDeroulante($elements) {
    echo "<form action='/exo5.php'><label for='titre de civilite'></label><select name='titre' id='titre'>";

    foreach ($elements as $value => $titre) {
        echo "<option value='".$titre."'>".ucfirst($titre)."</option>";
    }
    echo "</select></form>";
}