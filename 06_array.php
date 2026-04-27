<?php
//$carros = ['Uno' , 'Gol', 'Fusca', 'Civic'];
//echo $carros[2];

//$carroUm = ['Uno', 'Fiat', 'Branco'];
//echo $carroUm[2];

$carro_um = [
  'modelo' => 'Uno',
  'marca' => 'Fiat',
  'cor' => 'Branco',
];

echo $carro_um['cor'];
echo ' - ';
echo $carro_um['modelo'];
echo ' - ';
echo $carro_um['marca'];

$carro_dois = [
  'modelo' => 'Pulse',
  'marca' => 'Fiat',
  'cor' => 'Amarelo',
];

echo '<br>';
echo $carro_dois['cor'];
echo ' - ';
echo $carro_dois['modelo'];
echo ' - ';
echo $carro_dois['marca'];

$carro_tres = [
  'modelo' => 'Titano',
  'marca' => 'Fiat',
  'cor' => 'Vermelho',
];

echo '<br>';
echo $carro_tres['cor'];
echo ' => ';
echo $carro_tres['modelo'];
echo ' => ';
echo $carro_tres['marca'];
echo '<br>';

$carro_quatro = [
  'modelo' => 'Ducato',
  'marca' => 'Fiat',
  'cor' => 'cinza',
];

echo 'modelo: ', $carro_quatro ['modelo'], '<br>';
echo 'marca: ', $carro_quatro ['marca'], '<br>';
echo 'cor: ', $carro_quatro ['cor'], '<br>';

/*
Lembrete: falta terminar ....
*/

?>