<?php

class Pessoa{
    private $nome;
    private $sobrenome;
    private $idade;

    public function __construct($nome,$sbnome,$idade){
        $this->nome = $nome;
        $this->sobrenome = $sbnome;
        $this->idade = $idade;
    }

    public function __toString(){
        $mensagem = sprintf("NOME --- %s\nSOBRENOME - %s\nIDADE --- %d",$this->nome,$this->sobrenome,$this->idade);
        return $mensagem;
    }
    

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of sobrenome
     */
    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    /**
     * Set the value of sobrenome
     */
    public function setSobrenome($sobrenome): self
    {
        $this->sobrenome = $sobrenome;

        return $this;
    }

    /**
     * Get the value of idade
     */
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     */
    public function setIdade($idade): self
    {
        $this->idade = $idade;

        return $this;
    }
}

$Pessoas = [];
$resp = 0;
do{
    echo ("\n\n1-Cadastro\n2-Imprimir\n*-Sair\n");
    $reps = (int)readline(false);
    switch($reps){
        case 1:
            $Pessoas[] = new Pessoa(readline("Qual o nome da pessoa? "), readline("Qual o nome da sobrenome? "), readline("Qual a idade del*? "));
            break;
        case 2:
            echo "\n";
            foreach($Pessoas as $i){
                echo $i;
            }
            break;
    }
}while($reps == 1 || $reps == 2);