<?php 
require "../php/connect_databas.php";

$sql="SELECT * FROM utilisateur WHERE user_name =? ";
$stmt =$pdo->prepare($sql);

$stmt -> execute([$_POST["email"]]);
$user=$stmt->fetch();


if($user){
   header("Location: ../php/contact.php");
exit;
  

}
else{
   header("Location: ../php/connexion.php");

   exit;
}

