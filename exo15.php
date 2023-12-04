<?php
/*

Vérifier si une adresse e-mail a le bon format.

"L'adresse elan@elan-formation.fr est une adresse e-mail valide "

l'adresse contact@elan est une adresse e-mail invalide

*/
class controlmail {
    
    private $_mail;
    private $_controlMail;
    
    public function __construct($mail) {
        $this->_mail = $mail; 
        $this->_controlMail;
        
    }

    // changements
    
    public function controle() {
        $this->_controlMail = filter_var($this->_mail, FILTER_SANITIZE_EMAIL);
        
        if(filter_var($this->_controlMail, FILTER_VALIDATE_EMAIL)) {
            echo "L'adresse ".$this->_controlMail." est une adresse e-mail valide<br>";
        } 
        else {
            echo "L'adresse ".$this->_controlMail." est une adresse e-mail invalide<br>";
        }
    } 
}

$mail = "elan@elan-formation.fr";
$mail1 = "contact@elan";

$control = new controlMail($mail1);
echo $control->controle();


