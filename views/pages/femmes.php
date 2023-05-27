<?php 
    $_APP = parse_ini_file('./../../settings.ini');
    // var_dump($_APP);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/styles.css">
    <title><?php echo($_APP['name']) ?></title>
</head>
<body>
    <?php require_once('parts/nav.php') ?>
    
    <div id="service">
        <div id="message">
            <img width="22%" height="22%" src="./../ressources/images/casque.svg" alt="casque">
            <p> contacter nous par telephone ou par email et acceder a un<strong> SERVICE CLIENT </strong>de qualite</p>
        </div>
        <div id="numero">
            <p> 676 86 40 85 
            <br> appel gratuit</p>
        </div>
        <div id="email">
            <p> serviceclient@gmail.com</p>
        </div>
    </div>
    <div id="icone">
        <div id="icone1">
           <img src="./../ressources/images/icone1.png" alt="icone1">
           <small> echange sous 100 jours</small>
        </div>
        <div id="icone2">
            <img src="./../ressources/images/icone2.png" alt="icone1">
            <small> livraison gratuite a plus de 10000fcfa</small>
        </div>
        <div id="icone3">
            <img src="./../ressources/images/icone3.png" alt="icone1">
            <small> paiement securise</small>
        </div>
        <div id="icone4">
            <img src="./../ressources/images/icone1.png" alt="icone1">
            <small> expedition sous 24h</small>
        </div>
    </div>
    <?php require_once('parts/footer.php') ?>
</body>
</html>