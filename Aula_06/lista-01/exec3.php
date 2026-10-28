<?php 

class Livro{
    private $titulo;
    private $autor;
    private $genero;
    private $nmrPaginas;

    public function __construct($titulo, $autor, $generos, $nmrPaginas){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->genero = $generos;
        $this->nmrPaginas = $nmrPaginas;
    }

    public function getDados(){
        return "\nMAIOR LIVRO\nTitulo = $this->titulo\nAutor = $this->autor\nGênero = $this->genero\nQuantidade de Páginas = $this->nmrPaginas\n";
    }
    
    public function getTitulo()
    {
        return $this->titulo;
    }

   
    public function setTitulo($titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    
    public function setAutor($autor): self
    {
        $this->autor = $autor;

        return $this;
    }

    
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
     * Get the value of nmrPaginas
     */
    public function getNmrPaginas()
    {
        return $this->nmrPaginas;
    }

    /**
     * Set the value of nmrPaginas
     */
    public function setNmrPaginas($nmrPaginas): self
    {
        $this->nmrPaginas = $nmrPaginas;

        return $this;
    }
}
$livros = [];
for ($i=0; $i < 3; $i++) { 
    print "\n";
    $livros[$i] = new Livro(readline("Titulo do livro: "),readline("Gênero do livro: "),readline("Autor do livro: "),readline("Números de paginas do livro: "));
}

$maior = 0;
for ($i=0; $i < 3; $i++) { 
    if($livros[$maior]->getNmrPaginas() < $livros[$i]->getNmrPaginas()){
        $maior = $i;
    }
}

print $livros[$maior]->getDados();
