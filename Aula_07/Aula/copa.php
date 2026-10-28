<?php 

class Selecao{
    private $pais;
    private $tecnico;
    private $esquema;

    public function __construct($pais,$tec,$esq){
        $this->pais = $pais;
        $this->tecnico = $tec;
        $this->esquema = $esq;
    }

    public function __toString(){
        $mensagem = sprintf("PAÍS --- %s\nTécnico --- %s\nEsquema --- %s", $this->pais,$this->tecnico,$this->esquema);
        return $mensagem;
    }
}

$selecao = [];

for ($i=0; $i < 3; $i++) { 
    $selecao[$i] = new Selecao(readline("Nome do pais: "), readline("Qual o tecnico?"), (string)readline("Qual a formação?"));;
    echo "\n";
}

do{
    print ("\n\n1- ver paises\nOutro- sair\n");
    $resp = readline(false);
    if($resp == 1){
        foreach($selecao as $i){
            echo "\n\n".$i;
        }
        
    }
}while($resp == 1);
