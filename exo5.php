<?php
/*Crée une fonction personnalisée permettant de créer un formulaire de champs de texte en précisant le nom des champs associés. 

$nomsInput = array("Nom","Prénom","Ville");
afficherInput($nomsInput);

*/

$nomsInput = array("Nom","Prénom","Ville");
afficherInput($nomsInput);

function afficherInput($nomsInput) {
    
    foreach ($nomsInput as $key => $value) {
        echo "<form  style='background: rgb(247,247,249); padding: 1%; display: flex; flex-direction: column; max-width: 200px;' action='/exo5.php' method='post'>";

        echo "<label for='nom'>".$value."</label>";
        
        echo "<input type='text' id='nom' name='nom'</form><br>";

    }
    
}





