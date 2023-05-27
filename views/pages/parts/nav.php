<header>
    <div id="entete1">
    <h1><?php echo($_APP['name']) ?></h1>
    <h5> faites vous plaisir chez nous</h5><br>
    <form method="post" action="<?php echo($_APP['search']) ?>">
        <input type="text" placeholder="rechercher un produit" name="search">
        <button type="submit">rechercher</button>
    </form>
    <nav>
        <ul>
            <li> <a href="<?php echo($_APP['connexion']) ?>"> COMPTE</a></li>
            <b class="far fa-user"></b>
            <li style="font-size: 22px;"> PANIER</li>
        </ul>
        </nav>
    </div>
    <div id="entete2">
        <nav>
            <ul>
                <li> <a href="<?php echo($_APP['hommes']) ?>"> HOMMES</a></li>
                <li> <a href="<?php echo($_APP['femmes']) ?>"> FEMMES</a></li>
                <li> <a href="<?php echo($_APP['enfants']) ?>"> ENFANTS</a></li>
                <!-- <li> <a href="marques.php"> MARQUES</a></li> -->
            </ul>
        </nav>
    </div>
</header>