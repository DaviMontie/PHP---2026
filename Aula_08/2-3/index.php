<?php

require_once("class/Carro.php");
require_once("class/Fabricante.php");

$Carros = [];
$Fabricantes = [];
$Fabricantes["VW"] = new Fabricante("Volkswagem", "VW");
$Fabricantes["GM"] = new Fabricante("Chevrolet", "GM");
$Fabricantes["F"] = new Fabricante("Fiat", "F");
$Fabricantes["RN"] = new Fabricante("Renault", "RN");

function SelecionarFabricante($Fabricantes): object
{
    echo "\n\n";
    foreach ($Fabricantes as $i => $valor) {
        echo $valor->getSigla() . " | " . $valor->getNome() . "\n";
    }
    $resp = 0;
    do {
        $resp = (string) readline(false);
    } while (!array_key_exists($resp, $Fabricantes));

    return $Fabricantes[$resp];
}

function Listar($Carros)
{
    if (count($Carros) > 0) {
        foreach ($Carros as $i => $val) {
            echo "\n\nCARRO - " . $i + 1;
            echo "\n" . $val . "\n";
            echo $val->getFabricante();
        }
    } else {
        echo "\n\nNenhum carro cadastrado";
    }

}

function SelecionarIndice($Carros)
{
    $resp = 0;
    do {
        $resp = readline("\n\nQual deseja excluir? 0 = cancelar\n");
        $resp--;
    } while (!($resp >= -1 && $resp <= count($Carros)));
    return $resp;
}

while(true){
    echo "\n\n1 - Cadastrar Carro\n2 - Excluir Carro\n3 - Listar Carro\n0 - sair\n";
    $resp = readline(false);
    switch ($resp) {
        case 0:
            die;
        case 1:
            $Carros[] = new Carro(readline("\n\nQual o modelo do carro? "), readline("Qual o ano da fabricação? "), SelecionarFabricante($Fabricantes));
            break;
        case 2:
            Listar($Carros);
            $indice = SelecionarIndice($Carros);
            if ($indice != -1) {
                array_splice($Carros, $indice);
            }
            break;
        case 3:
            Listar($Carros);
            break;
    }
}