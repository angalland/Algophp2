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
    private $_acceleration = 0;

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
        $this->_acceleration;

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

    public function getAcceleration(){
        return $this->_acceleration;
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

    public function setacceleration($acceleration2){
        $this->_acceleration = $acceleration2;
    }

// ------------- Méthodes -----------------------------


// ------------ Démarrer véhicule ---------------------

    public function demarrerVoiture(){
    if ($this->getDemarrer() == 1){
        return "Le véhicule ".$this->getMarque()." est démarré</br>";
     } else {
         return "Le véhicule ".$this->getMarque()." est à l'arrêt</br>";
     }
    }

// ------------ Vitesse véhicule -----------------------

    public function vitesseVehicule(){
        if ($this->getDemarrer() != 0){
            return " La vitesse du véhicule ".$this->getMarque()." ".$this->getModele()." est de : ".$this->getVitesseActuelle()." km / h</br>";
        } else {
            return  " La vitesse du véhicule ".$this->getMarque()." ".$this->getModele()." est de : ".$this->getAcceleration()." km/H";    
        }
    }

// ------------- Compte le nombre de véhicule ---------
    
    public static function combien(){
        return self::$_nbVehicule;
    }

// ------------ Le véhicule démarre -----------------------

    public function demarrerVoiture1(){
        if ($this->getDemarrer() == 1){
            echo "Le véhicule ".$this->getMarque()." ".$this->getModele()." démarre";
        } else {
            echo "Le véhicule ".$this->getMarque()." ".$this->getModele()." est stoppé";
        }
    }
    
// ------------ Le vehicule accélère ---------------------

    public function accelererVehicule(){
        if ($this->getDemarrer() == 0){
            echo "Le véhicule ".$this->getMarque()." ".$this->getModele()." veut accélerer de ".$this->getVitesseActuelle()."</br>
            Pour accélerer, il faut démarrer le véhicule ".$this->getMarque()." ".$this->getModele();
        } else {
            echo "Le véhicule ".$this->getMarque()." ".$this->getModele()." accélère de ".$this->getVitesseActuelle()."km / H";
        }
    }
    
    
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
    
}


/*echo $v1->getMarque(); la méthode get permet d'appeler l'attribut
echo $v1->getModele();
echo $v1->getNbportes();
echo $v1->getVitesseActuelle();

/*$v1->setMarque("citroen"); la methode set permet de modiffier l'attribut
echo $v1->getMarque();*/

//  ------------------------ exo 13 -------------------------------

$v1 = new Voiture("Peugeot", "408",5);
$v2 = new Voiture("Citroën", "C4", 3);

// ----------------------Véhicule 1 -----------------
$v1->setDemarrer(1);
$v1->demarrerVoiture1();

echo "</br>";

$v1->setVitesseActuelle(30);
$v1->accelererVehicule();

echo "</br>";

// ------------------------véhicule 2--------------

$v2->setDemarrer(1);
$v2->demarrerVoiture1();

echo"</br>";

$v2->setVitesseActuelle(20);
$v2->accelererVehicule();

echo"</br>";

echo $v1->vitesseVehicule();
echo $v2->vitesseVehicule();

echo"</br>";
echo"</br>";

// --------------------------- information véhicule -------------

echo $v1->informationVehicule();

echo"</br>";
echo"</br>";

echo $v2->informationVehicule();
    
    
    


    
