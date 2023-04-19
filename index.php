<?php

require_once ("exo13.php");

$v1 = new Voiture("Peugeot", "408",5, 50);

/*echo $v1->getMarque(); la méthode get permet d'appeler l'attribut
echo $v1->getModele();
echo $v1->getNbportes();
echo $v1->getVitesseActuelle();*/

/*$v1->setMarque("citroen"); la methode set permet de modiffier l'attribut
echo $v1->getMarque();*/



echo $v1->informationVehicule();
$v1->setDemarrer(0);
//$v1->demarrerVoiture();
//$v1->vitesseVehicule();
