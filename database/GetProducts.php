<?php
    function getAllShoes($db)
    {
        $req = $db->prepare('SELECT * FROM produits');
        $prods = $req->execute([]);
        return $prods;
    }
?>