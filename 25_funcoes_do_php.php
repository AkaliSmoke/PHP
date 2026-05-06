<?php
$empresa = 'Senac Jaú';
echo "$empresa <br>";
$novaEmpresa = str_replace('Jaú', 'Americana', $empresa);
echo "$novaEmpresa <br>";
echo substr($novaEmpresa, 0, 4) . "<br>";
echo strlen($novaEmpresa);

/*
    str_replace: substitui todas as ocorrências de uma string de busca por uma string de substituição dentro de um texto original
    substr: extrai uma parte específica de uma string (texto), começando em uma posição definida e retornando um número determinado de caracteres
    strlen: calcula e retorna o número de caracteres em uma string
*/
?>