<?php

require("bdd.php");
$userName = $_POST["userName"];
$password = $_POST["password"];

$query = "SELECT * FROM `users` WHERE `Name`=? AND `password`=?";
$req = $bdd->prepare($query);
$req->execute(array($userName, $password));


if ($users = $req->fetch()) {
    $currentTime = new DateTime();
    $currentHour = $currentTime->format('H');
    $age = $users['age'];
    $sexe = $users['sexe'];

    if ($age < 18) {
        echo "Vous êtes mineur. Dégagez.";
    } else {
        if ($sexe == 'F' && $currentHour >= 17 && $currentHour < 18) {
            echo "Bienvenue, l'entrée est gratuite pour les filles de 17h à 18h.";
        } else {
            echo "Bienvenue, veuillez payer 5 euros.";
        }
    }
} else {
    echo "Identifiants incorrects.";
}
?>