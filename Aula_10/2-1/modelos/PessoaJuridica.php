<?php

require_once 'Pessoa.php';

class PessoaJuridica extends Pessoa{
    private $nomeFantasia;
    private String $cnpj;

    public function __construct($nome, $nomeFantasia, $cnpj){
        parent::__construct($nome);
        $this->nomeFantasia = $nomeFantasia;
        $this->cnpj = $cnpj;
    }

    public function __toString(){
        return parent::__toString();
    }

    

    /**
     * Get the value of nomeFantasia
     */
    public function getNomeFantasia()
    {
        return $this->nomeFantasia;
    }

    /**
     * Set the value of nomeFantasia
     */
    public function setNomeFantasia($nomeFantasia): self
    {
        $this->nomeFantasia = $nomeFantasia;

        return $this;
    }

    /**
     * Get the value of cnpj
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * Set the value of cnpj
     */
    public function setCnpj($cnpj): self
    {
        $this->cnpj = $cnpj;

        return $this;
    }
}