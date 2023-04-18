<h1>Exercice 11</h1>

<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une 
chaîne de caractère représentant une date.
Exemple :
formaterDateFr("2018-02-23");
</p>

<h2>Resultat</h2>

<?php

$date = new DateTime("2018-02-22");

function formaterDateFr($date) {
       $date = DateTimeImmutable::createFromFormat('Y-m-d', "$date");
       return  date->format('D-M-Y');
};

echo formaterDateFr($date);