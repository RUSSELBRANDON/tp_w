<?php
$email=$_POST['email'];
$pass=$_POST['mot_de_passe']; 
// connection a la base de donnees
$host = "localhost";
$dbname = "sweet_shop";
$user = "root";
$pass = "";
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$mail = $pdo->prepare("SELECT email FROM utilisateur WHERE email=?");
$mail->execute(["$email"]);
$password = $pdo->prepare("SELECT mot_de_passe FROM utilisateur WHERE mot_de_passe=?");
$password->execute(["$pass"]);
if($mail!==null && $password!==null){
    echo " bienvenu ";
}else{
    echo "ce compte n'existe pas";
}