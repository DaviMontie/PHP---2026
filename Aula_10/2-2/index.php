<?php
require_once ("modelos/Curandeiro.php");
require_once ("modelos/Combatente.php");

$Curandeiro = new Curandeiro(readline("Nome do Mago (curandeiro): "), new Poder("Nulo" , 0), readline("Qual a força base dele?"));
$Combatente = new Combatente(readline("Nome do Mago (combatente): "), new Poder("Nulo" , 0), readline("Qual a força base dele?"));
function qualAtk($tipo){
    if($tipo == 1){
        echo "\n\n1 - Recupera energia -> forca Base\n\n2 - Recupera energia super -> forca Base + 20%";
    } else {
         echo "\n\n1 - Golpe nomal -> forca Base\n\n2 - Golpe Espacial -> forca Base + 20%";
    }
    $resp = 0;
    while(!($resp >= 1 && $resp <= 2)){
        $resp = readline(false);
    }
    return $resp;
}

do{
    echo "\n\n\n1 - Recuperar Curandeiro\n2 - Ataque Combatente\n3 - Listar\n0 - Sair";
    $resp = readline(false);
    switch($resp){
        case 1:
            $Curandeiro->LancarPoder(qualAtk(1));
            break;
        case 2:
            $Combatente->LancarPoder(qualAtk(2));
            break;
        case 3:
            echo "1 - Curandeiro\n\n2 - Combatente";
            while(!($ctrl >= 1 && $ctrl <= 2)){
                $ctrl = readline(false);
            }
            if($ctrl == 1){
                echo $Curandeiro;
            } else {
                echo $Combatente;
            }
        case 0:
            break 2;
    }
} while (true);
