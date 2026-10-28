<?php
// possuem nome, idade e nacionalidadecorrer e chutar.

class Jogador{
    protected $nome;
    protected $idade;
    protected $nacionalidade;

    public function __construct($nm,$idd,$nac){
        $this->nome = $nm;
        $this->idade = $idd;
        $this->nacionalidade = $nac;
    }

    public function __tostring(){
        return "$this->nome || $this->idade || $this->nacionalidade || ";
    }

    public function correr(){
        return "ele correu";
    }
    public function chutar(){
        return "ele chutou";
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

    /**
     * Get the value of nacionalidade
     */
    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }

    /**
     * Set the value of nacionalidade
     */
    public function setNacionalidade($nacionalidade): self
    {
        $this->nacionalidade = $nacionalidade;

        return $this;
    }
}