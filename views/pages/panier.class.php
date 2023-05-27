


<?php
class panier{
    public function__construct({
        if(!issert($_SESSION)){
            session_start();
        }
        if(!issert($_SESSION['panier']))
            $_SESSION['panier']=array();
    })
    
}