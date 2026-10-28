<?php

class Escola{
    private $nome;
    private $endereco;
    private $alunos;

    public function __construct($nome,$end,$alunos){
        $this->nome = $nome;
        $this->endereco = $end;
        $this->alunos = $alunos;
    }

    public function __toString(){
        $mensagem = sprintf("NOME ------ %s\nEND --- %s\nQUANT ALUNOS -- %d", $this->nome,$this->endereco,$this->alunos);
        return $mensagem;
    }

    public function getAlunos()
    {
        return $this->alunos;
    }
}

$escolas = [];

for ($i=0; $i < 3; $i++) { 
    $escolas[$i] = new Escola(readline("Qual o nome da escola? "),readline("Qual o endereço? "), readline("Quantos alunos tem? "));
    echo "\n";
}

$controle = 0; $maior = 0;
foreach ($escolas as $i){
    if($escolas[$maior]->getAlunos() <= $i->getAlunos()){
        $maior = $controle;
    }
    echo "\n\n" . $i;
    $controle++;
}

echo "\n\nO MAIOR É\n";

echo $escolas[$maior] . "\n";




