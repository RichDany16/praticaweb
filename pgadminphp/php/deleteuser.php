<?php
include "connection.php";
$id = $_GET["id"];

$db = new Db();
$db->borrar("users", "id=$id");

header("Location: ./../users.php");
?>