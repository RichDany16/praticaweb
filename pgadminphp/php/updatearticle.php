<?php

include "connection.php";

$id = $_POST["id"];
$title = $_POST["title"];
$author = $_POST["author"];
$content = $_POST["content"];
$photo = $_POST["photo"];
$keywords = $_POST["keywords"];
$tipo = $_POST["tipo"];
$state = $_POST["state"];

$db = new Db();

$article = $db->actualizar("articulos", "title = '$title', author = '$author', content = '$content', photo = '$photo', keywords = '$keywords', tipo = '$tipo', state = '$state'", "id = $id");

header("Location: ./../articulos.php");
?>