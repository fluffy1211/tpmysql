<?php
// 1) Connexion à la BDD
$connexion = new mysqli('localhost:3300', 'root', 'test');

//Autre méthode de connexion : $connexion = mysqli_connect('localhost', 'root', 'root')
//si il y a une erreur de co on l'affiche et on stop le script php
if ($connexion->connect_errno){
    echo "Echec de la connexion : " . $connexion->connect_error;
    exit;
}
//2) Ici ma requête SQL
$req = ' SELECT * FROM  `clients` ';

//3 Executer la commande précédente
$clients = $connexion->query($req);
//4 j'affiche le résultat de la reqête sur ma page
print_r($clients);
echo"<br>";
//5 pour chaque client je veux afficher son nom
foreach($clients as $client){
    echo "Nom du client :" . $client['name'] . "<br>";
}
$connexion->close();