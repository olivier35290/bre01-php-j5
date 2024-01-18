<?php

require "../config/connexion.php";

$query = $db->prepare("UPDATE users SET email = :email, password = :password, first_name = :firstName, last_name = :lastName WHERE id = :id");
$parameters = [
    "id" => $_POST["userId"],
    "email" => $_POST["email"],
    "password"=> $_POST["password"],
    "firstName" => $_POST["firstName"],
    "lastName" => $_POST["lastName"]
    ];

$query-> execute($parameters);

header('Location: https://oliviercharlet.sites.3wa.io/php/bre01-php-j5/pdo/bre01-php-j5/index.php');
exit;

?>