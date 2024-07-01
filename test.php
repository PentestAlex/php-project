/*
require("bdd.php");
$userName = $_POST["userName"];
$password = $_POST["password"];

$query = "SELECT * FROM `users` WHERE `Name`=?" ;
$req = $bdd->prepare($query);
$req->execute(array($userName));

while($users = $req->fetch()){
    echo $users["Name"]. " " .$users["age"]. " " .$users["sexe"]. "<br/>";
}


Exercice :
Vous êtes propriétaires d'un bar. Vous avez plusieurs utilisateurs dans votre base de données qui contiennent les données suivantes : 
id, name, password, age, sexe. 
Vous devez avoir une page qui vous permet de rentrer les identifiants de l'utilisateur. 
Vous devez créer une autre page qui va vérifier les informations utilisateurs, mais attention, en tant que propriétaire de bar responsable. 
Vous ne pouvez pas laisser rentrer tout le monde ! 
Ainsi, toute personne mineur (-18 ans) doit-être redirigé vers l'accueil, en leurs indiquant que leurs minorité ne leur permet pas d'accéder au bar. 
Le bar est gratuit pour les filles de 17 à 18h vous devez prendre en compte l'heure en temps réel. 
Pour les autres c'est toujours 5 euros l'entrée 
affichez les messages correspondants.

*/ 

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