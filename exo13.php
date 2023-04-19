<h1>Exercice</h1>

<p>Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et 
vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus 
des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule 
instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un 
véhicule. 
v1 ➔ "Peugeot","408",5
v2 ➔ "Citroën","C4",3
Coder l’ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de 
tests pour vérifier la cohérence de la classe Voiture. </p>

<h2>Resultat</h2>

<?php

Class Voiture{
    //---------------------Attribut---------------------
    private $_marque;
    private $_modele;
    private $_nbPortes;
    private $_vitesseActuelle = 0;
    


    // -------------------Constructeur --------------------
    public function __construct($marque, $modele, $nbPortes, $vitesseActuelle){
        $this->_marque = $marque;
        $this->_modele = $modele;
        $this->_nbPortes = $nbPortes;
        $this->_vitesseActuelle = $vitesseActuelle;

    }

    // -------------------------- Methode get -----------------

    public function getMarque(){
       return $this->_marque;
    }
    
    public function getModele(){
        return $this->_modele;
    }

    public function getNbPortes(){
       return $this->_nbPortes;
    }

    public function getVitesseActuelle(){
       return $this->_vitesseActuelle;
    }

    //--------------- Méthodes set -------------------

    public function setMarque($marque2){
        $this->_marque=$marque2;
    }

    public function setModele($modele2){
        $this->_marque=$modele2;
    }

    public function setNbPortes($nbPortes2){
        $this->_marque=$nbPortes2;
    }

    public function setVitesseActuelle($vitesseActuelle2){
        $this->_marque=$vitesseActuelle2;
    }

// ------------- Méthodes -----------------------------

    public function informationVehicule(){
        $result = "Infos véhicule 1</br>
        **************** </br>
        Nom et modèle du véhicule : ".$this->getMarque()." ".$this->getModele()."<br>"
        ."Nombre de portes : ".$this->getNbPortes();
        return $result;
    }
}