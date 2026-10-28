<?php

class Prato{
    private $descricao;
    private $quantidade;
    private $valorUnitario;

    public function __construct($descricao,$quant,$val){
        $this->descricao = $descricao;
        $this->quantidade = $quant;
        $this->valorUnitario = $val;
    }

    public function __toString(){
        $mensagem = sprintf("\n\nDESCRIÇÃO --- %s\nQUANTIDADE --- %d\nVALOR P/U --- %d", $this->descricao,$this->quantidade,$this->valorUnitario);
        return $mensagem;
    }
    public function getValorTotal(){
        return ($this->valorUnitario * $this->quantidade);
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
     * Get the value of quantidade
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * Set the value of quantidade
     */
    public function setQuantidade($quantidade): self
    {
        $this->quantidade = $quantidade;

        return $this;
    }

    /**
     * Get the value of valorUnitario
     */
    public function getValorUnitario()
    {
        return $this->valorUnitario;
    }

    /**
     * Set the value of valorUnitario
     */
    public function setValorUnitario($valorUnitario): self
    {
        $this->valorUnitario = $valorUnitario;

        return $this;
    }
}

$Pratos = [];

for ($i=0; $i < 3; $i++) { 
    $Pratos[$i] = new Prato (readline("Descrição do prato: "), readline("Quantidade: "), readline("Valor unitario: "));
    echo("\n");
}
$soma = 0;

foreach($Pratos as $i){
    echo $i;
    $soma += $i->getValorTotal();
}

echo "\n\n Total gasto foi $$soma\n";