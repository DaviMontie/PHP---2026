<?php

require_once("Veiculo.php");
class Onibus extends Veiculo{
    private $qtdPassageiro;
    private $pesoMax;

    public function __construct($mod,$velMax,$cor,$qtdPass,$pesoMax){
        parent::__construct($mod,$velMax,$cor);
        $this->qtdPassageiro = $qtdPass;
        $this->pesoMax = $pesoMax;
    }

    public function __tostring(){
        return parent::__tostring() . "QTD de Passageiros: $this->qtdPassageiro || Peso Max: $this->pesoMax";
    }

    

    /**
     * Get the value of qtdPassageiro
     */
    public function getQtdPassageiro()
    {
        return $this->qtdPassageiro;
    }

    /**
     * Set the value of qtdPassageiro
     */
    public function setQtdPassageiro($qtdPassageiro): self
    {
        $this->qtdPassageiro = $qtdPassageiro;

        return $this;
    }

    /**
     * Get the value of pesoMax
     */
    public function getPesoMax()
    {
        return $this->pesoMax;
    }

    /**
     * Set the value of pesoMax
     */
    public function setPesoMax($pesoMax): self
    {
        $this->pesoMax = $pesoMax;

        return $this;
    }
}
