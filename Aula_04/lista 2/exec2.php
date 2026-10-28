<?php
    $var = array();
    $var2 = array();

    for ($i = 0; $i < 5; $i++) {
        $var[$i] = (string)readline("Informe uma frase " . $i+1 . "°:");
    }
    for ($i = 0; $i < 5; $i++) {
        $var02[$i] = $var[$i];
    }
    foreach ($var02 as $valor) {
        print $valor .", ";
    }
