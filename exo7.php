<h1>Exercice 7</h1>

<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser 
dans le tableau associatif si la case est cochée ou non.
</p>

<h2>Resultat</h2>

<!--<form action="" method="post">
    <legend>Faites votre choix</legend>--> <!-- sert a mettre une légende au formulaire de choix -->

 <!--   <div>
        <input type="checkbox" id="choix" name="choix">--> <!-- insere un formulaire de type choix -->
 <!--       <label for="choix">Choix 1</label> --><!-- permet de definir le texte du choix -->
 <!--   </div>
    <div>
        <input type="checkbox" id="choix" name="choix" >
        <label for="choix">Choix 2</label>
    </div>
    <div>
        <input type="checkbox" id="choix" name="choix" >--><!-- attribut checked les caches seront cochés par défault -->
<!--        <label for="choix">Choix 3</label>
    </div>
</form> -->      
<?php

$elements = array ("choix 1"=>false, "choix 2"=>true, "choix 3"=>false);

function genererCheckbox ($elements){
    $result = "<form action='#' method='post'>" ; // introduit le formulaire
    foreach ($elements as $choix => $element) { // introduit le checkbox
        $result .="<div>
                     <input type='checkbox' id='".$choix."' name='choix'";
                        if ($element == true){ // condition pour défénir si l'élément est coché
                            $result .= "checked>";
                        }; 
        $result .="<label for='".$choix."'>".$choix."</label> 
                   </div>";
    };
    return $result;

};

echo genererCheckbox($elements);