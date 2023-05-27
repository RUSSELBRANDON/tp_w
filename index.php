<?php 
    $_APP = parse_ini_file('settings.ini');
    require_once('database/connection.php');
    require_once('database/GetProducts.php');
    // var_dump($_APP);

    $db = connection('settings.ini');
    $produits = getAllShoes($db);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="views/css/styles.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title><?php echo($_APP['name']) ?></title>
</head>
<body>
    <?php require_once('./views/pages/parts/nav.php') ?>
    <img width="99%" height="30%" src="views/ressources/images/main.jpg" alt="failed to load image" >
    <div id="offres">
         <hr>
         <h3> BON PLANS DU MOMENTS </h3>
         <hr>
         <?php
            foreach ($produits as $key => $produit) {
         ?>
        <article >
            <img style="background-size: 400px;" src="http://localhost/tp_w/views/images/<?php echo($produit['image']) ?>" alt="">
            <h6> <?php echo($produit['nom']) ?> </h6>
            <small> <?php echo($produit['prix']) ?> </small>
        </article>
        <?php
            }
         ?>
    </div>
    <div id="abonnement">
        <h3> ABONNEZ-VOUS</h3>
        <h4> abonnez vous pour decouvrir nos exclusivite</h4>    
      <form>
        <input type="email" name="abonnes" placeholder="entrer votre adresse email"><br>
        <button type="submit"> je m'abonne </button>
      </form>
    </div>
    <div id="service">
        <div id="message">
            <img width="22%" height="22%" src="views/ressources/images/casque.svg" alt="casque">
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
           <img src="views/ressources/images/icone1.png" alt="icone1">
           <small> echange sous 100 jours</small>
        </div>
        <div id="icone2">
            <img src="views/ressources/images/icone2.png" alt="icone1">
            <small> livraison gratuite a plus de 10000fcfa</small>
        </div>
        <div id="icone3">
            <img src="views/ressources/images/icone3.png" alt="icone1">
            <small> paiement securise</small>
        </div>
        <div id="icone4">
            <img src="views/ressources/images/icone1.png" alt="icone1">
            <small> expedition sous 24h</small>
        </div>
    </div>
    <div id="description">
        <div id="paiement">
            <h3>moyen de paiement</h3>
            <p> a chercher</p>
            <h3> moyen de livraison</h3>
            <img width="50%" height="50%" src="views/ressources/images/Logo-Colis.svg" alt="logo colis">
        </div>
        <div id="info">
        <div id="site">
           <h3> SWEET SHOP</h3>
           <p> SWEET SHOP est un site de vente de chaussure en ligne qui mets a votre disposition des articles de differentes categories a des prix defiant toutes concurences.Que vous soyez à la recherche de baskets tendance pour compléter votre tenue streetwear, de bottines punk ou boho, ou encore de chaussures de ville pour un style glamour ou tout simplement pour les porter avec toutes vos tenues, vous allez trouver chaussure à votre pied. Vos créateurs préférés sont certainement sur CHAUSSURE, nous proposons de nombreuses marques de la basket à la claquette sans oublier les bottes et chaussures de skate.<br>
         Afin d'assurer une bonne cohesion avec ces clients ,  SWEET SHOP definit les contraintes suivantes:<br>
        - un remboursement sous moins de 30jours en cas d'insatisfaction<br>
        -une livraison gratuite si le prix de votre achat est superieure a 10 000fcfa<br>
        - un mode de paiement scurise<br>
        -une livraison  garantie en 24h<br>
        De plus un SERVICE CLIENT de qualite est mis a votre disposition pour tout vos besoins<br>
       ENTRER A SWEET SHOP PAR CURIOSITE ET VOUS Y RESTERER PAR PLAISIR </p>
        </div>
        <div id="contact">
            <h3> COMMENT NOUS CONTACTER</h3>
            <h4>DIRECTEMENT DEPUIS NOTRE SITE :</h4>
            <p>Laissez-nous votre message via notre formulaire de contact. Nous vous répondrons le plus rapidement possible</p>
            <h4>PAR E-MAIL</h4>
            <p>Notre service client est également joignable à l'adresse :<a href="mailto:serviceclient@gmail.com" style="color:blue;"> serviceclient@gmail.com <a></a></p>
            <h3>PAR TELEPHONE</h3>
            <p>Notre service client est joignable par téléphone au 676 86 40 85,24h/24</p>
        </div>
        </div>
    </div>
    <?php require_once('./views/pages/parts/footer.php') ?>
</body>
</html>