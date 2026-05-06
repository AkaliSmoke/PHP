<?php
$name = 'Senac Americana - Cursos de TI';
echo strtoupper($name);
echo '<hr>';
echo strtolower($name);
echo '<hr>';
echo ucfirst(strtolower($name));
echo '<hr>';
echo ucwords(strtolower($name));
echo '<hr>';

/*
    srtoupper: transforma todos os caracteres em maiúsculo
    strtolower: transforma todos caracteres em minúsculas
    ucfirst: transforma o primeiro caractere em maiúsculo
    ucwords: converte o primeiro caractere de cada palavra em maiúscula
*/
?>