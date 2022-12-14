<?php

include "connection.php";

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$tipo = $_POST["tipo"];

$db = new Db();
$db->insert("users", "'$name', '$email', '$password', '$tipo', 'foto.png'");
header("Location: ./../index.php");

?>