<?php 
$nomes = ['Rubens', 'Senac', 'Americana'];
echo '<pre>';
/*
$nomes[0] = strtoupper($nomes[0]);
$nomes[1] = strtoupper($nomes[1]);
$nomes[2] = strtoupper($nomes[2]);
var_dump($nomes);
*/

$nomes = array_map('transFormarParaMaiuscula', $nomes);

function transFormarParaMaiuscula($valor)
{
    return strtoupper($valor);
}

var_dump($nomes);
/*
    strtoupper: converte todos os caracteres alfabéticos de uma string para maiúsculas
    array_map: serve para mapear um array, ou seja, aplicar uma função específica em cada um dos elementos de um (ou mais) arrays e retornar um novo array com os valores modificados. 
*/
?>