<?php
/* A partir de l'exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra le lien hypertexte de la page Wikipédia de la capitale ( le lien hypertexte devra s'ouvrir dans un nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).

Le tableau passé en argument sera le suivant : 

$capitales = array("France"=>"Paris","Allemagne"=>"Berlin",
"USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");

*/


$capitales = array(
    "France"=>"Paris",
    "Allemagne"=>"Berlin",
    "USA"=>"Washington",
    "Italie"=>"Rome",
    "Espagne"=>"Madrid"
);


ksort($capitales);

function afficherTableHTML($capitales): string {
    
    echo "<table style='border: 1px solid black;'>";
    echo "<tr><th>Pays</th><th>Capitale</th><th>Lien wiki</th></tr>";
    
    foreach($capitales as $pays => $capitale) {
        
        $url = "https://fr.wikipedia.org/wiki/".urlencode($capitale);

        echo "<tr><td>".mb_strtoupper($pays)."</td><td>".ucfirst($capitale)."</td><td><a href='$url' target='_blank'>Lien</a></td></tr>";
        
    }
    
    echo "</table>";
}

 afficherTableHTML($capitales);