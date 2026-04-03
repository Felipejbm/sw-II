<?php

$json = file_get_contents("../1/produtos.json");
$produtos = json_decode($json, true);


$novoProduto = ['nome2' => "computador", 'preco2' => 1500, 'qndt2' => 20];

$produtos = array_merge($produtos, $novoProduto);

$jsonProduto = json_encode($produtos);

file_put_contents("produtos.json", $jsonProduto)

?>