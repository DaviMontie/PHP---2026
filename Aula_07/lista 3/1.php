<?php

class Posto{
    private $estoque;
    private $historico;
    public function __construct(){
        $this->estoque = 0;
        $this->historico = [];
    }

    public function Abastecer($quant){
        if($quant <= $this->estoque){
            $this->estoque -= $quant;
            $this->historico[] = $quant;
            return true;
        } else {
            return false;
        }
    }
    public function Repor($quant){
        $this->estoque = $quant + $this->estoque;
    }

    public function Listar(){
        $contr = 1;
        foreach ($this->historico as $i){
            echo ("Abastecimento " . $contr++ . ": " . $i . " Litros\n");
        }
    }

    public function getEstoque()
    {
        return $this->estoque;
    }

    public function setEstoque($estoque): self
    {
        $this->estoque = $estoque;

        return $this;
    }
}

$Posto = new Posto;

do{
    echo "\n1 - Abastecer\n2 - Repor\n3 - listar\n* - Sair\n";
    $resp = (int)readline(false);
    switch($resp){
        case 1:
            $quant = readline("Litros p/Abastecer: ");
            if($Posto->Abastecer($quant)){
                echo "\nAbastecido!\n\n";
            } else {
                echo "Não tem gasolina suficiente, Falta " . $quant - $Posto->getEstoque() . " Litros";
            }
            break;
        case 2:
            $quant = readline("Litros p/Repor: ");
            $Posto->Repor($quant);
            echo "\nReposto!\n\n";
            break;

        case 3:
            $Posto->Listar();
            break;
    }
} while($resp >=1 && $resp <= 3);