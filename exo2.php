<?php
/* Soit le tableau suivant :
   $capitales = array ("France" =>"Paris", "Allemagne"=>"Berlin", "USA"=>"Washington", "Italie"=>"Rome");

   Réaliser un algorithme permettant d'affiche le tableau HTML suivant ( notez que le nom du pays s'affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à une fonction personnalisée.

   Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);

*/
// DANS LA FONCTION ON AURA 
// ksort -> trier sur la clé (A à Z)
// ucfrist -> premier lettre majuscule de Capitale
// mb_strtoupper -> majuscule le PAYS

$capitales = array(
    "france" =>"paris", 
    "allemagne"=>"berlin", 
    "usa"=>"washington", 
    "italie"=>"rome"
);

ksort($capitales);

function afficherTableHTML($capitales): string {
    
    echo "<table style='border: 1px solid black;'>";
    echo "<tr><th>Pays</th><th>Capitale</th></tr>";
    
    foreach($capitales as $pays => $capitale) {
        
        echo "<tr><td>".mb_strtoupper($pays)."</td><td>".ucfirst($capitale)."</td></tr>";
        
    }
    
    echo "</table>";
}

 afficherTableHTML($capitales);

