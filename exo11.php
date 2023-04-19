<h1>Exercice 11</h1>

<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une 
chaîne de caractère représentant une date.
Exemple :
formaterDateFr("2018-02-23");
</p>

<h2>Resultat</h2>

<?php


/*$date = DateTimeImmutable::createFromFormat ('Y-m-d', '2018-02-23');
echo $date->format('l d F Y'); Renvoie la date en lettre mais en anglais*/


$date ="2018-02-23";

function formaterDateFr($date){
       $formatter = new IntlDateFormatter('fr_FR',     IntlDateFormatter::RELATIVE_FULL, IntlDateFormatter::NONE);

       echo $formatter->format(date_create($date))."</br>";
};

echo formaterDateFr($date);
       











