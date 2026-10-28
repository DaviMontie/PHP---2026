<?php

class Carro{
    private $modelo;
    private $marca;
    private $anoFabricado;
    private $VelMax;

    public function __construct($modelo, $marca, $ano, $vel){
        $this->modelo = $modelo;
        $this->marca = $marca;
        $this->anoFabricado = $ano;
        $this->VelMax = $vel;
    }
    public function Dados(){
        return $this->modelo . "-" . $this->marca . ", Fabricado em " . $this->anoFabricado . ", com velocidade máxima de " . $this->VelMax . "km/h";
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
     * Get the value of marca
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set the value of marca
     */
    public function setMarca($marca): self
    {
        $this->marca = $marca;

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
     * Get the value of VelMax
     */
    public function getVelMax()
    {
        return $this->VelMax;
    }

    /**
     * Set the value of VelMax
     */
    public function setVelMax($VelMax): self
    {
        $this->VelMax = $VelMax;

        return $this;
    }
}

$Carros = [];

function Analisar($var, $funcao){
    $controle = 0;
    for ($i=0; $i < 3; $i++) { 
        if(($var[$i]->getVelMax() > $var[$controle]->getVelMax() && $funcao == 'maior') || ($var[$i]->getVelMax() < $var[$controle]->getVelMax() && $funcao == 'menor')){
            $controle = $i;
        }
    }
    return $controle;
}


for ($i=0; $i < 3; $i++) { 
    echo "\n";
    $Carros[$i] = new Carro(readline("Modelo do carro: "), readline("Marca do carro: "), readline("Ano de frabicação do carro: "), readline("Velocidade Maxima:"));
}

$maior = Analisar($Carros, "maior");
$menor = Analisar($Carros, "menor");

print "\\nnO carro mais rapido é: " . $Carros[$maior]->Dados() . "\n";
print "\nO carro mais lento é: " . $Carros[$menor]->Dados() . "\n";
