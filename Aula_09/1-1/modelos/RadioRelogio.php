<?php

require_once("IRadio.php");
require_once("IRelogio.php");

class RadioRelogio implements IRadio, IRelogio{
    private $ligado;

    public function __construct(){
        $this->ligado = false;
    }
    
    public function ligar(){}
    public function desligar(){}
    public function mostrarHora(){}
    /**
     * Get the value of ligado
     */
    public function getLigado()
    {
        return $this->ligado;
    }

    /**
     * Set the value of ligado
     */
    public function setLigado($ligado): self
    {
        $this->ligado = $ligado;

        return $this;
    }
}