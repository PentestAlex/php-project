<?php
require("bdd.php");
$userName = $_POST["userName"];
$password = $_POST["password"];

$query = "SELECT * FROM `users` WHERE `Name`=?";
$req = $bdd->prepare($query);
$req->execute(array($userName));

while($users = $req->fetch()){
    echo $users["Name"]. " " .$users["age"]. " " .$users["sexe"]. "<br/>";
}



//var_dump($bdd);


/*Réalisé sur la page login.php une validation de login prédéfinies 
mettons que le bon user soit "John" et que le mot de passe soit "1234" 
vous devez attendre ces inputs sur la page login.php, si ce n'est pas les bons, 
afficher une erreur, sinon valider l'input et dire bienvenue à l'utilisateur


$userName = $_POST["userName"];
$password = $_POST["password"];

if ($userName !== "john" && $password !== "1234"){
    echo "Erreur : Votre nom d'utilisateur ou votre mot de passe est incorrect.";
} else {
    echo "Bienvenue $userName !";
}

faire le même exercice avec plusieurs utilisateurs : 
John dont le mdp est 1234
Mario dont le mdp est Luigi
Bowser dont le mdp est Peach 

$count = 0;
$array = array(
    'john' => '1234',
    'mario' => 'luigi',
    'bowser' => 'peach');


foreach($array as $key => $valeur){
    if ($userName == $key && $password == $valeur){
        echo "Bienvenue $userName ! <br>";
        $count ++;
        break;
        } 
}

if ($count ===0){
    echo "Erreur : Votre nom d'utilisateur ou votre mot de passe est incorrect.";
}

*/