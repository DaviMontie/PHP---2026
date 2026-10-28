<?php

class Animal{
    protected $nome;
    protected $especie;

    public function __construct($nm, $esp){
        $this->nome = $nm;
        $this->especie = $esp;
    }

    public function getDados(){
        return "NOME: $this->nome\nESPECIE: $this->especie";
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
     * Get the value of especie
     */
    public function getEspecie()
    {
        return $this->especie;
    }

    /**
     * Set the value of especie
     */
    public function setEspecie($especie): self
    {
        $this->especie = $especie;

        return $this;
    }
}