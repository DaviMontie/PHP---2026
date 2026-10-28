<?php

class Poder{
    private $descricao;
    private $forca;

    public function __construct($desc,$forca){
        $this->descricao = $desc;
        $this->forca = $forca;
    }
    public function getForcaTotal($poder){
        return $poder * $this->forca;
    }
    

    /**
     * Get the value of descricao
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of forca
     */
    public function getForca()
    {
        return $this->forca;
    }

    /**
     * Set the value of forca
     */
    public function setForca($forca): self
    {
        $this->forca = $forca;

        return $this;
    }
}