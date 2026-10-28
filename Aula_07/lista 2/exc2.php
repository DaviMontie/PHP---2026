<?php

class Trapezio{
    private $BaseMaior;
    private $BaseMenor;
    private $Altura;
    public function __construct($bsMa,$bsMe,$alt){
        $this->BaseMaior = $bsMa;
        $this->BaseMenor = $bsMe;
        $this->Altura = $alt;
    }
    public function __toString(){
        $mensagem = sprintf("\n\nBASE MAIOR --- %d\nBASE MENOR --- %d\nALTURA --- %d\nAREA --- %d", $this->BaseMaior,$this->BaseMenor,$this->Altura,$this->getArea());
        return $mensagem;
    }
    public function getArea(){
        return (($this->BaseMaior+$this->BaseMenor)*$this->Altura)/2;
    }
}

$trapezios =[];

for ($i=0; $i < 4; $i++) { 
    $trapezios[$i] = new Trapezio(readline("Base Maior: "), readline("Base Menor: "), readline("Altura: "));
    echo "\n";
}

$maior = $trapezios[0];

foreach($trapezios as $i){
    if($maior->getArea() <= $i->getArea()){
        $maior = $i;
    }
    echo $i;
}

echo "\n\nO MAIOR É\n";
echo $maior . "\n";