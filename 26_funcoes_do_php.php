<?php
$nome = 'Carlos Ferreira';

if (isset($nome)){
    echo $nome;
}else{
    echo 'Não existe!';
}

echo '<br>';

unset($nome);
if (isset($nome)){
    echo $nome;
}else{
    echo 'Não existe!';
}
/*
    isset: verifica se uma variável existe e senão existe retorna como falso
    unset: ele pega uma váriavel e acaba com ela 
*/
?>