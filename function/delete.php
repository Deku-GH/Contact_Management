<?php

require "../php/connect_databas.php";

$id = $_GET['id'];
$stmt = $pdo->prepare("DELETE FROM  contact WHERE id =:id ");

$stmt->execute([':id'=>$id]);
 header("Location: ../php/contact.php");