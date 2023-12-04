<?php
/*

    Créer une fonction personalisée permettant d'afficher des boutons radio avec un tableau de valeurs en paramètre ("Monsieur","Madame","Mademoiselle")

    exemple : 
    afficherRadio($nomsRadios);

*/

$nomsRadios = array("Monsieur", "Madame", "Mademoiselle");

afficherRadio($nomsRadios);

function afficherRadio($nomsRadios) {

	echo"<form>";

	foreach($nomsRadios as $key => $noms) {
		echo "<div style=' display: flex; flex-direction: row;'><input type='radio' id='fname'name='fname'><br>";  
		echo "<label for='fname'>".$noms."</label><br></div>";
	}

	echo"</form>";

}




/* 
<input type="radio"> // Display a radio button 

*/


