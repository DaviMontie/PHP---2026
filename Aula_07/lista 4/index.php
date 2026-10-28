<?php

class Receita{
    private $descricao;
    private $valor;

    public function __construct($desc, $valor){
        $this->descricao = $desc;
        $this->valor = $valor;
    }

    public function __tostring(){
        return "Descrição: $this->descricao\nValor: $this->valor";
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of valor
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     */
    public function setValor($valor): self
    {
        $this->valor = $valor;

        return $this;
    }
}


class Despesa{
    private $descricao;
    private $valor;

    public function __construct($desc, $valor){
        $this->descricao = $desc;
        $this->valor = $valor;
    }

    public function __tostring(){
        return "Descrição: $this->descricao\nValor: $this->valor";
    }
    /**
     * Get the value of descricao
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of valor
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     */
    public function setValor($valor): self
    {
        $this->valor = $valor;

        return $this;
    }
}

function Soma($var){
    $soma = 0;
    foreach($var as $val){
        $soma += $val->getValor();
    }
    return $soma;
}

$receitas = [];
$despesas = [];

do {
    echo "\n\n   ------MENU------\n1 - Adicionar Receita\n2 - Adicionar Despesa\n3 - Listar Receitas\n4 - Listar Despesas\n5 - Sumarizar\n";
    $resp = (int)readline(false);
    switch ($resp){
        case 1:
            $receitas[] = new Receita(readline("Descrição: "),readline("Valor: "));
            break;
        case 2:
            $despesas[] = new Despesa(readline("Descrição: "),readline("Valor: "));
            break;
        case 3:
            if(!isset($receitas[0])){
                echo "Nenhuma Receita registrada";
                break;
            }
            foreach($receitas as $i => $val){
                echo("\n\nRECEITA $i\n$val");
            }
            break;
        case 4:
            if(!isset($despesas[0])){
                echo "Nenhuma Despesa registrada";
                break;
            }
            foreach($despesas as $i => $val){
                echo("\n\nDESPESA $i\n$val");
            }
            break;
        case 5:
            $valReceita = Soma($receitas);
            $valDespesa = Soma($despesas);

            echo "Total de receitas: R$$valReceita\n";
            echo "Total de despesas: R$$valDespesa\n";
            echo "Saldo: R$" . $valReceita - $valDespesa . "\n";
            break;

    }
} while ($resp >= 1 && $resp <= 5);