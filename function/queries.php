<?php 
echo "yeah u right";
function queriesdata($data ,$pdo){
       try{
         $stmt=$pdo->prepare( "INSERT INTO utilisateur(user_name,possword,date_connexion)VALUES(:name,:password,now())");
    $user_name = $data['user_name'];
    $user_password = $data['Password1'];     
    $stmt ->execute([
        'name'=> $user_name,
        'password'=> $user_password
               ]);

    }catch(Exception $e){
         echo "errer".$e->getMessage();
        }

}