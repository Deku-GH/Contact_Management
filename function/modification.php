<?php
require "../php/connect_databas.php";

 var_dump($_POST);
querie($pdo);
function querie($pdo)
{
    $stmt = $pdo->prepare("UPDATE contact SET name = :name, prenom = :prenom, email = :email, telephone = :telephone, adresse = :adresse WHERE  email = :email");
    executdata($stmt);
}


function executdata($stmt)
{
    $data = datapost();

     $stmt->execute(
        [
            ':name' => $data['name'], 
            ':prenom' => $data['prenom'],
            ':email' => $data['email'], 
            ':telephone' => $data['telephone'], 
            ':adresse' => $data['adresse']
        ]
    );
    header("Location: ../php/contact.php"); 

}


function datapost()
{
    $data = [
        'name' => $_POST["full_name"],
        'prenom' => $_POST["last_name"],
        'telephone' => $_POST["telephone"],
        'email' => $_POST["email"],
        'adresse' => $_POST["Addresse"]

    ];
    return $data;

}






?>