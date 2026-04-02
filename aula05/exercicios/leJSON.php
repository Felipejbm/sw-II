<?php

$json = file_get_contents("usuarios.json");
$usuarios = json_decode($json, true);


foreach ($usuarios as $k => $v) {
    $i = 1;
    if ($i > 0) {
       echo "valor $k recebe: $v";
    }
   $i++;
}

?>