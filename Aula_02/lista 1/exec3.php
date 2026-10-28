<?php

    $nome; $peso; $altura;
    for($i=0;$i<5;$i++){
        pergunta($nome,$peso,$altura);
        echo "$nome tem o peso $peso, altura $altura e IMC " . $peso/($altura*$altura);
    }
    

    function pergunta(&$nome, &$peso, &$altura){
        $nome=readline("\nInforme seu nome:");
        $peso=readline("\nInforme o peso:");
        $altura=readline("\nInforme a altura:\n");
    }