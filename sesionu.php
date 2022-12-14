<?php

include "./publicophp/connection.php";

$email = $_POST['email'];
$password = $_POST['password'];



$db = new Db();

$consulta = $db->buscar("users", "email = '$email' AND password = '$password'");
$user = $consulta[0];

    
if ($user) {
    session_start();
    $_SESSION['email'] = $email ;
    $_SESSION['id'] = $user["id"];
    $_SESSION['name'] = $user["name"];
    $_SESSION['photo'] = $user["photo"];
    $_SESSION['tipo'] = $user["tipo"];
    header("Location: ./index.php");
} else {
    header("Location: ./nouseru.php");
}

?>