<?php
require "connect_databas.php";

?>
<?php
$msg_name = "";
$msg2_name = "";

if (isset($_POST["Submit"])) {

    if (empty($_POST["user_name"]) || strlen($_POST['user_name']) < 3)
        $msg_name = "You must supply your name and must be over 3 character";
    $name_subeject = $_POST["user_name"];
    $name_pattern = '/^[a-zA-Z ]*$/';
    preg_match($name_pattern, $name_subeject, $name_matche);
    if (!$name_matche[0])
        $msg2_name = "Only alphabets and white space allowed";
}

?>
<?php
$msg_password = "";
$msg2_password = "";
$msg_password2 = "";
if (isset($_POST["Submit"])) {

    if (empty($_POST["Password1"]) && strlen($_POST['Password1']) < 6)
        $msg_password = "You must supply your password and must be over 6 character";
    if (strcmp($_POST['Password1'], $_POST['Password2']))
        $msg_password2 = "the password it's not the same ";
    $password_subeject = $_POST["Password1"];
    $password_pattern = '/^((?=\S*?[A-Z])(?=\S*?[a-z])(?=\S*?[0-9]).{6,})\S$/';
    preg_match($password_pattern, $password_subeject, $password_matche);
    if (!$password_matche[0])
        $msg2_password = "you have to put strong password ";
    $user_name = $_POST['user_name'];
    $user_password = $_POST['Password1'];
}
include "../function/queries.php";
queriesdata( $_POST ,$pdo);
 
    ?>