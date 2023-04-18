<h1>Exercice</h1>

<p>Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.
Exemple :
repeterImage($url,4);
</p>

<h2>Resultat</h2>

<!--<img src=http://my.mobirise.com/data/userpic/764.jpg  alt="photo de chien">-->

<?php

//$url ="http://my.mobirise.com/data/userpic/764.jpg";
$url = "http://my.mobirise.com/data/userpic/764.jpg";

/*function repeterImage($url, $nb) {
    
        $url ="<img src=".$url." alt='photo de chien'>";
        $result = str_repeat($url, $nb);
        return $result;

};*/


function repeterImage($url, $nb) {

        for ($i=0; $i<$nb; $i++){ // initiation $i=0 correspond au commande qu'on mets dans la boucle
               echo "<img src=".$url." alt='photo de chien'>";
        };


};

echo repeterImage($url, 4);



