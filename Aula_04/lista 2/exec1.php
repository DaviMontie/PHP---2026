<?php
    $var = array();
    for ($i = 0; $i < 10; $i++){
        $var[$i] = (int)readline("Informe o Número " . $i+1 . "°:");
    }

    foreach($var as $valor){
        print $valor . " | ";
    }
    print("\nmédia aritimetica = " . array_sum($var)/10 . "\n");
