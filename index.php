<?php

require_once ("exo13.php");

$v1 = new Voiture("Peugeot", "408",5, 50);

/*echo $v1->getMarque(); la méthode get permet d'appeler l'attribut
echo $v1->getModele();
echo $v1->getNbportes();
echo $v1->getVitesseActuelle();*/

/*$v1->setMarque("citroen"); la methode set permet de modiffier l'attribut
echo $v1->getMarque();*/



$v1->setDemarrer(1);
echo $v1->informationVehicule();
echo "</br></br></br>";
$v2 = new Voiture("Citroën", "C4", 3, 0);
//$v1->demarrerVoiture();
//$v1->vitesseVehicule();
echo $v2->informationVehicule();


