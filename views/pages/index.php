    <?php require 'header.php'; ?>
    <?php
    var_dump();
    ?>
    <img width="99%" height="30%" src="./../ressources/images/main.jpg" alt="failed to load image" >
    <?php $produit= $DB->query('SELECT * FROM produit'); ?>
    <?php foreach ($produit as $produit); ?>

    <div id="offres">
         <hr>
         <h3> BON PLANS DU MOMENTS </h3>
         <hr>
         <article style="background-image: url(./../ressources/images/authentic.webp); background-size: 400px;">
            <h6> LE COQ SPORTIF </h6>
            <small> authentique </small>
        </article>
        <article style="background-image: url(./../ressources/images/bakam.webp); background-size: 400px;">
            <h6>REEBOOK</h6>
            <small> classic-flag_003</small>
        </article>
        <article style="background-image: url(./../ressources/images/classic-kids_006.jpg);">
            <h6>REEBOOK</h6>
            <small> classic-kids_006</small>
        </article> 
        <article style="background:url(./../ressources/images/suede-classic-xxi-v-.webp); background-size: 400px;">
            <h6> PUMA </h6>
            <small> suede-classic-xxi-v-</small>
            <echo $produit->name >
        </article>
        <article style="background:url(./../ressources/images/baylora.webp); background-size: 400px;">
            <h6> REEBOOK </h6>
            <small> classic-royal-flag_004</small>
        </article>
        <article style="background:url(./../ressources/images/royal-flag.jpg);">
            <h6> REEBOOK </h6>
            <small> classic-flag_007</small>
        </article>
        <article style="background-image: url(./../ressources/images/partner-creation-ref-fm8alulea10-black.webp); background-size: 400px;">
            <h6> TIMBERLAND </h6>
            <small> partner-creation-ref-fm8alulea10-black </small>
        </article>
        <article style="background-image: url(./../ressources/images/sprint-trekker.webp); background-size: 400px;">
            <h6> TIMBERLAND </h6>
            <small> sprint-trekker</small>
        </article>
        <article style="background-image: url(./../ressources/images/blim.webp); background-size: 400px;">
            <h6> REEBOOK </h6>
            <small> classic-royal-flag_004</small>
        </article>
        <?php endforeach ?>
    </div>
        <a href="addpanier.php?id=<?= $produit->id; ?>">Ajouter</a>    
    
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
    <?php require `header.php`; ?>
    <div id="description">
        <div id="paiement">
            <h3>moyen de paiement</h3>
            <p> a chercher</p>
            <h3> moyen de livraison</h3>
            <img width="50%" height="50%" src="./../ressources/images/Logo-Colis.svg" alt="logo colis">
        </div>
        <div id="info">
        <div id="site">
           <h3>CHAUSSURE</h3>
           <p> chaussure est un site de vente de chaussure en ligne qui mets a votre disposition des articles de differentes categories a des prix defiant toutes concurences.Que vous soyez à la recherche de baskets tendance pour compléter votre tenue streetwear, de bottines punk ou boho, ou encore de chaussures de ville pour un style glamour ou tout simplement pour les porter avec toutes vos tenues, vous allez trouver chaussure à votre pied. Vos créateurs préférés sont certainement sur CHAUSSURE, nous proposons de nombreuses marques de la basket à la claquette sans oublier les bottes et chaussures de skate.<br>
         Afin d'assurer une bonne cohesion avec ces clients , CHAUSSURES definit les contraintes suivantes:<br>
        - un remboursement sous moins de 30jours en cas d'insatisfaction<br>
        -une livraison gratuite si le prix de votre achat est superieure a 10 000fcfa<br>
        - un mode de paiement scurise<br>
        -une livraison  garantie en 24h<br>
        De plus un SERVICE CLIENT de qualite est mis a votre disposition pour tout vos besoins<br>
       ENTRER A CHAUSSURE PAR CURIOSITE ET VOUS RESTERER PAR PLAISIR </p>
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


    <?php require 'footer.php'; ?>