<?php
$carrinho = [
    0 => 'Macarrão',
    1 => 'feijão',
    2 => 'arroz',
    3 => 'Batata'
];

echo '<pre>';
arsort($carrinho);
var_dump($carrinho);

echo '<hr>';

sort($carrinho);
var_dump($carrinho);

echo '<hr>';
/*
  arsort:ordena um array associativo em ordem decrescente (do maior para o menor), mantendo a correlação original entre chaves e valores
  soft: ordena os elementos de um array em ordem crescente (do menor para o maior, ou alfabética)
*/
?>