<fieldset style=" height:400px; margin:100px 200px 200px 200px ; background-color:orange"><a href="inscription.html" style="color:blue; font-size:40px; text-align:center; margin-top:250px;"> retourner a la page de connexion </a></fielsed>
<?php

require 'connection.php';
//Récupération des données du formulaire
$search = $_POST['search'];

//connection a la base de donnes
$host = "localhost";
$dbname = "sweet_shop";
$user = "root";
$pass = "";
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$rech = $pdo->query("SELECT reference FROM produit WHERE reference= $search LIMIT 1");
//$rech->execute(array($search));
if($rech="reebook" || $rech="REEBOOK"){
    ?>
    <a href="reebook.php"> decouvrir les articles Reebook </a> 
     <?php
}else if($rech="le coq sportif" || $rech="LE COQ SPORTIF"){
    ?>
    <a href="coq.php.php"> decouvrir les articles LE COQ SPORTIF </a> 
     <?php
}else
if($rech="puma" || $rech="PUMA"){
    ?>
    <a href="puma.php"> decouvrir les articles PUMA </a> 
     <?php
}else
if($rech="TIMBERLAND" || $rech="TIMBERLAND"){
    ?>
    <a href="timberland.php"> decouvrir les articles TIMBERLAND </a> 
     <?php
}
//fermeture de la base de donnees
$pdo=null;
?>
