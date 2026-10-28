<?php
require_once("modelos/Veiculo.php");
require_once("modelos/Onibus.php");
require_once("modelos/CarroPassageiro.php");
require_once("modelos/Caminhao.php");

$Veiculos = array(
    new Onibus(readline("Modelo do Ônibus: "), readline("velocidade Máxima: "), readline("Cor: "),readline("Quantidade De passageiros: "), readline("Peso Máxima: ")),
    new CarroPassageiro(readline("Modelo do Carrp Passageiro: "), readline("velocidade Máxima: "), readline("Cor: "),readline("Quantidade De passageiros: ")),
    new Caminhao(readline("Modelo do Caminhao: "), readline("velocidade Máxima: "), readline("Cor: "),readline("Quantidade De carga: "), readline("Altura: "))
);

foreach($Veiculos as $i => $val){
    echo "\n\n" . $i+1 . "----------\n\n";
    echo $val;
}