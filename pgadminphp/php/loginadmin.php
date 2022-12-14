<?php

include "./connection.php";

$email = $_POST['email'];
$password = $_POST['password'];

$db = new Db();

$consulta = $db->buscar("users", "email = '$email' AND password = '$password'");
$user = $consulta[0];

if ($user) {
    session_start();
    $_SESSION['id'] = $user["id"];
    $_SESSION['email'] = $email;
    $_SESSION['name'] = $user["name"];
    $_SESSION['photo'] = $user["photo"];
    $_SESSION['tipo'] = $user["tipo"];
    header("Location: ./../panel.php");
} else {
    header("Location: ./../nouser.php");
}


?>