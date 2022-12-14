<?php

include "connection.php";

$id = $_GET["id"];


$db = new Db();
$db->borrar("articulos", "id = $id");

header("Location: ./../articulos.php");


?>