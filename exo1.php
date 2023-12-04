<?php
/* 
Crée une fonction personnalisée 'convertirMajRouge()' permettant de transformer une chaîne de caractère passée en argument en majuscules et en rouge

Vous devez appeler la fonction comme suit: convertirMajRouge($texte);

MON TEXTE EN PARAMETRE

*/

// fonction pour majuscule mb_strtoupper($*)

$texte = "mon texte en parametre";

function convertirMajRouge($texte) : string {
   return $msg = mb_strtoupper("<span style='color: red;'>$texte</span>"); 
}

echo convertirMajRouge($texte);
