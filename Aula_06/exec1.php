<?php

class Pessoa{
    private $nome;
    private $end;
    private $cidade;
    private $UF;
    private $altura;

    public function __construct($nome,$end,$cidade,$UF,$altura){
        $this->nome = $nome;
        $this->end = $end;
        $this->cidade = $cidade;
        $this->UF = $UF;
        $this->altura = $altura;
    }
    public function retornaApresentacao(){
        return "\nOlá mundo, sou $this->nome, resido no endereço $this->end, $this->cidade-$this->UF e possuo uma altura de $this->altura\n";
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
     * Get the value of end
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Set the value of end
     */
    public function setEnd($end): self
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Get the value of cidade
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Set the value of cidade
     */
    public function setCidade($cidade): self
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * Get the value of UF
     */
    public function getUF()
    {
        return $this->UF;
    }

    /**
     * Set the value of UF
     */
    public function setUF($UF): self
    {
        $this->UF = $UF;

        return $this;
    }

    /**
     * Get the value of altura
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set the value of altura
     */
    public function setAltura($altura): self
    {
        $this->altura = $altura;

        return $this;
    }
    
}

$Pessoas = [];

for ($i=0; $i < 2; $i++) { 
    $Pessoas[$i] = new Pessoa(readline("Seu nome: "), readline("Seu endereço: "),readline("Sua Cidade: "), readline("Seu UF: "),readline("Sua Altura: "));
}
for ($i=0; $i < 2; $i++) { 
    print $Pessoas[$i]->retornaApresentacao();

    
}

