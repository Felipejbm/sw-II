<?php


$emailFiltro = $_POST['email'];

$contentJSON = file_get_contents("../2/usuarios.json");

$usuariosArr = json_decode($contentJSON, true);

$usuarios = $usuariosArr["usuarios"];

$usuarioEncontrado = null;

foreach ($usuarios as $usuario) {
    if ($usuario["email"] === $emailFiltro) {
        $usuarioEncontrado = $usuario;
        break;
    }
}

if ($usuarioEncontrado) {
    foreach ($usuarioEncontrado as $key => $value) {
        echo "$key: $value <br/>";
    }
} else {
    echo "Usuario nao encontrado no sistema!";
}


