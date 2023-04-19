<h1>Exercice 11</h1>

<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une 
chaîne de caractère représentant une date.
Exemple :
formaterDateFr("2018-02-23");
</p>

<h2>Resultat</h2>

<?php
/*$date = DateTimeImmutable::createFromFormat ('Y-m-d', '2018-02-23');
echo $date->format('l d F Y');*/



function formaterDateFr($date) {
       $date = DateTimeImmutable::createFromFormat ('Y-m-d', '2018-02-23'); // assigne la methode createFromFormat
       $result = $date->format('l d F Y');
       //var_dump($result);

       // tableau des jours et mois en anglais et français
       
       $english_days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
       $french_days = array('lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche');
       $english_months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
       $french_months = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');

       // Remplace les mots anglais par les mots français
        str_replace($english_days, $french_days, $result->l);
        str_replace($english_months, $french_months, $result->F);

        return $result;
};

echo formaterDateFr('2018-02-23');

echo $date->format('l');







