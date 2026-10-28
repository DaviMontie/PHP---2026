<?php

class Turma{
    private $nome;
    private $curso;
    private array $alunos = [];

    public function __construct($nome, $cur){
        $this->nome = $nome;
        $this->curso = $cur;
    }
    public function adicionarAluno($aluno){
        array_push($this->alunos, $aluno);
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
     * Get the value of curso
     */
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * Set the value of curso
     */
    public function setCurso($curso): self
    {
        $this->curso = $curso;

        return $this;
    }

    /**
     * Get the value of alunos
     */
    public function getAlunos(): array
    {
        return $this->alunos;
    }

    /**
     * Set the value of alunos
     */
    public function setAlunos(array $alunos): self
    {
        $this->alunos = $alunos;

        return $this;
    }
}