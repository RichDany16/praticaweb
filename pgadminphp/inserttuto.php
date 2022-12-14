<?php

//
include "./php/connection.php";


$db = new Db();

$date = date("Y-m-d H:i:s");
$title = $_POST['title'];
$author = $_POST['author'];
$photo = $_POST['photo'];
$tipo = $_POST['tipo'];
$state = $_POST['state'];
$content = $_POST['content'];


$db->insert("tutos", "'$title', '$author', '$content', '$photo', '$date', 'BASE DE DATOS', '$state', '$tipo'");




header("Location: ./tutos.php");



?>