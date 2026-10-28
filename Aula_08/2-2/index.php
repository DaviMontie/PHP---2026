<?php

require_once("class/Atleta.php");
require_once("class/Pais.php");

$Atletas = [];

function Listar($Atletas)
{
    if (is_array($Atletas) && count($Atletas) > 0) {
        foreach ($Atletas as $i => $val) {
            echo "\n\nAtleta - " . ($i + 1);
            echo "\n" . $val . "\n";
        }
    } else {
        echo "\n\nNenhum Atleta cadastrado\n";
    }
}

function SelecionarIndice($Atletas){

    $resp = 0;
    $saida = true;
    while(true){
        $resp = readline("Qual deseja excluir?");
        foreach($Atletas as $i =>$valor){
            if($resp == $valor->getPais()){
                $saida = $i;
                return $saida;
            }
        }
    }
    
}

while(true){
    echo "\n\n1 - Cadastrar Atleta\n2 - Excluir Atleta\n3 - Listar Atleta\n0 - sair\n";
    $resp = readline(false);
    switch ($resp) {
        case 0:
            die;
        case 1:
            $pais = new Pais(readline("qual Nome do País? "), readline("qual o Continente dele? "));
            $Atletas[] = new Atleta(readline("\n\nQual o nome do atleta? "), readline("Qual a idade do atleta? "), readline("Qual o esporte do atleta? "), $pais);
            break;
        case 2:
            Listar($Atletas);
            $indice = SelecionarIndice($Atletas);
            if ($indice != -1) {
                array_splice($Atletas, $indice);
            }
            break;
        case 3:
            Listar($Atletas);
            break;
    }
}