<?php
/* 
URL suivante : http://my.mobirise.com/data/userpic/764.jpg 

Crée une fonction personnalisée permettant d'afficher l'image N fois à l'écran.

*/
$url = "http://my.mobirise.com/data/userpic/764.jpg";

repeterImage($url, 4);

function repeterImage(string $url, int $repeat) {
    
    foreach(range(1, $repeat) as $rien) {
        echo "<img src='".$url."' alt='imageDog' height='100px' width='100px'>";
    }
}
