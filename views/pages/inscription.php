<?php

//Récupération des données du formulaire
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password1'];
$password2 = $_POST['password2'];

//Connexion à la base de données
$host = "localhost";
$dbname = "sweet_shop_db";
$user = "root";
$pass = "";
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Préparation de la requête d'insertion
    $date_enregist=date("d/m/y");
    $ins = $pdo->prepare("INSERT INTO utilisateur (name_user, email, password,date_enregistrement) VALUES (:nom, :email, :password1, :dates)");
    //Assignation des valeurs aux paramètres de la requête
    $ins->bindParam(':nom', $name);
    $ins->bindParam(':email', $email);
    $ins->bindParam(':password1', $password);
    $ins->bindParam(':dates', $date_enregist );
    
 //Exécution de la requête
if($ins) 
{
	?><script>alert("Insertion Reussit");</script><?php
}else
{
	?><script>alert("Echec de l'Insertion");</script><?php
}
//Fermeture de la connexion à la base de données
$pdo = null;
?>