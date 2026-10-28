<?php 
    $num1 = readline("Informe o 1° Número: ");
    $num2 = readline("Informe o 2° Número: ");
    $soma = 0;
    for ($i=0; $i < $num2; $i++) { 
        $soma += $num1;
    }
    echo "\na multiplicação dos dois é $soma\n";
