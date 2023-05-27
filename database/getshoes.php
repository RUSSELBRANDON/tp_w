<fieldset style=" height:400px; margin:100px 200px 200px 200px ; background-color:orange"></fielsed>
<?php

$rech=$_POST['search'];
if($rech==="reebook" || $rech==="REEBOOK"){
    ?>
    <a href="reebook.php" style="font-size:40px;color:black"> decouvrir les articles Reebook </a> 
     <?php
}else if($rech==="le coq sportif" || $rech==="LE COQ SPORTIF"){
    ?>
    <a href="coq.php.php" style="font-size:40px;color:black"> decouvrir les articles LE COQ SPORTIF </a> 
     <?php
}else
if($rech==="puma" || $rech==="PUMA"){
    ?>
    <a href="puma.php" style="font-size:40px;color:black"> decouvrir les articles PUMA </a> 
     <?php
}else
if($rech==="TIMBERLAND" || $rech==="TIMBERLAND"){
    ?>
    <a href="timberland.php" style="font-size:40px;color:black"> decouvrir les articles TIMBERLAND </a> 
     <?php
}else{
    ?> <h3 style="font-size:40px;color:black"> articles introuvable!!! verifier le nom et recommencer <?php
}
?>