<?php
require_once("Veiculo.php");
class CarroPassageiro extends Veiculo{
    private $qtdPassageiro;

    public function __construct($mod,$velMax,$cor,$qtdPass){
        parent::__construct($mod,$velMax,$cor);
        $this->qtdPassageiro = $qtdPass;
    }
    public function __tostring(){
        return parent::__tostring() . "QTD de Passageiros: $this->qtdPassageiro";
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
}