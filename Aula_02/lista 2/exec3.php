<?php
    $numeros[] = 0;
    for($i=0;$i<10;$i++){
        $numeros[$i] = (int)readline("Informe o " . $i+1 . "° número: ");
    }
    echo "o menor é o " . min($numeros) . "\n";