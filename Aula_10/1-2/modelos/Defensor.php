<?php

// altura desarmar e cabecear
require_once("Jogador.php");
class Defensor extends Jogador{
    protected $altura;

    public function __construct($nm, $idd, $nac,$alt){
        parent::__construct($nm,$idd,$nac);
        $this->altura = $alt;
    }
    public function __tostring(){
        return parent::__tostring() . "Defensor";
    }
    public function desarmar(){
        return "ele fez um desarme";
    }

    public function cabecear(){
        return "ele cabeceou";
    }

    public function listarAcoesEspecificas(): array {
    return [
        1 => "Desarmar",
        2 => "Cabecear"
    ];
}

public function executarAcaoEspecifica(int $acao): string {
    if ($acao === 1) {
        return $this->desarmar();
    } elseif ($acao === 2) {
        return $this->cabecear();
    }
    return "Ação inválida para Defensor.";
}
}
    