<?php
    function calcular($a, $b, $c){
        return (($a*3) + ($b*5) + ($c*2))/10;
    }

    $a = readline("Informe o A: ");
    $b = readline("Informe o B: ");
    $c = readline("Informe o C: ");

    echo "a média ponderada é " . calcular($a, $b, $c) ."\n";