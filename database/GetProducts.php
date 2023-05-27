<?php
    function getAllShoes($db)
    {
        $req = $db->prepare('SELECT * FROM produits');
        $req->execute([]);
        return $req->fetchAll();
    }
?>