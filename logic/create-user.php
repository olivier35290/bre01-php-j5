<?php

require "../config/connexion.php";

$query = $db->prepare("INSERT INTO users (id, email, password, first_name, last_name) VALUES (NULL, :email, :password, :firstName, :lastName)");
$parameters = [
    "email" => $_POST["email"],
    "password"=> $_POST["password"],
    "firstName" => $_POST["firstName"],
    "lastName" => $_POST["lastName"]
];

$query-> execute($parameters);

header('Location: https://oliviercharlet.sites.3wa.io/php/bre01-php-j5/pdo/bre01-php-j5/index.php');
exit;

?>