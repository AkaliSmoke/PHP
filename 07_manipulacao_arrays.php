<?php

$infoEmpresa = [
    'nome' => 'Senac Americana',
    'funcionario' => 'Paulo Santos',
    'anoAtual' => 2026,
];

$infoCursos = [
    'cursos' => ['PHP', 'JS', 'Vue JS', 'Laravel'],
    'totalCursos' => 26,
];

echo ' <pre> ';
//var_dump(array_keys($infoEmpresa));
//var_dump(array_values($infoEmpresa));
//var_dump(count($infoEmpresa));
$infoEmpresa = array_merge($infoEmpresa, $infoCursos);
print_r($infoEmpresa);

/*
  array_keys: Retorna as chaves
  array_values: Mostra os valores
  count: É utilizada para contar todos os elementos de   um array
  array_merge: Ele serve para junta os arrays
*/
?>