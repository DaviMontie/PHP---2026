<?php
require_once("IGuerreiro.php");
class MajinBoo implements IGuerreiro
{
    private $nome;
    private array $ataques;
    private array $transformacoes;
    private $transAtual;

    public function __construct($atk, $trans)
    {
        $this->nome = "Majin Boo";
        $this->ataques = $atk;
        $this->transformacoes = $trans;
        $this->transAtual = 0;
    }
    public function __tostring(){
        return "NOME: Majin Boo\nESTADO: " . $this->transformacoes[$this->transAtual];
    }
    public function atacar(): ?string
    {
        if (empty($this->ataques)) {
            return null;
        }

        $chaveAleatoria = array_rand($this->ataques);

        return $this->ataques[$chaveAleatoria];
    }
    public function transformar(): ?string
    {
        $proximaTransformacao = $this->transAtual + 1;

        if ($proximaTransformacao >= count($this->transformacoes)) {
            return null;
        }

        $this->transAtual = $proximaTransformacao;

        return $this->transformacoes[$this->transAtual];
    }

    public function Destransformar(){
        $proximaTransformacao = $this->transAtual - 1;

        if ($proximaTransformacao < 0) {
            return null;
        }

        $this->transAtual = $proximaTransformacao;

        return $this->transformacoes[$this->transAtual];

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
     * Get the value of ataques
     */
    public function getAtaques(): array
    {
        return $this->ataques;
    }

    /**
     * Set the value of ataques
     */
    public function setAtaques(array $ataques): self
    {
        $this->ataques = $ataques;

        return $this;
    }

    /**
     * Get the value of transformacoes
     */
    public function getTransformacoes(): array
    {
        return $this->transformacoes;
    }

    /**
     * Set the value of transformacoes
     */
    public function setTransformacoes(array $transformacoes): self
    {
        $this->transformacoes = $transformacoes;

        return $this;
    }

    /**
     * Get the value of transAtual
     */
    public function getTransAtual()
    {
        return $this->transAtual;
    }

    /**
     * Set the value of transAtual
     */
    public function setTransAtual($transAtual): self
    {
        $this->transAtual = $transAtual;

        return $this;
    }
}