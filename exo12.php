<?php
/* 

La fonction var_dump($variable) permet d'afficher les informations d'une variable.

Soit le tableau suivant: 
A l'aide d'une boucle, afficher les informations des variables contenus dans le tableau.

*/

$tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));

infoVariable($tableauValeurs);

function infoVariable($tableau) {
    foreach ($tableau as $key => $variable) {
        echo var_dump($variable)."<br>";
    }
}