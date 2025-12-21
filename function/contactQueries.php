<?php
require "../php/connect_databas.php";

?>

<?php
 querie($pdo);
function querie($pdo){
          $stmt=$pdo->prepare( "INSERT INTO utilisateur( name,prenom,email,telephone,adresse,id_user)VALUES('name','prenom','email','telephone','adresse','id_user')");
              executdata($stmt);
}

function  executdata($stmt){
 $data = datapost();
    $stmt->execute(
        [
            'name' => $data["name"],
                'prenom' => $data["prenom"],
                 'email' =>  $data["email"],
                'telephone' => $data["telephone"],  
                'adresse' =>  $data["adresse"],
                'id_user' =>  "1"


        ]
        );
 
}


function datapost(){
    $data =[
                'name' => $_POST["full_name"],
                'prenom' => $_POST["last_name"],
                'telephone' => $_POST["telephone"],

                'email' => $_POST["email"],
                'adresse' => $_POST["Addresse"]

];
return $data;

}


