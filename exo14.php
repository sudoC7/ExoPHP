<?php
/*
Créer une classe Voiture possédant 2 propriétés (marque et modele) ainsi qu'une VoitureElec qui hérite (extends) de la classe Voiture et qui a une propriété supplémentaire(autonomie).

Instancier une voiture "classique" et une voiture "electrique" ayant les caractéristique suivantes : 

Peugeot 408 :   $v1 = new Voiture("Peugeot","408");
BMW i3 150  :   $ve1 = new VoitureElec("BMW","I3",100);

Votre programme de test devra afficher les informations des 2 voitures de la façon suivante : 

    echo $v1->getInfos()."<br>";
    echo $ve1->getInfos()."<br>";
 ????  1 seul getInfos qui montre les infos de n'importe quel vehicule 

*/

class Voiture {
    
    private string $_marque;
    private string $_modele;

    public function __construct($marque, $modele) {
        $this->_marque = $marque;
        $this->_modele = $modele;
    }

    // get & set
    public function getMarque() {
        return $this->_marque;
    }
    public function setMarque($nvMarque) {
        return $this->_marque = $nvMarque;
    }
    public function getModele() {
        return $this->_modele;
    }
    public function setModele($nvModele) {
        return $this->_modele = $nvModele;
    }

    public function getInfos() {
        return $this->_marque." ". $this->_modele;

    }
}

class VoitureElec extends Voiture {
    private int $_autonomie;
    
    public function __construct($marque, $modele, $autonomie) {
        parent::__construct($marque, $modele);
        $this->_autonomie = $autonomie;
    }

    // get & set
    public function getAutonomie() {
        return $this->_autonomie;
    }
    public function setAutonomie($km) {
        return $this->_autonomie = $km;
    }

    public function getInfos() { 
        return parent::getInfos() . $infosVE." ".$this->_autonomie; 
    }

}

$v1 = new Voiture("Peugeot","408");
$ve1 = new VoitureElec("BMW","I3",100);


echo $v1->getInfos()."<br>";
echo $ve1->getInfos()."<br>";















