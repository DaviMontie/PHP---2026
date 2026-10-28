<?php

class Pedido{
    private String $nomeCliente;
    private String $nomeGarcom;
    private Prato $prato;
    
    public function __construct($nmCli, $nmGar,$prato){
        $this->nomeCliente = $nmCli;
        $this->nomeGarcom = $nmGar;
        $this->prato = $prato;
    }

    public function __tostring(){
        return "O cliente $this->nomeCliente, foi atendido pelo garçom $this->nomeGarcom, pediu um
prato de " . $this->prato->getNome() . " no valor de R$ " . $this->prato->getValor();
    }
    /**
     * Get the value of nomeCliente
     */
    public function getNomeCliente(): String
    {
        return $this->nomeCliente;
    }

    /**
     * Set the value of nomeCliente
     */
    public function setNomeCliente(String $nomeCliente): self
    {
        $this->nomeCliente = $nomeCliente;

        return $this;
    }

    /**
     * Get the value of nomeGarcom
     */
    public function getNomeGarcom(): String
    {
        return $this->nomeGarcom;
    }

    /**
     * Set the value of nomeGarcom
     */
    public function setNomeGarcom(String $nomeGarcom): self
    {
        $this->nomeGarcom = $nomeGarcom;

        return $this;
    }

    /**
     * Get the value of Prato
     */
    public function getPrato(): Prato
    {
        return $this->prato;
    }

    /**
     * Set the value of Prato
     */
    public function setPrato(Prato $Prato): self
    {
        $this->prato = $Prato;

        return $this;
    }
}