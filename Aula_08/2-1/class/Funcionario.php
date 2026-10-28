<?php

class Funcionario{
    private $nome;
    private $cargo;
    private $salario;
    private Departamento $depto;

    public function __construct($nm , $crg , $slr , $derp){
        $this->nome = $nm;
        $this->cargo = $crg;
        $this->salario = $slr;
        $this->depto = $derp;
    }

    public function __tostring(){
        return "NOME: $this->nome\nCARGO: $this->cargo\nSALÁRIO: $this->salario\n";
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
     * Get the value of cargo
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * Set the value of cargo
     */
    public function setCargo($cargo): self
    {
        $this->cargo = $cargo;

        return $this;
    }

    /**
     * Get the value of salario
     */
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * Set the value of salario
     */
    public function setSalario($salario): self
    {
        $this->salario = $salario;

        return $this;
    }

    /**
     * Get the value of depto
     */
    public function getDepto(): Departamento
    {
        return $this->depto;
    }

    /**
     * Set the value of depto
     */
    public function setDepto(Departamento $depto): self
    {
        $this->depto = $depto;

        return $this;
    }
}
