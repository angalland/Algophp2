<h1>Exercice</h1>

<p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de 
valeurs en paramètre ("Monsieur","Madame","Mademoiselle").<p>

<h2>Resultat</h2>


<!--<form action='' method='post'>
    <div>
        <input type='radio' id='civilite' name='civilite' value='monsieur'>
        <lable for='civilite'>Monsieur</label>
    </div>
    <div>
        <input type='radio' id='civilite' name='civilite' value='madame'>
        <label for='civilite'>Madame</label>
    </div>
    <div>
        <input type='radio' id='civilite' name='civilite' value='mademoiselle'>
        <label for='civilite'>Mademoiselle</label>
    </div>
</form> -->

<?php

$nomsRadio = array ("Masculin", "Feminin", "Autre");

function afficherRadio($nomsRadio){
    $result = "<form action='' method='post'>";
    foreach ($nomsRadio as $nomRadio){
        $result .="<div>
        <input type='radio' id='".$nomRadio."' name='civilite' value='monsieur'>
        <lable for='".$nomRadio."'>".$nomRadio."</label>
    </div>";
    };
    return $result;
}

echo afficherRadio($nomsRadio);

