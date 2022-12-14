<?php

session_start();

unset($_SESSION["id"]);
unset($_SESSION["email"]);
unset($_SESSION["name"]);
unset($_SESSION["photo"]);


session_destroy();
$_SESSION["tipo"] = 3;
$_SESSION["photo"] = "";
header("Location: ./index.php");
?>