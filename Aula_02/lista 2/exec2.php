<?php
    echo "informe os valores arrecadados / digite 0 para parar\n";
    $soma = 0;
    $resp = 0;
    while(true){
        $reps = (int)readline(false);
        if($reps != 0){
            $soma += $reps;
        } else {
            break;
        }
    }
    echo "O arrecadado foi " . $soma . " Reais\n";