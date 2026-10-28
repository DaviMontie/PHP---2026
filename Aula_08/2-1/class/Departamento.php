<?php

class Departamento{
    private $nome;
    private $numeroSala;

    public function __construct($nm , $nmSala){
        $this->nome = $nm;
        $this->numeroSala = $nmSala;
    }

    public function __tostring(){
        return "DEPARTAMENTO\nNOME: $this->nome\nNÚMERO DA SALA: $this->numeroSala";
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
     * Get the value of numeroSala
     */
    public function getNumeroSala()
    {
        return $this->numeroSala;
    }

    /**
     * Set the value of numeroSala
     */
    public function setNumeroSala($numeroSala): self
    {
        $this->numeroSala = $numeroSala;

        return $this;
    }
}