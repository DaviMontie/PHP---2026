<?php
    function fatorial($nmr){
        $soma = $nmr;
        for($i = $nmr-1;$i > 0;$i--){
            $soma = $soma* $i;
        }
        return $soma;
    }

    $resp = readline("Qual o número? ");
    echo "O fatorial é " . fatorial($resp) . "\n";