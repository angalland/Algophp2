<h1>Exercice 2</h2>

<p>Soit le tableau suivant :
$capitales = array 
("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");
Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays 
s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à 
une fonction personnalisée.
Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);</p>

<h2>Résulat</h2>




<?php

$capitales = [
    "France"=>"paris",
    "Allemagne"=>"berlin",
    "USA"=>"washington",
    "Italie"=>"rome"
];

function afficherTableHTML($capitales) {
    asort($capitales);
    $result = "<table border=1>
                <thead>
                    <th>Pays</th>
                    <th>Capitales</th>
                </thead>

                <tbody>";
    foreach ($capitales as $pays => $capitale){
        $result .= "<tr> 
                        <td>".mb_strtoupper($pays)."</td>
                        <td>".ucfirst($capitale)."</td>
                    </tr>";
    }
    $result .= "</tbody></table>";
    return $result;
}

echo afficherTableHTML($capitales);