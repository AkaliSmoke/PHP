<?php
function escrever($texto){
    echo "{$texto} <br>";
}

//escrever('Algo')

function soma($n1, $n2){
    return $n1 + $n2;
}

//echo soma (12, 90);

function conta($n1, $n2, $taxa = 2){
    return ($n1 + $n2) * $taxa;
}
//echo conta (1,2);

function media($n1, $n2, $n3, $n4){
    return ($n1 + $n2 + $n3 + $n4) / 4;
}
echo media (7, 9, 4, 10);
?>