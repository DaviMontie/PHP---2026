<?php

    $var = array();
    for ($i = 0; $i < 10; $i++) {
        $var[$i] = (int)readline("Informe o Número " . $i+1 . "°:");
    }

    print "O menor é " . min($var) ."; E o maior é o " . max($var);
