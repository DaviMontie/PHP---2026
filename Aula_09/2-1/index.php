<?php

require_once("modelos/Goku.php");
require_once("modelos/MajinBoo.php");
require_once("modelos/Trunks.php");

$Goku = new Goku(
    [
        "Soco Dragão",
        "Kamehameha",
        "Kaioken x20",
        "Genki Dama"
    ],
    [
        "Base",
        "Super Saiyajin",
        "Super Saiyajin 3",
        "Instinto Superior"
    ]
);

$MajinBoo = new MajinBoo(
    [
        "Ataque de Extinção Humana",
        "Kamehameha Chocolate",
        "Raio Transmutador (Chocolate)",
        "Super Bola de Vanila"
    ],
    [
        "Majin Boo Gordo",
        "Super Boo",
        "Kid Boo"
    ]
);

$Trunks = new Trunks(
    [
        "Ataque Ardente (Burning Attack)",
        "Corte de Espada Luminosa",
        "Buster Flash",
        "Cúpula de Calor (Heat Dome Attack)"
    ],
    [
        "Base",
        "Super Saiyajin",
        "Super Saiyajin do Futuro (Ultra SSJ)",
        "Super Saiyajin da Raiva (SSJ Rage)"
    ]
);

$Guerreiros = array($Goku,$MajinBoo,$Trunks);

function Listar($Guer){
    foreach($Guer as $i => $val){
        echo $i + 1 . " - " . $val . "\n\n";
    }
}
function selectGuerreiro($Guerreiros){
    echo "\n\n------------------------------\nSELECIONE O PERSONAGEM\n------------------------------\n\n";
    Listar($Guerreiros);
    do{
        $resp = readline(false);
    } while(!($resp >= 1 && $resp <= 3));

    return $Guerreiros[$resp - 1];
}

do{
    $selec = selectGuerreiro($Guerreiros);
    
    echo "\n\n1 - Atacar\n2 - Transformar\n3 - DesTransformar\n\n";
    $resp = (int)readline(false);
    echo "\n";
    switch($resp){
        case 1:
            echo "------------------\nEle disse... \n";
            echo $selec->atacar();
            echo "\n------------------";
            break;
        case 2:
            $saida = $selec->transformar();
            if(is_null($saida)){
                echo "------------------\n";
                echo "Ele já na sua transformação máxima";
                echo "\n------------------";
                break;
            }

            echo "------------------\n";
            echo "O " . $selec->getNome() . " se transformou em " . $selec->getTransformacoes()[$selec->getTransAtual()];
            echo "\n------------------";

            break;
        case 3:
            $saida = $selec->Destransformar();

            if(is_null($saida)){
                echo "------------------\n";
                echo "Ele já na sua transformação base";
                echo "\n------------------";
                break;
            }

            echo "------------------\n";
            echo "O " . $selec->getNome() . " se Destransformou em " . $selec->getTransformacoes()[$selec->getTransAtual()];
            echo "\n------------------";
            break;
    }
} while($resp >= 1 && $resp<= 3);
