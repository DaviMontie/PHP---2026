<?php
require_once ("class/Aluno.php");
require_once ("class/Turma.php");

$turma = new Turma("Turma 2", "TDS");

for ($i=0; $i < 5; $i++) { 
    $aluno = new Aluno(readline("Nome: "), readline("Idade: "), $turma);
    $turma->AdicionarAluno($aluno);
}

foreach($turma->getAlunos() as $i => $valor){
    echo "\n\n-----ALUNO " . $i+1 . "-----\n";
    echo $valor;
}
echo "\n";