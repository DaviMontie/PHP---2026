<?php

$Dogs = [];
class Dog {
    public $nome;
    public $raca;
    public function mostrarTudo(){
        print $this->nome . " é da marca " . $this->raca;
    }
    public function latir(){
        print("Au\n");
    }
}

while(true){
    $resp = (int)readline("Oq ae: ");
    $Dog = new Dog();
    if($resp == 0){
        $Dog->latir();
    }
    
    if($resp == 2){
        $resp = readline("Qual Dog vc quer ver?");
        if($resp >= 0 && $resp <= (count($Dogs)-1)){
            print $Dogs[$resp]->mostrarTudo();
        }
    }
    if($resp == 1){
        $Dogs[] = new Dog;
        $Dogs[Count($Dogs)-1]->nome = readline("Nome do Dog ae: ");
        $Dogs[Count($Dogs)-1]->raca = readline("Nome do Dog ae: ");
    }
    
}