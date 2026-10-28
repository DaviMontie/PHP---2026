<?php
    $paises = [];
    function perguntar (){
        $var=[];
        $var["nome"] = readline("nome: ");
        $var["continente"] = readline("continente: ");
        $var["qntHabitantes"] = readline("Quantidads de Habitantes: ");
        return $var;
    }
    for($i=0;$i<5;$i++){
        $paises[]= perguntar();
    }

    $soma = 0;
    foreach($paises as $valor){
        print $valor["nome"] . " - ";
        print $valor["continente"] . " - ";
        print $valor["qntHabitantes"] . "\n";
        $soma += $valor["qntHabitantes"];
    }
    print "a soma dos habitantes é " . $soma;