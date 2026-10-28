<?php

class Aluno{
    private $nome;
    private $nota1;
    private $nota2;
    public function __construct($nome, $nota1,$nota2){
        $this->nome = $nome;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
    }
    public function Media(){
        return ($this->nota1 + $this->nota2)/2;
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
     * Get the value of nota1
     */
    public function getNota1()
    {
        return $this->nota1;
    }

    /**
     * Set the value of nota1
     */
    public function setNota1($nota1): self
    {
        $this->nota1 = $nota1;

        return $this;
    }

    /**
     * Get the value of nota2
     */
    public function getNota2()
    {
        return $this->nota2;
    }

    /**
     * Set the value of nota2
     */
    public function setNota2($nota2): self
    {
        $this->nota2 = $nota2;

        return $this;
    }
}

$alunos = [];

for ($i=0; $i < 3; $i++) { 
    print "\n";
    $alunos[$i] = new Aluno(readline("Nome do aluno " . $i+1 . ": "),readline("Nota 1 do aluno " . $i+1 . ": "),readline("Nota 2 do aluno: " . $i+1 . " "));
}
for ($i=0; $i < 3; $i++) { 
    print "\n\nALUNO " . $alunos[$i]->getNome() . "\n";
    print $alunos[$i]->Media();

    
}