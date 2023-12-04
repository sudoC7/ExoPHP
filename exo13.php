<?php


class Voiture {
    private string $_marque; 
    private string $_modele;
    private int $_nbPortes;
    private int $_vitesseActuelle = 0;
    private bool $_estDemarre = false;
    private int $_vitesse = 0;
    private static int $_nbVoiture = 1 ;

    private int $numero;



    
    /*-------------------------------------------------------------*/
    public function __construct($marque, $modele, $nbPortes) {
        $this->_marque = $marque;
        $this->_modele = $modele;
        $this->_nbPortes = $nbPortes;
        
        
        $this->numero= self::$_nbVoiture++; // s'incrémente a chaque nouveau modèle

        }
           
    /*-------------------------------------------------------------*/
    public static function combien() {
            echo self::$_nbVoiture;
     }
 
     /*-------------------------------------------------------------*/
    public function demarrer() {
        $this->_estDemarre = true;
        echo  "Le véhicule ".$this->_marque." ".$this->_modele." démarre <br>";
    }  
    
    /*-------------------------------------------------------------*/
    public function accelerer($kmh) {
        
        if($this->_estDemarre == true){
            
            $this->_vitesseActuelle += $kmh;
            echo "Le véhicule ".$this->_marque." ".$this->_modele." accélére de ".$kmh." km / h<br>";
        }
        else {
            echo " Pour accélerer, il faut démarrer le véhicule".$this->_marque." ".$this->_modele." <br>";
        }
    }
    
    /*-------------------------------------------------------------*/
    public function stopper() {
        
        if($this->_estDemarre == true) {      
            
            $this->_estDemarre = false;
            $this->_vitesseActuelle = 0;
            echo "Le véhicule ".$this->_marque." ".$this->_modele." est stoppé <br>";
        }
        else {
            echo "La voiture est déja éteint<br>";
        }
    }

    /*-------------------------------------------------------------*/
    public function vitesseActuelle() {
        echo "La vitesse du véhicule ".$this->_marque." ".$this->_modele." est de : ".$this->_vitesseActuelle." km / h<br>";
    }
       
    /*-------------------------------------------------------------*/  
    public function infosCar() {
       
        echo "<br>Infos véhicule ".$this->numero."<br>";
        echo "**********************************<br>";
        echo "Nom et modèle du véhicule : ".$this->_marque." ".$this->_modele."<br>";
        echo "Nombre de portes : ".$this->_nbPortes."<br>";
        
        if($this->_estDemarre == true) {
            echo "Le vehicule ".$this->_marque." est démarré<br>";
        }
        else {
            echo "Le vehicule ".$this->_marque." est à l'arrêt<br>";
        }

        echo "Sa vitesse actuelle est de ".$this->_vitesseActuelle." km / h<br><br>";
    }
   
    /*-------------------------------------------------------------*/
    public function ralentir($baisseVitesse) {
            if($this->_estDemarre == true && $this->_vitesseActuelle >= $baisseVitesse) {
                $this->_vitesseActuelle -= $baisseVitesse;
                echo "Ralentissemet pour le ".$this->_marque." ".$this->_modele." : ".$this->_vitesseActuelle." km / h<br>";
            }
            else {
                echo "Le véhicule ".$this->_marque." ".$this->_modele." n'est pas démarée ou la vitesse demandée est inférieur a la vitesse actuel<br>";
            }
    }
    
    
    //get and set 
    public function getMarque() {
       return $this->_marque;
    }
    public function setMarque($marque) {
        return $this->_marque = $marque;
    }
    

    public function getModele() {
        return $this->_modele;
    }
    public function setModele($modele) {
        return $this->_modele = $modele;
    }
    

    public function getNbPortes() {
        return $this->_nbPortes;
    }
    public function setNbPortes($nbPortes) {
        return $this->_nbPortes = $nbPortes;
    }
    

    public function getVitesseActuelle() {
        return $this->_vitesseActuelle;
    }
    public function setVitesseActuelle($vitesse) {
        return $this->_vitesseActuelle = $vitesse;
    }


    public function get_estDemarre()
    {
        return $this->_estDemarre;
    }
    public function set_estDemarre($_estDemarre)
    {
        $this->_estDemarre = $_estDemarre;
        return $this;
    }


    public function get_vitesse()
    {
        return $this->_vitesse;
    }
    public function set_vitesse($_vitesse)
    {
        $this->_vitesse = $_vitesse;
        return $this;
    }


    public function getNbVoiture()
    {
        return $this->_nbVoiture;
    }
    public function setNbVoiture($nbVoiture)
    {
        $this->_nbVoiture = $nbVoiture;

        return $this;
    }


    public function getNumero()
    {
        return $this->numero;
    }
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }
}

$v1 = new Voiture("Peugeot","408", 5);
$v2 = new Voiture("CitroËn","C4", 3);
$v1->infosCar();
$v2->infosCar();


$v1->demarrer();
$v1->accelerer(50);

$v2->stopper();
$v2->demarrer();
$v2->accelerer(20);
$v1->vitesseActuelle();
$v2->vitesseActuelle();

$v2->ralentir(12);
$v1->ralentir(0);