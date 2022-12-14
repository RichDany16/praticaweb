<?php

session_start();

include "./publicophp/connection.php";

$id = $_POST["id"];
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$photo = $_POST["photo"];

$_SESSION['name'] = $_POST["name"];
$_SESSION['photo'] = $_POST["photo"];

$db = new Db();
$db->actualizar("users", "name = '$name', password = '$password', photo = '$photo'", "id = $id");


header("Location: ./index.php");
