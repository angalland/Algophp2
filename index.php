<?php

require_once ("exo13.php");

$v1 = new Voiture("Peugeot", "408",5, 50);

/*echo $v1->getMarque(); la méthode get permet d'appeler l'attribut
echo $v1->getModele();
echo $v1->getNbportes();
echo $v1->getVitesseActuelle();*/

/*$v1->setMarque("citroen"); la methode set permet de modiffier l'attribut
echo $v1->getMarque();*/

echo "Infos véhicule 1</br>
        **************** </br>
        Nom et modèle du véhicule : ".$v1->getMarque()." ".$v1->getModele()."<br>"
        ."Nombre de portes : ".$v1->getNbPortes();

echo "</br>";
echo "</br>";

$v1->informationVehicule();
var_dump($v1->informationVehicule());