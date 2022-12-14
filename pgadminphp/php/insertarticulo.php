<?php

include "connection.php";

$title = $_POST["title"];
$author = $_POST["author"];
$content = $_POST["content"];
$photo = $_POST["photo"];
$keywords = $_POST["keywords"];
$tipo = $_POST["tipo"];
$state = $_POST["state"];
$date = date("Y-m-d H:i:s");

$db = new Db();
$db->insert("articulos", "'$title', '$author', '$content', '$photo', '$date','$keywords', '$state', '$tipo' ");
header("Location: ./../articulos.php");

?>