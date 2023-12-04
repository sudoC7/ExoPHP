<?php

/* 

Écrire une fonction personnalisée qui affiche une date en français (en toutes français) à partir d'une chaîne de caractère représentant une date 

*/
//Commande switch 
//

formaterDateFr("2018-02-23");


function formaterDateFr($dateConvFr) {
    
    $week = date('l', strtotime($dateConvFr)); // le jour de la semaine
    $month = date('M', strtotime($dateConvFr)); // le mois de l'année 

    switch ($week) {
        
        case 'Monday':
            $week = "lundi";
            break;
        case 'Tuesday':
            $week = "mardi";
            break;
        case 'Wednesday':
            $week = "mercredi";
            break;
        case 'Thursday':
            $week = "jeudi";
            break;
        case 'Friday':
            $week = "vendredi";
            break;
        case 'Saturday':
            $week = "samedi";
            break;
        case 'Sunday':
            $week = "dimanche";
            break;
        default:
            echo "Error week";
            break;
    }

    switch ($month) {
        
        case 'Jan':
            $month = "janvier";
            break;
        case 'Feb':
            $month = "fevrier";
            break;
        case 'Mar':
            $month = "mars";
            break;
        case 'Apr':
            $month = "avril";
            break;
        case 'May':
            $month = "mai";
            break;
        case 'Jun':
            $month = "juin";
            break;
        case 'Jul':
            $month = "juillet";
            break;
        case 'Aug':
            $month = "août";
            break;
        case 'Sep':
            $month = "septembre";
            break;
        case 'Oct':
            $month = "octobre";
            break;
        case 'Nov':
            $month = "novembre";
            break;
        case 'Dec':
            $month = "decembre";
            break;
        default:
            echo "Error month";
            break;
    }

    echo "$week ".date('d', strtotime($dateConvFr))." $month ".date('Y', strtotime($dateConvFr))."<br>";
}

// vendredi 23 fevrier 2018 

?>