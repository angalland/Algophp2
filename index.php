<?php

require_once ("exo13.php");

$v1 = new Voiture ("Peugeot","408",5, 50);
echo $v1->getMarque();
var_dump($v1->getMarque());