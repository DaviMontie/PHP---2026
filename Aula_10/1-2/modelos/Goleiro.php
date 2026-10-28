<?php
// altura defende
require_once("Jogador.php");
class Goleiro extends Jogador{
    protected $altura;

    public function __construct($nm, $idd, $nac,$alt){
        parent::__construct($nm,$idd,$nac);
        $this->altura = $alt;
    }
        public function __tostring(){
        return parent::__tostring() . "Goleiro";
    }
    public function defender(){
        return "ele defendeu";
    }

    public function listarAcoesEspecificas(): array {
    return [
        1 => "Defender"
    ];
}

public function executarAcaoEspecifica(int $acao): string {
    if ($acao === 1) {
        return $this->defender();
    }
    return "Ação inválida para Goleiro.";
}
}