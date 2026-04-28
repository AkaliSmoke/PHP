<?php
echo '<pre>';
$carrinho = ['Arroz', 'Sabão', 'Feijão', 'Balinhas'];
var_dump($carrinho);

echo '<hr>';

array_pop($carrinho);
var_dump($carrinho);

echo '<hr>';

array_shift($carrinho);
var_dump($carrinho);

echo '<hr>';

unset($carrinho[0]);
var_dump($carrinho);

echo '<hr>';

array_push($carrinho, 'tapete');
array_push($carrinho, 'Rodo');
var_dump($carrinho);

echo '<hr>';

array_unshift($carrinho, 'Microondas');
array_unshift($carrinho, 'Tapete');
var_dump($carrinho);

echo '<hr>';

$carrinho = array_unique($carrinho);
var_dump($carrinho);

/*
  array_pop: Remove a último elemento do array 
  array_shift: Remove o primeiro elemento do array
  unset: exclui a váriavel da memoria
  array_push: adiciona um ou mais elementos ao final de um array, aumentando seu tamanho
  array_unshift: adiciona um ou mais elementos no início de um array
  array_unique: remove valores duplicados de um array, mantendo apenas a primeira ocorrência de cada valor único 
*/
?>