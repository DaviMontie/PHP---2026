<?php
class retangulo{
    public $base;
    public $altura;
    function Area(){
        print $this->base * $this->altura;
    }
}

    $retangulos = [];
    for ($i = 0; $i < 5; $i++) {
        $retangulos[$i] = new retangulo();
        $retangulos[$i]->base = readline("Informe a Base do " . $i+1 . "° Retangulo: ");
        $retangulos[$i]->altura = readline("Informe a Altura do " . $i+1 . "° Retangulo: ");
        print("\n");
    }

    foreach ($retangulos as $i => $valor) {
        print "\nÁrea do Retangulo " . $i+1 . ": ";
        $retangulos[$i]->Area();
    }
    print("\n");