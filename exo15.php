<h1>Exercice 15</h1>

<p>En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une 
adresse e-mail a le bon format.</p>

<h2>Résultat</h2>

<?php
$email = "elan@elan-formation.fr";

function validerEmail($email){
    if (filter_var($email, FILTER_VALIDATE_EMAIL)){ 
        return "L'adresse ".$email." est une adresse e-mail valide.";
    } else {
        return "L'adresse ".$email." est une adresse e-mail invalide";
    }
};

echo validerEmail($email);

// la fonction filter_var (string $email, FILTER_VALIDATE_EMAIL) renvoie true si l'adressse email est valide et false si elle est invalide 