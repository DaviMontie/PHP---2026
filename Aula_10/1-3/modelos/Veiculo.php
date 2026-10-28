<?php

class Veiculo{
    protected $modelo;
    protected $velocidadeMax;
    protected $cor;

    public function __construct($mod, $velMAX,$cor){
        $this->modelo = $mod;
        $this->velocidadeMax = $velMAX;
        $this->cor = $cor;
    }

    public function __tostring(){
        return "$this->modelo || MAX: $this->velocidadeMax || COR: $this->cor || ";
    }

    /**
     * Get the value of modelo
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set the value of modelo
     */
    public function setModelo($modelo): self
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get the value of velocidadeMax
     */
    public function getVelocidadeMax()
    {
        return $this->velocidadeMax;
    }

    /**
     * Set the value of velocidadeMax
     */
    public function setVelocidadeMax($velocidadeMax): self
    {
        $this->velocidadeMax = $velocidadeMax;

        return $this;
    }

    /**
     * Get the value of cor
     */
    public function getCor()
    {
        return $this->cor;
    }

    /**
     * Set the value of cor
     */
    public function setCor($cor): self
    {
        $this->cor = $cor;

        return $this;
    }
}