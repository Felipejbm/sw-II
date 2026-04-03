<?php

$contentJSON = file_get_contents("../2/usuarios.json");
$usuariosArr = json_decode($contentJSON, true);

$usuarios = $usuariosArr["usuarios"];

$nomeRemover = "dandan";

foreach ($usuariosArr["usuarios"] as $index => $usuario) {
    if ($usuario["nome"] === $nomeRemover) {
        unset($usuariosArr["usuarios"][$index]);
    }
}

$usuariosArr["usuarios"] = array_values($usuariosArr["usuarios"]);

$jsonUsuarios = json_encode($usuariosArr);

file_put_contents("usuarios.json", $jsonUsuarios);