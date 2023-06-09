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
    private string $_marque;
    private $_modele;
    private $_nbPortes;
    private $_numero;
    
    
    private  $_demarrer = 0;
    private  $_vitesseActuelle;
    private $_acceleration = 0;
  

    private static $_nbVehicule = 0;
    
    //---------------------Constante ----------------------

    

    // -------------------Constructeur --------------------
    public function __construct($marque, $modele, $nbPortes){
        $this->_marque = $marque;
        $this->_modele = $modele;
        $this->_nbPortes = $nbPortes;
        self::$_nbVehicule++;
        $this->_numero = self::$_nbVehicule;
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

    public function getNumero(){
        return $this->_numero;
    }



    //--------------- Méthodes set -------------------

    public function setMarque($marque){
        $this->_marque=$marque;
    }

    public function setModele($modele){
        $this->_modele=$modele;
    }

    public function setNbPortes($nbPortes){
        $this->_nbPortes=$nbPortes;
    }

    public function setVitesseActuelle($vitesse){
        $this->_vitesseActuelle=$vitesse;
    }

    public function setdemarerVoiture($demarrerVoiture){
        $this->_demarrerVoiture=$demarrerVoiture;
    }
    
    public function setDemarrer($demarrer){
        $this->_demarrer = $demarrer;
    }

    public function setacceleration($acceleration){
        $this->_acceleration = $acceleration;
    }

    public function setNumero ($numero) {
        $this->_numero = $numero;
    }



// ------------- Méthodes -----------------------------

// ------------- Compte le nombre de véhicule ---------
    
    public static function combien(){
        return self::$_nbVehicule;
    }

// ------------ Le véhicule démarre -----------------------

    public function demarrerVoiture(){
        $affiche  = "Le véhicule ".$this->getMarque()." ".$this->getModele();
        if ($this->getDemarrer()){
            return $affiche." démarre";
        } else {
            return $affiche." est stoppé";
        }
    }
    
// ------------ Le vehicule accélère ---------------------

    public function accelererVehicule(){
        $affiche = "Le véhicule ".$this->getMarque()." ".$this->getModele();
        if (!$this->getDemarrer()){ /* ! signifie l'inverse donc l'inverse de 1 = true est 0 = true */ 
            return $affiche."veut accélerer de ".$this->getVitesseActuelle()."km/H </br>
            Pour accélerer, il faut démarrer ".$affiche;
        } else {
            return $affiche." accélère de ".$this->getVitesseActuelle()."km / H";
        }

    }

 // -------------------- vitesse du véhicule -------------------------
 
    public function vitesseVehicule(){
        $affiche  = "La vitesse du véhicule ".$this->getMarque()." ".$this->getModele()." est de : ";
        $vitesseVehicule = (!$this->getDemarrer())?" 0 km/H":$this->getVitesseActuelle();
        return $affiche.$vitesseVehicule." km/H";
    }

//---------------------- Ralentir le véhicule -------------------------
    
    public function ralentir($vitesse){
       $affiche = "Le vehicule ".$this->getMarque()." ".$this->getModele(); 
       $result = $this->getVitesseActuelle() - $vitesse;
       return $affiche." a ralentit de ".$result."km /h";
    }
    
    
// ------------ Information véhicule -----------------
    
    public function informationVehicule(){
        $demarrer = ($this->getDemarrer()) ? "Le véhicule ".$this->getMarque()." est démarré</br>" : "Le véhicule ".$this->getMarque()." est à l'arrêt</br>";
        $vitesse = ($this->getDemarrer()) ? "Sa vitesse actuelle est de : ".$this->getVitesseActuelle()." km/H" : "Sa vitesse actuelle est de : 0 km/H";
        
        $result = "Infos véhicule ".$this->getNumero()."</br>
        **************** </br>
        Nom et modèle du véhicule : ".$this->getMarque()." ".$this->getModele()."<br>"
        ."Nombre de portes : ".$this->getNbPortes()."</br>";
        $result .= $demarrer;
        $result .= $vitesse;
        return $result;
        
        // if ($this->getDemarrer()){
        //     $demarrer = "Le véhicule ".$this->getMarque()." est démarré</br>";
        // }
        // else{
        //     "Le véhicule ".$this->getMarque()." est à l'arrêt</br>";
        // }
    }
    
}

//-----------------------------------------------------------------------

/*echo $v1->getMarque(); la méthode get permet d'appeler l'attribut
echo $v1->getModele();
echo $v1->getNbportes();
echo $v1->getVitesseActuelle();
/*$v1->setMarque("citroen"); la methode set permet de modiffier l'attribut
echo $v1->getMarque();*/

//  ------------------------ exo 13 -------------------------------

$v1 = new Voiture("Peugeot", "408",5);
$v2 = new Voiture("Citroën", "C4", 3);

// -- -----------------Test class voiture -----------------------------

// ----------------------Véhicule 1 -------------------------------
$v1->setDemarrer(1);
$v1->setVitesseActuelle(60);
echo $v1->demarrerVoiture();
echo "</br>";
echo $v1->accelererVehicule(50);
echo "</br></br>";

// ------------------------véhicule 2-----------------------------

$v2->setDemarrer(0);
$v2->setVitesseActuelle(20);
echo $v2->demarrerVoiture();
echo "</br>";
echo $v2->accelererVehicule(50);
echo"</br></br>";

// ------------------------- Vitesse du véhicule -----------------

echo $v1->vitesseVehicule();
echo "<br>";
echo $v2->vitesseVehicule(0);
echo"</br>";
echo"</br>";

// --------------------------- information véhicule -------------

echo $v1->informationVehicule();
echo"</br>";
echo"</br>";
echo $v2->informationVehicule();
echo"</br></br>";


echo $v1->ralentir(20);

    
    


    
