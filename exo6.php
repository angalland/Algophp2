<h1>Exercice 6</h1>

<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau 
de valeurs.
Exemple :
$elements = array("Monsieur","Madame","Mademoiselle");
alimenterListeDeroulante($elements);
</p>

<h2>Resultat</h2>

<!--<form action="#" method="post">
       <label for="lang">Language</label>--> <!-- Sert a définir le titre du choix déroulant -->
      <!--<select name="civilité" id="civ">--> <!-- la balise <select></select> sert a lister les options de la liste -->
       <!-- <option value="Monsieur">Monsieur</option> --> <!--la <option></option> on insere l'option de la liste ici -->
       <!-- <option value="Madame">Madame</option>
        <option value="Mademoiselle">Mademoiselle</option>
      
      </select>
</form>-->

<?php

$elements = array("Monsieur", "Madame", "Mademoiselle",);

function alimenterListeDeroulante($elements) {
    $result = "<form action='#' method='post'>
        <select name='civilite' id='civ'>";
    foreach ($elements as $element) {
        $result.= "<option value='".$element."'>".$element."</option>";
    };
    $result.="</select></form>";
    return $result;
};
        


echo alimenterListeDeroulante($elements);
