<?php
$estado = 'São/Paulo/SP';
$arrayEstado = explode('/', $estado);
echo "<pre>";
var_dump($arrayEstado);

echo '<hr>';

$info = 'São Paulo/SP/Brasil/Terra';
$arrayinfo = explode ('/', $info);
var_dump($arrayinfo);

/*
    explode: quebrar uma string em várias partes
*/
?>