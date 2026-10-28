<?php

class Veiculo{
    private $capacidade;
    private $vendidas;

    public function __construct($capacidade){
        $this->capacidade = $capacidade;
        $this->vendidas = 0;
    }
    function vender($quant){
        $dif = $this->capacidade - ($quant + $this->vendidas);
        if($dif >= 0){
            $this->vendidas += $quant;
            return true;
        } else {
            return false;
        }
    }
    /**
     * Get the value of capacidade
     */
    public function getCapacidade()
    {
        return $this->capacidade;
    }

    /**
     * Set the value of capacidade
     */
    public function setCapacidade($capacidade): self
    {
        $this->capacidade = $capacidade;

        return $this;
    }

    /**
     * Get the value of vendidas
     */
    public function getVendidas()
    {
        return $this->vendidas;
    }

    /**
     * Set the value of vendidas
     */
    public function setVendidas($vendidas): self
    {
        $this->vendidas = $vendidas;

        return $this;
    }
}

$Carro = new Veiculo(readline("Qual a capacidade? "));

do{
    print "\n\n" .  $Carro->getVendidas() . "/" .  $Carro->getCapacidade() . " Foram vendidas\n";
    $resp = (int)readline("Quantas passagens vc quer? ");
    if($resp == 0){
        break;
    }

    if($Carro->vender($resp)){
        print "Compra feita com sucesso";
    } else {
        print "Falha, o veiculo possui apenas " . $Carro->getCapacidade() . " assentos, NAO " . $Carro->getVendidas()+$resp;
    }
    
} while (true);

