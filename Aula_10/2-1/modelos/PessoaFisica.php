<?php

require_once 'Pessoa.php';

class PessoaFisica extends Pessoa{
    private Int $idade;
    private String $cpf;

    public function __construct($nome, $idade, $cpf){
        parent::__construct($nome);
        $this->idade = $idade;
        $this->cpf = $cpf;
    }
    public function __toString(){
        return parent::__toString();
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
     * Get the value of cpf
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set the value of cpf
     */
    public function setCpf($cpf): self
    {
        $this->cpf = $cpf;

        return $this;
    }
}