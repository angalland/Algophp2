<h1>Exercice 14</h1>

<p>Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu’une classe VoitureElec 
qui hérite (extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie).
Instancier une voiture « classique » et une voiture « électrique » ayant les caractéristiques 
suivantes :
Peugeot 408 : $v1 = new Voiture("Peugeot","408");
BMW i3 150 : $ve1 = new VoitureElec("BMW","I3",100);
Votre programme de test devra afficher les informations des 2 voitures de la façon suivante : 
echo $v1->getInfos()."<br/>";
echo $ve1->getInfos()."<br/>";
</p>

<h2>Résultat</h2>

<?php

// ------------------------- Class Mère ----------------------

class Voitures {
    protected $_marques;
    protected $_modeles;

    public function __construct($marques, $modeles){
        $this->_marques = $marques;
        $this->_modeles = $modeles;
    }

    public function getMarques(){
        return $this->_marques;
    }

    public function getModeles(){
        return $this->_modeles;
    }

    public function setMarques($marques1){
        return $this->_marques = $marques1;
    }

    public function setModeles($modeles1){
        return $this->_modeles = $modeles1;
    }
    
    public function getInfos(){
        return $this->getMarques()." ".$this->getModeles();
    }
    
    // ------------------------ Class fille ---------------------
    
}
Class VoituresElec extends Voitures{
    private $_autonomie;
    
    public function __construct($marques, $modeles, $autonomie){
        parent::__construct($marques, $modeles);
        $this->_autonomie = $autonomie;
    }
    
    public function getAutonomie(){
        return $this->_autonomie;
    }
    
    public function setAutonomie($autonomie1){
        return $this->_autonomie = $autonomie1;
    }
    
    public function getInfos(){
        return $this->getMarques()." ".$this->getModeles()." ".$this->getAutonomie();
    }

}   


//  -------------------------------- exo 14 ---------------------------

$v1 = new Voitures ("Peugeot", "408");
$ve1 = new VoituresElec ("BMW", "I3", 100);

echo $v1->getInfos()."</br>";
echo $ve1->getInfos()."</br>";



