<?php



require_once("modelo/Prato.php");
require_once("modelo/Pedido.php");

$Pratos = [
    new Prato(1, "Camarão à Milanesa", 110.00),
    new Prato(2, "Pizza Margherita", 80.00),
    new Prato(3, "Macarrão à Carbonara", 60.00),
    new Prato(4, "Bife à Parmegiana", 75.00),
    new Prato(5, "Risoto ao Funghi", 70.00)
];

$Pedidos = [];


function Listar_pedidos($Pedidos)
{
    foreach ($Pedidos as $i => $val) {
        echo ("\n\n---------- PEDIDO " . $i + 1 . "-------------\n");
        echo $val;
    }
}

function Listar_prato($Pratos)
{
    foreach ($Pratos as $i => $val) {
        echo ("\n\n---------- PRATO " . $i + 1 . "-------------\n");
        echo $val;
    }
}

function Verificar_Prato($resp, $pratos){
    foreach($pratos as $i =>$val){
        if($val->getNumero() == $resp){
            return $i;
        }
    }
}

while (true) {
    echo ("\n\n1 - Cadastrar pedido\n2 - Excluir Pedido\n3 - Listar\n4 - Total\n0 - Sair\n\n");
    $resp = readline(false);
    switch ($resp) {
        case 1:
            Listar_prato($Pratos);
            echo ("\n\n");
            $read = readline("Qual prato vc quer? ");
            if($read > 0 && $read <= 5){
                $Pedidos[] = new Pedido(readline("Nome do Cliente: "), readline("Nome do Garçom: "), $Pratos[Verificar_Prato($read, $Pratos)]);
            }
            break;
        case 2:
            Listar_pedidos($Pedidos);
            echo ("\n\n");
            $del = readline("Qual vc quer deletar? ");
            if ($del > 0 && $del <= count($Pedidos)) {
                $del--;
                array_splice($Pedidos, $del, 1);
            }
            break;
        case 3:
            Listar_pedidos($Pedidos);
            break;
        case 4:
            $soma = 0;
            foreach ($Pedidos as $i) {
                $soma += $i->getPrato()->getValor();
            }
            echo "O total é " . $soma . " Reais";
            break;
        case 0:
            die;
    }
}