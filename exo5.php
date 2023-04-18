<h1>Exercice 5</h1>

<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en 
précisant le nom des champs associés.
Exemple :
$nomsInput = array("Nom","Prénom","Ville");
afficherInput($nomsInput);
</p>

<h2>Resultat</h2>


    
    
<?php

$nomsImput = array("Nom", "Prenom", "ville", "Age", "email");

function afficherInput($nomsImput){
        $result = "<form action='' method='post'>";
    foreach ($nomsImput as $formulaire){
        $result .= "<form action='' method='post'>
                        <div>
                            <label for='name'>".$formulaire."</label>
                            </br>
                            <input type='text' id='name'>
                        </div>";                 
    }
    return $result;
};

echo afficherInput($nomsImput);