<fieldset style=" height:400px; margin:100px 200px 200px 200px ; background-color:orange"><a href="inscription.html" style="color:blue; font-size:40px; text-align:center; margin-top:250px;"> retourner a la page de connexion </a></fielsed>
<?php

require ' ./../../../database/connection.php';
//Récupération des données du formulaire
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password1'];
$password2 = $_POST['password2'];
if($password!==$password2){
?>  <script>alert('impossible de vous inscrire car le mot de passe est errone. Veillez recommencer votre inscription'); </script> <?php
exit();
}
//Connexion à la base de données
$db = connection();

 //Préparation de la requête d'insertion
$date_enregist=date("d/m/y");
$ins = $db->prepare("INSERT INTO utilisateur (name_user, email, password,date_enregistrement) VALUES (:nom, :email, :password1, :dates)");
 //Assignation des valeurs aux paramètres de la requête
 $ins->bindParam(':nom', $name);
 $ins->bindParam(':email', $email);
 $ins->bindParam(':password1', $password);
 $ins->bindParam(':password1', $password);
 $ins->bindParam(':dates', $date_enregist );

 //Exécution de la requête
 $ins->execute();

if ($ins) 
{
	?><script>alert("Inscription approuvee");</script><?php
}else
{
	?><script>alert("Echec de l'inscription");</script><?php
}
//Fermeture de la connexion à la base de données
$pdo = null;

?>