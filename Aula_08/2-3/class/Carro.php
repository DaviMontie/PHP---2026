<?php

class Carro{
    private $modelo;
    private $anoFabricado;
    private Fabricante $fabricante;

    public function __construct($md , $anFab, $fab){
        $this->modelo = $md;
        $this->anoFabricado = $anFab;
        $this->fabricante = $fab;
    }

    public function __tostring(){
        return $this->modelo . " - " . $this->anoFabricado;
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
     * Get the value of anoFabricado
     */
    public function getAnoFabricado()
    {
        return $this->anoFabricado;
    }

    /**
     * Set the value of anoFabricado
     */
    public function setAnoFabricado($anoFabricado): self
    {
        $this->anoFabricado = $anoFabricado;

        return $this;
    }

    /**
     * Get the value of fabricante
     */
    public function getFabricante(): Fabricante
    {
        return $this->fabricante;
    }

    /**
     * Set the value of fabricante
     */
    public function setFabricante(Fabricante $fabricante): self
    {
        $this->fabricante = $fabricante;

        return $this;
    }
}