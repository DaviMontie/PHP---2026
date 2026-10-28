
 <?php
// velocidade.podem fazer gols assistências.
require_once("Jogador.php");
class Meia extends Jogador{
    private $velocidade;

    public function __construct($nm, $idd, $nac,$vel){
        parent::__construct($nm,$idd,$nac);
        $this->velocidade = $vel;
    }
    public function __tostring(){
        return parent::__tostring() . "Meia";
    }
    public function fazerGol(){
        return "ele fez o gol";
    }
    public function darAssistencia(){
        return "ele fez uma assistencia";
    }

    public function listarAcoesEspecificas(): array {
    return [
        1 => "Fazer Gol",
        2 => "Dar Assistência"
    ];
}

public function executarAcaoEspecifica(int $acao): string {
    if ($acao === 1) {
        return $this->fazerGol();
    } elseif ($acao === 2) {
        return $this->darAssistencia();
    }
    return "Ação inválida para Meia.";
}
}
    