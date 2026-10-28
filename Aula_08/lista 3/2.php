<?php

class Livro{
    private $titulo;
    private $autor;
    private $genero;
    private $quantidadePagina;
    private $valorPago;

    public function __construct($titulo,$autor,$genero,$quantPag,$vlPago){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->genero = $genero;
        $this->quantidadePagina = $quantPag;
        $this->valorPago = $vlPago;
    }

    public function __tostring(){
        return "TITULO: $this->titulo\nAUTOR: $this->autor\nGÊNERO: $this->genero\nQUANT PÁGINAS: $this->quantidadePagina\nVALOR PAGO: $$this->valorPago";
    }

     /**
     * Get the value of titulo
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     */
    public function setTitulo($titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of autor
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set the value of autor
     */
    public function setAutor($autor): self
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get the value of genero
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set the value of genero
     */
    public function setGenero($genero): self
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get the value of quantidadePagina
     */
    public function getQuantidadePagina()
    {
        return $this->quantidadePagina;
    }

    /**
     * Set the value of quantidadePagina
     */
    public function setQuantidadePagina($quantidadePagina): self
    {
        $this->quantidadePagina = $quantidadePagina;

        return $this;
    }

    /**
     * Get the value of valorPago
     */
    public function getValorPago()
    {
        return $this->valorPago;
    }

    /**
     * Set the value of valorPago
     */
    public function setValorPago($valorPago): self
    {
        $this->valorPago = $valorPago;

        return $this;
    }
    
}

$livros = [];

do{
    echo "\n\n1 - Novo Livro\n2 - Listar Livros\n3 - Buscar Livro\n4 - Total Gasto\n";
    $resp = readline(false);
    switch($resp){
        case 1:
            $livros[] = new Livro(readline("Título: "),readline("Autor: "),readline("Gênero: "),readline("Quant Páginas: "),readline("Valor Pago: "));
            echo "\n\nLivro Criado!\n";
            break;
        case 2:
            $contr = 1;
            foreach($livros as $i){
                echo "\n\nLIVRO " . $contr++ . "\n";
                echo $i;
            }
            break;
        case 3:
            $busca = readline("Qual Livro vc que ver?")-1;
            if(isset($livros[$busca])){
                echo $livros[$busca];
            } else {
                echo "Livro não encontrado";
            }
            break;
        case 4:
            $soma = 0;
            foreach($livros as $i){
                $soma += $i->getValorPago();
            }
            echo "\nO total gasto é de: " . $soma;
            break;
    }
} while ($resp >= 1 && $resp <= 4);
