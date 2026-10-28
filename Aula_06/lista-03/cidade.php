<?php

class Cidade{
    private $nome;
    private $populacao;
    private $area;

    public function __construct($nome, $populacao, $area){
        $this->nome = $nome;
        $this->populacao = $populacao;
        $this->area = $area;
    }

    public function Dados(){
        return "\nNome: " . $this->nome . "\nPopulação: " . $this->populacao . "\nÁrea:" . $this->area;
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
     * Get the value of populacao
     */
    public function getPopulacao()
    {
        return $this->populacao;
    }

    /**
     * Set the value of populacao
     */
    public function setPopulacao($populacao): self
    {
        $this->populacao = $populacao;

        return $this;
    }

    /**
     * Get the value of area
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Set the value of area
     */
    public function setArea($area): self
    {
        $this->area = $area;

        return $this;
    }
}

$cidade = new Cidade(readline("Nome da cidade: "), readline("População da cidade: "),readline("Área da cidade: "));

do{
    print ("\n\nCIDADE ---\n1 - Ver Cidade\n2 - Mudar Algo\n3 - Sair\n");
    $reps = readline(false);
    if ($reps == 3){
        break;
    }

    switch ($reps){
        case 1:
            print $cidade->Dados();
            break;
        case 2:
            print "\nMudar oq?\n1 - Nome\n2 - População\n3 - Área";
            $reps2 = readline(false);
            switch($reps2){
                case 1:
                    $cidade->setNome(readline("Nome: "));
                    break;
                case 2:
                    $cidade->setPopulacao(readline("População: "));
                    break;
                case 3:
                    $cidade->setArea(readline("Área: "));
                    break;
            }
            break;
    }

} while(true);