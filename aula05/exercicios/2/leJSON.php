<?php

$contentJSON = file_get_contents("usuarios.json");

$usuariosArr = json_decode($contentJSON, true);

$usuarios = $usuariosArr["usuarios"];


foreach ($usuarios as $usuario ) {
   foreach ($usuario as $key => $value) {
      if($key != "id"){
         echo $key . " : " . $value . "<br/>";
      }
      
   }
   echo "<hr/>";
}
?>