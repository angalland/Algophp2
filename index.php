<?php

require_once ("exo13.php");


/*echo $v1->getMarque(); la méthode get permet d'appeler l'attribut
echo $v1->getModele();
echo $v1->getNbportes();
echo $v1->getVitesseActuelle();*/

/*$v1->setMarque("citroen"); la methode set permet de modiffier l'attribut
echo $v1->getMarque();*/








// Véhicule 1
$v1 = new Voiture("Peugeot", "408",5);
$v2 = new Voiture("Citroën", "C4", 3);
$v1->setDemarrer(1);
$v1->demarrerVoiture();
$v1->setVitesseActuelle(60);
$v1->vitesseVehicule();
echo $v1->informationVehicule();

echo "</br></br></br>";

// Vehicule 2
$v2->setDemarrer(1);
$v2->demarrerVoiture();
$v2->setVitesseActuelle(20);
$v2->vitesseVehicule();
echo $v2->informationVehicule();




