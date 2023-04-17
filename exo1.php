<h1>Exercice 1</h1>

<p>Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de 
caractère passée en argument en majuscules et en rouge.
Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ;
</p>

<h2>Resultat</h2>

<?php

function convertirMajRouge($texte){
    if (!isset($texte)){
        return "";
    }
    return "<span style=\"color:red;\">".mb_strtoupper($texte, 'UTF-8')."</span>";
}

echo convertirMajRouge("Mon texte en paramètre");
