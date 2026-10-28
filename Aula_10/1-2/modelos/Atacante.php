<?php
// velocidade podem fazer gols
require_once("Jogador.php");
class Atacante extends Jogador
{
    private $velocidade;

    public function __construct($nm, $idd, $nac, $vel)
    {
        parent::__construct($nm, $idd, $nac);
        $this->velocidade = $vel;
    }
    public function __tostring()
    {
        return parent::__tostring() . "Atacante";
    }

    public function fazerGol()
    {
        return "ele fez o gol";
    }

    public function listarAcoesEspecificas(): array
    {
        return [
            1 => "Fazer Gol"
        ];
    }

    public function executarAcaoEspecifica(int $acao): string
    {
        if ($acao === 1) {
            return $this->fazerGol();
        }
        return "Ação inválida para Atacante.";
    }
}