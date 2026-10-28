<?php

class Calculadora{
    private $NumA;
    private $NumB;

    public function __construct($NumA, $NumB){
        $this->NumA = $NumA;
        $this->NumB = $NumB;
    }
    public function Dados(){
        $mensagem = '';
        $mensagem .= "\nNúmeros Lidos A = " . $this->NumA . " e B = " . $this->NumB;
        $mensagem .= "\n\nSaída: ";
        $mensagem .= "\nSoma: " . $this->Soma();
        $mensagem .= "\nSubstração: " . $this->Subtracao();
        $mensagem .= "\nMultiplicação: " . $this->Multiplicacao();
        $mensagem .= "\nDivisão: " . $this->Divisao();
        $mensagem .= "\nResto: " . $this->Resto() . "\n";
        return $mensagem;
    }
    public function Soma(){
        return $this->NumA + $this->NumB;
    }
    public function Subtracao(){
        return $this->NumA - $this->NumB;
    }
    public function Multiplicacao(){
        return $this->NumA * $this->NumB;
    }
    public function Divisao(){
        return $this->NumA / $this->NumB;
    }
    public function Resto(){
        return $this->NumA % $this->NumB;
    }
}

$Caculadora = new Calculadora(readline("Número 1: "), readline("Número 2: "));
print $Caculadora->Dados();


