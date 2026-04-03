<?php

$produto = [
    "nome"=>"celular",
    "preco"=>1500,
    "qntd"=>10
]  ;
  
$jsonProduto = json_encode($produto);

file_put_contents("produtos.json", $jsonProduto)
?>