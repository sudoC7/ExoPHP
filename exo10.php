<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Formule</title>
    
    <link rel="stylesheet" href="exo10.css">
</head>
<body>


<?php 
/*
En utilisant l'ensemble des fonctions personnalisées crées précédemment, créer un formulaire complet qui contient les informations suivantes : champs de texte avec nom, prenom, adresse e-mail, ville, sexe et une liste de choix parmi lesquels on pourra séléctionner un intitulé de formation : < Développeur Logiciel >, < Designer Web >, < Intégrateur >, < Chef de Projet > 

Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement de validation (submit).
*/
/*
Crée un formulaire complet qui contient les informations suivantes : 

        - Champs de texe avec : 'nom, prenom, e-mail, ville, genre, '
        
        - Liste de choix parmi lequels on pourra séléctionner : < Développeur Logiciel >, < Designer Web >, < Intégrateur >, < Chef de Projet >

        - Le formulaire dois égalament comporte un boutton (submit)
*/ 
/*
    Voir la fonction personnalisée de l'exo : 9 pour la sélection de genre
                                              5 pour champs de texte
                                              6 pour la liste de choix 
                                              
*/


$cvilite = ["monsieur","madame","autre"];
$information1 = ["nom","prenom","e-mail","ville"];
$listeDeChoix = ["Développeur Logiciel","Designer Web","Intégrateur", "Chef de Projet"];

formulaireInscription($cvilite, $information1, $listeDeChoix);

function formulaireInscription(array $information0, array $information1, array $listeDeChoix) {

	echo "<form id='form-inscription' action='exo?.php' method='post'>";
        // selection de civilit 
        echo "<div id='civilite'>";
            foreach($information0 as $value0 => $titre) {
                echo "<div class='flex-row'>";
                    echo "<input type='radio' id='$titre' name='fname'>";
                    echo "<label for='$titre'>".ucfirst($titre)."</label>";
                echo "</div>";
            }
        echo "</div>";

        // les données du client 
        foreach($information1 as $value1 => $info) {
            echo "<div class='flex-col'>";
                echo "<label for='$info'>".ucfirst($info)."</label>";
                echo "<input type='text' id='$info' name='nom'>";
            echo "</div>";
        }

        echo "<div class='flex-col'>";
            echo "<label for='formation'>Formation</label>";
            echo "<select name='titre' id='formation'>";
                //  
                foreach($listeDeChoix as $value2 => $choix) {
                    echo "<option value='$choix'>".ucfirst($choix)."</option>";
                }
            
            echo "</select>";
        echo "</div>";
        
        echo"<div>";
        
        echo "<button type='submit'>Valider</button>";
        
        echo"</div>";

    echo "</form>";
    
}






/* 
 TESTE 

$information0 = array("monsieur","madame","autre");
//$information1 = array("nom","prenom","email","ville");
//$listeDeChoix = array("Developpeur Logiciel","Designer Web","Integrateur", "Chef de Projet");

formulaireInscription($information0);

function formulaireInscription($information0) {

	echo "<form style='background: rgb(247,247,249); padding: 1%; display:flex; flex-direction: column; max-width: 250px;' >";

	echo "<div style='display:flex; flex-direction: row;'>";
	
	foreach($information0 as $value => $titre) {

	echo "<input style='margin-left: 5px;type='radio'><label for='civilite'>".ucfirst($titre)."</label>";

	}
	echo "</div>";

	
	echo "</form>";
	?> 



*/
    
?>

</body>
</html>
