<?php

session_start();

unset($_SESSION["id"]);
unset($_SESSION["email"]);
unset($_SESSION["name"]);
unset($_SESSION["photo"]);
$_SESSION["tipo"] = 3;
    

session_destroy();
header("Location: ./index.php");
?>