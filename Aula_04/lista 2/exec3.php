<?php

    $A = array();
    $B = array();
    $C = array();
    $D = array();

    for ($i = 0; $i < 5; $i++) {
        $A[$i] = (int)readline("Informe o Número " . $i+1 . "° de A:");
    }
    for ($i = 0; $i < 5; $i++) {
        $B[$i] = (int)readline("Informe o Número " . $i+1 . "° de B:");
    } 

    $C = array_intersect($A,$B);
    $D = array_merge($A,$B);

    print "\na interseção é : ";
    foreach ($C as $valor) {
        print $valor . ", ";
    }

    print "\ne a união é : ";
    foreach ($D as $valor) {
        print $valor . ", ";
    }

