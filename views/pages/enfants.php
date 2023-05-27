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
    <link rel="stylesheet" href="./../css/enfant.css">
    <title><?php echo($_APP['name']) ?></title>
</head>
<body>
    <?php require_once('parts/nav.php') ?>
    <section>
        <div id="slogan">
            <h3> ENFANT </h3>
            <P>Prêt à voir vos petits aventuriers et fashionistas se démarquer avec style ? Découvrez notre incroyable sélection de sneakers et baskets pour enfants qui répondent aux besoins de chaque pas, saut et foulée ! Que vous cherchiez 
            des chaussures pour filles ou pour garçons, nous avons tout ce dont vous avez besoin. </P>
          </div>  
    </section>
    <?php require_once('parts/footer.php') ?>
</body>
</html>