<?php

class Pessoa{
    private $nome;

    public function __construct($nome){
        $this->nome = $nome;
    }
    public function __toString(){
        $msg = "Nome: " . $this->nome;
        if ($this instanceof PessoaFisica) {
            $msg .= " - Idade: " . $this->getIdade() . " - CPF: " . $this->getCpf();
        } elseif ($this instanceof PessoaJuridica) {
            $msg .= " - Nome Fantasia: " . $this->getNomeFantasia() . " - CNPJ: " . $this->getCnpj();
        }
        return $msg;
        
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }
}