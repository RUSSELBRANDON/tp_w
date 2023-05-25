
<?php
require 'connection.php';

   $name = $_POST['name'];
   $email = $_POST['email'];
   $password= $_POST['password'];
      if(connection()= $db){
               $ins = $pdo->prepare("insert into utilisateurs (nom_users,email,mot_de_passe) values(:nom_users,:email,:mot_de_passe)");
              $ins->execute(array(
              ":nom_users"=>$name,
              ":email"=>$email,
            ":mot_de_passe"=>md5($password),
         ));
      }else{
          echo ' erreur de connexion';
      }
?>