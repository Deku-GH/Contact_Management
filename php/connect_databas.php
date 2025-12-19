<?php
$server = "localhost";
$user = "root";
$password = "";
$dbname = "contact_management";

try {
    $pdo = new PDO("mysql:host=$server;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connect successfully";
} catch (PDOException $S) {
    echo "connect  faile", $S->getMessage();
}
?>