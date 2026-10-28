<?php
require_once("Veiculo.php");
class Caminhao extends Veiculo{
    private $qtdCarga;
    private $altura;

    public function __construct($mod,$velMax,$cor,$qtdCarga,$alt){
        parent::__construct($mod,$velMax,$cor);
        $this->qtdCarga = $qtdCarga;
        $this->altura = $alt;
    }
    public function __tostring(){
        return parent::__tostring() . "QTD de Carga: $this->qtdCarga || Altura: $this->altura";
    }

    

    /**
     * Get the value of qtdCarga
     */
    public function getQtdCarga()
    {
        return $this->qtdCarga;
    }

    /**
     * Set the value of qtdCarga
     */
    public function setQtdCarga($qtdCarga): self
    {
        $this->qtdCarga = $qtdCarga;

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