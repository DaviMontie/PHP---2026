<?php
class Aluno{
    private $nome;
    private $idade;
    private Turma $turma;
    
    public function __construct($nome, $idd, $tur){
        $this->nome = $nome;
        $this->idade = $idd;
        $this->turma = $tur;
    }

    public function __tostring(){
        return "NOME: " . $this->nome . " | IDADE: " . $this->idade;
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
     * Get the value of turma
     */
    public function getTurma()
    {
        return $this->turma;
    }

    /**
     * Set the value of turma
     */
    public function setTurma($turma): self
    {
        $this->turma = $turma;

        return $this;
    }
}