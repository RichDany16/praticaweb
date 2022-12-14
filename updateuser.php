<?php

include "./publicophp/connection.php";

$id = $_POST["id"];
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$photo = $_POST["photo"];


$db = new Db();
$db->actualizar("users", "name = '$name', password = '$password', photo = '$photo'", "id = $id");

    $_SESSION['name'] = $_POST["name"];
    $_SESSION['photo'] = $_POST["photo"];

header("Location: ./index.php");
