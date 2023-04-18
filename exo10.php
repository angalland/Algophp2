<h1>Exercice 10</h1>

<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire 
complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse email, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation : 
« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement 
de validation (submit).</p>

<h2>Resultat</h2>

<?php

$nomsImput = array("Nom", "Prenom", "adresse e-mail", "Ville", "Sexe");

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
echo "</br>";
$elements = array("Développeur Logiciel", "Designer Web", "Intégrateur", "Chef de projet");

function alimenterListeDeroulante($elements) {
    $result = "<form action='#' method='post'>
        <select name='civilite' id='civ'>";
    foreach ($elements as $element) {
        $result.= "<option value='".$element."'>".$element."</option>";
    };
    $result.="</select></form>";
    return $result;
};

$validation = array ("Validation");

function boutonValider($validation){
    foreach ($validation as $valider){
        $result = "<input type='submit' value='".$valider."'>";
    };
    return $result;
};

echo alimenterListeDeroulante($elements);
echo "</br>";
echo boutonValider($validation);
