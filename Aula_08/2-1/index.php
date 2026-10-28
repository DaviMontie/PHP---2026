<?php

require_once("class/Departamento.php");
require_once("class/Funcionario.php");

$funcionarios = [];

for ($i=0; $i < 5; $i++) { 
    echo "\n\nFUNCIONARIO " . $i+1 . "\n\n";
    $Dept = new Departamento(readline("Nome do nome departamento: "), readline("Numero da sala do departamento: "));
    echo "\n\n";
    $funcionarios[] = new Funcionario(readline("Nome do Funcionario: "), readline("Cargo do Funcionario: "), readline("Salario do Funcionario: "), $Dept);
}

foreach ($funcionarios as $i => $val){
    echo "\n\nFUNCIONARIO " . $i+1 . "\n\n";
    echo $val;
    echo "\n" . $val->getDepto();
}