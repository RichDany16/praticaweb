<?php

require("./php/connection.php");

?>

<?php

$db = new Db();
$users = $db->buscar("users", "id>0");

foreach ($users as $user) {

    $userType = $user["tipo"] == 1 ? "Administrador" : "Usuario";


    echo <<<text

     <a href="./php/deleteuser.php?id={$user["id"]}" class="btn btn-danger">Eliminar</a>

  text;
}

?>