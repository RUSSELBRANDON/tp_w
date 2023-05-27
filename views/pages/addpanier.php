<?php
require '_header.php';
if(isset($_GET['id'])){
    $DB->query('SELECT id  FROM produit WHERE id=:id, array('id'=> $_GET['id']));
    var_dump($produit)}
    $_SESSION['panier'][33


var_dump($_GET);
?>