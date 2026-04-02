<?php

$json = file_get_contents("../1/produtos.json");
$produtos = json_decode($json, true);


$produtos['nome2'] = "Computador";
$produtos['preco2'] = 2000;
$produtos['qntd2'] = 5;

print_r($produtos);

$jsonProduto = json_encode($produtos);

file_put_contents("../1/produtos.json", $jsonProduto)


?>