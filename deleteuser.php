<?php
session_start();
include "./publicophp/connection.php";

$id = $_SESSION["id"];

$db = new Db();

$db->borrar("users", "id=$id");

session_destroy();

header("Location: ./sesion.php");



?>