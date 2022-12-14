<?php

include "connection.php";

$id = $_POST["id"];
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$tipo = $_POST["tipo"];
$photo = $_POST["photo"];


$db = new Db();
$db->actualizar("users", "name = '$name', email = '$email', password = '$password', tipo = '$tipo', photo = '$photo'", "id = $id");

header("Location: ./../users.php");




?>