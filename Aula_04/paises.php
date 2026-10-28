<?php
    $paises = [];

    class pais{
        public $nome;
        public $continente;
        public $qtdHabitantes;

        public function mostrar(){
            print $this->nome . " - " . $this->continente . " - " . $this->qtdHabitantes . "\n";
        }
    }
    for($i=0;$i<5;$i++){
        $paises[$i]= new pais;
        $paises[$i]->nome = readline("Nome: ");
        $paises[$i]->continente= readline("Continente: ");
        $paises[$i]->qtdHabitantes = readline("Quantidades habitantes: ");
    }
    $soma = 0;
    foreach($paises as $i=>$valor){
        $paises[$i]->mostrar();
        $soma += $paises[$i]->qtdHabitantes;
    }
    print "a soma dos habitantes é " . $soma . "\n";