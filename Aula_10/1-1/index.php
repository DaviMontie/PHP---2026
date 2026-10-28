<?php
require_once("modelos/Gato.php");
require_once("modelos/Cachorro.php");
require_once("modelos/Animal.php");
$Gato1 = new Gato(readline("Nome de Gato: "), readline("Especie Dele(a): "));
$Gato2 = new Gato(readline("Nome de Gato: "), readline("Especie Dele(a): "));
$Cachorro1 = new Cachorro(readline("Nome de Cachorro: "), readline("Especie Dele(a): "));
$Cachorro2 = new Cachorro(readline("Nome de Cachorro: "), readline("Especie Dele(a): "));

$Animais = array($Gato1,$Gato2,$Cachorro1,$Cachorro2);

foreach ($Animais as $i => $val){
    echo "\n\n------- ANIMAL N° " . $i+1 . "\n\n";
    echo $val->getDados(). "\n";
    if(is_a($val,'Gato')){
        echo $val->miar();
    } else {
        echo $val->Latir();
    }
}