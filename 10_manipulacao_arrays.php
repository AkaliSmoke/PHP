<?php 
$idades = [12, 14, 18, 20, 44, 50, 98, 78, 56];

//echo $idades[count($idades) - 1];
//echo end($idades);
$idadesFiltradas = array_filter($idades, function ($idade) {
    return $idade >= 18;
});

echo '<pre>';
var_dump($idadesFiltradas);
/*
    count: conta o número de elementos em um array ou propriedades em um objeto contável
    end: posiciona o ponteiro interno de um array no seu último elemento e retorna o valor desse elemento
    array_filter: é uma função para filtrar valores EXEMPLO: Quem tem 18 anos para cima pode beber bebida álcoolicas   
*/
?>