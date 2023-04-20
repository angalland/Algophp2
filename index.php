<?php

require_once ("exo13.php");


/*echo $v1->getMarque(); la méthode get permet d'appeler l'attribut
echo $v1->getModele();
echo $v1->getNbportes();
echo $v1->getVitesseActuelle();*/

/*$v1->setMarque("citroen"); la methode set permet de modiffier l'attribut
echo $v1->getMarque();*/








/* Véhicule 1
$v1 = new Voiture("Peugeot", "408",5);
$v1->setDemarrer(1);
$v1->demarrerVoiture();
$v1->setacceleration(20);
// $v1->vitesseVehicule();
$v1->accelererVehicule();
// $v1->setVitesseActuelle(50);
echo $v1->informationVehicule();
$v1->demarrerVoiture1();
echo "</br>";
echo "</br>";
echo $v1->vitesseVehicule();

echo "</br></br></br>";

// Vehicule 2
$v2 = new Voiture("Citroën", "C4", 3);
$v2->setDemarrer(0);
$v2->demarrerVoiture();
$v2->setVitesseActuelle(0);
$v2->vitesseVehicule();
echo $v2->informationVehicule();
$v2->demarrerVoiture1();
echo "<br>";
$v2->setacceleration(20);
$v2->accelererVehicule();*/

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

echo $v1->informationVehicule();

echo"</br>";
echo"</br>";

echo $v2->informationVehicule();








