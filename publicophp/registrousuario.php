<?php

include "connection.php";

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];

// $tipo = $_POST["tipo"];

$db = new Db();
$db->insert("users", "'$name' , '$email', '$password', '2', 'foto.png'");
header("Location: ./../sesion.php");

?>