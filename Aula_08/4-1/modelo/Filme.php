<?php

class Filme{
    private $titulo;
    private $diretor;
    private $anoLancamento;
    private $genero;

    public function __construct($ti, $dir, $lan, $gen){
        $this->titulo = $ti;
        $this->diretor = $dir;
        $this->anoLancamento = $lan;
        $this->genero = $gen;
    }
    public function __toString(){
        return "titulo: $this->titulo\nDiretor: $this->diretor\nAno de lançamento: $this->anoLancamento\nGênero: $this->genero";
    }
    /**
     * Get the value of titulo
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     */
    public function setTitulo($titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of diretor
     */
    public function getDiretor()
    {
        return $this->diretor;
    }

    /**
     * Set the value of diretor
     */
    public function setDiretor($diretor): self
    {
        $this->diretor = $diretor;

        return $this;
    }

    /**
     * Get the value of anoLancamento
     */
    public function getAnoLancamento()
    {
        return $this->anoLancamento;
    }

    /**
     * Set the value of anoLancamento
     */
    public function setAnoLancamento($anoLancamento): self
    {
        $this->anoLancamento = $anoLancamento;

        return $this;
    }

    /**
     * Get the value of genero
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set the value of genero
     */
    public function setGenero($genero): self
    {
        $this->genero = $genero;

        return $this;
    }
}
