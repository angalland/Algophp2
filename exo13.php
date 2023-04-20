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
    
    
    private  $_demarrer = 0;
    private  $_vitesseActuelle = 0;

    private static $_nbVehicule = 0;
    
    //---------------------Constante ----------------------

    

    // -------------------Constructeur --------------------
    public function __construct($marque, $modele, $nbPortes){
        $this->_marque = $marque;
        $this->_modele = $modele;
        $this->_nbPortes = $nbPortes;
        self::$_nbVehicule++;
        $this->_demarrer;
        $this->_vitesseActuelle;

    }

    // -------------------------- Methode get -------------

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

    public function getDemarrer(){
        return $this->_demarrer;
    }

    //--------------- Méthodes set -------------------

    public function setMarque($marque2){
        $this->_marque=$marque2;
    }

    public function setModele($modele2){
        $this->_modele=$modele2;
    }

    public function setNbPortes($nbPortes2){
        $this->_nbPortes=$nbPortes2;
    }

    public function setVitesseActuelle($vitesseActuelle2){
        $this->_vitesseActuelle=$vitesseActuelle2;
    }

    public function setdemarerVoiture($demarrerVoiture2){
        $this->_demarrerVoiture=$demarrerVoiture2;
    }
    
    public function setDemarrer($demarrer2){
        $this->_demarrer = $demarrer2;
    }

// ------------- Méthodes -----------------------------

// ------------ Information véhicule -----------------

    public function informationVehicule(){
        $result = "Infos véhicule ".$this->combien()."</br>
        **************** </br>
        Nom et modèle du véhicule : ".$this->getMarque()." ".$this->getModele()."<br>"
        ."Nombre de portes : ".$this->getNbPortes()."</br>";
        $result .= $this->demarrerVoiture();
        $result .= $this->vitesseVehicule();
        


        return $result;
    }
 
// ------------ Démarrer véhicule ---------------------
    public function demarrerVoiture(){
      if ($this->getDemarrer() == 1){;
         return "Le véhicule ".$this->getMarque()." est démarré</br>";
     } else {
         return "Le véhicule ".$this->getMarque()." est à l'arrêt</br>";
     }
    }

// ------------ Vitesse véhicule -----------------------

    public function vitesseVehicule(){
        return " Sa vitesse actuelle est de : ".$this->getVitesseActuelle()." km / h</br>";
    }

// ------------- Compte le nombre de véhicule ---------
     
    public static function combien(){
        return self::$_nbVehicule;
    }
}
    
    
    
    
